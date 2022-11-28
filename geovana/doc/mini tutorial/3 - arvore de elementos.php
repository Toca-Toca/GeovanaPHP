<?php
require_once __DIR__.'/../../config.php';


/*
    uma instancia da classe Control, pode armazenar outras instancias da classe Control,
    dentro de si. assim como no html voce pode inserir uma tag dentro da outra
    para formar a Arvore de Elementos DOM.
 */

// a classe control possui o metodo add para adicionar
// um elemento dentro dele, 
echo DIV()->add(
        BUTTON("texto do botao")
    );

/* equivalente a
<div>
    <button>
        texto do botao
    </button>
</div>
 */
// para inserir varios elementos em uma tag, 
// voce pode passar um array de elementos.
echo DIV()->add([
        BUTTON("botao 1"),
        BUTTON("botao 2"),
        BUTTON("botao 3")
    ]);

// eh possivel fazer isso recursivamente,
// adicionando dentro do div, um botao e um div com outros botoes
echo DIV()->add([
        BUTTON("botao 1"),
        DIV()->add([
            BUTTON("botao 2 dentro do div"),
            BUTTON("botao 3 dentro do div")  
        ])
    ]);

// nao eh preciso chamar a funcao add,
// para encurtar o codigo voce pode passar elementos
// por parametros dentro da funcao construtora 

echo DIV(BUTTON("botao 1"));

// tambem pode ser escrito assim

echo DIV(
        BUTTON("texto do botao")
    );
// muda apenas a identacao, em alguns casos assim fica muito mais legivel


// a funcao construtora tambem aceita arrays de elementos
// o mesmo exemplo de antes mas sem chamar a funcao add 
// fica bem mais parecido com html
echo DIV([
        BUTTON("botao 1"),
        DIV([
            BUTTON("botao 2 dentro do div"),
            BUTTON("botao 3 dentro do div")  
        ])
    ]);

// equivalente a
/*
<div>
    <button>botao 1</button>
    <div>
        <button>botao 2 dentro do div</button>
        <button>botao 3 dentro do div</button>
    </div>
</div>
 */

?>
