<?php $title = 'Home_2'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="front not-logged-in">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <div class="inner-wrapper">
    <section class="section section-media">
      <div class="bg" style="background-image: url('theme/images/tmp/top-img-1.jpg');">
        <video id="video" width="420" poster="theme/images/tmp/Drov_v2-02.jpg" preload="auto" autoplay="autoplay" loop="loop" muted="muted">
          <source src="theme/videos/Drov_version_3-1.mp4" type="video/mp4">
          <source src="theme/videos/Drov_version_3-1.webm" type="video/webm">
          Your browser does not support HTML5 video.
        </video>
      </div>
      <div class="btn-play"><a href="#video">Play Sound</a></div>
    </section>
    <section class="section section-media section-default">
      <div class="bg" style="background-image: url('theme/images/bg/bg-home-new.jpg');"></div>
      <div class="valign">
        <div class="container">
          <h1>We put our best wheel forward.</h1>
          <div class="text">
            <p>Drōv is a new technology company committed to bringing step-change innovation to the Commercial Vehicle Industry with the development of patented on-vehicle components, connected vehicle technologies and advanced analytics.</p>
            <p>Drōv's first technology release is its Tire Pressure Management application which creates value for clients via measurable improvements in fleet asset utilization, realization of fuel efficiency gains, extended tire life and compliance towards greenhouse gas emission reduction targets.</p>
            <p>Drōv is also developing innovative solutions that will enable commercial vehicles to leverage imbedded sensor technologies that engage Drōv's on-vehicle hardware to take real time corrective actions as well as record, communicate and analyze critical vehicle operating data to assist Fleet Operators and Original Equipment Manufacturers enhance their decision making effectiveness.</p>
          </div>
        </div>
      </div>
    </section>
    <div class="columnizer container">
      <div class="text">
        <p>Drōv is a new technology company committed to bringing step-change innovation to the Commercial Vehicle Industry with the development of patented on-vehicle components, connected vehicle technologies and advanced analytics.</p>
        <p>Drōv's first technology release is its Tire Pressure Management application, which creates value for clients via measurable improvements in fleet asset utilization, realization of fuel efficiency gains, extended tire life and compliance towards greenhouse gas reduction targets.</p>
        <p>Drōv is also developing innovative solutions that will enable commercial vehicles to leverage embedded sensor technologies that engage Drōv's on-vehicle hardware to take real time corrective actions. In addition, our technology will record, communicate and analyze critical vehicle operating data to assist Fleet Operators and Original Equipment Manufacturers enhance their decision making effectiveness.</p>
      </div>
    </div>
    <div class="content-wrapper container">
      <div class="content-block img-right">
        <div class="text">
          <div class="img"><img src="theme/images/tmp/new-img.png" alt=""/></div>
          <div class="text-inner">
            <h2>Ideal pressure with Drōv's Precise Tire Pressure Management.</h2>
          </div>
        </div>
      </div>
      <div class="separator"><img src="theme/images/tmp/separator.png" alt=""/></div>
      <div class="content-block img-left">
        <div class="text">
<!--          <div class="img"><img src="theme/images/tmp/img-content-2.png" alt=""/></div>-->
          <div class="img">
            <div class="canvas-wrapper" id="canvas-zone-metal">
              <span class="img-desc">
                Drōv Precise <br/> Tire Pressure <br/> Management <br/> System
              </span>
            </div>
          </div>
          <div class="text-inner">
            <p>Our proprietary valve technology dynamically adjusts tire pressure to match the customer’s desired psi. This addresses customer’s concerns related to both over and under pressured tires, resulting in reduced risk of tire failures due to increased wheel temperature and over pressurized tires. Value is created through improved safety and fuel efficiency, and extended tire life cycle.</p>
          </div>
        </div>
      </div>
    </div>
    <section class="section section-desc">
      <div class="bg"></div>
      <div class="container">
        <div class="text-block">
          <h3>Maintaining Precise PSI <br/>
            shouldn’t be this easy.</h3>
          <div class="text">
            <p>Sensors capture key information and automatically adjust the tire pressure to match the precise PSI recommended by the tire manufacturer... in real time.</p>
          </div>
        </div>
        <div class="media">
          <img src="theme/images/tmp/tmp-chart.png" alt=""/>
          <div class="chart" id="chart">
            <div class="grid"></div>
          </div>
        </div>
        <div class="legend">
<!--          <div class="item">-->
<!--            <div class="ico"><img src="theme/images/tmp/chart-ico-1.png" alt=""/></div>-->
<!--            <div class="desc">Precise PSI</div>-->
<!--          </div>-->
          <div class="item">
            <div class="ico"><img src="theme/images/tmp/chart-ico-2.png" alt=""/></div>
            <div class="desc">Drōv Precise Tire Pressure Management System</div>
          </div>
          <div class="item">
            <div class="ico"><img src="theme/images/tmp/chart-ico-3.png" alt=""/></div>
            <div class="desc">Conventional Automatic
              Tire Inflation Systems</div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include 'tpl/layout/footer.inc'; ?>
</div>
<div class="b-modal modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">+</button>
        <h4 id="loginLabel">Log in</h4>
      </div>
      <div class="modal-body">
        <div class="form-item">
          <input type="text" class="form-text" placeholder="Username"/>
        </div>
        <div class="form-item">
          <input type="text" class="form-text" placeholder="Password"/>
        </div>
        <div class="desc"><a href="javascript:void(0);">Forgot Password?</a></div>
        <div class="error-message">Username and password does not match our records</div>
      </div>
      <div class="modal-footer">
        <input class="form-submit" type="submit" value="Submit"/>
      </div>
    </div>
  </div>
</div>

<div class="b-modal modal fade style-a" id="topmenu-modal" tabindex="-1" role="dialog" aria-labelledby="topmenu-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">+</button>
      </div>
      <div class="modal-body">
        Access restricted to Clients & Investors. <br/>
        <a href="#">Email us</a> for more information.
      </div>
      <div class="modal-footer">
        <a href="#" class="btn-close" data-dismiss="modal" aria-hidden="true">Close</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="theme/js/ImageRotator.js"></script>
<script type="text/javascript" src="theme/js/SpinScroll.js"></script>
<script type="text/javascript" src="theme/js/control.js"></script>
</body>
</html>