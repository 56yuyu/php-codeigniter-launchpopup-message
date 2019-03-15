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
			  max-width: 480px;
			  width: 100%;
			  padding-left: 0px;
			  padding-right: 0px	;
			  position: relative;
			  -webkit-box-shadow: -2px 2px 41px 31px rgba(0,0,0,0.75);
			  -moz-box-shadow: -2px 2px 41px 31px rgba(0,0,0,0.75);
			  box-shadow: -2px 2px 41px 31px rgba(0,0,0,0.75);
			}
			
			.abs-main {
			  position: absolute;
			  top: 0;
			  left: 0;
			  color: #fff;
			  width: 100%;
			}
			
			.jumbotron{
				background-color: #080808 !important;
				padding: 0px !important;
			}
			.banner-img{
				width: 100%
			}
			.timer{
				position: absolute;
				top: 163px;
				font-weight: bold;
				font-size: 1.2em;
				width: 100%;
				text-align: center;
			}
			.days{
				font-weight: bold;
				font-size: 8em;
			}
			.txt-days{
				font-weight: 300;
				font-size: 1.1em;
				position: absolute;
				top: 60px;
				padding-left: 10px;
				letter-spacing: 1px;
			}
			.rightTitle{
				font-size: 0.8em;
				color: #ccd1d2;
				text-align: left;
				margin-top: 145px;
				padding-left: 35px;
				letter-spacing: 1px;
			}
			
			#clockdiv{
				font-family: "Adam CG", sans-serif !important;
				color: #ccd1d2;
				position: relative;
				margin-top: 30px;
				text-align: center;
			}
			.righthov{
				cursor: pointer;
		  		transition: 0.3s;
			}
			.rightTitle a{
				text-decoration: none;
			}
			.rightTitle a:active{
				color: #ccd1d2;
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
			
			@media only screen and (min-width: 375px) {
			  #clockdiv {
			  	margin-top: 66px;
			  }
			  .rightTitle {
			    margin-top: 170px;
			    padding-left: 40;
			    font-size: 1.2em;
			  } 
			  .timer{
			  	top:160px;
			  	font-size: 1.4em;
			  }
			}
			@media only screen and (min-width: 411px) and (max-width: 414px) {
			  #clockdiv {
			  	margin-top: 50px;
			  }
			  .rightTitle {
			    margin-top: 160px;
    				padding-left: 45px;
			    font-size: 1em;
			  } 
			  .days {
			    font-size: 10em;
			  }
			  .txt-days{
			  	top:80px;
			  }
			  .timer{
			  	top:205px;
			  }
			}
			@media only screen and (min-width: 480px) {
			  #clockdiv {
			  	margin-top: 55px;
			  }
			  .rightTitle {
			    margin-top: 198px;
			    font-size: 1.2em;
			    padding-left: 50;
			  } 
			  .days {
			    font-size: 12em;
			  }
			  .txt-days{
			  	top:100px;
			  }
			  .timer{
			  	top:240px;
			  	font-size: 1.4em;
			  }
			}
			@media only screen and (min-width: 360px) {
				#clockdiv {
			  		margin-top: 60px;
			  	}
				.rightTitle {
			    		margin-top: 140px;
    					padding-left: 45px;
			    		font-size: 1em;
			  	} 
			}

		</style>
	</head>
	<body>
		<div class="jumbotron">
      
	    		<div class="wrapper text-center">
		       <img class="banner-img" src="<?=base_url('assets/img/banner/background_countdown_mobile.png')?>" alt="Banner Image GA"/>	
	           <div class="abs-main">
	           		
	           			<div style="position: relative">
	           				<div id="clockdiv">
	           					<span class="days"></span><span class="txt-days">DAYS</span>
	           					<div class="timer">
	           						<span class="hours"></span>H  <span class="minutes"></span>M  <span class="seconds"></span>S
	           					</div>
	           				</div>
	           			</div>
		           		<div style="position: relative">
	           				<div class="rightTitle">
	           					<a href="https://www.instagram.com/globe.asia/" target="_blank" style="color: #ccd1d2;"><span class="righthov">FOR NOW, FOLLOW US ON <i class="fab fa-instagram"></i></span></a>
	           				</div>
	           			</div>
	           </div>
	        </div>
	        
	    </div>
		<script type="text/javascript">
			var modal = document.getElementById('myModalPopup');
			var img = document.getElementById('imgPopup');
	
			var modalImg = document.getElementById("imgPopupModal");
			var captionText = document.getElementById("caption");
			
			modal.style.display = "block";
  			modalImg.src = "<?=$img_link;?>";
			
			var spanClose = document.getElementsByClassName("closeX")[0];
			spanClose.onclick = function() { 
  				modal.style.display = "none";
			}
		</script>
		
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
