<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
    @vite('resources/css/form.css')
</head>
<body>
    @extends ('layouts.app')
    @section('form') 
    @if (session('success'))
<h2>Add Product</h2>
<div class="alert alert-success alert-dismissible">
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
   <strong>Success!</strong> {{ session('success') }}
 </div>
 @endif
    <!-- <center> -->
        <form action="{{url('/add-product')}}" method="post">
      
        @csrf
        <h3 id="sign-up-h3" style="color: rgb(27, 6, 6);">Add products</h3>
                <div class="input">
                    <label class="label" for="">Item</label>
                    <input  class="inpt-tag" name="item" type="text">
                </div>
                <div class="input">
                    <label class="label" for=""> Quantity</label>
                    <input  class="inpt-tag" name="quantity" type="text">
                </div>
                <div class="input">
                    <label class="label" for="">Unit Price</label>
                    <input  class="inpt-tag" name="price" type="number">
                </div>
              
                <div class="input">
                  <button class="button" type="submit">Add to Records</button>
                </div>
                <div class="input">
                   <a href="admin-dashboard.php" class="cancel">Cancel</a>
                </div>
        </form>
    <!-- </center> -->
    @endsection
</body>
</html>