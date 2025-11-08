<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="icon" type="image/png" href="IMG/contato.png">

    <style>
        /* ===== RESET ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* ===== FUNDO COLORIDO ===== */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ff0000, #02f70e, #000000);
            background-size: 300% 300%;
            animation: gradient 6s ease infinite;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* ===== CONTAINER ===== */
        main {
            background-color: #ffffffee;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            transition: 0.3s;
        }

        main:hover {
            transform: scale(1.02);
        }

        /* ===== TÍTULO ===== */
        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }

        /* ===== LABELS ===== */
        label {
            display: block;
            text-align: left;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        /* ===== CAMPOS ===== */
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ccc;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: #000000;
            box-shadow: 0 0 6px #00000077;
        }

        /* ===== TEXTAREA ===== */
        textarea {
            height: 100px;
            resize: none;
        }

        /* ===== BOTÃO ===== */
        button {
            background: linear-gradient(135deg, #000000, #00ff88);
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        button:hover {
            background: linear-gradient(135deg, #12c261, #00cc66);
            transform: scale(1.03);
        }

        /* ===== MENSAGENS ===== */
        .erro {
            color: red;
            font-weight: bold;
            margin-top: 15px;
        }

        .sucesso {
            color: green;
            font-weight: bold;
            margin-top: 15px;
        }

        /* ===== RESPONSIVO ===== */
        @media (max-width: 400px) {
            main {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <main>
        <h1>Fale Conosco 💬</h1>

        <form class="formulario" action="" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea>

            <button type="submit">Enviar Mensagem</button>
        </form>

        <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Limpa e pega os dados
            $nome = trim($_POST['nome']);
            $email = trim($_POST['email']);
            $mensagem = trim($_POST['mensagem']);

            // Verifica se os campos estão preenchidos
            if (empty($nome) || empty($email) || empty($mensagem)) {
                echo "<p class='erro'>Por favor, preencha todos os campos.</p>";
            } 
            // Verifica se o e-mail é válido
            else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p class='erro'>E-mail inválido.</p>";
            } 
            // Caso tudo esteja certo
            else {
                echo "<p class='sucesso'>Obrigado, <strong>$nome</strong>! Sua mensagem foi enviada com sucesso ✅</p>";
            }
        }
        ?>
    </main>
</body>
</html>
