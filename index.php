<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO | Prof. Luiz</title>
</head>
<body>
    <?php
         require_once 'Conta.php';


         $c1 = new ContaCorrente;
         $c1->setNome('João Victor Mechi');
         $c1->setCpf('222.111.000-69');
         $c1->setDataNascimento('25/04/2005');
         $c1->setDeposito('3');
         $c1->setJuros('1,99 %');         

         $c2 = new ContaCorrente;
         $c2->setNome('Gustavo Barbosa Dabruzzo');
         $c2->setCpf('111.222.333-44');
         $c2->setDataNascimento('13/06/2005');
         $c2->setDeposito('5');
         $c2->setJuros('1,43 %');
         

         $c3 = new ContaCorrente;         
         $c3->setNome('Pedro Lira Matukaj');
         $c3->setCpf('321.654.987-10');
         $c3->setDataNascimento('12/04/2004');
         $c3->setJuros('1,79 %');
         $c3->setSaldo(1000);





print_r($c1);
print_r($c2);
print_r($c3);

    ?>
</body>
</html>