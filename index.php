<!doctype html>

<html>
<head>
<link rel="shortcut icon" href="tmp/img/favicon.ico"> 
<meta charset='UTF-8' />
<script src="tmp/libraries/jquery/jquery-2.0.3.js"></script>
<script src="tmp/libraries/jquery/jquery.cookie.js"></script>
<link href="tmp/libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="tmp/libraries/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen" />
<script src="tmp/libraries/bootstrap/js/bootstrap.min.js"></script>
<link href="tmp/libraries/bootstrap/css/font-awesome.min.css" rel="stylesheet" media="screen" />
<link href="tmp/libraries/bootstrap/css/font-awesome-ie7.min.css" rel="stylesheet" media="screen" />

<!-- inclusion of jQuery UI (related to message flashing) contributed by Ali Sentas of Turkey -->
<script src="tmp/libraries/jqueryui/jquery-ui.js"></script>
<link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>

<script src="tmp/js/fancywebsocket.js"></script>

<!-- js color suggested by Ali Sentas of Turkey -->

<script type="text/javascript" src="tmp/libraries/jscolor/jscolor.js"></script>

<!-- code mirror suggested by Ali Sentas of Turkey -->

<script type="text/javascript" src="tmp/libraries/codemirror/codemirror.js"></script>
<link href="tmp/libraries/codemirror/codemirror.css" rel="stylesheet" />
<script type="text/javascript" src="tmp/libraries/codemirror/htmlmixed.js"></script>
<script type="text/javascript" src="tmp/libraries/codemirror/cm-javascript.js"></script>
<script type="text/javascript" src="tmp/libraries/codemirror/css.js"></script>
<script type="text/javascript" src="tmp/libraries/codemirror/xml.js"></script>
 
<!-- Adding Core Files -->
<link href="tmp/css/core.css" rel="stylesheet" media="screen" />
<script src="tmp/js/core.js"></script>
<title>Codechatter - Eat.Pray.Code();</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div>
	<audio id="msgsound">
	<source src="http://www.freesfx.co.uk/rx2/mp3s/9/10508_1374247882.mp3"
	type="audio/mpeg"></audio> <audio id="joinsound">
	<source src="http://www.freesfx.co.uk/rx2/mp3s/9/10507_1374247882.mp3"
	type="audio/mpeg"></audio>
</div>

<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	  <span class="sr-only">Toggle</span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="/"><img alt="codechatter.com" src="/tmp/img/logo3.png" width="150px" height="21px"></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
	<ul class="nav navbar-nav">
	  <li class="active"><a href="http://codechat.lytsp33d.com">Chat</a></li>
	  <li title="Place to Earn CodeCoins"><a href="javascript:;">Contests</a></li>
	  <li title="Who has the most coins?"><a id="coin_leaderboard" href="javascript:;">Leaderboards</a></li>
	  <li></li>
	  <li></li>
	  
	</ul>
	<ul class="nav navbar-nav navbar-right">
	  <li class="dropdown">
		<a class="avatar-nav" href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><img id="my_avatar" /><b class="caret"></b></a>
		<ul class="dropdown-menu">
		  <li><a id="update_avatar" href="javascript:;">Change Avatar</a></li>
		  <!-- <li><a href="#">Change Password</a></li> -->
		  <!-- <li><a href="#">Delete Account</a></li> -->
		  <li><a href="javascript:;">My Profile</a></li>
		  <li><a href="javascript:;">My Snippets</a></li>
		  <li><a href="javascript:;">Buy CodeCoins</a></li>
		  <li><a id="logout" href="javascript:;">Logout</a></li>
		</ul>
	  </li>
	</ul>
  </div><!-- /.navbar-collapse -->
</nav>

<div class="">
	<div class="row">
		<div id="logo"><img alt="codechatter.com" src="/tmp/img/logo3.png" width="75%"></div>
		<h1 id="tagline">Eat.Pray.Code();</h1>
	</div>

	<div class="row">
		<div id="requestpassresetUI">
			<h3>Reset your pass</h3>
			<div id="requestpassreset_status"></div>
			<form id="requestpassreset_form">
				<input id="requestpassreset_email" placeholder="Email" value="">
				<input id="login_submit" type="submit" value="Go">
			</form>
		</div>
		<div id="passresetUI">
			<h3>Reset your password</h3>
			<div id="passreset_status"></div>
			<form id="passreset_form">
				<input id="passreset_tempkey" placeholder="Username" type="hidden" value="<?=$_GET['tempkey']?>">
				<input id="passreset_password" placeholder="Password" type="password" value="">
				<input id="passreset_confirm" placeholder="Password again" type="password" value="">
				<input id="passreset_submit" type="submit" value="Go">
			</form>
		</div>
		<div id="loginUI">
			<div class="col-lg-6">
		<h3>Login</h3>
		<div id="status"></div>
		<form id="login_form">
			<input id="login_username" placeholder="Username" value="">
			<input id="login_password" placeholder="Password" type="password" value="">
			<input id="login_submit" type="submit" value="Go"> <span id="logging_in"></span>
		</form>
		<p id="users_online" class="readable"></p>
		<a id="requestpassresetBtn" class="readable">Forgot password?</a>
		</div>

		<div class="col-lg-6">
		<h3>Signup</h3>
		<div id="reg_status"></div>
		<form id="reg_form">
			<input id="reg_username" placeholder="Username" value="">
			<input id="reg_email" placeholder="Email" value="">
			<input id="reg_password" placeholder="Password" type="password" value="">
			<input id="reg_passwordconfirm" placeholder="Password Again" type="password" value="">
			<input id="reg_submit" type="submit" value="Go"> <span id="logging_in"></span>
		</form>
		<p id="users_total" class="readable"></p>
		</div>
		<!--<div><img src="http://farts.typepad.com/photos/uncategorized/cat_fart.jpg" /></div>-->
	</div>
	<div id="port"><?=$_GET['port']?></div>
	<div id="chatUI">
		<div class="row">
		<div class="col-lg-4">
			<div id="log"></div>
			<div id="msgWrap">
				<input id="message" placeholder="Chat..." type="text" value="">
			</div>
			<div id="users">
			<div id="userList"></div>
		</div>
			<div id="settings">
				<!-- <button id="update_avatar" class="btn btn-primary">Update avatar</button><br> -->
				<span class="readable">Chat commands:</span>
				<code>/brb</code> <code>/back</code><br>
				<!-- <span class="readable">Bkgr color:</span>
				<input id="inbgcolor" class="color" placeholder="Enter a background color..." value="url(/lightspeed.png)" />
				<br>
				<span class="readable">Text color:</span> <input id="intextcolor" class="color" placeholder="Enter a text color..." value="#FFF" />
				<br> -->
				<div style="float:left;clear: both;border:3px ridge #24A6AB;padding:15px;margin-top:20px;resize:horizontal;">
					<div id="liveclock" class="readable" style="position:relative;left:0;top:0px;"></div>
				</div>
				<!-- <div style="padding-top:20px;clear:both"><button onclick="toggleSolarSystem();">Toggle Solar System</button></div> -->
			</div>
		</div>

  <div class="col-lg-8">
		<div id="userWhiteboards">
			<div id="newsoftheday" style="display:none"><b>Important news of the day:</b>
				<ul>
				<li>New leaderboard system is now implemented thanks to Zach and Kyle</li>
				</ul>
			<img src="http://0-media-collegehumor.cvcdn.com/54/67/ff0db022409cca599cb3f9ab028fb3ab.jpg" />
			<!--<img src="http://laughingsquid.com/wp-content/uploads/tumblr_lugsodPWWM1qd6s2yo1_500.gif"/>-->
			<!--<img src="http://www.myfacewhen.net/uploads/3168-shut-up-and-take-my-money.jpg" />-->
			TIP: click to close, or drag to your desired location to read later
			</div>
		</div>

		<div id="runCodeWrap">
			<a id="runCode" class="btn btn-primary"><i class='icon-circle-arrow-right'></i> Run Code!</a> <a id="clearRunOutput" class="btn btn-warning"><i class='icon-eraser'></i>Clear Output</a> <select id="selector" onchange="selectScript(this)">
<option>Select a script...</option>
</select>
<button id='addbtn' class="btn btn-info" onclick="addNewScript();"><i class='icon-cloud-upload'></i> Add</button>
<button id='savebtn' class="btn btn-success" onclick="saveScript();"><i class='icon-save'></i> Save </button>
<button id='deletebtn' class="btn btn-danger" onclick="deleteScript();"><i class='icon-trash'></i> Delete </button>

		</div>
		
		<div id="run_area">Your code will run here</div><!--<iframe id="fred" width="100%" height="400px"></iframe>-->

		</div>
	</div>
	</div>
</div>

<script language="JavaScript">
// <!--

/*
Upper Corner Live clock script credit: JavaScript Kit (www.javascriptkit.com)
More free scripts here!
*/

// Suggested by: Kyle from Georgia


function show5(){
if (!document.layers&&!document.all&&!document.getElementById)
return

 var Digital=new Date()
 var hours=Digital.getHours()
 var minutes=Digital.getMinutes()
 var seconds=Digital.getSeconds()

var dn="PM"
if (hours<12)
dn="AM"
if (hours>12)
hours=hours-12
if (hours==0)
hours=12

 if (minutes<=9)
 minutes="0"+minutes
 if (seconds<=9)
 seconds="0"+seconds
//change font size here to your desire
myclock=""+hours+":"+minutes+" "+dn;
if (document.layers){
document.layers.liveclock.document.write(myclock)
document.layers.liveclock.document.close()
}
else if (document.all)
liveclock.innerHTML=myclock
else if (document.getElementById)
document.getElementById("liveclock").innerHTML=myclock
setTimeout("show5()",60000)
 }
//comment for git test
 //-->
 </script>





<style>

  #earth {
	position:absolute;
	width:50px;
	height:50px;
	border-radius:50%;
	z-index:100

background: -moz-linear-gradient(-45deg,  rgba(30,87,153,0) 0%, rgba(30,87,153,0.8) 15%, rgba(30,87,153,1) 19%, rgba(30,87,153,1) 20%, rgba(41,137,216,1) 50%, rgba(30,87,153,1) 80%, rgba(30,87,153,1) 81%, rgba(30,87,153,0.8) 85%, rgba(30,87,153,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(30,87,153,0)), color-stop(15%,rgba(30,87,153,0.8)), color-stop(19%,rgba(30,87,153,1)), color-stop(20%,rgba(30,87,153,1)), color-stop(50%,rgba(41,137,216,1)), color-stop(80%,rgba(30,87,153,1)), color-stop(81%,rgba(30,87,153,1)), color-stop(85%,rgba(30,87,153,0.8)), color-stop(100%,rgba(30,87,153,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg,  rgba(30,87,153,0) 0%,rgba(30,87,153,0.8) 15%,rgba(30,87,153,1) 19%,rgba(30,87,153,1) 20%,rgba(41,137,216,1) 50%,rgba(30,87,153,1) 80%,rgba(30,87,153,1) 81%,rgba(30,87,153,0.8) 85%,rgba(30,87,153,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg,  rgba(30,87,153,0) 0%,rgba(30,87,153,0.8) 15%,rgba(30,87,153,1) 19%,rgba(30,87,153,1) 20%,rgba(41,137,216,1) 50%,rgba(30,87,153,1) 80%,rgba(30,87,153,1) 81%,rgba(30,87,153,0.8) 85%,rgba(30,87,153,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg,  rgba(30,87,153,0) 0%,rgba(30,87,153,0.8) 15%,rgba(30,87,153,1) 19%,rgba(30,87,153,1) 20%,rgba(41,137,216,1) 50%,rgba(30,87,153,1) 80%,rgba(30,87,153,1) 81%,rgba(30,87,153,0.8) 85%,rgba(30,87,153,0) 100%); /* IE10+ */
background: linear-gradient(135deg,  rgba(30,87,153,0) 0%,rgba(30,87,153,0.8) 15%,rgba(30,87,153,1) 19%,rgba(30,87,153,1) 20%,rgba(41,137,216,1) 50%,rgba(30,87,153,1) 80%,rgba(30,87,153,1) 81%,rgba(30,87,153,0.8) 85%,rgba(30,87,153,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e5799', endColorstr='#001e5799',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

  }

  #moon {
	position:absolute;
	width:0;
	height:0;
	border:5px solid white;
	border-radius:5px;
	z-index:100
  }

  #current_mouse_coords{

	color: white;
  }

</style>
<div id="earth"></div>
<div id="moon"></div>
<div id="current_mouse_coords"></div>
<script>
  


  
  
window.earth_settings = {
	radius: 150,
	center: { x: 0, y: 0 },
	current: { x: 0, y: 0 },
	
	
	interval: 36000,
	
	direction: 1,
   
	iterations: -1,

	startPositionDeg: 0,

	updateInterval: 20,


	}


window.moon_settings = {
	radius: 45,
	center: { x: 0, y: 0 },
	current: { x: 0, y: 0 },
	
	interval: 3000,
	
	direction: 1,
   
	iterations: -1,

	startPositionDeg: 0,

	updateInterval: 20
	}



window.ElementRevolver = function(id,settings) {

  this.id = id;
  this.settings = settings;
 
  this.updatePosition = function() {
//    	debug(this);
		this.ellapsedTime = (new Date()).getTime() - this.startTime;

		var angle = this.getAngle(this.settings, this.ellapsedTime);
	  
		this.x = Math.round(this.settings.center.x + this.settings.radius * Math.cos(angle));

		this.y = Math.round(this.settings.center.y + this.settings.radius * Math.sin(angle));
	   
			this.el.style.left = (this.x - Math.round(this.width / 2)) + 'px';
			this.el.style.top = (this.y - Math.round(this.height / 2)) + 'px';
			
			//debug(pos);
			
			// update other rotators settings

			if(this != window.moon_rotator){
				window.moon_rotator.settings.center = {x:this.x, y:this.y};	
			}
			
			

		return true;
	}
	
	this.getAngle = function() {
		return this.ellapsedTime / this.settings.interval * 2 * Math.PI * this.settings.direction - this.settings.startPositionRad;
	}
   
	this.start = function() {
	  

		
		this.el = document.getElementById(this.id);

		this.startTime = (new Date()).getTime();
		this.width = this.el.offsetWidth,
		this.height = this.el.offsetHeight;
		//if(el['#rev:tm'] !== null) stop(id);
		this.el.style.position = this.settings.cssPosition || 'absolute';
		if(!this.settings.startPositionRad) this.settings.startPositionRad = this.settings.startPositionDeg / 180 * Math.PI;
		var self = this;
		this.repeater = setInterval(function (){
			self.updatePosition();
		}, this.settings.updateInterval);
		if(settings.iterations > -1) setTimeout(function() {
			
			rotator.stopInterval();
		}, this.settingssettings.iterations * this.settings.interval);
		
		return this;
	}
	
	this.stopInterval = function () {
		debug('stop interval '+this.id);    	
		//var el = document.getElementById(id);
		//if(el['#rev:tm'] === null) return;

		
		clearInterval(this.repeater);
		this.interval = null;
	}
	//debug(this);
	return this;
};

function toggleSolarSystem(){
	
	if(!window.earth_rotator){

		//$('#earth, #moon').show();
		$('#earth, #moon').hide();
		// window.earth_rotator = new ElementRevolver('earth', window.earth_settings);
		// window.earth_rotator.start();
		// window.moon_rotator = new ElementRevolver('moon', window.moon_settings);
		// window.moon_rotator.start();
		
		var el = 'body';
		$(el).unbind('mousemove');

		$(el).css('min-height', window.outerHeight);
		window.my_mouse_last_send = 0;
		$(el).mousemove(function(e){

		 //   $("#current_mouse_coords").html(e.pageX+","+e.pageY);

			// window.earth_rotator.settings.center = { x: e.pageX, y: e.pageY };
			window.my_coords = { x: e.pageX, y: e.pageY };
			// $("#current_mouse_coords").append(' | '+window.earth_rotator.x+","+window.earth_rotator.y);
			// window.moon_rotator.settings.center = { x: window.earth_rotator.x, y: window.earth_rotator.y };
			var now = new Date().getTime();
			//alert(now - window.my_mouse_last_send);
			if((now - window.my_mouse_last_send) > 50){
				send(JSON.stringify({
					'_m' : 'mouse',
					'_d': { x: e.pageX, y: e.pageY }
				}));
				window.my_mouse_last_send = now;
			}

			participants = window.participants;
			
			for(var i in participants){
				var x = participants[i].x;
				var y = participants[i].y;

				var name = participants[i].name;
				var id = participants[i].id;

				if(!window.tag_occurred){

					if(window.my_coords.x >= x && window.my_coords.x <= (x+25) && window.my_coords.y >= y && window.my_coords.y <= (y+25)){
						
						send(JSON.stringify({
							'_m':'tagged',
							'tagged': id
						}));

						window.tag_occurred = true;

						setTimeout(function (){
							window.tag_occurred = null;
						},2000);
					}					
				}
			}
		});

	} else {
		
		earth_rotator.stopInterval();
		moon_rotator.stopInterval();
		earth_rotator = null;
		moon_rotator = null;
		$('#earth, #moon').hide();
		$('body').unbind('mousemove');		
	}

}
toggleSolarSystem();  

var c=0;
var t;
var timer_is_on=0;
window.timer_end = function (){};
function timedCount(how_long)
{	
	var num = c/1000;
	var secs = num;
	if(c < 30000){
		secs = num;
	} else {
		var secs = Math.round(num);
	}

	if(c > 0){
		$('#run_area').html(secs);
		c=c-100;
		t=setTimeout("timedCount()",100);
	} else {
		stopCount();
		$('#run_area').html(0);
	}
	
}

function doTimer(length,cb)
{
	if (!timer_is_on)
	{
		window.c = length;
		window.timer_end = cb;
		timer_is_on=1;
		timedCount();
	}
}

function stopCount()
{
	clearTimeout(t);
	window.timer_end();
	timer_is_on=0;
}
function both(){
	doTimer();
	stopCount();
}
//pushattempt
</script>
  <!-- Modal -->
  <div class="modal" id="mainModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <a href="#" class="btn">Close</a>
         <!--  <a href="#" class="btn btn-primary">Save changes</a> -->
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</body>
</html>
