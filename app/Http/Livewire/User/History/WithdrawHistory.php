<?php

namespace App\Http\Livewire\User\History;

use App\Models\Withdrawal;
use Livewire\Component;
use Livewire\WithPagination;

class WithdrawHistory extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.user.history.withdraw-history', [
            'withdrawals' => Withdrawal::where('user', auth()->user()->id)->latest()->paginate(10),
        ]);
    }
}
