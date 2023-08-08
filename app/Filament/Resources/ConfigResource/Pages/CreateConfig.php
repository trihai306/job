<?php

namespace App\Filament\Resources\ConfigResource\Pages;

use App\Filament\Resources\ConfigResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\View\View;

class CreateConfig extends CreateRecord
{
    protected static string $resource = ConfigResource::class;

    public function getFooter(): ?View
    {
        return view('filament.pages.settings.custom-header');
    }
}
