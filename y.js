function c()
{
    var a;
    if(window.XMLHttpRequest)
    {
        a=new XMLHttpRequest();
    }
    else if(window.ActicXobject)
    {
        a=new ActiveXObject("microsoft.XMLHTTP");
    }
    a.onreadystatechange=show;
    a.open("POST","y.php",true);
    a.setRequestHeader("content-type","application/x-www-form-urlencoded");
    a.send();
    function show()
    {
        if(a.readyState==4)
        {
            if(a.status==200)
            {
                var r1=a.responseText;
                document.getElementById("ans").innerHTML=r1;
            }
        }
    }
}