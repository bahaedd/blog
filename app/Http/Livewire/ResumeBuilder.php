<?php

namespace App\Http\Livewire;
use Validator;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Personalinfo;
use App\Models\Education;
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
    public $stateEducation = [];
    public $updateMode = false;
    public $updateEdu = false;


    public function mount()
    {
        $this->personal_informations = Auth::user()->personalinfo;
        $this->educations = Education::where('user_id', '=', Auth::user()->id)->get();

        if($this->personal_informations){
            $this->statePersonalInfo = [
            'id' => $this->personal_informations->id,
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
        $this->updateMode = true;
        }

    }

    //Personal Infos
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

        $this->statePersonalInfo['image']->store('profiles', 'public');

        Personalinfo::create([
            'user_id' => Auth::user()->id,
            'name' => $this->statePersonalInfo['name'],
            'email' => $this->statePersonalInfo['email'],
            'address' => $this->statePersonalInfo['address'],
            'phone_number' => $this->statePersonalInfo['phone_number'],
            'birthday' => $this->statePersonalInfo['birthday'],
            'nationality' => $this->statePersonalInfo['nationality'],
            'image' =>  $this->statePersonalInfo['image']->hashName(),
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
     
            $this->statePersonalInfo['image']->store('profiles', 'public');

            $Personalinfo->update([
                'user_id' => Auth::user()->id,
                'name' => $this->statePersonalInfo['name'],
                'email' => $this->statePersonalInfo['email'],
                'address' => $this->statePersonalInfo['address'],
                'phone_number' => $this->statePersonalInfo['phone_number'],
                'birthday' => $this->statePersonalInfo['birthday'],
                'nationality' => $this->statePersonalInfo['nationality'],
                'image' =>  $this->statePersonalInfo['image']->hashName(),
                'website' => $this->statePersonalInfo['website'],
                'linkedin' => $this->statePersonalInfo['linkedin'],
                'twitter' => $this->statePersonalInfo['twitter'],
                'github' => $this->statePersonalInfo['github'],
            ]);

            $this->mount();
            $this->alert('success', 'Personal Informations updated!', [
                'position' => 'center',
                'toast' => true
            ]);
        }
    }

    //Education
    public function storeEducation()
    {
        $validator = Validator::make($this->stateEducation, [
            'degree' => 'required',
            'score' => 'required',
            'school' => 'required',
            'starts' => 'required',
            'ends' => 'required',
            'description' => 'required',
        ])->validate();

        Education::create([
            'user_id' => Auth::user()->id,
            'degree' => $this->stateEducation['degree'],
            'score' => $this->stateEducation['score'],
            'school' => $this->stateEducation['school'],
            'starts' => $this->stateEducation['starts'],
            'description' => $this->stateEducation['description'],
            'ends' => $this->stateEducation['ends'],
        ]);
        $this->reset('stateEducation');
        $this->mount();
        $this->alert('success', 'Degree saved!', [
            'position' => 'center',
            'toast' => true
        ]);

    }

    public function editEducation($id)
    {
       $this->updateEdu = true;

        $education = Education::find($id);

        $this->stateEducation = [
            'id' => $education->id,
            'user_id' => $education->user_id,
            'degree' => $education->degree,
            'score' => $education->score,
            'school' => $education->school,
            'starts' => $education->starts,
            'ends' => $education->ends,
            'description' => $education->description,
        ];
        $this->mount();
    }

    public function updateEducation()
    {
       $validator = Validator::make($this->stateEducation, [
            'degree' => 'required',
            'score' => 'required',
            'school' => 'required',
            'starts' => 'required',
            'ends' => 'required',
            'description' => 'required',
        ])->validate();


        if ($this->stateEducation['id']) {
            $education = Education::find($this->stateEducation['id']);
            $education->update([
                'degree' => $this->stateEducation['degree'],
                'score' => $this->stateEducation['score'],
                'school' => $this->stateEducation['school'],
                'starts' => $this->stateEducation['starts'],
                'description' => $this->stateEducation['description'],
                'ends' => $this->stateEducation['ends'],
            ]);


            $this->updateEdu = false;
            $this->reset('stateEducation');
            $this->mount();
            $this->alert('success', 'Degree Updated', [
            'position' => 'center',
            'toast' => true
            ]);
        }
    }

    public function deleteEducation($id)
    {
        if($id){
            Education::where('id',$id)->delete();
            $this->mount();
            $this->alert('success', 'Degree Deleted', [
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
