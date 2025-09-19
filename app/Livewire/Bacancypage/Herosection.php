<?php

namespace App\Livewire\Bacancypage;

use App\Facades\LandingPagePatch;
use App\Models\LandingPage;
use Livewire\Component;

class Herosection extends Component
{   
    public $hero=null,$lp_data=null,$btntext,$hero_title_one,$hero_title_two,$hero_title_three,$hero_subtitle,$hero_lists=[],
    $box1,$boxtextone,$box2,$boxtexttwo,$box3,$boxtextthree;

    public $isLoading = false;
    
    public $successMessage = '';
    public $errorMessage = '';

    protected $rules = [
        'hero_title_one'=>['max:50'],
        'hero_title_two'=>['max:50'],
        'hero_title_three'=>['max:50'],
        'hero_subtitle'=>['string','max:500',],
        'box1'=>['string','max:50',],
        'box2'=>['string','max:50',],
        'box3'=>['string','max:50',],
    ];

    public function save(){
        try {
            $this->validate();

            $contentdata = isset($this->lp_data['page_contect']) ? json_decode($this->lp_data['page_contect'],true) : [];
            
            $contentdata['hero'] = [
                'hero_title_one' => $this->hero_title_one,
                'hero_title_two' => $this->hero_title_two,
                'hero_title_three' => $this->hero_title_three,
                'hero_subtitle' => $this->hero_subtitle,
                'hero_lists' => $this->hero_lists,
                'btntext'=>$this->btntext,
                'box1' => $this->box1,
                'boxtextone' => $this->boxtextone,
                'box2' => $this->box2,
                'boxtexttwo' => $this->boxtexttwo,
                'box3' => $this->box3,
                'boxtextthree' => $this->boxtextthree
            ];

            LandingPagePatch::update($this->lp_data,$contentdata);

            $this->successMessage = 'Section updated Successfully!';
        } catch (\Throwable $th) {
            //throw $th;
            $this->errorMessage = $th->getMessage();
        }

    }

    public function mount($lp_data)
    {
        $toJson = isset($lp_data->page_contect) ? json_decode($lp_data->page_contect,true) : [];
        $this->hero = isset($toJson['hero']) ? $toJson['hero'] : [];
        $this->hero_title_one = $this->hero['hero_title_one'] ?? 'Hire';
        $this->hero_title_two = $this->hero['hero_title_two'] ?? 'Software Developers';
        $this->hero_title_three = $this->hero['hero_title_three'] ?? '';
        $this->hero_subtitle = 'Pre-vetted developers onboard in days, not months, and start delivering real value from day one. Whether the need is for Frontend, Backend, Full Stack, Mobile, Cloud, or any other specialized role.';
        $this->hero_lists = ['Include Recruitment Cost','Hardware & Infra Cost','Dedicated Delivery Manager','Payroll Management','Productivity tracking software'];
        $this->btntext = 'Book A Free Consultation';
        $this->box1 = $this->hero['box1'] ?? '15+';
        $this->boxtextone = $this->hero['boxtextone'] ?? 'Years of Industry Exp.';
        $this->box2 = $this->hero['box2'] ?? '400+';
        $this->boxtexttwo = $this->hero['boxtexttwo'] ?? 'Developers';
        $this->box3 = $this->hero['box3'] ?? '120+';
        $this->boxtextthree = $this->hero['boxtextthree'] ?? 'Clients';
        $this->lp_data = isset($lp_data) ? $lp_data : [];
    }

    // $this->hero['hero_subtitle'] ?? 
    // $this->hero['hero_lists'] ?? 

    public function render()
    {

        return view('livewire.bacancypage.herosection');
    }
}
