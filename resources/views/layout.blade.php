<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <link rel="stylesheet" href="/styles/css/bootstrap.min.css">
     <script src="//unpkg.com/alpinejs" defer></script>
     <title>FindJob</title>
</head>
<body>
     
<nav class="navbar navbar-expand sticky-top navbar-light bg-light p-3 shadow-sm">
 <a href="/" class="navbar-brand"><h3> <b>FindJob</b> </h3></a>



 <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
  <ul class="navbar-nav">
     @auth
     <li class="nav-item"  style=" border-right: solid black 1px; padding-right:2px">Welcome {{explode("@",auth()->user()->email)[0]}}</li>
     <li class="nav-item" style=" border-right: solid black 1px; padding-right:2px"><a class="nav-link" href="/manage/{{auth()->user()->id}}"><img src="/styles/svg/manage.svg" alt="manage" width="20px" style="margin-right:5px">Manage</a></li>
     <li class="nav-item"><a class="nav-link" href="/profile/{{auth()->user()->id}}"><img src="/styles/svg/user.svg" alt="profile" width="15px" style="margin-right:5px">Profile</a></li> 
     @else
     <li class="nav-item" style=" border-right: solid black 1px; padding-right:2px"> <a href="/register" class="nav-link"><img src="/styles/svg/userplus.svg" alt="register" width="20px" style="margin-right:5px">Register</a> </li>
     <li class="nav-item"> <a href="/login" class="nav-link"><img src="/styles/svg/user.svg" alt="login" width="15px" style="margin-right:5px">Login</a> </li>
     @endauth
  
     
  </ul>
</div>
</nav>
<x-flash-message />

@auth
<form action="/logout" method="post">
     @csrf
<button type="submit" class="btn btn-danger rounded m-2">Logout</button>
</form>
@endauth

@yield('content')

<div class="fixed-bottom bg-light shadow-lg">
     <footer class="footer p-3 text-center">
     Copyright © 2023, All Rights reserved
     </footer>
</div>
<script src="/styles/js/popper.min.js"></script>
     <script src="/styles/js/jquery-3.3.1.slim.min.js"></script>
     <script src="/styles/js/bootstrap.min.js"></script>
</body>
</html>