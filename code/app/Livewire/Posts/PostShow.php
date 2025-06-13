<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class PostShow extends Component
{
    public function render()
    {
        return view('livewire.posts.post-show');
    }

    public $posts;

    public function mount($id){
        $this->posts = Post::find($id); 
    }
}
