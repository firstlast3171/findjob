<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="/css/test.css">
     <title>Document</title>
</head>
<body>
     <h1>{{$heading}}</h1> 

     @unless (count($contents) == 0)
     @foreach ($contents as $content)
     <h4>{{$content->title}}</h4>
    @endforeach
        
    @else
    <h1>Not Listing Found</h1>
     @endunless
</body>
</html>

 