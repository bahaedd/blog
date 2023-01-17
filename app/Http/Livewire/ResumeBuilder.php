<?php

namespace App\Http\Livewire;
use Validator;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ResumeBuilder extends Component
{
    use LivewireAlert;

    public $personal_informations;
    public $educations;
    public $work;
    public $skills;
    public $state = [];
    public $updateMode = false;


    public function mount()
    {
        // $this->personal_informations = PersonalInformations::where('resume_id', '=', '')->get();

    }

    public function render()
    {
        return view('livewire.resume-builder');
    }
}
