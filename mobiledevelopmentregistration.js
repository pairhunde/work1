jQuery( document ).ready(function(){

    jQuery("#update_user").submit(function(e){
        e.preventDefault();
             var first_name = jQuery("#first_name").val();
             var last_name = jQuery("#last_name").val();
             var phone = jQuery("#phone_number").val();			  
             var address = jQuery("#address").val();
             var state = jQuery("#state").val();
                console.log("working");
            var submit_odr = null;
            if(jQuery("#place_order_btn").attr('active') == 'yes') {
                    values = {'submit_odr': true};
                    console.log(values["submit_odr"]);
            }
            jQuery.ajax({
                    type: "POST",
                    url: "mobiledevelopmentregistrationback.php",
                    data: {first_name : first_name , last_name : last_name, phone : phone, address : address , state : state, submit_odr : values["submit_odr"]},
                    dataType: "json",
                    success: function(r) {
                      console.log(r);
                      if(r.success == false){

                          if(r.errors.first_name){
                            jQuery(".first_name").html(r.errors.first_name);
                          }else{
                            jQuery(".first_name").html("");
                          }
                          
                          if(r.errors.last_name){
                              jQuery(".last_name").html(r.errors.last_name);
                            }else{
                              jQuery(".last_name").html("");
                            }
                          
                            if(r.errors.phone){
                              jQuery(".phone").html(r.errors.phone);
                            }else{
                              jQuery(".phone").html("");
                            }

                            if(r.errors.address){
                              jQuery(".address").html(r.errors.address);
                            }else{
                              jQuery(".address").html("");
                            }

                            if(r.errors.state){
                              jQuery(".state").html(r.errors.state);
                            }else{
                              jQuery(".state").html("");
                            }
                        }else if(r.success == true){
                            window.location.href ="initialize.php";
                        
                        }
                            
                            
                    }
            })
        })
})