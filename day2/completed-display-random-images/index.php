


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display images from array</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        # HERE I will create a new array with elements. The name of the array will be $pic
        $pic = array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg","10.jpg","11.jpg","12.jpg");
        
        # This will reorganize the order of the array -> shuffle
        shuffle($pic);
    ?>
    
    <ul>
    <?php for($x = 0; $x<= 3; $x++) {
        echo "<li> <img id='shuffle-image' src='images/$pic[$x]' >  </li>";
        }
    ?>
    </ul>
      
        
          
            
                
</body>
</html>