@extends('layouts.app')
@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Conduct the PESTEL Analysis</h1>
    <br>
    <p class="lead">It is a stocktaking exercise that looks at internal capacities; stakeholder needs versus organizational responsiveness and the contextual realities in which your organisation operate.  The information it captures should provide insights on the gaps what the organisation current performance and what it is intending to achieve.  Note that the information is for helping to match the organisation’s goals, programmes and capacities to the social and economic environment in which it operates.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
    <div class="col">
      <div class="card border-info mb-3 text-info">
      <div class="card-header">
        <h4 class="my-0 fw-normal">STRENGTHS</h4>
      </div>
      <div class="card-body"> 
        <ul class="list-unstyled mt-3 mb-4">
          <li>Identify the tangible and intangible attributes that are internal to your organisation for which you have control.  </li>
        </ul>
        <a href="{{url('swots/create')}}" class="w-100 btn btn-lg btn-outline-info">Get Started</a>
      </div>
    </div>
    </div>
    <div class="col">
      <div class="card border-primary mb-3 text-primary">
      <div class="card-header">
        <h4 class="my-0 fw-normal">WEAKNESSES</h4>
      </div>
      <div class="card-body">
       
        <ul class="list-unstyled mt-3 mb-4">
          <li>These are factors within your organisation control, which hinder your organisation from meeting its goals.</li>
        </ul>
        <a href="{{url('/swot')}}" class="w-100 btn btn-lg btn-outline-primary">Get started</a>
      </div>
    </div>
    </div>
    <div class="col">
      <div class="card border-danger mb-3 text-danger">
      <div class="card-header">
        <h4 class="my-0 fw-normal">OPPORTUNITIES</h4>
      </div>
      <div class="card-body ">
       
        <ul class="list-unstyled mt-3 mb-4 ">
          <li>These are the attractive factors that if they are capitalized up will help to close the gap between goals and expectations. </li>
        </ul>
        <a href="{{url('/swot')}}" class="w-100 btn btn-lg btn-outline-danger">Get started</a>
      </div>
    </div>
    </div>

    <div class="col">
        <div class="card border-success mb-3 text-success">
        <div class="card-header">
          <h4 class="my-0 fw-normal">THREATS</h4>
        </div>
        <div class="card-body ">
         
          <ul class="list-unstyled mt-3 mb-4 ">
            <li>These are factors that are beyond the your control; they place the mission and operation of the organization at risk</li>
          </ul>
          <a href="{{url('/swot')}}" class="w-100 btn btn-lg btn-outline-success">Get started</a>
        </div>
      </div>
      </div>
  </div>
@endsection

