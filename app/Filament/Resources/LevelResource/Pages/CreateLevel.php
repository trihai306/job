<?php

namespace App\Filament\Resources\LevelResource\Pages;

use App\Filament\Resources\LevelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\View\View;

class CreateLevel extends CreateRecord
{
    protected static string $resource = LevelResource::class;

    public function getFooter(): ?View
    {
        return view('filament.pages.settings.custom-header');
    }
}
