<?php

/*
As classes podem ter PROPRIEDADES e MÉTODOS

PROPRIEDADES são variáveis da classe
MÉTODOS são funções da classe.

A palavra-chave $this refere-se ao objeto atual
e só está disponivel dentro dos métodos (funções da classe)
*/

class Fruto 
{
    // PROPRIEDADES
    public $nome;
    public $cor;
    public $peso;

    // MÉTODOS
    public function apresentar_fruto()
    {
        return "O meu nome é {$this->nome}, a minha cor é {$this->cor} e tenho {$this->peso}";
    }
}

$laranja = new Fruto();
$laranja->nome = 'Laranja';
$laranja->cor = 'laranja';
$laranja->peso = '12g';

$manga = new Fruto();
$manga->nome = 'Manga';
$manga->cor = 'verde';
$manga->peso = '21g';

echo $laranja->apresentar_fruto();
echo '<br>';
echo $manga->apresentar_fruto();