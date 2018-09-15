
<style>
    .carousel .item {
        height: 370px !important;
        /*background-image: url('<?php echo HOME; ?>/assets/img/banner.jpg');
        */
    }

    .form-control-borderless {
        border: none;
    }

    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }

    .autocomplete {
        /*the container must be positioned relative:*/
        position: relative;
        display: inline-block;
    }

    input {
        border: 1px solid transparent;
        background-color: #f1f1f1;
        padding: 10px;
        font-size: 16px;
    }

    input[type=text] {
        background-color: #f1f1f1;
        width: 100%;
    }

    input[type=submit] {
        background-color: DodgerBlue;
        color: #fff;
        cursor: pointer;
    }

    .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        color: #5a5a5a;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
    }

    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff; 
        border-bottom: 1px solid #d4d4d4; 
    }

    .autocomplete-items div:hover {
        /*when hovering an item:*/
        background-color: #e9e9e9; 
    }

    .autocomplete-active {
        /*when navigating through the items using the arrow keys:*/
        background-color: DodgerBlue !important; 
        color: #ffffff; 
    }
    /*-------------------------------------------OVERLAY--------------------------------------------*/
    /* The Overlay (background) */
    .overlay {
        /* Height & width depends on how you want to reveal the overlay (see JS below) */    
        height: 100%;
        width: 0;
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        background-color: rgb(0,0,0); /* Black fallback color */
        background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
        overflow-x: hidden; /* Disable horizontal scroll */
        transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
    }

    /* Position the content inside the overlay */
    .overlay-content {
        position: relative;
        top: 25%; /* 25% from the top */
        width: 100%; /* 100% width */
        text-align: center; /* Centered text/links */
        margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
    }

    /* The navigation links inside the overlay */
    .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block; /* Display block instead of inline */
        transition: 0.3s; /* Transition effects on hover (color) */
    }

    .overlay-row {
    display: flex;
    flex-wrap: wrap;
        padding-right: 2%;
    padding-left: 2%;
    }
    /* When you mouse over the navigation links, change their color */
    .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
    }

    /* Position the close button (top right corner) */
    .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
    }

    /* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
    @media screen and (max-height: 450px) {
        .overlay a {font-size: 20px}
        .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
        }
    }

</style>

<div id="myCarousel" class="carousel slide" data-ride="carousel">


    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        <div class="item active">

            <div class="carousel-caption">
                <img src="<?php echo HOME; ?>/assets/img/logo.png" alt="Javatportal" style="width: 10% !important;">

                <h3>JAVATPORTAL CORPORATION</h3>
                <p style="text-align:center">सॉफ्टवेयर विकास एवं प्रशिक्षण कार्यक्रम केंद्र</p>
                <div class="row justify-content-center">
                    <div id="myNav" class="overlay">

                        <!-- Button to close the overlay navigation -->
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                        <!-- Overlay content -->
                        <div class="overlay-content">
            
                                <form autocomplete="off" action="/action_page.php" style="width:100%">
                                
                                        
                                            <div class="overlay-row">
                                                <div class="col">
                                                    <input id="myInput" class="form-control form-control-lg form-control-borderless" name="myCountry" type="search" placeholder="Search topics or keywords">
                                                </div>
                                                <!--end of col-->
                                                <div class="col-auto">
                                                    <button class="btn btn-lg btn-success" type="submit"><i class="fas fa-search-plus"></i>&nbsp;Search</button>
                                                </div>
                                                <!--end of col-->
                                            </div>
                                 
                                </form>
                  
                        </div>

                    </div>

                    <!-- Use any element to open/show the overlay navigation menu -->

                    <button onclick="openNav()" type="button" class="btn btn-primary btn-lg btn-block"><i class="fas fa-search-plus"></i>&nbsp;Search your desired course from here...</button>







                    <!--end of col-->
                </div>
                <style>
                    .form-control-borderless {
                        border: none;
                    }

                    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
                        border: none;
                        outline: none;
                        box-shadow: none;
                    }
                </style>
                <hr/>
                <div class="pp-search hidden-xs" style=" font-size:  large">
                    <a href=" " title="Microsoft" class="badge badge-pill badge-success">Microsoft </a> 
                    <a href=" " title="Microsoft Dynamics" class="badge badge-pill badge-success">MS Dynamics</a>
                    <a href=" " title="Oracle" class="badge badge-pill badge-success">Oracle</a> 
                    <a href=" " title="Data Science" class="badge badge-pill badge-success">Data Science</a> 
                    <a href=" " title="Machine Learning" class="badge badge-pill badge-success">Machine Learning</a>
                    <a href=" " title="Artificial Intelligence" class="badge badge-pill badge-success">Artificial Intelligence</a>
                    <a href=" " title="Robotic Process Automation" class="badge badge-pill badge-success">Robotic Process Automation</a> 
                    </br><a href=" " title="Cloud Computing" class="badge badge-pill badge-success">Cloud Computing</a> 
                    <a href=" " title="Project Management" class="badge badge-pill badge-success">Project Management</a> 
                    <a href=" " title="Data Analytics" class="badge badge-pill badge-success">Data Analytics</a>
                    <a href=" "  title="Embedded Systems" class="badge badge-pill badge-success">Embedded Systems</a>  
                    <a href=" " title="CAD/CAM" class="badge badge-pill badge-success"> CAD/CAM</a> 
                    <a href=" " title="Testing" class="badge badge-pill badge-success">Testing</a>  
                </div>

                <div class="mobile-search visible-xs">
                    <a href=" " title="Project Management" class="badge badge-pill badge-success">Project Management</a> 
                    <a href=" " title="CAD/CAM" class="badge badge-pill badge-success"> CAD/CAM</a> 
                    <a href=" "  title="Embedded Systems" class="badge badge-pill badge-success">Embedded Systems</a> 
                    <a href=" " title="Microsoft" class="badge badge-pill badge-success">Microsoft</a> 
                    <a href=" " title="Clooud Computing" class="badge badge-pill badge-success">Cloud Computing</a>  
                    <a href=" " title="Cisco" class="badge badge-pill badge-success">Cisco</a>
                </div>

            </div>


        </div>
    </div>  


</div>

</div>





<script>

    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
         the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function (e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function (e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                         (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function (e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x)
                x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                 increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                 decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x)
                        x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x)
                return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length)
                currentFocus = 0;
            if (currentFocus < 0)
                currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
             except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

    var cources =
            ["Oracle Training in Delhi | Oracle Training Institute in Delhi",
                "Oracle Training in Noida | Oracle Training Institute in Noida",
                "Oracle Database: SQL Basic & Advance Training",
                "Oracle Database: PL/SQL Basic & Advance Training",
                "Oracle Database 12c",
                "Oracle Certified Professional Certification ",
                "Oracle Certified Associate Certification",
                "Oracle – DBA 10g,11g & 12c",
                "Oracle – Business Intelligence",
                "Best Oracle Training in Gurgaon | Oracle Training Institute in Gurgaon",
                "Oracle Training in Ghaziabad | Oracle Training Institute in Ghaziabad",
                "Core PHP",
                "PHP Frameworks",
                "PHP Training in Delhi | PHP Training Institute In Delhi",
                "PHP Training in Gurgaon | PHP Training Institute in Gurgaon",
                "PHP Training in Ghaziabad | PHP Training Institute in Ghaziabad",
                "PHP Training in Noida | PHP Training Institute in Noida",
                "Advance Java/J2EE",
                "Core Java/J2SE",
                "Java Frameworks",
                "Java Training in Delhi",
                "Java Training in Gurgaon, Java Training institute in Gurgaon",
                "Java Training in Noida | Java Training Institute in Noida",
                "JavaScript Training in Delhi | JavaScript Training Institute in Delhi",
                "JavaScript Training in Gurgaon, JavaScript Training Institute in Gurgaon",
                "JavaScript Training in Noida, JavaScript Training Institute in Noida",
                "Java Training in Ghaziabad | Java Training Institute in Ghaziabad",
                "JavaScript Training in Ghaziabad, JavaScript Training Institute in Ghaziabad",
                "Android",
                "Android Training in Delhi | Android Training Institute in Delhi",
                "Android Training in Noida | Android Training Institute in Noida",
                "Android Training in Ghaziabad | Android Training Institute in Ghaziabad",
                "Selenium Training in Delhi | Selenium Training Institute in Delhi",
                "Selenium Training in Gurgaon, Selenium Training institute in Gurgaon",
                "Selenium Training in Noida ,Selenium Training in Noida",
                "Software Testing – Program 1(Using Selenium 3.0)",
                "Selenium Training in Ghaziabad ,Selenium Training in Ghaziabad",
                "Advance Excel With Macro",
                "Advanced Excel Training Institute in Delhi",
                "Advanced Excel Training Institute in Noida",
                "Advanced Excel Training Institute in Gurgaon",
                "Advanced Excel Training Institute in Ghaziabad",
                "Excel VBA Training Institute in Delhi",
                "Excel VBA Training Institute in Noida",
                "Excel VBA Training Institute in Gurgaon",
                "Excel VBA Training Institute in Ghaziabad",
                "Microsoft Excel (Basic + Advance)",
                "MIS & Data Analysis in Excel Training",
                "MIS & Analytics Training Institute"];





    autocomplete(document.getElementById("myInput"), cources);

    /* Open when someone clicks on the span element */
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>
