<?php
//include 'inc/config.php';
    if(isset($_POST['submit'])){
        

        $name = $_POST['name'];
        $location = $_POST['location'];
        $company = $_POST['company'];
        $exp = $_POST['exp'];
        $skills = $_POST['skills'];
        $time = $_POST['time'];
        $avail = $_POST['available'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $msg='';
        $conn = new mysqli('localhost', 'root', '', 'javatportal');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql= "INSERT INTO `trainers` (`id`, `name`, `location`, `company`, `exp`, `skills`, `time`, `available`, `phone`, `email`, `url`) VALUES (NULL, $name, $location, $company, $exp, $skills, $time, $avail, $mobile, $email, '')";
        
                $to="harish.zetetic@gmail.com";
                     $subject="Recieved Trainer Profile";
                     $headers = "From: no-reply@javatportal.org \r\n";
                $headers .= "Reply-To: no-reply@javatportal.org \r\n";
                $headers .= "CC: info@javatportal.org\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                     $message="Someone registered his profile for trainer. \r\n";
                     $message.="<h2>Applicant Name</h2> \r\n\n";
                     $message.=$name;
                     $message.="<h2>Applicant email</h2> \r\n\n";
                     $message.=$email;
                     $message.="<h2>Applicant Mobile</h2> \r\n\n";
                     $message.=$mobile;
                     $message.="<h2>Applicant Skills</h2> \r\n\n";
                     $message.=$skills;
                     $message.="<h2>Applicant Intested for </h2> \r\n\n";
                     $message.=$time;
                     $message.="<p>Kindly respond as earliest. Resume saved in your hosting server</p> \n";
                     
                     if(mail($to,$subject,$message,$headers) && $conn->query($sql) === TRUE){
                         $msg = 'success';
                     }
                     else{
                         $msg = 'failed';
                     }
        
    }
?>
<!DOCTYPE html>  
<html lang="en">  
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <link rel="shortcut icon" href="assets/img/favicon.ico" />
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="images/favicon.ico" />
        <title>Trainer with JavaTportal - Best IT Training Institute in Noida and Development Company</title>
        <meta name="description" content="JavaTportal leading Best IT Training Institute in Noida and Website Designing Company in Ghaziabad India based Company. Which Offers Website Designing, Mobile Apps Development, Digital Marketing, Ecommerce software Services.">
        <meta name="keywords" content="Best IT Training Institute in Noida, website designing company in delhi,web designing company in delhi,web designing company delhi,website designing company delhi,website designing in delhi,website designing company in noida,best website designing company in delhi,ecommerce website designing company in delhi,top web designing company in delhi,website designing services in delhi,responsive website designing company in delhi,web designing company, website designing companies, web development companies, website designing in India,B2B Portal Development Company Delhi, B2C Portal Development company Delhi" />
        <meta name="copyright" content="Copyright 2014-18 JavaTportal Corporation (P) Limited - Website Designing Company in Ghaziabad India" /> 
        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="author" content=" javatportal.org"/>
        <meta name="rating" CONTENT="General"/>
        <meta name="revisit-after" CONTENT="2 days">
        <meta name="robots" content=" ALL, index, follow"/>
        <meta name="distribution" content="Global" />
        <meta name="rating" content="Safe ForAll" />
        <meta name="language" content="English" />
        <meta http-equiv="window-target" content="_top"/>
        <meta http-equiv="pics-label" content="for all ages"/>
        <meta name="contact City" content=" Noida, Ghaziabad, Madhapur, Attapur, Hi Tech City, Gachibowli, India, Bangalore, USA, UAE, Mumbai, Delhi, Chennai, India, Lucknow, Kolkata "/>
        <meta name="subject" CONTENT=" Website Designing in Noida | Mobile Apps Development in Noida "/>
        <meta property="og:locale" content="en  US" />
        <meta property="og: title" content ="Best IT Training Institute in Noida and Development Company | Mobile Apps Development in Ghaziabad" />
        <meta property="og: description" content= "JavaTportal leading Website Designing Company in Ghaziabad India based Company. Which Offers Web Designing, Mobile Apps Development, Digital Marketing, Ecommerce software Services "/>
        <meta property="og:url" content="javatportal.org " />
        <meta property="og:site name" content=" JavaTportal Corporation " />
        <meta name="rating" content="general"/>
        <link rel="canonical" href=" http://www.javatportal.org/" />
        <meta content="All, FOLLOW" name="GOOGLEBOTS"/>
        <meta content="All, FOLLOW" name="YAHOOBOTS"/>
        <meta content="All, FOLLOW" name="MSNBOTS"/>
        <meta content="All, FOLLOW" name="BINGBOTS"/>
        <meta content="all" name="Google bot -Image"/>
        <meta content="ALL" name="WEBCRAWLERS"/>
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:description"  content= "JavaTportal leading Website Designing Company in Ghaziabad based Company. Which Offers Web Designing, Mobile Apps Development, Digital Marketing, Ecommerce software Services "/>
        <meta name="twitter:title" content="Website Designing Company in Ghaziabad India | Mobile Apps Development in Ghaziabad" />
        <?php include 'styling.php'; ?>
        <style>
            h1, h2, h3, h4, h5, h6 
            {
                text-align: center !important;
            }
            .row .col{
                text-align:center;
            }
        </style>      
    </head>
    <body>
        <?php include 'inc/header.php'; ?>
      
        <div class="container">
            <br/>
            <center><img class="img-responsive" src="<?php echo HOME; ?>/assets/img/trainer.png"></center>
            <h1 class="display-3">Have some technical skills? then this world needs you.</h1>
            <h3>Fill the below form and be spread your knowledge ahead</h3>
           
            <?php 
             if($msg == 'success' ){
                echo '<p class="bg-success" style="color:white">Your application has been successfully saved.</p>';
            }
            else if($msg == 'failed' ){
                echo '<p class="bg-danger">Something went wrong. Try later.</p>';
            }   
            else{
                echo '';
            }
            ?>
            <form enctype="multipart/form-data" method='post' action="apply-trainer">
  <fieldset>

    <div class="form-group">
      <label for="exampleInputEmail1">Name*</label>
      <input type="name" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harish Sharma" required>
    </div>
      <div class="form-group">
      <label for="exampleInputEmail1">Your Location*</label>
      <input type="name" class="form-control" name="location" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Delhi" required>
    </div>
          <div class="form-group">
      <label for="exampleInputEmail1">Current Working Company*</label>
      <input type="name" class="form-control"  name="company" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wipro Ltd" required>
    </div>
      
    <div class="form-group">
      <label for="exampleSelect1">Training Experience*</label>
      <select class="form-control"  name="exp" id="exampleSelect1"  required>
        <option value="1">1 Year</option>
        <option value="2">2 Years</option>
        <option value="3">3 Years</option>
        <option value="4">4 Years</option>
        <option value="5">5 Years</option>
        <option value="5+">5+ Years</option>
      </select>
    </div>
         <div class="form-group">
      <label for="exampleInputEmail1">Enter your skils*</label>
      <input type="name" class="form-control" name="skills" type="text" value="" data-role="tagsinput" required>
      <small id="emailHelp" class="form-text text-muted">Use comma (') for separate the values.</small>
    </div>
    <div class="form-group">
      <label for="exampleSelect2">Preferred Timings*</label>
      <select class="form-control" id="exampleSelect2" name="time" required>
        <option value="Weekdays">Weekdays</option>
        <option value="Weekends">Weekends</option>
      </select>
    </div>
       <div class="form-group">
      <label for="exampleSelect2">Availability*</label>
      <select class="form-control" name="available" id="exampleSelect2"  required>
        <option value="2">2 Hours</option>
        <option value="3">3 Hours</option>
        <option value="4">4 Hours</option>
        <option value="5">5 Hours</option>
        <option value="6">6 Hours</option>
      </select>
    </div>
          <div class="form-group">
      <label for="exampleInputEmail1">Phone Number*</label>
      <input type="text" class="form-control" id="mobile" name="mobile" aria-describedby="emailHelp" placeholder="97XXXXXXXX" onfocusout="validate('1')">
            <small id="smobile" class="form-text text-danger"></small>

    </div>
           <div class="form-group">
      <label for="exampleInputEmail1">Email*</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="info@javatportal.org" onfocusout="validate('2')">
       <small id="semail" class="form-text text-danger"></small>
    </div>
  
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" id="file" aria-describedby="fileHelp" onfocusout="validate('3')">
      <small id="fileHelp" class="form-text text-muted">File size not should be more than 2 MB.</small>
    </div>
      <button class="btn btn-primary" name="submit" onclick="return validate('submit')">Submit</button>
  </fieldset>
</form>
         
        </div>
        <script>
            
            function validate(param){
                              var email =document.getElementById("email").value;
    var email_span = document.getElementById("semail");
    var email_reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/    
     var mobile = document.getElementById('mobile').value;
    var mobile_span = document.getElementById('smobile');
     var mobile_reg = /[2-9]{2}\d{8}/
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
if(param == 1){
   
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

                if(param == '3'){
               
                   var _validFileExtensions = [".doc", ".docx", ".txt", ".pdf", ".rtf"];    
                    var file_path = document.getElementById('file').value;                    
                    var file_extension = file_path.split('.').pop();
                    file_extension = "."+file_extension;
                    if(!_validFileExtensions.includes(file_extension)){
                        document.getElementById('fileHelp').innerHTML = 'File choosen is must and word, pdf and notepad extensions are allowed';
                        return false;   
                    }
                    else{
                        document.getElementById('fileHelp').innerHTML = '';
                        return false;
                    }
                          
                }
                
                if(param == 'submit'){
    if(mobile != "" && email != ""){   
             
            if(email_span.innerHTML =="" && mobile_span.innerHTML =="" && document.getElementById('fileHelp').innerHTML == ""){
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
            
            
            </script>
        <?php include 'inc/footer.php'; ?>
 