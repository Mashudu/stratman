@extends('layouts.app')
@section('content')

<br>
<div class="p-4 p-md-5 mb-5 text-white rounded bg-dark">
  <div class="col-md-10 px-0">
    <h1 class="display-5 font-italic">Stakeholder Analysis</h1>
    <p class="lead my-4">It is a stocktaking exercise that looks at internal capacities; stakeholder needs versus organizational responsiveness and the contextual realities in which your organisation operate. The information it captures should provide insights on the gaps what the organisation current performance and what it is intending to achieve.</p>
    <a class="btn btn-primary btn-lg" href="register">Learn more</a>
  </div>
</div>
<br>

  <div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
    <div class="col">
      <div class="card border-info mb-3 text-info">
      <div class="card-header">
        <h4 class="my-0 fw-normal">EXPECTATIONS</h4>
      </div>
      <div class="card-body"> 
        <ul class="list-unstyled mt-3 mb-4">
          <li>Detail what they expect from their relationship with your organisation.</li>
        </ul>
        <a href="{{url('/stakeholders/expectations/create')}}" class="w-100 btn btn-lg btn-outline-info">Get Started</a>
      </div>
    </div>
    </div>
    <div class="col">
      <div class="card border-primary mb-3 text-primary">
      <div class="card-header">
        <h4 class="my-0 fw-normal">INTERESTS</h4>
      </div>
      <div class="card-body">
       
        <ul class="list-unstyled mt-3 mb-4">
          <li>Highlight what Stakeholders' interests are in your organisation.</li>
        </ul>
        <a href="{{url('/stakeholders/interests/create')}}" class="w-100 btn btn-lg btn-outline-primary">Get started</a>
      </div>
    </div>
    </div>
    <div class="col">
      <div class="card border-danger mb-3 text-danger">
      <div class="card-header">
        <h4 class="my-0 fw-normal">POTENTIAL</h4>
      </div>
      <div class="card-body ">
       
        <ul class="list-unstyled mt-3 mb-4 ">
          <li>Enumerate the contributions that they could make to your organisation.</li>
        </ul>
        <a href="{{url('/stakeholders/potential/create')}}" class="w-100 btn btn-lg btn-outline-danger">Get started</a>
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
            <li>These are factors that are beyond the your control; they place the mission and operation</li>
          </ul>
          <a href="{{url('/pestels/technologies/create')}}" class="w-100 btn btn-lg btn-outline-success">Get started</a>
        </div>
      </div>
      </div>
  </div>




  
@endsection