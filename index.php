<!-- Estrutura php -->
<?php
    if(isset($_POST['user']) && isset($_POST['psw'])){
        $usuario=$_POST['user'];
        $senha=$_POST['psw'];

        if($usuario == 'nicanolas' && $senha == '666'){
            $_SESSION['user']=$usuario;
            echo '<script>window.location="./nicanolas.php"</script>';
            $_SESSION['psw']=$senha;
            exit();
        }
        if($usuario == 'L1ppi' && $senha == '123'){
            $_SESSION['user']=$usuario;
            echo '<script>window.location="./principal.php"</script>';
            $_SESSION['psw']=$senha;
            exit();
        }
        else{
            echo '<script>alert("Usuario e/ou senha incorreto")</script>';
        }
    }
?>
<!-- Estrutura html -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 2-Editar a estrutura padrão: titúlo,css,icone -->
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="shortcut icon" href="./img/icone.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <!-- 3-Criar a DIV e o FORM - body{} -->
    <div class="login">
        
        <div class="header">Sistema de controle</div>
        <!-- Criar formulário -->
        <!-- 3.1 -3.2 inputs e button -->
        <form action="" method="POST">
            <img src="./img/login.png" alt="login" class="imagem-login">
            <input type="text" name="user" placeholder="USUARIO" required>
            <input type="password" name="psw" placeholder="*****" required>
            <button onclick="">entrar</button>
        </form>
    </div>
</body>
</html>

