$("#submit_btn1").click(function(e) {

    e.preventDefault();
    // var que = $.trim($("#que").val());
    var first = $.trim($("#first").val());
    // var last = $.trim($("#last").val());
    // var user = $.trim($("#user").val());
    var email = $.trim($("#email").val());
    var phone = $.trim($("#phone").val());
     var company = $.trim($("#company").val());
    // var schedule = $.trim($("#schedule").val());
    var infromation = $.trim($("#infromation").val());
    var utm_source = $.trim($("#utm_source").val());
    var utm_campaign = $.trim($("#utm_campaign").val());
    var utm_medium = $.trim($("#utm_medium").val());
    // if (!que) {
    //     $('#allerror1').html("Select Salutation.");
    //     return false;
    // }
    if (!first) {
        $('#allerror1').html("Enter First Name.");
        return false;
    }
    // if (!last) {
    //     $('#allerror1').html("Enter Last Name.");
    //     return false;
    // }
    //  if (!user) {
    //     $('#allerror1').html("Select User.");
    //     return false;
    // }
     if (!email) {
          $('#allerror1').html("Enter your Email ID.");
          return false;
      }
      var emailReg = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;
      if (emailReg.test(email) == false)
      {
        $('#allerror1').html("Enter Valid Email ID.");
        return false;
       }      
    //     if (!phone)
    //   {
    //       $('#allerror1').html("Enter Phone Number.");
    //       return false;
    //   }
    
     var mob = /^[0-9]{10}$/;
    if (!phone) {
        $('#allerror1').html("Enter Your phone Number")
        return false;
    }

    if (mob.test(phone) == false) {
        $('#allerror1').html("Enter 10 digit mobile Number.");
        return false;
    }
    
    
    
    
    
    
    
    
    
      if (!company)
      {
          $('#allerror1').html("Enter City Name.");
          return false;
      }
    //   if (!schedule)
    //   {
    //       $('#allerror1').html("Slect schedule.");
    //       return false;
    //   }
       if (!infromation)
      {
          $('#allerror1').html("Enter Message.");
          return false;
      }
    
     

    $.ajax({

        url: "submitenquiry.php",
        type: 'POST',
        dataType: 'json',
        data: {first:first,email:email,phone:phone,company:company,infromation:infromation,utm_source:utm_source,utm_campaign:utm_campaign,utm_medium:utm_medium},
        // data: {que:que,first:first,last:last,user:user,email:email,phone:phone,company:company,schedule:schedule,infromation:infromation,utm_source:utm_source,utm_campaign:utm_campaign,utm_medium:utm_medium},
        // data: {name:name,email:email,mobile:mobile_no,city:city,program:program},
        type: 'POST',
        success: function(response) {
            console.log(response)
            if (response.status == "1") {
              
              // var a = $("<a>") .attr("href", "img/Deeptek Tele Sample Reports.pdf") .attr("download", "img/Deeptek Tele Sample Reports.pdf") .appendTo("body");
              //       a[0].click();
              //       a.remove();
              //       jQuery('.close').trigger('onclick');

               window.location.href = "index.php";

            }
            else {
                alert("please try again.");
            }
        }
 });
});



 