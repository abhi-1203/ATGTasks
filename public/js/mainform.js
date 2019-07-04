// Validate function to validate form.

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
 if( email.value == "" || email.value.indexOf( "@" ) == -1 || email.value.indexOf( ".com" ) == -1 )
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

