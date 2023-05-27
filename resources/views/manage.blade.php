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
    
      <th scope="col">Title</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($listings as $listing)
        
  
    <tr>

      <td class="fs-4">{{$listing->title}}</td>
      <td><a href="/listings/edit/{{$listing->id}}" class="mx-2 btn btn-primary rounded my-1 fs-4">Edit</a> <form action="/listings/delete/{{$listing->id}}" method="post">
        @csrf
        @method('DELETE')
    
        <button type="submit" class="btn btn-danger mx-2 rounded">Delete</button>
      </form></td>
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