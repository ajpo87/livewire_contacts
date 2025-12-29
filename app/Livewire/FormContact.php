<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use App\Models\Contact;

class FormContact extends Component
{
    #[Validate('required|string|min:3|max:50')]
    public $name;
    #[Validate('required|string|min:3|max:50')]
    public $email;
    #[Validate('required|string|min:3|max:15')]
    public $phone;

    public $success = "";
    public $error = "";

    public function newContact()
    {
        $this->validate();
        /*$this->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email|min:3|max:100',
            'phone' => 'required|string|max:15',
        ]);*/

        /*Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        $this->reset(['name', 'email', 'phone']);

        $this->dispatch('new-contact');*/
        
        // Temporary store in log file
       // Log::info('New contact: ' . $this->name . ' - ' . $this->email . ' - ' . $this->phone);

       //store contact in database

       $result = Contact::firstOrCreate([
        'name' => $this->name,
        'email' => $this->email,
       ],
       [
        'phone' => $this->phone,
       ]);
       

         //if contact is created, show success message
         if ($result->wasRecentlyCreated) {
              //clear form
            $this->reset(['name', 'email', 'phone']);
          
            $this->success = "Contact created successfully";
            $this->dispatch('contactAdded');
        } else {
            $this->error = "Contact already exists";
        }


    }
}
