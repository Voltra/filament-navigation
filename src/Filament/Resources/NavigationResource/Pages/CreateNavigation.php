<?php

namespace Voltra\FilamentNavigation\Filament\Resources\NavigationResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Voltra\FilamentNavigation\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;
use Voltra\FilamentNavigation\FilamentNavigation;

class CreateNavigation extends CreateRecord
{
    use HandlesNavigationBuilder;

    public static function getResource(): string
    {
        return FilamentNavigation::get()->getResource();
    }
}
