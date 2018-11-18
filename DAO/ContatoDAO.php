<?php

/*
    FELIPE BARBOSA FRONTOROLI           RA: 20748825
    FELIPE NEGRI VIEIRA                 RA: 20970332
    LEONARDO SANCHES DO NASCIMENTO      RA: 20982131
    PHILIPE TIAGO CUNHA                 RA: 20931241
*/

//$_SERVER['DOCUMENT_ROOT'] -> serve para obter o caminho raíz do projeto.
include($_SERVER['DOCUMENT_ROOT'] . '/GameLand/DataSource/DataSource.php');

$link = mysqli_connect("den1.mysql2.gear.host", "gameland", "Vf62202_4!Or");

class ContatoDAO {
    
    private $linkConnection;

    public function __construct() {        
        $this->linkConnection = new DataSource("gameland");
    }

    public function InserirContato($novoContato) {
        $querySql = 'INSERT INTO CONTATO(NOME, EMAIL, ASSUNTO, MENSAGEM) VALUES (?, ?, ?, ?)';

        //deixa engatilhado a execução da query
        $stn = mysqli_prepare($this->linkConnection->getConnection(), $querySql);

        $insertion = mysqli_query($link,$querySql)
        $insertion->execute();
        $nome = $novoContato->getNome();
        $email = $novoContato->getEmail();
        $assunto = $novoContato->getAssunto();
        $mensagem = $novoContato->getMensagem();

        //setando valores do VALUES da query
        $stn->bind_param("ssss", $nome, $email, $assunto, $mensagem);

        //executa o bind
        $stn->execute();
    }
}