@extends('layout')

@section('content')
    

<main class="container my-5">
<a href="/" class="btn btn-sm my-2 fs-4"> <img src="/styles/svg/leftarrow.svg" alt="left" width="18px"> Back</a>
     <div class="row border p-4">
          <h1 class="text-center">Manage Post</h1>
          <div class="col-12 p-4 m-auto">
          
          <table class="table">
  <thead class="thead-light">
    <tr>
    
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
        
  
    <tr>

      <td class="fs-5">{{$user->email}}</td>
      <td class="fs-5">{{$user->role->role}}</td>
      <td>
          <a href="/user/edit/{{$user->id}}" class="mx-2 btn btn-primary rounded my-1 fs-4">Change Role</a>
          @if ($user->role->role === "admin")
          
          @else
          <form action="/user/delete/{{$user->id}}" method="post">
               @csrf
               @method('DELETE')
           
               <button type="submit" class="btn btn-danger mx-2 rounded">Delete</button>
             </form>
          @endif
    </td>
    </tr>
    @endforeach
 
    
  </tbody>
</table>
          </div>
     </div>


<div class="my-2 p-4">

</div>
</main>



@endsection