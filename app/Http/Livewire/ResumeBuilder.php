<?php

namespace App\Http\Livewire;
use Validator;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Personalinfo;

class ResumeBuilder extends Component
{
    use LivewireAlert;

    public $personal_informations;
    public $educations;
    public $work;
    public $skills;
    public $statePersonalInfo = [];
    public $updateMode = false;


    public function mount()
    {
        // $this->personal_informations = PersonalInformations::where('resume_id', '=', '')->get();

    }

    public function storePersonalInfo()
    {
        $validator = Validator::make($this->statePersonalInfo, [
            'name' => 'required',
            'email' => 'required',
            'title' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'birthday' => 'required',
            'nationality' => 'required',
            'image' => 'required',
        ])->validate();

        Personalinfo::create($this->statePersonalInfo);

        $this->reset('state');
        $this->mount();
        $this->alert('success', 'Personal Inforlations saved!', [
            'position' => 'center',
            'toast' => true
        ]);

    }

    public function updatePersonalInfo()
    {
       // Update

    }


    public function render()
    {
        return view('livewire.resume-builder');
    }
}
