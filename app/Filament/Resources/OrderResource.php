<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Art;
use App\Models\Categories;
use App\Models\Order;
use App\Models\User;
use Filament\Tables\Actions\ButtonAction; 
use Filament\Forms\Components\Select;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Route;
use Filament\Tables\Actions;
use Filament\Tables\Filters;
use Filament\Tables\Columns;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Laravel\Prompts\select;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';
    protected static ?string $navigationGroup = "Managing order";
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
            TextInput::make('name')->label('Title'),
            
            Select::make('user_id')->relationship('User','name')->searchable()->preload(),

            Select::make('Art_name')
            ->required()
            ->options(Art::all()->pluck('name', 'id')),

             
                Select::make('Art_categories')
                ->required()
                ->options(Categories::all()->pluck('name', 'id')),

                Select::make('Payment Status')
                ->options([
                    'pending' => 'Pending',
                    'paid' => 'Paid',
                    'failed' => 'Failed',
            ]),
                Select::make('Art_price')
                ->required()
                ->options(Art::all()->pluck('price', 'id')),
            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('User.name')->searchable()
                ->sortable(),
                TextColumn::make('User.email')->searchable()->sortable(),
                TextColumn::make('User.phone'),
                TextColumn::make('payment_status')->searchable()->sortable()->default('pending'),
                TextColumn::make('Art.price'),
                
               
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\CreateAction::make(),
                    ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    
                       
                ]),
            ]);
    }
    public static function pay(Order $order)
    {
        // Implement payment logic here
        // Example: Update order status to 'paid'
        $order->update(['status' => 'paid']);
        
        // Optionally, redirect or return a response after payment
        return redirect()->route('filament.resources.orders.index')->with('success', 'Order paid successfully!');
    }

    public static function bulkPay(array $selectedOrders)
    {

        Order::whereIn('id', $selectedOrders)->update(['status' => 'paid']);
        
         return redirect()->route('filament.resources.orders.index')->with('success', 'Selected orders paid successfully!');
    }
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
