<?php
require_once __DIR__.'/../../config.php';

/*
    para nao precisar escrever a palavra "new"
    toda vez que for necessario instanciar um elemento,
    sempre existe uma funcao global que instancia a classe da tag,
    essas funcoes estao padronizadas com todas as letras maiusculas. 
 */

echo DIV("Hello World"); // <div>Hello World</div>

echo SPAN("Oi Mundo"); // <span>Oi Mundo</span>

echo BUTTON("Clique-me"); // <span>Clique-me</span>