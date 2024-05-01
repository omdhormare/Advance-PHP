<html>
<body>
<?php
      echo("<table border=1>");
      echo("<h3>Server Infromation</h3>");
      echo("<tr><th>variables</th> <th>values</th>  </tr>");
     foreach($_SERVER as $key=>$value)
     {
        echo("<tr>");
        echo("<td>".$key);
        echo("<td>".$value);
        echo("<tr>");
     }
    ?>

</body>
</html>
