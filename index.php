<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100%;
        }

        form {
            width: 300px;
            margin: 200px auto;
            text-align: center;
        }

        input {
            display: block;
            margin: 10px auto;
            width: 250px;
            height: 30px;
        }
    </style>
</head>

<body>

    <form action="">
        <h3>Iniciar votação</h3>
        <input type="text" placeholder="Login Mesário" id="login" value='' required>
        <input type="password" placeholder="Senha" id="senha" value='' required>
        <input type="submit" onclick="logar(); return false">
    </form>

    <script>
        function logar() {

            var login = document.getElementById('login').value;
            var senha = document.getElementById('senha').value;

            if (login == "admin" && senha == "admin") {
                alert('Autenticação realizada com sucesso!');
                location.href = "login.php"
            } else {
                alert('Usuário ou senha incorretos');
                location.href = "index.php"
            };
        }
    </script>
</body>

</html>