// button to bring up a popup
function open_help(){
	$('#help').show();
}
function open_logout(){
	$('#logout').show();
}
function open_facebook(){
	$('.facebook').show();
	$('#account_login').hide();
}
function open_twitter(){
	$('.twitter').show();
	$('#account_login').hide();
}

// button to close the popup
function close_help(){
	$('#help').hide();
}
function close_logout(){
	$('#logout').hide();
}
function close_facebook(){
	$('.facebook').hide();
	$('#account_login').show();
}
function close_twitter(){
	$('.twitter').hide();
	$('#account_login').show();
}