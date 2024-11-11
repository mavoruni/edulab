<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.cdnfonts.com/css/adlam-display" rel="stylesheet">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
   <link rel="icon" type="image/x-icon" href="favicon.ico">

   <!-- <link rel="stylesheet" href="style.css"> -->
   <title>Login - Edu</title>
   <style>
      :root {
         --blue: #13bae4;
         --lightblue: #9de3ff;
         --yellow: #fde38f;
         --darkyellow: #ffd562;
         --red: #ff8670;
         --dark: rgb(0, 10, 41);
      }

      body {
         margin: 0;
         padding: 0;
         font-family: 'Montserrat', sans-serif;
         background: linear-gradient(to bottom, #ffd96f, #ff8670, #76d8ff);
         /* background-color: #ffc421; */
         background-repeat: no-repeat;
         background-attachment: fixed;
         color: #fff;
      }

      a {
         color: inherit;
         text-decoration: none;
      }

      .container {
         width: max-content;
         text-align: center;
         margin: 1em auto;

         /* border: 2px solid blue; */
         p {
            font-size: 1.2em;
            margin-bottom: 28px;
         }
      }

      h1 {
         font-size: 42px;
         margin-bottom: 20px;
      }

      .login-container {
         background-color: rgba(255, 255, 255, 0.8);
         border-radius: 15px;
         padding: 30px;
         box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
         display: inline-block;
         color: var(--dark);

         p {
            margin: 10px;
         }
      }

      h2 {
         color: #ff6347;
         margin-bottom: 20px;
      }

      input[type="text"],
      input[type="password"] {
         width: 90%;
         padding: 12px;
         margin: 10px 0;
         border: 2px solid #13bae4;
         border-radius: 5px;
         font-size: 1.2em;
      }

      button {
         background-color: #ff7962;
         color: white;
         padding: 12px 20px;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         font-size: 18px;
         transition: background-color 0.3s;
         margin: 10px;
      }

      button:hover {
         background-color: #ff5537;
         ;
      }

      .register-button {
         background-color: #13bae4;
      }

      .register-button:hover {
         background-color: #008aac;
      }

      .hover {
         transition: all 0.4s;
      }

      .hover:hover {
         transform: scale(1.1);
      }
   </style>
</head>

<body>

   <?php
   $nome = $email = $senha = "";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nome = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $senha = test_input($_POST["website"]);
   }

   function test_input($data)
   {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }

   $email = test_input($_POST["email"]);
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
   }
   ?>

   <div class="container">
      <a href="index.html" class="hover"><img src="src/logo-edulab.png" alt="logo" width="140"></a>
      <h1> Cadastre-se no Edu </h1>
      <p>Professor(a), agora você pode criar seus próprios jogos com o EduLab!</p>
      <div class="login-container">
         <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> -->
         <form action="/login" method="POST">
            <input type="text" placeholder="Nome de Usuário" name="nome" required><br>
            <input type="text" placeholder="Email" name="email" required><br>
            <input type="password" placeholder="Senha" name="senha" required><br>
            <button type="submit">Entrar</button>
         </form>
         <p>Já tem uma conta?</p>
         <button class="register-button" style="margin-bottom:0"><a href="login.html">Fazer Login</a></button>
      </div>
   </div>

</body>

</html>