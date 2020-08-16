<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    public function render()
    {
        return view('livewire.contact-index', [
        	'contacts' => Contact::latest()->get()
        ]);
    }
}
