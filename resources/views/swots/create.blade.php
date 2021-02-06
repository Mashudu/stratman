@extends('layouts.app')

@section('content')
<<<<<<< HEAD

<br>
<div class="p-4 p-md-5 mb-5 text-white rounded bg-dark">
  <div class="col-md-10 px-0">
    <h2 class="display-5 font-italic">Weaknesses</h2>
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
    <textarea class="ckeditor form-control" id="txtWeaknesses" name = "txtWeaknesses" style="height: 100px"></textarea>
  </div>
  <br>

  <button type="button" class="btn btn-primary">Submit</button>
</form>

  @endsection
=======
<h1>Welcome to Add SWOT Page</h1>
<br>
<P>Conduct the SWOT analysis.  It is a stocktaking exercise that looks at internal capacities; stakeholder needs vis-à-vis organizational responsiveness and the contextual realities in which the NHMSs operate.  The information it captures should provide insights on the gaps what the NHMSs current performance and what it is intending to achieve.  Note that the information is for helping to match the organisation’s goals, programmes and capacities to the social and economic environment in which it operates.]</P>
<br>
<form action="{{route('swots.store')}}" method="POST">
  @csrf
  <div class="accordion" id="accordionExample">
	<!-- First Item -->
	<div class="accordion-item">
	  <h2 class="accordion-header s" id="headingOne">
		<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		STRENGHTS 
		</button>
	  </h2>
	  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
		<div class="accordion-body">

			<div class="input-group">			 
				<input type="text" id="strength1" name="strength1"  class="form-control" placeholder="Strength 1"/>
			</div>
			<br>
			<div class="input-group">			 
				<input type="text"  id="strength2" name="strength2" class="form-control" placeholder="Strength 2"/>
			</div>
			<br>
			<div class="input-group">			 
				<input type="text"  id="strength3" name="strength3" class="form-control" placeholder="Strength 3"/>
			</div>
			<br>
			<div class="input-group">			 
				<input type="text"  id="strength4" name="strength4" class="form-control" placeholder="Strength 4"/>
			</div>
		</div>
	  </div>
	</div>
	<!-- End  of arcodion 1-->

	<div class="accordion-item">
	  <h2 class="accordion-header" id="headingTwo">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		WEAKNESSES 
		</button>
	  </h2>
	  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<div class="input-group">			 
				<input type="text"  id="weakness1" name="weakness1" class="form-control" placeholder="Weakness 1"/>
			</div>
			<br>
			<div class="input-group">			 
				<input type="text"  id="weakness2" class="form-control" name="weakness2" placeholder="Weakness 2"/>
			</div>
			<br>
			<div class="input-group">			 
				<input type="text" name="weakness3" id="weakness3" class="form-control" placeholder="Weakness 3"/>
			</div>
			<br>
			<div class="input-group">			 
				<input type="text" name="weakness4" id="weakness4" class="form-control" placeholder="Weakness 4"/>
			</div>
		</div>
	  </div>
	</div>
	<!-- end  of accordion 2 -->

	<div class="accordion-item">
	  <h2 class="accordion-header" id="headingThree">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			OPPORTUNITIES 
		</button>
	  </h2>
	  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<div class="input-group">			 
				<input type="text" name="opportunity1" id="opportunity1" class="form-control" placeholder="Opportunity 1"/>
			</div>
			<br>
			<div class="input-group">			 
				<input type="text" name="opportunity2" id="opportunity2" class="form-control" placeholder="Opportunity 2"/>
			</div>
			<br>
			<div class="input-group">			 
				<input type="text" name="opportunity3" id="opportunity3" class="form-control" placeholder="Opportunity 3"/>
			</div>
			<br>
			<div class="input-group">			 
				<input type="text" name="opportunity4" id="opportunity4" class="form-control" placeholder="Opportunity 4"/>
			</div>
		</div>
	  </div>
	</div>
		<!--- end  of  accordion 3  -->
	<div class="accordion-item">
		<h2 class="accordion-header primary" id="headingThree">
		  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			THREATS 
		  </button>
		</h2>
		<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
		  <div class="accordion-body">
			<div class="input-group">			 
				<input type="text" name="threat1" id="threat1" class="form-control" placeholder="Threat 1"/>
			</div>
			<br>
			<div class="input-group">			 
				<input type="text" name="threat2" id="threat2" class="form-control" placeholder="Threat 2"/>
			</div>
			<br>
			<div class="input-group">			 
				<input type="text" name="threat3" id="threat3" class="form-control" placeholder="Threat 3"/>
			</div>
			<br>
			<div class="input-group">			 
				<input type="text" name="threat4" id="threat4" class="form-control" placeholder="Threat 4"/>
			</div>
		  </div>
		</div>
	  </div>
  </div>
  <br>
  <div class="d-grid gap-2 col-6 mx-auto">
	<input class="btn btn-primary btn-lg" type="submit"> 	 
  </div>

  <br>
  <br>

  <!-- end  of  acordion 4-->
</form>

@endsection
>>>>>>> 93a2cf749504ae9409e39cf97a98df1917353c43
