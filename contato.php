<?php 

$aviso = '';
$sucesso = false;

if (isset($_POST['nome'])){
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $check = $_POST['check'];
    $radio = $_POST['radio'];
    $estado = $_POST['estado'];
    $mensagem = $_POST['mensagem'];
    
    if(empty($nome)){
        $aviso .= 'Favor preencher o nome.<br>';
    }
    if(empty($email)){
        $aviso .= 'Favor preencher o e-mail.<br>';
    }
    if(empty($senha)){
        $aviso .= 'Favor preencher o senha.<br>';
    }
    if(empty($estado)){
        $aviso .= 'Favor preencher o nestado.<br>';
    }
    if(empty($mensagem)){
        $aviso .= 'Favor preencher o mensagem.<br>';
    }
    if(empty($aviso)){
        $aviso .= 'Recebemos sua mensagem. Dados enviados<br>';
        $aviso .= 'Nome: '. $nome. '<br>';
        $aviso .= 'E-mail: '. $email. '<br>';
        $aviso .= 'Senha: '. $senha. '<br>';
        $aviso .= 'Check: '. $check. '<br>';
        $aviso .= 'Radio: '. $radio. '<br>';
        $aviso .= 'Estado: '. $estado. '<br>';
        $aviso .= 'Mensagem: '. $mensagem. '<br>';
        
        $sucesso = true;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Recebimento de dados</title>
    </head>
    <body>
        <?php if (!empty($aviso)): ?>
            <h2><?php print $aviso; ?></h2>
        <?php endif?>
        
        <?php if(!$sucesso): ?>
            <div>Formulário HTML</div><br><br>
            <form action="contato.php" method="post">
                <label for="nome">Nome: </label><input type="text" name="nome" id="nome" value="<?php if(isset($nome)){echo $nome;}?>"/><br><br>
                <label for="email">Email: </label><input type="email" name="email" id="email" value="<?php if(isset($email)){echo $email;}?>"/><br><br>
                <label>Senha: </label><input type="password" name="senha" id="senha" value="<?php if(isset($senha)){echo $senha;}?>"/><br><br>
                <label for="opcao1">Opção 1 </label><input type="checkbox" name="check" value="um" id="opcao1" checked/><br><br>
                <label for="opcao2">Opção 2 </label><input type="checkbox" name="check" value="dois" id="opcao2"/><br><br>
                <label for="radio1">radio 1</label><input type="radio" name="radio" value="um" id="radio1" checked/><br><br>
                <label for="radio2">radio 2</label><input type="radio" name="radio" value="dois" id="radio2"/><br><br>
                <label for="l"></label><input type="hidden" name="l" id="l"/><br><br>
                Estado: <select name="estado" id="estado">
                    <option value="rj">Rio de Janeiro</option>
                    <option value="sp">São Paulo</option>    
                    <option value="mg">Minas Gerais</option>
                    <option value="es">Espirito Santo</option>
                </select><br><br>
                Mensagem<br>
                <textarea name="mensagem" cols="40" rows="10" id="area" value="<?php if(isset($mensagem)){echo $mensagem;}?>"></textarea><br><br>
                <label for="enviar"></label><input type="submit" name="enviar" id="enviar"/>
            </form>
        <?php endif; ?>
        <br><a href="formulario.html">Voltar</a>
    </body>
</html>