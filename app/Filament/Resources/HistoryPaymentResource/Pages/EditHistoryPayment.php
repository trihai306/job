<?php

namespace App\Filament\Resources\HistoryPaymentResource\Pages;

use App\Filament\Resources\HistoryPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\View\View;

class EditHistoryPayment extends EditRecord
{
    protected static string $resource = HistoryPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getFooter(): ?View
    {
        return view('filament.pages.settings.custom-header');
    }
}
