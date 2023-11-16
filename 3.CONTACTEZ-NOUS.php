<!DOCTYPE html>
<html>
<head>
  <title>Ma Page</title>
  <style>
    /* Styles CSS existants */
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-image: url('https://media.istockphoto.com/id/511661914/fr/photo/fond-de-texture-marbre-blanc-%C3%A0-motif.jpg?s=612x612&w=0&k=20&c=5uKV82duXQFS7JQ7H556kJTR-ZtAvoAeoq7KOf2cnOo=');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 280px;
      padding: 90px;
      border: 9px solid rgba(0, 0, 0, 0.084);
      border-radius: 20px;
      margin-top: 50px;
      background-image: url('https://media.istockphoto.com/id/1415424219/fr/photo/marbre-blanc-avec-motifs-bleu-et-orange-dor%C3%A9.jpg?s=612x612&w=0&k=20&c=dNjAO9aeQ6cinEM8TvcmiC4gvGoozO05mk2fwSco_80=');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    form input,
    form textarea,
    form button {
      margin-top: 10px;
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      
    }

    form button {
      width: auto;
    }

    header {
      
      margin-top: 250px;
      background-color: white;
      border-radius: 30px;
      transition: background-color 0.3s ease;
      width: 50%;
      border: 3px solid rgba(0, 0, 0, 0.174);
    }

    header:hover {
      background: linear-gradient(to bottom, rgba(148, 224, 237, 0.677), rgba(57, 242, 88, 0.716), rgba(239, 248, 109, 0.624));
    }

    nav {
      text-align: center;
   
    }

    nav ul {
      display: inline-block;
      margin: 0;
      padding: 0;
      list-style: none;
      margin-top: 1cm;
      border: none;
     
    }

    nav li {
      display: inline;
      margin-right: 2cm;
      border: none;
      
    }

    nav li a{
        text-decoration: none;
        color: black;
    }

    h1 {
      margin-top: 70px;
      color: rgba(0, 0, 0, 0.41);
    }
  

    .vide{
      margin-top: 150px;
    }
  </style>

</head>


<body>
  <header>
    <nav>
      <ul>
        <li><a href="1.ACCEUIL.html">Accueil</a></li>
        <li><a href="2.NOS_EXPOSITIONS.html">Nos Expositions</a></li>
        <li><a href="3.CONTACTEZ-NOUS.html">Contactez-nous</a></li>
      </ul>
    </nav>
  </header>
  

  <h1>
       FAITES-NOUS PARVENIR TOUTES VOS RECOMMANDATIONS ICI.
  </h1>


  <div>
    <form method="POST" action="">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required>

      <label for="objet">Objet de la requête :</label>
      <input type="text" id="objet" name="objet" required>

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message :</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit">Envoyer</button>
    </form>
  </div>

  <div class="vide"></div>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Récupérer les données du formulaire
      $nom = $_POST['nom'];
      $objet = $_POST['objet'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      // Envoyer l'e-mail à l'administrateur
      $to = "samuelkobee99@icloud.com";
      $subject = "Nouveau message de $nom";
      $body = "Objet: $objet\n\nMessage: $message";
      $headers = "From: $email";

      if (mail($to, $subject, $body, $headers)) {
          echo "<p>Votre message a été envoyé avec succès à l'administrateur.</p>";
      } else {
          echo "<p>Une erreur s'est produite lors de l'envoi du message.</p>";
      }
  }
  ?>

</body>
</html>
