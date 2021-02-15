@extends('layouts.app')

@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Welcome To Strat MAN</h1>
    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
  </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br/>



  <div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
    <div class="col">
      <div class="card border-primary mb-3 text-primary">
      <div class="card-header">
        <h4 class="my-0 fw-normal">Background</h4>
      </div>
      <div class="card-body">
       
        <ul class="list-unstyled mt-3 mb-4">
          <li><a href="{{url('pestels')}}" >Organization History</a></li>
          <li><a href="{{url('pestels')}}" >Organization Structure</a></li>
          <li><a href="{{url('pestels')}}" >Key Achievements</a></li>
        </ul>
        <a href="{{url('/landings/background')}}" class="w-100 btn btn-lg btn-outline-primary">Get Started</a>
      </div>
    </div>
    </div>
    <div class="col">
      <div class="card border-primary mb-3 text-primary">
      <div class="card-header">
        <h4 class="my-0 fw-normal">Vision and Mission</h4>
      </div>
      <div class="card-body">
       
        <ul class="list-unstyled mt-3 mb-4">
          <li><a href="{{url('pestels')}}" >Organisation Vision</a></li>
          <li><a href="{{url('pestels')}}" >Mission</a></li>
          <li><a href="{{url('pestels')}}" >Business Model</a></li>
          <li><a href="{{url('pestels')}}" >Core Values</a></li>
        </ul>
        <a href="{{url('/landings/vision')}}" class="w-100 btn btn-lg btn-outline-primary">Get started</a>
      </div>
    </div>
    </div>


    <div class="col">
      <div class="card border-success mb-3 text-success">
      <div class="card-header">
        <h4 class="my-0 fw-normal">Environmental Scan</h4>
      </div>
      <div class="card-body ">
       
        <ul class="list-unstyled mt-3 mb-4 ">
          <li><a href="{{url('swots')}}" >SWOT Analysis</a></li>
          <li><a href="{{url('/landings/pestel')}}" >PESTEL Analysis</a></li>
          <li><a href="{{url('/stakeholders')}}" >Stakeholder Analysis</a></li>
        </ul>
        <a href="{{url('/landings/environment')}}" class="w-100 btn btn-lg btn-outline-success">Get started</a>
      </div>
    </div>
    </div>

    <div class="col">
        <div class="card border-success mb-3 text-success">
        <div class="card-header">
          <h4 class="my-0 fw-normal">Strategic Framework</h4>
        </div>
        <div class="card-body ">
         
          <ul class="list-unstyled mt-3 mb-4 ">
            <li><a href="{{url('/frameworks/goals/create')}}" >Strategic Goals</a></li>
            <li><a href="{{url('pestels')}}" >Strategic Objectives</a></li>
            <li><a href="{{url('pestels')}}" >Strategies</a></li>
          </ul>
          <a href="{{url('/frameworks')}}" class="w-100 btn btn-lg btn-outline-success">Get started</a>
        </div>
      </div>
      </div>
    </div>

    
  <div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
    <div class="col">
      <div class="card border-danger mb-3 text-danger">
      <div class="card-header">
        <h4 class="my-0 fw-normal">Risk Assessment</h4>
      </div>
      <div class="card-body">
       
        <ul class="list-unstyled mt-3 mb-4">
          <li>Identify the events and the associated risks and opportunities that are likely to influence the intended achievement of the strategic plan.</li>
        </ul>
        <a href="{{url('/landings/risk')}}" class="w-100 btn btn-lg btn-outline-danger">Get Started</a>
      </div>
    </div>
    </div>


    <div class="col">
      <div class="card border-primary mb-3 text-primary">
      <div class="card-header">
        <h4 class="my-0 fw-normal">Communication Plan</h4>
      </div>
      <div class="card-body">
       
        <ul class="list-unstyled mt-3 mb-4">
          <li>Effectively communicate the various aspects of the strategic plan including vision, mission, core values, organisational goal, objectives, expected outcomes and strategies </li>
        </ul>
        <a href="{{url('/landings/communication')}}" class="w-100 btn btn-lg btn-outline-primary">Get started</a>
      </div>
    </div>
    </div>

    <div class="col">
      <div class="card border-primary mb-3 text-primary">
      <div class="card-header">
        <h4 class="my-0 fw-normal">Action Plan</h4>
      </div>
      <div class="card-body ">
       
        <ul class="list-unstyled mt-3 mb-4 ">
          <li>Develop an action plan for your organisation, which translates your organization strategies into specific activities and projects, resources, finance to achieve the desired outcomes.</li>
        </ul>
        <a href="{{url('/landings/actionplan')}}" class="w-100 btn btn-lg btn-outline-primary">Get started</a>
      </div>
    </div>
    </div>

    <div class="col">
        <div class="card border-danger mb-3 text-danger">
        <div class="card-header">
          <h4 class="my-0 fw-normal">Monitoring</h4>
        </div>
        <div class="card-body ">
         
          <ul class="list-unstyled mt-3 mb-4 ">
            <li>Explain how monitoring will be done and who will be responsible. Highlight the key indicators to measure progress. Describe how evaluation of the Strategic Plan will be done </li>
          </ul>
          <a href="{{url('landings/monitoring')}}" class="w-100 btn btn-lg btn-outline-danger">Get started</a>
        </div>
      </div>
      </div>
    </div>
  
@endsection

