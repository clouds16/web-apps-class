<?php   

function myFunction($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
            break;
        case 'subtract':
            return $num1 - $num2;
            break;
        case 'divide':
            return $num1 / $num2;
            break;
        case 'multiply':
            return $num1 * $num2;
            break;
        
        default:
            echo 'Cannot recognize operation';
        
        
        }
    }

    $usernum1 = readline('Enter your first number: ');
    $usernum2 = readline('Enter your second number: ');
    $operation = readline('Enter the operation you wish to perform: ');
    
    $useranswer = myFunction($usernum1,$usernum2,$operation);
    echo $useranswer
?>