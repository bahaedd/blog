<?php

namespace App\Http\Livewire;

use App\Models\Habit;
use App\Models\Task;
use Validator;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class HabitList extends Component
{
    use LivewireAlert;

    public $habits;
    public $state = [];

    public $updateMode = false;

    public function mount()
    {
        $this->habits = Habit::all();

    }

    private function resetInputFields(){
        $this->reset('state');
    }

    public function store()
    {
        $validator = Validator::make($this->state, [
            'title' => 'required',
            'category' => 'required',
        ])->validate();

        if($this->state['category'] == 'personal'){
            Habit::create([
            'title' => $this->state['title'],
            'category' => $this->state['category'],
            'category_icon' => 'people-outline',
        ]);
        }

        elseif($this->state['category'] == 'work'){
            Habit::create([
            'title' => $this->state['title'],
            'category' => $this->state['category'],
            'category_icon' => 'calendar-outline',
        ]);
        }

        else{
            Habit::create([
            'title' => $this->state['title'],
            'category' => $this->state['category'],
            'category_icon' => 'grid-outline',
        ]);
        }


        $this->reset('state');
        $this->mount();
        $this->alert('success', 'Habit Added', [
            'position' => 'center',
            'toast' => true
        ]);

    }

    public function edit($id)
    {
        $this->updateMode = true;

        $task = Task::find($id);

        $this->state = [
            'id' => $task->id,
            'title' => $task->title,
            'description' => $task->description,
        ];
        $this->mount();
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->reset('state');
        $this->mount();
    }

    public function update()
    {
        $validator = Validator::make($this->state, [
            'title' => 'required',
            'description' => 'max:30',
        ])->validate();


        if ($this->state['id']) {
            $task = task::find($this->state['id']);
            $task->update([
                'title' => $this->state['title'],
                'description' => $this->state['description'],
            ]);


            $this->updateMode = false;
            $this->reset('state');
            $this->mount();
            $this->alert('success', 'Task Updated', [
            'position' => 'center',
            'toast' => true
            ]);
        }
    }

    public function completeTask($id)
    {
        if($id){

            $this->task = Task::find($id);
            $this->task->completed_at = now()->toDateTimeString();
            $this->task->save();
            $this->mount();
            $this->alert('success', 'Task Completed', [
            'position' => 'center',
            'toast' => true
             ]);
        }
    }

    public function returnTask($id)
    {
        if($id){

            $this->task = Task::find($id);
            $this->task->completed_at = null;
            $this->task->save();
            $this->mount();
            $this->alert('success', 'Task Returned', [
            'position' => 'center',
            'toast' => true
            ]);
        }
    }

    public function delete($id)
    {
        if($id){
            Task::where('id',$id)->delete();
            $this->tasks = Task::all();
            $this->mount();
            $this->alert('success', 'Task Deleted', [
            'position' => 'center',
            'toast' => true
             ]);
        }
    }

    public function render()
    {
        return view('livewire.habit-list');
    }
}
