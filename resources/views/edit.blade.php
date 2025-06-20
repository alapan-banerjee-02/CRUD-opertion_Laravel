<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

@if(isset($editInfo))
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
    @endif
    <div class="header modal-header font-primary">
        <h3>Update Page</h3>
    </div>
    <form method="post" action="{{url('/update')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="uid" value="{{$editInfo->user_id}}">    
    <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$editInfo->name}}">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" value="{{$editInfo->age}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{$editInfo->email}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" name="phone" class="form-control" value="{{$editInfo->phone}}">
        </div>
        <div class="form-group">
            <label for="img">Image</label>
            <input type="file" name="img" class="form-control">
            <img src="{{$editInfo->image}}" height="100px" width="100px">
        </div>
        <div class="form-group">
            <button class="btn btn-md btn-outline-primary">update</button>
        </div>
    </form>
</div> 
@endif
</body>
</html>