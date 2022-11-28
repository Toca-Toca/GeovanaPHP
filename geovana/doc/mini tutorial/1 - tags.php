<?php
require_once __DIR__.'/../../config.php';
/*
 * todas as tags html estao implementadas em objetos com a primeira letra maiuscula.
    ou seja toda tag html tem uma classe no geovana equivalente com o mesmo nome

    exemplo a tag <span> esta implementada no geovana assim:

    class Span extends Control {}

    a tag div esta implementada assim: 

    class Div extends Control {}

    TODAS as classes de tags herdam a classe Control. 
    essa classe eh responsavel por renderizar as tags, 
    nao eh preciso chamar nenhum metodo por que ele faz isso automaticamente,
    atravez do metodo magico  __toString()

    voce pode criar uma span assim "new Span()" ou "new Div()",
    e o resultado vai ser <span></span> ou <div></div>
 */

class Div extends Control {}

$div_exemplo=new Div();
echo $div_exemplo;

echo (new Span()); // equivalente a "<span></span>";

echo (new Div()); // equivalente a "<div></div>";

echo (new Button());  // equivalente a "<button></button>";