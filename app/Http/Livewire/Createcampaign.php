<?php

namespace App\Http\Livewire;

use  Livewire\Component;
use App\Models\Campaign;
use  Livewire\WithFileUploads;
use App\Models\AdditionalImage;
use Illuminate\Support\Facades\Auth;

class Createcampaign extends Component
{
    use WithFileUploads;
    
    public $creative_uploads = [];
    public $campaign_name;
    public $date_from;
    public $date_to;
    public $total_budget;
    public $daily_budget;
    public $imageNames;
    

   public function save(){
        
           $user_id = Auth::user()->id;
           //    dd($this->user_id);

            $validate_data = [
                'campaign_name' => 'required',
                'date_from' => 'required',
                'date_to' => 'required',
                'total_budget' => 'required',
                'daily_budget' => 'required'
                // 'creative_uploads' =>'image'
            ];

         // validate data
            $this->validate($validate_data);

              //  Validation for the additional images
            if (!empty($this->creative_uploads)) {
                $validate_image = [
                    'creative_uploads.*' => 'image'
                ];
            }

             // validate image
             $this->validate($validate_image);

        
            ///upload images to directory and save to add images table
             if (!empty($this->creative_uploads)) {
            foreach ($this->creative_uploads as $creative_upload) {

                //upload
               $creative_upload->store('public/creative_images');
               
               $this->imageNames .= ','.$creative_upload->hashName(); 


               }
            }

            // campaignsData
               $campaignsData = [
                'campaign_name' => $this->campaign_name,
                'user_id' => $user_id,
                'date_from' => $this->date_from,
                'date_to' => $this->date_to,
                'total_budget' => $this->total_budget,
                'daily_budget' => $this->daily_budget,
                'creative_uploads_path'=> $this->imageNames
            ];
    
    
            ///insert into campaigs table first
            Campaign::create($campaignsData);



         session()->flash('message', 'Campaign was succesfully created.');
         return redirect()->route('all-campaigns');    
   }

    public function save2()
    {

        // dd($this->creative_uploads);
        // dd('tetingsdfsk');
        $validate_data = [
            'campaign_name' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',
            'total_budget' => 'required',
            'daily_budget' => 'required'
            // 'creative_uploads' =>'image'
        ];
      
        // validate data
        $this->validate($validate_data);

           // // campaignsData
           $campaignsData = [
            'campaign_name' => $this->campaign_name,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
            'total_budget' => $this->total_budget,
            'daily_budget' => $this->daily_budget,
            'creative_uploads_path'=>'testpath'
        ];


        ///insert into campaigs table first
        Campaign::create($campaignsData);
       


        //  Validation for the additional images
        //  if (!empty($this->creative_uploads)) {
        //     // $validate_image = array_merge($validate_image,[
        //     $validate_image = [
        //         'creative_uploads.*' => 'image'
        //     ];
        // }

        
        ///validate image
        // $this->validate($validate_image);


        ///upload images to directory and save to add images table
        if (!empty($this->creative_uploads)) {
            foreach ($this->creative_uploads as $creative_upload) {

                //upload
               $this->creative_uploads->store('public/storage/creative_images');
                 
                //data for storage
                // $creativeuploadsData = [
                //     'campaign_id' => $this->campaign_id,
                //     'filename' => $creative_upload->hasName()
                // ];

                // $this->imageNames .= ','.$creative_upload; 


             }
         }

      
         

         //flash message
        //  session()->flash('message', 'Campaign was succesfully created.');
        // return redirect()->route('all-campaigns');        

        

    }


    public function render()
    {
        return view('livewire.createcampaign');
    }
}
