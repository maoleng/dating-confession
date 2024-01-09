<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class StoreContactRequest extends Form
{

    public $name = '';
    public $email = '';
    public $message = '';

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
            'email' => [
                'required',
                'email:rfc,dns',
            ],
            'message' => [
                'required',
            ],
        ];
    }

    public function store(): void
    {
        $this->validate();

        //todo save contact information

        $this->reset();
    }

}
