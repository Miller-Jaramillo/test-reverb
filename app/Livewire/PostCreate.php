<?php

namespace App\Livewire;

use App\Events\CreatedPost;
use App\Models\Post;
use Livewire\Component;

class PostCreate extends Component
{

    public $title;
    public $description;


    protected $listeners = ['messageClear' => 'clearMessage'];


    public function render()
    {
        return view('livewire.post-create');
    }

    public function submitForm()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        $post = new Post();
        $post->title = $this->title;
        $post->description = $this->description;
        $post->user_id = auth()->id();


        $post->save();

        $this->reset(['title', 'description']);


        session()->flash('message', 'Post saved!');

        // $this->js("alert('Post saved!')");


        // event(new CreatedPost($post->id));

        broadcast(new CreatedPost($post))->toOthers();



        $this->dispatch('post-created');

        $this->dispatch('messageClear', ['delay' => 5000]);


    }


}
