<?php

namespace App\Http\Livewire;
use Validator;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Personalinfo;
use App\Models\Education;
use App\Models\Work;
use App\Models\Skill;
use App\Models\Summary;
use App\Models\Language;
use App\Models\Project;
use Livewire\WithFileUploads;
use Auth;

class ResumeBuilder extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $personal_informations;
    public $educations;
    public $works;
    public $skills;
    public $summary;
    public $languages;
    public $projects;
    public $statePersonalInfo = [];
    public $stateEducation = [];
    public $stateWork = [];
    public $stateSkill = [];
    public $stateSummary = [];
    public $stateLang = [];
    public $stateProject = [];
    public $updateMode = false;
    public $updateEdu = false;
    public $updateWork = false;
    public $updateSkill = false;
    public $updateSummary = false;
    public $updateLang = false;
    public $updateProject = false; 


    public function mount()
    {
        $this->personal_informations = Auth::user()->personalinfo;
        $this->educations = Education::where('user_id', '=', Auth::user()->id)->get();
        $this->works = Work::where('user_id', '=', Auth::user()->id)->get();
        $this->skills = Skill::where('user_id', '=', Auth::user()->id)->get();
        $this->summary = Auth::user()->summary;
        $this->languages = Language::where('user_id', '=', Auth::user()->id)->get();
        $this->projects = Project::where('user_id', '=', Auth::user()->id)->get();

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

        if($this->summary){
            $this->stateSummary = [
            'id' => $this->summary->id,
            'summary' => $this->summary->summary,
            'job_title' => $this->summary->job_title,
        ];
        $this->updateSummary = true;
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
        $this->mount();
        $this->alert('success', $this->stateEducation['degree'].'Degree saved!', [
            'position' => 'center',
            'toast' => true
        ]);
        $this->reset('stateEducation');

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
            $this->mount();
            $this->alert('success', $this->stateEducation['degree'].'Degree Updated', [
            'position' => 'center',
            'toast' => true
            ]);
            $this->reset('stateEducation');
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

    //Work experience
    public function storeWork()
    {
        $validator = Validator::make($this->stateWork, [
            'company' => 'required',
            'profession' => 'required',
            'starts' => 'required',
            'ends' => 'required',
            'description' => 'required',
        ])->validate();

        Work::create([
            'user_id' => Auth::user()->id,
            'position' => $this->stateWork['profession'],
            'company' => $this->stateWork['company'],
            'description' => $this->stateWork['description'],
            'starts' => $this->stateWork['starts'],
            'ends' => $this->stateWork['ends'],
        ]);
        $this->mount();
        $this->alert('success', $this->stateWork['profession'].' Experience Saved', [
            'position' => 'center',
            'toast' => true
        ]);
        $this->reset('stateWork');
    }

    public function editWork($id)
    {
       $this->updateWork = true;

        $work = Work::find($id);

        $this->stateWork = [
            'id' => $work->id,
            'user_id' => $work->user_id,
            'profession' => $work->position,
            'company' => $work->company,
            'description' => $work->description,
            'starts' => $work->starts,
            'ends' => $work->ends,
        ];
        $this->mount();
    }

    public function updateWork()
    {
       $validator = Validator::make($this->stateWork, [
            'company' => 'required',
            'profession' => 'required',
            'starts' => 'required',
            'ends' => 'required',
            'description' => 'required',
        ])->validate();


        if ($this->stateWork['id']) {
            $work = Work::find($this->stateWork['id']);
            $work->update([
                'user_id' => Auth::user()->id,
                'position' => $this->stateWork['profession'],
                'company' => $this->stateWork['company'],
                'description' => $this->stateWork['description'],
                'starts' => $this->stateWork['starts'],
                'ends' => $this->stateWork['ends'],
            ]);


            $this->updateWork = false;
            $this->mount();
            $this->alert('success', $this->stateWork['profession'].' Experience Updated', [
            'position' => 'center',
            'toast' => true
            ]);
            $this->reset('stateWork');
        }
    }

    public function deleteWork($id)
    {
        if($id){
            Work::where('id',$id)->delete();
            $this->mount();
            $this->alert('success', 'Work Experience Deleted', [
            'position' => 'center',
            'toast' => true
             ]);
        }
    }

    //Skills
    public function storeSkill()
    {
        $validator = Validator::make($this->stateSkill, [
            'title' => 'required',
            'level' => 'required',
        ])->validate();

       Skill::create([
            'user_id' => Auth::user()->id,
            'title' => $this->stateSkill['title'],
            'level' => $this->stateSkill['level'],
        ]);
        $this->mount();
        $this->alert('success', $this->stateSkill['title'].' Skill Saved', [
            'position' => 'center',
            'toast' => true
        ]);
        $this->reset('stateSkill');
    }

    public function editSkill($id)
    {
       $this->updateSkill = true;

        $skill = Skill::find($id);

        $this->stateSkill = [
            'id' => $skill->id,
            'user_id' => $skill->user_id,
            'title' => $skill->title,
            'level' => $skill->level,
        ];
        $this->mount();
    }

    public function updateSkill()
    {
       $validator = Validator::make($this->stateSkill, [
            'title' => 'required',
            'level' => 'required',
        ])->validate();


        if ($this->stateSkill['id']) {
            $skill = Skill::find($this->stateSkill['id']);
            $skill->update([
                'user_id' => Auth::user()->id,
                'title' => $this->stateSkill['title'],
                'level' => $this->stateSkill['level'],
            ]);


            $this->updateSkill = false;
            $this->mount();
            $this->alert('success', $this->stateSkill['title'].' Skill Updated', [
            'position' => 'center',
            'toast' => true
            ]);
            $this->reset('stateSkill');
        }
    }

    public function deleteSkill($id)
    {
        if($id){
            Skill::where('id',$id)->delete();
            $this->mount();
            $this->alert('success', 'Skill Deleted', [
            'position' => 'center',
            'toast' => true
             ]);
        }
    }

    //Summary
    public function storeSummary()
    {
        $validator = Validator::make($this->stateSummary, [
            'summary' => 'required',
        ])->validate();

        Summary::create([
            'user_id' => Auth::user()->id,
            'summary' => $this->stateSummary['summary'],
            'job_title' => $this->stateSummary['job_title'],
        ]);

        $this->mount();
        $this->alert('success', 'Personal Informations saved!', [
            'position' => 'center',
            'toast' => true
        ]);

    }

    public function updateSummary()
    {
       $validator = Validator::make($this->stateSummary, [
            'summary' => 'required',
        ])->validate();
       if ($this->stateSummary['id']) {

            $Summary = Summary::find($this->stateSummary['id']);

            $Summary->update([
                'user_id' => Auth::user()->id,
                'summary' => $this->stateSummary['summary'],
                'job_title' => $this->stateSummary['job_title'],
            ]);

            $this->mount();
            $this->alert('success', 'Summary updated!', [
                'position' => 'center',
                'toast' => true
            ]);
        }
    }

    //Languages
    public function storeLang()
    {
        $validator = Validator::make($this->stateLang, [
            'language' => 'required',
        ])->validate();

        Language::create([
            'user_id' => Auth::user()->id,
            'language' => $this->stateLang['language'],
        ]);

        $this->mount();
        $this->alert('success', 'Language saved!', [
            'position' => 'center',
            'toast' => true
        ]);

    }

    public function deleteLang($id)
    {
        if($id){
            Language::where('id',$id)->delete();
            $this->mount();
            $this->alert('success', 'Language Deleted', [
            'position' => 'center',
            'toast' => true
             ]);
        }
    }

    //Projects
    public function storeProject()
    {
        $validator = Validator::make($this->stateProject, [
            'title' => 'required',
            'tools' => 'required',
            'date' => 'required',
            'description' => 'required',
        ])->validate();

        Project::create([
            'user_id' => Auth::user()->id,
            'title' => $this->stateProject['title'],
            'tools' => $this->stateProject['tools'],
            'date' => $this->stateProject['date'],
            'description' => $this->stateProject['description'],
        ]);
        $this->mount();
        $this->alert('success', $this->stateProject['title'].' Project saved!', [
            'position' => 'center',
            'toast' => true
        ]);
        $this->reset('stateProject');

    }

    public function editProject($id)
    {
       $this->updateProject = true;

        $project = Project::find($id);

        $this->stateProject = [
            'id' => $project->id,
            'user_id' => $project->user_id,
            'title' => $project->title,
            'tools' => $project->tools,
            'date' => $project->date,
            'description' => $project->description,
        ];
        $this->mount();
    }

    public function updateProject()
    {
       $validator = Validator::make($this->stateProject, [
            'title' => 'required',
            'tools' => 'required',
            'date' => 'required',
            'description' => 'required',
        ])->validate();


        if ($this->stateProject['id']) {
            $project = Project::find($this->stateProject['id']);
            $project->update([
                'title' => $this->stateProject['title'],
                'tools' => $this->stateProject['tools'],
                'date' => $this->stateProject['date'],
                'description' => $this->stateProject['description'],
            ]);


            $this->updateProject = false;
            $this->mount();
            $this->alert('success', $this->stateProject['title'].' Project Updated', [
            'position' => 'center',
            'toast' => true
            ]);
            $this->reset('stateProject');
        }
    }

    public function deleteProject($id)
    {
        if($id){
            Project::where('id',$id)->delete();
            $this->mount();
            $this->alert('success', 'Project Deleted', [
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
