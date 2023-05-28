@extends('layout')

@section('content')
    

<main class="container my-5">
<a href="/" class="btn btn-sm my-2 fs-4"> <img src="/styles/svg/leftarrow.svg" alt="left" width="18px"> Back</a>
     <div class="row border p-4">
          <h1 class="text-center">Post Job</h1>
          <div class="col-8 p-4 m-auto">
     <form action="/listings" method="post" enctype="multipart/form-data">
          @csrf
        
     <div class="from-group my-4 ">
          <label for="company">Company Name</label>
          <input type="text" class="form-control" placeholder="Company Name" name="company" id="company" value="{{ old('company', '') }}">
          @error('company')
          <p class="text-danger">
              {{$message}}
          </p>
          @enderror
     </div>

     
     <div class="from-group my-4">
          <label for="logo">Company Logo</label>
          <input type="file" class="form-control" placeholder="Job Logo" name="logo" id="logo" accept="image/png, image/gif, image/jpeg, image/jpg, image/jfif">
     </div>

     <div class="from-group my-4">
          <label for="title">Job Title</label>
          <input type="text" class="form-control" placeholder="Job Title (Example: Senior Web Developer)" name="title" id="title" value="{{ old('title', '') }}">
          @error('title')
          <p class="text-danger">
              {{$message}}
          </p>
          @enderror
     </div>

     <div class="from-group my-4">
          <label for="location">Location</label>
          <input type="text" class="form-control" placeholder="Job Location (Example: Magway, Myanmar)" name="location" id="location" value="{{ old('location', '') }}">
          @error('location')
          <p class="text-danger">
              {{$message}}
          </p>
          @enderror
     </div>

     <div class="from-group my-4">
          <label for="email">Contact Email</label>
          <input type="email" class="form-control" placeholder="Contact Email (Example: test@gmail.com)" name="email" id="email" value="{{ old('email', '') }}">
          @error('email')
          <p class="text-danger">
              {{$message}}
          </p>
          @enderror
     </div>

     <div class="from-group my-4">
          <label for="tags">Job Tags (Comma Separated)</label>
          <input type="text" class="form-control" placeholder="Job Tags(Example: PHP,Laravel,React)" name="tags" id="tags" value="{{ old('tags', '') }}">
          @error('tags')
          <p class="text-danger">
              {{$message}}
          </p>
          @enderror
     </div>

     <div class="from-group my-4">
          <label for="description">Job Description</label>
         <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Job Description (Example: tasks, requirements, salary)">{{ old('description', '') }}</textarea>
         @error('description')
         <p class="text-danger">
             {{$message}}
         </p>
         @enderror
     </div>

     <button type="submit" class="btn btn-primary">Post</button>
 
     </form>
          </div>
     </div>


<div class="my-2 p-4">

</div>
</main>



@endsection