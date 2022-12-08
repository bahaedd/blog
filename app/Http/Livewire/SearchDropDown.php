<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class SearchDropDown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults = [];

        if(strlen($this->search >= 2)){
            $searchResults = Post::search($this->search)->get();
        }

        
        return view('livewire.search-drop-down', [
            "searchResults" => $searchResults
        ]);
    }
}
