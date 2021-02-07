<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    public  function about(){
        return view('pages.about');
    }
    public  function swots(){
        return view('swots');
    }
    public  function action(){
        return view('action');
    }
    public  function communications(){
        return view('communications');
    }
    public  function frameworks(){
        return view('frameworks');
    }
    public  function risks(){
        return view('risks');
    }
    public  function visions(){
        return view('visions');
    }
    public  function pestels(){
        return view('pestels');
    }
    public  function landingsRisk(){
        return view('landings/risk');
    }
    public  function landingsPestel(){
        return view('landings/pestel');
    }
    public  function landingsVision(){
        return view('landings/vision');
    }
    public  function landingsStakeholder(){
        return view('landings/stakeholder');
    }
    public  function landingsMonitoring(){
        return view('landings/monitoring');
    }
    public  function landingsFramework(){
        return view('landings/framework');
    }
    public  function landingsEnvironment(){
        return view('landings/environment');
    }
    public  function landingsCommunication(){
        return view('landings/communication');
    }
    public  function landingsBackground(){
        return view('landings/background');
    }
    public  function landingsactionplan(){
        return view('landings/actionplan');
    }
    public  function pestelPoliticals(){
        return view('pestels/politicals/create');
    }
    public  function pestelEconomics(){
        return view('pestels/economics/create');
    }
    public  function pestelSocials(){
        return view('pestels/socials/create');
    }
    public  function pestelTechnologies(){
        return view('technologies/technologies/create');
    }
    public  function pestelEnvironments(){
        return view('environments/environments/create');
    }
    public  function pestelLegals(){
        return view('legals/create');
    }
    public  function riskCreate(){
        return view('risks/create');
    }
    public  function riskCreateCompliance(){
        return view('risks/createCompliance');
    }
    public  function swotsStrengths(){
         $userID =  auth()->user()->id;
        $results = DB::select( DB::raw("SELECT a.*,b.name FROM swots a inner join users b on a.userID = b.id where a.userID = '$userID'") );

        $description =" ";
       foreach($results as $result){
        $description .=$result->body." ";
        }

        return view('swots/strengths/create')->with(compact('description', 'results'));
    }
    public  function swotsWeaknesses(){
        $someData =  "It is a milk milk milk corrupt corrupt corrupt me me me mem me me me me stocktaking exercise that looks at internal capacities; stakeholder needs versus organizational responsiveness and the contextual realities in which your organisation operate. The information it captures should provide insights on the gaps what the organisation current performance and what it is intending to achieve.";
        return view('swots/weaknesses/create')->with(compact('someData'));
    }
    public  function swotsOpportunities(){
        return view('swots/opportunities/create');
    }
    public  function swotsThreats(){
        return view('swots/threats/create');
    }
    public  function frameworkGoals(){
        return view('frameworks/goals/create');
    }
    public  function frameworkObjectives(){
        return view('frameworks/objectives/create');
    }
    public  function frameworkStrategies(){
        return view('frameworks/strategies/create');
    }
    public  function communicationsCreate(){
        return view('communications/create');
    }
    public  function actionplanCreate(){
        return view('actionplan/create');
    }
    public  function visionsCreate(){
        return view('visions/vision1/create');
    }
    public  function valuesCreate(){
        return view('visions/values/create');
    }
    public  function missionCreate(){
        return view('visions/mission/create');
    }
    public  function expectationsCreate(){
        return view('/stakeholders/expectations/create');
    }
    public  function interestsCreate(){
        return view('/stakeholders/interests/create');
    }
    public  function potentialCreate(){
        return view('/stakeholders/interests/create');
    }
    public  function landingsOrganisation(){
        return view('/landings/organisation');
    }
     
}
