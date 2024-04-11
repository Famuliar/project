<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('users.update', $user->id)}}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
        <label for="first_name">First name</label><br>
        <input class="form-control" id="first_name" name="first_name" value="{{$user->first_name}}">
    </div>

    <div class="mb-3">
        <label for="last_name" >Second name</label><br>
        <input class="form-control" id="last_name" name="last_name" value="{{$user->last_name}}">
    </div>

    <div class="mb-3">
        <label for="middle_name" >Middle name</label><br>
        <input class="form-control" id="middle_name" name="middle_name" value="{{$user->middle_name}}">
    </div>

    <div class="mb-3">
        <label for="birth_date" >Birth date</label><br>
        <input type="date" class="form-control" id="birth_date" aria-describedby="dataHelp" name="birth_date" value="{{$user->birth_date}}">
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Email</label><br>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{$user->email}}">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label><br>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{$user->password}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
    <a href="{{route('users.index')}}">Back</a>
</body>
</html>
