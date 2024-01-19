<?php

namespace App\Livewire;

use Livewire\Component;

class MultiStep extends Component
{
    public $currentStep=1;
    public $total_steps=5;
    public $job_title;
    public $skills;
    public $estimate;
    public $budgetfrom;
    public $budgetto;
    public $discription;



    public function render()
    {
        return view('livewire.multi-step');
    }

    public function incrementSteps(){
        $this->validateForm();
        if($this->currentStep<$this->total_steps){
            $this->currentStep ++;
        }

    }

    public function decrementSteps(){
        if($this->currentStep>1){
            $this->currentStep --;
        }

    }

    public function submit(){
        $validated=$this->validate([
            'discription'=>'required',
        ]);

        /*
        Register::create([
            'first_name'=>$this->first_name;
        ])
        */
        //dd('form submitted');
        $this->reset();
    }

    public function validateForm(){
        if($this->currentStep===1){
            $validated=$this->validate([
                'job_title'=>'required|max:255',
            ]);
        }elseif($this->currentStep===2){
            $validated=$this->validate([
                'skills'=>'required|max:255',
            ]);
        }elseif($this->currentStep===3){
            $validated=$this->validate([
                'estimate'=>'required',
            ]);
        }elseif($this->currentStep===4){
            $validated=$this->validate([
                'budgetfrom'=>'required|numeric|min:1|max:3',
                'budgetto'=>'required|numeric|min:1|max:3',
            ]);
        }
    }
}
