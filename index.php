<?php

$num1 = '';
$num2 = '';
$resultado = '';
$calcular = 'somar'; 

if (isset($_POST['num1'], $_POST['num2'], $_POST['calcular'])){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $calcular = $_POST['calcular'];


    switch($calcular){

        case 'somar':
            $resultado = $num1 + $num2;
              break;
        case 'multiplicar':
            $resultado = $num1 * $num2;
              break;
        case 'dividir':
            $resultado = $num1 / $num2;
              break;
        case 'subtrair':
            $resultado = $num1 - $num2;
              break;                  

    }

}


?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>


    body{
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-color: gainsboro;
    }

    .container{
        background-color: dimgray;
        width: 30vw;
        height: 60vh;
        margin: auto;
        margin-top: 170px;
        border-radius: 10%;
    }

    h1{
        padding: 30px;
        color: white;
        text-align: center;
    }

    p{
        margin: 0;
        color: white;
        font-size: 27px;
        margin-left: 10px;
        text-align: center;
    }

    input{
        border: 2px solid rebeccapurple;
        border-radius: 4px;
        margin-left: 10px;
        font-size: 15px;
        margin-top: 5px;
        width: 290px;
        margin-left: 25%;
        transition: 500ms;
    }

    input:hover{
        border: 2px solid blue;
        transition: 500ms;
       background-color: gray;
       color: white;
    }

    select{
        border: 2px solid rebeccapurple;
        border-radius: 4px;
        margin-left: 10px;
        font-size: 15px;
        margin-top: 5px;
        width: 298px;
        margin-left: 25%;
    }

    .btn{
        width: 300px;
        margin-left: 25%;
        height: 40px;
    }

    .btn:hover{
        background-color: gray;
        color: white;
        height: 42px;
    }

    h3{
        text-align: center;
        color: white;
    }


    </style>

    
</head>
<body>

<div class="container">
                 <h1>CALCULADORA EM PHP</h1>
                <form method="POST">


                  <p>Digite o primeiro número</p>
                  <input type="number" name="num1" value= <?=$num1?>>
                  <p>Digite o segundo número</p>
                  <input type="number" name="num2" value=<?=$num2?>> <br> <br>


                <select name="calcular">
                    <option value="somar" <? ($calcular=='somar')?'Selected':'';?>>Somar</option>
                    <option value="multiplicar" <? ($calcular=='multiplicar')?'Selected':''; ?>>Multiplicar</option>
                    <option value="dividir" <? ($calcular=='dividir')?'Selected':''; ?>>Dividir</option>
                    <option value="subtrair" <? ($calcular=='subtrair')?'Selected':''; ?>>Subtrair</option>
                </select> <br> <br>

                <input class="btn" type="submit" value="calcular">
                
                <h3> O RESULTADO É: <?= $resultado ?> </h3>

                </form>
            <br> <br> 

</div>


</body>
</html>