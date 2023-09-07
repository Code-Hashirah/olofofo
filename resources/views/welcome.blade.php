<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Ofofo</title>
    @extends('layouts.app')
    @section('allBlog')
    <!-- {{$allBlog}} -->
    <main class="row container-fliud">
       @foreach ($allBlog as $Blog)
       <div class="col-md-12">
            <h3 class="text-danger">{{$Blog->title}}</h3>
            <img src="{{$Blog->picture}}" alt="picture" height="500px" width="100%">
            <p>{{$Blog->body}}</p>
        </div>
        @endforeach
    </main>
    @endsection
</body>
</html>