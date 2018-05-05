<?php
    session_start();
    $name = $_REQUEST['name'];
    $lname = $_REQUEST['lname'];
    
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bliss Bowls</title>
         <div id="wrapper">
            
        <nav>
        <a href="index.php" id="mainPage">Back to Order</a>
        </nav>
        </div>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
       <div class="container">
            <div class="content">
                <div class="center">
                    <h1><?php echo $name.$lname ?> Your Order is Ready!</h1>
                            <?php
                    echo "<div class=\"receipt\">";
                        $price = 0;
                        
                        if(empty($_POST['size']))
                        {
                            $error = "Must select a size";
                            echo $error;
                        }
                        else
                        {
                           echo $_POST["size"] . "  \$1.50<br>";
                           $price += 1.50;
                        }
                        if(empty($_POST['base']))
                        {
                            $error = "Must select a base";
                            echo $error;
                        }
                        else
                        {
                           echo $_POST["base"] . "  \$2.00<br>";
                           $price += 2;
                        }
                       
                      
                        
                        if(!empty($_POST['extra']))
                        {
                           echo $_POST["extra"] . "  \$2.00<br>";
                           $price += 2;
                        }
                         
                           if(!empty($_POST['top']))
                        {
                           echo $_POST["top"] . "  \$1.00<br>";
                           $price += 2;
                        }
                        
                        
                       
                    echo "</div>";
                    
                    
                    echo "<hr>";
                    echo "<h3>Total: $" . number_format ( $price, 2 ) . "</h3>" ;
                    
                    
                echo "</div>";
                
            echo "</div>";
            
                ?>
        </div>
        
    </body>
</html>