function check()
{
    var a;
    if(window.XMLHttpRequest)
    {
        a=new XMLHttpRequest();
    }
    else if(window.ActiveXobject)
    {
        a=new ActiveXobject("microsoft.XMLHTPP");
    }
 
    a.onreadystatechange=show;
    a.open("POST","15.php",true);
    a.setRequestHeader("content-type","application/x-www-form-urlencoded");
    a.send();
    function show()
    {
        if(a.readyState==4)
        {
            if(a.status==200)
            {
                var q1=a.responseText;
                document.getElementById("ans").innerHTML=q1;
            }
        }
    }
}