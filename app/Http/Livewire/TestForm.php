<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Livewire\Component;

class TestForm extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected function getFormStatePath(): string
    {
        return 'post';
    }

    public function mount(): void
    {
        $this->form->fill([]);
    }

    public function render()
    {
        return view('livewire.test-form');
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Grid::make(3)->schema([
              Forms\Components\FileUpload::make('image_1'),
            ]),
        ];
    }
}
