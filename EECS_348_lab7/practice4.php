<html>
<body>
  <h1>Multiplication Table:- </h1>
  
  <?php
    $size= $_POST['size'];
    
    echo "<table border =\"1\">";
    for ($row=0; $row <= $size; $row++){
        echo "<tr> \n";
        for ($column=0; $column <= $size; $column++){
            if ($row == 0 && $column == 0){
                echo "<td> </td>";

            }
            else if($row == 0 && $column != 0){
                echo "<td> $column </td>";
            }
            else if($row != 0 && $column == 0){
                echo "<td> $row </td>";
            }
            else {
                $product = $row * $column;
                echo "<td>$product</td> \n";
            }
        }
        echo "</tr>";

    }
    
  ?>
</body>
</html>