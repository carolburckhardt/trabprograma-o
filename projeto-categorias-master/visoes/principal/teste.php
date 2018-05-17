<html>

<head>
    <title></title>
    <link rel="stylesheet" href="../../assets/css/teste.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
                $("#abas ul li").click(function () {
                    $("#abas ul li").removeClass("selecionado");
                    $(this).addClass("selecionado");

                });
            });
        </script>
</head>

    <body>

        <div id="abas">
             <ul>
                 <li> Aba 1</li>
                 <li> Aba 2</li>
                 <li> Aba 3</li>
            </ul>
        </div>

    <div class = "conteudo">
        conteudo 1
    </div>
    <div class = "conteudo">
        conteudo 2
    </div>
    <div class = "conteudo">
        conteudo 3
    </div>
    </body>
</html>