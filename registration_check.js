//Initialise Ajax object 
function initAjax(){
    var ajax = false;
        if(window.XMLHttpRequest) {
        	//IE7 above,firefox,chrome
            ajax = new XMLHttpRequest();
        } else if(window.ActiveXObject) {
        	//IE5\IE6 
            ajax = new ActiveXObject("Microsoft.XMLHttp");
        }
        if(ajax==null || ajax==undefined){  
        alert("can't create XMLHttpRequest Object");  
        }
        return ajax;
}

function checkAjax(data){
	var ajax = initAjax();
	ajax.open("GET","register.php?username="+document.getElementById("username").value,true);  
    ajax.send(null); 
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4 && ajax.status==200){
			document.getElementById(reobj).innerHTML=ajax.responseText;
        }
	}
}
  
/*function usercheck(obj){
	   var f=document.loginform;
	   var username=f.username.value;
	   if(username==""){
	   document.getElementById(obj).innerHTML=" <font color=red>Username is required!</font>";
	        f.username.focus();
	        return false;
	   }
	   else{
	   document.getElementById(obj).innerHTML="Reading data...";
	   send_request('register.php?username='+username);
	   reobj=obj;
	   }
	}
function pwdcheck(obj){
    var f=document.loginform;
        var pwd=f.password.value;
        if(pwd==""){
          document.getElementById(obj).innerHTML=" <font color=red>Password is required!</font>";
          //f.userpwd.focus();
          return false;
        }
        else if(f.password.value.length<6){
          document.getElementById(obj).innerHTML=" <font color=red>The length of password can't be less than 6 characters.</font>";
          //f.userpwd.focus();
          return false;
        }
        else{
          document.getElementById(obj).innerHTML=" <font color=red>Password is ok！</font>";
        }
}
function pwdrecheck(obj){
    var f=document.reg;
        var repwd=f.repassword.value;
        if (repwd==""){
          document.getElementById(obj).innerHTML=" <font color=red>Please enter the password again!</font>";
          //f.reuserpwd.focus();
          return false;
        }
        else if(f.repassword.value!=f.repassword.value){
          document.getElementById(obj).innerHTML=" <font color=red>两次输入的密码不一致！</font>";
         // f.reuserpwd.focus();
          return false;
        }
        else{
          document.getElementById(obj).innerHTML=" <font color=red>密码输入正确！</font>";
        }
}*/