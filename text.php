<!DOCTYPE html>
<html>
<head>
  <title>Page de Connexion et d'Inscription</title>
  <style>
    /* Ajoutez votre CSS ici */
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    h2 {
      text-align: center;
    }

    #video-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .container {
      display: flex;
      justify-content: space-between;
      width: 900px;
      padding: 20px;
      background-color: #f1f1f1;
      border-radius: 10px;
      height: 30%;
      background-image: url('https://media.istockphoto.com/id/1309127077/fr/photo/texture-blanche-de-pierre-de-marbre-avec-des-veines-dor.jpg?s=612x612&w=0&k=20&c=LlZd0kD545uT3nJOnEL532VLpA-kx_Ri5MEyQBZ1qRw=');
    }

    .form-container {
      flex: 1;
    }

    form {
      background-image:url('https://media.istockphoto.com/id/1309127077/fr/photo/texture-blanche-de-pierre-de-marbre-avec-des-veines-dor.jpg?s=612x612&w=0&k=20&c=LlZd0kD545uT3nJOnEL532VLpA-kx_Ri5MEyQBZ1qRw=');
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
      border: 1px solid rgba(25, 24, 24, 0.784);
    }

    form label {
      display: block;
      margin-bottom: 10px;
    }

    form input[type="text"],
    form input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }

    form button {
      width: 100%;
      padding: 10px;
      background-color: #0b0c0b;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .message {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    h2,h3,label{
        background-color: rgba(174, 172, 172, 0.562);
        color: rgb(13, 12, 12);
    }

    body{
        border: none;
    }
  </style>
</head>

<body>
  <video id="video-background" autoplay muted loop>
    <source src="https://media.istockphoto.com/id/1266592265/video/epic-studio-close-up-shot-of-a-gypsum-head-with-moving-and-changing-lighting-the-play-of.mp4?s=mp4-480x480-is&k=20&c=D1AXDdlpqjFCoX-J_hDhDiRkmzUWDmQtMx1rsFlI4Uc=" type="video/mp4">
    <!-- Ajoutez d'autres sources pour une meilleure compatibilité -->
  </video>

  <div class="container">
    <div class="message">
      <h2>Bienvenue sur notre site d'exposition</h2>
    </div>
    <div class="form-container">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h3>Connexion ou Inscription</h3>
        <label for="option">Choisissez une option :</label>
        <select id="option" name="option">
          <option value="connexion">Connexion</option>
          <option value="inscription">Inscription</option>
        </select>
        <button type="submit">Continuer</button>
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $option = $_POST["option"];

        if ($option === "inscription") {
          // Afficher le formulaire d'inscription ici
          echo '
            <form method="post" action="">
              <label for="nom">Nom :</label>
              <input type="text" id="nom" name="nom" required>

              <label for="prenom">Prénom :</label>
              <input type="text" id="prenom" name="prenom" required>

              <label for="adresse">Adresse postale :</label>
              <input type="text" id="adresse" name="adresse" required>

              <label for="email">Email :</label>
              <input type="email" id="email" name="email" required>

              <label for="avatar">Avatar :</label>
              <input type="file" id="avatar" name="avatar" accept="image/*" required>

              <button type="submit"> sinscrire</button>
            </form>
          ';

          // Traitement du formulaire d'inscription
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Récupérer les données du formulaire
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $adresse = $_POST["adresse"];
            $email = $_POST["email"];
            // Traitement supplémentaire, comme l'ajout dans la base de données
          }
        } elseif ($option === "connexion") {
          // Afficher le formulaire de connexion ici
          echo '
            <form method="post" action="">
              <label for="email">Email :</label>
              <input type="email" id="email" name="email" required>

              <label for="password">Mot de passe :</label>
              <input type="password" id="password" name="password" required>

              <button type="submit">Se connecter</button>
            </form>
          ';

          // Traitement du formulaire de connexion
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Récupérer les données du formulaire
            $email = $_POST["email"];
            $password = $_POST["password"];
            // Traitement supplémentaire, comme la vérification dans la base de données
          }
        }
      }
      ?>
    </div>
  </div>
</body>
</html>
