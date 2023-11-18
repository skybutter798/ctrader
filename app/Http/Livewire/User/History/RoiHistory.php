<?php

namespace App\Http\Livewire\User\History;

use App\Models\Tp_Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class RoiHistory extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.user.history.roi-history', [
            'profits' => Tp_Transaction::where('user', Auth::user()->id)->where('type', 'ROI')->latest()->paginate(10),
        ]);
    }
}
