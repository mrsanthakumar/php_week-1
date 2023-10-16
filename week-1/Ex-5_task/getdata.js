$(document).ready(function(){   
    $("#registrations").change(function() {    
        var id = $(this).find(":selected").val();
        var dataString = 'empid='+ id;    
        $.ajax({
            url: 'getemployee.php',
            dataType: "json",
            data: dataString,  
            cache: false,
            success: function(empData) {
               if(empData) {
                    //$("#errorMassage").addClass('hidden').text("");
                    //$("#recordListing").removeClass('hidden');                            
                    $("#reg_id").text(empData.reg_id);
                    $("#name").text(empData.name);
                    $("#fname").text(empData.fname);
                    $("#mname").text(empData.mname);
                    $("#gender").text(empData.gender);
                    $("#dob").text(empData.dob);
                    $("#address").text(empData.address);
                    $("#category").text(empData.category);
                    $("#course").text(empData.course);
                    $("#course_fees").text(empData.course_fees);
                    $("#pay_status").text(empData.pay_status);
                    $("#email").text(empData.email);
                    $("#mobile").text(empData.mobile);


                } else {
                    $("#recordListing").addClass('hidden'); 
                    $("#errorMassage").removeClass('hidden').text("No record found!");
                }       
            } 
        });
    }) 
});
