<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <h1>Display Page</h1>
    @if(isset($allInfo))
    <div class="table table-responsiv">
        <table cellpadding="5px" class="table table-bordered table-hover">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach($allInfo->all() as $userInfo)
            <tr>
                <td>{{$userInfo->name}}</td>
                <td>{{$userInfo->age}}</td>
                <td><a href="mailto:{{$userInfo->email}}">{{$userInfo->email}}</a></td>
                <td><a href="tel:{{$userInfo->phone}}">{{$userInfo->phone}}</a></td>
                <td><img src="{{$userInfo->image}}" height="100px" width="100px"></td>
                <td>
                    <a href="{{url('/edit')}}{{$userInfo->user_id}}" class="btn btn-primary">Edit</a>|
                    <a href="{{url('/delete')}}{{$userInfo->user_id}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @endif  
</body>
</html>