<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class PostIndex extends Component
{
    public function render()
    {
        $posts = Post::get();
        return view('livewire.posts.post-index', compact('posts'));
    }

    public function delete($id){
        $posts = Post::find($id);
        $posts->delete();
    }
}
