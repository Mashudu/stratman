<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href=" https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
 


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Strat Manager') }}
                  </a>
               
                      <a class="p-2 text-dark" href="{{url('/')}}">Home</a>
                      <a class="p-2 text-dark" href="{{url('/landings/organisation')}}">My Organisation</a>
                      <a class="p-2 text-dark" href="{{url('/landings/environment')}}">Environment Scan</a>
                      <a class="p-2 text-dark" href="{{url('/home')}}">Organisation Strategy</a>
                      <a class="p-2 text-dark" href="{{url('/landings/framework')}}">Framework</a>
                      <a class="p-2 text-dark" href="{{url('/landings/actionplan')}}">Action Plan</a> </div>
                      <a class="p-2 text-dark" href="{{url('/about')}}">About</a>
                      <a class="p-2 text-dark" href="{{url('/')}}">Documentation</a>
                      <a class="p-2 text-dark" href="{{url('/')}}">Contact</a> 

                                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
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
    $('#example').DataTable();
} );

  </script>

</body>
</html>
