<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
<div>
    <pre>
    <?php
        require_once 'ContaBanco.php';
        $p1 = new ContaBanco();
        $p2 = new ContaBanco();

        $p1->abrirConta("CC");
        $p1->setDono("Railton");
        $p1->setNumConta(1000);

        $p2->abrirConta("CP");
        $p2->setDono("Nathalia");
        $p2->setNumConta(2000);

        $p1->depositar(300);
        $p2->depositar(500);

        $p2->sacar(50);

        $p1->pagarMensalidade();
        $p2->pagarMensalidade();

        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        print_r($p2);
    ?>
    </pre>
</div>
</body>
</html>