function check()
{
    var a;
    if(window.XMLHttpRequest)
    {
        a=new XMLHttpRequest();
    }
    else if(window.ActiveXobject)
    {
        a=new ActiveXObject("microsoft.XMLHTTP");
    }
    var s1="t1="+document.getElementById("t1").value;
    a.onreadystatechange=show;
    a.open("POST","s6.php",true);
    a.setRequestHeader("content-type","application/x-www-form-urlencoded");

    a.send(s1);
    function show()
    {
        if(a.readyState==4)
        {
            if(a.status==200)
            {
                var r1=a.responseText;
                document.getElementById('ans').innerHTML=r1;
            }
        }
    }
}