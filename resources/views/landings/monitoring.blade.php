@extends('layouts.app')

@section('content')

<br>
<div class="p-4 p-md-5 mb-5 text-white rounded bg-dark">
  <div class="col-md-10 px-0">
    <h1 class="display-5 font-italic">Monitoring</h1>
    <p class="lead my-4">It is a stocktaking exercise that looks at internal capacities; stakeholder needs versus organizational responsiveness and the contextual realities in which your organisation operate. The information it captures should provide insights on the gaps what the organisation current performance and what it is intending to achieve.</p>
    <a class="btn btn-primary btn-lg" href="register">Learn more</a>
  </div>
</div>
<br>


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
          <li><a href="{{url('/landings/stakeholder')}}" >Stakeholder Analysis</a></li>
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
          <a href="{{url('/landings/framework')}}" class="w-100 btn btn-lg btn-outline-success">Get started</a>
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
          <ul class="list-unstyled mt-3 mb-4">
            <li><a href="{{url('pestels')}}" >Organization History</a></li>
            <li><a href="{{url('pestels')}}" >Organization Structure</a></li>
            <li><a href="{{url('pestels')}}" >Key Achievements</a></li>
          </ul>
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
          <ul class="list-unstyled mt-3 mb-4">
            <li><a href="{{url('pestels')}}" >Organization History</a></li>
            <li><a href="{{url('pestels')}}" >Organization Structure</a></li>
            <li><a href="{{url('pestels')}}" >Key Achievements</a></li>
          </ul>
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
          <ul class="list-unstyled mt-3 mb-4">
            <li><a href="{{url('pestels')}}" >Organization History</a></li>
            <li><a href="{{url('pestels')}}" >Organization Structure</a></li>
            <li><a href="{{url('pestels')}}" >Key Achievements</a></li>
          </ul>
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
            <ul class="list-unstyled mt-3 mb-4">
              <li><a href="{{url('pestels')}}" >Organization History</a></li>
              <li><a href="{{url('pestels')}}" >Organization Structure</a></li>
              <li><a href="{{url('pestels')}}" >Key Achievements</a></li>
            </ul>
          </ul>
          <a href="{{url('/monitoring')}}" class="w-100 btn btn-lg btn-outline-danger">Get started</a>
        </div>
      </div>
      </div>
    </div>
  
@endsection

