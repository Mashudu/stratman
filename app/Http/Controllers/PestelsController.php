<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pestel;

class PestelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID =  auth()->user()->id;
        $results = DB::select( DB::raw("SELECT a.*,b.name,c.name as businessUnitName FROM pestels a inner join users b on a.userID = b.id left outer join businessunits c  on c.id=a.businessUnitID where a.userID = '$userID'") );

        $description =" ";
        foreach($results as $result){
        $description .=$result->body." ";
        }

        return view('pestels.index')->with(compact('description', 'results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $issue = new Pestel;     
        $issue->type =  $request->input('issueType'); 
        $issue->userID =  auth()->user()->id;
        $issue->body =  $request->input('issueDescription');     
  
        $issue->businessUnitID = 0;  
        $issue->save();  
        
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
        $issue = Pestel::find($id);     
        $issue->type =  $request->input('issueType'); 
        $issue->userID =  auth()->user()->id;
        $issue->body =  $request->input('issueDescription');    
        $issue->status =  $request->input('status');   
        $issue->businessUnitID =  $request->input('dept');  
         
        $issue->save();  
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
