<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtResource\Pages;
use App\Filament\Resources\ArtResource\RelationManagers;
use App\Models\Art;
use App\Models\Categories;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtResource extends Resource
{
    protected static ?string $model = Art::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    
    protected static ?string $navigationGroup = "Managing order";
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('name')
            ->label('Title')
            ->live('onBlur: true'),
            
           

            Select::make('categories_id')
                ->required()
                ->options(Categories::all()->pluck('name', 'id')),


            MarkdownEditor::make('description'),

            FileUpload::make('thumbnail')
                ->label('Upload Thumbnail')
                ->required()
                ->disk('public')
                ->directory('thumbnail')
                ->reorderable()
                ->maxFiles(5)
                ->directory('art'),
                
            TextInput::make('price')->label('Price')
            ->prefix('Ksh'),

            Section::make('status')->schema([
                Toggle::make('is_featured')
                ->default(true)
                ->label('Visibility'),
                
            ])
             
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                ->searchable()
              ->sortable(),

                TextColumn::make('name')
                ->label('Title')
                ->searchable()
                ->sortable(),

                ImageColumn::make('thumbnail')->label('ArtWork'),

                TextColumn::make('price')
                ->sortable()
                ->searchable()
                ->prefix('Ksh'),

                TextColumn::make('categories.name')->searchable()
                ->sortable(),

                TextColumn::make('description')->searchable(),
              
              

                TextColumn::make('created_at')->label('Published on')->date()
                ->searchable()
              ->sortable(),
            
          

               

            ])
              
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
               
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListArt::route('/'),
            'create' => Pages\CreateArt::route('/create'),
            'edit' => Pages\EditArt::route('/{record}/edit'),
        ];
    }
}
