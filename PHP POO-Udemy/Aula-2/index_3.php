<?php


class Homem
{
    private $nome;

    function set_nome($n)
    {
        $nomes_proibidos = [
            'joao',
            'ana',
            'miguel',
            'carlos'
        ];

        if (in_array($n, $nomes_proibidos)) {
            return;
        }

        $this->nome = $n;
    }

    function get_nome()
    {
        return $this->nome; 
    }
}


$a = new Homem();
$a->set_nome('joao');
echo 'O nome é: ' . $a->get_nome(); // vázio
echo '<br>';

$a->get_nome('antonio');
echo 'O nome é: ' . $a->get_nome(); // antonio
echo '<br>';