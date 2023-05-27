@extends('layout')

@section('content')
    
<main class="container my-5">

     <div class="row border p-4">
          <h1 class="text-center">Change Role</h1>
          <div class="col-8 p-4 m-auto">
     <form action="/user/edit/{{$user->id}}" method="post">
          @csrf
          @method('PUT')
     <div class="from-group my-4">
          <label for="company">Change Role</label>
          <select class="form-select" aria-label="Default select example" name="role">
               <option selected>Select Role</option>
               @foreach ($roles as $role)
               <option value="{{$role->id}}">{{$role->role}}</option>
               @endforeach
               
               
             </select>
         
     </div>

     
    

     <button type="submit" class="btn btn-primary">Update</button>
 
     </form>
          </div>
     </div>


<div class="my-2 p-4">

</div>
</main>

@endsection


