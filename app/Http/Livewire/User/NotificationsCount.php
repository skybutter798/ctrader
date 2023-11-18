<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class NotificationsCount extends Component
{
    // create listener for notification count
    protected $listeners = ['updateNotification' => '$refresh'];

    public function render()
    {
        return view('livewire.user.notifications-count', [
            'notificationsCount' => auth()->user()->unreadNotifications->count()
        ]);
    }
}
