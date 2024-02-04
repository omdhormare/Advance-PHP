<html>
<head>
    <style>
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Server Information</h2>
    <table>
        <tr>
            <th>Variable</th>
            <th>Value</th>
        </tr>

        <?php
        foreach ($_SERVER as $key => $value) 
        {
            echo "<tr>
                    <td>{$key}</td>
                    <td>{$value}</td>
               </tr>";
        }
        ?>
    </table>

</body>
</html>
