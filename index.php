<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
        Bliss Bowls
        </title>
        <div id="wrapper">
            
        <nav>
        <a href="index.php" id="mainPage">Main Page/ Order</a>
        </nav>
        </div>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Make Your Acai Bowl</h1>
                <form action="inex2.php" method="POST">
                    <div>
                        <label for="required-firstname" id="container">First Name: </label>
                        <input type="text" name="name"/>
                        <label for="required-lastname" id="container">Last Name: </label>
                        <input type="text" name="lname"/>
                    
                    </div>
                    <p>
                        What size do you want your acai bowl?
                        <select name = "size" class = "size" required>
                            <option selected disabled hidden value = ''></option>
                            <option value = "small">Small</option>
                            <option value = "Medium">Medium</option>
                            <option value = "Large">Large</option>
                            
                        </select>
                    </p>
                    <p>
                        What kinf of base do you want?
                    </p>
                    <div class="radios">
                        <input type="radio" name="base" value="Fruity Bliss">Acai,spinach,apples,pineapple<br>
                        <input type="radio" name="base" value="Tropical Blend">Acai,Oranges,Mangos,Kale<br>
                        <input type="radio" name="base" value="Green Dream">Acai,Kale,Spinach,Banana,Dates<br>
                        <input type="radio" name="base" value="Peanut butter bowl">Acai,banana,Peanut Butter,Dates<br>
                    </div>
                    <p>Add ons? </p>
                    <div class = "radios">
                        <input type="checkbox" name="extra" value="Bee Pollen">Bee Pollen<br>
                        <input type="checkbox" name="extra" value="Spirulina">Spirulina<br>
                        <input type="checkbox" name="extra" value="Kale">Kale<br>
                        <input type="checkbox" name="extra" value="Chia">Chia Seeds<br>
                        <input type="checkbox" name="extra" value="Protein">Protein<br>
                        <input type="checkbox" name="extra" value="Spinach">Spinach<br>
                        <input type="checkbox" name="extra" value="Avacado">Avacado<br>
                    </div>
                    
                         <p>Toppings </p>
                    <div class = "radios">
                        <input type="checkbox" name="top" value="Coconut">Coconut<br>
                        <input type="checkbox" name="top" value="Strawberries">Strawberries<br>
                        <input type="checkbox" name="top" value="Blue berries">Kale<br>
                        <input type="checkbox" name="top" value="Almonds">Almonds<br>
                        <input type="checkbox" name="top" value="Granola">Granola<br>
                    </div>
                    
                  
                    <div class = "submission">
                        <input class = "submit" type="image" src="http://www.pngmart.com/files/3/Submit-Button-PNG-Clipart.png" border="0" width="250" height = "90" alt="Submit" />
                    </div>
                    
                </form>
            </div>
        </div>
    </body>
</html>
