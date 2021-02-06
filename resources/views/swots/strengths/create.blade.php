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
  <!-- Table Start -->

  <h2>View Issues</h2>
  <table id = "swotIssues" class="table table-dark table-striped">
    <thead>
      <tr>
        <th  class="text-center">Issue Number </th>
        <th  class="text-center">Status</th>
        <th  class="text-center">Issue Type</th>
        <th  class="text-center">Desription</th>
        <th  class="text-center">From</th>
        <th  class="text-center" >Date</th>
        <th class="text-center" >Action</th>
     
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>New</td>
        <td >Strength</td>
        <td>Somwe description</td>
        <td>Fortune</td>
        <td>12/12/2020</td>
        <td>
          <button type="button" class="btn btn-success btn-sm">View</button>|
          <button type="button" class="btn btn-warning btn-sm">Edit</button>|
          <button type="button" class="btn btn-danger btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>New</td>
        <td >Strength</td>
        <td>Somwe description</td>
        <td>Fortune</td>
        <td>12/12/2020</td>
        <td>
          <button type="button" class="btn btn-success btn-sm">View</button>|
          <button type="button" class="btn btn-warning btn-sm">Edit</button>|
          <button type="button" class="btn btn-danger btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>New</td>
        <td >Strength</td>
        <td>Somwe description</td>
        <td>Kharendwe</td>
        <td>12/12/2020</td>
        <td>
          <button type="button" class="btn btn-success btn-sm">View</button>|
          <button type="button" class="btn btn-warning btn-sm">Edit</button>|
          <button type="button" class="btn btn-danger btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>New</td>
        <td >Strength</td>
        <td>Somwe description</td>
        <td>Mashudu</td>
        <td>12/12/2020</td>
        <td>
          <button type="button" class="btn btn-success btn-sm">View</button>|
          <button type="button" class="btn btn-warning btn-sm">Edit</button>|
          <button type="button" class="btn btn-danger btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td><button type="button" class="btn btn-success btn-sm">View</button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td> <button id  ="btnModal" type="button" onclick="showMOdal()" data-bs-toggle="modal" data-bs-target="#myModal">Launch modal</button> </td>
      </tr>
    </tbody>
  </table>

  <button type="button" class="btn btn-primary btn-sm">Add New</button>

  <!-- Table End -->

  @endsection