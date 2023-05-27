@extends('authlayout')

@section('auth')

<main class="container my-5">

     <div class="row border p-4">
          <h1 class="text-center">Login</h1>
          <div class="col-8 p-4 m-auto">
     <form action="" method="post">
          @csrf
     <div class="from-group my-4">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="{{old("email","")}}" autocomplete="off">
          @error('email')
          <p class="text-danger">
               {{$message}}
           </p>
          @enderror
     </div>

     
     <div class="from-group my-4">
          <label for="password">Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="{{old("password","")}}" autocomplete="off">
          @error('password')
          <p class="text-danger">
               {{$message}}
           </p>
          @enderror
     </div>

    

    

     <button type="submit" class="btn btn-primary form-control">Login</button>
 
     </form>
     <p class="mt-3">Haven't Account Yet?<a href="/register">Register</a></p>
          </div>
     </div>


<div class="my-2 p-4">

</div>
</main>

    
@endsection


