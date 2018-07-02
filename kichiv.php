<?php
    require "connect.php";
    $sql="select * from notes";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
        $sub_name=$row['sub_name'];
        $sub_code=$row['sub_code'];
        $author_name=$row['author_name'];
        $proff_name=$row['proff_name'];
        $semester=$row['semester'];
        $note=$row['note'];
        $date=$row['date'];
        echo "<h2>".$sub_name."</h2>";
        echo "<h2>".$sub_code."</h2>";
        echo "<h2>".$author_name."</h2>";
        echo "<h2>".$proff_name."</h2>";
        echo "<h2>".$semester."</h2>";
        echo "<h2>".$note."</h2>";
        echo "<h2>".$date."</h2>";
        echo "<br/>";
     }

?>