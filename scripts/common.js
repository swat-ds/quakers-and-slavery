ondocumentready = loginMessage;

var ie6 = false;

new function() { // Cross-browser "documentready" Event -- Dean Edwards, et al
  var b, i, f = function() {if (!b) {
    (ondocumentready||new Function)({type:"documentready"});
    // wire up to fire all documentready event handlers ...
  }b = true;};
  /*@cc_on @if (@_win32)
  document.write("<scr"+"ipt id=__ie_onload defer src=javascript:void(0)></scr"+"ipt>");
  document.getElementById("__ie_onload").onreadystatechange = function() {
    if (this.readyState == "complete") f();
  }; window.attachEvent("onload", f); @elif */
  if (document.addEventListener) {
    document.addEventListener("DOMContentLoaded", f, false);
    window.addEventListener("load", f, false);
  }
  if (/WebKit/i.test(navigator.userAgent)) {
    i = setInterval(function() {
      if (/loaded|complete/.test(document.readyState)) {
        clearInterval(i);
        f();
      }
    }, 10);
  }
  /*@end @*/
};

function showSearch() {
	var searchbox=document.getElementById('search');
	if(searchbox.value==searchbox.defaultValue) searchbox.value='';
}

function doPopup(url) {
	var windowWidth = (window.outerWidth ? Math.floor(window.outerWidth*0.5) : 380);
	var windowHeight = (window.outerHeight ? Math.floor(window.outerHeight*0.75) : 430); 
  window.open(url,'Default','menubar=no,resizable=yes,scrollbars=yes,width='+windowWidth+',height='+windowHeight);
}

function loginMessage() {
	if(getCookie('login')&&document.getElementById('userauth')) document.getElementById('userauth').innerHTML='You are logged in as <strong><a href="/profiles/myprofile/">'+getCookie('login').replace(/\+/,' ')+'</a></strong>. <a href="/logout/">Log Out</a>';
	else if(document.getElementById('userauth')) document.getElementById('userauth').innerHTML='';
	return;
}

function albumSetImage(id,caption) {
	document.getElementById('album_image').innerHTML='<img src="/generated/album_photos/'+id+'_lg.jpg" alt="'+caption+'" title="'+caption+'" /><div class="album_caption">'+caption+'</div>';
	if (albumLastId) document.getElementById('img'+albumLastId).className='';
	document.getElementById('img'+id).className='selected';
	albumLastId=id;
}

function getCookie(name) {
	var cookieVars = document.cookie.split(';');
	for(var i=0;i < cookieVars.length;i++) {
		var thisCookie = cookieVars[i];
		while(thisCookie.indexOf(' ')==0) thisCookie = thisCookie.substring(1);
		if(thisCookie.indexOf(name+'=')==0) return thisCookie.replace('+',' ').substring(name.length+1).replace(/<[^>]+>/ig,'');
	}
	return null;
}
