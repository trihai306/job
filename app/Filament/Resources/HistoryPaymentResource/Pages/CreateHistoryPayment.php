<?php

namespace App\Filament\Resources\HistoryPaymentResource\Pages;

use App\Filament\Resources\HistoryPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\View\View;

class CreateHistoryPayment extends CreateRecord
{
    protected static string $resource = HistoryPaymentResource::class;

    public function getFooter(): ?View
    {
        return view('filament.pages.settings.custom-header');
    }
}
