<?php

namespace App\Http\Livewire;
use App\Models\Task;
use Livewire\Component;
use Validator;
use Carbon\Carbon;

class TaskList extends Component
{
    public $tasks;
    public $completed_tasks;
    public $state = [];

    public $updateMode = false;

    public function mount()
    {
        $this->tasks = Task::where('completed_at', '=', null)->get();

        $completed_tasks = Task::where('completed_at', '!=', null)
            ->orderBy('completed_at', 'desc')
            ->get();

        foreach ($completed_tasks as $key => $task) {
            $date = Carbon::parse($task->completed_at);
            $task->completed_at = $date->format('m/d/Y g:i A');
        }

        $this->completed_tasks = $completed_tasks;
    }

    private function resetInputFields(){
        $this->reset('state');
    }

    public function store()
    {
        $validator = Validator::make($this->state, [
            'title' => 'required',
            'description' => 'max:30',
        ])->validate();

        Task::create($this->state);

        $this->reset('state');
        $this->mount();
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
        }
    }

    public function completeTask($id)
    {
        if($id){

            $this->task = Task::find($id);
            $this->task->completed_at = now()->toDateTimeString();
            $this->task->save();
            $this->mount();
        }
    }

    public function delete($id)
    {
        if($id){
            Task::where('id',$id)->delete();
            $this->tasks = Task::all();
            $this->mount();
        }
    }


    public function render()
    {
        return view('livewire.task-list');
    }
}
