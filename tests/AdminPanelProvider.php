<?php

namespace Voltra\FilamentNavigation\Tests;

use Filament\Panel;
use Filament\PanelProvider;
use Voltra\FilamentNavigation\FilamentNavigation;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->plugin(FilamentNavigation::make());
    }
}
