<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <div class="card-header" >
      <h1 >User List</h1>
    </div>
    <div class="card-body">
                <form method="get" action="{{route('viewmember')}}">
                        
                        <input type="hidden" name="id" value="{{$team->id}}">
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<body>
@if(Session::has('delete_user'))
<span>{{Session::get('user_update')}}</span>
@endif
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th><br>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Birth of Date</th>
            <th scope="col">Gender</th>
            <th scope="col">Email</th>
            <th scope="col">Contact Number</th>
            <br>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>

          @foreach($users as $user)
       <tr>
           <td class="bg-primary">{{$id}}</td>
           <td class="bg-success">{{fname}}</td>
           <td class="bg-warning">{{lname}}</td>
           <td class="bg-danger">{{dob}}</td>
           <td class="bg-info">{{gender}}</td>
           <td class="bg-primary">{{email}}</td>
           <td class="bg-success">{{c_number}}</td>
           <td>
           <button type="button" class="btn btn-warning"><a href="/editUser/{{$user->id}}">UPDATE</a></button>
              
           </td> 
           <td>
           <button type="button" class="btn btn-danger"><a href="/deleteUser/{{$user->id}}">DELETE</a></button>
    </td>

  @endforeach
  
          
          <tr>
    
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>

