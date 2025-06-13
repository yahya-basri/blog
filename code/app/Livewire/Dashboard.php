<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }

    public $totalPosts;
    public function mount(){ 
        $this->totalPosts = Post::count(); 
    }
}
