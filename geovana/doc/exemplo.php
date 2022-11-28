<?php
require_once __DIR__.'/../config.php';
// LOGICA
if(called("clicou_botao")) {
    MODAL("titulo do modal","Voce clicou no botao.")->modalshow()->send();
}
if(received_form("fomulario_busca")) {
    MODAL("Busca","Voce buscou ".param("q"))->modalshow()->send();
}
if(called("mudou_opcao")) {
    MODAL("Busca","Voce selecionou a opcao ".param('value'))->modalshow()->send();
}  

render_postback();

// PAGINA


PAGE("Framework Geovana")
    ->author("Eliezer Solinger")
    ->description("Descricao da pagina")
    ->copyright("2014 Eliezer Copyright")
    ->keywords("framework,html,gerador,php")
    ->add(
        CONTAINER([
                T(["Pagina de exemplo - ",T("Geovana Framework")->italic()])->h1(),BR,
                T("Abstração é evolução")->italic()->h3(),
                DIV(
                    A(T("Link do Github")->italic(),"https://github.com/EliezerSolinger/Geovana")->newtab()
                )->float_right(),
                HR,
                DIV([DIV("DIV 1 teste"),DIV(["Div 2 teste ",T("TESTE")->deleted()])]),
                BUTTON("Clique-me")->id("testbutton")->danger()->call("clicou_botao","div_avisos"),
                DIV(["Lista de teste",OrderedList(["item 1","item 2","item 3",T("topico 4")->deleted()])]),
                TABLE([
                    [["produto","valor","preco"]],
                    [
                        ["jabuticaba","12","45"],
                        ["melao","35","33"],
                        ["melancia","44","23"],
                        ["laranha","35","33"],
                        ["pera","35","33"]
                    ]
                ])->bordered()->hover()->stripped(),
                BR,
                HR,
                BR,
                T(microtime())->h6()->id("segundos")->updatetime(200000),
                UPDATEBUTTON("atualizar","segundos")->info(),
                HR,
                ROW([
                    COL([
                         AUDIO("pimentas-do-reino.mp3"),
                         VIDEO("exemplo.mp4")->w_100()
                    ])->grid(12,12,6),
                    COL([
                        IMAGE("icon.png")->w_100()
                    ])->grid(12,12,6)
                ]),
                FORM()->sendserver("fomulario_busca","div_avisos")->id("fbusca")->add([
                    FIELDSET([
                        LABEL("Digite a Sua Busca:"),
                        INPUTGROUP(
                          false,
                          SEARCHINPUT()->name("q"),
                          BUTTON("Pesquisar")->submit()->success()
                        )
                    ])
                ]),
                FORM(".",true)->add([
                        LABEL("Envie Somente fotos"),
                        DIVFILE(FILEINPUT()->accept_image()),BR,
                        LABEL("Envie Somente MP3 e MP4"),
                        DIVFILE(FILEINPUT(".mp3,.mp4")),BR,
                        PROGRESSBAR(0, 100,25)->animated()->my(2)
                        ,BR,
                        METER(50,0,100,20,80,50),
                        BR,
                ]),    
                DIV([
                    LABEL("Selecione uma opcao:"),
                    DROPDOWN([
                     ["Opcao 1","0"],
                     ["Opcao 2","1",true],
                     ["Opcao 3","2"]
                    ])->name("drop_opcao")->when_change("mudou_opcao","div_avisos")
                ]),
                $div_aviso,
                BR,BR,BR,BR
            ])->my(3)
        )->configure()->send();