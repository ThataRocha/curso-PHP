<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso do PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <div class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li> 
                            <a href="exercicio.php?dir=teste&file=teste"> Teste</a>
                        </li>
                        <li> 
                            <a href="exercicio.php?dir=basico&file=ola"> Olá PHP</a>
                        </li>
                        <li> <a href="exercicio.php?dir=basico&file=html" >Integração HTML</a>
                        </li>
                        <li> <a href="exercicio.php?dir=basico&file=css" >Integração CSS</a>
                        </li>
                        <li> <a href="exercicio.php?dir=basico&file=comentarios" >Comentários PHP</a>
                        </li>
                        <li> <a href="exercicio.php?dir=basico&file=desafio" >Desafio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <footer class="rodape">
        <p> COD3R & Thais Rocha &copy <?= date('Y');?> </p>
    </footer>
</body>
</html>