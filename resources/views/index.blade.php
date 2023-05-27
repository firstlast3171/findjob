@extends('layout')

@section('content')
    

<main class="container my-5">

<div class="row my-3 p-2">

<div class="col-12 shadow">
     <div class="m-auto p-5 text-center">
          <h1 class="fs-1 border py-2 ps-3 pe-4 m-auto rounded bg-dark text-light" style="width:fit-content"> <i> <b>F</b> </i> </h1>
          <h1> <b>FindJob</b> </h1>
          <p class="fs-4">Find Your Jobs and Post Jobs</p>
          @auth
          @if (auth()->user()->role->role === "admin")
          <a href="/listings/create" class="btn btn-outline-dark rounded">Post Jobs</a>
          @elseif(auth()->user()->role->role === "postman")
          <a href="/listings/create" class="btn btn-outline-dark rounded">Post Jobs</a>
          @elseif(auth()->user()->role->role === "user")
          <p class="alert alert-warning">Only Postman can post Jobs</p>
          @else
          <a href="/register" class="btn btn-outline-dark rounded">Sign up to find jobs and post jobs</a>
          @endif 

          @else
          <a href="/register" class="btn btn-outline-dark rounded">Sign up to find jobs and post jobs</a>
          @endauth
         
          
        
         
        
       

     </div>
</div>

<div class="col-12 my-3">
<form action="?search" method="get">
     <div class="input-group">
          <input type="text" placeholder="Search" class="form-control rounded" name="search">
    
          <button class="btn btn-outline-secondary rounded" type="submit" id="button-addon2"> Search </button>
     </div>
</form>
</div>

<div class="col-12">
<div class="row text-center">

<!-- All Jobs -->
@unless (count($contents) == 0)
    

@foreach ($contents as $content)
    

 <!-- Jobs -->
     <div class="col-12 col-lg-6 my-3">
       
     <div class="m-auto d-block d-lg-flex">
     <img src="{{ $content->image ? "/storage/".$content->image : "/images/acme.png"}}" alt="No Image" style="width:250px; max-height:fit-content" class="border d-none d-lg-block">
        
  
        <div class="card">
          <img class="d-block d-lg-none" src="{{ $content->image ? "/storage/".$content->image : "/images/acme.png"}}" alt="Card image cap" height="250px" width="250px">
         <div class="card-body">
           <a href="/listings/{{$content->id}}" class="card-title text-dark btn" style="text-decoration:none"> <h4>{{$content->title}}</h4> </a>
           <h5 class="card-title"> <a href="?company={{$content->company}}" style="text-decoration:none">{{$content->company}}</a></h5>
           <x-listing-tags :tags="$content->tags" />
           <p> <img src="/styles/svg/address.svg" alt="location" width="20px" style="margin-right: 5px">{{$content->location}}</p>
           <a href="/listings/{{$content->id}}" class="my-2">More Detail</a>
         </div>
       </div>
     </div>
     
     </div>
<!-- Jobs -->

@endforeach

@else
 <h1>No Jobs Found</h1>
@endunless

<div>
     {{$contents->links()}}
</div>







<!-- All Jobs -->
</div>
</div>


</div>

<div class="my-2 p-4">
 
</div>
</main>



@endsection