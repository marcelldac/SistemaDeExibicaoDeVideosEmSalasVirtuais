<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua sala</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href= "favicon.png">
</head>
<body>
    <div id="window-esquerda">
        <div id="title-bar">
            <div id="dots">
                <span onclick="voltar()"></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="window-body">
            <iframe width="560" height="315" src="uploads/arquivo.mp4" allowfullscreen></iframe>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#window-esquerda").draggable();
        });
        function voltar(){
            window.history.back()
        }
    </script>
</body>
</html>