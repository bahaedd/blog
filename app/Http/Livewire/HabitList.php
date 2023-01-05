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

    public $personal_habits;
    public $work_habits;
    public $other_habits;
    public $state = [];

    public $updateMode = false;

    public function mount()
    {
        $this->personal_habits = Habit::where('category', '=', 'personal')->get();
        $this->work_habits = Habit::where('category', '=', 'work')->get();
        $this->other_habits = Habit::where('category', '=', 'others')->get();

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
        ]);
        }

        elseif($this->state['category'] == 'work'){
            Habit::create([
            'title' => $this->state['title'],
            'category' => $this->state['category'],
        ]);
        }

        else{
            Habit::create([
            'title' => $this->state['title'],
            'category' => $this->state['category'],
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

        $habit = Habit::find($id);

        $this->state = [
            'id' => $habit->id,
            'title' => $habit->title,
            'category' => $habit->category,
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
            'category' => 'required',
        ])->validate();


        if ($this->state['id']) {
            $habit = Habit::find($this->state['id']);
            $habit->update([
                'title' => $this->state['title'],
                'category' => $this->state['category'],
            ]);


            $this->updateMode = false;
            $this->reset('state');
            $this->mount();
            $this->alert('success', 'Habit Updated', [
            'position' => 'center',
            'toast' => true
            ]);
        }
    }

    public function completeHabit($id)
    {
        if($id){

            $this->habit = Task::find($id);
            $this->habit->completed = $this->habit->completed + 1;
            $this->habit->save();
            $this->mount();
            $this->alert('success', 'Habit Completed for today', [
            'position' => 'center',
            'toast' => true
             ]);
        }
    }


    public function delete($id)
    {
        if($id){
            Habit::where('id',$id)->delete();
            $this->mount();
            $this->alert('success', 'Habit Deleted', [
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
