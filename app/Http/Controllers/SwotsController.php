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
        
        //declare  and  initialise  a  strength
      $swotStrength1 = new Swot;
      $swotStrength2 = new Swot;
      $swotStrength3 = new Swot;
      $swotStrength4 = new Swot;

      //declare  and  initialise  a  weakness
      $swotWeakness1 = new Swot;
      $swotWeakness2 = new Swot;
      $swotWeakness3 = new Swot;
      $swotWeakness4 = new Swot;

      //declare  and  initialise  an opportunity
      $swotOpportunity1 = new Swot;
      $swotOpportunity2 = new Swot;
      $swotOpportunity3 = new Swot;
      $swotOpportunity4 = new Swot;

       //declare  and  initialise  a threat
       $swotThreat1 = new Swot;
       $swotThreat2 = new Swot;
       $swotThreat3 = new Swot;
       $swotThreat4 = new Swot;
      
      $swotStrength1->type =  'SWOT_Strength';
      $swotStrength1->body =  $request->input('strength1');
      $swotStrength2->type =  'SWOT_Strength';
      $swotStrength2->body =  $request->input('strength2');
      $swotStrength3->type =  'SWOT_Strength';
      $swotStrength3->body =  $request->input('strength3');
      $swotStrength4->type = 'SWOT_Strength';
      $swotStrength4->body =  $request->input('strength4');

      $swotWeakness1->type =  'SWOT_Weakness';
      $swotWeakness1->body =  $request->input('weakness1');
      $swotWeakness2->type =  'SWOT_Weakness';
      $swotWeakness2->body =  $request->input('weakness2');
      $swotWeakness3->type =  'SWOT_Weakness';
      $swotWeakness3->body =  $request->input('weakness3');
      $swotWeakness4->type =  'SWOT_Weakness';
      $swotWeakness4->body =  $request->input('weakness4');

      $swotOpportunity1->type =  'SWOT_Oportunity';
      $swotOpportunity1->body =  $request->input('opportunity1');
      $swotOpportunity2->type =  'SWOT_Oportunity';
      $swotOpportunity2->body =  $request->input('opportunity2');
      $swotOpportunity3->type =  'SWOT_Oportunity';
      $swotOpportunity3->body =  $request->input('opportunity3');
      $swotOpportunity4->type = 'SWOT_Oportunity';
      $swotOpportunity4->body =  $request->input('opportunity4');

      $swotThreat1->type =  'SWOT_Threat';
      $swotThreat1->body =  $request->input('threat1');
      $swotThreat2->type =  'SWOT_Weakness';
      $swotThreat2->body =  $request->input('threat2');
      $swotThreat3->type =  'SWOT_Weakness';
      $swotThreat3->body =  $request->input('threat3');
      $swotThreat4->type =  'SWOT_Weakness';
      $swotThreat4->body =  $request->input('threat4');

      // set  strength

      $swotStrength1->save();
      $swotStrength2->save();
      $swotStrength3->save();
      $swotStrength4->save();
      // set weaknesses
      $swotWeakness1->save();
      $swotWeakness2->save();
      $swotWeakness3->save();
      $swotWeakness4->save();

         // set opportunities
      $swotOpportunity1->save();
      $swotOpportunity2->save();
      $swotOpportunity3->save();
      $swotOpportunity4->save();

       // set threats
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
