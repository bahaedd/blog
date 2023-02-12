<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Validator;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Note;
use Auth;

class NoteList extends Component
{

    public $personal_notes;
    public $work_notes;
    public $other_notes;
    public $state = [];
    public $updateMode = false;


    public function render()
    {
        return view('livewire.note-list');
    }

    public function mount()
    {
        $this->personal_notes = Note::where('category', '=', 'personal')->get();
        $this->work_notes = Note::where('category', '=', 'work')->get();
        $this->other_notes = Note::where('category', '=', 'others')->get();

    }

    public function store()
    {
        $validator = Validator::make($this->state, [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
        ])->validate();

        if($this->state['category'] == 'personal'){
            Note::create([
            'user_id' => Auth::user()->id,
            'title' => $this->state['title'],
            'category' => $this->state['category'],
            'description' => $this->state['description'],
        ]);
        }

        elseif($this->state['category'] == 'work'){
            Notet::create([
            'user_id' => Auth::user()->id,
            'title' => $this->state['title'],
            'category' => $this->state['category'],
            'description' => $this->state['description'],
        ]);
        }

        else{
            Note::create([
            'user_id' => Auth::user()->id, 
            'title' => $this->state['title'],
            'category' => $this->state['category'],
            'description' => $this->state['description'],
        ]);
        }


        $this->reset('state');
        $this->mount();
        $this->alert('success', 'Note Added', [
            'position' => 'center',
            'toast' => true
        ]);

    }

    public function delete($id)
    {
        if($id){
            Note::where('id',$id)->delete();
            $this->mount();
            $this->alert('success', 'Note Deleted', [
            'position' => 'center',
            'toast' => true
             ]);
        }
    }
}
