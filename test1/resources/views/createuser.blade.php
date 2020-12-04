 <!DOCTYPE html>
 <style>
  /*body{
    width: 60%;
    height: 40%;
    align-content: center;
  }*/
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
<html>

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
  <h2>Create User</h2>
  <hr>
  <div class="form_container_block">
  <form method="post" action="{{route('add-user')}}" enctype="multipart/form-data">
    @csrf
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter the First Name">
    @if ($errors->has('firstname'))
                <div class="error">
                    {{ $errors->first('firstname') }}
                </div>
                @endif

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Enter the Last Name">
       @if ($errors->has('lastname'))
                <div class="error">
                    {{ $errors->first('lastname') }}
                </div>
                @endif


    <label for="email">Email Address</label>
    <input type="text" id="email" name="email" placeholder="Enter Valid Email Address">
       @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
                @endif

    <label for="number">Contact Number</label>
    <input type="text" id="number" name="number" placeholder="Enter Contact Number">
       @if ($errors->has('number'))
                <div class="error">
                    {{ $errors->first('number') }}
                </div>
                @endif

    <label for="city">City</label>
    <input type="text" id="city" name="city" placeholder="Your last name..">
       @if ($errors->has('city'))
                <div class="error">
                    {{ $errors->first('city') }}
                </div>
                @endif

    <label for="add_fields_placeholder">Gender</label><br>
    <input id="add_fields_placeholder" style="display: inline-flex;" type="radio" name="gender" value="male"> Male
  <input id="add_fields_placeholder" style="display: inline-flex;" type="radio" name="gender" value="female"> Female
  <br><br>
     @if ($errors->has('gender'))
                <div class="error">
                    {{ $errors->first('gender') }}
                </div>
                @endif
    
    
     <div id="add_fields_placeholderValue">
        Age:
        <input type="text" name="add_fields_placeholderValue" id="add_fields_placeholderValue">
     </div>
   <label >Profile Photo:</label><br><br>
   <input type="file" name="image"><br><br>
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

  
    <input type="submit" value="Submit" class="btn btn-block">
  </form>


</body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#add_fields_placeholder").change(function()
        {
            if($(this).val() == "male")
        {
            $("#add_fields_placeholderValue").show();
        }
        else
        {
            $("#add_fields_placeholderValue").hide();
        }
            });
                      $("#add_fields_placeholderValue").hide();
});
</script>

