
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <div class="card-header" >
    <button type="button" class="btn btn-warning"><a class="nav-link" href="{{ route('register') }}">{{ __('Back') }}</a></button>
    </div>
    <br>
</head>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<body>
@if(Session::has('delete_user'))
<span>{{Session::get('user_update')}}</span>
@endif
<div class="container">
  <h3>Member List</h3>
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Birth of Date</th>
            <th scope="col">Gender</th>
            <th scope="col">Email</th>
            <th scope="col">Contact Number</th>
                
          </tr>
        </thead>
        <tbody>
         <br>

          @foreach($users as $user)
       <tr>
           <td class="bg-primary">{{$user->id}}</td>
           <td class="bg-success">{{$user->fname}}</td>
           <td class="bg-warning">{{$user->lname}}</td>
           <td class="bg-danger">{{$user->dob}}</td>
           <td class="bg-info">{{$user->gender}}</td>
           <td class="bg-primary">{{$user->email}}</td>
           <td class="bg-success">{{$user->c_number}}</td>
           <td>
           <button type="button" class="btn btn-warning"><a href="/editUser/{{$user->id}}">UPDATE</a></button>
              
           </td> 
           <td>
           <button type="button" class="btn btn-danger"><a href="/deleteUser/{{$user->id}}">DELETE</a></button>
    </td>
    <td>
           <button type="button" class="btn btn-warning"><a href="register">ADD</a></button>
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

