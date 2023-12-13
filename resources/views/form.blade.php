<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
{{-- inline css --}}
<style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }
    
    li {
      float: left;
      margin: 25px;
      margin-left: 45px;
      margin-right: 285px;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    li a:hover:not(.active) {
      background-color: #111;
    }
    
    .active {
      background-color: #04AA6D;
    }
    </style>
</head>

<body>
    {{-- header --}}
   
    <ul>
        <li><a href="/form">Form</a></li>
        <li><a href="/reg/view">Table</a></li>
        <li><a href="/reg/edit/{id}">Upd_form</a></li>
       
        
      </ul>
      
  
  
    
    {{-- user registeration form --}}
    <div class="container mt-5">
        <center><h1>{{$title}}</h1> </center>
        <form action="{{$url}}" class="form-group" method="POST" >
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" >
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span><br>
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" >
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span><br>
            <label for="password">Password</label>
            <input type="password" name="pass" class="form-control" >
            <span class="text-danger">
                @error('pass')
                    {{$message}}
                @enderror
            </span><br>
            <input type="submit" class="btn btn-primary" value="Register">
            
        </form>
    </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>