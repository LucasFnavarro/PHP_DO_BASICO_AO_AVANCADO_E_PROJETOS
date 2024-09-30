<?php
defined('CONTROL') or die('Acesso negado!');

// Efetuar o logout
session_destroy();

// voltar para a página inicial
header('location: index.php?rota=login');
