<!DOCTYPE html>
<html lang="en">
    <head>
         <!-- 
         Replace this content with meta tags
         -->
        <?php include '../styling.php'; ?>
        <style>
            h1, h2, h3, h4, h5, h6 
            {
                text-align: center !important;
            }
            .row .col{
                text-align:center;
            }
            ul{
                text-align: left;          
            }
            
        </style>
    </head>
    <body>
        <?php include '../inc/header.php'; ?>
        <style>
            .jumbotron {
                padding: 2rem 1rem;
                margin-bottom: 2rem;
                background-color: #fafafa;
                border-radius: 0.3rem;
                background-image: url(<?php echo HOME; ?>/assets/img/jumborton.jpg);
            }

        </style>
        <div class="jumbotron">
            <div class="opacity-effect">
                <h1 class="display-3">Demo Title</h1>
                <h4>Demo Description</h4>
                <h5><i class="fas fa-star icogreen"></i><i class="fas fa-star icogreen"></i><i class="fas fa-star icogreen"></i><i class="fas fa-star icogreen"></i><i class="fas fa-star icogreen"></i>9325 Ratings</h5>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8"> 
                    
       </div>   
       <div class="col-md-4">
                    <?php include '../inc/services_sidebar.php' ?>                    
                  
                </div>
            </div>
        </div> 
        <?php include '../inc/footer.php'; ?>   