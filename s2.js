function check()
{
    var a;
    if(window.XMLHttpRequest)
    {
        a=new XMLHttpRequest();
    }
    else if(window.ActiveXobject())
    {
        a=new ActiveXobject("microsoft.XMLHTTP");
    }
    var s1="t1="+document.getElementById("t1").value;
    var s2="&t2="+document.getElementById("t2").value;
    a.onreadystatechange=show;
    a.open("POST","s3.php",true);
    a.setRequestHeader("content-type","application/x-www-form-urlencoded");
    a.send(s1+s2);
    function show()
    {
        if(a.readyState==4)
        {
            if(a.status==200)
            {
                var t1=a.responseText;
                document.getElementById("ans").innerHTML=t1; 
            }
        }
    }
}