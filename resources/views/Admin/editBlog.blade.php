<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit blog</title>
    @extends ('layouts.app')
    @section('form') 
    @if (session('success'))
<h2>Update Blog</h2>
<div class="alert alert-success">
  <strong>Success!</strong>Blog updated.
</div>
 @endif
    <!-- <center> -->
        <form action="{{url('/admin/update-blog')}}" method="post">
        @method('put')
        @csrf
        <h3 id="sign-up-h3" style="color: rgb(27, 6, 6);">Update Blog</h3>
                <div class="input">
                    <input type="hidden" name="id" value="{{$SingleBlog->id}}">
                    <label class="label" for="">Title of news</label>
                    <input  class="inpt-tag" name="Title" type="text" value="{{$SingleBlog->title}}">
                </div>
                <div class="input">
                    <label class="label" for=""> Body of news</label>
                   <textarea class="inpt-tagA" name="Body" cols="30" rows="10">
                   {{$SingleBlog->body}}
                   </textarea>
                </div>
                <div class="input">
                    <label class="label" for="">Picture</label>
                    <input  class="inpt-tag" name="Picture" value="{{$SingleBlog->picture}}" type="text" >
                </div>
              
                <div class="input">
                  <button class="button btn btn-danger" type="submit">Update Blog</button>
                </div>
                <div class="input">
                   <a href="admin-dashboard.php" class="cancel btn btn-primary">Cancel</a>
                </div>
        </form>
    <!-- </center> -->
    @endsection
</body>
</html>