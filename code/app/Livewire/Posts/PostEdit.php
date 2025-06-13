<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class PostEdit extends Component
{
    public function render()
    {
        return view('livewire.posts.post-edit');
    }


    public $post , $name , $description;

    public function mount($id){
        $this->post = Post::find($id);
        $this->name = $this->post->name;
        $this->description = $this->post->description;
    } 

    public function submit(){
        $this->validate([
        "name" => "required",
        "description" => "required",
    ]);

    $this->post->name = $this->name;
    $this->post->description = $this->description;
    $this->post->save(); 

    return to_route("posts.index")->with("success");

    }
}
