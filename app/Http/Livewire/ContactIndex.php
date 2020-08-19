<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    public $statusUpdate = false;

	protected $listeners = [
		'contactStored' => 'handleStored',
        'contactUpdated' => 'handleUpdated',
	];

    public function render()
    {
        return view('livewire.contact-index', [
        	'contacts' => Contact::latest()->get()
        ]);
    }

    public function getContact($id) 
    {
        $this->statusUpdate = true;
        $contact  = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    public function handleStored($contact)
    {
    	session()->flash('message', 'Contact ' . $contact['name'] . ' was stored!');
    }

    public function handleUpdated($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was updated!');
    }
}
