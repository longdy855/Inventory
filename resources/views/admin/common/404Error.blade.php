<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>No Permission | Bassaka Air Limited</title>

  <!-- Bootstrap core CSS -->

  <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

  <link href="{{url('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('css/animate.min.css')}}" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="{{url('css/custom.css')}}" rel="stylesheet">
  <link href="{{url('css/icheck/flat/green.css')}}" rel="stylesheet">


  <script src="{{url('js/jquery.min.js')}}"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">

    <div class="main_container">

      <!-- page content -->
      <div class="col-md-12">
        <div class="col-middle">
          <div class="text-center text-center">
            <img src="{{url('images/logo.png')}}">
            <h5 class="error-number">No Permission</h5>
            <h2>Sorry you have no permission to open this page</h2>
            <p>Contact your administrator for more detail or => <a href="#" onClick="javascript:window.history.back();" style="text-decoration: underline;color:#f00;">Go Back?</a>
            </p>
            
          </div>
        </div>
      </div>
      <!-- /page content -->

    </div>
    <!-- footer content -->
  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>

  <script src="js/custom.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <!-- /footer content -->
</body>

</html>


<style type="text/css">

html body {
  background: #f4f4f4 !important;
}

  body.nav-sm .container.body .left_col {
  width: 70px;
  padding: 0;
  position: fixed;
  height: 100%;
  z-index: 200;
}
body.nav-sm .container.body .right_col {
  padding: 10px 20px;
  margin-left: 70px;
  z-index: 2;
}
body.nav-sm .navbar.nav_title {
  width: 70px;
}
body.nav-sm .navbar.nav_title a span {
  display: none;
}
body.nav-sm .navbar.nav_title a i {
  font-size: 27px;
  margin: 13px 0 0 3px;
}
.site_title i {
  border: 1px solid #EAEAEA;
  padding: 5px 6px;
  border-radius: 50%;
}
body.nav-sm .main_container .top_nav {
  padding: 0 !important;
  display: block;
  margin-left: 70px;
  z-index: 2;
}
body.nav-sm .nav.side-menu li a {
  text-align: center !important;
  font-weight: 400;
  font-size: 10px;
  padding: 10px 5px;
}
body.nav-sm .nav.side-menu li.active-sm {
  border-right: 5px solid #1ABB9C;
}
body.nav-sm > .nav.side-menu > li.active-sm > a {
  color: #1ABB9C !important;
}
body.nav-sm .nav.side-menu li a i.toggle-up {
  display: none !important;
}
body.nav-sm .nav.side-menu li a i {
  font-size: 25px !important;
  text-align: center;
  width: 100% !important;
  margin-bottom: 5px;
}
body.nav-sm ul.nav.child_menu {
  left: 100%;
  position: absolute;
  top: 0;
  padding: 10px;
  width: 210px;
  z-index: 4000;
  background: #f5f5f5;
  display: none;
}
body.nav-sm ul.nav.child_menu li {
  padding-left: 0;
}
body.nav-sm ul.nav.child_menu li a {
  text-align: left !important;
}
body.nav-sm .profile {
  display: none;
}
.menu_section {
  margin-bottom: 35px;
}
.menu_section h3 {
  padding-left: 23px;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: .5px;
  font-weight: bold;
  font-size: 11px;
  margin-bottom: 0;
  margin-top: 0;
  text-shadow: 1px 1px #000;
}
.menu_section >ul {
  margin-top: 10px;
}
.profile_pic {
  width: 35%;
  float: left;
}
.img-circle.profile_img {
  width: 70%;
  background: #fff;
  margin-left: 15%;
  z-index: 1000;
  position: inherit;
  margin-top: 20px;
  border: 1px solid rgba(52, 73, 94, 0.44);
  padding: 4px;
}
.profile_info {
  padding: 25px 10px 10px;
  width: 65%;
  float: left;
}
.profile_info span {
  font-size: 13px;
  line-height: 30px;
  color: #BAB8B8;
}
.profile_info h2 {
  font-size: 14px;
  color: #ECF0F1;
  margin: 0;
  font-weight: 300;
}
.profile.img_2 {
  text-align: center;
}
.profile.img_2 .profile_pic {
  width: 100%;
}
.profile.img_2 .profile_pic .img-circle.profile_img {
  width: 50%;
  margin: 10px 0 0;
}
.profile.img_2 .profile_info {
  padding: 15px 10px 0;
  width: 100%;
  margin-bottom: 10px;
  float: left;
}
#sidebar-menu span.fa {
  float: right;
  text-align: center;
  margin-top: 5px;
  font-size: 10px !important;
  min-width: inherit;
  color: #C4CFDA;
}
.active a span.fa {
  text-align: right !important;
  margin-right: 4px;
}
body.nav-sm .menu_section {
  margin: 0;
}
body.nav-sm span.fa, body.nav-sm .menu_section h3 {
  display: none !important;
}
.nav_menu {
  float: left;
  /*background: #F4F6F9;
    border-bottom: 1px solid #E6E9ED;*/
  background: #EDEDED;
  border-bottom: 1px solid #D9DEE4;
  margin-bottom: 10px;
  width: 100%;
}
body.nav-md .container.body .col-md-3.left_col {
  width: 230px;
  padding: 0;
  position: absolute;
  display: flex;
}
body .container.body .right_col {
  background: #f5f5f5;
}
body.nav-md .container.body .right_col {
  padding: 10px 20px 0;
  margin-left: 230px;
}
.nav_title {
  width: 230px;
  float: left;
  background: #2A3F54;
  border-radius: 0;
  height: 57px;
}
@media (max-width: 991px) {
  body.nav-md .container.body .right_col, body.nav-md .container.body .top_nav {
    width: 100%;
    margin: 0;
  }
  body.nav-md .container.body .col-md-3.left_col {
    display: none;
  }
  body.nav-md .container.body .right_col {
    width: 100%;
    padding-right: 0
  }
  .right_col {
    padding: 10px !important;
  }
}
@media (max-width: 1200px) {
  .x_title h2 {
    width: 62%;
    font-size: 17px;
  }
  .tile, .graph {
    zoom: 85%;
    height: inherit;
  }
}
@media (max-width: 1270px) and (min-width: 192px) {
  .x_title h2 small {
    display: none
  }
}

/**  ------------------------------------------  **/

.blue {
  color: #3498DB;
}
.purple {
  color: #9B59B6;
}
.green {
  color: #1ABB9C;
}
.aero {
  color: #9CC2CB;
}
.red {
  color: #E74C3C;
}
.dark {
  color: #34495E;
}
.border-blue {
  border-color: #3498DB !important;
}
.border-purple {
  border-color: #9B59B6 !important;
}
.border-green {
  border-color: #1ABB9C !important;
}
.border-aero {
  border-color: #9CC2CB !important;
}
.border-red {
  border-color: #E74C3C !important;
}
.border-dark {
  border-color: #34495E !important;
}
.bg-white {
  background: #fff !important;
  border: 1px solid #fff !important;
  color: #73879C;
}
.bg-green {
  background: #1ABB9C !important;
  border: 1px solid #1ABB9C !important;
  color: #fff;
}
.bg-red {
  background: #E74C3C !important;
  border: 1px solid #E74C3C !important;
  color: #fff;
}
.bg-blue {
  background: #3498DB !important;
  border: 1px solid #3498DB !important;
  color: #fff;
}
.bg-orange {
  background: #F39C12 !important;
  border: 1px solid #F39C12 !important;
  color: #fff;
}
.bg-purple {
  background: #9B59B6 !important;
  border: 1px solid #9B59B6 !important;
  color: #fff;
}
.bg-blue-sky {
  background: #50C1CF !important;
  border: 1px solid #50C1CF !important;
  color: #fff;
}
.container {
  width: 100%;
  padding: 0
}
.navbar-nav>li>a, .navbar-brand, .navbar-nav>li>a {
  color: #fff !important;
}
.navbar-brand, .navbar-nav>li>a {
  margin-bottom: 5px
}
body {
  color: #73879C;
  background: #2A3F54;
  /*#ECF0F1; #FCFCFC*/
  font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
  font-size: 13px;
  font-weight: 400;
  line-height: 1.471;
}
.main_container .top_nav {
  padding: 0 !important;
  display: block;
  padding: 10px 20px 0;
  margin-left: 230px;
}
.main_container {}
.no-padding {
  padding: 0 !important;
}
.page-title {
  width: 100%;
  height: 65px;
  padding: 10px 0;
}
.page-title .title_left {
  width: 45%;
  float: left;
  display: block;
}
.page-title .title_left h3 {
  margin: 9px 0;
}
.page-title .title_right {
  width: 55%;
  float: left;
  display: block;
}
.page-title .title_right .pull-right {
  margin: 10px 0;
}
.fixed_height_320 {
  height: 320px;
}
.fixed_height_390 {
  height: 390px;
}
.fixed_height_200 {
  height: 200px;
}
.overflow_hidden {
  overflow: hidden
}
.progress-bar-dark {
  background-color: #34495E !important;
}
.progress-bar-gray {
  background-color: #BDC3C7 !important;
}
table.no-margin .progress {
  margin-bottom: 0;
}
.main_content {
  padding: 10px 20px;
}
.col-md-55 {
  width: 50%;
  margin-bottom: 10px;
}
@media (max-width: 992px) {
  .tile_stats_count {
    margin-bottom: 10px;
    border-bottom: 1px solid #D9DEE4;
    padding-bottom: 10px;
  }
}
@media (min-width: 992px) and (max-width: 1100px) {
  .tile_stats_count .count {
    font-size: 35px !important;
  }
}
@media(max-width:768px) {
  .tile_stats_count .count {
    font-size: 30px !important;
  }
  .tile_stats_count .right span {
    font-size: 12px;
  }
}
@media (min-width: 768px) {
  .col-md-55 {
    width: 20%;
  }
}
@media (min-width: 992px) {
  .col-md-55 {
    width: 20%;
  }
}
@media (min-width: 1200px) {
  .col-md-55 {
    width: 20%;
  }
}
@media (min-width: 192px) and (max-width: 1270px) {
  .hidden-small {
    display: none !important;
  }
  table.tile_info span.right {
    margin-right: 7px;
    float: left;
  }
}
.center-margin {
  margin: 0 auto;
  float: none!important;
}
.col-md-55, .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  float: left;
  padding-right: 10px;
  padding-left: 10px;
}
.row {
  margin-right: -10px;
  margin-left: -10px;
}
.grid_slider .col-md-6 {
  padding: 0 40px;
}
h1, .h1, h2, .h2, h3, .h3 {
  margin-top: 10px;
  margin-bottom: 10px;
}
a {
  color: #5A738E;
  text-decoration: none;
}
a, a:visited, a:focus, a:active, :visited, :focus, :active, .btn:focus, .btn:active:focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn.active.focus {
  outline: 0;
}
a:hover, a:focus {
  text-decoration: none
}
.navbar {
  margin-bottom: 0
}
.navbar-header {
  background: #34495E;
}
.navbar-right {
  margin-right: 0;
}
.top_nav .navbar-right {
  margin: 0;
  width: 70%;
  float: right;
}
.top_nav .navbar-right li {
  display: inline-block;
  float: right;
}
.top_nav .dropdown-menu {
  min-width: 220px;
}
.top_nav .dropdown-menu li {
  width: 100%;
}
.top_nav .dropdown-menu li a {
  width: 100%;
  padding: 12px 20px;
}
.top_nav li a i {
  font-size: 15px
}
.navbar-static-top {
  position: fixed;
  top: 0;
  width: 100%;
}
.sidebar-header {
  border-bottom: 0;
  margin-top: 46px;
}
.sidebar-header:first-of-type {
  margin-top: 0
}
.nav.side-menu> li {
  position: relative;
  display: block;
}
.nav.side-menu> li > a {
  margin-bottom: 6px;
}
.nav.side-menu> li > a:hover {
  color: #F2F5F7 !important;
}
.nav.side-menu>li>a:hover, .nav>li>a:focus {
  text-decoration: none;
  background: transparent;
}
.nav.child_menu li:hover {
  background-color: rgba(255, 255, 255, 0.06);
}
.nav.child_menu li {
  padding-left: 36px
}
body.nav-md ul.nav.child_menu li:before {
  background: #425668;
  bottom: auto;
  content: "";
  height: 8px;
  left: 23px;
  margin-top: 15px;
  position: absolute;
  right: auto;
  width: 8px;
  z-index: 1;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
}
body.nav-md ul.nav.child_menu li:after {
  border-left: 1px solid #425668;
  bottom: 0;
  content: "";
  left: 27px;
  position: absolute;
  top: 0;
}
.nav.side-menu>li>a, .nav.child_menu>li>a {
  color: #E7E7E7 !important;
  font-weight: 500;
}
.nav>li>a {
  position: relative;
  display: block;
  padding: 13px 15px 7px;
}
.nav.side-menu> li.current-page, .nav.side-menu> li.active {
  border-right: 5px solid #1ABB9C;
}
li.current-page {
  background: rgba(255, 255, 255, 0.05);
}
.nav.side-menu> li.active > a {
  color: #ff0000;
  text-shadow: rgba(0, 0, 0, 0.25) 0 -1px 0;
  background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #5b6479), color-stop(100%, #4c5566)), #686e78;
  background: -webkit-linear-gradient(#334556, #2C4257), #2A3F54;
  background: -moz-linear-gradient(#334556, #2C4257), #2A3F54;
  background: -o-linear-gradient(#334556, #2C4257), #2A3F54;
  background: linear-gradient(#334556, #2C4257), #2A3F54;
  -webkit-box-shadow: rgba(0, 0, 0, 0.25) 0 1px 0, inset rgba(255, 255, 255, 0.16) 0 1px 0;
  -moz-box-shadow: rgba(0, 0, 0, 0.25) 0 1px 0, inset rgba(255, 255, 255, 0.16) 0 1px 0;
  box-shadow: rgba(0, 0, 0, 0.25) 0 1px 0, inset rgba(255, 255, 255, 0.16) 0 1px 0;
}
li.current-page a {
  color: #1ABB9C !important
}
.navbar-brand, .navbar-nav>li>a {
  font-weight: 500;
  color: #ECF0F1 !important;
  margin-left: 0 !important;
  line-height: 32px;
}
.site_title {
  text-overflow: ellipsis;
  overflow: hidden;
  font-weight: 400;
  font-size: 22px;
  width: 100%;
  color: #ECF0F1 !important;
  margin-left: 0 !important;
  line-height: 59px;
  display: block;
  height: 55px;
  margin: 0;
  padding-left: 10px;
}
.site_title:hover, .site_title:focus {
  text-decoration: none
}
.nav.navbar-nav>li>a {
  color: #515356 !important;
}
.nav.top_menu>li>a {
  position: relative;
  display: block;
  padding: 10px 15px;
  color: #34495E !important;
}
.nav>li>a:hover, .nav>li>a:focus {
  background-color: transparent;
}
.top_search {
  padding: 0;
}
.top_search .form-control {
  border-right: 0;
  box-shadow: inset 0 1px 0px rgba(0, 0, 0, 0.075);
  border-radius: 25px 0px 0px 25px;
  padding-left: 20px;
  border: 1px solid rgba(221, 226, 232, 0.49);
}
.top_search .form-control:focus {
  border: 1px solid rgba(221, 226, 232, 0.49);
  border-right: 0;
}
.top_search .input-group-btn button {
  border-radius: 0px 25px 25px 0px;
  border: 1px solid rgba(221, 226, 232, 0.49);
  border-left: 0;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  color: #93A2B2;
  margin-bottom: 0 !important;
}
.toggle {
  float: left;
  margin: 0;
  padding-top: 16px;
  width: 70px;
}
.toggle a {
  padding: 15px 15px 0;
  margin: 0;
}
.toggle a i {
  font-size: 26px;
}
.nav.child_menu > li > a {
  color: rgba(255, 255, 255, 0.75) !important;
  font-size: 12px;
  padding: 9px;
}
.panel_toolbox {
  float: right;
  min-width: 70px;
}
.panel_toolbox>li {
  float: left;
}
.panel_toolbox>li>a {
  padding: 5px;
  color: #C5C7CB;
  font-size: 14px;
}
.panel_toolbox>li>a:hover {
  background: #F5F7FA;
}
.line_30 {
  line-height: 30px;
}
.main_menu_side {
  padding: 0;
}
.bs-docs-sidebar .nav>li>a {
  display: block;
  padding: 4px 6px;
}
.x_content canvas {}
footer {
  background: #fff;
  padding: 5px 20px 0;
  height: 45px;
  margin: 0 -17px;
}
.tile-stats.sparkline {
  padding: 10px;
  text-align: center;
}
.jqstooltip {
  background: #34495E !important;
  width: 30px !important;
  height: 22px !important;
  text-decoration: none;
}
a.btn-success, a.btn-primary, a.btn-warning, a.btn-danger {
  color: #fff !important;
}
.btn {
  border-radius: 3px;
}
.tooltip {
  display: block !important;
}
.tiles {
  border-top: 1px solid #ccc;
  margin-top: 15px;
  padding-top: 5px;
  margin-bottom: 0;
}
.tile {
  overflow: hidden;
}
.top_tiles {
  margin-bottom: 0;
}
.top_tiles .tile span {}
.top_tiles .tile h2 {
  font-size: 30px;
  line-height: 30px;
  margin: 3px 0 7px;
  font-weight: bold;
}
article.media {
  width: 100%;
}

/* *********  custom accordion  **************************** */

*, *:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#integration-list {
  width: 100%;
  margin: 0 auto;
  display: table;
}
#integration-list ul {
  padding: 0;
  margin: 20px 0;
  color: #555;
}
#integration-list ul > li {
  list-style: none;
  border-top: 1px solid #ddd;
  display: block;
  padding: 15px;
  overflow: hidden;
}
#integration-list ul:last-child {
  border-bottom: 1px solid #ddd;
}
#integration-list ul > li:hover {
  background: #efefef;
}
.expand {
  display: block;
  text-decoration: none;
  color: #555;
  cursor: pointer;
}
.expand h2 {
  width: 85%;
  float: left;
}
h2 {
  font-size: 18px;
  font-weight: 400;
}
#left, #right {
  display: table;
}
#sup {
  display: table-cell;
  vertical-align: middle;
  width: 80%;
}
.detail a {
  text-decoration: none;
  color: #C0392B;
  border: 1px solid #C0392B;
  padding: 6px 10px 5px;
  font-size: 13px;
  margin-right: 7px;
}
.detail {
  margin: 10px 0 10px 0px;
  display: none;
  line-height: 22px;
  height: 150px;
}
.detail span {
  margin: 0;
}
.right-arrow {
  width: 10px;
  float: right;
  font-weight: bold;
  font-size: 20px;
}
.accordion .panel {
  margin-bottom: 5px;
  border-radius: 0;
  border-bottom: 1px solid #efefef;
}
.accordion .panel-heading {
  background: #F2F5F7;
  padding: 13px;
  width: 100%;
  display: block;
}
.accordion .panel:hover {
  background: #F2F5F7;
}
.x_panel {
  position: relative;
  width: 100%;
  margin-bottom: 10px;
  padding: 10px 17px;
  display: inline-block;
  background: #fff;
  border: 1px solid #E6E9ED;
  -webkit-column-break-inside: avoid;
  -moz-column-break-inside: avoid;
  column-break-inside: avoid;
  opacity: 1;
  -moz-transition: all .2s ease;
  -o-transition: all .2s ease;
  -webkit-transition: all .2s ease;
  -ms-transition: all .2s ease;
  transition: all .2s ease;
}
.x_title {
  border-bottom: 2px solid #E6E9ED;
  padding: 1px 5px 6px;
  margin-bottom: 10px;
}
.x_title .filter {
  width: 40%;
  float: right;
}
.x_title h2 {
  margin: 5px 0 6px;
  float: left;
  display: block;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}
.x_title h2 small {
  margin-left: 10px;
}
.x_title span {
  color: #BDBDBD;
}
.x_content {
  padding: 0 5px 6px;
  position: relative;
  width: 100%;
  float: left;
  clear: both;
  margin-top: 5px;
}
.x_content h4 {
  font-size: 16px;
  font-weight: 500;
}
legend {
  padding-bottom: 7px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.demo-placeholder {
  height: 280px;
}

/* *********  contacts  ********************************** */

.profile_view {
  margin-bottom: 20px;
  display: inline-block;
  width: 100%;
}
.well.profile_view {
  padding: 10px 0 0;
}
.well.profile_view .divider {
  border-top: 1px solid #e5e5e5;
  padding-top: 5px;
  margin-top: 5px;
}
.well.profile_view .ratings {
  margin-bottom: 0;
}
.pagination.pagination-split li {
  display: inline-block;
  margin-right: 3px;
}
.pagination.pagination-split li a {
  border-radius: 4px;
  color: #768399;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
}
.well.profile_view {
  background: #fff;
}
.well.profile_view .bottom {
  margin-top: -20px;
  background: #F2F5F7;
  padding: 9px 0;
  border-top: 1px solid #E6E9ED;
}
.well.profile_view .left {
  margin-top: 20px;
}
.well.profile_view .left p {
  margin-bottom: 3px;
}
.well.profile_view .right {
  margin-top: 0px;
  padding: 10px;
}
.well.profile_view .img-circle {
  border: 1px solid #E6E9ED;
  padding: 2px;
}
.well.profile_view h2 {
  margin: 5px 0;
}
.well.profile_view .ratings {
  text-align: left;
  font-size: 16px;
}
.well.profile_view .brief {
  margin: 0;
  font-weight: 300;
}
.profile_left {
  background: white;
}

/* *********  /contacts  ********************************** */


/* *********  /custom accordion  **************************** */


/* *********  dashboard widget  **************************** */

table.tile h3, table.tile h4, table.tile span {
  font-weight: bold;
  vertical-align: middle !important;
}
table.tile th, table.tile td {
  text-align: center;
}
table.tile th {
  border-bottom: 1px solid #E6ECEE;
}
table.tile td {
  padding: 5px 0;
}
table.tile td ul {
  text-align: left;
  padding-left: 0
}
table.tile td ul li {
  list-style: none;
  width: 100%;
}
table.tile td ul li a {
  width: 100%
}
table.tile td ul li a big {
  right: 0;
  float: right;
  margin-right: 13px;
}
table.tile_info {
  width: 100%;
}
table.tile_info td {
  text-align: left;
  padding: 1px;
  font-size: 15px
}
table.tile_info td p {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  margin: 0;
  line-height: 28px;
}
table.tile_info td i {
  margin-right: 8px;
  font-size: 17px;
  float: left;
  width: 18px;
  line-height: 28px
}
table.tile_info td:first-child {
  width: 83%;
}
td span {
  line-height: 28px;
}
.sidebar-widget {
  overflow: hidden;
}
.error-number {
  font-size: 90px;
  line-height: 90px;
  margin: 20px 0;
}
.col-middle {
  margin-top: 5%;
}
.mid_center {
  width: 370px;
  margin: 0 auto;
  text-align: center;
  padding: 10px 20px;
}
h3.degrees {
  font-size: 22px;
  font-weight: 400;
  text-align: center;
}
.degrees:after {
  content: "o";
  position: relative;
  top: -12px;
  font-size: 13px;
  font-weight: 300;
}
.daily-weather .day {
  font-size: 14px;
  border-top: 2px solid rgba(115, 135, 156, 0.36);
  text-align: center;
  border-bottom: 2px solid rgba(115, 135, 156, 0.36);
  padding: 5px 0;
}
.weather-days .col-sm-2 {
  overflow: hidden;
  width: 16.66666667%;
}
.weather .row {
  margin-bottom: 0
}

/* *********  tables styling  ******************************* */

.bulk-actions {
  display: none;
}
table.countries_list {
  width: 100%;
}
table.countries_list td {
  padding: 0 10px;
  line-height: 30px;
  border-top: 1px solid #eeeeee;
}
.dataTables_paginate a {
  padding: 6px 9px !important;
  background: #ddd !important;
  border-color: #ddd !important;
}
.paging_full_numbers a.paginate_active {
  background-color: rgba(38, 185, 154, 0.59) !important;
  border-color: rgba(38, 185, 154, 0.59) !important;
}
button.DTTT_button, div.DTTT_button, a.DTTT_button {
  border: 1px solid #E7E7E7 !important;
  background: #E7E7E7 !important;
  box-shadow: none !important;
}
table.jambo_table {
  border: 1px solid rgba(221, 221, 221, 0.78);
}
table.jambo_table thead {
  background: rgba(52, 73, 94, 0.94);
  color: #ECF0F1;
}
table.jambo_table tbody tr:hover td {
  background: rgba(38, 185, 154, 0.07);
  border-top: 1px solid rgba(38, 185, 154, 0.11);
  border-bottom: 1px solid rgba(38, 185, 154, 0.11);
}
table.jambo_table tbody tr.selected {
  background: rgba(38, 185, 154, 0.16);
}
table.jambo_table tbody tr.selected td {
  border-top: 1px solid rgba(38, 185, 154, 0.40);
  border-bottom: 1px solid rgba(38, 185, 154, 0.40);
}
.dataTables_paginate a {
  background: #ff0000;
}
.dataTables_wrapper {
  position: relative;
  clear: both;
  zoom: 1;
  /* Feeling sorry for IE */
}
.dataTables_processing {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 250px;
  height: 30px;
  margin-left: -125px;
  margin-top: -15px;
  padding: 14px 0 2px 0;
  border: 1px solid #ddd;
  text-align: center;
  color: #999;
  font-size: 14px;
  background-color: white;
}
.dataTables_length {
  width: 40%;
  float: left;
}
.dataTables_filter {
  width: 50%;
  float: right;
  text-align: right;
}
.dataTables_info {
  width: 60%;
  float: left;
}
.dataTables_paginate {
  float: right;
  text-align: right;
}
table.dataTable th.focus,
table.dataTable td.focus {
    outline: 2px solid #1ABB9C !important;
    outline-offset: -1px;
}

/* Pagination nested */

.paginate_disabled_previous, .paginate_enabled_previous, .paginate_disabled_next, .paginate_enabled_next {
  height: 19px;
  float: left;
  cursor: pointer;
  *cursor: hand;
  color: #111 !important;
}
.paginate_disabled_previous:hover, .paginate_enabled_previous:hover, .paginate_disabled_next:hover, .paginate_enabled_next:hover {
  text-decoration: none !important;
}
.paginate_disabled_previous:active, .paginate_enabled_previous:active, .paginate_disabled_next:active, .paginate_enabled_next:active {
  outline: none;
}
.paginate_disabled_previous, .paginate_disabled_next {
  color: #666 !important;
}
.paginate_disabled_previous, .paginate_enabled_previous {
  padding-left: 23px;
}
.paginate_disabled_next, .paginate_enabled_next {
  padding-right: 23px;
  margin-left: 10px;
}
.paginate_disabled_previous {
  background: url('../images/back_disabled.png') no-repeat top left;
}
.paginate_enabled_previous {
  background: url('../images/back_enabled.png') no-repeat top left;
}
.paginate_enabled_previous:hover {
  background: url('../images/back_enabled_hover.png') no-repeat top left;
}
.paginate_disabled_next {
  background: url('../images/forward_disabled.png') no-repeat top right;
}
.paginate_enabled_next {
  background: url('../images/forward_enabled.png') no-repeat top right;
}
.paginate_enabled_next:hover {
  background: url('../images/forward_enabled_hover.png') no-repeat top right;
}
table.display {
  margin: 0 auto;
  clear: both;
  width: 100%;
}
table.display thead th {
  padding: 8px 18px 8px 10px;
  border-bottom: 1px solid black;
  font-weight: bold;
  cursor: pointer;
  cursor: hand;
}
table.display tfoot th {
  padding: 3px 18px 3px 10px;
  border-top: 1px solid black;
  font-weight: bold;
}
table.display tr.heading2 td {
  border-bottom: 1px solid #aaa;
}
table.display td {
  padding: 3px 10px;
}
table.display td.center {
  text-align: center;
}
table.display thead th:active, table.display thead td:active {
  outline: none;
}
.dataTables_scroll {
  clear: both;
}
.dataTables_scrollBody {
  *margin-top: -1px;
  -webkit-overflow-scrolling: touch;
}
.top, .bottom {}
.top .dataTables_info {
  float: none;
}
.clear {
  clear: both;
}
.dataTables_empty {
  text-align: center;
}
tfoot input {
  margin: 0.5em 0;
  width: 100%;
  color: #444;
}
tfoot input.search_init {
  color: #999;
}
td.group {
  background-color: #d1cfd0;
  border-bottom: 2px solid #A19B9E;
  border-top: 2px solid #A19B9E;
}
td.details {
  background-color: #d1cfd0;
  border: 2px solid #A19B9E;
}
.example_alt_pagination div.dataTables_info {
  width: 40%;
}
.paging_full_numbers {
  width: 400px;
  height: 22px;
  line-height: 22px;
}
.paging_full_numbers a:active {
  outline: none
}
.paging_full_numbers a:hover {
  text-decoration: none;
}
.paging_full_numbers a.paginate_button, .paging_full_numbers a.paginate_active {
  border: 1px solid #aaa;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  padding: 2px 5px;
  margin: 0 3px;
  cursor: pointer;
  *cursor: hand;
}
.paging_full_numbers a.paginate_button {
  background-color: #ddd;
}
.paging_full_numbers a.paginate_button:hover {
  background-color: #ccc;
  text-decoration: none !important;
}
.paging_full_numbers a.paginate_active {
  background-color: #99B3FF;
}
table.display tr.even.row_selected td {
  background-color: #B0BED9;
}
table.display tr.odd.row_selected td {
  background-color: #9FAFD1;
}
div.box {
  height: 100px;
  padding: 10px;
  overflow: auto;
  border: 1px solid #8080FF;
  background-color: #E5E5FF;
}

/* *********  /tables styleing  ****************************** */


/* *********  /dashboard widget  **************************** */


/* *********  widgets  *************************************** */

ul.msg_list li {
  background: #f7f7f7;
  padding: 5px;
  display: flex;
  margin: 6px 6px 0;
  width: 96% !important;
}
ul.msg_list li:last-child {
  margin-bottom: 6px;
  padding: 10px;
}
ul.msg_list li a {
  padding: 3px 5px !important;
}
ul.msg_list li a .image img {
  border-radius: 2px 2px 2px 2px;
  -webkit-border-radius: 2px 2px 2px 2px;
  float: left;
  margin-right: 10px;
  width: 11%;
}
ul.msg_list li a .time {
  font-size: 11px;
  font-style: italic;
  font-weight: bold;
  position: absolute;
  right: 35px;
}
ul.msg_list li a .message {
  display: block !important;
  font-size: 11px;
}
.dropdown-menu.msg_list {
  width: 300px !important;
}
.dropdown-menu.msg_list span {
  white-space: normal;
}
.dropdown-menu {
  border: medium none;
  border-radius: 3px;
  box-shadow: 0 0 3px;
  display: none;
  float: left;
  font-size: 12px;
  left: 0;
  list-style: none outside none;
  padding: 0;
  position: absolute;
  text-shadow: none;
  top: 100%;
  z-index: 1000;
  border-radius: 2px;
  border-top: 1px solid #999999;
}
.dropdown-menu:after {
  border-bottom: 6px solid #999999;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  content: "";
  display: inline-block;
  right: 6%;
  position: absolute;
  top: -6px;
}
.dropdown-menu>li>a {
  color: #5A738E;
}
.navbar-nav .open .dropdown-menu {
  position: absolute;
  background: #fff;
  margin-top: 0;
  border: 1px solid #D9DEE4;
  -webkit-box-shadow: none;
}
.info-number .badge {
  font-size: 10px;
  font-weight: normal;
  line-height: 13px;
  padding: 2px 6px;
  position: absolute;
  right: 2px;
  top: 8px;
}
ul.to_do {
  padding: 0;
}
ul.to_do li {
  background: #f3f3f3;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  position: relative;
  padding: 7px;
  margin-bottom: 5px;
  list-style: none;
}
ul.to_do p {
  margin: 0;
}
.dashboard-widget {
  background: #f6f6f6;
  border-top: 5px solid #79C3DF;
  border-radius: 3px;
  padding: 5px 10px 10px;
}
.dashboard-widget .dashboard-widget-title {
  font-weight: normal;
  border-bottom: 1px solid #c1cdcd;
  margin: 0 0 10px 0;
  padding-bottom: 5px;
  padding-left: 40px;
  line-height: 30px;
}
.dashboard-widget .dashboard-widget-title i {
  font-size: 100%;
  margin-left: -35px;
  margin-right: 10px;
  color: #33a1c9;
  padding: 3px 6px;
  border: 1px solid #abd9ea;
  border-radius: 5px;
  background: #fff;
}
ul.quick-list {
  width: 45%;
  padding-left: 0;
  display: inline-block;
}
ul.quick-list li {
  padding-left: 10px;
  list-style: none;
  margin: 0;
  padding-bottom: 6px;
  padding-top: 4px;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
ul.quick-list li i {
  padding-right: 10px;
  color: #757679;
}
.dashboard-widget-content {
  padding-top: 9px;
}
.dashboard-widget-content .sidebar-widget {
  width: 50%;
  display: inline-block;
  vertical-align: top;
  background: #fff;
  border: 1px solid #abd9ea;
  border-radius: 5px;
  text-align: center;
  float: right;
  padding: 2px;
  margin-top: 10px;
}
.widget_summary {
  width: 100%;
  display: inline-flex;
}
.widget_summary .w_left {
  float: left;
  text-align: left;
}
.widget_summary .w_center {
  float: left;
}
.widget_summary .w_right {
  float: left;
  text-align: right;
}
.widget_summary .w_right span {
  font-size: 20px;
}
.w_20 {
  width: 20%
}
.w_25 {
  width: 25%
}
.w_55 {
  width: 55%
}
h5.graph_title {
  text-align: left;
  margin-left: 10px
}
h5.graph_title i {
  margin-right: 10px;
  font-size: 17px
}
span.right {
  float: right;
  font-size: 14px !important
}
.tile_info a {
  text-overflow: ellipsis;
}
.sidebar-footer {
  bottom: 0px;
  clear: both;
  display: block;
  padding: 5px 0 0 0;
  position: fixed;
  width: 230px;
  z-index: 1000;
  background: #2A3F54;
}
.sidebar-footer a {
  padding: 7px 0 3px;
  text-align: center;
  width: 25%;
  font-size: 17px;
  display: block;
  float: left;
  background: #172D44;
}
.sidebar-footer a:hover {
  background: #425567;
}
.tile_count {
  margin-bottom: 20px;
  margin-top: 20px;
}
.tile_count div:first-child .left {
  border: 0;
}
.tile_count .tile_stats_count {
  border-left: 0px solid #333;
  padding: 0;
}
.tile_stats_count .left {
  width: 15%;
  float: left;
  height: 65px;
  border-left: 2px solid #ADB2B5;
  margin-top: 10px;
}
.tile_stats_count .right {
  padding-left: 10px;
  height: 100%;
  text-overflow: ellipsis;
  overflow: hidden;
}
.tile_stats_count .right span {
  text-overflow: ellipsis;
  white-space: nowrap;
}
.tile_stats_count .count {
  font-size: 40px;
  line-height: 47px;
  font-weight: 600;
}
.tile_stats_count .count small {
  font-size: 20px;
  line-height: 20px;
  font-weight: 600;
}
.count_bottom i {
  width: 12px;
}
.dashboard_graph {
  background: #fff;
  padding: 7px 10px;
}
.dashboard_graph .col-md-9, .dashboard_graph .col-md-3 {
  padding: 0;
}
a.user-profile {
  color: #5E6974 !important;
}
.user-profile img {
  width: 29px;
  height: 29px;
  border-radius: 50%;
  margin-right: 10px;
}
ul.top_profiles {
  height: 330px;
  width: 100%;
}
ul.top_profiles li {
  margin: 0;
  padding: 3px 5px;
}
ul.top_profiles li:nth-child(odd) {
  background-color: #eee;
}
.media .profile_thumb {
  border: 1px solid;
  width: 50px;
  height: 50px;
  margin: 5px 10px 5px 0;
  border-radius: 50%;
  padding: 9px 12px;
}
.media .profile_thumb i {
  font-size: 30px;
}
.media .date {
  background: #ccc;
  width: 52px;
  margin-right: 10px;
  border-radius: 10px;
  padding: 5px;
}
.media .date .month {
  margin: 0;
  text-align: center;
  color: #fff;
}
.media .date .day {
  text-align: center;
  color: #fff;
  font-size: 27px;
  margin: 0;
  line-height: 27px;
  font-weight: bold;
}
.event .media-body a.title {
  font-weight: bold;
}
.event .media-body p {
  margin-bottom: 0;
}
h4.graph_title {
  margin: 7px;
  text-align: center;
}

/* *********  /widgets  *************************************** */


/* *********  iconts-display  **************************** */

.fontawesome-icon-list .fa-hover a:hover {
  background-color: #ddd;
  color: #fff;
  text-decoration: none;
}
.fontawesome-icon-list .fa-hover a {
  display: block;
  line-height: 32px;
  height: 32px;
  padding-left: 10px;
  border-radius: 4px;
}
.fontawesome-icon-list .fa-hover a:hover .fa {
  font-size: 28px;
  vertical-align: -6px;
}
.fontawesome-icon-list .fa-hover a .fa {
  width: 32px;
  font-size: 16px;
  display: inline-block;
  text-align: right;
  margin-right: 10px;
}
#sidebar-menu .fa {
  width: 26px;
  opacity: .99;
  display: inline-block;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  font-size: 18px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* *********  /iconts-display  **************************** */


/* *********  Tile stats  **************************** */

.tile-stats {
  position: relative;
  display: block;
  margin-bottom: 12px;
  border: 1px solid #E4E4E4;
  -webkit-border-radius: 5px;
  overflow: hidden;
  padding-bottom: 5px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 5px;
  -moz-background-clip: padding;
  border-radius: 5px;
  background-clip: padding-box;
  background: #FFF;
  -moz-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  -webkit-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.tile-stats:hover .icon i {
  animation-name: tansformAnimation;
  animation-duration: .5s;
  animation-iteration-count: 1;
  color: rgba(58, 58, 58, 0.41);
  animation-timing-function: ease;
  animation-fill-mode: forwards;
  -webkit-animation-name: tansformAnimation;
  -webkit-animation-duration: .5s;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: ease;
  -webkit-animation-fill-mode: forwards;
  -moz-animation-name: tansformAnimation;
  -moz-animation-duration: .5s;
  -moz-animation-iteration-count: 1;
  -moz-animation-timing-function: ease;
  -moz-animation-fill-mode: forwards;
}
.tile-stats .icon {
  color: #BAB8B8;
  position: absolute;
  right: 53px;
  top: 22px;
  z-index: 1;
}
.tile-stats .icon i {
  margin: 0;
  font-size: 60px;
  line-height: 0;
  vertical-align: bottom;
  padding: 0;
}
.tile-stats .count {
  font-size: 38px;
  font-weight: bold;
  line-height: 1.65857143
}
.tile-stats .count, .tile-stats h3, .tile-stats p {
  position: relative;
  margin: 0;
  margin-left: 10px;
  z-index: 5;
  padding: 0;
}
.tile-stats h3 {
  color: #BAB8B8;
}
.tile-stats p {
  margin-top: 5px;
  font-size: 12px;
}
.tile-stats > .dash-box-footer {
  position: relative;
  text-align: center;
  margin-top: 5px;
  padding: 3px 0;
  color: #fff;
  color: rgba(255, 255, 255, 0.8);
  display: block;
  z-index: 10;
  background: rgba(0, 0, 0, 0.1);
  text-decoration: none;
}
.tile-stats > .dash-box-footer:hover {
  color: #fff;
  background: rgba(0, 0, 0, 0.15);
}
.tile-stats > .dash-box-footer:hover {
  color: #fff;
  background: rgba(0, 0, 0, 0.15);
}
table.tile_info {
  padding: 10px 15px;
}
table.tile_info span.right {
  margin-right: 0;
  float: right;
  position: absolute;
  right: 4%;
}
.tile:hover {
  text-decoration: none;
}
.tile_header {
  border-bottom: transparent;
  padding: 7px 15px;
  margin-bottom: 15px;
  background: #E7E7E7;
}
.tile_head h4 {
  margin-top: 0;
  margin-bottom: 5px;
}
.tiles-bottom {
  padding: 5px 10px;
  margin-top: 10px;
  background: rgba(194, 194, 194, 0.3);
  text-align: left;
}

/* *********  /Tile stats  **************************** */


/* *********  /inbox design  **************************** */

a.star {
  color: #428bca !important
}
.mail_content {
  background: none repeat scroll 0 0 #FFFFFF;
  border-radius: 4px;
  margin-top: 20px;
  min-height: 500px;
  padding: 10px 11px;
  width: 100%;
}
.list-btn-mail {
  margin-bottom: 15px;
}
.list-btn-mail.active {
  border-bottom: 1px solid #39B3D7;
  padding: 0 0 14px;
}
.list-btn-mail > i {
  float: left;
  font-size: 18px;
  font-style: normal;
  width: 33px;
}
.list-btn-mail > .cn {
  background: none repeat scroll 0 0 #39B3D7;
  border-radius: 12px;
  color: #FFFFFF;
  float: right;
  font-style: normal;
  padding: 0 5px;
}
.button-mail {
  margin: 0 0 15px !important;
  text-align: left;
  width: 100%;
}
.buttons, button, .btn {
  margin-bottom: 5px;
  margin-right: 5px;
}
.btn-group-vertical .btn, .btn-group .btn {
  margin-bottom: 0;
  margin-right: 0;
}
.mail_list_column {
  border-left: 1px solid #DBDBDB;
}
.mail_view {
  border-left: 1px solid #DBDBDB
}
.mail_list {
  width: 100%;
  border-bottom: 1px solid #DBDBDB;
  margin-bottom: 2px;
  display: inline-block;
}
.mail_list .left {
  width: 5%;
  float: left;
  margin-right: 3%
}
.mail_list .right {
  width: 90%;
  float: left
}
.mail_list h3 {
  font-size: 15px;
  font-weight: bold;
  margin: 0px 0 6px;
}
.mail_list h3 small {
  float: right;
  color: #ADABAB;
  font-size: 11px;
  line-height: 20px;
}
.mail_list .badge {
  padding: 3px 6px;
  font-size: 8px;
  background: #BAB7B7
}
@media (max-width: 767px) {
  .mail_list {
    margin-bottom: 5px;
    display: inline-block;
  }
}
.mail_heading h4 {
  font-size: 18px;
  border-bottom: 1px solid #ddd;
  padding-bottom: 10px;
  margin-top: 20px;
}
.attachment {
  margin-top: 30px;
}
.attachment ul {
  width: 100%;
  list-style: none;
  padding-left: 0;
  display: inline-block;
  margin-bottom: 30px;
}
.attachment ul li {
  float: left;
  width: 150px;
  margin-right: 10px;
  margin-bottom: 10px;
}
.attachment ul li img {
  height: 150px;
  border: 1px solid #ddd;
  padding: 5px;
  margin-bottom: 10px;
}
.attachment ul li span {
  float: right;
}
.attachment .file-name {
  float: left;
}
.attachment .links {
  width: 100%;
  display: inline-block;
}

/* *********  /inbox design   **************************** */


/* *********  form design  **************************** */

.editor.btn-toolbar {
  zoom: 1;
  background: #F7F7F7;
  margin: 5px 2px;
  padding: 3px 0;
  border: 1px solid #EFEFEF;
}
.input-group {
  margin-bottom: 10px;
}
.ln_solid {
  border-top: 1px solid #e5e5e5;
  color: #ffffff;
  background-color: #ffffff;
  height: 1px;
  margin: 20px 0;
}
span.section {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
.form-control {
  border-radius: 0;
  width: 100%;
}
.form-horizontal .control-label {
  padding-top: 8px
}
.form-control:focus {
  border-color: #CCD0D7;
  box-shadow: none !important;
}
legend {
  font-size: 18px;
  color: inherit;
}
.checkbox {}
.form-horizontal .form-group {
  margin-right: 0;
  margin-left: 0;
}
.form-control-feedback {
  margin-top: 8px;
  height: 23px;
  color: #bbb;
  line-height: 24px;
  font-size: 15px;
}
.form-control-feedback.left {
  border-right: 1px solid #ccc;
  left: 13px;
}
.form-control-feedback.right {
  border-left: 1px solid #ccc;
  right: 13px;
}
.form-control.has-feedback-left {
  padding-left: 45px;
}
.form-control.has-feedback-right {
  padding-right: 45px;
}
.form-group {
  margin-bottom: 10px;
}
.validate {
  margin-top: 10px;
}
.invalid-form-error-message {
  margin-top: 10px;
  padding: 5px;
}
.invalid-form-error-message.filled {
  border-left: 2px solid #E74C3C;
}
p.parsley-success {
  color: #468847;
  background-color: #DFF0D8;
  border: 1px solid #D6E9C6;
}
p.parsley-error {
  color: #B94A48;
  background-color: #F2DEDE;
  border: 1px solid #EED3D7;
}
ul.parsley-errors-list {
  list-style: none;
  color: #E74C3C;
  padding-left: 0;
}
input.parsley-error, textarea.parsley-error, select.parsley-error {
  background: #FAEDEC;
  border: 1px solid #E85445;
}
.btn-group .parsley-errors-list {
  display: none;
}
.bad input, .bad select, .bad textarea {
  border: 1px solid #CE5454;
  box-shadow: 0 0 4px -2px #CE5454;
  position: relative;
  left: 0;
  -moz-animation: .7s 1 shake linear;
  -webkit-animation: 0.7s 1 shake linear;
}
.item input, .item textarea {
  -webkit-transition: 0.42s;
  -moz-transition: 0.42s;
  transition: 0.42s;
}

/* alerts (when validation fails) */

.item .alert {
  float: left;
  margin: 0 0 0 20px;
  padding: 3px 10px;
  color: #FFF;
  border-radius: 3px 4px 4px 3px;
  background-color: #CE5454;
  max-width: 170px;
  white-space: pre;
  position: relative;
  left: -15px;
  opacity: 0;
  z-index: 1;
  transition: 0.15s ease-out;
}
.item .alert::after {
  content: '';
  display: block;
  height: 0;
  width: 0;
  border-color: transparent #CE5454 transparent transparent;
  border-style: solid;
  border-width: 11px 7px;
  position: absolute;
  left: -13px;
  top: 1px;
}
.item.bad .alert {
  left: 0;
  opacity: 1;
}

/* ***** dropzone ****** */

.dropzone, .dropzone * {
  box-sizing: border-box;
}
.dropzone {
  min-height: 150px;
  border: 2px solid rgba(0, 0, 0, 0.3);
  background: white;
  padding: 54px 54px;
}
.dropzone.dz-clickable {
  cursor: pointer;
}
.dropzone.dz-clickable * {
  cursor: default;
}
.dropzone.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
  cursor: pointer;
}
.dropzone.dz-started .dz-message {
  display: none;
}
.dropzone.dz-drag-hover {
  border-style: solid;
}
.dropzone.dz-drag-hover .dz-message {
  opacity: 0.5;
}
.dropzone .dz-message {
  text-align: center;
  margin: 2em 0;
}
.dropzone .dz-preview {
  position: relative;
  display: inline-block;
  vertical-align: top;
  margin: 16px;
  min-height: 100px;
}
.dropzone .dz-preview:hover {
  z-index: 1000;
}
.dropzone .dz-preview:hover .dz-details {
  opacity: 1;
}
.dropzone .dz-preview.dz-file-preview .dz-image {
  border-radius: 20px;
  background: #999;
  background: linear-gradient(to bottom, #eee, #ddd);
}
.dropzone .dz-preview.dz-file-preview .dz-details {
  opacity: 1;
}
.dropzone .dz-preview.dz-image-preview {
  background: white;
}
.dropzone .dz-preview.dz-image-preview .dz-details {
  -webkit-transition: opacity 0.2s linear;
  -moz-transition: opacity 0.2s linear;
  -ms-transition: opacity 0.2s linear;
  -o-transition: opacity 0.2s linear;
  transition: opacity 0.2s linear;
}
.dropzone .dz-preview .dz-remove {
  font-size: 14px;
  text-align: center;
  display: block;
  cursor: pointer;
  border: none;
}
.dropzone .dz-preview .dz-remove:hover {
  text-decoration: underline;
}
.dropzone .dz-preview:hover .dz-details {
  opacity: 1;
}
.dropzone .dz-preview .dz-details {
  z-index: 20;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  font-size: 13px;
  min-width: 100%;
  max-width: 100%;
  padding: 2em 1em;
  text-align: center;
  color: rgba(0, 0, 0, 0.9);
  line-height: 150%;
}
.dropzone .dz-preview .dz-details .dz-size {
  margin-bottom: 1em;
  font-size: 16px;
}
.dropzone .dz-preview .dz-details .dz-filename {
  white-space: nowrap;
}
.dropzone .dz-preview .dz-details .dz-filename:hover span {
  border: 1px solid rgba(200, 200, 200, 0.8);
  background-color: rgba(255, 255, 255, 0.8);
}
.dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
  overflow: hidden;
  text-overflow: ellipsis;
}
.dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
  border: 1px solid transparent;
}
.dropzone .dz-preview .dz-details .dz-filename span, .dropzone .dz-preview .dz-details .dz-size span {
  background-color: rgba(255, 255, 255, 0.4);
  padding: 0 0.4em;
  border-radius: 3px;
}
.dropzone .dz-preview:hover .dz-image img {
  -webkit-transform: scale(1.05, 1.05);
  -moz-transform: scale(1.05, 1.05);
  -ms-transform: scale(1.05, 1.05);
  -o-transform: scale(1.05, 1.05);
  transform: scale(1.05, 1.05);
  -webkit-filter: blur(8px);
  filter: blur(8px);
}
.dropzone .dz-preview .dz-image {
  border-radius: 20px;
  overflow: hidden;
  width: 120px;
  height: 120px;
  position: relative;
  display: block;
  z-index: 10;
}
.dropzone .dz-preview .dz-image img {
  display: block;
}
.dropzone .dz-preview.dz-success .dz-success-mark {
  -webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
  -moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
  -ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
  -o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
  animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
}
.dropzone .dz-preview.dz-error .dz-error-mark {
  opacity: 1;
  -webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
  -moz-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
  -ms-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
  -o-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
  animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
}
.dropzone .dz-preview .dz-success-mark, .dropzone .dz-preview .dz-error-mark {
  pointer-events: none;
  opacity: 0;
  z-index: 500;
  position: absolute;
  display: block;
  top: 50%;
  left: 50%;
  margin-left: -27px;
  margin-top: -27px;
}
.dropzone .dz-preview .dz-success-mark svg, .dropzone .dz-preview .dz-error-mark svg {
  display: block;
  width: 54px;
  height: 54px;
}
.dropzone .dz-preview.dz-processing .dz-progress {
  opacity: 1;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}
.dropzone .dz-preview.dz-complete .dz-progress {
  opacity: 0;
  -webkit-transition: opacity 0.4s ease-in;
  -moz-transition: opacity 0.4s ease-in;
  -ms-transition: opacity 0.4s ease-in;
  -o-transition: opacity 0.4s ease-in;
  transition: opacity 0.4s ease-in;
}
.dropzone .dz-preview:not(.dz-processing) .dz-progress {
  -webkit-animation: pulse 6s ease infinite;
  -moz-animation: pulse 6s ease infinite;
  -ms-animation: pulse 6s ease infinite;
  -o-animation: pulse 6s ease infinite;
  animation: pulse 6s ease infinite;
}
.dropzone .dz-preview .dz-progress {
  opacity: 1;
  z-index: 1000;
  pointer-events: none;
  position: absolute;
  height: 16px;
  left: 50%;
  top: 50%;
  margin-top: -8px;
  width: 80px;
  margin-left: -40px;
  background: rgba(255, 255, 255, 0.9);
  -webkit-transform: scale(1);
  border-radius: 8px;
  overflow: hidden;
}
.dropzone .dz-preview .dz-progress .dz-upload {
  background: #333;
  background: linear-gradient(to bottom, #666, #444);
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 0;
  -webkit-transition: width 300ms ease-in-out;
  -moz-transition: width 300ms ease-in-out;
  -ms-transition: width 300ms ease-in-out;
  -o-transition: width 300ms ease-in-out;
  transition: width 300ms ease-in-out;
}
.dropzone .dz-preview.dz-error .dz-error-message {
  display: block;
}
.dropzone .dz-preview.dz-error:hover .dz-error-message {
  opacity: 1;
  pointer-events: auto;
}
.dropzone .dz-preview .dz-error-message {
  pointer-events: none;
  z-index: 1000;
  position: absolute;
  display: block;
  display: none;
  opacity: 0;
  -webkit-transition: opacity 0.3s ease;
  -moz-transition: opacity 0.3s ease;
  -ms-transition: opacity 0.3s ease;
  -o-transition: opacity 0.3s ease;
  transition: opacity 0.3s ease;
  border-radius: 8px;
  font-size: 13px;
  top: 130px;
  left: -10px;
  width: 140px;
  background: #be2626;
  background: linear-gradient(to bottom, #be2626, #a92222);
  padding: 0.5em 1.2em;
  color: white;
}
.dropzone .dz-preview .dz-error-message:after {
  content: '';
  position: absolute;
  top: -6px;
  left: 64px;
  width: 0;
  height: 0;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #be2626;
}

/* ***** /dropzone ****** */

.inl-bl {
  display: inline-block;
}
.well .markup-heading {}
.well .markup {
  background: #fff;
  color: #777;
  position: relative;
  padding: 45px 15px 15px;
  margin: 15px 0 0 0;
  background-color: #fff;
  border-radius: 0 0 4px 4px;
  box-shadow: none;
}
.well .markup::after {
  content: "Example";
  position: absolute;
  top: 15px;
  left: 15px;
  font-size: 12px;
  font-weight: bold;
  color: #bbb;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* ***** autocomplete ***** */

.autocomplete-suggestions {
  border: 1px solid #e4e4e4;
  background: #F4F4F4;
  cursor: default;
  overflow: auto;
}
.autocomplete-suggestion {
  padding: 2px 5px;
  font-size: 1.2em;
  white-space: nowrap;
  overflow: hidden;
}
.autocomplete-selected {
  background: #f0f0f0;
}
.autocomplete-suggestions strong {
  font-weight: normal;
  color: #3399ff;
  font-weight: bolder;
}

/* ***** /autocomplete *****/


/* ***** buttons ********/

.btn.btn-app {
  position: relative;
  padding: 15px 5px;
  margin: 0 0 10px 10px;
  min-width: 80px;
  height: 60px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  text-align: center;
  color: #666;
  border: 1px solid #ddd;
  background-color: #fafafa;
  font-size: 12px;
}
.btn.btn-app > .fa, .btn.btn-app > .glyphicon, .btn.btn-app > .ion {
  font-size: 20px;
  display: block;
}
.btn.btn-app:hover {
  background: #f4f4f4;
  color: #444;
  border-color: #aaa;
}
.btn.btn-app:active, .btn.btn-app:focus {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  -moz-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.btn-app > .badge {
  position: absolute;
  top: -3px;
  right: -10px;
  font-size: 10px;
  font-weight: 400;
}

/* ***** /buttons *******/


/* *********  /form design  **************************** */


/* *********  calender dropdown  **************************** */

.daterangepicker.dropdown-menu {
  font-size: 13px;
  padding: 0;
  overflow: hidden;
}
.daterangepicker.picker_1 {
  background: #34495E;
  color: #ECF0F1;
}
.daterangepicker.picker_1 table.table-condensed thead tr:first-child {
  background: #1ABB9C;
}
.daterangepicker table.table-condensed thead tr:first-child th {
  line-height: 28px;
  text-align: center;
}
.daterangepicker.picker_1 table.table-condensed thead tr {
  background: #213345;
}
.daterangepicker table.table-condensed thead tr {
  line-height: 14px;
}
.daterangepicker table.table-condensed tbody tr:first-child td {
  padding-top: 10px;
}
.daterangepicker table.table-condensed th:first-child, .daterangepicker table.table-condensed td:first-child {
  padding-left: 12px
}
.daterangepicker table.table-condensed th:last-child, .daterangepicker table.table-condensed td:last-child {
  padding-right: 12px
}
.table-condensed>thead>tr>th, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>tbody>tr>td, .table-condensed>tfoot>tr>td {
  padding: 5px 7px;
  text-align: center;
}
.daterangepicker table.table-condensed tbody tr:last-child td {
  padding-bottom: 10px;
}
.daterangepicker.picker_2 table.table-condensed thead tr:first-child {
  color: inherit;
}
.daterangepicker.picker_2 table.table-condensed thead tr {
  color: #1ABB9C;
}
.daterangepicker.picker_3 table.table-condensed thead tr:first-child {
  background: #1ABB9C;
  color: #ECF0F1;
}
.daterangepicker.picker_4 table.table-condensed tbody td {
  background: #ECF0F1;
  color: #34495E;
  border: 1px solid #fff;
  padding: 4px 7px;
}
.daterangepicker.picker_4 table.table-condensed tbody td.active {
  background: #536A7F;
  color: #fff;
}
.daterangepicker.picker_4 table.table-condensed thead tr:first-child {
  background: #34495E;
  color: #ECF0F1;
}
.xdisplay_input {
  width: 240px;
  overflow: hidden;
  padding: 0;
}
.xdisplay {
  background-color: #fff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #ccc;
  margin-bottom: 20px;
  border: 1px solid rgba(0, 0, 0, .15);
  border-radius: 4px;
  width: 230px;
  overflow: hidden;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}
.daterangepicker.opensright .ranges, .daterangepicker.opensright .calendar, .daterangepicker.openscenter .ranges, .daterangepicker.openscenter .calendar {
  float: right;
}
.daterangepicker.dropdown-menu .calendar {}
.daterangepicker table {
  width: 100%;
  margin: 0;
}
.daterangepicker td, .daterangepicker th {
  text-align: center;
  width: 20px;
  height: 20px;
  cursor: pointer;
  white-space: nowrap;
}
.daterangepicker td.off {
  color: #999;
}
.daterangepicker td.disabled {
  color: #999;
}
.daterangepicker td.available:hover, .daterangepicker th.available:hover {
  background: #eee;
  color: #34495E;
}
.daterangepicker td.in-range {
  background: #E4E7EA;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.daterangepicker td.available + td.start-date {
  -webkit-border-radius: 4px 0 0 4px;
  -moz-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}
.daterangepicker td.in-range + td.end-date {
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}
.daterangepicker td.start-date.end-date {
  -webkit-border-radius: 4px !important;
  -moz-border-radius: 4px !important;
  border-radius: 4px !important;
}
.daterangepicker td.active, .daterangepicker td.active:hover {
  background-color: #536A7F;
  color: #fff;
}
.daterangepicker td.week, .daterangepicker th.week {
  font-size: 80%;
  color: #ccc;
}
.daterangepicker select.monthselect, .daterangepicker select.yearselect {
  font-size: 12px;
  padding: 1px;
  height: auto;
  margin: 0;
  cursor: default;
  height: 30px;
  border: 1px solid #ADB2B5;
  line-height: 30px;
  border-radius: 0px !important;
}
.daterangepicker select.monthselect {
  margin-right: 2%;
  width: 56%;
}
.daterangepicker select.yearselect {
  width: 40%;
}
.daterangepicker select.hourselect, .daterangepicker select.minuteselect, .daterangepicker select.ampmselect {
  width: 50px;
  margin-bottom: 0;
}
.daterangepicker_start_input {
  float: left;
}
.daterangepicker_end_input {
  float: left;
  padding-left: 11px;
}
.daterangepicker th.month {
  width: auto;
}
.daterangepicker .daterangepicker_start_input label, .daterangepicker .daterangepicker_end_input label {
  color: #333;
  display: block;
  font-size: 11px;
  font-weight: normal;
  height: 20px;
  line-height: 20px;
  margin-bottom: 2px;
  text-shadow: #fff 1px 1px 0px;
  text-transform: uppercase;
  width: 74px;
}
.daterangepicker .ranges input {
  font-size: 11px;
}
.daterangepicker .ranges .input-mini {
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 4px;
  color: #555;
  display: block;
  font-size: 11px;
  height: 30px;
  line-height: 30px;
  vertical-align: middle;
  margin: 0 0 10px 0;
  padding: 0 6px;
  width: 74px;
}
.daterangepicker .ranges .input-mini:hover {
  cursor: pointer;
}
.daterangepicker .ranges ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
.daterangepicker .ranges li {
  font-size: 13px;
  background: #f5f5f5;
  border: 1px solid #f5f5f5;
  color: #536A7F;
  padding: 3px 12px;
  margin-bottom: 8px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  cursor: pointer;
}
.daterangepicker .ranges li.active, .daterangepicker .ranges li:hover {
  background: #536A7F;
  border: 1px solid #536A7F;
  color: #fff;
}
.daterangepicker .calendar {
  display: none;
  max-width: 270px;
}
.daterangepicker.show-calendar .calendar {
  display: block;
}
.daterangepicker .calendar.single .calendar-date {
  border: none;
}
.daterangepicker.single .ranges, .daterangepicker.single .calendar {
  float: none;
}
.daterangepicker .ranges {
  width: 160px;
  text-align: left;
  margin: 4px;
}
.daterangepicker .ranges .range_inputs>div {
  float: left;
}
.daterangepicker .ranges .range_inputs>div:nth-child(2) {
  padding-left: 11px;
}
.daterangepicker.opensleft .ranges, .daterangepicker.opensleft .calendar {
  float: left;
  margin: 4px;
}

/* *********  /calender dropdown  **************************** */


/* *********  form textarea  **************************** */

textarea {
  padding: 10px;
  vertical-align: top;
  width: 200px;
}
textarea:focus {
  outline-style: solid;
  outline-width: 2px;
}
.btn_ {
  display: inline-block;
  padding: 3px 9px;
  margin-bottom: 0;
  font-size: 14px;
  line-height: 20px;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  color: #333333;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  background-color: #f5f5f5;
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  border: 1px solid #cccccc;
  border-bottom-color: #b3b3b3;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
}

/* *********  /form textarea  **************************** */


/* *********  glyphicons  **************************** */

.bs-glyphicons {
  margin: 0 -10px 20px;
  overflow: hidden
}
.bs-glyphicons-list {
  padding-left: 0;
  list-style: none
}
.bs-glyphicons li {
  float: left;
  width: 25%;
  height: 115px;
  padding: 10px;
  font-size: 10px;
  line-height: 1.4;
  text-align: center;
  background-color: #f9f9f9;
  border: 1px solid #fff
}
.bs-glyphicons .glyphicon {
  margin-top: 5px;
  margin-bottom: 10px;
  font-size: 24px
}
.bs-glyphicons .glyphicon-class {
  display: block;
  text-align: center;
  word-wrap: break-word
}
.bs-glyphicons li:hover {
  color: #fff;
  background-color: #1ABB9C
}
@media (min-width: 768px) {
  .bs-glyphicons {
    margin-right: 0;
    margin-left: 0
  }
  .bs-glyphicons li {
    width: 12.5%;
    font-size: 12px
  }
}

/* *********  /glyphicons  **************************** */


/* *********  form tags input  **************************** */

.tagsinput {
  border: 1px solid #CCC;
  background: #FFF;
  padding: 6px 6px 0;
  width: 300px;
  overflow-y: auto;
}
span.tag {
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  display: block;
  float: left;
  padding: 5px 9px;
  text-decoration: none;
  background: #1ABB9C;
  color: #F1F6F7;
  margin-right: 5px;
  font-weight: 500;
  margin-bottom: 5px;
  font-family: helvetica;
}
span.tag a {
  color: #F1F6F7 !important;
}
.tagsinput span.tag a {
  font-weight: bold;
  color: #82ad2b;
  text-decoration: none;
  font-size: 11px;
}
.tagsinput input {
  width: 80px;
  margin: 0px;
  font-family: helvetica;
  font-size: 13px;
  border: 1px solid transparent;
  padding: 3px;
  background: transparent;
  color: #000;
  outline: 0px;
}
.tagsinput div {
  display: block;
  float: left;
}
.tags_clear {
  clear: both;
  width: 100%;
  height: 0px;
}
.not_valid {
  background: #FBD8DB !important;
  color: #90111A !important;
}

/* *********  /form tags input  **************************** */


/* *********  tabs  **************************** */

ul.bar_tabs {
  /* border: 1px solid #ff0000; */
  overflow: visible;
  background: #F5F7FA;
  height: 25px;
  margin: 21px 0 14px;
  padding-left: 14px;
  position: relative;
  z-index: 1;
  width: 100%;
  border-bottom: 1px solid #E6E9ED;
}
ul.bar_tabs > li {
  border: 1px solid #E6E9ED;
  color: #333 !important;
  margin-top: -17px;
  margin-left: 8px;
  background: #fff;
  border-bottom: none;
  border-radius: 4px 4px 0 0;
}
ul.bar_tabs > li.active {
  border-right: 6px solid #D3D6DA;
  border-top: 0;
  margin-top: -15px;
}
ul.bar_tabs > li.active a {
  background: #fff;
  border-color: transparent;
}
ul.bar_tabs > li a {
  padding: 10px 17px;
  background: #F5F7FA;
  margin: 0;
  border-radius: 0;
}
ul.bar_tabs.right {
  padding-right: 14px;
}
ul.bar_tabs.right li {
  float: right
}
a:focus {
  outline: none;
}

/* *********  /tabs  **************************** */


/* *********  timeline  **************************** */

ul.timeline li {
  position: relative;
  border-bottom: 1px solid #e8e8e8;
  clear: both;
}
.timeline .block {
  margin: 0;
  border-left: 3px solid #e8e8e8;
  overflow: visible;
  padding: 10px 15px;
  margin-left: 105px;
}
.timeline.widget {
  min-width: 0;
  max-width: inherit;
}
.timeline.widget .block {
  margin-left: 5px;
}
.timeline .tags {
  position: absolute;
  top: 15px;
  left: 0;
  width: 84px;
}
.timeline .tag {
  display: block;
  height: 30px;
  font-size: 13px;
  padding: 8px;
}
.timeline .tag span {
  display: block;
  overflow: hidden;
  width: 100%;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.tag {
  line-height: 1;
  background: #1ABB9C;
  color: #fff !important;
}
.tag:after {
  content: " ";
  height: 30px;
  width: 0;
  position: absolute;
  left: 100%;
  top: 0;
  margin: 0;
  pointer-events: none;
  border-top: 14px solid transparent;
  border-bottom: 14px solid transparent;
  border-left: 11px solid #1ABB9C;
}
.timeline h2.title {
  position: relative;
  font-size: 16px;
  margin: 0;
}
.timeline h2.title:before {
  content: "";
  position: absolute;
  left: -23px;
  top: 3px;
  display: block;
  width: 14px;
  height: 14px;
  border: 3px solid #d2d3d2;
  border-radius: 14px;
  background: #f9f9f9;
}
.timeline .byline {
  padding: .25em 0;
}
.byline {
  -webkit-font-smoothing: antialiased;
  font-style: italic;
  font-size: .9375em;
  line-height: 1.3;
  color: #aab6aa;
}
ul.social li {
  border: 0;
}

/* *********  /timeline  **************************** */


/* *********  easypie  **************************** */


/* *********  /easypie  **************************** */


/* *********  form wizard  **************************** */

.form_wizard .stepContainer {
  display: block;
  position: relative;
  margin: 0;
  padding: 0;
  border: 0 solid #CCC;
  overflow-x: hidden;
}

/**-------**/

.wizard_horizontal ul.wizard_steps {
  display: table;
  list-style: none;
  position: relative;
  width: 100%;
  margin: 0 0 20px;
}
.wizard_horizontal ul.wizard_steps li {
  display: table-cell;
  text-align: center;
}
.wizard_horizontal ul.wizard_steps li a, .wizard_horizontal ul.wizard_steps li:hover {
  display: block;
  position: relative;
  -moz-opacity: 1;
  filter: alpha(opacity= 100);
  opacity: 1;
  color: #666;
}
.wizard_horizontal ul.wizard_steps li a:before {
  content: "";
  position: absolute;
  height: 4px;
  background: #ccc;
  top: 20px;
  width: 100%;
  z-index: 4;
  left: 0;
}
.wizard_horizontal ul.wizard_steps li a.disabled .step_no {
  background: #ccc;
}
.wizard_horizontal ul.wizard_steps li a .step_no {
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 100px;
  display: block;
  margin: 0 auto 5px;
  font-size: 16px;
  text-align: center;
  position: relative;
  z-index: 5;
}
.wizard_horizontal ul.wizard_steps li a.selected:before, .step_no {
  background: #34495E;
  color: #fff;
}
.wizard_horizontal ul.wizard_steps li a.done:before, .wizard_horizontal ul.wizard_steps li a.done .step_no {
  background: #1ABB9C;
  color: #fff;
}
.wizard_horizontal ul.wizard_steps li:first-child a:before {
  left: 50%;
}
.wizard_horizontal ul.wizard_steps li:last-child a:before {
  right: 50%;
  width: 50%;
  left: auto;
}

/**-------**/

.wizard_verticle .stepContainer {
  width: 80%;
  float: left;
  padding: 0 10px;
}
.form_wizard .stepContainer div.content {
  display: block;
  position: absolute;
  float: left;
  margin: 0;
  padding: 5px;
  font: normal 12px Verdana, Arial, Helvetica, sans-serif;
  color: #5A5655;
  height: 300px !important;
  text-align: left;
  overflow: auto;
  z-index: 88;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  clear: both;
}
.actionBar {
  width: 100%;
  border-top: 1px solid #ddd;
  padding: 10px 5px;
  text-align: right;
  margin-top: 10px;
}
.actionBar .buttonDisabled {
  cursor: not-allowed;
  pointer-events: none;
  opacity: .65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
}
.actionBar a {
  margin: 0 3px;
}

/**-------**/

.wizard_verticle .wizard_content {
  width: 80%;
  float: left;
  padding-left: 20px;
}
.wizard_verticle ul.wizard_steps {
  display: table;
  list-style: none;
  position: relative;
  width: 20%;
  float: left;
  margin: 0 0 20px;
}
.wizard_verticle ul.wizard_steps li {
  display: list-item;
  text-align: center;
}
.wizard_verticle ul.wizard_steps li a {
  height: 80px;
}
.wizard_verticle ul.wizard_steps li a:first-child {
  margin-top: 20px;
}
.wizard_verticle ul.wizard_steps li a, .wizard_verticle ul.wizard_steps li:hover {
  display: block;
  position: relative;
  -moz-opacity: 1;
  filter: alpha(opacity= 100);
  opacity: 1;
  color: #666;
}
.wizard_verticle ul.wizard_steps li a:before {
  content: "";
  position: absolute;
  height: 100%;
  background: #ccc;
  top: 20px;
  width: 4px;
  z-index: 4;
  left: 49%;
}
.wizard_verticle ul.wizard_steps li a.disabled .step_no {
  background: #ccc;
}
.wizard_verticle ul.wizard_steps li a .step_no {
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 100px;
  display: block;
  margin: 0 auto 5px;
  font-size: 16px;
  text-align: center;
  position: relative;
  z-index: 5;
}
.wizard_verticle ul.wizard_steps li a.selected:before, .step_no {
  background: #34495E;
  color: #fff;
}
.wizard_verticle ul.wizard_steps li a.done:before, .wizard_verticle ul.wizard_steps li a.done .step_no {
  background: #1ABB9C;
  color: #fff;
}
.wizard_verticle ul.wizard_steps li:first-child a:before {
  left: 49%;
}
.wizard_verticle ul.wizard_steps li:last-child a:before {
  left: 49%;
  left: auto;
  width: 0;
}

/**-------**/


/* *********  /form wizard  **************************** */


/* *********  notifications  **************************** */


/* Pnotify by Hunter Perrin :: 2.0.1 */

.ui-pnotify {
  top: 25px;
  right: 25px;
  position: absolute;
  height: auto;
  /* Ensures notices are above everything */
  z-index: 9999;
}

/* Hides position: fixed from IE6 */

html > body > .ui-pnotify {
  position: fixed;
}
.ui-pnotify .ui-pnotify-shadow {
  -webkit-box-shadow: 0px 2px 10px rgba(50, 50, 50, 0.5);
  -moz-box-shadow: 0px 2px 10px rgba(50, 50, 50, 0.5);
  box-shadow: 0px 2px 10px rgba(50, 50, 50, 0.5);
}
.ui-pnotify-container {
  background-position: 0 0;
  padding: .8em;
  height: 100%;
  margin: 0;
}
.ui-pnotify-sharp {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.ui-pnotify-title {
  display: block;
  margin-bottom: .4em;
  margin-top: 0;
}
.ui-pnotify-text {
  display: block;
}
.ui-pnotify-icon, .ui-pnotify-icon span {
  display: block;
  float: left;
  margin-right: .2em;
}

/* Alternate stack initial positioning. */

.ui-pnotify.stack-topleft, .ui-pnotify.stack-bottomleft {
  left: 25px;
  right: auto;
}
.ui-pnotify.stack-bottomright, .ui-pnotify.stack-bottomleft {
  bottom: 25px;
  top: auto;
}
.ui-pnotify-closer, .ui-pnotify-sticker {
  float: right;
  margin-left: .2em;
}

/* theming */

.alert-success {
  color: #ffffff;
  background-color: rgba(38, 185, 154, 0.88);
  border-color: rgba(38, 185, 154, 0.88);
}
.alert-info {
  color: #E9EDEF;
  background-color: rgba(52, 152, 219, 0.88);
  border-color: rgba(52, 152, 219, 0.88);
}
.alert-warning {
  color: #E9EDEF;
  background-color: rgba(243, 156, 18, 0.88);
  border-color: rgba(243, 156, 18, 0.88);
}
.alert-danger, .alert-error {
  color: #E9EDEF;
  background-color: rgba(231, 76, 60, 0.88);
  border-color: rgba(231, 76, 60, 0.88);
}
.alert-dark, .btn-dark {
  color: #E9EDEF;
  background-color: rgba(52, 73, 94, 0.88);
  border-color: rgba(52, 73, 94, 0.88);
}
.btn-dark:hover {
  color: #F7F7F7;
}

/* /theming */


/* /Pnotify by Hunter Perrin :: 2.0.1 */

.btn.btn-outline {
  background: transparent;
}
.btn-primary.btn-outline {
  color: #1A82C3;
  border-width: 2px;
}
.btn-default.btn-outline {
  color: #34495e;
  border-width: 2px;
}
.btn-success.btn-outline {
  color: #1ABB9C;
  border-width: 2px;
}
.btn-info.btn-outline {
  color: #34495e;
  border-width: 2px;
}
.btn-warning.btn-outline {
  color: #5bc0de;
  border-width: 2px;
}
.btn-danger.btn-outline {
  color: #34495e;
  border-width: 2px;
}
.btn-dark.btn-outline {
  color: #c0392b;
  border-width: 2px;
}
.btn-warning {
  background: #f0ad4e;
  border-color: #f0ad4e;
}
.btn-danger {
  background: #d9534f;
  border-color: #d9534f;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary {
  background-color: #1A82C3;
  border-color: #1A82C3;
  color: #FFFFFF;
}
.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .open .dropdown-toggle.btn-success {
  background-color: #1ABB9C;
  border-color: #1ABB9C;
  color: #FFFFFF;
}
.btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .open .dropdown-toggle.btn-info {
  background-color: #4FB5D3;
  border-color: #4FB5D3;
  color: #FFFFFF;
}
.btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active, .open .dropdown-toggle.btn-warning {
  background-color: #d58512;
  border-color: #d58512;
  color: #FFFFFF;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary {
  background-color: #1479B8;
  border-color: #1479B8;
  color: #FFFFFF;
}
.btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active, .open .dropdown-toggle.btn-danger {
  background-color: #d43f3a;
  border-color: #d43f3a;
  color: #FFFFFF;
}
.btn-dark:hover, .btn-dark:focus, .btn-dark:active, .btn-dark.active, .open .dropdown-toggle.btn-dark {
  background-color: #394D5F;
  border-color: #394D5F;
  color: #FFFFFF;
}
.custom-notifications {
  position: fixed;
  margin: 15px;
  right: 0;
  float: right;
  width: 400px;
  z-index: 4000;
  bottom: 0;
}
.btn-round {
  border-radius: 30px;
}

/* *********  /notifications  **************************** */


/* *********  profile/social  **************************** */

.social-sidebar, .social-body {
  float: right;
}
.social-sidebar {
  background: #EDEDED;
  width: 22%;
}
.social-body {
  border: 1px solid #ccc;
  width: 78%;
}
.thumb img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.chat .thumb img {
  width: 27px;
  height: 27px;
  border-radius: 50%;
}
.chat .status {
  float: left;
  margin: 16px 0 0 -16px;
  font-size: 14px;
  font-weight: bold;
  width: 12px;
  height: 12px;
  display: block;
  border: 2px solid #FFF;
  z-index: 12312;
  border-radius: 50%;
}
.chat .status.online {
  background: #1ABB9C;
}
.chat .status.away {
  background: #F39C12;
}
.chat .status.offline {
  background: #ccc;
}
.chat .media-body {
  padding-top: 5px;
}

/* *********  /profile/social  **************************** */


/* *********  widgets  **************************** */

.dashboard_graph .x_title {
  padding: 5px 5px 7px;
}
.dashboard_graph .x_title h3 {
  margin: 0;
  font-weight: normal;
}
.chart {
  position: relative;
  display: inline-block;
  width: 100px;
  height: 100px;
  margin-top: 5px;
  margin-bottom: 5px;
  text-align: center;
}
.chart canvas {
  position: absolute;
  top: 0;
  left: 0;
}
.percent {
  display: inline-block;
  line-height: 96px;
  z-index: 2;
  font-size: 18px;
}
.percent:after {
  content: '%';
  margin-left: 0.1em;
  font-size: .8em;
}
.angular {
  margin-top: 100px;
}
.angular .chart {
  margin-top: 0;
}
.widget {
  min-width: 250px;
  max-width: 310px;
}
.widget_tally_box .btn-group button {
  text-align: center
}
.widget_tally_box .btn-group button {
  color: inherit;
  font-weight: 500;
  background-color: #f5f5f5;
  border: 1px solid #e7e7e7;
}
ul.widget_tally, ul.widget_tally li {
  width: 100%;
}
ul.widget_tally li {
  padding: 2px 10px;
  border-bottom: 1px solid #ECECEC;
  padding-bottom: 4px;
}
ul.widget_tally .month {
  width: 70%;
  float: left;
}
ul.widget_tally .count {
  width: 30%;
  float: left;
  text-align: right
}
.pie_bg {
  border-bottom: 1px solid rgba(101, 204, 182, 0.16);
  padding-bottom: 15px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  padding-bottom: 10px;
  -webkit-box-shadow: 0 4px 6px -6px #222;
  -moz-box-shadow: 0 4px 6px -6px #222;
  box-shadow: 0 4px 6px -6px #222;
}
.widget_tally_box .flex {
  display: flex;
}
ul.widget_profile_box {
  width: 100%;
  height: 42px;
  padding: 3px;
  background: #ececec;
  margin-top: 40px;
  margin-left: 1px;
}
ul.widget_profile_box li:first-child {
  width: 25%;
  float: left;
}
ul.widget_profile_box li:first-child a {
  float: left;
}
ul.widget_profile_box li:last-child {
  width: 25%;
  float: right;
}
ul.widget_profile_box li:last-child a {
  float: right;
}
ul.widget_profile_box li {}
ul.widget_profile_box li a {
  font-size: 22px;
  text-align: center;
  width: 35px;
  height: 35px;
  border: 1px solid rgba(52, 73, 94, 0.44);
  display: block;
  border-radius: 50%;
  padding: 0px;
}
ul.widget_profile_box li a:hover {
  color: #1ABB9C !important;
  border: 1px solid rgba(38, 185, 154, 1);
}
ul.widget_profile_box li .profile_img {
  width: 85px;
  height: 85px;
  margin: 0;
  margin-top: -28px;
}
.widget_tally_box p, .widget_tally_box span {
  text-align: center;
}
.widget_tally_box .name {
  text-align: center;
  margin: 25px;
}
.widget_tally_box .name_title {
  text-align: center;
  margin: 5px;
}
.widget_tally_box ul.legend {
  margin: 0;
}
.widget_tally_box ul.legend p, .widget_tally_box ul.legend span {
  text-align: left;
}
.widget_tally_box ul.legend li .icon {
  font-size: 20px;
  float: left;
  width: 14px;
}
.widget_tally_box ul.legend li .name {
  font-size: 14px;
  margin: 5px 0 0 14px;
  text-overflow: ellipsis;
  float: left;
}
.widget_tally_box ul.legend p {
  display: inline-block;
  margin: 0;
}
.widget_tally_box ul.verticle_bars li {
  height: 140px;
  width: 23%;
}
.widget .verticle_bars li .progress.vertical.progress_wide {
  width: 65%;
}
ul.count2 {
  width: 100%;
  margin-left: 1px;
  border: 1px solid #ddd;
  border-left: 0;
  border-right: 0;
  padding: 10px 0;
}
ul.count2 li {
  width: 30%;
  text-align: center;
}
ul.count2 li h3 {
  font-weight: 400;
  margin: 0;
}
ul.count2 li span {
  font-weight: 300;
}
.divider {
  border-bottom: 1px solid #ddd;
  margin: 10px;
}
.divider-dashed {
  border-top: 1px dashed #e7eaec;
  background-color: #ffffff;
  height: 1px;
  margin: 10px 0;
}
ul.messages {
  padding: 0;
}
ul.messages li, .tasks li {
  border-bottom: 1px dotted #e6e6e6;
  padding: 8px 0;
}
ul.messages li img.avatar, img.avatar {
  height: 32px;
  width: 32px;
  float: left;
  display: inline-block;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  padding: 2px;
  background: #f7f7f7;
  border: 1px solid #e6e6e6;
}
ul.messages li .message_date {
  float: right;
  text-align: right;
}
ul.messages li .message_wrapper {
  margin-left: 50px;
  margin-right: 40px;
}
ul.messages li .message_wrapper h4.heading {
  font-weight: 600;
  margin: 0;
  cursor: pointer;
  margin-bottom: 10px;
  line-height: 100%;
}
ul.messages li .message_wrapper blockquote {
  padding: 0px 10px;
  margin: 0;
  border-left: 5px solid #eee;
}
ul.user_data li {
  margin-bottom: 6px;
}
ul.user_data li p {
  margin-bottom: 0;
}
ul.user_data li .progress {
  width: 90%;
}
.project_progress .progress {
  margin-bottom: 3px !important;
  margin-top: 5px;
}
.projects .list-inline {
  margin: 0;
}
.profile_title {
  background: #F5F7FA;
  border: 0;
  padding: 7px 0;
  display: flex;
}
ul.stats-overview {
  border-bottom: 1px solid #e8e8e8;
  padding-bottom: 10px;
  margin-bottom: 10px;
}
ul.stats-overview li {
  display: inline-block;
  text-align: center;
  padding: 0 15px;
  width: 30%;
  font-size: 14px;
  border-right: 1px solid #e8e8e8;
}
ul.stats-overview li:last-child {
  border-right: 0;
}
ul.stats-overview li .name {
  font-size: 12px;
}
ul.stats-overview li .value {
  font-size: 14px;
  font-weight: bold;
  display: block;
}
ul.stats-overview li:first-child {
  padding-left: 0;
}
ul.project_files li {
  margin-bottom: 5px;
}
ul.project_files li a i {
  width: 20px;
}
.project_detail p {
  margin-bottom: 10px;
}
.project_detail p.title {
  font-weight: bold;
  margin-bottom: 0
}
.avatar img {
  border-radius: 50%;
  max-width: 45px;
}

/* *********  /widgets  **************************** */


/* *********  pricing  **************************** */

.pricing {
  background: #fff;
}
.pricing .title {
  background: #1ABB9C;
  height: 110px;
  color: #fff;
  padding: 15px 0 0;
  text-align: center;
}
.pricing .title h2 {
  text-transform: capitalize;
  font-size: 18px;
  border-radius: 5px 5px 0 0;
  margin: 0;
  font-weight: 400;
}
.pricing .title h1 {
  font-size: 30px;
  margin: 12px;
}
.pricing .title span {
  background: rgba(51, 51, 51, 0.28);
  padding: 2px 5px;
}
.pricing_features {
  background: #FAFAFA;
  padding: 20px 15px;
  min-height: 230px;
  font-size: 13.5px;
}
.pricing_features ul li {
  margin-top: 10px;
}
.pricing_footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  text-align: center;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.pricing_footer p {
  font-size: 13px;
  padding: 10px 0 2px;
  display: block;
}
.ui-ribbon-container {
  position: relative;
}
.ui-ribbon-container .ui-ribbon-wrapper {
  position: absolute;
  overflow: hidden;
  width: 85px;
  height: 88px;
  top: -3px;
  right: -3px;
}
.ui-ribbon-container.ui-ribbon-primary .ui-ribbon {
  background-color: #5b90bf;
}
.ui-ribbon-container .ui-ribbon {
  position: relative;
  display: block;
  text-align: center;
  font-size: 15px;
  font-weight: 700;
  color: #fff;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  padding: 7px 0;
  left: -5px;
  top: 15px;
  width: 120px;
  line-height: 20px;
  background-color: #555;
  box-shadow: 0 0 3px rgba(0, 0, 0, .3);
}
.ui-ribbon-container.ui-ribbon-primary .ui-ribbon:after, .ui-ribbon-container.ui-ribbon-primary .ui-ribbon:before {
  border-top: 2px solid #5b90bf;
}
.ui-ribbon-container .ui-ribbon:before {
  left: 0;
  bottom: -1px;
}
.ui-ribbon-container .ui-ribbon:before {
  right: 0;
}
.ui-ribbon-container .ui-ribbon:after, .ui-ribbon-container .ui-ribbon:before {
  position: absolute;
  content: " ";
  line-height: 0;
  border-top: 2px solid #555;
  border-left: 2px solid transparent;
  border-right: 2px solid transparent;
}

/* *********  /pricing  **************************** */


/* *********  media gallery  **************************** */

.thumbnail .image {
  height: 120px;
  overflow: hidden;
}
.caption {
  padding: 9px 5px;
  background: #F7F7F7;
}
.caption p {
  margin-bottom: 5px;
}
.thumbnail {
  height: 190px;
  overflow: hidden;
}
.view {
  overflow: hidden;
  position: relative;
  text-align: center;
  box-shadow: 1px 1px 2px #e6e6e6;
  cursor: default;
}
.view .mask, .view .content {
  position: absolute;
  width: 100%;
  overflow: hidden;
  top: 0;
  left: 0
}
.view img {
  display: block;
  position: relative
}
.view .tools {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 3px;
  background: rgba(0, 0, 0, 0.35);
  margin: 43px 0 0 0;
}
.mask.no-caption .tools {
  margin: 90px 0 0 0;
}
.view .tools a {
  display: inline-block;
  color: #FFF;
  font-size: 18px;
  font-weight: 400;
  padding: 0 4px;
}
.view p {
  font-family: Georgia, serif;
  font-style: italic;
  font-size: 12px;
  position: relative;
  color: #fff;
  padding: 10px 20px 20px;
  text-align: center
}
.view a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  background: #000;
  color: #fff;
  text-transform: uppercase;
  box-shadow: 0 0 1px #000
}
.view-first img {
  transition: all 0.2s linear;
}
.view-first .mask {
  opacity: 0;
  background-color: rgba(0, 0, 0, 0.5);
  transition: all 0.4s ease-in-out;
}
.view-first .tools {
  transform: translateY(-100px);
  opacity: 0;
  transition: all 0.2s ease-in-out;
}
.view-first p {
  transform: translateY(100px);
  opacity: 0;
  transition: all 0.2s linear;
}
.view-first:hover img {
  transform: scale(1.1);
}
.view-first:hover .mask {
  opacity: 1;
}
.view-first:hover .tools, .view-first:hover p {
  opacity: 1;
  transform: translateY(0px);
}
.view-first:hover p {
  transition-delay: 0.1s;
}

/* *********  /media gallery  **************************** */


/* *********  verticle tabs  **************************** */


/*!
 * bootstrap-vertical-tabs - v1.2.1
 * https://dbtek.github.io/bootstrap-vertical-tabs
 * 2014-11-07
 * Copyright (c) 2014 Ä°smail Demirbilek
 * License: MIT
 */

.tabs-left, .tabs-right {
  border-bottom: none;
  padding-top: 2px;
}
.tabs-left {
  border-right: 1px solid #F7F7F7;
}
.tabs-right {
  border-left: 1px solid #F7F7F7;
}
.tabs-left>li, .tabs-right>li {
  float: none;
  margin-bottom: 2px;
}
.tabs-left>li {
  margin-right: -1px;
}
.tabs-right>li {
  margin-left: -1px;
}
.tabs-left>li.active>a, .tabs-left>li.active>a:hover, .tabs-left>li.active>a:focus {
  border-bottom-color: #F7F7F7;
  border-right-color: transparent;
}
.tabs-right>li.active>a, .tabs-right>li.active>a:hover, .tabs-right>li.active>a:focus {
  border-bottom: 1px solid #F7F7F7;
  border-left-color: transparent;
}
.tabs-left>li>a {
  border-radius: 4px 0 0 4px;
  margin-right: 0;
  display: block;
  background: #F7F7F7;
  text-overflow: ellipsis;
  overflow: hidden;
}
.tabs-right>li>a {
  border-radius: 0 4px 4px 0;
  margin-right: 0;
  background: #F7F7F7;
  text-overflow: ellipsis;
  overflow: hidden;
}
.sideways {
  margin-top: 50px;
  border: none;
  position: relative;
}
.sideways>li {
  height: 20px;
  width: 120px;
  margin-bottom: 100px;
}
.sideways>li>a {
  border-bottom: 1px solid #ddd;
  border-right-color: transparent;
  text-align: center;
  border-radius: 4px 4px 0px 0px;
}
.sideways>li.active>a, .sideways>li.active>a:hover, .sideways>li.active>a:focus {
  border-bottom-color: transparent;
  border-right-color: #ddd;
  border-left-color: #ddd;
}
.sideways.tabs-left {
  left: -50px;
}
.sideways.tabs-right {
  right: -50px;
}
.sideways.tabs-right>li {
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
.sideways.tabs-left>li {
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  transform: rotate(-90deg);
}

/* *********  /verticle tabs  **************************** */


/* *********  image cropping  **************************** */


/*!
 * Cropper v0.8.0
 * https://github.com/fengyuanchen/cropper
 *
 * Copyright 2014-2015 Fengyuan Chen
 * Released under the MIT license
 *
 * Date: 2015-02-19T06:49:29.144Z
 */

.cropper-container {
  position: relative;
  overflow: hidden;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
  -webkit-touch-callout: none;
}
.cropper-container img {
  display: block;
  width: 100%;
  min-width: 0 !important;
  max-width: none !important;
  height: 100%;
  min-height: 0 !important;
  max-height: none !important;
}
.cropper-modal, .cropper-canvas {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}
.cropper-canvas {
  background-color: #fff;
  filter: alpha(opacity=0);
  opacity: 0;
}
.cropper-modal {
  background-color: #000;
  filter: alpha(opacity=50);
  opacity: .5;
}
.cropper-cropbox {
  position: absolute;
  top: 10%;
  left: 10%;
  width: 80%;
  height: 80%;
}
.cropper-viewer {
  display: block;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 1px solid #69f;
  outline-color: rgba(102, 153, 255, .75);
}
.cropper-dashed {
  position: absolute;
  display: block;
  filter: alpha(opacity=50);
  border: 0 dashed #fff;
  opacity: .5;
}
.cropper-dashed.dashed-h {
  top: 33.33333333%;
  left: 0;
  width: 100%;
  height: 33.33333333%;
  border-top-width: 1px;
  border-bottom-width: 1px;
}
.cropper-dashed.dashed-v {
  top: 0;
  left: 33.33333333%;
  width: 33.33333333%;
  height: 100%;
  border-right-width: 1px;
  border-left-width: 1px;
}
.cropper-face, .cropper-line, .cropper-point {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  filter: alpha(opacity=10);
  opacity: .1;
}
.cropper-face {
  top: 0;
  left: 0;
  cursor: move;
  background-color: #fff;
}
.cropper-line {
  background-color: #69f;
}
.cropper-line.line-e {
  top: 0;
  right: -3px;
  width: 5px;
  cursor: e-resize;
}
.cropper-line.line-n {
  top: -3px;
  left: 0;
  height: 5px;
  cursor: n-resize;
}
.cropper-line.line-w {
  top: 0;
  left: -3px;
  width: 5px;
  cursor: w-resize;
}
.cropper-line.line-s {
  bottom: -3px;
  left: 0;
  height: 5px;
  cursor: s-resize;
}
.cropper-point {
  width: 5px;
  height: 5px;
  background-color: #69f;
  filter: alpha(opacity=75);
  opacity: .75;
}
.cropper-point.point-e {
  top: 50%;
  right: -3px;
  margin-top: -3px;
  cursor: e-resize;
}
.cropper-point.point-n {
  top: -3px;
  left: 50%;
  margin-left: -3px;
  cursor: n-resize;
}
.cropper-point.point-w {
  top: 50%;
  left: -3px;
  margin-top: -3px;
  cursor: w-resize;
}
.cropper-point.point-s {
  bottom: -3px;
  left: 50%;
  margin-left: -3px;
  cursor: s-resize;
}
.cropper-point.point-ne {
  top: -3px;
  right: -3px;
  cursor: ne-resize;
}
.cropper-point.point-nw {
  top: -3px;
  left: -3px;
  cursor: nw-resize;
}
.cropper-point.point-sw {
  bottom: -3px;
  left: -3px;
  cursor: sw-resize;
}
.cropper-point.point-se {
  right: -3px;
  bottom: -3px;
  width: 20px;
  height: 20px;
  cursor: se-resize;
  filter: alpha(opacity=100);
  opacity: 1;
}
.cropper-point.point-se:before {
  position: absolute;
  right: -50%;
  bottom: -50%;
  display: block;
  width: 200%;
  height: 200%;
  content: " ";
  background-color: #69f;
  filter: alpha(opacity=0);
  opacity: 0;
}
@media (min-width: 768px) {
  .cropper-point.point-se {
    width: 15px;
    height: 15px;
  }
}
@media (min-width: 992px) {
  .cropper-point.point-se {
    width: 10px;
    height: 10px;
  }
}
@media (min-width: 1200px) {
  .cropper-point.point-se {
    width: 5px;
    height: 5px;
    filter: alpha(opacity=75);
    opacity: .75;
  }
}
.cropper-bg {
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAQMAAAAlPW0iAAAAA3NCSVQICAjb4U/gAAAABlBMVEXMzMz////TjRV2AAAACXBIWXMAAArrAAAK6wGCiw1aAAAAHHRFWHRTb2Z0d2FyZQBBZG9iZSBGaXJld29ya3MgQ1M26LyyjAAAABFJREFUCJlj+M/AgBVhF/0PAH6/D/HkDxOGAAAAAElFTkSuQmCC");
}
.cropper-invisible {
  filter: alpha(opacity=0);
  opacity: 0;
}
.cropper-hide {
  position: fixed;
  top: 0;
  left: 0;
  z-index: -1;
  width: auto !important;
  max-width: none !important;
  height: auto !important;
  max-height: none !important;
  filter: alpha(opacity=0);
  opacity: 0;
}
.cropper-hidden {
  display: none !important;
}
.cropper-move {
  cursor: move;
}
.cropper-crop {
  cursor: crosshair;
}
.cropper-disabled .cropper-canvas, .cropper-disabled .cropper-face, .cropper-disabled .cropper-line, .cropper-disabled .cropper-point {
  cursor: not-allowed;
}
.avatar-view {
  display: block;
  height: 220px;
  width: 220px;
  border: 3px solid #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, .15);
  cursor: pointer;
  overflow: hidden;
}
.avatar-view img {
  width: 100%;
}
.avatar-body {
  padding-right: 15px;
  padding-left: 15px;
}
.avatar-upload {
  overflow: hidden;
}
.avatar-upload label {
  display: block;
  float: left;
  clear: left;
  width: 100px;
}
.avatar-upload input {
  display: block;
  margin-left: 110px;
}
.avater-alert {
  margin-top: 10px;
  margin-bottom: 10px;
}
.avatar-wrapper {
  height: 364px;
  width: 100%;
  margin-top: 15px;
  box-shadow: inset 0 0 5px rgba(0, 0, 0, .25);
  background-color: #fcfcfc;
  overflow: hidden;
}
.avatar-wrapper img {
  display: block;
  height: auto;
  max-width: 100%;
}
.avatar-preview {
  float: left;
  margin-top: 15px;
  margin-right: 15px;
  border: 1px solid #eee;
  border-radius: 4px;
  background-color: #fff;
  overflow: hidden;
}
.avatar-preview:hover {
  border-color: #ccf;
  box-shadow: 0 0 5px rgba(0, 0, 0, .15);
}
.avatar-preview img {
  width: 100%;
}
.preview-lg {
  height: 184px;
  width: 184px;
  margin-top: 15px;
}
.preview-md {
  height: 100px;
  width: 100px;
}
.preview-sm {
  height: 50px;
  width: 50px;
}
@media (min-width: 992px) {
  .avatar-preview {
    float: none;
  }
}
.avatar-btns {
  margin-top: 30px;
  margin-bottom: 15px;
}
.avatar-btns .btn-group {
  margin-right: 5px;
}
.loading {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: #fff url("../images/loading.gif") no-repeat center center;
  opacity: .75;
  filter: alpha(opacity=75);
  z-index: 20140628;
}

/* *********  /image cropping  **************************** */


/* *********  moris  **************************** */

.morris-hover {
  position: absolute;
  z-index: 1000;
}
.morris-hover.morris-default-style {
  padding: 6px;
  color: #666;
  background: rgba(243, 242, 243, 0.8);
  border: solid 2px rgba(195, 194, 196, 0.8);
  font-family: sans-serif;
  font-size: 12px;
  text-align: center;
}
.morris-hover.morris-default-style .morris-hover-row-label {
  font-weight: bold;
  margin: 0.25em 0;
}
.morris-hover.morris-default-style .morris-hover-point {
  white-space: nowrap;
  margin: 0.1em 0;
}

/* *********  /moris  **************************** */


/* *********  ecommerce  **************************** */

.price {
  font-size: 40px;
  font-weight: 400;
  color: #26B99A;
  margin: 0;
}
.prod_title {
  border-bottom: 1px solid #DFDFDF;
  padding-bottom: 5px;
  margin: 30px 0;
  font-size: 20px;
  font-weight: 400;
}
.product-image img {
  width: 90%;
}
.prod_color li {
  margin: 0 10px;
}
.prod_color li p {
  margin-bottom: 0;
}
.prod_size li {
  padding: 0;
}
.prod_color .color {
  width: 25px;
  height: 25px;
  border: 2px solid rgba(51, 51, 51, 0.28) !important;
  padding: 2px;
  border-radius: 50px;
}
.product_gallery a {
  width: 100px;
  height: 100px;
  float: left;
  margin: 10px;
  border: 1px solid #e5e5e5;
}
.product_gallery a img {
  width: 100%;
  margin-top: 15px;
}
.product_price {
  margin: 20px 0;
  padding: 5px 10px;
  background-color: #FFFFFF;
  text-align: left;
  border: 2px dashed #E0E0E0;
}
.price-tax {
  font-size: 18px;
}
.product_social {
  margin: 20px 0;
}
.product_social ul li a i {
  font-size: 35px;
}

/* *********  /ecommerce  **************************** */


/* *********  progressbar  **************************** */


/*! bootstrap-progressbar v0.8.4 | Copyright (c) 2012-2014 Stephan GroÃŸ | MIT license | http://www.minddust.com */

.progress_summary .progress {
  margin: 5px 0 12px !important;
}
.progress_summary .row {
  margin-bottom: 5px;
}
.progress_summary .row .col-xs-2 {
  padding: 0
}
.progress_summary .more_info span {
  text-align: right;
  float: right;
}
.progress_summary .data span {
  text-align: right;
  float: right;
}
.progress_summary p {
  margin-bottom: 3px;
  width: 100%;
}
.progress_title .left {
  float: left;
  text-align: left;
}
.progress_title .right {
  float: right;
  text-align: right;
  font-weight: 300;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  border-radius: 0;
  margin-bottom: 18px;
}
.progress.right .progress-bar {
  float: right;
  right: 0;
}
.progress.vertical {
  width: 40px;
}
.progress.progress_sm {
  border-radius: 0;
  margin-bottom: 18px;
  height: 10px !important;
}
.progress.progress_sm .progress-bar {
  height: 10px !important;
}
.dashboard_graph p {
  margin: 0 0 4px;
}
ul.verticle_bars {
  width: 100%;
}
ul.verticle_bars li {
  width: 23%;
  height: 200px;
  margin: 0;
}
.progress {
  overflow: hidden;
  height: 20px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #ffffff;
  text-align: center;
  background-color: #428bca;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-striped .progress-bar, .progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.progress.active .progress-bar, .progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #26B99A;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #3498DB;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #F39C12;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress {
  position: relative;
}
.progress .progress-bar {
  position: absolute;
  overflow: hidden;
  line-height: 20px;
}
.progress .progressbar-back-text {
  position: absolute;
  width: 100%;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  text-align: center;
}
.progress .progressbar-front-text {
  display: block;
  width: 100%;
  font-size: 12px;
  line-height: 20px;
  text-align: center;
}
.progress.right .progress-bar {
  right: 0;
}
.progress.right .progressbar-front-text {
  position: absolute;
  right: 0;
}
.progress.vertical {
  width: 20px;
  height: 100%;
  float: left;
  margin-right: 10px;
}
.progress.vertical.progress_wide {
  width: 35px;
}
.progress.vertical.bottom {
  position: relative;
}
.progress.vertical.bottom .progressbar-front-text {
  position: absolute;
  bottom: 0;
}
.progress.vertical .progress-bar {
  width: 100%;
  height: 0;
  -webkit-transition: height 0.6s ease;
  -o-transition: height 0.6s ease;
  transition: height 0.6s ease;
}
.progress.vertical.bottom .progress-bar {
  position: absolute;
  bottom: 0;
}

/* *********  /progressbar  **************************** */


/********* login ****************/

a.hiddenanchor {
  display: none;
}

/** The wrapper that will contain our two forms **/

#wrapper {
  right: 0px;
  margin: 0px auto;
  margin-top: 5%;
  max-width: 350px;
  position: relative;
}
#register, #login {
  position: absolute;
  top: 0px;
  width: 100%;
}
#register {
  z-index: 21;
  opacity: 0;
  width: 100%;
}
#login {
  z-index: 22;
}
#toregister:target ~ #wrapper #register, #tologin:target ~ #wrapper #login {
  z-index: 22;
  -webkit-animation-name: fadeInLeft;
  -moz-animation-name: fadeInLeft;
  -ms-animation-name: fadeInLeft;
  -o-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
  -webkit-animation-delay: .1s;
  -moz-animation-delay: .1s;
  -o-animation-delay: .1s;
  -ms-animation-delay: .1s;
  animation-delay: .1s;
}
#toregister:target ~ #wrapper #login, #tologin:target ~ #wrapper #register {
  -webkit-animation-name: fadeOutLeft;
  -moz-animation-name: fadeOutLeft;
  -ms-animation-name: fadeOutLeft;
  -o-animation-name: fadeOutLeft;
  animation-name: fadeOutLeft;
}

/** the actual animation, credit where due : http://daneden.me/animate/ ***/

.animate {
  -webkit-animation-duration: 0.5s;
  -webkit-animation-timing-function: ease;
  -webkit-animation-fill-mode: both;
  -moz-animation-duration: 0.5s;
  -moz-animation-timing-function: ease;
  -moz-animation-fill-mode: both;
  -o-animation-duration: 0.5s;
  -o-animation-timing-function: ease;
  -o-animation-fill-mode: both;
  -ms-animation-duration: 0.5s;
  -ms-animation-timing-function: ease;
  -ms-animation-fill-mode: both;
  animation-duration: 0.5s;
  animation-timing-function: ease;
  animation-fill-mode: both;
}

/********* /login ***************/


/********** sign in ***************************/

.login_box {
  padding: 20px;
  margin: auto;
}
a {
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}
.left {
  float: left;
}
.alignleft {
  float: left;
  margin-right: 15px;
}
.alignright {
  float: right;
  margin-left: 15px;
}
.clearfix:after, form:after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}
.login_content {
  margin: 0 auto;
  padding: 25px 0 0;
  position: relative;
  text-align: center;
  text-shadow: 0 1px 0 #fff;
  min-width: 280px;
}
.login_content h1 {
  font: normal 25px Helvetica, Arial, sans-serif;
  letter-spacing: -0.05em;
  line-height: 20px;
  margin: 10px 0 30px;
}
.login_content h1:before, .login_content h1:after {
  content: "";
  height: 1px;
  position: absolute;
  top: 10px;
  width: 27%;
}
.login_content h1:after {
  background: rgb(126, 126, 126);
  background: -moz-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: -webkit-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: -o-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: -ms-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  right: 0;
}
.login_content h1:before {
  background: rgb(126, 126, 126);
  background: -moz-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: -webkit-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: -o-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: -ms-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  left: 0;
}
.login_content h1:before, .login_content h1:after {
  content: "";
  height: 1px;
  position: absolute;
  top: 10px;
  width: 20%;
}
.login_content h1:after {
  background: rgb(126, 126, 126);
  background: -moz-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: -webkit-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: -o-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: -ms-linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: linear-gradient(left, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  right: 0;
}
.login_content h1:before {
  background: rgb(126, 126, 126);
  background: -moz-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: -webkit-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: -o-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: -ms-linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  background: linear-gradient(right, rgba(126, 126, 126, 1) 0%, rgba(255, 255, 255, 1) 100%);
  left: 0;
}
.login_content form {
  margin: 20px 0;
  position: relative
}
.login_content form input[type="text"], .login_content form input[type="email"], .login_content form input[type="password"] {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
  -moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
  -ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
  -o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
  box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
  border: 1px solid #c8c8c8;
  color: #777;
  margin: 0 0 20px;
  width: 100%;
}
.login_content form input[type="text"]:focus, .login_content form input[type="email"]:focus, .login_content form input[type="password"]:focus {
  -webkit-box-shadow: 0 0 2px #AA77B4 inset;
  -moz-box-shadow: 0 0 2px #ed1c24 inset;
  -ms-box-shadow: 0 0 2px #ed1c24 inset;
  -o-box-shadow: 0 0 2px #ed1c24 inset;
  box-shadow: 0 0 2px #A97AAD inset;
  background-color: #fff;
  border: 1px solid #A878AF;
  outline: none;
}
#username {
  background-position: 10px 10px !important
}
#password {
  background-position: 10px -53px !important
}
.login_content form div a {
  font-size: 12px;
  margin: 10px 15px 0 0;
}
.reset_pass {
  margin-top: 10px !important;
}
.login_content div .reset_pass {
  margin-top: 13px !important;
  margin-right: 39px;
  float: right;
}
.separator {
  border-top: 1px solid #D8D8D8;
  margin-top: 10px;
  padding-top: 10px;
}
.button {
  background: rgb(247, 249, 250);
  background: -moz-linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);
  background: -webkit-linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);
  background: -o-linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);
  background: -ms-linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);
  background: linear-gradient(top, rgba(247, 249, 250, 1) 0%, rgba(240, 240, 240, 1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f9fa', endColorstr='#f0f0f0', GradientType=0);
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
  -ms-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
  -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
  -webkit-border-radius: 0 0 5px 5px;
  -moz-border-radius: 0 0 5px 5px;
  -o-border-radius: 0 0 5px 5px;
  -ms-border-radius: 0 0 5px 5px;
  border-radius: 0 0 5px 5px;
  border-top: 1px solid #CFD5D9;
  padding: 15px 0;
}
.login_content form input[type="submit"], #content form .submit {
  float: left;
  margin-left: 38px;
}
.button a {
  background: url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) 0 -112px no-repeat;
  color: #7E7E7E;
  font-size: 17px;
  padding: 2px 0 2px 40px;
  text-decoration: none;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.button a:hover {
  background-position: 0 -135px;
  color: #00aeef;
}
header {
  width: 100%;
}

/********** end of sign in ********************/


/* *********  start nprogress  **************************** */


/* Make clicks pass-through */

#nprogress {
  pointer-events: none;
}
#nprogress .bar {
  background: #29d;
  position: fixed;
  z-index: 1031;
  top: 0;
  left: 0;
  width: 100%;
  height: 2px;
}

/* Fancy blur effect */

#nprogress .peg {
  display: block;
  position: absolute;
  right: 0px;
  width: 100px;
  height: 100%;
  box-shadow: 0 0 10px #29d, 0 0 5px #29d;
  opacity: 1.0;
  -webkit-transform: rotate(3deg) translate(0px, -4px);
  -ms-transform: rotate(3deg) translate(0px, -4px);
  transform: rotate(3deg) translate(0px, -4px);
}

/* Remove these to get rid of the spinner */

#nprogress .spinner {
  display: block;
  position: fixed;
  z-index: 1031;
  top: 15px;
  right: 15px;
}
#nprogress .spinner-icon {
  width: 18px;
  height: 18px;
  box-sizing: border-box;
  border: solid 2px transparent;
  border-top-color: #29d;
  border-left-color: #29d;
  border-radius: 50%;
  -webkit-animation: nprogress-spinner 400ms linear infinite;
  animation: nprogress-spinner 400ms linear infinite;
}
.nprogress-custom-parent {
  overflow: hidden;
  position: relative;
}
.nprogress-custom-parent #nprogress .spinner, .nprogress-custom-parent #nprogress .bar {
  position: absolute;
}
@-webkit-keyframes nprogress-spinner {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes nprogress-spinner {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/* *********  end nprogress  **************************** */


/* *********  cropping  **************************** */


/* Main
 * ========================================================================== */


/* Icons
 * -------------------------------------------------------------------------- */

.icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background-image: url("../images/icons.png");
  vertical-align: middle;
}
.icon-move {
  background-position: 0 0;
}
.icon-crop {
  background-position: -30px 0;
}
.icon-zoom-in {
  background-position: -60px 0;
}
.icon-zoom-out {
  background-position: -90px 0;
}
.icon-rotate-left {
  background-position: -120px 0;
}
.icon-rotate-right {
  background-position: -150px 0;
}
.icon-lock {
  background-position: -180px 0;
}
.icon-unlock {
  background-position: -210px 0;
}
.icon-remove {
  background-position: -240px 0;
}
.icon-refresh {
  background-position: -270px 0;
}
.icon-upload {
  background-position: -300px 0;
}
.icon-off {
  background-position: -330px 0;
}
.icon-info {
  background-position: -360px 0;
}

/* Alerts
 * -------------------------------------------------------------------------- */

.docs-alert {
  display: none;
  position: fixed;
  top: 20px;
  left: 0;
  right: 0;
  height: 0;
  text-align: center;
  opacity: 0.9;
}
.docs-alert .message {
  display: inline-block;
  padding: 5px 10px;
  border-radius: 2px;
  background-color: #aaa;
  color: #fff;
}
.docs-alert .primary {
  background-color: #0074d9;
}
.docs-alert .success {
  background-color: #2ecc40;
}
.docs-alert .info {
  background-color: #39cccc;
}
.docs-alert .warning {
  background-color: #ff851b;
}
.docs-alert .danger {
  background-color: #ff4136;
}

/* Button
 * -------------------------------------------------------------------------- */


/* Basic style
 * -------------------------------------------------------------------------- */

body {
  overflow-x: hidden;
}

/* Header */

.docs-header {
  border-color: #003973;
  background-color: #00468c;
  color: #fff;
}
.docs-header .navbar-brand {
  color: #eee;
}
.docs-header .navbar-toggle {
  border-color: #003973;
  background-color: #00468c;
}
.docs-header .navbar-toggle:hover, .docs-header .navbar-toggle:focus {
  border-color: #003366;
  background-color: #003973;
}
.docs-header .navbar-collapse {
  border-color: #003973;
}
.docs-header .navbar-text {
  color: #ddd;
}
.docs-header .navbar-nav > li > a {
  color: #eee;
}

/* Content */

.img-container, .img-preview {
  background-color: #f7f7f7;
  overflow: hidden;
  width: 100%;
  text-align: center;
}
.img-container {
  min-height: 200px;
  max-height: 466px;
  margin-bottom: 20px;
}
.img-container > img {
  max-width: 100%;
}
.docs-preview {
  margin-right: -15px;
  margin-bottom: 10px;
}
.img-preview {
  float: left;
  margin-right: 10px;
  margin-bottom: 10px;
}
.img-preview > img {
  max-width: 100%;
}
.preview-lg {
  width: 263px;
  height: 148px;
}
.preview-md {
  width: 139px;
  height: 78px;
}
.preview-sm {
  width: 69px;
  height: 39px;
}
.preview-xs {
  width: 35px;
  height: 20px;
  margin-right: 0;
}
.docs-data > .input-group {
  margin-bottom: 10px;
}
.docs-data > .input-group > label {
  min-width: 80px;
}
.docs-data > .input-group > span {
  min-width: 50px;
}
.docs-buttons > .btn, .docs-buttons > .btn-group, .docs-buttons > .form-control {
  margin-right: 5px;
  margin-bottom: 10px;
}
.docs-toggles > .btn, .docs-toggles > .btn-group, .docs-toggles > .dropdown {
  margin-bottom: 10px;
}
.docs-tooltip {
  display: block;
  margin: -6px -12px;
  padding: 6px 12px;
}
.docs-tooltip > .icon {
  margin: 0 -3px;
  vertical-align: top;
}
.tooltip-inner {
  white-space: normal;
}
.btn-upload .tooltip-inner {
  white-space: nowrap;
}
@media (max-width: 400px) {
  .btn-group-crop {
    margin-right: -15px!important;
  }
  .btn-group-crop > .btn {
    padding-left: 5px;
    padding-right: 5px;
  }
  .btn-group-crop .docs-tooltip {
    margin-left: -5px;
    margin-right: -5px;
    padding-left: 5px;
    padding-right: 5px;
  }
}
.docs-options .dropdown-menu {
  width: 100%;
}
.docs-options .dropdown-menu > li {
  padding: 3px 20px;
}
.docs-options .dropdown-menu > li:hover {
  background-color: #f7f7f7;
}
.docs-options .dropdown-menu > li > label {
  display: block;
}
.docs-cropped .modal-body {
  text-align: center;
}
.docs-cropped .modal-body > img {
  max-width: 100%;
}

/* *********  /cropping  **************************** */


/* *********    **************************** */


/* *********    **************************** */


/* *********    **************************** */


/* *********    **************************** */


/* *********    **************************** */


/* *********    **************************** */


/* *********    **************************** */


/* *********    **************************** */

ul.notifications {
  float: right;
  display: block;
  margin-bottom: 7px;
  padding: 0;
  width: 100%;
}
.notifications li {
  float: right;
  margin: 3px;
  width: 36px;
  box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.3);
}
.notifications li:last-child {
  margin-left: 0;
}
.notifications a {
  display: block;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  padding: 9px 8px;
}
.tabbed_notifications .text {
  padding: 5px 15px;
  height: 140px;
  border-radius: 7px;
  box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.3);
}
.tabbed_notifications div p {
  display: inline-block;
}
.tabbed_notifications h2 {
  font-weight: bold;
  text-transform: uppercase;
  width: 80%;
  float: left;
  height: 20px;
  text-overflow: ellipsis;
  overflow: hidden;
  display: block;
}
.tabbed_notifications .close {
  padding: 5px;
  color: #E9EDEF;
  float: right;
  opacity: 1;
}

/*pace loader*/


/*http://github.hubspot.com/pace/docs/welcome/*/

.pace {
  -webkit-pointer-events: none;
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}
.pace-inactive {
  display: none;
}
.pace .pace-progress {
  background: #1abb9c;
  position: fixed;
  z-index: 2000;
  top: 0;
  right: 100%;
  width: 100%;
  height: 2px;
}
.copyright-info {
  padding: 8px 0;
}

/* iCheck plugin Flat skin, green
----------------------------------- */
.icheckbox_flat-green,
.iradio_flat-green {
    display: inline-block;
    *display: inline;
    vertical-align: middle;
    margin: 0;
    padding: 0;
    width: 20px;
    height: 20px;
    background: url(green.png) no-repeat;
    border: none;
    cursor: pointer;
}

.icheckbox_flat-green {
    background-position: 0 0;
}
    .icheckbox_flat-green.checked {
        background-position: -22px 0;
    }
    .icheckbox_flat-green.disabled {
        background-position: -44px 0;
        cursor: default;
    }
    .icheckbox_flat-green.checked.disabled {
        background-position: -66px 0;
    }

.iradio_flat-green {
    background-position: -88px 0;
}
    .iradio_flat-green.checked {
        background-position: -110px 0;
    }
    .iradio_flat-green.disabled {
        background-position: -132px 0;
        cursor: default;
    }
    .iradio_flat-green.checked.disabled {
        background-position: -154px 0;
    }

/* HiDPI support */
@media (-o-min-device-pixel-ratio: 5/4), (-webkit-min-device-pixel-ratio: 1.25), (min-resolution: 120dpi) {
    .icheckbox_flat-green,
    .iradio_flat-green {
        background-image: url(green@2x.png);
        -webkit-background-size: 176px 22px;
        background-size: 176px 22px;
    }
}


</style>