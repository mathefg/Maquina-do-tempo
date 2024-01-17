<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descobridor de idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculando a sua idade</h1>
        <?php 
        $anoatual =  date("Y"); 
        $nasc =$_GET['nasc'] ?? 1900;
        $ano =$_GET['ano'] ?? $anoatual;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nasc">Em que ano você nasceu ?</label>
        <input type="number" name="nasc" id="nasc" min="1900" max="<?=$anoatual?>" value="<?=$nasc?>">
        <label for="ano">Quer saber sua idade em que ano ?(atualmente estamos em <strong><?=$anoatual?></strong>)</label>
        <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
        <input type="submit" value="Qual será minha idade ?">
        </form>
    </main>
    <section>
        <h2>Sua idade</h2>
        <?php 
        $idade=$ano - $nasc;
        ?>

        <p>Quem nasceu em <?=$nasc?> terá<strong> <?= $idade?> anos </strong> em <?=$ano?></p>
    </section>
    
</body>
</html>