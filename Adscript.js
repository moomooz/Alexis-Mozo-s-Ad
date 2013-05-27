$(document).ready(function() { 

    $('.submit').click(function() {  
 
        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 
        var emailaddressVal = $(".email").val();
        if(emailaddressVal == '') {
             alert("Not a valid e-mail address");
            hasError = true;
        }
 
        else if(!emailReg.test(emailaddressVal)) {
             alert("Not a valid e-mail address");
            hasError = true;
        }
 
        if(hasError == true) { return false; }
 
    });
});
