<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV - Prénom Nom</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 30px;
      background-color: #fff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    h1 {
      text-align: center;
      font-size: 2.5em;
      margin-bottom: 20px;
      color: #333;
      text-transform: uppercase;
      letter-spacing: 3px;
    }

    h2 {
      font-size: 1.5em;
      margin-bottom: 10px;
      color: #666;
      text-transform: uppercase;
      letter-spacing: 2px;
      border-bottom: 2px solid #ddd;
      padding-bottom: 5px;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
      font-size: 1.1em;
      line-height: 1.4;
    }

    .info {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .info div {
      width: 48%;
    }

    .skills {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
    }

    .skill {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px;
      background-color: #f8f8f8;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .skill-name {
      font-size: 1.1em;
      color: #666;
    }

    .bar {
      width: 60%;
      height: 5px;
      background-color: #ddd;
      border-radius: 5px;
      overflow: hidden;
    }

    .progress {
      height: 100%;
      background-color: #3399ff;
      border-radius: 5px;
      transition: width 1s;
    }

  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      let skills = document.querySelectorAll('.progress');
      skills.forEach(function(skill) {
        setTimeout(function() {
          skill.style.width = skill.dataset.level;
        }, 500);
      });
    });
  </script>
</head>
<body>
  <div class="container">
    <h1>Prénom Nom</h1>
    <div class="info">
      <div>
        <h2>Profil</h2>
        <ul>
          <li>Développeur Web</li>
          <li>Technicien Support</li>
        </ul>
      </div>
      <div>
        <h2>Contact</h2>
       
    <ul>
      <li>Téléphone : 06 XX XX XX XX</li>
      <li>Email : prenom.nom@example.com</li>
      <li>Adresse : 123 rue de la République, 75000 Paris</li>
    </ul>
  </div>
</div>
<h2>Expérience professionnelle</h2>
<ul>
  <li>Développeur Web chez Entreprise A, 2020 - Présent</li>
  <li>Technicien Support chez Entreprise B, 2018 - 2020</li>
</ul>
<h2>Formation</h2>
<ul>
  <li>Diplôme en Développement Web, École XYZ, 2018</li>
  <li>BTS Services Informatiques aux Organisations, Lycée ABC, 2016</li>
</ul>
<h2>Compétences</h2>
<div class="skills">
  <div class="skill">
    <span class="skill-name">HTML</span>
    <div class="bar">
      <div class="progress" data-level="90%"></div>
    </div>
  </div>
  <div class="skill">
    <span class="skill-name">CSS</span>
    <div class="bar">
      <div class="progress" data-level="80%"></div>
    </div>
  </div>
  <div class="skill">
    <span class="skill-name">JavaScript</span>
    <div class="bar">
      <div class="progress" data-level="70%"></div>
    </div>
  </div>
  <div class="skill">
    <span class="skill-name">PHP</span>
    <div class="bar">
      <div class="progress" data-level="60%"></div>
    </div>
  </div>
  <div class="skill">
    <span class="skill-name">SQL</span>
    <div class="bar">
      <div class="progress" data-level="75%"></div>
    </div>
  </div>
  <div class="skill">
    <span class="skill-name">Support technique</span>
    <div class="bar">
      <div class="progress" data-level="85%"></div>
    </div>
  </div>
</div>
  </div>
</body>
</html>