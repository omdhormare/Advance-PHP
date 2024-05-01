function add()
{
var XHRobj=false;
if(window.XMLHttpRequest)
{
XHRobj=new XMLHttpRequest();
}
else if(window.ActiveXobject)
{

XHRobj=new ActiveXObject("Microsoft.XMLHTTP");
}
var s1="t1="+document.getElementById("t1").value;
var s2="&t2="+document.getElementById("t2").value;
XHRobj.onreadystatechange=show;
XHRobj.open('POST','add.php',true);
XHRobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
XHRobj.send(s1+s2);
function show()
{
if(XHRobj.readyState==4)
{
if(XHRobj.status==200)
{
var result=XHRobj.responseText;
document.getElementById('txt').innerHTML=result;
}
}
}
}