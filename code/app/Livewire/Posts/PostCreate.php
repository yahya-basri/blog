<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class PostCreate extends Component
{
    public $name, $description;

    public function render()
    {
        return view('livewire.posts.post-create');
    }

    public function submit(){
        $this->validate([
            "name" => "required",
            "description" => "required",
        ]);

        Post::create([
            "name" => $this->name,
            "description" => $this->description,
        ]);

        return to_route("posts.index")->with("success");
    }
}