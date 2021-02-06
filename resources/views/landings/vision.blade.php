@extends('layouts.app')
@section('content')
<br>

<br>
<div class="p-4 p-md-5 mb-5 text-white rounded bg-dark">
  <div class="col-md-10 px-0">
    <h1 class="display-5 font-italic">Organisational Vision, Mission and Values</h1>
    <p class="lead my-4">DEFINITIONS: Futuristic view regarding the ideal state or conditions that the organization aspires to change or create. The organization’s purpose; what the organization does and why. Principles, beliefs and underlying assumptions that guide the organization.</p>
    <a class="btn btn-primary btn-lg" href="register">Learn more</a>
  </div>
</div>
<br>

<div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
  <div class="col">
    <div class="card border-info mb-3 text-info">
    <div class="card-header">
      <h4 class="my-0 fw-normal">VISION</h4>
    </div>
    <div class="card-body"> 
      <ul class="list-unstyled mt-3 mb-4">
        <li>Identify the tangible and intangible attributes that are internal to your organisation for which you have control.  </li>
      </ul>
      <a href="{{url('/visions/vision1/create')}}" class="w-100 btn btn-lg btn-outline-info">Get Started</a>
    </div>
  </div>
  </div>
  <div class="col">
    <div class="card border-primary mb-3 text-primary">
    <div class="card-header">
      <h4 class="my-0 fw-normal">MISSION</h4>
    </div>
    <div class="card-body">
     
      <ul class="list-unstyled mt-3 mb-4">
        <li>These are factors within your organisation control, which hinder your organisation from meeting its goals.</li>
      </ul>
      <a href="{{url('/visions/mission/create')}}" class="w-100 btn btn-lg btn-outline-primary">Get started</a>
    </div>
  </div>
  </div>
  <div class="col">
    <div class="card border-danger mb-3 text-danger">
    <div class="card-header">
      <h4 class="my-0 fw-normal">VALUES</h4>
    </div>
    <div class="card-body ">
     
      <ul class="list-unstyled mt-3 mb-4 ">
        <li>These are the attractive factors that if they are capitalized up will help to close the gap between goals and expectations. </li>
      </ul>
      <a href="{{url('/visions/values/create')}}" class="w-100 btn btn-lg btn-outline-danger">Get started</a>
    </div>
  </div>
  </div>

  <div class="col">
      <div class="card border-success mb-3 text-success">
      <div class="card-header">
        <h4 class="my-0 fw-normal">OVERVIEW</h4>
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