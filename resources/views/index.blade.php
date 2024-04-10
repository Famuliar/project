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
    <form action="{{route('users.create')}}">
        <button>Add one</button>
    </form>
    <div class="table-responsive">
        <table class="table-hover" border="2px" align="center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fist name</th>
                <th scope="col">Last name</th>
                <th scope="col">Middle name</th>
                <th scope="col">Birth date</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
           @foreach($users as $user)
                <tr>
                    <th scope="col"><a href="{{route('users.show', $user->id)}}">{{$user->id}}</a></th>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->middle_name}}</td>
                    <td>{{$user->birth_date}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td><a href="{{route('users.edit', $user->id)}}">edit</a></td>
                    <td>
                        <form action="{{route('users.delete', $user->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
           @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
