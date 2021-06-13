<?php


    echo '<img src="img.jpg" />';

    $usercolor = readline("Input your favorite color and i can tell you the wavelength of that color? (red, green , blue , yellow) enter 0 to exit");

    for ( $x = 0; $x <= 5; $x+=1){
        switch ($usercolor) {
            case "red":
                echo "The wavelength of red is 650 nanometers";
                break;
            case "blue":
                echo "The wavelength of blue is 500 Nanometers ";
                break;
            case "green":
                echo "The wavelength of green is :  550 nanometers ";
            break;
      
            case "yellow":
                echo "the wavelength of yellow is : 580 nanometers ";
                break;
                
            default:
                echo "Couldnt recognize that color, select ( red , green , blue or yellow) ";
        }

        $usercolor = readline('Enter another color (red green blue or yellow) or enter 0 to exit: ');
    }


?>