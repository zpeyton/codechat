<!doctype html>
<html>
<head>
<meta charset='UTF-8' />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="//getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet">


<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<!-- inclusion of jQuery UI (related to message flashing) contributed by Ali Sentas of Turkey -->

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="/jquery.cookie.js"></script>
<link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>

<script src="/fancywebsocket.js"></script>

<!-- <script src="/processing-1.4.1.min.js"></script>
 -->
<!-- js color sugggested by Ali Sentas of Turkey -->

<script type="text/javascript" src="//jscolor.com/example/jscolor/jscolor.js"></script>

<!-- code mirror sugggested by Ali Sentas of Turkey -->

<script type="text/javascript" src="/codemirror.js"></script>
<link href="/codemirror.css" rel="stylesheet">

<script type="text/javascript" src="/htmlmixed.js"></script>

<script type="text/javascript" src="/cm-javascript.js"></script>
<script type="text/javascript" src="/css.js"></script>
<script type="text/javascript" src="/xml.js"></script>

<style>

body {
	background: url(/18HZy.jpg); /* http://i.imgur.com/Ka3sMzh.gif*/
	font-family: monospace;
}

.CodeMirror {
	height: 100%;
}
.watcherWrap{
	width: 100px;
float: right;
position: absolute;
right: 0px;
top: 0px;
z-index: 100;
}
#body {
	/*width: 100%;*/
	/*padding: 0 20px;*/
}

h1, h3 {
	color: white;
	letter-spacing: 4px;
}

input, textarea {
	border: 1px solid #CCC;
	margin: 0;
	padding: 4px;
	margin-top: 8px;
}

#log, #debug {
	clear: both;
	/*width: 100%;*/
	height: 300px;
	
	border: 1px solid #CCC;
	overflow: auto;
}

.readable {
	color: white;
	font-size: 16px;
}

#users {
	margin-top: 10px;
}

#settings {
	margin-top: 100px;
	margin-bottom: 10px;
	clear: both;
}

#message {
	width: 100%;
	line-height: 20px;
	
}

.watcher {
	float:right;
}

.watcher img{
	width:48px;
	height:48px;
}


.userItem {
	border: 1px solid #ccc;
	cursor: pointer;
	float: left!important;
	margin-right: 10px;
	margin-bottom: 10px;
/*	color: white;*/
clear: both;
}

.userItem{cursor:help;}

.userItem:hover {
	background-color: #ccc;
	/*color: black;*/
}

.userItem.selected {
	background-color: #ccc!important;
	color: black;
}

a, p {
	color: #fff;
	
}
a:hover {
	color: white;
	text-decoration: underline;
}

.usr {
	margin: 5px;
	margin-left: 0px!important;
	background-color: white;
	border: 2px solid black;
	min-width: 200px;
	max-width: 220px;
	min-height: 14px!important;
	position: relative;
  }
  .usr img {
	width: 16px;
	height: 16px;
  }
  
  #my_avatar {
	width: 40px;
	height: 40px;
  }
  
  .usrStatus {
	background-color: green;
	border-right: 2px solid black;
	width: 20px;
	float: left!important;
	display: inline-block;
	position: relative;
	font-size: 16px;
	font-weight: bold;
	max-width: 20px!important;
	min-height: 16px!important;
/*    font-family: Arial;*/
  }
  .usrName {
	font-size: 16px;
	float: left!important;
	font-weight: bold;
/*    font-family: Arial;*/
	display: inline-block;
	margin-left: 10px;
	min-height: 16px!important;
	min-width: 118px!important;
	position: relative;
  }




  .usrCodeLine {
	float: right!important;
	/*overflow: hidden;*/
	position: relative;
	border-left: 2px solid black;
	margin-left: 0px!important;
	min-height: 18px!important;
	max-width: 40px!important;
	font-size: 16px;
	font-weight: bold;
/*    font-family: Arial;*/
	text-align: center;
	background-color: #B3E529;
	padding: 0 2px;
	width: auto;
  }
  .selected {
	background-color: #EEEEEE;
  }

/*.userItem.typing {

	background-color: #OOF;
}

.userItem.typing {

	background-color: #OOF;
}*/


.message {
	padding: 1px 4px;
	color: white;
	letter-spacing: 1px;
}

.currency-symbol{
	color:cyan; 
}
.coin{
	color:orange;
}

.mouse {
/*	padding: 1px 4px;*/
	position: absolute;
	z-index: 0;
}

#message {
	position: relative;
	z-index: 200;
}

#logout{
background-color:pink;
padding: 5px 10px;
float: right;
cursor: pointer;
margin-bottom: 10px;
}

#logout:hover{
background: white;
color: black;
}

#msgWrap {
	/*clear: both;*/
	margin-top: 10px;
/*	float: left;*/
}

#msgWrap img {
	cursor: pointer;
	margin-right: 3px;
}

#loginUI {
	margin-top: 20px;
	display: none;
/*	width: 320px;*/
}

#chatUI {
	clear: both;
	float: left;
	width: 100%;
	margin: 0 auto;
	display: none;
	margin-top: 20px;
	padding-bottom: 50px;
	padding-left: 10px;
	border-bottom: 1px solid white;
}

#debug {
	margin-top: 20px;
	display: none;
}

#userWhiteboards {
	clear: both;
	/*height: 500px;*/
	/*overflow: hidden;*/
	position: relative;
	/*padding-right: 80px;*/
}

#newsoftheday {
	position: absolute;
	z-index: 1000;
	cursor: pointer;
	background: #fff;
	padding: 20px;
	box-shadow: 0 0 6px 6px #ccc;
}

#newsoftheday ul{
	margin-top:10px;
	margin-bottom: 20px; 
}
#newsoftheday b{
	font-size: 18px;
}

#newsoftheday img{
width: 100%;
}

.tab {
	display: block;
	height: 0px;
	margin-bottom: 0px;
}


.tab .watcher img{
	display: block;
	height: 0px;
	margin-bottom: 0px;
}

.tab.on .watcher img{
	display: block;
	height: 48px;
	margin-bottom: 0px;
}

#runCode {
	/*margin-top: 10px;*/
}
  
  #savebtn{
	background-color:#219918;
	border-radius:4px;
	outline:0;
	vertical-align:bottom;
	text-align:center;
	box-sizing:border-box;
	border:1px solid #1b5e0a;
	color:white;
  }
  #savebtn:hover{
	background:#1b5e0a;
	border:1px solid #164D08;
	color:white;
  }
#deletebtn{
	/*background-color:#10CCC6;
	border-radius:4px;
	outline:0;
	vertical-align:bottom;
	text-align:center;
	box-sizing:border-box;
	border:1px solid #0DA8A3;
	color:white; 
	padding:7px 30px 5px 30px;*/
  }
  #deletebtn:hover{
	/*background:#0DA8A3;
	border:1px solid #0B8C88;
	color:white; */
  }
  #selector{
	/*background:orange;*/
	/*color:white;*/
	border:1px solid #2E2A2A;
	border-radius:4px;
	padding:7px 30px 7px 30px;
	text-align:center;
	vertical-align:bottom;
  
  }


#clearRunOutput {
	/*margin-top: 10px;*/
}

#run_area {

	border: 5px solid black;
	padding: 20px;
	background-color: white;
	margin-top: 20px;
}

.tab textarea {
	-moz-tab-size:2;
	-o-tab-size:2;
	tab-size:2;
	width: 500px;
	
}

.on {
	display: block;
	border-left: 4px solid black;
	border-right: 4px solid black;
	border-bottom: 4px solid black;
	height: 400px;
}

#usercount {
	margin-bottom: 20px;
}

#runCodeWrap {

		clear: both;
		margin-top: 20px;
}


	.usrMiniInfoWrap {

		position:absolute;
		left:193px;
		top:-10px;
		z-index:100;
		padding-left:30px;
	}

  .usrMiniInfo {
	width:400px;
	
	background:#171617;
	border: 4px solid white;
	float: left;
	padding:20px;
	border-radius:16px;
	text-shadow:1px 1px 0px #525252;

   box-shadow:0px 0px 6px 6px #ccc;
  }
  
  .usrMiniInfo img{
	
	float:right; 
	width:130px;
	height:130px;
	border-radius:7px;
	box-shadow:7px 7px 2px #363636;
	border:2px solid white;

  }
  
  .usrMiniInfo .name {
	font-size:20px;
	font-weight:bold;
	color:white;
	
  }


.tooltipOnHover {
	position: absolute;
	left:0px;
	top:0px;
	background: black;
	color: white;
	padding: 10px;
	border-radius: 10px;
	white-space: nowrap;
}

.tooltipwrapper {

	position: absolute;
	left:0px;
	top: -70px;
}

.arrow-down {
	width: 0; 
	height: 0; 
	border-left: 12px solid transparent;
	border-right: 12px solid transparent;
	
	border-top: 12px solid #000;
	position: absolute;
	top: 40px;
	left: 80px;
}

#inbgcolor, #intextcolor {
	width: 90px;
}

#run_area{
	border:3px solid #1589A1;
	border-radius:5px;
	box-shadow:9px 9px 1px #1F1F1F
 }
  .tab.on{
	border:4px solid #1589A1;
	border-top-left-radius:4px;
	border-top-right-radius:4px;
	box-shadow:7px 7px 3px #1F1F1F
  }
  #log{
	border:3px solid #1589A1;
	border-radius: 5px;
	box-shadow:6px 6px 3px #1F1F1F;
  
  }
  #message{
	border:2px solid black;
	border-top-right-radius:5px;
	border-bottom-right-radius:5px;
	box-shadow:3px 3px 2px #1F1F1F;
  }

b.admin{
	color: #FFA929
}
.system {
	color: #ccc;
}

.error {
	color: red;
}



  .message{
    color:gray;
    font-family:'Aldrich';
    text-align:left;
      
  }
  h1{
    color:white;
    font-family:'Aldrich';
    text-align:center;    
  }
  .text{
    color:white;
  
  }
  .usrName{
    color:black;
    }
    #logout{
    color:white;
    background:#9EFF0D;
    border-radius:4px;
    border:1px solid #68A809;
    
  
  }

  .mouse img{
    border:2px solid #333;
    height:30px;
      width:30px;
    border-radius:4px;
    box-shadow:1px 2px 1px gray;
  }

  .row-fluid {
  	clear: both;
  }
  /*Stuff Being Tested, Stop Copying*/
  
 
@media (max-width: 979px) and (min-width: 768px) {
	.span12 {
		width: 95%;
	}
}


@media (max-width: 480px){

	.usrMiniInfo {
		display: none;
	}
}

@media (min-width: 979px) and (max-width: 1200px) {

 .row-fluid {
		width: 100%;
 }
 .span12 {
	width: 98%;
	margin-right: 0px;
	margin-left: 10px;
 }

 .span8 {
	width: 72%;
	margin-right: 0px;
	margin-left: 20px;
	float: left;
 }

 .span4 {
	width: 25%;
	float: left;
	margin-right: 0px;
	margin-left: 0px;
 }
 

 .span6 {
	width: 45%;
	float: left;
	margin-right: 0px;
	margin-left: 0px;
 }



}
</style>
 
<script>

var Server;

function log(text) {
	$log = $('#log');
	//Add text to log
	$log.append(($log.val() ? "\n" : '') + text);
	//Autoscroll
	$log[0].scrollTop = $log[0].scrollHeight - $log[0].clientHeight;
}

function status(text,altel) {

	if(typeof altel != 'undefined'){

		$(altel).html(text);
	} else {
		$('#status').html(text);
	}
}



function debug(text) {
	if(window.debug_flag){
		console.log(text);	
	}
	
}

function send(data) {
	debug('send : ' + data);
	Server.send('', data);
}

// overview

// user comes to page

// page connects to server

// user enters info

// client calls server to auth

// server sends client response

// if successful show the chatUI

// if not show error message

// once in chat there are a few main features

// chat, typing status, whiteboard (code window) updates

// all users are notified when a user joins or leaves

// all users are notified of chats, typing statuses, etc

// questions?
function sendChat(msg){
	var wrapped = {
		'_m': 'msg',
		'_d': {
			msg: msg
		}
	}
	var data = JSON.stringify(wrapped);
	send(data);
}

function bgChooser(color){
	console.log(color);
	$('body').css('background',color);
}

window.codeEditors = {}

 // set each type of smiley

var smileys = {
  ':)' : 'smile',
  ':(' : 'angry',
  '(angry)' : 'angry',
  ':D' : 'biggrin',
  'B)' : 'cool',
  ':O' : 'ohmy',
  '(blink)' : 'blink',
  '(sleep)' : 'closedeyes',
  '(huh)' : 'huh',
  '(sad)' : 'sad',
  '(beer)' : 'beer',
  '(coffee)' : 'coffee',
  '(kiss)' : 'lips',
  '(rose)' : 'rose',
  '(thumbsup)' : 'thumbup',
  '(thumbsdown)' : 'thumbdown'
 }

 var smileys = {
  ':)' : '25',
  // ':(' : 'angry',
  '(angry)' : '5',
  ':D' : '2',
  // 'B)' : 'cool',
  ':O' : '34',
  '(blink)' : '21',
  '(sleep)' : '31',
  // '(huh)' : 'huh',
  // '(sad)' : 'sad',
  // '(beer)' : 'beer',
  // '(coffee)' : 'coffee',
  '(kiss)' : '16'
  // '(thumbsup)' : 'thumbup',
  // '(thumbsdown)' : 'thumbdown'
 }

function buildEmoticonList(){
	
	var smileys_list = [];
	
	for(var i in smileys){

		var img = '<img title="'+i+'" src="http://png-2.findicons.com/files/icons/963/very_emotional_emoticons/32/32_'+smileys[i]+'.png" />';
		
		smileys_list.push(img);
	}

	return smileys_list.join('');
}

function enableCodeMirrorOnTextArea (el_id,readOnly){
	//'code_window'+res.current_user.id
	var textarea = document.getElementById(el_id);
	
	var codeEditor = CodeMirror.fromTextArea(textarea, {
		mode: "htmlmixed",
		tabSize: 2,
		lineNumbers: true,
		readOnly:readOnly
	});

	codeEditor.on('change',function (editor,changeObj){
		
		// condition prevents sending change events for windows you just watching -_-
		
		if(!editor.options.readOnly){
			//alert('send change ' + editor.doc.cantEdit);
			editor.save();

			var code = editor.getValue();

			if(code.length > 7900){

				alert('Whoa there partner... Keep it under 8000 character please.');

			} else {

					var now = new Date().getTime();
					var diff = now - window.my_last_code_editor_change; 
					
					//debug(diff);
					if(diff < 100) {
						//debug('do not send editor change');
						return true;
						// somehow we still need to send that lst char
						// maybe sync every half second?
					}

					window.my_last_code_editor_change = now;

					send(JSON.stringify({
					'_m': 'whiteboard',
					'_d': {
						'code': editor.getValue(),
						'codingPosition' : changeObj.from
					}
				}));	
			}

				
		} else {
			//alert('not sent');	
		}
		
		//debug(editor);
	});

	codeEditor.on('cursorActivity',function (editor){
		
		//alert('onCursorActivity');
		  
	   //var hlLine = editor.addLineClass(editor.getCursor().line,'wrap', "activeline");

	});

	window.codeEditors[el_id] = codeEditor;

	return codeEditor;	
}

function replaceEmoticons(text){

	// replace each smiley with an image
	
	for(var i in smileys){
		var img = '<img src="http://png-2.findicons.com/files/icons/963/very_emotional_emoticons/32/32_'+smileys[i]+'.png" />';
		text = text.replace(i,img);
	}
	
	return text; 
}

function appendScript(script){

	var code = script[2]
	var id = script[0]
	var name = script[6]
	var option = document.createElement("option");

	window.ver['script_'+id] = code;

	option.text = name;
	option.value = 'script_'+id;

	$('#selector').append(option);

	return option.value;
}

function saveScript(){

	//log('<div class="system message">.tab[rel="user_'+window.current_user.id + '"] textarea</div>');

	var code = $('.tab[rel="user_'+window.current_user.id + '"] textarea').val(); 

	var script_var = $('#selector :selected').val();
	script_id = $('#selector :selected').val().replace('script_','');

	window.ver[script_var] = code;

	if(code.length > 7900){

		alert('Whoa there partner... Keep it under 8000 character please.');

	} else {
		send(JSON.stringify({
			'_m': 'script',
			'_d': {
				'script_id' : script_id,
				'code': code,
				'action' : 'save'
			}
		}));
	}
}

  function addNewScript(){
	var code = $('.tab.on textarea').val(); 
	
	var name = prompt('What would you like to call this script?');
	//var name = 'Save Test ' + new Date().getTime();
	
	if(name){
		if(name.length){
			window.lastScriptSave = {name:name,code:code}

			send(JSON.stringify({
				'_m': 'script',
				'_d': {
					'name': name,
					'code': code,
					'action' : 'add'
				}
			}));
			
			$('#savebtn,#deletebtn').show();
		} else {
			alert('Please provide a script name');	
		}	
	}
  }

	function selectScript(code_array){

		var number = $(code_array).val();
		
		editor = window.codeEditors['code_window'+window.current_user.id];
			
		if(number != 'Select a script...'){

			var selected_code = window.ver[number];

			editor.setValue(selected_code);	
			
			$('#savebtn, #deletebtn').show();
		} else {

			editor.setValue('');
			$('#savebtn, #deletebtn').hide();	
		}
	}

function deleteScript(){
	conf = confirm("Are you sure you want to delete?");
	if(conf == true){
	
			//grab selected option
			selector_option = $('#selector :selected');
			script_id = $('#selector :selected').val().replace('script_','');

			selector_option.remove();
	
			delete window.ver[script_id];
			editor = window.codeEditors['code_window'+window.current_user.id];
			editor.setValue('');
			editor.save();
			$('#savebtn, #deletebtn').hide();
			if(script_id != 'Select a script...'){

				send(JSON.stringify({
					'_m': 'script',
					'_d': {
						'script_id': script_id,
						'action' : 'delete'
						}
				}));	
			}
	}
	 else{
		alert('Nice save');  
	 }
 }

$(document).ready(function() {
	
	//status('Connecting...');
	Server = new FancyWebSocket('ws://codechat.lytsp33d.com:8080');

	$('#login_form').submit(function(e) {
				
		// validate username
		// Contributed by: Ben from Maine

		if ($('#login_username').val().trim() == ""){
		
			status('<div class="error">No user name detected, please type a username.</div>');
			return false;
		
		} else {
			var username = $('#login_username').val().trim();
		}
		
		var password = $('#login_password').val();
		
		send(JSON.stringify({
			'_m': 'auth',
			'_d': {
				u: username,
				p: password
			}
		}));

		$('#login_password').val('');
		$('#logging_in').html('logging in...');

		return false;
	});

	$('#requestpassreset_form').submit(function(e) {
				
		// validate email
		// Contributed by: Ben from Maine

		if ($('#requestpassreset_email').val().trim() == ""){
		
			status('<div class="error">No email detected, please type an email address.</div>','#requestpassreset_status');
			return false;
		
		} else {
			var email = $('#requestpassreset_email').val().trim();
		}
		
		send(JSON.stringify({
    		'_m' : 'requestpassreset',
   			 'e': email
  		}));

		return false;
	});

	$('#passreset_form').submit(function(e) {
				
		// validate email
		// Contributed by: Ben from Maine

		var tempkey = $('#passreset_tempkey').val();
		var password = $('#passreset_password').val();
		var confirm = $('#passreset_confirm').val();
		
		if(password == confirm){
			
			//$('matchpword').innerHTML	="OK!";

		} else {
			$('#passreset_status').html('<div class="error">Passwords do not match.</div>');
			return false;
		}
		
		send(JSON.stringify({
    		'_m' : 'passreset',
   			 't': tempkey,
   			 'p': password,
   			 'c': confirm
  		}));

		return false;
	});

	// register password checker
	// Contributed by: Ben from Maine

	function pass(){
		
		setTimeout(function (){
			
			var first = $('#reg_password').val();
			var second = $('#reg_passwordconfirm').val();

			if(first == second){
				$('#reg_passwordconfirm').css('background-color','green');
				debug('matches');

			} else {
				
				//$('#matchpword').html("<span style='color:red'>Your passwords dont match</span>");
				$('#reg_passwordconfirm').css('background-color','red');
				debug('does not match');
			}

		},100);
		
	}

function Blink(origState,state1,state2,el,property,obj,flag,interval){
   
  if (obj[flag]){
	
	$(el).css(property,state1);
	
	setTimeout(function(){
	  
	  Blink(origState,state2,state1,el,property,obj,flag,interval);
	
	},interval);
  } else {
	
		$(el).css(property,$(el).attr('availability'));
	
  }
}
  
	$('#reg_passwordconfirm').keyup(function(e) {
		pass();
	});

	$('#reg_form').submit(function(e) {
				
		// validate username
		// Contributed by: Ben from Maine

		if ($('#reg_username').val().trim() == ""){
		
			status('<div class="error">No user name detected, please type a username.</div>','#reg_status');
			return false;
		
		} else {
			var username = $('#reg_username').val().trim();
		}

		if ($('#reg_email').val().trim() == ""){
		
			status('<div class="error">No email detected, please type an email address.</div>','#reg_status');
			return false;
		
		} else {
			var email = $('#reg_email').val().trim();
		}
		
		var password = $('#reg_password').val();
		var confirm = $('#reg_passwordconfirm').val();
		

		if(password == confirm){
			
			//$('matchpword').innerHTML	="OK!";

		} else {
			$('#reg_status').html('<div class="error">Passwords do not match.</div>');
			return false;
		}

		send(JSON.stringify({
			'_m': 'reg',
			'_d': {
				u: username,
				p: password,
				c: confirm,
				e: email
			}
		}));

		//$('#reg_password').val('');
		$('#logging_in').html('registering...');

		return false;
	});

	var commands = ['/back','/away','/brb'];

	$('#message').keydown(function(e) {
		
		var msg_text = this.value;
		var keyCode = (window.event) ? e.which : e.keyCode;

		if (keyCode == 13 && msg_text) {
			debug(commands.indexOf(msg_text));
			if(commands.indexOf(msg_text) > -1){
				//handleCommand();


				if(1){
						var new_status = msg_text.replace('/','');
						window.my_status = new_status;
						send(JSON.stringify({
						'_m': 'availability',
						'_d': {
							'changeTo': new_status
						 }
					}));

					window['user_'+window.current_user.id+'_typing'] = false;
					//$('#user_'+window.current_user.id+' #typing').remove();
				}
			} else {
					//alert(window.current_user.id);
					var status = $('#user_'+window.current_user.id + ' .usrStatus').css('background-color');
					if(window.my_status == 'brb' || window.my_status == 'away'){
						window.my_status = 'available';
						send(JSON.stringify({
							'_m': 'availability',
							'_d': {
								'changeTo': 'available'
							 }
						}));

					}
					
				sendChat(msg_text);
			}

				
			$(this).val('');
			window.typing = 'no';

		} else {

			setTimeout(function (){ // wait until after value changes

				var msg_text = $('#message').val(); 
				var change = false;

				if(window.typing == 'no' && msg_text){
					window.typing = 'yes';
					change = true;
				}

				if(window.typing == 'yes' && !msg_text){
					window.typing = 'no';
					change = true;
				}

				if(change){

					send(JSON.stringify({
						'_m': 'typing',
						'_d': {
							'status': window.typing
						 }
					}));
				}

			},100);

		}
	});

	// Highlight Script on new message
	// Contributed by: Ali Sentas of Turkey
  var prevcontent = "";
	function Message(){
			try{
			this.author =$(".message:last-child b").html().trim().replace(":","");
		this.content = $(".message:last-child").html().split("</b>")[1].trim();
				
	  } catch(e){
		// do mthing
	  }
	}
	function init(){
	  var msg = new Message();
	  $(".usrName").each(function(){
		var user = $(this).html().trim();
		if(msg.author === user && prevcontent !== msg.content){
		  $(this).siblings(".usrStatus").effect("highlight",{},1000,function (){
			$(this).css('background',$(this).attr('availability'));
		  });
		  prevcontent = msg.content;
		}
	  })
	}
  function callback(){
	 setTimeout(function() {
		$(this).removeAttr( "style" ).hide().fadeIn();
		}, 1000 );
	}
  //var interval = setInterval(init,500);



	$('#inbgcolor').change(function() {
		var color = this.value;
		if(color.indexOf('#') == -1 && color.indexOf('url') == -1){
			color = '#'+ color;
		}
		//if (e.keyCode == 13 && color) {
		//console.log('change '+color);
		bgChooser(color);
		//}
	}).keypress(function(e) {

		var color = this.value;

		if (e.keyCode == 13 && color) {
			//console.log('change '+color);
			bgChooser(color);
		}
	}).blur(function() {

		var color = this.value;
		
		bgChooser(color);
		
	});

	$('#intextcolor').change(function() {
		var color = this.value;
		if(color.indexOf('#') == -1){
			color = '#'+ color;
		}
		//if (e.keyCode == 13 && color) {
		//console.log('change '+color);
		textColorChooser(color);
		//}
	}).keypress(function(e) {
		var color = this.value;
		if (e.keyCode == 13 && color) {
			textColorChooser(color);
		}
	}).blur(function() {

		var color = this.value;
		
		textColorChooser(color);
		
	});

function textColorChooser(color){
	
	if(color.indexOf('#') == -1){
		color = '#'+ color;
	}

	//console.log('change '+color);

	window.textcolorOverride = color;
	$('.message, h1').css('color',color);
	//$('input,textarea,button').css('color','black');
}


function bindUsers(){

	//console.log('bindusers');
	$('.userItem').unbind('click');

	$( "#newsoftheday" ).draggable();

	$('#newsoftheday').click(function (){
		$(this).hide();
	});

	$('.userItem').click(function() {

		$('.userItem').removeClass('selected');
		$(this).addClass('selected');

		var id = $(this).attr('id');
		var idnum = id.replace('user_','');

		$('.tab').removeClass('on');
		$('.tab[rel="'+id+'"]').addClass('on');

		if(idnum == window.current_user.id){
			//log('it\'s you!');
			var script_var = $('#selector :selected').val();
			script_id = $('#selector :selected').val().replace('script_','');
			if(script_id != 'Select a script...'){
				//log('asdf');
				$('#savebtn,#deletebtn').show();
			}
		} else {
			$('#savebtn,#deletebtn').hide();
		}

		debug('redraw code_window'+idnum);
		window.codeEditors['code_window'+idnum].doc.cm.refresh();

		send(JSON.stringify({
			'_m': 'whiteboard_viewing',
			'_d': {
				'viewing': id
			}
		}));
	});

  $('.userItem').unbind('hover');
  $(".userItem").hover(function(){
	var username = $(this).children(".usrName").html();
	var profilpic = $(this).children("img").attr("src") !== undefined ? $(this).children("img").attr("src") : "/avatar_default.jpg";
	var status = $(this).children(".usrStatus").attr("availability") == "green" ? "Online" : "Away";
	var coin = $(this).attr('coin');
	$(this).append("<div class='usrMiniInfoWrap'><div class='usrMiniInfo'><img height='200' src='"
			  + profilpic + "' /><div class=\"name\">"
			  + username + "<span style=\"color:"
			  +$(this).children(".usrStatus").attr("availability")
			  +"\">(" + status+')</span><div class="coin">'+coin+' <span class="currency-symbol">₡</span>odeCoins</div></div><!--<a class="btn btn-primary" onclick="alert(\'Test!\');">Test link</a>--></div>');
  },function(){
		var self = $(this);
	   setTimeout(function (){
		self.find(".usrMiniInfoWrap").remove();
	   
		},100);
  });

	$('.NOTMORETOOLTIPS').hover(function(){ //hasHoverTooltip

		parent = $(this);

		setTimeout(function (){
			
			parent.append('<div class="tooltipwrapper"><div class="tooltipOnHover">'
			+parent.attr('tooltip')+'</div><div class="arrow-down"></div></div>')

			$('.usrCodeLine .tooltipwrapper').css('left','-137px');

			$('.usrCodeLine .arrow-down').css('left','130px');

			$('.usrStatus .tooltipwrapper').css('left','-10px');

			$('.usrStatus .arrow-down').css('left','10px');

			$('.usrName .tooltipwrapper').css('left','-20px');

			$('.usrName .arrow-down').css('left','20px');	
		},500);
		
	
	},function (){
		//alert('out');
		setTimeout(function (){
			$('.tooltipwrapper').remove();
		},550);
		//$('.tooltipOnHover').fadeOut();
		// $('.arrow-down').fadeOut(function (){
				
		// });
	});

	 // Sortable List
	 // Ali Sentas of Turkey

	$("#userList").sortable({
	revert: true
  });
  $("#userList div").disableSelection();
}

$('#runCode').click(function() {
	runCode();
	window.runcodeIntiated = true;
	saveScript();
});


$('#requestpassresetBtn').click(function() {
	$('#loginUI').hide();
	$('#requestpassresetUI').show();
});

$('#update_avatar').click(function() {

	var url = prompt("Where is your avatar located on the internet (ex. http://)?");
	if(url){
		if(url.length) // TODO: validate url with regex
		updateAvatar(url);
	}
});

$('#clearRunOutput').click(function() {
		clearRunOutput();
});




function updateAvatar(url){
	$('#my_avatar').attr('src',url);
	$('#my_avatar').attr('src',url);
	send(JSON.stringify({
		'_m': 'avatar',
		'_d': {
			'avatar': url
		}
	}));	
}

function runCode(){

	console.log('Your code has been run!');

	try {

		//var s = document.getElementById('fred');
		

	  var custom_code = $('.tab.on textarea').val();
		
	  // include processing
	  //var code_string = '<!DOCTYPE html><html><head><scr'+'ipt src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></scr'+'ipt><scr'+'ipt src="/processing-1.4.1.min.js"></scr'+'ipt></head><body>' + custom_code + '</body></html>';

		//s.contentDocument.write(code_string);
		//debug(s.contentDocument);
		$('#run_area').html(custom_code); 
	}
	catch (e){
		
		var vDebug = "";
	    for (var prop in e) 
	    {  
	       vDebug += "property: "+ prop+ " value: ["+ e[prop]+ "]\n"; 
	    } 
	    vDebug += "toString(): " + " value: [" + e.toString() + "]";

	    alert(vDebug);
			console.log(e);
	}
	
}


function clearRunOutput(){

	console.log('clearRunOutput');
  
  $('#run_area').html('');
	
}


	//Let the user know we're connected
	Server.bind('open', function() {
		//status('Connected!');
		$('#requestpassresetUI').hide();
		$('#passresetUI').hide();
		//$('#login_username').focus();
		


		send(JSON.stringify({
			'_m': 'auth',
			'_d': {
				'cookie': $.cookie('code-haven')	
			}
		}));

	});

	//OH NOES! Disconnection occurred.
	Server.bind('close', function(data) {
		log('<div class="system message">Disconnected from server!</div>');
		//alert('Disconnected!');
		//$('#loginUI').hide();
		//$('#chatUI').hide();
	});

	// displayTime for messages or anything else
	// Contributed by: Ben from Maine

function displayTime() {
	var str = "";

	var currentTime = new Date()
	var hours = currentTime.getHours()
	var minutes = currentTime.getMinutes()
	var seconds = currentTime.getSeconds()

	if (minutes < 10) {
		minutes = "0" + minutes
	}
	if (seconds < 10) {
		seconds = "0" + seconds
	}
	str += hours + ":" + minutes + ":" + seconds + " ";
	if(hours > 11){
		//str += "PM"
	} else {
	   // str += "AM"
	}
	return str;
}

function showLoggedinUI(res) {

		$('#loginUI').hide();

		$('#chatUI').show();
		$('#message').focus();
		$('#logout').click(function (){
			logout();	
		});
		var smileys_list = buildEmoticonList();

		$('#msgWrap').append(smileys_list);

		$('#msgWrap img').click(function (){
			var icon_text = $(this).attr('title');

			$('#message').val($('#message').val() + icon_text);
			$('#message').focus();
		});

		$('#savebtn, #deletebtn').hide();

		toggleSolarSystem();

		show5();

		status('');

		if (res.userlist.length > 0) {

			var demo = "<!"
			+"--\n\ncode HTML CSS and JavaScript here\n\nthen click run :)\n\nclick someone else's name to see their code! \n\n-"+"->\n\n<scri"
			+"pt>\n\n$('#foobar').html('Welcome to the chat room!');\n\n</scr"
			+"ipt>\n\n<st"
			+"yle>\n\n#foobar {\n\n\tborder: 1px solid cyan;\n\tpadding: 15px 0px 15px 0px;\n\tborder-radius:10px;\n\tbox-shadow:14px 14px 2px #888888;\n\tbackground:black;\n\tcolor:white;\n\ttext-align:center;\n\tfont-size:20px;\n\ttext-shadow:1px 1px 1px #888888;\n\t\n}\n\n#foobar:hover{\n\t\n\tbackground:white;\n\tcolor:black;\n\tborder:1px solid turquoise;\n\tbox-shadow:14px 14px 2px #282828;\n\ttext-shadow:1px 1px 0px #1E1E1E;\n\n}\n\n</st"
			+"yle>\n\n<div id=\"foobar\"></div>";
			//demo = '';
			//var demo = 'hi';
			for (var i in res.userlist) {
				var name = res.userlist[i].name;
				var id = res.userlist[i].id;
				var avatar = res.userlist[i].avatar;
				var whiteboard = res.userlist[i].whiteboard;
				var codingPosition = res.userlist[i].codingPosition;
				var tagged_it = res.userlist[i].tagged_it;
				var coin = res.userlist[i].coin;
				var avatar_img = "";
				

				//$('#run_area').append('tagged_it '+ tagged_it);
				if(tagged_it == 'true'){
					log('<div class="system message">'+name+' is it!</div>');
					window.tagged_it = id;
				}

				if(codingPosition){
					codingLine = parseInt(codingPosition.line) + 1;
				} else {
					
					codingLine = '&nbsp;';
				}

				if(avatar){
					avatar_img = "<img src=\""+avatar+"\"/>";
				} else {
					avatar = "/avatar_default.jpg";	
				}

				if(coin){
					coin = ' coin="'+coin+'"';
				} else {
					coin = "";	
				}

				var availability = res.userlist[i].availability;
			
				var availability_color = window.availability_options[availability];

				var readonly = 'readonly';
				var selected = '';
				var editor_readnly = true;
				var tooltip_text = 'Watch '+ name +' code!';
				if(!whiteboard) {
					whiteboard = "\n";
				}
				window.current_user = res.current_user;
				if(res.current_user.id == id) {

					readonly= '';
					selected = 'selected';
					editor_readnly = false;
					tooltip_text = 'Edit your code!';
					my_avatar.src = avatar;
					whiteboard = demo;
				}

				var userItem = '<div id="user_'
				+ id + '" class="userItem usr '+selected
				+' span9" '+coin+'><div class="usrStatus span2 hasHoverTooltip" availability="'
				+availability_color+'" tooltip="Status (here/away)" style="background-color:'
				+availability_color+'">&nbsp;</div>'+avatar_img+'<div class="usrName hasHoverTooltip" tooltip="'+tooltip_text+'">'
				+ name + '</div><div class="usrCodeLine span2 hasHoverTooltip"'
				+' tooltip="Current line number">'+codingLine+'</div></div>';

				var userWhiteboard = '<div class="tab" rel="user_' + id
				+ '"><textarea class="code_window" id="code_window'+ id
				+'" '+readonly+' placeholder="// code here and then click run :)">'
				+whiteboard+'</textarea></div>';

				$('#userList').append(userItem);				
				$('#userWhiteboards').append(userWhiteboard);

				if(!editor_readnly){
					$('.tab[rel="user_'+id+'"]').addClass('on');	
				}
				
				var codeEditor = enableCodeMirrorOnTextArea('code_window'+id,editor_readnly);

				//debug(whiteboard);
			}

			window.ver = {};

			debug('building versions');

			for(var i in res.scripts){
				appendScript(res.scripts[i]);
			}

		} else {
			console.log('Userlist exception: expected at least one')
		}

		// bind self's white baord to changes            		 
		 //var selfs_textarea = '.tab[rel="user_'+res.current_user.id+'"] textarea';
			
			// $(selfs_textarea).keydown(function(e) {
					
			// 		setTimeout(function (){
						
					
			// 		// var char = $.getChar(e);

			// 		// if(String.fromCharCode(char) != '\u0000'){

			// 		// send whitespace chr
					
			// 		//var codingPosition = window.codeEditors['code_window'+res.current_user.id].getCursor();
			// 		// String.fromCharCode(char)

			// 		//var code = $(selfs_textarea).val();

			// 			 // send(JSON.stringify({
			// 				// 	'_m': 'whiteboard',
			// 				// 	'_d': {
			// 				// 		'code': code,
			// 				// 		'codingPosition': codingPosition
			// 				// 	}
			// 				// }));
			// 		//}

			// 		},100);
			// });

		bindUsers();
}

function displayErrors(errors,altel){
	
	var status_text = '';
	
	for(var i in errors){
		status_text += '<div class="error">'+errors[i]+'</div>';
	}
	
	status(status_text,altel);
	
	if(status_text == ''){
		status('<div class="error">Login incorrect... Please try again</div>');	
		alert('If you have already registered please register again! Sorry for the inconvenience.');
	} else if (status_text.indexOf('Auto login failed') > -1) {
		status('',altel);
	}				
}



	//Handle any messages sent from server
	Server.bind('message', function(payload) {
		
		debug('recv: ' + payload);
		
		try {
			var res = JSON.parse(payload);
		}
		catch (e){
			debug('malformed data');
		}
		
		switch (res._m) {
		
		case 'tag_start':
			$('.mouse').css('z-index','150');
			var name = $('#user_'+res.it+' .usrName').html();
			alert('TAG STARTED! '+name+ ' is it!!!');
			log('<div class="system message">TAG STARTED! '+name+' is it!!!</div>');
			$('#mouse'+res.it+ '').css('border','5px solid cyan');
			if(!window.tag_starter){
				doTimer(res.duration);
			}

		break;
		
		case 'tag_end':
			alert('Tag has ended... :(');
			log('<div class="system message">Tag has ended... :(</div>');
			$('.mouse').css('border','none');
			$('.mouse').css('z-index','1');
		break;

		case 'reg':
			if(res.status == 'true'){
				debug('autologin');

				$('#login_username').val($('#reg_username').val());
				$('#login_password').val($('#reg_password').val()); 
				$('#login_form').submit();
				$('#reg_password').val('');
				$('#login_password').val('');
			} else {
				//alert(res.errors);
				displayErrors(res.errors,'#reg_status');
			}
		break;
		case 'status':
			var users_online = "There ";
			if (res.users_online == 1) {
				users_online += 'is 1 user';
			} else {
				users_online += 'are ' + res.users_online + ' users';
			}
			users_online += ' logged in right now!';
			$('#users_online').html(users_online);

			var users_total = "There ";
			if (res.users_total == 1) {
				users_total += 'is 1 user';
			} else {
				users_total += 'are ' + res.users_total + ' users';
			}
			users_total += ' signed up!';
			$('#users_total').html(users_total);

			// if(res.auth == 'yes'){
	  //         //auto login
	  //         $('#chatUI').show();
	  //       } else {
	  //         //show login form 
	  //         //
	  //         $('#loginUI').show();auth
	  //         $('#login_username').focus();
	  //       }

			break;
		
		case 'msg':
			
			var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
			var exp2 = /([^' "\/.][a-z\-_0-9]*\.[a-z]{2,3}[-A-Za-z0-9+&@#\/%?=~_|!:,.;]*[-A-Za-z0-9+&@#\/%=~_|]*[^' "][a-z\-_0-9]*)/ig;
		

			// our handy staff array
			var staff = ['Zach','Ben','crinderer','Kyle','Ali'];

			// lets find out if the name is in the array

			// indexOf returns the position of the first instance found
			// name = Zach would return 0 cause it's first, ben 1, crind 2

			var admin_class = ''; // not an admin by default

			if(staff.indexOf(res._d.user.name) > -1){ // -1 means it wasn't found at all

			// this is a staff member

			// now lets add something to the html

			// so how do we want to do that... lets add a class to the <b>
			//debug('wr\'re staff');
			admin_class = "admin";

			}
  

			res._d.msg = res._d.msg.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(exp, "<a target=\"_blank\" href='$1'>$1</a>"); //.replace(exp2, " <a target=\"_blank\" href='$1'>$1</a>")
			res._d.msg = replaceEmoticons(res._d.msg);
			log('<div class="message" title="'+displayTime()+'"> <b class="'+admin_class+'">' + res._d.user.name + ":</b> <span class=\"text\">" + res._d.msg + "</span></div>");
			
			if(window['textcolorOverride']){
				textColorChooser(window['textcolorOverride']);
			}

			window['user_'+res._d.user.id+'_typing'] = false;

			//$('#user_'+res._d.user.id+' #typing').remove();

			if (!window.isActive) {
				window.origTitle = $('title').html();
				if(window.titleChanger){
					//console.log('titleChanger set');
					//console.log(window.titleChanger);
				} else {
				
					window.titleChanger = setInterval(function() {
						if ($('title').html() == window.origTitle && !window.isActive) {
							$('title').html('New Message...');
						} else {
							$('title').html(window.origTitle);
						}
					}, 2000);
				}
				document.getElementById('msgsound').play();
				if(!window['alerted'] && !window['noalert']){
					//alert('New Message...');
					window.alerted = 1;
				}
			}
		 
			break;

		case 'auth':

			if (res.status == 'true') {
				showLoggedinUI(res);
				if($("#login_username").val().trim().length && res.user_type == 'registered'){
					$.cookie("code-haven", $("#login_username").val().trim(),{expires: 30, path:'/'});
				}
			} else {
				displayErrors(res.errors);

				$('#loginUI').show();
				$('#login_username').focus();

				if($('#passreset_tempkey').val().length){

					//alert('show passreset form');
					$('#passresetUI').show();
					$('#loginUI').hide();
				}
			}

			$('#logging_in').html('');

			break;

		case 'user':

			document.getElementById('joinsound').play();
			
			var name = res._d.user.name;
			var id = res._d.user.id;
			var coin = res._d.user.coin;

			var avatar = res._d.user.avatar;
			var avatar_img = "";
			if(avatar){
				avatar_img = "<img src=\""+avatar+"\"/>";
			}

			if(coin){
				coin = ' coin="'+coin+'"';
			} else {
				coin = "";	
			}

			if (res._d.status == 'joined') {
				log('<div class="system message">' + name + " joined!</div>");
				$('#userList').append('<div id="user_' + id
				 + '" class="userItem usr span9" '+coin+'><div class="usrStatus span2 hasHoverTooltip" availability="green" tooltip="Status (here/away)">&nbsp;</div>'+avatar_img+'<div class="usrName hasHoverTooltip" tooltip="Watch '+ name +' code!">' + name + '</div><div class="usrCodeLine span2 hasHoverTooltip" tooltip="Current line number">&nbsp;</div></div>');
				$('#userWhiteboards').append('<div class="tab" rel="user_' + id + '"><textarea id="code_window'+id+'" readonly>' + '</textarea></div>');
				//$(".userItem").popover();
				bindUsers();
				enableCodeMirrorOnTextArea('code_window'+id,true);
			} else {
				log('<div class="system message">' + name + " left!</div>");
				$('#user_' + id).remove();
				$('.tab[rel="user_'+id+'"]').remove();
				$('.watcher[rel="user_'+id+'"]').remove();
				$('#mouse'+id).remove();
			}
			break;

		case 'typing':
			
			var el = '#user_'+res._d.user_id + ' .usrStatus';
			var var_typing = 'user_'+res._d.user_id+'_typing';
			var prop = 'background';
			var orig = $(el).css(prop); 
			
			if(res._d.status == 'yes'){
				//$('#user_'+res._d.user_id).append('<span id="typing">...</span>');
				//alert('blick '+res._d.user_id);
			
				window[var_typing] = true;

				Blink(orig,'#FFD68F',orig,el,prop,window,var_typing,300);

			} else {
					//alert('stop ' +var_typing);
					window[var_typing] = false;
					//$('#user_'+res._d.user_id+' #typing').remove();
					
			}
			break;

		case 'focus':
			var id = res.user_id;
			var name = $('#user_'+id+' .usrName').html();

			if(id != window.current_user.id){
				var m_id = 'focus'+id;
				var el = '#settings #'+m_id;
				var m_el = '<div id="'+m_id+'" class="focus" style="color:white"><img title="'+id+'" src="http://www.talkdesi.com/chatsupport/talkdesi-icons/smile.gif"></div>';
				var status = res.status;

				if($(el).length == 0){
					$('#settings').append(m_el);	
				}
				if(status == 'true'){
					$(el).html(name + " is focused");	
				} else {
					$(el).html(name + " is not focused");
				}
					
			}
		break;
		case 'mouse':

			var id = res.user_id;
			var name = $('#user_'+id+' .usrName').html();
			var avatar = $('#user_'+id+' img').attr('src');

			if(id != window.current_user.id && name){
				//alert('id'+id+window.current_user.id);
				if(!avatar){
					avatar = 'http://www.talkdesi.com/chatsupport/talkdesi-icons/smile.gif';
				}
				var m_id = 'mouse'+id;
				var el = '#settings #'+m_id;
				var m_el = '<div id="'+m_id+'" class="mouse"><img title="'+name+'" src="'+avatar+'" width="20px" height="20px"></div>';
				var x = res.x;
				var y = res.y;

				if($(el).length == 0){
					$('#settings').append(m_el);	
				}

				$(el).css({
					left: x,
					top: y
				});

				// if(id == window.tag_it){

				// 	if(window.my_coords.x >= x && window.my_coords.x <= (x+20) && window.my_coords.y >= y && window.my_coords.y <= (y+20)){
						
				// 		//sendChat(window.current_user.name + ' was tagged by ' + name);
				// 		//window.tag_it = window.current_user.id;
				// 	}

				// }

				window.participants[id] = {x:x,y:y,id:id,name:name};
			}
			break;

		case 'requestpassreset':

			if(res.status == 'true'){

				alert('Great! Please check your email for further instructions');
				window.location.href = window.location.href;
			} else {
				displayErrors(res.errors,'#requestpassreset_status');
			}

			break;
		case 'passreset':

			if(res.status == 'true'){

				alert('Sweet! You can now login with your new password.');
				window.location.href = '/';
			} else {
				displayErrors(res.errors,'#passreset_status');
			}

			break;
		case 'whiteboard':
				//console.log(res._d.code);
				//$('.tab[rel="user_'+res._d.user_id+'"] textarea').val(res._d.code);
				//debug(res._d.user_id+ 'is coding');
				//debug($('#user_'+res._d.user_id + ' coding').length);
				//var linInt = parseInt(res._d.code.from.line) + 1;
				var linInt = parseInt(res._d.codingPosition.line) + 1;
				$('#user_'+res._d.user_id + ' .usrCodeLine').html(linInt);

				// prevents upating own code on broadcast 
				//debug(res._d.user_id + ' ' + window.current_user.id);
				if(res._d.user_id != window.current_user.id) {
					editor = window.codeEditors['code_window'+res._d.user_id];
					//debug('going to update whiteboard');
					//whiteboard_updats++;

					//editor.replaceRange(res._d.code.text,res._d.code.from);
					// use delete info calculate new value
					// but what about syncing
					// when they join the need the latest
					// and we need to error check if the timing is not right
					// 						
					editor.setValue(res._d.code);
					editor.save();
					editor.scrollIntoView(res._d.codingPosition);
				}
				break;
				case 'tagged':
					if(res.status == 'true'){
						var name = $('#user_'+res.tagged+ ' .usrName').html();
						$('.mouse').css('border','none');
						$('#mouse'+res.tagged+ '').css('border','5px solid cyan');
						log('<div class="system message">'+name+' is it!!!</div>');
					}

				break;
				case 'whiteboard_viewing':

					var viewer_id = res._d.user_id; // the person who is doing the viewing
					var viewee_id = res._d.now_viewing;
					var was_viewing_id = res._d.was_viewing;

					var was_viewing_watchers = res._d.was_viewing_watchers; // full watcher arrays for the changed people
					var now_viewing_watchers = res._d.now_viewing_watchers; // full watcher arrays for the changed people

					var viewer_name = $('#user_'+viewer_id +' .usrName').html();
					var viewee_name = $('#user_'+viewee_id +' .usrName').html();
					var prev_viewee_name = $('#user_'+was_viewing_id +' .usrName').html();
					
					
					// general ideas
					// somewhere there is a visible array of watchers for each
					// user.. where should it go?

					// whereever it is we need to update the model with the array info
					var watcher_model = '<div class="watcher" rel="user__id_"><img title="_name_" src="_src_"></div>';
					var now_viewing_watchers_code = '';

					for(var i in now_viewing_watchers){

						// list watchers
						var id = now_viewing_watchers[i];
						var src = $('#user_'+id+' img').attr('src');

						if(!src){
							src = 'http://farts.typepad.com/photos/uncategorized/cat_fart.jpg';
						}
						if(id != viewee_id){

							var tpl_vars = {
								id: id,
								name: $('#user_'+id+' .usrName').html(),
								src: src
							}
						
							var watcher_code = watcher_model;
							
							for(var i in tpl_vars){
								watcher_code = watcher_code.replace('_'+i+'_',tpl_vars[i]);
							}

							now_viewing_watchers_code += watcher_code;
						}
					}

					var was_viewing_watchers_code = '';
					for(var i in was_viewing_watchers){

						// list watchers
						var id = was_viewing_watchers[i];

						var src = $('#user_'+id+' img').attr('src');
						var name = $('#user_'+id+' .usrName').html();
						if(id != was_viewing_id){

							if(name){
		
								if(!src){
									src = 'http://farts.typepad.com/photos/uncategorized/cat_fart.jpg';
								}

								var tpl_vars = {
									id: id,
									name: $('#user_'+id+' .usrName').html(),
									src: src
								}
								
								var watcher_code = watcher_model;
								
								for(var i in tpl_vars){
									watcher_code = watcher_code.replace('_'+i+'_',tpl_vars[i]);
								}

								was_viewing_watchers_code += watcher_code;
							}

						}
					}

					if(!$('#user_'+viewee_id+'_watchers').length){
						$('.tab[rel="user_'+viewee_id+'"]').append('<div id="user_'+viewee_id+'_watchers" class="watcherWrap"></div>');
					}

					$('#user_'+viewee_id+'_watchers').html(now_viewing_watchers_code);


					if(was_viewing_id){
						if(!$('#user_'+was_viewing_id+'_watchers').length){
							$('.tab[rel="user_'+viewee_id+'"]').append('<div id="user_'+was_viewing_id+'_watchers" class="watcherWrap"></div>');
						}

						$('#user_'+was_viewing_id+'_watchers').html(was_viewing_watchers_code);
					}
					
					var prev_watching_string = '';
					if(prev_viewee_name != null) {
						prev_watching_string = '(who was previously watching '+prev_viewee_name+')';

					}

					var my_id = window.current_user.id;

					if(viewee_id == my_id && viewer_id != my_id){
						
						if(window.watchers.indexOf(viewer_id) < 0){
							log('<div class="system message">' + viewer_name + ' ' + prev_watching_string + ' is watching you code!</div>');
							window.watchers.push(viewer_id);
						}
						
					} else if(viewee_id != viewer_id && viewer_id != my_id) {

						window.watchers.splice(window.watchers.indexOf(viewer_id), 1);	
						log('<div class="system message">' + viewer_name + ' ' + prev_watching_string+ ' is watching '+ viewee_name +' code!</div>');
					}

				break;
				case 'availability':
					
					var color = window.availability_options[res._d.user.availability];

					if(res._d.user.availability == 'brb') {
						res._d.user.availability = 'away';
					}
					log('<div class="system message">' + res._d.user.name + " is "+res._d.user.availability+"!</div>");

					$('#user_'+res._d.user.id+' .usrStatus').attr('availability',color).css('background-color',color);
					
					window['user_'+res._d.user.id+'_typing'] = false;

				break;

				case 'avatar':
					//alert('update avatar');
					$('#user_'+res._d.user_id + ' img').attr('src',res._d.avatar);

				break

				case 'script':

					switch(res._d.action){
						
						case 'add':
							var new_val = appendScript([
									res._d.script_id,
									'',
									window.lastScriptSave.code,
									'',
									'',
									'',
									window.lastScriptSave.name
							]);
							$('#selector').val(new_val);
						break;
						case 'save':
							if(!window.runcodeIntiated){
								alert('Script saved!');
							}
							
							window.runcodeIntiated = null;
						break;
						case 'delete':
							alert('Script deleted!');
					}
		}
	});

	Server.connect();

	window.isActive = true;
	window.titleChanger = null;
	window.typing = 'no';
	window.watchers = [];
	window.debug_flag = 0;
	window.availability_options = {'back':'green','available':'green','away':'orange','brb':'orange'};
	window.tagged_it = 0;
	window.participants = {};
	window.tag_occurred = null;
	window.tag_starter = null;
	window.onfocus = function() {

		window.isActive = true;
		window.alerted = null;
		window.clearInterval(window.titleChanger);

		$('title').html('Codechatter - Eat.Pray.Code();');

		window.titleChanger = null;

		send(JSON.stringify({
			'_m':'focus',
			'status': 'true'
		}));
	}

	window.onblur = function() {
		window.isActive = false;
		send(JSON.stringify({
			'_m':'focus',
			'status': 'false'
		}));
	}

});
	</script>
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
<div class="container-fluid">
	<div class="row span12">
			
			<div style="text-align:center;margin-top:20px"><img alt="codechatter.com" src="http://www.textfx.co/tmp/140913/p4MnVdISw2FAb4Ae.png" width="75%"></div>
			<h1>Eat.Pray.Code();</h1>
	</div>

	
	<div class="row span12">
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
			<div class="span6">

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

		<div class="span6">
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

	<div id="chatUI">
		<div class="row-fluid">
			<div id="logout">Logout</div>
		</div>
		<div class="row-fluid">
		<div class="span4">

			<div id="log"></div>

			<div id="msgWrap">
				<input id="message" placeholder="Chat..." type="text" value="">
			</div>

			<div id="users">
			<div id="userList"></div>
		</div>
	
			<div id="settings">
				<img id="my_avatar" /> <button id="update_avatar" class="btn btn-primary">Update avatar</button><br>
				<span class="readable">Chat comms:</span>
				<code>/brb</code> <code>/back</code><br>

				<span class="readable">Bkgr color:</span>
				<input id="inbgcolor" class="color" placeholder="Enter a background color..." value="url(/lightspeed.png)" />
				<br>
				<span class="readable">Text color:</span> <input id="intextcolor" class="color" placeholder="Enter a text color..." value="#FFF" />
				<br>
				<div style="float:left;clear: both;border:3px ridge #24A6AB;padding:15px;margin-top:20px;resize:horizontal;">
					<div id="liveclock" class="readable" style="position:relative;left:0;top:0px;"></div>
				</div>
				<div style="padding-top:20px;clear:both"><button onclick="toggleSolarSystem();">Toggle Solar System</button></div>
			</div>
		</div>
		
  <div class="span8">

		<div id="userWhiteboards">
			<div id="newsoftheday" style="display:none"><b>Important news of the day:</b>
				<ul>
				<li>Everyone has to register again. Sorry for the inconvenience.. (everyone who has already registered again please disregard this message.</li>
				<li>And one more thing...</li>
			</ul>
			<img src="http://0-media-collegehumor.cvcdn.com/54/67/ff0db022409cca599cb3f9ab028fb3ab.jpg" />
			<!--<img src="http://laughingsquid.com/wp-content/uploads/tumblr_lugsodPWWM1qd6s2yo1_500.gif"/>-->
			<!--<img src="http://www.myfacewhen.net/uploads/3168-shut-up-and-take-my-money.jpg" />-->
			TIP: click to close, or drag to your desired location to read later
			</div>
		</div>

		<div id="runCodeWrap">
			<a id="runCode" class="btn btn-primary">Run code!</a> <a id="clearRunOutput" class="btn btn-warning">Clear Output</a> <select id="selector" onchange="selectScript(this)">
<option>Select a script...</option>
</select>
<button id='addbtn' class="btn btn-info" onclick="addNewScript();"> Add </button>

<button id='savebtn' class="btn btn-success" onclick="saveScript();"> Save </button>

<button id='deletebtn' class="btn btn-danger" onclick="deleteScript();"> Delete </button>

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



function logout(){
	
	 $.cookie('code-haven', '', { expires : -1 });
	 window.location.href = window.location.href;
}

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
				//alert('wtf');
				window.my_mouse_last_send = now;
			}

			participants = window.participants;
			
			for(var i in participants){
				var x = participants[i].x;
				var y = participants[i].y;

				var name = participants[i].name;
				var id = participants[i].id;

				//$('#run_area').html('<div>'+name+' is playing'+x+','+y+'</div>');

				if(!window.tag_occurred){
						if(window.my_coords.x >= x && window.my_coords.x <= (x+20) && window.my_coords.y >= y && window.my_coords.y <= (y+20)){
						//sendChat(window.current_user.name + ' tagged ' + name + '!');
						
						//log('<div class="system message">'+name+' is it!!!!</div>');
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

</script>
</body>
</html>