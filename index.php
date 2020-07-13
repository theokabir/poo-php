<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./res/bootstrap.css">
    <link rel="stylesheet" href="./res/style.css">
</head>
<body>
    <div class="div_main mt-4 p-4 rounded">
        <?php

            //ola professor, meu pc está com problemas, estou tentando formatar mas esta dando cada vez mais problemas
            //estou fazendo as atividdes correndo e torcendo pra não dar tela azul no meio
            //no caso de qualquer erro que necessite de eu reenviar eu talvez passe do prazo

            require_once("Carro.php");
            require_once("Livro.php");
            require_once("Pessoa.php");

            $pess = new Pessoa("Theo", 16, 78, 0);
            $pess->show();
            echo "<hr>";
            $car = new Carro("Ford", "preto", "RIP-3003", 7858);
            $car->show();
            echo "<hr>";
            $liv = new Livro("Harry Potter: e o cálice de fogo", "J.K. Rowling", 2006, 27653);
            $liv->show();
        ?>
    </div>
</body>
</html>
