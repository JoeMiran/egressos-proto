<?php

session_start();
echo $_SESSION['nome'].'<br>';
$tempo = new DateTime(date('Y-m-d', time()));
$dataNascimento = new DateTime($_SESSION['dataNascimento']);
echo 'Idade: ' . $tempo->diff($dataNascimento)->format('%y') . '<br>';