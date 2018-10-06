<?php
  include 'inc/config.php';

    if (isset($_POST["website"]) && $_POST["website"] == "") {
                  if(isset($_POST['subscriber_email'])){
        $email = $_POST['subscriber_email'];
          $connection = new mysqli(SERVER, USER, PASS, DB);
            if($connection->connect_error){
                die("Connection Failed: ".$conn->connect_error);
            }

       $sql = "INSERT INTO `subscriber` (`id`, `email`) VALUES (NULL, '".$email."')";
        
        if($connection->query($sql) === TRUE){
            
                $msg='success';
        }
        else{
            $msg='failed';
        }
        
                
        
    }
    else{
        header('Location: '.HOME);
    }
} else {
  http_response_code(400);
  exit;
}
?>
<!DOCTYPE html>  
<html lang="en">  
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <link rel="shortcut icon" href="assets/img/favicon.ico" />
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="images/favicon.ico" />
        <title>JavaTportal - Best IT Training Institute in Noida and Development Company</title>
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
            
            <?php
            if($msg='success'){
            echo '<h1 class="display-3">Thank you, Your subscription has been added with us.</h1><h4>You can get your desired cources @ 10% off now. Happy Learning.  <a href="'.HOME.'">Go back to Home Page</a></h4>';
            
            }
            else{
                echo '<h1 class="display-3">This email is already registered with us.</h1><h4>Subscription Failed. Kindly try with another email. <a href="'.HOME.'">Go back to Home Page</a></h4>';
            }
            ?>
            
            
        </div>
             
        <?php include 'inc/footer.php'; ?>
 