<?php

namespace App\Livewire;

use App\Events\CreatedPost;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class PostView extends Component
{
    public $posts;

    // protected $listeners = ['post-created' => 'refreshPosts'];

    public function render()
    {
        $this->posts = Post::all(); // O cualquier lógica para obtener los posts

        return view('livewire.post-view');
    }

    #[On('post-created')]
    public function refreshPosts()
    {



        // Este método se ejecutará cuando se emita el evento 'postCreated'
        // Aquí puedes actualizar la lista de posts si es necesario
        $this->posts = Post::all(); // O cualquier lógica para obtener los posts
    }

}
