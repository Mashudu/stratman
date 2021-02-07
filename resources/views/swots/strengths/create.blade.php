@extends('layouts.app')

@section('content')

<br>
<div class="p-4 p-md-5 mb-5 text-white rounded bg-dark">
  <div class="col-md-10 px-0">
    <h2 class="display-5 font-italic">Political</h2>
    <p class="lead my-4">Prepare two to three succinct paragraphs on how the your organisation will effectively communicate the various aspects of the strategic plan including vision, mission, core values, organisational goal, objectives, expected outcomes and strategies to key audiences and the messages and communications channels that will be used.</p>
    <a class="btn btn-primary btn-lg" href="register">Learn more</a>
  </div>
</div>

<!-- Cloud Start -->

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4"></h1>
    @include('inc.wordCloud')
  </div>

  <!-- Cloud End -->
  <!-- Insert Modal  Modal Begin   -->
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSwotModal">
  + Add New Issue
</button>

<!-- Modal -->
<div class="modal fade" id="addSwotModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SWOT Add Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addForm" >
        {{ csrf_field() }}
      <div class="modal-body">
        <div class="mb-3">
          <select name="swotType" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="Strength">Strength</option>
            <option value="Weakness">Weakness</option>
            <option value="Opportunity">Opportunity</option>
            <option value="Threat">Threat</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Issue Description</label>
          <textarea class="form-control" name="swotDescription" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
  <!-- Insert Modal End -->
  <!-- Table Start -->
   <!-- Modal -->
<div class="modal fade" id="editSwotModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SWOT Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editForm" >
        {{ csrf_field() }}
        {{ method_field('PUT') }}
      <div class="modal-body">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label" hidden>Issue Type</label>
           <input class="form-control" id="id" name  =  "id" hidden > 
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Issue Type</label>
          <select name="swotType" id="swotType" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="Strength">Strength</option>
            <option value="Weakness">Weakness</option>
            <option value="Opportunity">Opportunity</option>
            <option value="Threat">Threat</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="swotDescription" class="form-label">Issue Description</label>
          <textarea class="form-control" name="swotDescription" id="issueDescription" rows="3"></textarea>
        </div>

        <div class="mb-3">
          <label for="status" class="form-label">Issue Status</label>
          <select name="status" id="status" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="NEW">New</option>
            <option value="REJECTED">Rejected</option>
            <option value="ACCEPTED">Accepted</option>
            <option value="OTHER">OTHER</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
  <!-- Insert Modal End -->
  <hr>
  <h3>View Issues</h3>
  <table id = "example" class="table table-dark table-striped">
    <thead>
      <tr>
        <th >Issue Number </th>
        <th >Status</th>
        <th >Issue Type</th>
        <th >Desription</th>
        <th >From</th>
        <th >Date</th>
        <th >Action</th>
        <th style="display:none;">Action</th>
     
      </tr>
    </thead>
    <tbody>
      @foreach($results as $swot)
      <tr>
        <td scope="row">{{ $swot->id }}</td>
        <td>{{ $swot->status }}</td>
        <td >{{ $swot->type }}</td>
        <td>
          @if(strlen($swot->body) > 60)
         
          {{ substr($swot->body,0,57)."..." }} 
          
          @else
          {{ $swot->body }}
        
          @endif
        </td>
        <td>{{ $swot->name }}</td>
        <td>{{ $swot->updated_at }}</td>
        <td>
          <button type="button" class="btn btn-success btn-sm showbtn">View</button>|
          <button type="button" class="btn btn-warning btn-sm editbtn">Edit</button>|
          <button type="button" class="btn btn-danger btn-sm  deletebtn">Delete</button>
        </td>
        <td style="display:none;">   {{ $swot->body }}</td>
      </tr>    
      @endforeach
     
    </tbody>
  </table>



  <!-- Table End -->

  @endsection