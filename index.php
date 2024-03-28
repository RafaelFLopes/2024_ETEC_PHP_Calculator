<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <title>Calculadora</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div>
            <h1>Calculadora Online</h1>
            <form action="get.php" method="post">
                Primeiro Numero: <input name="num1" type="text"><br>
                Segundo numero: <input name="num2" type="text"><br>
                <input type="submit" name="operacao" value="+">
                <input type="submit" name="operacao" value="-">
                <input type="submit" name="operacao" value="*">
                <input type="submit" name="operacao" value="/">
            </form>
        </div>
    </main>
</body>
</html>