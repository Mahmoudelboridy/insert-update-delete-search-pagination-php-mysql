<?php
include 'conf.php';
$q="SELECT * FROM `img`";
$data=mysqli_query($con,$q);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>f-s</title>
    <style>
    td {
        border: 1px solid black;
    }

    th {
        border: 1px solid black;

    }

    * {
        font-size: 30pt;
    }

    table {
        margin-left: auto;
        margin-right: auto;
    }
    </style>
</head>

<body>
    <input type="text" id="myInput" onkeyup="myFunction()" />
    <table id="myTable">
        <tr>
            <th>name</th>
            <th>image</th>
        </tr>
        <?php
  while($result=mysqli_fetch_assoc($data)){
    echo "<tr>
    <td>".$result["name"]."</td>
    <td><img src=".$result['ionk']." height='300' width='300' /></td>
    </tr>";
 }
    ?>
    </table>
    <script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script>
</body>

</html>