</<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
function validate()
{
 var error="";
 var name = document.getElementById( "name" );
 if( name.value == "" )
 {
  error = " You Have To Write Your Name. ";
  document.getElementById( "error_name" ).innerHTML = error;
  return false;
 }

 var email = document.getElementById( "email" );
 if( email.value == "" || email.value.indexOf( "@" ) == -1 )
 {
  error = " You Have To Write Valid Email Address. ";
  document.getElementById( "error_email" ).innerHTML = error;
  return false;
 }

 var pincode= document.getElementById( "pincode" );
 var pat=/^\d{6}$/;
 if( pincode.value == "" || !pat.test(pincode.value))
 {
  error = " Pincode must be Equal to 6 Digits. ";
  document.getElementById( "error_pin" ).innerHTML = error;
  return false;
 }

 else
 {
  return true;
 }
}

</script>


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
   
</head>
<body>

<h1>Add User Details</h1>



<div class="container col-md-4 col-lg-6 col-sm-4">

    @include('partials.success')
    <form method="POST" action="/userssave"  onsubmit="return validate();">
          {{ csrf_field() }}

       <div>
          <label>Name:</label>
          <input type="text"  id="name" name="name" placeholder="Enter Name" required>
          <p id="error_name" ></p>

      </div>
      <div>
            <label >Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter email" required/>
            <p id="error_email" ></p>

      </div>
      <div>
            <label >Pincode:</label>
            <input type="text" id="pincode" name="pincode" placeholder="Enter pincode" maxlength="6" required/>
            <p id="error_pin" ></p>

      </div>

      <div>

            <input type="submit" value="Submit">

      </div>

    </form>  
    

 </div>   

</body>
</html>