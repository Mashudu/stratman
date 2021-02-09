<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SwotsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\PestelsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', [PagesController::class, 'about']);
Route::resource('swots',SwotsController::class);
Route::resource('action',SwotsController::class);
Route::resource('communications',SwotsController::class);
Route::resource('frameworks',SwotsController::class);
Route::resource('risks',SwotsController::class);
Route::resource('visions',SwotsController::class);
Route::get('/swot-analysis', [SwotsController::class, 'index']);
Route::get('/pestel-analysis', [PestelsController::class, 'index']);

Route::get('landings/risk', [PagesController::class, 'landingsRisk']);
Route::get('landings/organisation', [PagesController::class, 'landingsOrganisation']);
Route::get('landings/vision', [PagesController::class, 'landingsVision']);
Route::get('landings/stakeholder', [PagesController::class, 'landingsStakeholder']);
Route::get('landings/pestel', [PagesController::class, 'landingsPestel']);
Route::get('landings/monitoring', [PagesController::class, 'landingsMonitoring']);
Route::get('landings/framework', [PagesController::class, 'landingsFramework']);
Route::get('landings/environment', [PagesController::class, 'landingsEnvironment']);
Route::get('landings/communication', [PagesController::class, 'landingsCommunication']);
Route::get('landings/background', [PagesController::class, 'landingsBackground']);
Route::get('landings/actionplan', [PagesController::class, 'landingsactionplan']);
Route::get('/pestels/politicals/create', [PagesController::class, 'pestelPoliticals']);
Route::get('/pestels/economics/create', [PagesController::class, 'pestelEconomics']);
Route::get('/pestels/socials/create', [PagesController::class, 'pestelSocials']);
Route::get('/pestels/technologies/create', [PagesController::class, 'pestelTechnologies']);
Route::get('/pestels/environments/create', [PagesController::class, 'pestelEnvironments']);
Route::get('/pestels/legals/create', [PagesController::class, 'pestelLegals']);
Route::get('/risks/create', [PagesController::class, 'riskCreate']);
Route::get('/risks/createCompliance', [PagesController::class, 'riskCreateCompliance']);
Route::get('/swots/strengths/create', [PagesController::class, 'swotsStrengths']);
Route::get('/swots/weaknesses/create', [PagesController::class, 'swotsWeaknesses']);
Route::get('/swots/opportunities/create', [PagesController::class, 'swotsOpportunities']);
Route::get('/swots/threats/create', [PagesController::class, 'swotsThreats']);
Route::get('/frameworks/goals/create', [PagesController::class, 'frameworkGoals']);
Route::get('/frameworks/objectives/create', [PagesController::class, 'frameworkObjectives']);
Route::get('/frameworks/strategies/create', [PagesController::class, 'frameworkStrategies']);
Route::get('/communications/create', [PagesController::class, 'communicationsCreate']);
Route::get('/actionplan/create', [PagesController::class, 'actionplanCreate']);
Route::get('/visions/vision1/create', [PagesController::class, 'visionsCreate']);
Route::get('/visions/values/create', [PagesController::class, 'valuesCreate']);
Route::get('/visions/mission/create', [PagesController::class, 'missionCreate']);
Route::get('/stakeholders/expectations/create', [PagesController::class, 'expectationsCreate']);
Route::get('/stakeholders/interests/create', [PagesController::class, 'interestsCreate']);
Route::get('/stakeholders/potential/create', [PagesController::class, 'potentialCreate']);


Route::post('/swotadd',[SwotsController::class,'store']);
Route::put('/swotupdate/{id}',[SwotsController::class,'update']);



Route::get('/companies', [CompaniesController::class, 'getCompanies']);
Route::get('/departments', [CompaniesController::class, 'getDepartments']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
