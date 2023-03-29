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
    <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>All Users</h2>
                <h6>Navigate to: 
                    <a class="btn btn-primary" href="{{ route('users.add') }}">Add User</a>
                    <a class="btn btn-primary" href="{{ route('tasks.all') }}">All Tasks</a>
                    <a class="btn btn-primary" href="{{ route('tasks.add') }}">Add Task</a>
                </h6>
            </div>
            @php
            $i=1;
            @endphp
            <div class="card-body">
                <table id="usertable">
                    <thead>
                        <tr>
                            <td>Sr.No.</td>
                            <td>User Name</td>
                            <td>User Email</td>
                            <td>Task Details</td>
                            <td>Task Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $task->users }}</td>
                                <td>{{ $task->email }}</td>
                                <td>{{ $task->details }}</td>
                                <td>@if($task->status == 1) Done @else Pending @endif</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button onclick="exprt()" class="btn btn-primary">Export to XLSX</button>
            </div>
        </div>
    </div>
    <script>
        let table = new DataTable('#usertable');
    </script>
    <script>
        function exprt(){
            $("#usertable").table2excel({
                filename: "Tasks.xls"
            });
        }
    </script>
</body>
</html>