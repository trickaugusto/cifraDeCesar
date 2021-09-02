<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cifra de Cesar</title>
    </head>
    <body>
        
        <pre>
        <?php
            require_once 'cifraDeCesar.php';
            
            $test = new CifraDeCesar("arroz");

            $test->principal();
            $test->principal(FALSE);

        ?>
        </pre>
    </body>
</html>