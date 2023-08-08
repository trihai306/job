<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\View\View;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    public function getFooter(): ?View
    {
        return view('filament.pages.settings.custom-header');
    }
}
