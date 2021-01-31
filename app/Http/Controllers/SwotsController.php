<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Swot;

class SwotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('swots.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('swots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'strength1'=>'required',
        ]);

      $swotStrength1 = new Swot;
      $swotStrength2 = new Swot;
      $swotStrength3 = new Swot;
      $swotStrength4 = new Swot;      
      $swotStrength1->type =  'SWOT_Strength';
      $swotStrength1->userID =  auth()->user()->id;
      $swotStrength1->body =  $request->input('strength1');
      $swotStrength2->type =  'SWOT_Strength';
      $swotStrength2->userID =  auth()->user()->id;
      $swotStrength2->body =  $request->input('strength2');
      $swotStrength3->type =  'SWOT_Strength';
      $swotStrength3->userID =  auth()->user()->id;
      $swotStrength3->body =  $request->input('strength3');
      $swotStrength4->type = 'SWOT_Strength';
      $swotStrength4->userID =  auth()->user()->id;
      $swotStrength4->body =  $request->input('strength4');
      $swotStrength1->save();
      $swotStrength2->save();
      $swotStrength3->save();
      $swotStrength4->save();
       
      $swotWeakness1 = new Swot;
      $swotWeakness2 = new Swot;
      $swotWeakness3 = new Swot;
      $swotWeakness4 = new Swot;
      $swotWeakness1->type =  'SWOT_Weakness';
      $swotWeakness1->userID =  auth()->user()->id;
      $swotWeakness1->body =  $request->input('weakness1');
      $swotWeakness2->type =  'SWOT_Weakness';
      $swotWeakness2->userID =  auth()->user()->id;
      $swotWeakness2->body =  $request->input('weakness2');
      $swotWeakness3->type =  'SWOT_Weakness';
      $swotWeakness3->userID =  auth()->user()->id;
      $swotWeakness3->body =  $request->input('weakness3');
      $swotWeakness4->type =  'SWOT_Weakness';
      $swotWeakness4->userID =  auth()->user()->id;
      $swotWeakness4->body =  $request->input('weakness4');    
      $swotWeakness1->save();
      $swotWeakness2->save();
      $swotWeakness3->save();
      $swotWeakness4->save();

      $swotOpportunity1 = new Swot;
      $swotOpportunity2 = new Swot;
      $swotOpportunity3 = new Swot;
      $swotOpportunity4 = new Swot;
      $swotOpportunity1->type =  'SWOT_Oportunity';
      $swotOpportunity1->userID =  auth()->user()->id;
      $swotOpportunity1->body =  $request->input('opportunity1');
      $swotOpportunity2->type =  'SWOT_Oportunity';
      $swotOpportunity2->userID =  auth()->user()->id;
      $swotOpportunity2->body =  $request->input('opportunity2');
      $swotOpportunity3->type =  'SWOT_Oportunity';
      $swotOpportunity3->userID =  auth()->user()->id;
      $swotOpportunity3->body =  $request->input('opportunity3');
      $swotOpportunity4->type = 'SWOT_Oportunity';
      $swotOpportunity4->userID =  auth()->user()->id;
      $swotOpportunity4->body =  $request->input('opportunity4');
      $swotOpportunity1->save();
      $swotOpportunity2->save();
      $swotOpportunity3->save();
      $swotOpportunity4->save();

      $swotThreat1 = new Swot;
      $swotThreat2 = new Swot;
      $swotThreat3 = new Swot;
      $swotThreat4 = new Swot;
      $swotThreat1->type =  'SWOT_Threat';
      $swotThreat1->userID =  auth()->user()->id;
      $swotThreat1->body =  $request->input('threat1');
      $swotThreat2->type =  'SWOT_Threat';
      $swotThreat2->userID =  auth()->user()->id;
      $swotThreat2->body =  $request->input('threat2');
      $swotThreat3->type =  'SWOT_Threat';
      $swotThreat3->userID =  auth()->user()->id;
      $swotThreat3->body =  $request->input('threat3');
      $swotThreat4->type =  'SWOT_Threat';
      $swotThreat4->userID =  auth()->user()->id;
      $swotThreat4->body =  $request->input('threat4');
      $swotThreat1->save();
      $swotThreat2->save();
      $swotThreat3->save();
      $swotThreat4->save();   

     
 


 


      return redirect('/swots/create')->with('success','SWOT Analysis  Submited');        
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
