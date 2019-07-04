
<html>
<head>
<title>ATG Task -3</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="/css/mainform.css">
 

</head>
<body>

<h1>ATG Task -3</h1>
<h2>Add User Details</h2>

<div class="container col-md-4 col-lg-6 col-sm-4">

<!--Success Message-->
  <div class="alert alert-dismissable alert-success" id="success" style="display: none">
    <strong>Success! Data Stored Successfully!!</strong> 
  </div>
<!--Error Message-->
  <div class="alert alert-dismissable alert-danger" id="danger" style="display: none">
    <strong>Sorry! Data could not be Stored!!</strong> 
  </div>

<!-- Form-->
    <form method="post" id="form" onsubmit="return validate();">
    <input type="hidden" id="token" value=" {{ csrf_token() }}" />
       <div>
          <label>Name:</label>
          <input type="text"  id="name" name="name" placeholder="Enter Name" required/>
          <p id="error_name" ></p>

      </div>
      <div>
            <label >Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter email" required/>
            <p id="error_email" ></p>

      </div>
      <div>
            <label >Pincode:</label>
            <input type="text" id="pincode" name="pincode" placeholder="Enter pincode" required/>
            <p id="error_pin" ></p>

      </div>
      <div>
            <input type="submit" id="submit" value="Submit" />
      </div>

    </form>
 </div> 

  <script src="/js/mainform.js"></script> 
  <script src="/js/main.js"></script>  
</body>
</html>