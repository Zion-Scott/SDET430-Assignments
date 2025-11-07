<!DOCTYPE html>
<html>
    <body>
        <h1>Zion Scott's Classes for Fall 2025 <br></h1>
        <?php
            $classes = array(
            "Internet Applications", 
            "Digital Crime",
            "Software Web Applications II", 
            "Graphic Novels, Comics and Cartoons"
            );
            
            echo"$classes[0]<br>";
            echo"$classes[3]<br>";
            echo"$classes[2]<br>";
            echo"$classes[1]<br>";

            echo "<h3>Upload files straight to server here: </h3>";

            echo '<button onclick="window.location.href=\'uploader.php\'">Upload New files</button>';
        ?>


        
        

    </body>
</html>