<?php

namespace App\Http\Livewire\Admin\Signal;

use App\Traits\PingServer;
use Livewire\Component;

class Subscribers extends Component
{
    use PingServer;
    public $subscribers;

    public function mount()
    {
        $response = $this->fetctApi('/signal-subscribers');
        if ($response->failed()) {
            session()->flash('message', $response['message']);
            return redirect()->back();
        }
    }

    public function render()
    {
        return view('livewire.admin.signal.subscribers');
    }
}
