<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		  <?php 
		if(isset($title)){
			echo "<title>".$title."</title>";
			echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
			echo" <meta content='".$title."' name='description'/>";
		}else{
			echo"<title>Calendar UIN Sunan Kalijaga</title>";
			echo" <meta content='UIN Sunan Kalijaga' name='description'/>";
		}
		?>
		<link href="http://static.uin-suka.ac.id/images/favicon.png" type="image/x-icon" rel="shortcut icon">
		<link href="http://static.uin-suka.ac.id/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="http://static.uin-suka.ac.id/css/style_global.css" rel="stylesheet" type="text/css"/>
		<link href="http://static.uin-suka.ac.id/css/style_layout.css" rel="stylesheet" type="text/css"/>
		<link href="http://static.uin-suka.ac.id/css/docs.css" rel="stylesheet" type="text/css"/>
		
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro">
<!-- asli -->
		<link href="<?php echo base_url();?>asset1/css/fullcalendar.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>asset1/css/fullcalendar.print.min.css" rel="stylesheet" media='print' />



<!-- sampe sini -->

		<script src="http://static.uin-suka.ac.id/js/jquery-1.8.1.js"></script>
		<link href="http://static.uin-suka.ac.id/css/web_menu.css" rel="stylesheet" type="text/css"/>
		<link href="http://static.uin-suka.ac.id/css/web_style.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="http://uin-suka.ac.id//asset/colorbox/colorbox.css" />
	
	<!--BREADCRUMB-->
		<link href="http://static.uin-suka.ac.id/css/breadcrumb.css" rel="stylesheet" type="text/css"/>
	<!--=====-->
			
		
		<script src="http://it.uin-suka.ac.id/asset/js/bootstrap.min.js"></script>
		<script src="http://it.uin-suka.ac.id/asset/js/bootstrap-timepicker.min.js"></script>
		<script src="http://it.uin-suka.ac.id/asset/js/bootstrap-datepicker.js"></script>
		<script src="http://static.uin-suka.ac.id/js/jquery.mCustomScrollbar.init.js"></script>
		<script src="http://static.uin-suka.ac.id/js/jquery.mCustomScrollbar.min.js"></script>
		<script src="http://static.uin-suka.ac.id/js/redactor.min.js"></script>
		<script src="http://uin-suka.ac.id//asset/colorbox/jquery.colorbox.js"></script>
		
		<link href="http://static.uin-suka.ac.id/css/navigation.css" rel="stylesheet" type="text/css"/>
		<script>

		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||
		   function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-27090148-2', 'uin-suka.ac.id');
			ga('send', 'pageview');
		</script>
		
		
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		 fbq('init', '1634672836832891'); 
		fbq('track', 'PageView');
		</script>
		<noscript>
		 <img height="1" width="1" 
		src="https://www.facebook.com/tr?id=1634672836832891&ev=PageView
		&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->
<script src='<?php echo base_url();?>asset1/locale/id.js'></script>
<script src='<?php echo base_url();?>asset1/lib/moment.min.js'></script>
<script src='<?php echo base_url();?>asset1/lib/jquery.min.js'></script>
<script src='<?php echo base_url();?>asset1/js/fullcalendar.min.js'></script>
<script src='<?php echo base_url();?>asset1/locale/id.js'></script>

<script>

	$(document).ready(function() {
	 var base_url='http://exp.uin-suka.ac.id/agenda/index.php/'; 
		$('#calendar').fullCalendar({
		
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek'
			},
	
			defaultDate: new Date(),    
			editable: false,
			navLinks: true, // can click day/week names to navigate views
			eventLimit: true, // allow "more" link when too many events
			events: base_url+'page/data',
			// 	
		});
		
	});

</script>
<!-- 	<link rel="stylesheet" href="<?php echo base_url('assets/calender/css/monthly.css');?> "> -->
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet" type="text/css">		
	
	

<!-- CSS ======================================================
	<link rel="stylesheet" href="css/responsivetables.css">-->
	<!-- Demo CSS (don't use) -->
	
	<style type="text/css">
		body, html {
			padding:0px;
			margin:0px;
			/*background: url('images/bg.jpg') center;*/
			background-size:cover;
			background-attachment: fixed;
			/*text-align:center;*/
			color:#111115;
			line-height: 1.4em;
			font-family: "Trebuchet MS", Helvetica, sans-serif;
		}
		table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

		/*body {
			padding:10vh 0;
		}*/
		h1 {
			font-family: 'Yanone Kaffeesatz', sans-serif;
			text-align: center;
			font-size: 77px;
			text-shadow: 0 0px 30px rgba(0, 0, 0, 0.2);
		}
		h2 {
			font-family: 'Yanone Kaffeesatz', sans-serif;
			font-size:30px;
			text-shadow: 0 0px 20px rgba(0, 0, 0, 0.3);
			color:#110505;
		}
.ket{
    border: none;
    text-align: left;
    padding: 8px;
       display: inline-block

    width: 150px;
    height: 75px;
    margin: 10px;
    color: #3b587a;
    font-size: 1em;

}
		.monthly {
			box-shadow: 0 13px 40px rgba(0, 0, 0, 0.5);
			font-size: 0.8em;
			  display: inline-block;
  
    margin: 10px
		}

		input[type="text"] {
			padding: 15px;
			border-radius: 2px;
			font-size: 16px;
			outline: none;
			border: 2px solid rgba(255, 255, 255, 0.5);
			background: rgba(63, 78, 100, 0.27);
			color: #fff;
			width: 250px;
			box-sizing: border-box;
			font-family: "Trebuchet MS", Helvetica, sans-serif;
		}
		input[type="text"]:hover {
			border: 2px solid rgba(255, 255, 255, 0.7);
		}
		input[type="text"]:focus {
			border: 2px solid rgba(255, 255, 255, 1);
			background:#eee;
			color:#222;
		}


		.button {
			display: inline-block;
			padding: 15px 25px;
			margin: 25px 0 75px 0;
			border-radius: 3px;
			color: #fff;
			background: #000;
			letter-spacing: .4em;
			text-decoration: none;
			font-size: 13px;
		}
		.button:hover {
			background: #3b587a;
		}
		.desc {
			max-width: 250px;
			text-align: left;
			font-size:14px;
			padding-top:30px;
			line-height: 1.4em;
		}
		.resize {
			background: #222;
			display: inline-block;
			padding: 6px 15px;
			border-radius: 22px;
			font-size: 13px;
		}
		@media (max-height: 700px) {
			.sticky {
				position: relative;
			}
		}
		@media (max-width: 600px) {
			.resize {
				display: none;
			}
		}
	</style>
	</head>
    <body>
		<div class="app_header-top"></div>
		<div class="app_main">
			<div class="app_header">
				<div class="center">
					<div class="app_uin_id">
						<a href="<?php echo base_url()?>" ></a>
					</div>
					<div class="app_header_right">
						<div style="text-align:right;">
							<div>
								<div class="app_system_id">CALENDAR</div>
							</div>
							<div class="clear5"></div>
              <div>
                <div class="app_univ_id">UIN Sunan Kalijaga</div>
              </div>
							<div class="menutama-button">
                <ul id="menu"></ul>
							</div>
						</div>
					</div>
				  <div class="clear"></div>
				</div>
			</div>
    </div>