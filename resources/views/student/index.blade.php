<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Students Table</h2><a href="{{url('student/create')}}" class="btn btn-info">Add</a>
  <p><b>This table show the details about the students:</b></p>           
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>address_line_1</th>
        <th>address_line_2</th>
        <th>mobile</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $value)
      <tr>
        <td>{{$value->first_name}}</td>
        <td>{{$value->last_name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->mobile}}</td>
        <td>{{$value->address_line_1}}</td>
        <td>{{$value->address_line_2}}</td>
        <td>
          <a href="{{url('student/view')}}/{{$value->id}}" class="btn btn-warning">view</a>
          <a href="{{url('student/edit')}}/{{$value->id}}" class="btn btn-danger">edit</a>
        </td>
      </tr>
      @endforeach
      
      
    </tbody>
  </table>
</div>

</body>
</html>
