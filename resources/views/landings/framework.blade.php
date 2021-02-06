@extends('layouts.app')
@section('content')

<br>
<div class="p-4 p-md-5 mb-5 text-white rounded bg-dark">
  <div class="col-md-10 px-0">
    <h1 class="display-5 font-italic">Strategic Framework</h1>
    <p class="lead my-4">Outline the goals of your organisation.  Limit to a critical few – such as five to eight goals. If the goals are realized, it will be the evidence to show that your organisation is carrying out its mandate (mission).  The results that your organisation will see when it realizes its goals, will lay the foundation for the future it envisions (vision statement).</p>
    <a class="btn btn-primary btn-lg" href="register">Learn more</a>
  </div>
</div>
<div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
  <div class="col">
    <div class="card border-info mb-3 text-info">
    <div class="card-header">
      <h4 class="my-0 fw-normal">GOALS</h4>
    </div>
    <div class="card-body"> 
      <ul class="list-unstyled mt-3 mb-4">
        <li>If the goals are realized, it will be the evidence to show that your organisation is carrying out its mission.</li>
      </ul>
      <a href="{{url('swots/create')}}" class="w-100 btn btn-lg btn-outline-info">Get Started</a>
    </div>
  </div>
  </div>
  <div class="col">
    <div class="card border-primary mb-3 text-primary">
    <div class="card-header">
      <h4 class="my-0 fw-normal">OBJECTIVES</h4>
    </div>
    <div class="card-body">
     
      <ul class="list-unstyled mt-3 mb-4">
        <li>The realization of the goals will largely depend on the degree to which the strategic objectives are accomplished.  </li>
      </ul>
      <a href="{{url('/swot')}}" class="w-100 btn btn-lg btn-outline-primary">Get started</a>
    </div>
  </div>
  </div>
  <div class="col">
    <div class="card border-danger mb-3 text-danger">
    <div class="card-header">
      <h4 class="my-0 fw-normal">STRATEGIES</h4>
    </div>
    <div class="card-body ">
     
      <ul class="list-unstyled mt-3 mb-4 ">
        <li>Set out all the high-level planned strategies associated with respective strategic goals and objectives </li>
      </ul>
      <a href="{{url('/swot')}}" class="w-100 btn btn-lg btn-outline-danger">Get started</a>
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