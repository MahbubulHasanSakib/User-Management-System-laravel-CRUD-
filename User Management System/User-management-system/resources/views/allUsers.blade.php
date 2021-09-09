<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        form.del_form {
    display: inline;
  
}

body
{
    background-color:#152733;
    color:#fff;
}
.edit_btn i 
{
  color:lightblue !important;
}
.delete_btn i 
{
    color:darkred !important;
}
a:hover
{
    text-decoration:none;
    color:#000;
}
i {
    font-size: 20px!important;
}
         form.del_form i
         {
             font-size:15px;
         }
         .add_user {
    text-decoration: none;
    border: 1px solid #435574;
    display: block;
    padding: 2px;
    color: black;
    border-radius: 3px;
    width: 110px;
    font-weight: bold;
    /* font-variant: diagonal-fractions; */
    background: lightgray;
    margin-bottom: 10px;
}
        .all_users
        {
            width:50%;
            margin:0 auto;
            padding-top:150px;
        }
       
        .delete_btn,.edit_btn
        {
            cursor: pointer;
            outline:0;
            border:none;
            background:transparent;
        }
        th,td{
            padding:10px;
        }
    
        </style>
    </head>
    <body>
        <div class="all_users"> 
        <a class="add_user" href="/users/create">New User<i class="fa fa-user-plus" aria-hidden="true"></i></a>   
        
    <table  border="1" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($users as $user)
  <tbody>
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->gender}}</td>
      <td>{{$user->status}}</td>
      <td><button class="edit_btn btn "><a href="/users/{{$user->id}}/edit" ><i class="fa fa-pencil-square" aria-hidden="true"></i></a></button>
      <form class="del_form" action="/users/{{$user->id}}/delete" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure to delete?')"  class="delete_btn btn "><i class="fa fa-trash" aria-hidden="true"></i></button>
    </form>
      
    </td>
</tr>
  </tbody>
  @endforeach
</table>
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</div>
    </body>
</html>