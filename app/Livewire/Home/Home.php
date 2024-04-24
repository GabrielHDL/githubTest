<?php

namespace App\Livewire\Home;

use App\Models\Post;
use Livewire\Component;

class Home extends Component
{

    public $search = '';

    public function render()
    {

        if ($this->search) {

            $posts = Post::where('title', 'LIKE' , "%" . $this->search . "%")
            ->orWhere('body', 'LIKE', "%" . $this->search . "%")
            ->paginate(20);

        } else {
            $posts = Post::all();
        }

        return view('livewire.home.home', compact('posts'));
    }
}
