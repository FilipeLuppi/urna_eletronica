<?php
require_once('util.php');

$usuarioLogado = usuarioLogado();

if (!$usuarioLogado) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleitor</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }

        body {
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 300px;
            margin: 0px;
            margin-top: 200px;
            text-align: center;
        }

        input {
            display: block;
            margin: 0px auto;
            width: 300px;
            height: 30px;
        }

        #nome_eleitor,
        #alerta_ausente {
            display: block;
            width: 300px;
            margin-top: 10px;
            justify-content: center;
            align-items: center;
            text-align: start;
        }

        .container {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        label {
            text-align: start;
        }

        #botao_votar {
            font-size: 15px;
            margin-top: 30px;
            width: 120px;
            background-color: #04ff22;

        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h3 style="margin-bottom:20px">Autenticar Eleitor</h3>
            <label>
                <h4>Título de eleitor</h4>
                <input type="search" inputmode="numeric" id="tit_eleitor" value='' required minlength="12" maxlength="12">

                <div id="nome_eleitor"></div>
                <div id="alerta_ausente"></div>

                <input type="submit" id="botao_votar" placeholder="VOTAR" value="Votar">

            </label>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="eleitores.js"></script>

    <script>
        $(document).ready(() => {
            $('#botao_votar').prop("disabled", true);

            function votar() {
                var titEleitor = document.getElementById('tit_eleitor').value;
                alert('Eleitor autenticado com sucesso!');
                location.href = "votacao.php"
            }

            $('#tit_eleitor').on('input', (input) => {
                const tituloEleitorValor = $('#tit_eleitor').val();
                const tituloEleitorTamanho = tituloEleitorValor.length || 0;

                if (tituloEleitorValor === '') {
                    $('#nome_eleitor').text('');
                    $('#alerta_ausente').text('');
                    $('#botao_votar').prop("disabled", true);
                }

                if (tituloEleitorTamanho === 12) {
                    const eleitorSelecionado = eleitores.find(eleitor => eleitor.tit_eleitor === parseInt(tituloEleitorValor));

                    if (eleitorSelecionado) {
                        $('#nome_eleitor').text('NOME: ' + eleitorSelecionado.nome);
                        $('#alerta_ausente').text('');
                        $('#botao_votar').prop("disabled", false);
                    } else {
                        $('#nome_eleitor').text('');
                        $('#alerta_ausente').text('TÍTULO NÃO ENCONTRADO!');
                        $('#botao_votar').prop("disabled", true);
                    }
                }
            });

            $('form').on('submit', (event) => {
                event.preventDefault();
                alert('Eleitor autenticado com sucesso!');

                $.ajax({
                    type: "POST",
                    url: "login-eleitor.php",
                    data: null,
                    success: function() {
                        location.href = "votacao.php";
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {

                    }
                });
            });
        });
    </script>

    <!-- <script src="script_eleitores.js"></script> -->
</body>

</html>