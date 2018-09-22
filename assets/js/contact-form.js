function validate_value(param){ 
    var name = document.forms["contact"]["name"].value.trim();
    var email = document.forms["contact"]["email"].value.trim();
    var mobile = document.forms["contact"]["mobile"].value.trim();
   var name_span = document.getElementById("sname");
    var email_span=  document.getElementById('semail');
    var mobile_span = document.getElementById('smobile');
    var mobile_reg = /[2-9]{2}\d{8}/
    var email_reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/ 
if(param == 1){
        if(name == ""){
            name_span.innerHTML = 'You can not leave this field blank';
            return false;
        }        
        if(name.length <=2 || name.length >30){
            name_span.innerHTML = 'Your name length must be between 3 to 30';
            return false;
        }
        else{
            name_span.innerHTML = '';
            return false;
            
        }
}                                                                          
if(param == 2){
        if(email == ""){
            email_span.innerHTML = 'You can not leave this field blank';
            return false;
        }        
        if(!email.match(email_reg)){
            email_span.innerHTML = 'Email you entered that is not valid';
            return false;
        }
        else{
            email_span.innerHTML = '';
            return false;
        }
}
if(param == 3){
        if(mobile == ""){
            mobile_span.innerHTML = 'You can not leave this field blank';
            return false;
        }        
        if(!mobile.match(mobile_reg)){
            mobile_span.innerHTML = 'Mobile Number format did not match';
            return false;
        }
        else{
            mobile_span.innerHTML = '';
            return false;
        }
}

 
if(param == 'submit'){
    if(name != "" && email != "" && mobile !=""){   
             
            if(name_span.innerHTML =="" && email_span.innerHTML =="" && mobile_span.innerHTML == ""){
                            document.getElementById("contact").submit();

                            return true;
                }
             
    }
    else
    {
       return false;
    }
}




    
         
            
}


