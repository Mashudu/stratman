<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Swot;
use Illuminate\Support\Facades\DB;

class SwotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID =  auth()->user()->id;
        $results = DB::select( DB::raw("SELECT a.*,b.name,c.name as businessUnitName FROM swots a inner join users b on a.userID = b.id left outer join businessunits c  on c.id=a.businessUnitID where a.userID = '$userID'") );

        $description =" ";
        foreach($results as $result){
        $description .=$result->body." ";
        }

        return view('swots.index')->with(compact('description', 'results'));
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
       /* $this->validate($request,[
            'swotDescription'=>'required',
        ]);*/

      $swot = new Swot;     
      $swot->type =  $request->input('swotType'); 
      $swot->userID =  auth()->user()->id;
      $swot->body =  $request->input('swotDescription');     

     
 
      $swot->businessUnitID = 0;  
      $swot->save();  
      
    
            
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
        $swot = Swot::find($id);     
        $swot->type =  $request->input('swotType'); 
        $swot->userID =  auth()->user()->id;
        $swot->body =  $request->input('swotDescription');    
        $swot->status =  $request->input('status');   
        $swot->businessUnitID =  $request->input('dept');  
         
        $swot->save();  
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
