<?php

namespace App\Http\Livewire;
use Validator;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Personalinfo;
use Livewire\WithFileUploads;
use Auth;

class ResumeBuilder extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $personal_informations;
    public $educations;
    public $work;
    public $skills;
    public $statePersonalInfo = [];
    public $updateMode = false;


    public function mount()
    {
        // $this->personal_informations = PersonalInformations::where('resume_id', '=', '')->get();
        // dd(Auth::user()->resume->id);

    }

    public function storePersonalInfo()
    {
        // dd($this->statePersonalInfo);
        $validator = Validator::make($this->statePersonalInfo, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'birthday' => 'required',
            'nationality' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ])->validate();

        // $this->statePersonalInfo['resume_id'] = Auth::user()->resume->id;
        $this->statePersonalInfo['image']->store('profiles', 'public');
        Personalinfo::create([
            'resune_id' => Auth::user()->id,
            'name' => $this->statePersonalInfo['name'],
            'email' => $this->statePersonalInfo['email'],
            'address' => $this->statePersonalInfo['address'],
            'phone_number' => $this->statePersonalInfo['phone_number'],
            'birthday' => $this->statePersonalInfo['birthday'],
            'nationality' => $this->statePersonalInfo['nationality'],
            'image' => $this->statePersonalInfo['image'],
            'website' => $this->statePersonalInfo['website'],
            'linkedin' => $this->statePersonalInfo['linkedin'],
            'twitter' => $this->statePersonalInfo['twitter'],
            'github' => $this->statePersonalInfo['github'],
        ]);

        $this->reset('state');
        $this->mount();
        $this->alert('success', 'Personal Informations saved!', [
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
