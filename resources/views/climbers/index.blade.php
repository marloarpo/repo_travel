<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers List</title>
</head>
<body>
    <h1>Customers List</h1>

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Citizenship</th>
            <th>route</th>
        </tr>
        @foreach ($climbers as $climber)
        <tr>
            <td>{{$climber->first_name}}</td>
            <td>{{$climber->last_name}}</td>
            <td>{{$climber->email}}</td>
            <td>{{$climber->age}}</td>
            <td>{{$climber->citizenship}}</td>
            <td>{{$climber->route}}</td>
        </tr>
        @endforeach
    </table>

    
</body>
</html>