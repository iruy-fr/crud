<?php
    require_once 'app/Entity/Projeto.php';
    use \App\Entity\Projeto;

    $objProjeto = new Projeto();

    //validação do formulário
    if(isset($_POST['titulo'] , $_POST['descricao'] , $_POST['ativo'])){
        $objProjeto->titulo =  $_POST['titulo'];
        $objProjeto->descricao =  $_POST['descricao'];
        $objProjeto->status =  $_POST['ativo'];
        
        $objProjeto->cadastrar();

        header('location: index.php?status=success');
    }

    include 'includes/header.php';
    include 'includes/formulario.php';
    include 'includes/footer.php';
?>