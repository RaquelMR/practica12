<html>
    <head>
        <title>Practica 12-variables PHP</title>
        <meta charset="utf-8">
    </head>

    <body>
        <?php
        $nombre='Raquel Alejandra';
        $edad= 26;
        $salario= 169;
        $estatus= true;
        echo "valores <br/>";
        echo "NOMBRE: ".$nombre.'<br/>';
        echo "EDAD: ".$edad.'<br/>';
        echo "SALARIO: ".$salario.'<br/>';
        echo "ESTATUS: ".$estatus;
        ?>
        <H1>OPERACIONES ARITMETICAS</H1>
        <?php
        echo "<h1>OPERACIONES ARITMETICAS</H1>";
        $valor1=15;
        $valor2=7;
        $suma = $valor1 + $valor2;
        echo "<br/>la suma es: ".$suma.'<br/>';
        $valor1=20;
        $valor2=13;
        $resta = $valor1 - $valor2;
        echo "<br/>la resta es: ".$resta.'<br/>';
        $valor1=30;
        $valor2=5;
        $division = $valor1 / $valor2;
        echo "<br/>la division es: ".$division.'<br/>';
        $valor1=5;
        $valor2=4;
        $multiplicacion  = $valor1 * $valor2;
        echo "<br/>la multiplicacion es:".$multiplicacion.'<br/>';
        
        ?>
    </body>
</html>