@props(['tags'])

@php
$tag = explode(",",$tags)    
@endphp

<p class="card-text my-3">
     @foreach ($tag as $item)
     <a href="/?tag={{$item}}" class="btn btn-dark mx-2 my-1">{{$item}}</a>
     @endforeach
</p>