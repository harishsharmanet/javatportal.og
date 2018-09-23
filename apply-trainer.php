<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $comment = $_POST['message'];
        
                $to="harish.zetetic@gmail.com";
                     $subject="New Business Query";
                     $headers = "From: no-reply@javatportal.org \r\n";
                $headers .= "Reply-To: no-reply@javatportal.org \r\n";
                $headers .= "CC: info@javatportal.org\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                     $message="You have recieved a following business query \r\n";
                     $message.="<h2>Requestor Name</h2> \r\n\n";
                     $message.=$name;
                     $message.="<h2>Requestor email</h2> \r\n\n";
                     $message.=$email;
                     $message.="<h2>Requestor Mobile</h2> \r\n\n";
                     $message.=$mobile;
                     $message.="<p>Kindly respond as earliest</p> \n";
                     
                     if(mail($to,$subject,$message,$headers)){
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
            <form>
  <fieldset>

    <div class="form-group">
      <label for="exampleInputEmail1">Name*</label>
      <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harish Sharma">
    </div>
      <div class="form-group">
      <label for="exampleInputEmail1">Your Location*</label>
      <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Delhi">
    </div>
          <div class="form-group">
      <label for="exampleInputEmail1">Current Working Company*</label>
      <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wipro Ltd">
    </div>
      
    <div class="form-group">
      <label for="exampleSelect1">Training Experience</label>
      <select class="form-control" id="exampleSelect1">
        <option>1 Year</option>
        <option>2 Years</option>
        <option>3 Years</option>
        <option>4 Years</option>
        <option>5 Years</option>
        <option>5+ Years</option>
      </select>
    </div>
         <div class="form-group">
      <label for="exampleInputEmail1">Enter your skils*</label>
      <input type="name" class="form-control" type="text" value="" data-role="tagsinput">
      <small id="emailHelp" class="form-text text-muted">Use comma (') for separate the values.</small>
    </div>
    <div class="form-group">
      <label for="exampleSelect2">Preferred Timings*</label>
      <select class="form-control" id="exampleSelect2">
        <option>Weekdays</option>
        <option>Weekends</option>
      </select>
    </div>
       <div class="form-group">
      <label for="exampleSelect2">Availability*</label>
      <select class="form-control" id="exampleSelect2">
        <option>2 Hours</option>
        <option>3 Hours</option>
        <option>4 Hours</option>
        <option>5 Hours</option>
        <option>6 Hours</option>
      </select>
    </div>
          <div class="form-group">
      <label for="exampleInputEmail1">Phone Number*</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="97XXXXXXXX">
    </div>
           <div class="form-group">
      <label for="exampleInputEmail1">Email*</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="info@javatportal.org">
    </div>
  
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">File size not should be more than 2 MB.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
            
        </div>
             
        <?php include 'inc/footer.php'; ?>
 