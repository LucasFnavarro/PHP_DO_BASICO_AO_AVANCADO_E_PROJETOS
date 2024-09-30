<?php 

// OBTER DADOS EM DIFERENTES FORMATOS.

/*
Em vez do método fetchAll() sem qualquer parametro
podemos especificar de que forma queremos os dados.

NOTA: Esta parametrização também vale para o fetch()

PDO::FETCH_BOTH - É a opção padrão. Por isso existem
                 chaves númericas e alfanuméricas misturadas.

PDO::FETCH_NUM - Apenas o array com chaves númericas com indice 0.
                 É atribuida uma chave numérica sequencial a cada coluna.

PDO::FETCH_ASSOC - Apenas o array associativo.
                   As chaves são os nomes das colunas da tabela.

PDO::FETCH_OBJ - Retorna os valores organizados num objeto anónimo em que cada elemento contém as propriedades com os nomes das colunas da tablela.

Existem outras opções, estas são as mais comuns.

*/

