<?php

namespace App\Http\Livewire;

use App\Service\PhoneBook;
use Livewire\Component;

class LiveUserForm extends Component
{
    public $name;

    public function mount()
    {
       dd(PhoneBook::searchByCity('yOrk'));
    }

    public function render()
    {
        return view('livewire.live-user-form');
    }
}
