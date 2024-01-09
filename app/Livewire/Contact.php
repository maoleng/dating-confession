<?php

namespace App\Livewire;

use App\Livewire\Forms\StoreContactRequest;
use Livewire\Component;

class Contact extends Component
{

    public StoreContactRequest $form;

    public function store(): void
    {
        $this->form->store();

        session()->flash('success', 'Liên hệ thành công, chúng tôi sẽ sớm phản hồi bạn.');
    }

}
