
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Javatportal Corporation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-home"></i>&nbsp;Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-globe"></i>&nbsp;About Us</a>
      </li>
         <div class="btn-group">
   <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" href="" aria-expanded="false"><i class="fas fa-book"></i>&nbsp;Trending Cources</a>
   <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">

      <li class="dropdown-submenu">
         <a class="dropdown-item" tabindex="-1" href="#"><i class="fas fa-code"></i> &nbsp;CS/IT</a>
         <ul class="dropdown-menu">
            
            <li class="dropdown-submenu">
               <a class="dropdown-item" href="#">Programming Language</a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Core Java/J2SE</a></li>
                  <li><a class="dropdown-item" href="#">ASP .NET</a></li>
               </ul>
            </li>
         </ul>
      </li>
      
       <li class="dropdown-submenu">
         <a class="dropdown-item" tabindex="-1" href="#"><i class="fas fa-database"></i> &nbsp;Professional Programs</a>
         <ul class="dropdown-menu">
            
            <li class="dropdown-submenu">
               <a class="dropdown-item" href="#">Big Data Hadoop</a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Hadoop Admin</a></li>
                  <li><a class="dropdown-item" href="#">Hadoop Data Scientist</a></li>
               </ul>
            </li>
         </ul>
      </li>
      
       <li class="dropdown-submenu">
         <a class="dropdown-item" tabindex="-1" href="#"><i class="fas fa-graduation-cap"></i> &nbsp;Advance Programs</a>
         <ul class="dropdown-menu">
            
            <li class="dropdown-submenu">
               <a class="dropdown-item" href="#">Salesforce</a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Salesforce Admin -201</a></li>
                  <li><a class="dropdown-item" href="#">Apex & Visual Force Development</a></li>
               </ul>
            </li>
         </ul>
      </li>
      
   </ul>
</div>
         <div class="btn-group">
   <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" href="" aria-expanded="false"><i class="fas fa-certificate"></i>&nbsp;Certification</a>
   <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
      <li><a class="dropdown-item" href="#">level 1</a></li>
      <li><a class="dropdown-item" href="#">level 1</a></li>
      <li class="dropdown-divider"></li>
      <li class="dropdown-submenu">
         <a class="dropdown-item" tabindex="-1" href="#">level 1</a>
         <ul class="dropdown-menu">
            <li><a class="dropdown-item" tabindex="-1" href="#">level 2</a></li>
            <li class="dropdown-submenu">
               <a class="dropdown-item" href="#">level 2</a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">3rd level</a></li>
                  <li><a class="dropdown-item" href="#">3rd level</a></li>
               </ul>
            </li>
            <li><a class="dropdown-item" href="#">level 2</a></li>
            <li><a class="dropdown-item" href="#">level 2</a></li>
         </ul>
      </li>
   </ul>
</div>
       <li class="nav-item">
        <a class="nav-link" href="#">Apply as Trainer</a>
      </li>
    
    </ul>
    <form class="form-inline my-2 my-lg-0" autocomplete="off" action="/action_page.php">
      <input class="form-control mr-sm-2" id="myInput" name="myCountry" type="search" placeholder="Search topics or keywords">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

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
