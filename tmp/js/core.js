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
	$(this).append("<div class='usrMiniInfoWrap'><div class='usrMiniInfo'><img height='200' src='"
			  + profilpic + "' /><div class=\"name\">"
			  + username + "<span style=\"color:"
			  +$(this).children(".usrStatus").attr("availability")
			  +"\">(" + status+')</span></div><!--<a class="btn btn-primary" onclick="alert(\'Test!\');">Test link</a>--></div>');
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
				+' span9"><div class="usrStatus span2 hasHoverTooltip" availability="'
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

			var avatar = res._d.user.avatar;
			var avatar_img = "";
			if(avatar){
				avatar_img = "<img src=\""+avatar+"\"/>";
			}

			if (res._d.status == 'joined') {
				log('<div class="system message">' + name + " joined!</div>");
				$('#userList').append('<div id="user_' + id
				 + '" class="userItem usr span9"><div class="usrStatus span2 hasHoverTooltip" availability="green" tooltip="Status (here/away)">&nbsp;</div>'+avatar_img+'<div class="usrName hasHoverTooltip" tooltip="Watch '+ name +' code!">' + name + '</div><div class="usrCodeLine span2 hasHoverTooltip" tooltip="Current line number">&nbsp;</div></div>');
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