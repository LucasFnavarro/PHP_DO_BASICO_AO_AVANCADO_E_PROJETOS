<?php 

// ACCESS MODIFIERS

/*
Já vimos que as classes podem ter PROPRIEDADES (variáveis da classe)
e MÉTODOS (funções da classe).

As PROPRIEDADES e os MÉTODOS podem ter níveis de acesso distintos
que permitem controlar a que nível podemos ter acesso a eles ou não.

PUBLIC - a propriedade ou método pode ser acedida a partir de qualquer lado.
É o acess modifiers padrão.

PROTECTED - a propriedade ou método pode ser acedida dentro da classe
e dentro de classes derivadas dela

PRIVATE - a propriedade ou método só pode ser acedida DENTRO da classe.
*/

class Homem 
{
    public $nome;
    protected $apelido;
    private $cor_do_cabelo;
}

// vamos fazer a instanciação de Homem = criar um objeto a partir da classe
$h = new Homem();

$h->nome = 'Lucas'; // OK 
$h->apelido = 'Lucao'; // ERRO
$h->cor_do_cabelo = 'Escuro'; // ERRO