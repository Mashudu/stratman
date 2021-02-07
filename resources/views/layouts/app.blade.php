<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href=" https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
 


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/landings/organisation')}}">My Organisation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/landings/environment')}}">Environment Scan</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/home')}}">Organisation Strategy</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/landings/framework')}}">Framework</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/landings/actionplan')}}">Action Plan</a> 
                  </li>
                </ul>
                <span class="navbar-text">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
             
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav pull right">
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                                      <li>
                                        <a class="dropdown-item" id="logout-button" href="#">
                                            {{ __('Logout') }}
                                        </a>
                                          
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            @endguest
                        </ul>
                    </div>
                
                </span>
              </div>
            </div>
          </nav>

        <main class="container">
          <br>
          @include('inc.messages')
            @yield('content')
        </main>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
   <script>
       $('#logout-button').on('click', function(e) {
    e.preventDefault();
    $('#logout-form').submit();
});
   </script>
   
   <script type="text/javascript">
    $(document).ready(function(){
        $('.editbtn').on('click',function(){
            $('#editSwotModal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);
            $('#id').val(data[0]);
            $('#swotType').val(data[2]);
            $('#status').val(data[1]);
            $('#issueDescription').val(data[7]);

        });
        $('#editForm').on('submit',function(e){
        e.preventDefault();
        var  id  = $('#id').val();

        $.ajax({
            type:"PUT",
            url:"/swotupdate/"+id,
            data:$('#editForm').serialize(),
            success:function(response){
                console.log(response)
                $('#editSwotModal').modal('hide')
                alert("Data Updated");
                location.reload();
            },
            error:function(error){
                console.log(error)
                alert("Data Not Updated");
            }
        });
    });


    });
    </script>
    
 <!-- Add data  Script begin -->
 <script type="text/javascript">
$(document).ready(function(){
    $('#addForm').on('submit',function(e){
        e.preventDefault();

        $.ajax({
            type:"POST",
            url:"/swotadd",
            data:$('#addForm').serialize(),
            success:function(response){
                console.log(response)
                $('#addSwotModal').modal('hide')
                alert("Data Saved");
                location.reload();
            },
            error:function(error){
                console.log(error)
                alert("Data Not Saved");
            }
        });
    });
});
     
     </script>
 <!-- Add  data script end  -->
  <script>
$(document).ready(function() {
    $('#example').DataTable({
        "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
    });
} );

  </script>

</body>
</html>
