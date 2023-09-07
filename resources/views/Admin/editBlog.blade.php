<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    @vite('resources/css/table.css')
</head>
<body>
    @extends('layouts.app')
    @section('table')
    @if(count($Products) > 0)
    <table class="table">
            <tr>
                <th>S/N</th>
                <th>Title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
    @php
    $sn=1
    @endphp
    @foreach ($Products as $product)
           <tr> 
                <td>{{$sn++}}</td>
                <td>{{$product->item}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td> 
                <form action="/admin/delete" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="Id" class="" value="{{$product->id}}">
                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                    <a href="{{url('/admin/edit', $product->id) }}" class="btn  btn-success">Update</a>
                </form> </td>
            </tr> 
            @endforeach
          </table>
          @endif

        
    @endsection
</body>
</html>