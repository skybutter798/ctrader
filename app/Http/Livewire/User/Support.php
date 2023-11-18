<?php

namespace App\Http\Livewire\User;

use App\Models\Faq;
use Livewire\Component;

class Support extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.user.support', [
            'faqs' => Faq::latest()->search($this->search)->get(),
        ]);
    }
}
