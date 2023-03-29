<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Add Users</h2>
                <h6>Navigate to: 
                    <a class="btn btn-primary" href="{{ route('users.all') }}">All Users</a>
                    <a class="btn btn-primary" href="{{ route('tasks.all') }}">All Tasks</a>
                    <a class="btn btn-primary" href="{{ route('tasks.add') }}">Add Task</a>
                </h6>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('users.save') }}">
                    @csrf
                    <input type="text" name="name" class="form-control" placeholder="Name" />
                    <input type="email" name="email" class="form-control" placeholder="Email" />
                    <input type="number" name="mobile" class="form-control" placeholder="Mobile" />
                    <button type="submit" class="btn btn-primary">Add User</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        let table = new DataTable('#usertable');
    </script>
</body>
</html>