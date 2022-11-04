<!-- Sistema de exibição de vídeos em salas virtuais - ERural -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de exibição de vídeos em salas virtuais</title>
    <link rel="shortcut icon" href= "favicon.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Esquerda -->
    <div id="window-esquerda">
        <div id="title-bar">
            <div id="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="window-body">
            <h1 id="apresentacao">Olá, tudo bem?<br>Seja bem vindo(a) ao<br> Sistema de exibição de vídeos em salas virtuais! </h1>
        </div>
    </div>
<!-- Direita -->
    <div id="window-direita" >
        <div id="title-bar">
            <div id="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="window-body">
            <h1 id="apresentacao">Faça o Upload do seu arquivo!</h1>
            <div id="inputBox">
                <?php

                    $nome_do_arquivo = "arquivo.mp4";

                    if(isset($_POST['acao'])){
                        //Formulário foi enviado
                        $arquivo = $_FILES['file'];

                        $arquivoNovo = explode('.', $arquivo['name']);

                        if($arquivoNovo[sizeof($arquivoNovo)-1] != 'mp4'){
                            die('Você não pode fazer upload deste tipo de arquivo!');
                        }else{
                            echo 'Upload foi feito com sucesso!';
                            move_uploaded_file($arquivo['tmp_name'],'uploads/'.$nome_do_arquivo);
                        }
                    }
                ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <input id="acao" type="submit" value="Enviar" name="acao">
                </form>
                <a href="room.php">
                    <input id="sala" type="submit" value="Sua sala" name="sala">
                </a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#window-direita").draggable();
        });
        $(function() {
            $("#window-esquerda").draggable();
        });
    </script>
</body>
</html>