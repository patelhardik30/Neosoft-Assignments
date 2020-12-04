 <!DOCTYPE html>
<html>
  <link rel="stylesheet"type="text/css" href="{{ asset('css/adminlte.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  align-items: center;
  width: 60%;
  height: 40%;
}
.center{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  align-items: center;
  width: 60%;
  height: 10%;
  margin-left: auto;
  margin-right: auto;

}
.error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
}
</style>
<body>
  @if (session('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    {{ session('success') }}
                </div>
            @endif
@if (session('failure'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>  
                    {{ session('failure') }}
                </div>
            @endif
  <hr>
  <h2>Edit User</h2><span><a style=" float: right; margin: 10px;" href="{{route('view-user')}}" class="btn btn-primary" role="button"> Back</a></span>
  <hr>
  <form method="post" action="{{route('add-user')}}" enctype="multipart/form-data">
    @csrf
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname"  value="{{$banner->first_name}}">
    @if ($errors->has('firstname'))
                <div class="error">
                    {{ $errors->first('firstname') }}
                </div>
                @endif

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" value="{{$banner->last_name}}">
       @if ($errors->has('lastname'))
                <div class="error">
                    {{ $errors->first('lastname') }}
                </div>
                @endif


    <label for="email">Email</label>
    <input type="text" id="email" name="email"  value="{{$banner->email}}">
       @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
                @endif

    <label for="number">Contact Number</label>
    <input type="text" id="number" name="number"  value="{{$banner->contact_no}}">
       @if ($errors->has('number'))
                <div class="error">
                    {{ $errors->first('number') }}
                </div>
                @endif

    <label for="city">City</label>
    <input type="text" id="city" name="city"  value="{{$banner->city}}">
       @if ($errors->has('city'))
                <div class="error">
                    {{ $errors->first('city') }}
                </div>
                @endif

    <label for="gender">Gender</label><br>
    <input style="display: inline-flex;" type="radio" name="gender" value="male"> Male
  <input style="display: inline-flex;" type="radio" name="gender" value="female"> Female
  <br><br>
     @if ($errors->has('gender'))
                <div class="error">
                    {{ $errors->first('gender') }}
                </div>
                @endif
   
   <label >Profile Photo:</label><br><br>
   <input type="file" name="image"  value="{{$banner->photo}}"><br><br>
      @if ($errors->has('image'))
                <div class="error">
                    {{ $errors->first('image') }}
                </div>
                @endif

  <label for="status">Status:</label><br>
    <input style="display: inline-flex;" type="radio" name="status" value="1"> Active
    <input style="display: inline-flex;" type="radio" name="status" value="0"> Inactive
       @if ($errors->has('status'))
                <div class="error">
                    {{ $errors->first('status') }}
                </div>
                @endif

  
    <input type="submit" value="Submit">

  </form>


</body>
</html>