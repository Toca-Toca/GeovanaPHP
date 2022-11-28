<?php

/*
    a classe Control possui todos os metodos necessarios
    para renderizar qualquer coisa. tudo o que eh possivel fazer com html puro,
    tambem eh possivel fazer com o geovana.
 */

// voce pode definir qualquer valor, em qualquer atributo usando a funcao attr



echo BUTTON("Botao de exemplo")
    ->attr('onclick',"alert('voce clicou no botao');");
/*
    <button onclick="alert('voce clicou no botao');">
        Botao de exemplo
    </button>
*/

// todas as funcoes dentro da classe control, retornam a propia instancia $this;
// dessa forma voce pode chamar a mesma funcao varias vezes.

echo BUTTON("Botao de exemplo")
    ->attr('onclick',"alert('voce clicou no botao');")
    ->attr('type','submit');

/*
    equivalente a:
    <button onclick="alert('voce clicou no botao');" type="submit">
        Botao de exemplo
    </button>
*/

// mas praticamente NUNCA eh necessario usar a funcao attr,
// porque todos os atributos HTML5 estao implementados em forma de metodos, dentro das tags
// usando autocomplete voce pode navegar entre eles.

echo BUTTON("Botao de exemplo")
    ->onclick("alert('voce clicou no botao');")
    ->type("submit");

// alguns atributos com valores comuns estao ja em formato de metodo, 
// para simplificar mais ainda

echo BUTTON("Botao de exemplo")
    ->onclick("alert('voce clicou no botao');")
    ->submit();

/*
    equivalente a:
    <button onclick="alert('voce clicou no botao');" type="submit">
        Botao de exemplo
    </button>
*/


echo BUTTON("Botão padrão"); 
/* <button>Botão padrão</button> */

echo BUTTON("Enviar Formulário")->submit(); 
/* <button type="submit">Enviar Formulário</button> */

echo BUTTON("Limpar Formulário")->reset(); 
/* <button type="reset">Limpar Formulário</button> */



echo A("ir para o google")
     ->href("https://www.google.com")->_blank();
/*
    equivalente a:
    <a href="https://www.google.com" target="_blank">
        ir para o google
    </a>
*/


// voce pode adicionar classes css atraves do metodo class
echo BUTTON("Botao de exemplo")
    ->onclick("alert('voce clicou no botao');")
    ->submit()
     ->class("btn btn-success");
    // ou

echo BUTTON("Botao de exemplo")
    ->onclick("alert('voce clicou no botao');")
    ->submit()
    ->success();
