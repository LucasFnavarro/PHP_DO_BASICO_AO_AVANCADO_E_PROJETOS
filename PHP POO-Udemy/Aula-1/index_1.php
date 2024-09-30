<?php 

/*
Vimos que uma classe é um modelo para criar objetos.
Os objetos, são instancias de uma classse.
*/

class Fruto
{
    public $nome;
}

// Objeto criado a partir da classe Fruto
$laranja = new Fruto();
$manga = new Fruto();

// Definindo o valor da propriedade
$laranja->nome = 'Laranja';

$manga->nome = 'Manga';

// Apresentado as propriedades dos objetos
echo $laranja->nome;
echo '<br>';
echo $manga->nome;