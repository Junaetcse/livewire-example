<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\SupportTicket;

class Tickets extends Component
{
    public $active = 1;

    protected $listeners=[
        'ticketselected',
    ];

    public function ticketselected($ticket_id)
    {
        $this->active = $ticket_id;
    }
    public function render()
    {
        return view('livewire.tickets',[
            'tickets' => SupportTicket::all()
        ]);
    }
}
