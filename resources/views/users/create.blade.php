<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ValuezHut Create</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add User</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                </div>
            </div>
        </div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif
        <form method="post" action={{ route('users.store')}}>
            @csrf
        <table class="table table-bordered">
            <th>Name</th>
            <th>Email Id</th>
            <th>Address</th>
            <tr>
                <td><input type="text" class="form-control" name="name" placeholder="Name">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                 @enderror

                </td>
                <td><input type="text" class="form-control" name="email" placeholder="Email Address">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                 @enderror</td>
                <td><input type="text" class="form-control" name="address" placeholder="Address">
                    @error('address')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                 @enderror</td>
                <td><button type="submit" class="btn btn-primary ml-3">Submit</button></td>

            </tr>
        </table>
    </form>
</div>
</div>
</body>
    </html>
