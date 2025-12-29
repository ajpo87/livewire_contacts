<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Contact;
use Livewire\Attributes\On;

class Contacts extends Component
{
    public $contacts;

    public function mount()
    {
        $this->contacts = Contact::all();
    }
    // update contact with livewire
    #[On('contactAdded')]
    public function updateConctactList(){
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.contacts');
    }
}
