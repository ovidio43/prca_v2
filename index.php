<?php include("header.php");?>
  <div class="container">
    <div class="main-banner">
      <img src="img/banner-home.jpg">
      <div class="caption">Welcome <span>MEMBERS</span>
      <button class="btn btn-primary">VIEW MY ACCOUNT</button>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-7">
        <div class="news-home">
          <h1>Latest <span>News</span></h1>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" 
                      href="#collapse-1">
                      PRCA Year End Awards 
                      <i class="glyphicon glyphicon-chevron-down"></i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    The top five nominees for the PRCA Year-End Awards have been announced.   The ballots were mailed Sept. 12, and the winners will be announced at ...
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" 
                      href="#collapse-2">
                       2014 PRCA Donita Barnes Contract Personnel Lifetime Achievement award
                      <i class="glyphicon glyphicon-chevron-down"></i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-2" class="panel-collapse collapse">
                  <div class="panel-body">
                    The five finalists for the PRCA Donita Barnes Contract  Personnel Lifetime ...
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" 
                      href="#collapse-3">
                      New photo website for PRCA members 
                      <i class="glyphicon glyphicon-chevron-down"></i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-3" class="panel-collapse collapse">
                  <div class="panel-body">
                    The PRCA has launched a new website within Prorodeo.com for members and fans to purchase rodeo images from PRCA Photographers...
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" 
                      href="#collapse-4">
                     New photo website for PRCA members  
                      <i class="glyphicon glyphicon-chevron-down"></i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-4" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>The PRCA has launched a new website within Prorodeo.com for members and fans to purchase rodeo images from PRCA Photographers.</p>
                    <img src="img/news-logo.png" class="alignleft">
                    <p>If you missed buying your photo at a recent PRCA rodeo, you can search the website by event and purchase the photos directly from the site. </p>

                    <p>This new tool allows PRCA Photographers to reach a greater audience and now provides a place for fans to search for their favorite contestant and purchase one or multiple images. As the site is still in the beginning stages, please keep in mind that the list of rodeos posted is growing, so check back often.</p>

                    <p>To learn more, visit <a href="">prorodeophotos.com</a></p>  
                  </div>
                </div>
              </div>  
            </div>        
        </div>
        <div class="layout-image">
          <img src="img/prorodeo.jpg">
        </div>
        <?php include("footer.php");?>
      </div>
      <div class="col-xs-5">
        <div class="home-sidebar">
          <div class="widget">
            <img src="img/cowboy.jpg">
            <div class="caption">
              <h2>2014 PRCA National<br>Convention </h2>
              <h3>n Las Vegas, Nev. at the South Point Hotel, Casino & Spa Dec. 1-4.</h3>
              <ul>
              <li><a href="">2014 Registration Packet PDF</a> </li>
              <li><a href="">Booth Registration</a> </li>
              <li><a href="">Non-Booth Registration </a> </li>          
              </ul>
            </div>
          </div>
          <div class="widget">
            <img src="img/champion.jpg">
            <div class="caption">
              <h2>Champions Challenge</h2>
              <p>Online contestant contract submittal is now available online.  Contestants that are required to read and accept the contract need to login to this website, and select the Champions Challenge Contract from your member dashboard.</p>
            </div>
          </div>           
        </div>
       
      </div>      
    </div>

  </div>  

    <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script-->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
