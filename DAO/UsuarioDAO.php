<?php

/*
    FELIPE BARBOSA FRONTOROLI           RA: 20748825
    FELIPE NEGRI VIEIRA                 RA: 20970332
    LEONARDO SANCHES DO NASCIMENTO      RA: 20982131
    PHILIPE TIAGO CUNHA                 RA: 20931241
*/

//$_SERVER['DOCUMENT_ROOT'] -> serve para obter o caminho raíz do projeto.
include($_SERVER['DOCUMENT_ROOT'] . '/GameLand/DataSource/DataSource.php');

class UsuarioDAO {
    
    private $linkConnection;

    public function __construct() {        
        $this->linkConnection = new DataSource("gameland");
    }

    public function InserirUsuario($novoUsuario) {
        $querySql = 'INSERT INTO USUARIO(NOME, CPF, ENDERECO, EMAIL, SENHA, CIDADE, ESTADO, CEP) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';

        //deixa engatilhado a execução da query
        $stn = mysqli_prepare($this->linkConnection->getConnection(), $querySql);

        $nome = $novoUsuario->getNome();
        $cpf = $novoUsuario->getCpf();
        $endereco = $novoUsuario->getEndereco();
        $email = $novoUsuario->getEmail();
        $senha = $novoUsuario->getSenha();
        $cidade = $novoUsuario->getCidade();
        $estado = $novoUsuario->getEstado();
        $cep = $novoUsuario->getCep();
        //$aceitacaoTermo = $novo->getTermoAceitacao();

        //setando valores do VALUES da query
        $stn->bind_param("ssssssss", $nome, $cpf, $endereco, $email, $senha, $cidade, $estado, $cep);

        //executa o bind
        $stn->execute();
    }
    
    public function AtualizarSenha($atualizarUsuario) {
        $querySql = 'UPDATE USUARIO SET SENHA = ? WHERE EMAIL = ?';

        //deixa engatilhado a execução da query
        $stn = mysqli_prepare($this->linkConnection->getConnection(), $querySql);
        
        $email = $atualizarUsuario->getEmail();
        $senha = $atualizarUsuario->getSenha();

        //setando valores do VALUES da query
        $stn->bind_param("ss", $senha, $email);

        //executa o bind
        $stn->execute();
    }
}