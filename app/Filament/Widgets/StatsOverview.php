<?php

namespace App\Filament\Widgets;

use App\Models\Art;
use App\Models\Order;
use App\Models\User;
use Faker\Provider\ar_EG\Payment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Validation\Rules\Enum;
use PhpParser\Node\Stmt\Label;


class StatsOverview extends BaseWidget
{
    // protected static ?string $pollingInterval='15s';
    protected static bool $islazy = true;
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make(label:'Total Users', value:User::count())
            ->description(description:'Increase in Customers')
            ->descriptionIcon(icon:'heroicon-o-arrow-trending-up')
       ->color(color:'success')
    ->chart([7,8,26,48,80,90,125]),

    Stat::make(label:'Arts', value:Art::count())
    ->description(description:'Increase in Customers')
    ->descriptionIcon(icon:'heroicon-o-arrow-trending-up')
->color(color:'success')
->chart([7,8,26,48,80,90,125]),

    Stat::make(label:'Orders Stats', value:Order::count())
    ->description(description:'Increase in Customers')
    ->descriptionIcon(icon:'heroicon-o-arrow-trending-up')
->color(color:'danger')
->chart([7,8,26,48,80,90,125]),


    


        ];}
}
