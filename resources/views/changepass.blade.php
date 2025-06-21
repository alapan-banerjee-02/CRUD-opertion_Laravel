<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    @if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
    @endif
    <header class="modal-header font-primary">
        <h3>Change Password</h3>
    </header>
    <form method="post" action="{{url('/updatepass')}}">
        @csrf
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" name="pass" class="form-control" placeholder="Enter the password">
        </div>
        <div class="form-group">
            <label for="cpass">Confirm Password</label>
            <input type="password" name="cpass" class="form-control" placeholder="Enter the  confirm password">
        </div>
        <button type="submit" class="btn btn-outline-primary">submit</button>
    </form>
</body>
</html>