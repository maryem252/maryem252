<?php 
$message = "";  

// Connexion MySQL 
$host = "localhost"; 
$user = "root";  
$pass = "";      
$db   = "market";  

$conn = new mysqli($host, $user, $pass, $db); 
if ($conn->connect_error) {     
    die("Erreur de connexion: " . $conn->connect_error); 
}  

// Formulaire soumis 
if ($_SERVER["REQUEST_METHOD"] == "POST") {     
    $username = trim($_POST['username']);     
    $email    = trim($_POST['email']);     
    $cin      = trim($_POST['cin']);     
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);      
    
    // Récupérer le solde entré par l'utilisateur, ou mettre 0 si vide     
    $solde_initial = isset($_POST['solde']) ? floatval($_POST['solde']) : 0.00;      
    
    // Vérifier si email ou CIN existent déjà     
    $check = $conn->prepare("SELECT id FROM users WHERE email = ? OR cin = ?");     
    $check->bind_param("ss", $email, $cin);     
    $check->execute();     
    $check->store_result();      
    
    if ($check->num_rows > 0) {         
        $message = "<p class='error'>Cet email ou CIN est déjà utilisé.</p>";     
    } else {         
        // Insertion avec le solde choisi         
        $stmt = $conn->prepare("INSERT INTO users (username, email, cin, password, solde) VALUES (?, ?, ?, ?, ?)");         
        $stmt->bind_param("ssssd", $username, $email, $cin, $password, $solde_initial);          
        
        if ($stmt->execute()) {             
            $message = "<p class='success'>Compte créé avec succès avec un solde de $solde_initial ! <a href='login.php'>Connectez-vous</a></p>";         
        } else {             
            $message = "<p class='error'>Erreur lors de l'inscription.</p>";         
        }     
    } 
} 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription - GenRYM</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      min-height: 100vh;
      background: linear-gradient(135deg, #6a0dad 0%, #b19cd9 50%, #4b0082 100%);
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      overflow-x: hidden;
    }

    /* Décorations de fond animées - version violette */
    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="30" r="2" fill="rgba(255,255,255,0.1)" opacity="0.9"><animate attributeName="r" values="1;4;1" dur="5s" repeatCount="indefinite"/><animate attributeName="opacity" values="0.2;0.9;0.2" dur="5s" repeatCount="indefinite"/></circle><circle cx="80" cy="70" r="1.8" fill="rgba(255,255,255,0.12)" opacity="0.7"><animate attributeName="r" values="0.8;3;0.8" dur="4s" repeatCount="indefinite"/></circle><circle cx="60" cy="15" r="2.2" fill="rgba(255,255,255,0.08)" opacity="0.6"><animate attributeName="r" values="1.2;3.8;1.2" dur="6s" repeatCount="indefinite"/></circle></svg>') repeat;
      animation: floatBackground 30s linear infinite;
      pointer-events: none;
      z-index: -2;
    }

    @keyframes floatBackground {
      0% { transform: translateY(0px) rotate(0deg); }
      100% { transform: translateY(-60px) rotate(360deg); }
    }

    /* Spirales décoratives */
    .decoration-spirals {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: -1;
    }

    .spiral {
      position: absolute;
      width: 8px;
      height: 8px;
      background: radial-gradient(circle, rgba(255,255,255,0.8), rgba(138,43,226,0.3));
      border-radius: 50%;
      animation: spiralFloat 25s linear infinite;
      box-shadow: 0 0 15px rgba(255,255,255,0.4);
    }

    .spiral:nth-child(1) { left: 15%; animation-delay: -3s; }
    .spiral:nth-child(2) { left: 25%; animation-delay: -10s; }
    .spiral:nth-child(3) { left: 35%; animation-delay: -5s; }
    .spiral:nth-child(4) { left: 45%; animation-delay: -15s; }
    .spiral:nth-child(5) { left: 55%; animation-delay: -7s; }
    .spiral:nth-child(6) { left: 65%; animation-delay: -12s; }
    .spiral:nth-child(7) { left: 75%; animation-delay: -4s; }
    .spiral:nth-child(8) { left: 85%; animation-delay: -9s; }

    @keyframes spiralFloat {
      0% { 
        transform: translateY(100vh) scale(0) rotate(0deg);
        opacity: 0;
      }
      15% {
        opacity: 1;
      }
      85% {
        opacity: 1;
      }
      100% { 
        transform: translateY(-10vh) scale(1.5) rotate(720deg);
        opacity: 0;
      }
    }

    .container {
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(25px);
      padding: 50px;
      border-radius: 35px;
      box-shadow: 
        0 30px 60px rgba(75,0,130,0.25),
        0 0 0 1px rgba(255,255,255,0.4),
        inset 0 1px 0 rgba(255,255,255,0.7);
      width: 90%;
      max-width: 480px;
      text-align: center;
      border: 2px solid rgba(138, 43, 226, 0.2);
      position: relative;
      overflow: hidden;
      animation: containerEntrance 1.2s ease-out;
      margin: 50px 0;
    }

    @keyframes containerEntrance {
      0% {
        opacity: 0;
        transform: translateY(60px) scale(0.85) rotate(-2deg);
      }
      100% {
        opacity: 1;
        transform: translateY(0) scale(1) rotate(0deg);
      }
    }

    .container::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(138,43,226,0.2), transparent);
      animation: containerShimmer 5s infinite;
    }

    @keyframes containerShimmer {
      0% { left: -100%; }
      100% { left: 100%; }
    }

    .container::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: linear-gradient(90deg, #6a0dad, #b19cd9, #4b0082, #6a0dad);
      background-size: 400% 100%;
      animation: topGradient 6s ease infinite;
      border-radius: 35px 35px 0 0;
    }

    @keyframes topGradient {
      0% { background-position: 400% 0; }
      100% { background-position: -400% 0; }
    }

    h2 {
      color: #4b0082;
      margin-bottom: 35px;
      font-size: 30px;
      text-shadow: 2px 2px 6px rgba(75,0,130,0.2);
      background: linear-gradient(45deg, #4b0082, #6a0dad);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      position: relative;
      padding: 20px;
      border-radius: 18px;
      backdrop-filter: blur(8px);
    }

    h2::before {
      content: '📝';
      position: absolute;
      left: -20px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 26px;
      animation: noteFloat 4s ease-in-out infinite;
    }

    h2::after {
      content: '🌟';
      position: absolute;
      right: -20px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 22px;
      animation: starSparkle 2.5s ease-in-out infinite;
    }

    @keyframes noteFloat {
      0%, 100% { 
        transform: translateY(-50%) rotate(-5deg);
      }
      50% { 
        transform: translateY(-65%) rotate(5deg);
      }
    }

    @keyframes starSparkle {
      0%, 100% { 
        opacity: 0.5;
        transform: translateY(-50%) scale(1) rotate(0deg);
      }
      50% { 
        opacity: 1;
        transform: translateY(-50%) scale(1.3) rotate(180deg);
      }
    }

    label {
      display: block;
      text-align: left;
      margin-top: 20px;
      color: #333;
      font-weight: bold;
      font-size: 16px;
      position: relative;
      padding-left: 35px;
    }

    label::before {
      position: absolute;
      left: 0;
      top: 0;
      font-size: 18px;
    }

    label[for="username"]::before {
      content: '👤';
    }

    label[for="email"]::before {
      content: '📧';
    }

    label[for="cin"]::before {
      content: '🆔';
    }

    label[for="password"]::before {
      content: '🔑';
    }

    label[for="solde"]::before {
      content: '💰';
    }

    input {
      width: 100%;
      padding: 16px;
      margin-top: 10px;
      border: 2px solid rgba(138, 43, 226, 0.3);
      border-radius: 18px;
      font-size: 16px;
      transition: all 0.4s ease;
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(8px);
      position: relative;
    }

    input:focus {
      border-color: #6a0dad;
      outline: none;
      box-shadow: 
        0 0 25px rgba(138,43,226,0.4),
        0 8px 20px rgba(138,43,226,0.2);
      transform: translateY(-3px);
      background: rgba(255, 255, 255, 1);
    }

    input:hover {
      border-color: rgba(138, 43, 226, 0.5);
      transform: translateY(-1px);
    }

    button {
      width: 100%;
      padding: 20px;
      margin-top: 35px;
      background: linear-gradient(135deg, #4b0082, #6a0dad);
      color: white;
      border: none;
      border-radius: 18px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
      box-shadow: 0 12px 30px rgba(75, 0, 130, 0.3);
    }

    button::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
      transition: left 0.6s ease;
    }

    button:hover::before {
      left: 100%;
    }

    button:hover {
      background: linear-gradient(135deg, #2e0051, #4b0082);
      transform: translateY(-4px);
      box-shadow: 0 18px 40px rgba(75, 0, 130, 0.4);
    }

    button:active {
      transform: translateY(-2px);
    }

    button::after {
      content: '✨';
      position: absolute;
      right: 18px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 18px;
      opacity: 0;
      transition: all 0.4s ease;
    }

    button:hover::after {
      opacity: 1;
      transform: translateY(-50%) translateX(8px);
    }

    .message {
      margin-top: 30px;
      font-weight: bold;
      padding: 18px;
      border-radius: 15px;
      backdrop-filter: blur(12px);
      border: 2px solid transparent;
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .message::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, transparent, currentColor, transparent);
      background-size: 250% 100%;
      animation: messageGradient 3s ease infinite;
    }

    @keyframes messageGradient {
      0% { background-position: 250% 0; }
      100% { background-position: -250% 0; }
    }

    .success {
      color: #28a745;
      background: rgba(40, 167, 69, 0.12);
      border-color: rgba(40, 167, 69, 0.3);
      animation: successPulse 1s ease-out;
    }

    .success::after {
      content: '🎉';
      position: absolute;
      right: 18px;
      top: 50%;
      transform: translateY(-50%);
      animation: celebrateBounce 1.2s ease;
    }

    @keyframes successPulse {
      0% {
        transform: scale(0.85);
        opacity: 0;
      }
      50% {
        transform: scale(1.08);
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes celebrateBounce {
      0%, 20%, 60%, 100% { transform: translateY(-50%) scale(1) rotate(0deg); }
      40% { transform: translateY(-50%) scale(1.3) rotate(15deg); }
      80% { transform: translateY(-50%) scale(1.15) rotate(-10deg); }
    }

    .error {
      color: #dc3545;
      background: rgba(220, 53, 69, 0.12);
      border-color: rgba(220, 53, 69, 0.3);
      animation: errorShake 1s ease-out;
    }

    .error::after {
      content: '⚠️';
      position: absolute;
      right: 18px;
      top: 50%;
      transform: translateY(-50%);
      animation: warningPulse 1.2s ease;
    }

    @keyframes errorShake {
      0%, 100% { transform: translateX(0); }
      20% { transform: translateX(-8px); }
      80% { transform: translateX(8px); }
    }

    @keyframes warningPulse {
      0%, 100% { transform: translateY(-50%) scale(1); }
      50% { transform: translateY(-50%) scale(1.2); }
    }

    .logo-container {
      position: absolute;
      top: 30px;
      left: 30px;
      align-items: center;
      gap: 15px;
      z-index: 10;
      padding: 18px;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      border-radius: 25px;
      border: 2px solid rgba(255, 255, 255, 0.25);
      transition: all 0.4s ease;
    }

    .logo-container:hover {
      background: rgba(255, 255, 255, 0.25);
      transform: scale(1.08) rotate(2deg);
      box-shadow: 0 15px 35px rgba(138, 43, 226, 0.2);
    }

    .logo-container img {
      width: 75px;
      filter: drop-shadow(0 6px 12px rgba(75,0,130,0.3));
      transition: all 0.4s ease;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.9);
      padding: 10px;
    }

    .logo-container img:hover {
      transform: rotate(-15deg) scale(1.15);
      filter: drop-shadow(0 12px 25px rgba(138,43,226,0.5));
    }

    /* Décorations hexagonales */
    .hex-decoration {
      position: fixed;
      width: 100px;
      height: 100px;
      background: radial-gradient(circle, rgba(138, 43, 226, 0.15), transparent);
      clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
      pointer-events: none;
      z-index: -1;
    }

    .hex-decoration.top-left {
      top: -50px;
      left: -50px;
      animation: hexRotate 8s ease-in-out infinite;
    }

    .hex-decoration.bottom-right {
      bottom: -50px;
      right: -50px;
      animation: hexRotate 8s ease-in-out infinite 4s;
    }

    @keyframes hexRotate {
      0%, 100% { 
        transform: rotate(0deg) scale(1);
        opacity: 0.3;
      }
      50% { 
        transform: rotate(60deg) scale(1.4);
        opacity: 0.1;
      }
    }

    /* Diamants scintillants */
    .diamond-decoration {
      position: fixed;
      color: rgba(255, 255, 255, 0.7);
      font-size: 24px;
      pointer-events: none;
      z-index: -1;
      animation: diamondTwinkle 4s ease-in-out infinite;
    }

    .diamond-decoration:nth-child(1) { top: 12%; left: 12%; animation-delay: 0s; }
    .diamond-decoration:nth-child(2) { top: 20%; right: 18%; animation-delay: 1.5s; }
    .diamond-decoration:nth-child(3) { bottom: 25%; left: 20%; animation-delay: 3s; }
    .diamond-decoration:nth-child(4) { bottom: 15%; right: 12%; animation-delay: 0.8s; }

    @keyframes diamondTwinkle {
      0%, 100% { 
        opacity: 0.4;
        transform: scale(1) rotate(0deg);
      }
      50% { 
        opacity: 1;
        transform: scale(1.4) rotate(45deg);
      }
    }

    /* Style pour le lien de connexion */
    .login-link {
      margin-top: 25px;
      color: #666;
      font-size: 15px;
    }

    .login-link a {
      color: #4b0082;
      font-weight: bold;
      text-decoration: none;
      padding: 8px 15px;
      border-radius: 12px;
      transition: all 0.4s ease;
      position: relative;
      background: linear-gradient(45deg, transparent, rgba(138,43,226,0.1));
      border: 1px solid rgba(138,43,226,0.2);
    }

    .login-link a:hover {
      background: linear-gradient(45deg, rgba(138,43,226,0.1), rgba(138,43,226,0.25));
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(138,43,226,0.3);
      border-color: rgba(138,43,226,0.4);
    }

    /* Animation de remontée */
    .scroll-up {
      animation: scrollUpEffect 0.8s ease-out;
    }

    @keyframes scrollUpEffect {
      0% {
        transform: translateY(0);
      }
      100% {
        transform: translateY(-100px);
      }
    }

    /* Responsive */
    @media (max-width: 600px) {
      .container {
        padding: 35px;
        margin: 0 20px;
      }
      
      .logo-container {
        top: 15px;
        left: 15px;
        padding: 12px;
      }
      
      .logo-container img {
        width: 55px;
      }
      
      h2 {
        font-size: 26px;
      }
    }
  </style>
</head>
<body>

<!-- Spirales décoratives -->
<div class="decoration-spirals">
  <div class="spiral"></div>
  <div class="spiral"></div>
  <div class="spiral"></div>
  <div class="spiral"></div>
  <div class="spiral"></div>
  <div class="spiral"></div>
  <div class="spiral"></div>
  <div class="spiral"></div>
</div>

<div class="hex-decoration top-left"></div>
<div class="hex-decoration bottom-right"></div>

<div class="diamond-decoration">💎</div>
<div class="diamond-decoration">💜</div>
<div class="diamond-decoration">💎</div>
<div class="diamond-decoration">💜</div>

<div class="container">
  <h2>Créer un compte GenRYM</h2>
  
  <form method="POST" action="register.php">
    <label for="username">Nom d'utilisateur</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="cin">CIN</label>
    <input type="text" id="cin" name="cin" required>

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" required>

    <label for="solde">Solde </label>
    <input type="number" id="solde" name="solde" step="0.01" min="0" value="0">

    <button type="submit">Créer un compte</button>
  </form>

  <?php if ($message): ?>
    <div id="message"><?= $message ?></div>
  <?php endif; ?>

  <div class="login-link">
    Déjà inscrit ? 
    <a href="login.php">Se connecter</a>
  </div>
</div>

<div class="logo-container">
  <img src="lego.png" alt="Logo GenRYM" />
</div>

<script>
  // Fonction pour faire remonter la page
  function scrollToTop() {
    // Multiple méthodes pour assurer la remontée
    document.body.scrollTop = 0; // Pour Safari
    document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera
    
    // Animation fluide alternative
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: 'smooth'
    });
    
    // Force la remontée si smooth ne marche pas
    setTimeout(() => {
      window.scrollTo(0, 0);
    }, 100);
  }

  // Animation des champs au focus
  document.querySelectorAll('input').forEach(input => {
    input.addEventListener('focus', function() {
      this.style.borderColor = '#6a0dad';
      this.style.boxShadow = '0 0 25px rgba(138,43,226,0.4)';
    });
    
    input.addEventListener('blur', function() {
      this.style.borderColor = 'rgba(138, 43, 226, 0.3)';
      this.style.boxShadow = 'none';
    });
  });

  // Effet parallaxe avec les spirales
  window.addEventListener('mousemove', (e) => {
    const spirals = document.querySelectorAll('.spiral');
    const mouseX = e.clientX / window.innerWidth;
    const mouseY = e.clientY / window.innerHeight;
    
    spirals.forEach((spiral, index) => {
      const speed = (index + 1) * 0.3;
      const x = (mouseX - 0.5) * speed * 10;
      const y = (mouseY - 0.5) * speed * 10;
      spiral.style.transform += ` translate(${x}px, ${y}px)`;
    });
  });

  // Événement sur le bouton pour remonter
  document.querySelector('button[type="submit"]').addEventListener('click', function(e) {
    const button = this;
    const originalText = button.textContent;
    
    // Remonter immédiatement en haut de la page
    scrollToTop();
    
    // Animation du bouton
    button.textContent = 'Création en cours...';
    button.style.background = 'linear-gradient(135deg, #2e0051, #4b0082)';
    
    // Ajouter effet visuel de remontée au container
    document.querySelector('.container').classList.add('scroll-up');
    
    setTimeout(() => {
      document.querySelector('.container').classList.remove('scroll-up');
    }, 800);
  });

  // Auto-hide message après 6 secondes
  const messageElement = document.getElementById('message');
  if (messageElement) {
    setTimeout(() => {
      messageElement.style.opacity = '0';
      messageElement.style.transform = 'translateY(-20px)';
      setTimeout(() => {
        messageElement.style.display = 'none';
      }, 400);
    }, 6000);
  }

  // Effet de particules au clic
  document.addEventListener('click', function(e) {
    if (e.target.tagName !== 'BUTTON') return;
    
    // Remonter la page au clic sur n'importe quel bouton
    scrollToTop();
    
    for (let i = 0; i < 8; i++) {
      const particle = document.createElement('div');
      particle.innerHTML = ['✨', '💜', '🌟', '💎', '🔮', '⭐'][Math.floor(Math.random() * 6)];
      particle.style.position = 'fixed';
      particle.style.left = e.clientX + 'px';
      particle.style.top = e.clientY + 'px';
      particle.style.pointerEvents = 'none';
      particle.style.fontSize = '18px';
      particle.style.zIndex = '1000';
      particle.style.animation = `clickParticle 2s ease-out forwards`;
      particle.style.animationDelay = (i * 0.1) + 's';
      
      document.body.appendChild(particle);
      
      setTimeout(() => particle.remove(), 2000);
    }
  });

  // CSS pour l'animation des particules de clic
  const style = document.createElement('style');
  style.textContent = `
    @keyframes clickParticle {
      0% {
        opacity: 1;
        transform: translate(0, 0) scale(1);
      }
      100% {
        opacity: 0;
        transform: translate(${Math.random() * 300 - 150}px, ${Math.random() * 300 - 150}px) scale(0.2) rotate(720deg);
      }
    }
  `;
  document.head.appendChild(style);

  // Force scroll to top on page load
  window.addEventListener('load', function() {
    scrollToTop();
  });

  // Alternative: forcer remontée avec les touches
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Enter' && document.activeElement.tagName === 'BUTTON') {
      scrollToTop();
    }
  });
</script>

</body>
</html>
