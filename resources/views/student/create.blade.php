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
  <h2>Vertical (basic) form</h2>
  <form action="{{url('student/store')}}" method ="post">
    @csrf
    <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name">
        @error('first_name')
        <div class="alert" style="color:red"> {{$message}}</div>
        @enderror



      </div>
      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name">
        @error('last_name')
        <div class="alert" style="color:red"> {{$message}}</div>
        @enderror



      
      </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      @error('email')
        <div class="alert" style="color:red"> {{$message}}</div>
        @enderror


    </div>
    <div class="form-group">
      <label for="address_line_1">address_line_1:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter address" name="address_line_1">
      @error('address_line_1')
        <div class="alert" style="color:red"> {{$message}}</div>
        @enderror

    </div>
    <div class="form-group">
      <label for="address_line_2">address_line_2:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter address" name="address_line_2">
      @error('address_line_2')
        <div class="alert" style="color:red"> {{$message}}</div>
        @enderror

    </div>
    <div class="form-group">
        <label for="mobile">mobile:</label>
        <input type="text" class="form-control" id="mobile" placeholder="Enter mobile no" name="mobile">
        @error('mobile')
        <div class="alert" style="color:red">{{$message}}</div>
        @enderror



      </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>