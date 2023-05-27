@extends('layout')

@section('content')
    
<main class="container my-5">
<a href="/listings/{{$listing->id}}" class="btn btn-sm my-2 fs-4"> <img src="/styles/svg/leftarrow.svg" alt="left" width="18px"> Back</a>
     <div class="row border p-4">
          <h1 class="text-center">Update Job</h1>
          <div class="col-8 p-4 m-auto">
     <form action="/listings/edit/{{$listing->id}}" method="post">
          @csrf
          @method('PUT')
     <div class="from-group my-4">
          <label for="company">Company Name</label>
          <input type="text" class="form-control" placeholder="Job Title" name="company" id="company" value="{{$listing->company}}">
          @error('company')
          <p class="text-danger">
              {{$message}}
          </p>
          @enderror
     </div>

     
     <div class="from-group my-4">
          <label for="logo">Company Logo</label>
          <input type="file" class="form-control" placeholder="Job Tags(Example: PHP,Laravel,React)" name="logo" id="logo" accept="image/png, image/gif, image/jpeg, image/jpg, image/jfif">
          <img src="{{ $listing->image ? "/storage/".$listing->image : "/images/acme.png"}}" alt="No Image" style="max-width:250px; max-height:fit-content" class="border d-none d-lg-block">
     </div>

     <div class="from-group my-4">
          <label for="title">Job Title</label>
          <input type="text" class="form-control" placeholder="Job Title (Example: Senior Web Developer)" name="title" id="title" value="{{$listing->title}}">
          @error('title')
          <p class="text-danger">
              {{$message}}
          </p>
          @enderror
     </div>

     <div class="from-group my-4">
          <label for="location">Location</label>
          <input type="text" class="form-control" placeholder="Job Location (Example: Magway, Myanmar)" name="location" id="location" value="{{$listing->location}}">
          @error('location')
          <p class="text-danger">
              {{$message}}
          </p>
          @enderror
     </div>

     <div class="from-group my-4">
          <label for="email">Contact Email</label>
          <input type="email" class="form-control" placeholder="Contact Email (Example: test@gmail.com)" name="email" id="email" value="{{$listing->email}}">
          @error('email')
          <p class="text-danger">
              {{$message}}
          </p>
          @enderror
     </div>

     <div class="from-group my-4">
          <label for="tags">Job Tags (Comma Separated)</label>
          <input type="text" class="form-control" placeholder="Job Tags(Example: PHP,Laravel,React)" name="tags" id="tags" value="{{$listing->tags}}">
          @error('tags')
          <p class="text-danger">
              {{$message}}
          </p>
          @enderror
     </div>

     <div class="from-group my-4">
          <label for="description">Job Description</label>
         <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Job Description (Example: tasks, requirements, salary)">{{$listing->description}}</textarea>
         @error('description')
         <p class="text-danger">
             {{$message}}
         </p>
         @enderror
     </div>

     <button type="submit" class="btn btn-primary">Update</button>
 
     </form>
          </div>
     </div>


<div class="my-2 p-4">

</div>
</main>

@endsection


