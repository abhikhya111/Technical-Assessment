<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ValuezHut Technical test</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
        <style>

            body {
                font-family: 'Nunito', sans-serif;
            }
            .btn{

                padding: 10px;
                width: 80px;
                height: 35px;
                background: green;
                border-radius:13%;
                margin: 10px;
                margin-right: 10px;


            }
        </style>

    <body>

        <div class="container mt-2">
        <div class="row">
            <div class="pull-left">
                <h2>Valuez Technical Test</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create Company</a>
            </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <table class="table table-bordered">
            <th>Id</th>
            <th>Name</th>
            <th>Email Id</th>
            <th>Address</th>
            <th>Action</th>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address }}</td>
                <form action="{{ route('users.destroy', $user->id) }}" method="Post">
                    @csrf
                    @method('DELETE')
                <td><input type="submit" class="btn" name="delete" value="Delete" placeholder="Delete"></td>
            </form>
            </tr>
        @endforeach
        </table>

    </div>
        </div>
    </body>
    </html>
