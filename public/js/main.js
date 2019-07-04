//JS function for posting form data to the controller

$.ajaxSetup({

        headers: {

          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }


});
    
$(document).ready(function(){


  $("#form").submit(function(event){
      event.preventDefault();
      var name= $("#name").val();
      var email= $("#email").val();
      var pincode= $("#pincode").val();
      $.ajax({
        cache:false,
       
        url : "/api/usersstore", //calls the API function store
        method: "POST",
        data  :{name:name,email:email,pincode:pincode},
        success :function(data){ //on successful insertion, 1 is returned in json format.

                  if(data == 1){
                    if ($("#danger").show()){
                      $("#danger").hide();  
                    }

                    $("#success").show(); //triggers the success message for 1.2 secs
                     document.forms["form"].reset(); //resets the form
                    setTimeout(function() { $("#success").hide(); }, 1200);
                  } else{
                      if ($("#success").show()){
                        $("#success").hide();  
                      }

                      $(".alert-danger").show(); //triggers the error message for 1.2 secs if the json returned is 0
                      document.forms["form"].reset();
                      setTimeout(function() { $("#danger").hide(); }, 1200);
                    }
                }
      })
  });
});
