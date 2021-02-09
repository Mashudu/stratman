@extends('layouts.app')

@section('content')

<br>
<div class="p-4 p-md-5 mb-5 text-white rounded bg-dark">
  <div class="col-md-10 px-0">
    <h2 class="display-5 font-italic">PESTEL Analysis</h2>
    <p class="lead my-4">This is the assessment and analysis of your organisation's Strengths, Weakness, Opportunities and Threats.The information captured should provide insights on the gaps what the organisation’s current performance and what it is intending to achieve.  Note that the information is for helping to match the organisation’s goals, programmes and capacities to the social and economic environment in which it operates.</p>
    <a class="btn btn-primary btn-primary" href="register">Learn more</a>
  </div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
 + Cloud Generator
</button>

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
<div class="modal fade" id="addPestelMOdal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PESTEL Add Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addPestelForm" >
        {{ csrf_field() }}
      <div class="modal-body">
        <div class="mb-3">
          <select name="pestelType" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="Strength">Strength</option>
            <option value="Weakness">Weakness</option>
            <option value="Opportunity">Opportunity</option>
            <option value="Threat">Threat</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Issue Description</label>
          <textarea class="form-control" name="issueDescription" rows="3"></textarea>
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
<div class="modal fade" id="editPestelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SWOT Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editPestelForm" >
        {{ csrf_field() }}
        {{ method_field('PUT') }}
      <div class="modal-body">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label" hidden>Issue Type</label>
           <input class="form-control" id="id" name  =  "id" hidden > 
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Issue Type</label>
          <select name="pestelType" id="pestelType" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="Strength">Strength</option>
            <option value="Weakness">Weakness</option>
            <option value="Opportunity">Opportunity</option>
            <option value="Threat">Threat</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="issueDescription" class="form-label">Issue Description</label>
          <textarea class="form-control" name="issueDescription" id="issueDescription" rows="3"></textarea>
        </div>

        <div class="mb-3">
          <label for="status" class="form-label">Issue Status</label>
          <select name="status" id="status" class="form-select" aria-label="Default select example">
            <option value="">Open this select menu</option>
            <option value="NEW">New</option>
            <option value="REVIEW">Under Review</option>
            <option value="PUBLISHED">Published</option>
            <option value="DISCARDED">Discarded</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Department Responsible</label>
          <select id="dept" name="dept" class ="form-select">
            <option value="">-- Select --</option>
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
        <th >Busines Unit</th>
        <th >Date</th>
        <th >Action</th>
        <th style="display:none;">Action</th>
     
      </tr>
    </thead>
    <tbody>
      @foreach($results as $issue)
      <tr>
        <td scope="row">{{ $issue->id }}</td>
        <td>{{ $issue->status }}</td>
        <td >{{ $issue->type }}</td>
        <td>
          @if(strlen($issue->body) > 60)
         
          {{ substr($issue->body,0,57)."..." }} 
          
          @else
          {{ $issue->body }}
        
          @endif
        </td>
        <td>{{ $issue->name }}</td>
        <td>{{ $issue->businessUnitName }}</td>
        <td>{{ $issue->updated_at }}</td>
        <td>
          <button type="button" class="btn btn-primary btn-sm editbtn">Analyse</button>       
        </td>
        <td style="display:none;">   {{ $issue->body }}</td>
      </tr>    
      @endforeach
     
    </tbody>
  </table>



  <!-- Table End -->

  @endsection