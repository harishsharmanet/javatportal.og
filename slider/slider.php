
<style>
    canvas{ display: block; vertical-align: bottom; } /* ---- particles.js container ---- */ #particles-js{ position:absolute; width: 100%; height: 100%; background-color: #323840; background-image: url(""); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; } /* ---- stats.js ---- */ .count-particles{ background: #000022; position: absolute; top: 48px; left: 0; width: 80px; color: #13E8E9; font-size: .8em; text-align: left; text-indent: 4px; line-height: 14px; padding-bottom: 2px; font-family: Helvetica, Arial, sans-serif; font-weight: bold; } .js-count-particles{ font-size: 1.1em; } #stats, .count-particles{ -webkit-user-select: none; margin-top: 5px; margin-left: 5px; } #stats{ border-radius: 3px 3px 0 0; overflow: hidden; } .count-particles{ border-radius: 0 0 3px 3px; }


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

</style>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> 
<div id="myCarousel" class="carousel slide" data-ride="carousel">


    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        <div class="item active">
            <div id="particles-js"></div>
            <div class="carousel-caption">
                <img src="<?php echo HOME; ?>/assets/img/logo.png" alt="Javatportal" style="width: 10% !important;" class="desktop-only">
                <img src="<?php echo HOME; ?>/assets/img/logo.png" alt="Javatportal" style="width: 30% !important;" class="mobile-only">

                <h3>JAVATPORTAL CORPORATION</h3>
                <p style="text-align:center">सॉफ्टवेयर विकास एवं प्रशिक्षण कार्यक्रम केंद्र</p>
                <p style="text-align:center" >GRAB & ENROLL IN YOUR DESIRED COURSE TODAY | <kbd class="text-success">20% DISCOUNT</kbd> FOR FEMALE CANDIDATES</p>
                        
                
                        
             
                
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
                <div class="pp-search hidden-xs desktop-only" style=" font-size:  large">
                    <a href=" " title="Microsoft" class="badge badge-pill badge-success"> Big Data Hadoop</a> 
                    <a href=" " title="Microsoft Dynamics" class="badge badge-pill badge-success">Blockchain </a>
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

                <div class="mobile-search visible-xs desktop-only">
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

    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 88,
                "density": {
                    "enable": true,
                    "value_area": 700
                }
            },
            "color": {
                "value": ["#aa73ff", "#f8c210", "#83d238", "#33b1f8"]
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 15
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1.5,
                    "opacity_min": 0.15,
                    "sync": false
                }
            },
            "size": {
                "value": 2.5,
                "random": false,
                "anim": {
                    "enable": true,
                    "speed": 2,
                    "size_min": 0.15,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 110,
                "color": "#33b1f8",
                "opacity": 0.25,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 1.6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function () {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
    ;
</script>
