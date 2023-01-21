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
        $this->personal_informations = Auth::user()->personalinfo;

        if($this->personal_informations){
            $this->statePersonalInfo = [
            'name' => $this->personal_informations->name,
            'email' => $this->personal_informations->email,
            'address' => $this->personal_informations->address,
            'nationality' => $this->personal_informations->nationality,
            'phone_number' => $this->personal_informations->phone_number,
            'birthday' => $this->personal_informations->birthday,
            'linkedin' => $this->personal_informations->linkedin,
            'image' => $this->personal_informations->image,
            'website' => $this->personal_informations->website,
            'twitter' => $this->personal_informations->twitter,
            'github' => $this->personal_informations->github,
        ];
        $updateMode = true;
        }

    }

    public function storePersonalInfo()
    {
        $validator = Validator::make($this->statePersonalInfo, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'birthday' => 'required',
            'nationality' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ])->validate();

        $this->statePersonalInfo['image']->store('public');
        Personalinfo::create([
            'user_id' => Auth::user()->id,
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

        $this->mount();
        $this->alert('success', 'Personal Informations saved!', [
            'position' => 'center',
            'toast' => true
        ]);

    }

    public function updatePersonalInfo()
    {
       $validator = Validator::make($this->statePersonalInfo, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'birthday' => 'required',
            'nationality' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ])->validate();
       if ($this->statePersonalInfo['id']) {

            $Personalinfo = Personalinfo::find($this->statePersonalInfo['id']);
            $this->statePersonalInfo['image']->store('public');
            $Personalinfo->update([
                'user_id' => Auth::user()->id,
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

            $this->mount();
            $this->alert('success', 'Personal Informations saved!', [
                'position' => 'center',
                'toast' => true
            ]);
        }
    }


    public function render()
    {
        return view('livewire.resume-builder');
    }
}
