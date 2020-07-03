<?php

namespace App\Http\Livewire;

use App\Service\PhoneBook;
use foo\bar;
use Livewire\Component;

class LiveUserForm extends Component
{
    public $name;
    public $contacts =[];

    public function updatedName($value)
    {
        if(!empty($this->name)){

            sleep(2);
            $results = PhoneBook::searchByName($value);
            if(empty($results)){
                session()->flash('message', "Aucun contact trouvé {$this->name}");
            }
            $this->contacts = $results;
        }
    }

    public function render()
    {
        return view('livewire.live-user-form');
    }
}
