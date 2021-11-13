<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampaignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all_campaigns()
    {
        //
        $campaigns = Campaign::paginate(10);
        return view('all_campaigns',[
            'campaigns'=>$campaigns
        ]);

    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single_user_campaigns()
    {
        //
        $campaigns = Campaign::where('user_id',Auth::user()->id)
        ->orderByDesc('created_at')
        ->paginate(10);

        return view('my_campaigns',[
            'campaigns'=>$campaigns
        ]);

    }

          /**
     * editng a single campaign---i.e dispalying the form
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_single_user_campaign($id)
    {
        
        $campaign = Campaign::find($id);
        return view('edit_campaign',[
            'campaign'=>$campaign
        ]);

    }

    public function update_single_user_campaign(Request $request){
        // dd($request);
        $request->validate([
            'campaign_name'=>'required|max:255', 
            'date_from'=>'required|date', 
            'date_to'=>'required|date', 
            'daily_budget'=>'required|numeric|min:0.0', 
            'total_budget'=>'required|numeric|min:0.0'
        ]);

        $update_data = [
            'campaign_name'=>$request->campaign_name, 
            'date_from'=>$request->date_from, 
            'date_to'=>$request->date_to, 
            'daily_budget'=>$request->daily_budget, 
            'total_budget'=>$request->total_budget
        ];

        Campaign::where('id',$request->id)
        ->update($update_data);

        return redirect()->route('my-campaigns');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create_campaign');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
