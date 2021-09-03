<?php

require_once 'cifraDeCesar.php';

$cripto = new CifraDeCesar($_POST['Numero']);

if($_POST['option'] == 'Criptografar'){
    $cripto->principal();
} else {
    $cripto->principal(FALSE);
}