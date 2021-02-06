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
  <button type="button" class="btn btn-primary btn-lg"> + Add New</button>
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
        <td>Test  description</td>
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
        <td>Other description</td>
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
        <td>Des description</td>
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
        <td>Prepare two to three succinct paragraphs on how the your organisation </td>
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
        <td>There description</td>
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
        <td >Weakness</td>
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
     
     
    </tbody>
  </table>



  <!-- Table End -->

  @endsection