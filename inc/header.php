<style>
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

</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo HOME; ?>">JavaTportal Corporation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo HOME; ?>"><i class="fas fa-home"></i>&nbsp;Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo HOME; ?>/about-us"><i class="fas fa-globe"></i>&nbsp;About</a>
<!--                <a class="nav-link" href="/about-us"><i class="fas fa-globe"></i>&nbsp;About Us</a>-->
            </li>
            <div class="btn-group">
                <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" href="" aria-expanded="false"><i class="fas fa-book"></i>&nbsp;Trending Cources</a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">

                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="<?php echo HOME; ?>"><i class="fas fa-code"></i> &nbsp;CS/IT</a>
                        <ul class="dropdown-menu">

                            <li class="d    ropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Programming Language</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-java-training-institute-in-noida">Core and Advance Java</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-java-training-institute-in-ghaziabad">Advance Spring Framework</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-mis-training-institute-in-delhi">Advance Hibernate </a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-mis-training-institute-in-delhi-ncr">Web Services/API Development</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-mis-training-institute-in-delhi-ncr">MVC Framework</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Web Development</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>">HTML5 & CSS3</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>">Web Designing</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-php-training-institute-in-noida">PHP/MySQL (Core + Advance)</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-php-training-institute-in-noida">PHP Frameworks</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-angularjs-training-institute-in-noida">AngularJs 1 | AngularJs 2 | AngularJs 4 and 5</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-python-training-institute-in-noida">Python</a></li>

                                </ul>   </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Cloud Computing</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-amazon-web-services-aws-training-in-noida">AWS Solution Architect- Associate</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-amazon-web-services-aws-training-in-noida">AWS Solution Architect – Professional</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-amazon-web-services-aws-training-in-noida">AWS Developer – Associate</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-amazon-web-services-aws-training-in-noida">AWS DevOps Engineer – Professional</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-amazon-web-services-aws-training-in-noida">AWS SysOps Administrator – Associate</a></li>

                                </ul>   </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Software Testing</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-selenium-training-institute-in-noida">Software Testing – (Using Selenium 3.0)</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-selenium-training-institute-in-ghaziabad">Software Testing – (Using QTP/UFT)</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-selenium-training-institute-in-ghaziabad">Database Testing</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-selenium-training-institute-in-ghaziabad">Mobile Application Testing</a></li>

                                </ul>   </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Automation Testing</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-selenium-training-institute-in-noida">Selenium</a></li>     
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-selenium-training-institute-in-noida">Selenium with Cucumber</a></li> 
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-selenium-training-institute-in-noida">HP-QTP/UFT</a></li> 
                                </ul> 
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Oracle DBA/Developer</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-oracle-training-institute-in-noida">Oracle DBA (10G|11G|12C)</a></li> 
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-oracle-training-institute-in-noida">Oracle RAC (Real Application Cluster)</a></li> 
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-oracle-training-institute-in-noida">Oracle SQL (Basic|Advance)</a></li> 
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-oracle-training-institute-in-noida">Oracle PL/SQL (Basic|Advance)</a></li> 
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-oracle-training-institute-in-noida">Oracle Apps DBA R12</a></li> 
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Microsoft SQL Server</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-ms-sql-server-training-institute-in-noida">SQL Server DBA (2005|08|12|14)</a></li> 
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-ms-sql-server-training-institute-in-noida">SQL Server Developer</a></li> 
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-ms-sql-server-training-institute-in-noida"> SQL (Basic|Advance)</a></li> 
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-ms-sql-server-training-institute-in-noida"> T-SQL (Basic|Advance)</a></li> 
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Mobile Development</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-android-training-institute-in-noida">Android (Basic | Advance</a></li> 
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-android-training-institute-in-noida">iOS(I-Phone)</a></li> 
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="<?php echo HOME; ?>"><i class="fas fa-database"></i> &nbsp;Professional Programs</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Big Data Hadoop</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/big-data-hadoop-online-training-institute-in-india">Hadoop Admin</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/big-data-hadoop-online-training-institute-in-india">Hadoop Data Scientist</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/big-data-hadoop-online-training-institute-in-india">Hadoop Developer Training in Noida</a></li>

                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Data Analytics/Data Science</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-data-science-with-r-training-in-ghaziabad">Data Science with R</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-data-science-with-r-training-in-noida">Data Science with SAS</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/bigdata-hadoop-training-institute-in-noida">Hadoop</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-mis-training-institute-in-noida">Excel</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-python-training-institute-in-ghaziabad">Analytics (Python) Specialist</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Microsoft (Office + Server)</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-mis-training-institute-in-ghaziabad">Microsoft Office</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-mis-training-institute-in-noida">Microsoft Advance Excel</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-mis-training-institute-in-delhi">Microsoft Advance Excel with VBA (Macro)</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-mis-training-institute-in-noida">Microsoft Access</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="<?php echo HOME; ?>"><i class="fas fa-graduation-cap"></i> &nbsp;Advance Programs</a>
                        <ul class="dropdown-menu">

                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Digital Marketing Training</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-seo-training-institute-in-noida">Digital Marketing</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-seo-training-institute-in-noida">Google AdWords | PPC Adv. (SEM)</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-seo-training-institute-in-noida">Email Marketing</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-seo-training-institute-in-noida">Search Engine Optimization (SEO)</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-seo-training-institute-in-noida">e-Commerce Marketing</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-seo-training-institute-in-noida">Social Media Marketing (SMO)</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-seo-training-institute-in-noida">Mobile Marketing</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>/training/best-seo-training-institute-in-noida">Online Reputation Management (ORM)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="btn-group">
                <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" href="" aria-expanded="false"><i class="fas fa-certificate"></i>&nbsp;Certification</a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="<?php echo HOME; ?>"><i class="fas fa-code"></i> &nbsp;Professional Certifications</a>
                        <ul class="dropdown-menu">

                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="<?php echo HOME; ?>">Programming Language</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>">Core and Advance Java</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>">AWS Solution Architect- Associate</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>">AWS Solution Architect – Professional</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>">Oracle SQL (Basic|Advance)</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>">Oracle DBA (10G|11G|12C)</a></li> 
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>">Hadoop Admin</a></li>
                                    <li><a class="dropdown-item" href="<?php echo HOME; ?>">Hadoop Data Scientist</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li> 
                </ul>
            </div>
            <!-- Our Services--> 
            <div class="btn-group">
                <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" href="" aria-expanded="false"><i class="fas fa-certificate"></i>&nbsp;Services</a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="<?php echo HOME; ?>"><i class="far fa-object-group"></i> &nbsp;Web Designing</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services">Small Business Website</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services">Corporate Website</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services">Ecommerce Website</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services">Multi Vendor Ecommerce Marketplace</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services">Landing Page Designing</a></li> 
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services">Responsive Web Designing</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services">Custom Website Designing</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="<?php echo HOME; ?>"><i class="fas fa-code"></i> &nbsp;Development</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-development-services">PHP Web Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-development-services">CMS Web Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-development-services">CodeIgniter Web Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-development-services">Joomla Web Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-development-services">Wordpress Web Development</a></li> 
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-development-services">Magento Web Development </a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-development-services">B2B Portal Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-development-services">B2C Portal Development</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="<?php echo HOME; ?>"><i class="fas fa-map-marker-alt"></i></i> &nbsp;Digital Marketing</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/seo-services"> SEO Services</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/seo-services">Local SEO Services</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/smo-services">Social Media Marketing </a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/link-building-services"> Social Media Management</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/content-writing-services">Content Marketing Services</a></li> 
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/seo-services">Youtube Video Promotion </a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/seo-services">Email Marketing Services</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/seo-services">SMS Marketing Services </a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/seo-services">Google Map Promotion </a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/seo-services">Google Adwords </a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/seo-services">PPC Management </a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/link-building-services">Link Building Services </a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="<?php echo HOME; ?>"><i class="fas fa-chart-area"></i> &nbsp;Graphics</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services">Logo Designing</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services">Brochure Designing</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services"> Resumes & CV Designing </a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services"> Business Card & Stationer</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services">Graphic Designing for Social Media</a></li> 
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services">Banner Designing Services</a></li>
                            <li><a class="dropdown-item" href="<?php echo HOME; ?>/services/web-design-services">Photoshop Editing</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <div class="btn-group">
                <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" href="" aria-expanded="false"><i class="fas fa-book"></i>&nbsp;Join Us</a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
                    <li class="dropdown-item">
                        <a class="nav-link" href="apply-trainer"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Apply as Trainer</a>
                        <a class="nav-link" href="apply-trainer"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Apply as Developer</a>
                    </li> 
                </ul>
            </div>
            <!--          
            <li class="nav-item">
                            <a class="nav-link" href="apply-trainer"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Apply as Trainer</a>
                        </li>-->

        </ul>
        <form class="form-inline my-2 my-lg-0" autocomplete="off" action="/action_page.php">
            <input class="form-control mr-sm-2" id="myInput" name="myCountry" type="search" placeholder="Search topics or keywords">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
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
                "MIS & Analytics Training Institute",
                "AngularJS  Training in Delhi | AngularJS  Training Institute in Delhi",
                "AngularJS  Training in Noida | AngularJS  Training Institute in Noida",
                "AngularJS  Training in Ghaziabad | AngularJS  Training Institute in Ghaziabad",
                "Python Training in Delhi | Python Training Institute in Delhi",
                "Python Training in Noida | Python Training Institute in Noida",
                "Python Training in Ghaziabad | Python Training Institute in Ghaziabad",

                "Custom Website Designing Company in India",
                "Responsive Web Designing Company in India ",
                "PSD to HTML Conversion Company in India ",
                "Landing Page Designing Company in India",
                "Multi Vendor Ecommerce Marketplace Company in India",
                "Ecommerce Website Company in India",
                "Corporate Website Company in India",
                "Small Business Website Company in India",
                "B2C Portal Development Company in India",
                "B2B Portal Development Company in India",
                "Magento Web Development Company in India",
                "Wordpress Web Development Company in India ",
                "Joomla Web Development Company in India",
                "CodeIgniter Web Development Company in India",
                "CMS Web Development Company in India ",
                "PHP Web Development Company in India",
                "Digital Marketing Company in India",
                "Writing Services Company in India",
                "Google Promotion Services Company in India",
                "Facebook Advertising Company in India",
                "Google Adwords PPC Management Company in India",
                "Google Map Promotion Company in India",
                "SMS Marketing Services Company in India",
                "Email Marketing Services Company in India",
                "Youtube Video Promotion Company in India",
                "Content Marketing Services Company in India",
                "Social Media Management Company in India",
                "Social Media MarketingCompany in India",
                "Local SEO Services Company in India",
                "Best Social Media Marketing Company in Delhi NCR",
                "Graphic Designing Company in India",
                "Graphic Designing for Social Media Company in India",
                "Logo Designing Company in India",
                "Best Website Development Company in India",
                "Website Designing Company in Delhi",
                "Website Designing Company in India",
                "Website Designing Company in Gurgaon",
                "Website Designing Company in Ghaziabad",
                "Website Designing Company in Noida",
                "E Commerce Website Design Company",
                "Website re-designing Design Company",
                "Website Maintenance Services Provider",
                "Search Marketing Services in Delhi NCR",
                "Search Engine Optimisation Services in Delhi NCR",
                "Pay Per Click Management Services in Delhi NCR",
                "Content Marketing Services in Delhi NCR",
                "Email Marketing Services in Delhi NCR",
                "Local Search Optimisation Services in Delhi NCR",
                "Digital Marketing for Startups Services in Delhi NCR",
                "Voice Search Optimization Services in Delhi NCR",
                "Quality Link Building Services in Delhi NCR",
                "SEO Consultancy and Plan Services in Delhi NCR",
                "Dedicated SEO Resource Services in Delhi NCR",
                "Web Analytics Services in Delhi NCR",
                "Conversion Optimisation Services in Delhi NCR",
                "Landing Page Optimisation Services in Delhi NCR",
                "Dashboard Management Services in Delhi NCR",
                "Mobile Analytics Services in Delhi NCR",
                "Google Tag Management Services in Delhi NCR",
                "Website Development Services in Delhi NCR",
                "Website Designing Services in Delhi NCR",
                "Responsive Designing Services in Delhi NCR",
                "Custom web application Services in Delhi NCR",
                "E-commerece Development Services in Delhi NCR",
                "Content Management System Services in Delhi NCR",
                "Mobile Application Services in Delhi NCR",
                "Logo/Brochure Design Services in Delhi NCR",
                "Social Media Marketing Services in Delhi NCR",
                "Online Reputation Management Services in Delhi NCR",
                "Facebook Marketing Services in Delhi NCR",
                "Twitter Profile Management Services in Delhi NCR",
                "LinkedIn Marketing Services in Delhi NCR",
                "Top Digital Marketing Agency in Delhi NCR",
                "SEO Services Company in India",
                "SMO Services Company in India",
                "SME Services Company in India",
                "Search engine optimization (SEO) services",
                "Social media optimization (SMO) services",
                "Pay per click (PPC) campaign management service",
                "Affordable seo link building services",
                "Professional seo website copywriting service",
                "Website designing company india",
            ];





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
<script>
    $(document).ready(function () {

        $('.navbar .dropdown-item').on('click', function (e) {
            var $el = $(this).children('.dropdown-toggle');
            var $parent = $el.offsetParent(".dropdown-menu");
            $(this).parent("li").toggleClass('open');

            if (!$parent.parent().hasClass('navbar-nav')) {
                if ($parent.hasClass('show')) {
                    $parent.removeClass('show');
                    $el.next().removeClass('show');
                    $el.next().css({"top": -999, "left": -999});
                } else {
                    $parent.parent().find('.show').removeClass('show');
                    $parent.addClass('show');
                    $el.next().addClass('show');
                    $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
                }
                e.preventDefault();
                e.stopPropagation();
            }
        });

        $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
            $(this).find('li.dropdown').removeClass('show open');
            $(this).find('ul.dropdown-menu').removeClass('show open');
        });

    });

</script>
