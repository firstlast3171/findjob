@extends('layout')


@section('content')
    

<main class="container my-5">
 <a href="/" class="btn btn-sm my-2 fs-4"> <img src="/styles/svg/leftarrow.svg" alt="left" width="18px"> Back</a>
<div class="card">
  <div class="card-header">
    <h3>{{$content->title}}</h3> 
  </div>
  <div class="card-body">
     <img src="{{ $content->image ? '/storage/'.$content->image : "/images/acme.png"}}" alt="No Image"  width="250px" height="250px" class="border">
     {{-- {{ $content->image ? "<img src='/images/$content->image' alt='No Image'  width='250px' height='250px' class='border'>" : "" }} --}}
    <h5 class="card-title">{{$content->company}}</h5>
    <x-listing-tags :tags="$content->tags" />
    <p> <img src="/styles/svg/address.svg" alt="location" width="20px" style="margin-right: 5px">{{$content->location}}</p>
     <div class="border p-3 my-2">
          <h3>Job Description</h3>
          <p class="text-justify">{{$content->description}}</p>
     </div>
    <a href="mailto:{{$content->email}}"class="btn btn-primary">Apply</a>
  </div>
</div>
@auth
@unless(auth()->user()->role->role === "user")


@if (auth()->user()->id == $content->user_id)
<div class="my-2 d-flex">
  <a href="/listings/edit/{{$content->id}}" class="btn btn-warning mx-2 rounded">Edit</a>

  <form action="/listings/delete/{{$content->id}}" method="post">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger mx-2 rounded">Delete</button>
  </form>
</div>
@endif

@endunless

@endauth

<div class="my-2 p-4">

</div>
</main>



@endsection