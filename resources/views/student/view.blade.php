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
  <h2>Contextual Classes</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <table class="table">
    <thead>
      <tr>
         
      </tr>
    </thead>
    <tbody>
      <tr>
      <th>First Name</th> <td>{{$data->first_name}}</td>
      </tr>      
      <tr class="success">
      <th>LastName</th> <td>{{$data->last_name}}</td>
      </tr>
      <tr class="danger">
      <th>Email</th> <td>{{$data->email}}</td>
      </tr>
      <tr class="info">
      <th>Mobile</th> <td>{{$data->mobile}}</td>
      </tr>
      <tr class="warning">
      <th>address_line_1</th> <td>{{$data->address_line_1}}</td>
      </tr>
      <tr class="warning">
      <th>address_line_2</th> <td>{{$data->address_line_2}}</td>
      </tr>
      <tr>      
      <th>Created At</th> <td>{{$data->created_at}}</td>
    </tr>
    <tr>      
      <th>Updated At</th> <td>{{$data->updated_at}}</td>
    </tr>

</table>

<a href="{{url('/student/index')}}">Back</a>
</div>

</body>
</html>


</head>
<body>
  <table>
    
    <tr>      
      
    </tr>
  
    <tr>      
      
    </tr>

    <tr>      
      
    </tr>
  
    <tr>      
     
    </tr>

    <tr>      
      
    </tr>
  
    <tr>      
      
    </tr>

    
  
    
  

  
</body>
</html>
