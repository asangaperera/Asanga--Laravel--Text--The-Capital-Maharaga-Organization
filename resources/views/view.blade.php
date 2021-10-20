<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
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
           <td>{{$user->id}}</td>
           <td>{{$user->fname}}</td>
           <td>{{$user->lname}}</td>
           <td>{{$user->dob}}</td>
           <td>{{$user->gender}}</td>
           <td>{{$user->email}}</td>
           <td>{{$user->c_number}}</td>
           <td>
           <button type="button" class="btn btn-success"><a href="/edit-user/{{$user->id}}">UPDATE</a></button>
              
           </td> 
           <td>
           <button type="button" class="btn btn-danger"><a href="/delete-user/{{$user->id}}">DELETE</a></button>
    </td>
</tr>
  @endforeach
  
          
          <tr>
    
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>

