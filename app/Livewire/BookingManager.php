<?php

namespace App\Livewire;

use Livewire\Component;

class BookingManager extends Component
{
    public $startDate;
    public $endDate;

    public function createBooking()
    {

        session()->flash('message', 'Réservation créée avec succès !');
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}
