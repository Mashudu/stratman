@extends('layouts.app')
@section('content')

<br>
<div class="p-4 p-md-5 mb-5 text-white rounded bg-dark">
  <div class="col-md-10 px-0">
    <h1 class="display-5 font-italic">My Organisation</h1>
    <p class="lead my-4">Provide a brief overview of when your organization was established, for what functions, and how it is organized to carry out its mandate.  Highlight any achievements, events and milestones that your organisation initiated or reacted to over the years.</p>
    <a class="btn btn-primary btn-lg" href="register">Learn more</a>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
  <div class="col">
    <div class="card border-info mb-3 text-info">
    <div class="card-header">
      <h4 class="my-0 fw-normal">Vision and Mission</h4>
    </div>
    <div class="card-body"> 
      <ul class="list-unstyled mt-3 mb-4">
        <li>Identify the tangible and intangible attributes that are internal to your organisation for which you have control.  </li>
      </ul>
      <a href="{{url('landings/vision')}}" class="w-100 btn btn-lg btn-outline-info">Get Started</a>
    </div>
  </div>
  </div>
  <div class="col">
    <div class="card border-primary mb-3 text-primary">
    <div class="card-header">
      <h4 class="my-0 fw-normal">Background</h4>
    </div>
    <div class="card-body">
     
      <ul class="list-unstyled mt-3 mb-4">
        <li>These are factors within your organisation control, which hinder your organisation from meeting its goals.</li>
      </ul>
      <a href="{{url('/landings/background')}}" class="w-100 btn btn-lg btn-outline-primary">Get started</a>
    </div>
  </div>
  </div>
  <div class="col">
    <div class="card border-danger mb-3 text-danger">
    <div class="card-header">
      <h4 class="my-0 fw-normal">Key Achievements</h4>
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
        <h4 class="my-0 fw-normal">Business Units</h4>
      </div>
      <div class="card-body ">
       
        <ul class="list-unstyled mt-3 mb-4 ">
          <li>These are factors that are beyond the your control; they place the mission and operation of the organization at risk</li>
        </ul>
        <a href="{{url('/swot')}}" class="w-100 btn btn-lg btn-outline-success">Get started</a>
      </div>
    </div>
    </div>

@endsection