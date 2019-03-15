<html>
	<head>
		<title>Globe Asia</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/fonts/font-face.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/fontawesome/css/all.css">
		<link rel="shortcut icon" href="<?=base_url()?>assets/favicon.png?" type="image/x-icon"/>
		<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
		<style type="text/css">
			html, body {
			  height: 100%;
			}
			body{
				background-color: #080808 !important;
			}
			.jumbotron.vertical-center {
			  margin-bottom: 0; 
			}
			
			.vertical-center {
			  min-height: 100%; 
			  min-height: 100vh;
			
			  /* Make it a flex container */
			  display: -webkit-box;
			  display: -moz-box;
			  display: -ms-flexbox;
			  display: -webkit-flex;
			  display: flex; 
			  
			  /* Align the bootstrap's container vertically */
			  -webkit-box-align : center;
			  -webkit-align-items : center;
			  -moz-box-align : center;
			  -ms-flex-align : center;
			  align-items : center;
			  width: 100%;
			  -webkit-box-pack : center;
			  -moz-box-pack : center;
			  -ms-flex-pack : center;
			  -webkit-justify-content : center;
			  justify-content : center;
			}
			
			.wrapper {
			  max-width: 1140px;
			  padding-left: 0px;
			  padding-right: 0px	;
			  position: relative;
			  -webkit-box-shadow: -2px 2px 41px 31px rgba(0,0,0,0.75);
			  -moz-box-shadow: -2px 2px 41px 31px rgba(0,0,0,0.75);
			  box-shadow: -2px 2px 41px 31px rgba(0,0,0,0.75);
			}
			
			.abs-main {
			  position: absolute;
			  top:0;
			  left: 0;
			  right:0;
			  bottom: 0;
			  color: #fff;
			  display: flex;
			}
			
			.jumbotron{
				background-color: #080808 !important;
				padding: 0px !important;
			}
			.banner-img{
				width: 1140px;
			}
			.timer{
				position: absolute;
				top: 332px;
				left: 175px;
				font-weight: bold;
				font-size: 2.5em;
				width: 300px;
				text-align: center;
			}
			.days{
				font-weight: bold;
				font-size: 17em;
				padding-left: 90px;
			}
			.txt-days{
				font-weight: 300;
				font-size: 1.3em;
				position: absolute;
				top: 150px;
				padding-left: 20px;
				letter-spacing: 1px;
			}
			.rightTitle{
				font-family: "Adam CG", sans-serif !important;
				display: inline-block;
				font-weight: 300;
				font-size: 1.2em;
				color: #ccd1d2;
				text-align: right;
				position: absolute;
				top: 450px;
				left: 103px;
				letter-spacing: 1px;
			}
			
			#clockdiv{
				font-family: "Adam CG", sans-serif !important;
				color: #ccd1d2;
				position: relative;
				margin-top: 75px;
			}
			.righthov{
				cursor: pointer;
		  		transition: 0.3s;
			}
			
			.righthov:hover{
				opacity: 0.7;
			}
			.wrapper {  
		  		-webkit-animation-name: zoom;
		  		-webkit-animation-duration: 0.6s;
		  		animation-name: zoom;
		  		animation-duration: 0.6s;
			}
		
			@-webkit-keyframes zoom {
		  		from {-webkit-transform:scale(0)} 
		  		to {-webkit-transform:scale(1)}
			}
		
			@keyframes zoom {
		  		from {transform:scale(0)} 
		  		to {transform:scale(1)}
			}
			@media only screen and (max-width:768px) {
			  .banner-img{
			  	width: 100%;
			  }
			  .wrapper{
			  	width: 100%;
			  }
			  #clockdiv {
			  	margin-top: 37px;
			  }
			  .rightTitle { 
			    margin-top: 80px;
				font-size: 1.2em;
				padding-left: 3px;
				top: 217px;
				text-align: left !important;
				font-size: 1em;
				left: 67px;
			  } 
			  .days {
			    font-size: 12em;
			    padding-left: 58px;
			  }
			  .txt-days{
			  	top:110px;
			  	padding-left: 20px;
			  	font-size: 1.1em;
			  }
			  .timer{
			  	top:240px;
			  	left: 70px;
			  	font-size: 1.4em;
			  }
			}

		</style>
	</head>
	<body>
		<div class="jumbotron vertical-center">
      
	    		<div class="wrapper text-center">
		       <img class="banner-img" src="<?=base_url('assets/img/banner/background_countdown.png')?>" alt="Banner Image GA"/>	
	           <div class="abs-main">
	           		
	           			<div style="width: 50%;position: relative">
	           				<div id="clockdiv">
	           					<span class="days"></span><span class="txt-days">DAYS</span>
	           					<div class="timer">
	           						<span class="hours"></span>H  <span class="minutes"></span>M  <span class="seconds"></span>S
	           					</div>
	           				</div>
	           			</div>
		           		<div style="width: 50%;position: relative">
	           				<div class="rightTitle">
	           					<a href="https://www.instagram.com/globe.asia/" target="_blank" style="color: #ccd1d2;"><span class="righthov">FOR NOW, FOLLOW US ON <i class="fab fa-instagram"></i></span></a>
	           				</div>
	           			</div>
	           </div>
	        </div>
	        
	    </div>
		
		<script type="text/javascript">
			function getTimeRemaining(endtime) {
			  var t = Date.parse(endtime) - Date.parse(new Date());
			  var seconds = Math.floor((t / 1000) % 60);
			  var minutes = Math.floor((t / 1000 / 60) % 60);
			  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
			  var days = Math.floor(t / (1000 * 60 * 60 * 24));
			  return {
			    'total': t,
			    'days': days,
			    'hours': hours,
			    'minutes': minutes,
			    'seconds': seconds
			  };
			}

			function initializeClock(id, endtime) {
			  var clock = document.getElementById(id);
			  var daysSpan = clock.querySelector('.days');
			  var hoursSpan = clock.querySelector('.hours');
			  var minutesSpan = clock.querySelector('.minutes');
			  var secondsSpan = clock.querySelector('.seconds');
			
			  function updateClock() {
			    var t = getTimeRemaining(endtime);
			
			    daysSpan.innerHTML = ('0' + t.days).slice(-2);
			    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
			    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
			    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
			
			    if (t.total <= 0) {
			      clearInterval(timeinterval);
			    }
			  }
			
			  updateClock();
			  var timeinterval = setInterval(updateClock, 1000);
			}
			
			var deadline = new Date('2019/03/27 00:00:00');
			//var deadline = new Date();
			
			initializeClock('clockdiv', deadline);
		</script>
	</body>
</html>
