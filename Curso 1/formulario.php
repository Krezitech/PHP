<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Titulo</title>
</head>
<body>

<h1> Formulario </h1>

<!-- <form action="calculadora.php" method="get"> -->
<form action="calculadora.php" method="POST">
<input type="text" name="Valor1" placeholder="valor1"><br>
<input type="text" name="Valor2" placeholder="valor2"><br>

<input type="radio" name="operador" value="0"> Sumar <br>
<input type="radio" name="operador" value="1"> Restar <br>
<input type="radio" name="operador" value="2"> Multiplicar <br><input type="radio" name="operador" value="3"> Dividir <br>

<input type="submit" name="Calcular">
</form>


</body>
</html>