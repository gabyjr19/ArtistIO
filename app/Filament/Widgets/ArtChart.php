<?php

namespace App\Filament\Widgets;

use App\Models\Art;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Livewire\Component;

class ArtChart extends  ChartWidget
{
    // Other component properties and methods, but no $isCachingForms


    protected static bool $isLazy = true;
    protected static ?string $heading = 'ArtWorks';
    public $isCachingForms = true; 
    protected static string $color = 'info';

protected static ?int $sort = 2;
   
 
    protected function getData(): array
{
    $data = Trend::model(Art::class)
        ->between(
            start: now()->startOfMonth(),
            end: now()->endOfMonth(),
        )
        ->perDay()
        ->count();
 
    return [
        'datasets' => [
            [
                'label' => 'Uploaded Arts',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    
}

    protected function getType(): string
    {
        return 'line';
    }
 
}
