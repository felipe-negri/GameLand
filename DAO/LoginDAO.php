<?php

/*
  FELIPE BARBOSA FRONTOROLI           RA: 20748825
  FELIPE NEGRI VIEIRA                 RA: 20970332
  LEONARDO SANCHES DO NASCIMENTO      RA: 20982131
  PHILIPE TIAGO CUNHA                 RA: 20931241
 */

session_start();

//$_SERVER['DOCUMENT_ROOT'] -> serve para obter o caminho raíz do projeto.
include($_SERVER['DOCUMENT_ROOT'] . '/GameLand/DataSource/DataSource.php');

class LoginDAO {

    private $linkConnection;

    public function __construct() {
        $this->linkConnection = new DataSource("gameland");
    }

    public function Logar($login) {
        $querySql = 'SELECT ID, NOME, EMAIL, SENHA FROM USUARIO WHERE EMAIL = ? AND SENHA = ?';

        //deixa engatilhado a execução da query
        $stn = mysqli_prepare($this->linkConnection->getConnection(), $querySql);

        $email = $login->getEmail();
        $senha = $login->getSenha();

        //setando valores do VALUES da query
        $stn->bind_param("ss", $email, $senha);

        //executa o bind
        $stn->execute();

        //faz o bind com o result obtendo os valores dos campos do select
        $stn->bind_result($id, $name, $email, $senha);

        $stn->fetch();
        
        if ($id > 0) {            
            $usuarioLogado = array(
                'idUsuarioLogado' => $id,
                'nomeUsuarioLogado' => $name,
                'emailUsuarioLogado' => $email
            );
            
            $_SESSION['usuario'] = $usuarioLogado;
        } else {
            //$_SESSION['error'] = ['erro' => true, 'mensagem' => 'Usuário não encontrado!!!'];
            header('location: http://localhost/GameLand/View/Login/login.html');
        }
    }
}