<?php

namespace App\Http\Livewire\User;

use App\Traits\PingServer;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class SystemCourses extends Component
{
    use WithPagination, PingServer;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $categories = [];
    public $courses = [];
    public $lessons;
    public $category = 'Artificial Intelligcence';
    protected $queryString = ['search'];

    public function mount()
    {
        $responseCat = $this->fetctApi('/categories');
        $responseCourses = $this->fetctApi('/courses');

        if ($responseCourses->failed()) {
            session()->flash('message', 'Something went wrong, please try again later. If the problem persists, contact support.');
            return redirect()->route('dashboard');
        }
        $cat = json_decode($responseCat);
        $cour = json_decode($responseCourses);

        $this->courses = $cour->data->courses->data;
        $this->categories = $cat->data->categories;
    }

    public function render()
    {
        return view('livewire.user.system-courses');
    }

    public function changeCategory($cat)
    {
        $this->category = $cat == 'others' ? null : $cat;
    }
}
