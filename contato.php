<!DOCTYPE html>
<html>
    <head>
        <title>Recebimento de dados</title>
    </head>
    <body>
        Obrigado por entrar em contato com nosco!<br>
        nome: <?php echo $_POST['nome'];?><br>
        senha: <?php echo $_POST['senha'];?><br>
        email. <?php echo $_POST['email'];?><br>
        opção: <?php echo $_POST['check'];?><br>
        radio: <?php echo $_POST['radio'];?><br>
        estado: <?php echo $_POST['estado'];?><br>
        mensagem: <?php echo $_POST['mensagem'];?>
        <a href="formulario.html">Voltar</a>
    </body>
</html>