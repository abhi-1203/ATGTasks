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
       
        url : "/api/usersstore",
        method: "POST",
        data  :{name:name,email:email,pincode:pincode},
        success :function(data){

                  if(data == 1){
                    if ($("#danger").show()){
                      $("#danger").hide();  
                    }

                    $("#success").show();
                    document.forms["form"].reset();
                    setTimeout(function() { $("#success").hide(); }, 1200);
                  } else{
                      if ($("#success").show()){
                        $("#success").hide();  
                      }

                      $(".alert-danger").show(); 
                      document.forms["form"].reset();
                      setTimeout(function() { $("#danger").hide(); }, 1200);
                    }
                }
      })
  });
});