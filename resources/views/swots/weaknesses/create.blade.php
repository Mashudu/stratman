@extends('layouts.app')

@section('content')

<br>
<div class="p-4 p-md-5 mb-5 text-white rounded bg-dark">
  <div class="col-md-10 px-0">
    <h2 class="display-5 font-italic">Weakness</h2>
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
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

  <!-- Table End -->
<br>
<h2>Enter Issue</h2>

<form>
  <div class="form-floating">
    <textarea class="ckeditor form-control" id="txtWeakness" name = "txtWeakness" style="height: 100px"></textarea>
  </div>
  <br>

  <button type="button" class="btn btn-primary">Submit</button>
</form>
  @endsection