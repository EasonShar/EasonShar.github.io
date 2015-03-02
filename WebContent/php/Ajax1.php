// JavaScript Document
function Ajax(recvType){
	
	var aj=new Object();
	aj.recvType=recvType?recvType.toUpperCase():"HTML";
	aj.targetUrl="";
	aj.sendString="";
	aj.resultHandle=null;
	
	aj.createXMLHttpRequest=function(){
		var request=false;
	
	//window对象中有XMLHttpRequest对象存在就是非IE
	//window对象只能怪有ActiveXObject就是IE
	if(window.XMLHttpRequest){
		//alert("您使用的是非IE浏览器或者IE高版本")
		request=new XMLHttpRequest();
		if(request.overrideMimeType){
			request.overrideMimeType("text/xml");
		}
	}else if(window.ActiveXObject){
		//alert("您使用的是IE低版本浏览器")
		var versions=["Microsoft.XMLHTTP","MSXML.XMLHTTP","Msxml2.XMLHTTP.7.0","Msxml2.XMLHTTP.6.0","Msxml2.XMLHTTP.5.0","Msxml2.XMLHTTP.4.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP"];
		for(var i=0;i<versions.length;i++){
			try{
				request=new ActiveXObject(versions[i]);
				if(request){
					return request;
				}
			}catch(e){
				request=false;
			}
		}
		
	}
	
	return request;
	
	}
	aj.XMLHttpRequest=aj.createXMLHttpRequest();
	aj.processHandle=function(){
		if(aj.XMLHttpRequest.readyState==4){
			if(aj.XMLHttpRequest.status==200){
				if(aj.recvType=="HTML")
				aj.resultHandle(aj.XMLHttpRequest.responseText);
				else if(aj.recvType=="XML")
				aj.resultHandle(aj.XMLHttpRequest.responseXML);
			}
		}
	}
	aj.get=function(targetUrl,resultHandle){
		aj.targetUrl=targetUrl;
		if(resultHandle!=null){
			aj.XMLHttpRequest.onreadystatechange=aj.processHandle;
			aj.resultHandle=resultHandle;
		}
		if(window.XMLHttpRequest){
		    aj.XMLHttpRequest.open("get",aj.targetUrl);
	        aj.XMLHttpRequest.send(null);
		}else{
			aj.XMLHttpRequest.open("get",aj.targetUrl,true);
	        aj.XMLHttpRequest.send(null);
			
		}
	}
	aj.post=function(targetUrl,sendString,resultHandle){
		aj.targetUrl=targetUrl;
		if(typeof(sendString)=="object"){
			var str="";
			for(var pro in sendString){
				str+=pro+"="+sendString[pro]+"&";
	
			}
			aj.sendString=str.substr(0,str.length-1);
		}else{
			aj.sendString=sendString;
		}
		 if(resultHandle!=null){
			aj.XMLHttpRequest.onreadystatechange=aj.processHandle;
			aj.resultHandle=resultHandle;
		}
		aj.XMLHttpRequest.open("post",targetUrl);
		aj.XMLHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		aj.XMLHttpRequest.send(aj.sendString);
	}
	
	return aj;
}