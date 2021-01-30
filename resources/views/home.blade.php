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
      <div class="card border-info mb-3 text-info">
      <div class="card-header">
        <h4 class="my-0 fw-normal">SWOT Analysis</h4>
      </div>
      <div class="card-body">
       
        <ul class="list-unstyled mt-3 mb-4">
          <li>Strengths</li>
          <li>Weaknesses</li>
          <li>Opportunities</li>
          <li>Threats</li>
        </ul>
        <a href="{{url('swots/create')}}" class="w-100 btn btn-lg btn-outline-info">Get Started</a>
      </div>
    </div>
    </div>
    <div class="col">
      <div class="card border-primary mb-3 text-primary">
      <div class="card-header">
        <h4 class="my-0 fw-normal">PESTEL Analysis</h4>
      </div>
      <div class="card-body">
       
        <ul class="list-unstyled mt-3 mb-4">
          <li>20 users included</li>
          <li>10 GB of storage</li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <a href="{{url('/swot')}}" class="w-100 btn btn-lg btn-outline-primary">Get started</a>
      </div>
    </div>
    </div>
    <div class="col">
      <div class="card border-danger mb-3 text-danger">
      <div class="card-header">
        <h4 class="my-0 fw-normal">RISK Analysis</h4>
      </div>
      <div class="card-body ">
       
        <ul class="list-unstyled mt-3 mb-4 ">
          <li>30 users included</li>
          <li>15 GB of storage</li>
          <li>Phone and email support</li>
          <li>Help center access</li>
        </ul>
        <a href="{{url('/swot')}}" class="w-100 btn btn-lg btn-outline-danger">Get started</a>
      </div>
    </div>
    </div>

    <div class="col">
        <div class="card border-success mb-3 text-success">
        <div class="card-header">
          <h4 class="my-0 fw-normal">Vision</h4>
        </div>
        <div class="card-body ">
         
          <ul class="list-unstyled mt-3 mb-4 ">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
          <a href="{{url('/swot')}}" class="w-100 btn btn-lg btn-outline-success">Get started</a>
        </div>
      </div>
      </div>
  </div>
@endsection

