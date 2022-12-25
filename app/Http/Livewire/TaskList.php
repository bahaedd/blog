<?php

namespace App\Http\Livewire;
use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks;
    public $state = [];

    public $updateMode = false;

    public function mount()
    {
        $this->tasks = Task::all();
    }

    private function resetInputFields(){
        $this->reset('state');
    }

    public function store()
    {
        $validator = Validator::make($this->state, [
            'title' => 'required',
        ])->validate();

        Task::create($this->state);

        $this->reset('state');
        $this->tasks = Task::all();
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
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->reset('state');
    }

    public function update()
    {
        $validator = Validator::make($this->state, [
            'title' => 'required',
        ])->validate();


        if ($this->state['id']) {
            $task = task::find($this->state['id']);
            $task->update([
                'title' => $this->state['title'],
                'description' => $this->state['description'],
            ]);


            $this->updateMode = false;
            $this->reset('state');
            $this->tasks = task::all();
        }
    }

    public function delete($id)
    {
        if($id){
            Task::where('id',$id)->delete();
            $this->tasks = Task::all();
        }
    }


    public function render()
    {
        return view('livewire.task-list');
    }
}
