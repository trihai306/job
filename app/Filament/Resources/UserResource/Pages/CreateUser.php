<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\View\View;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    public function getFooter(): ?View
    {
        return view('filament.pages.settings.custom-header');
    }
}
