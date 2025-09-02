<?php 
session_start(); 
$message = "";  

// Connexion MySQL 
$host = "localhost"; 
$user = "root"; // ton utilisateur MySQL 
$pass = "";     // ton mot de passe MySQL 
$db   = "market";  

$conn = new mysqli($host, $user, $pass, $db);  

if ($conn->connect_error) {     
    die("Erreur de connexion: " . $conn->connect_error); 
}  

// Vérification si formulaire envoyé 
if ($_SERVER["REQUEST_METHOD"] == "POST") {     
    $email    = $_POST['email'];     
    $password = $_POST['password'];      
    
    $sql = "SELECT id, username, password FROM users WHERE email = ?";     
    $stmt = $conn->prepare($sql);     
    $stmt->bind_param("s", $email);     
    $stmt->execute();     
    $stmt->store_result();      
    
    if ($stmt->num_rows > 0) {         
        $stmt->bind_result($id, $username, $hashedPassword);         
        $stmt->fetch();          
        
        if (password_verify($password, $hashedPassword)) {             
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $id;
            // Message de bienvenue personnalisé avec le nom d'utilisateur
            $message = "<p class='success'>🎉 Bienvenue, <strong>$username</strong> ! Vous êtes maintenant connecté(e) à GenRYM ! 🚀</p>";         
        } else {             
            $message = "<p class='error'>Mot de passe incorrect ❌</p>";         
        }     
    } else {         
        $message = "<p class='error'>Aucun utilisateur trouvé avec cet email ❌</p>";     
    } 
} 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion - GenRYM</title>
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
      background: linear-gradient(135deg, #00b4d8 0%, #90e0ef 50%, #0077b6 100%);
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      overflow: hidden;
    }

    /* Décorations de fond animées */
    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="25" cy="25" r="2" fill="rgba(255,255,255,0.1)" opacity="0.8"><animate attributeName="r" values="1;3;1" dur="4s" repeatCount="indefinite"/><animate attributeName="opacity" values="0.3;0.8;0.3" dur="4s" repeatCount="indefinite"/></circle><circle cx="75" cy="75" r="1.5" fill="rgba(255,255,255,0.15)" opacity="0.6"><animate attributeName="r" values="0.5;2.5;0.5" dur="3s" repeatCount="indefinite"/></circle><circle cx="50" cy="80" r="2.5" fill="rgba(255,255,255,0.12)" opacity="0.7"><animate attributeName="r" values="1.5;3.5;1.5" dur="5s" repeatCount="indefinite"/></circle></svg>') repeat;
      animation: floatBackground 25s linear infinite;
      pointer-events: none;
      z-index: -2;
    }

    @keyframes floatBackground {
      0% { transform: translateY(0px) rotate(0deg); }
      100% { transform: translateY(-50px) rotate(360deg); }
    }

    /* Particules flottantes */
    .decoration-particles {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: -1;
    }

    .particle {
      position: absolute;
      width: 6px;
      height: 6px;
      background: radial-gradient(circle, rgba(255,255,255,0.9), rgba(0,180,216,0.4));
      border-radius: 50%;
      animation: particleFloat 20s linear infinite;
      box-shadow: 0 0 10px rgba(255,255,255,0.5);
    }

    .particle:nth-child(1) { left: 10%; animation-delay: -2s; }
    .particle:nth-child(2) { left: 20%; animation-delay: -8s; }
    .particle:nth-child(3) { left: 30%; animation-delay: -4s; }
    .particle:nth-child(4) { left: 40%; animation-delay: -12s; }
    .particle:nth-child(5) { left: 50%; animation-delay: -6s; }
    .particle:nth-child(6) { left: 60%; animation-delay: -10s; }
    .particle:nth-child(7) { left: 70%; animation-delay: -3s; }
    .particle:nth-child(8) { left: 80%; animation-delay: -7s; }
    .particle:nth-child(9) { left: 90%; animation-delay: -1s; }

    @keyframes particleFloat {
      0% { 
        transform: translateY(100vh) scale(0) rotate(0deg);
        opacity: 0;
      }
      10% {
        opacity: 1;
      }
      90% {
        opacity: 1;
      }
      100% { 
        transform: translateY(-10vh) scale(1) rotate(360deg);
        opacity: 0;
      }
    }

    .container {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      padding: 50px;
      border-radius: 30px;
      box-shadow: 
        0 25px 50px rgba(0,0,0,0.2),
        0 0 0 1px rgba(255,255,255,0.3),
        inset 0 1px 0 rgba(255,255,255,0.6);
      width: 90%;
      max-width: 450px;
      text-align: center;
      border: 2px solid rgba(255, 255, 255, 0.2);
      position: relative;
      overflow: hidden;
      animation: containerEntrance 1s ease-out;
    }

    @keyframes containerEntrance {
      0% {
        opacity: 0;
        transform: translateY(50px) scale(0.9);
      }
      100% {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    .container::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
      animation: containerShimmer 4s infinite;
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
      height: 4px;
      background: linear-gradient(90deg, #00b4d8, #90e0ef, #0077b6, #00b4d8);
      background-size: 300% 100%;
      animation: topGradient 5s ease infinite;
      border-radius: 30px 30px 0 0;
    }

    @keyframes topGradient {
      0% { background-position: 300% 0; }
      100% { background-position: -300% 0; }
    }

    h2 {
      color: #0077b6;
      margin-bottom: 30px;
      font-size: 28px;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
      background: linear-gradient(45deg, #0077b6, #00b4d8);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      position: relative;
      padding: 15px;
      border-radius: 15px;
      backdrop-filter: blur(5px);
    }

    h2::before {
      content: '🔐';
      position: absolute;
      left: -15px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 24px;
      animation: lockFloat 3s ease-in-out infinite;
    }

    h2::after {
      content: '✨';
      position: absolute;
      right: -15px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
      animation: sparkle 2s ease-in-out infinite;
    }

    @keyframes lockFloat {
      0%, 100% { 
        transform: translateY(-50%);
      }
      50% { 
        transform: translateY(-60%);
      }
    }

    @keyframes sparkle {
      0%, 100% { 
        opacity: 0.4;
        transform: translateY(-50%) scale(1);
      }
      50% { 
        opacity: 1;
        transform: translateY(-50%) scale(1.2);
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
      padding-left: 30px;
    }

    label::before {
      position: absolute;
      left: 0;
      top: 0;
      font-size: 18px;
    }

    label[for="email"]::before {
      content: '📧';
    }

    label[for="password"]::before {
      content: '🔑';
    }

    input {
      width: 100%;
      padding: 15px;
      margin-top: 8px;
      border: 2px solid rgba(0, 180, 216, 0.3);
      border-radius: 15px;
      font-size: 16px;
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(5px);
      position: relative;
    }

    input:focus {
      border-color: #00b4d8;
      outline: none;
      box-shadow: 
        0 0 20px rgba(0,180,216,0.4),
        0 5px 15px rgba(0,180,216,0.2);
      transform: translateY(-2px);
      background: rgba(255, 255, 255, 1);
    }

    input:hover {
      border-color: rgba(0, 180, 216, 0.5);
      transform: translateY(-1px);
    }

    button {
      width: 100%;
      padding: 18px;
      margin-top: 30px;
      background: linear-gradient(135deg, #0077b6, #00b4d8);
      color: white;
      border: none;
      border-radius: 15px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0, 119, 182, 0.3);
    }

    button::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
      transition: left 0.5s ease;
    }

    button:hover::before {
      left: 100%;
    }

    button:hover {
      background: linear-gradient(135deg, #023e8a, #0077b6);
      transform: translateY(-3px);
      box-shadow: 0 15px 35px rgba(0, 119, 182, 0.4);
    }

    button:active {
      transform: translateY(-1px);
    }

    button::after {
      content: '🚀';
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 16px;
      opacity: 0;
      transition: all 0.3s ease;
    }

    button:hover::after {
      opacity: 1;
      transform: translateY(-50%) translateX(5px);
    }

    .message {
      margin-top: 25px;
      font-weight: bold;
      padding: 15px;
      border-radius: 12px;
      backdrop-filter: blur(10px);
      border: 2px solid transparent;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .message::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, transparent, currentColor, transparent);
      background-size: 200% 100%;
      animation: messageGradient 2s ease infinite;
    }

    @keyframes messageGradient {
      0% { background-position: 200% 0; }
      100% { background-position: -200% 0; }
    }

    .success {
      color: #28a745;
      background: rgba(40, 167, 69, 0.1);
      border-color: rgba(40, 167, 69, 0.3);
      animation: successPulse 0.8s ease-out;
      font-size: 18px;
      text-align: center;
    }

    .success::after {
      content: '✅';
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      animation: checkBounce 1s ease;
    }

    .success strong {
      color: #0077b6;
      text-shadow: 1px 1px 2px rgba(0,119,182,0.3);
      font-size: 20px;
    }

    @keyframes successPulse {
      0% {
        transform: scale(0.8);
        opacity: 0;
      }
      50% {
        transform: scale(1.05);
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes checkBounce {
      0%, 20%, 60%, 100% { transform: translateY(-50%) scale(1); }
      40% { transform: translateY(-50%) scale(1.2); }
      80% { transform: translateY(-50%) scale(1.1); }
    }

    .error {
      color: #dc3545;
      background: rgba(220, 53, 69, 0.1);
      border-color: rgba(220, 53, 69, 0.3);
      animation: errorShake 0.8s ease-out;
    }

    .error::after {
      content: '❌';
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      animation: errorPulse 1s ease;
    }

    @keyframes errorShake {
      0%, 100% { transform: translateX(0); }
      25% { transform: translateX(-5px); }
      75% { transform: translateX(5px); }
    }

    @keyframes errorPulse {
      0%, 100% { transform: translateY(-50%) scale(1); }
      50% { transform: translateY(-50%) scale(1.1); }
    }

    .logo-container {
      position: absolute;
      top: 30px;
      left: 30px;
      align-items: center;
      gap: 15px;
      z-index: 10;
      padding: 15px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      border: 2px solid rgba(255, 255, 255, 0.2);
      transition: all 0.3s ease;
    }

    .logo-container:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: scale(1.05);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .logo-container img {
      width: 70px;
      filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
      transition: all 0.3s ease;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.8);
      padding: 8px;
    }

    .logo-container img:hover {
      transform: rotate(10deg) scale(1.1);
      filter: drop-shadow(0 8px 15px rgba(0,119,182,0.4));
    }

    /* Décorations en coins */
    .corner-decoration {
      position: fixed;
      width: 120px;
      height: 120px;
      background: radial-gradient(circle, rgba(0, 180, 216, 0.2), transparent);
      border-radius: 50%;
      pointer-events: none;
      z-index: -1;
    }

    .corner-decoration.top-right {
      top: -60px;
      right: -60px;
      animation: cornerPulse 5s ease-in-out infinite;
    }

    .corner-decoration.bottom-left {
      bottom: -60px;
      left: -60px;
      animation: cornerPulse 5s ease-in-out infinite 2.5s;
    }

    @keyframes cornerPulse {
      0%, 100% { 
        transform: scale(1);
        opacity: 0.4;
      }
      50% { 
        transform: scale(1.3);
        opacity: 0.1;
      }
    }

    /* Étoiles décoratives */
    .star-decoration {
      position: fixed;
      color: rgba(255, 255, 255, 0.6);
      font-size: 20px;
      pointer-events: none;
      z-index: -1;
      animation: starTwinkle 3s ease-in-out infinite;
    }

    .star-decoration:nth-child(1) { top: 15%; left: 15%; animation-delay: 0s; }
    .star-decoration:nth-child(2) { top: 25%; right: 20%; animation-delay: 1s; }
    .star-decoration:nth-child(3) { bottom: 30%; left: 25%; animation-delay: 2s; }
    .star-decoration:nth-child(4) { bottom: 20%; right: 15%; animation-delay: 0.5s; }

    @keyframes starTwinkle {
      0%, 100% { 
        opacity: 0.3;
        transform: scale(1) rotate(0deg);
      }
      50% { 
        opacity: 1;
        transform: scale(1.2) rotate(180deg);
      }
    }

    /* Style pour le lien d'inscription */
    .register-link {
      margin-top: 20px;
      color: #666;
      font-size: 14px;
    }

    .register-link a {
      color: #0077b6;
      font-weight: bold;
      text-decoration: none;
      padding: 5px 10px;
      border-radius: 8px;
      transition: all 0.3s ease;
      position: relative;
      background: linear-gradient(45deg, transparent, rgba(0,180,216,0.1));
    }

    .register-link a:hover {
      background: linear-gradient(45deg, rgba(0,180,216,0.1), rgba(0,180,216,0.2));
      transform: translateY(-1px);
      box-shadow: 0 5px 15px rgba(0,180,216,0.2);
    }

    /* Animation spéciale pour la connexion réussie */
    .welcome-celebration {
      animation: welcomeCelebration 2s ease-out;
    }

    @keyframes welcomeCelebration {
      0% {
        transform: scale(0.5) rotate(-10deg);
        opacity: 0;
      }
      50% {
        transform: scale(1.1) rotate(5deg);
      }
      100% {
        transform: scale(1) rotate(0deg);
        opacity: 1;
      }
    }

    /* Responsive */
    @media (max-width: 600px) {
      .container {
        padding: 30px;
        margin: 0 20px;
      }
      
      .logo-container {
        top: 15px;
        left: 15px;
        padding: 10px;
      }
      
      .logo-container img {
        width: 50px;
      }
      
      h2 {
        font-size: 24px;
      }
    }
  </style>
</head>
<body>

<!-- Particules décoratives -->
<div class="decoration-particles">
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
</div>

<div class="corner-decoration top-right"></div>
<div class="corner-decoration bottom-left"></div>

<div class="star-decoration">⭐</div>
<div class="star-decoration">✨</div>
<div class="star-decoration">⭐</div>
<div class="star-decoration">✨</div>

<div class="container">
  <h2>Connexion à GenRYM</h2>
  
  <!-- Formulaire de connexion -->
  <form method="POST" action="login.php">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Se connecter</button>
  </form>

  <!-- Message PHP avec nom d'utilisateur personnalisé -->
  <?php if ($message): ?>
    <div id="message" class="<?php echo strpos($message, 'success') !== false ? 'welcome-celebration' : ''; ?>"><?= $message ?></div>
  <?php endif; ?>

  <!-- Lien vers l'inscription -->
  <div class="register-link">
    Pas encore inscrit ? 
    <a href="register.php">Créer un compte</a>
  </div>
</div>

<div class="logo-container">
  <img src="lego.png" alt="Logo GenRYM" />
</div>

<script>
  // Animation des champs au focus
  document.querySelectorAll('input').forEach(input => {
    input.addEventListener('focus', function() {
      this.parentElement.classList.add('input-focused');
    });
    
    input.addEventListener('blur', function() {
      this.parentElement.classList.remove('input-focused');
    });
  });

  // Effet parallaxe léger
  window.addEventListener('mousemove', (e) => {
    const particles = document.querySelectorAll('.particle');
    const mouseX = e.clientX / window.innerWidth;
    const mouseY = e.clientY / window.innerHeight;
    
    particles.forEach((particle, index) => {
      const speed = (index + 1) * 0.5;
      const x = (mouseX - 0.5) * speed;
      const y = (mouseY - 0.5) * speed;
      particle.style.transform += ` translate(${x}px, ${y}px)`;
    });
  });

  // Auto-hide message après 8 secondes (plus long pour apprécier le message de bienvenue)
  const messageElement = document.getElementById('message');
  if (messageElement) {
    // Si c'est un message de succès, créer des confettis
    if (messageElement.classList.contains('welcome-celebration')) {
      createConfetti();
    }
    
    setTimeout(() => {
      messageElement.style.opacity = '0';
      setTimeout(() => {
        messageElement.style.display = 'none';
      }, 300);
    }, 8000);
  }

  // Fonction pour créer des confettis lors de la connexion réussie
  function createConfetti() {
    const confettiCount = 30;
    const confettiColors = ['🎉', '🎊', '✨', '🌟', '💫', '⭐', '🎈', '🎁'];
    
    for (let i = 0; i < confettiCount; i++) {
      setTimeout(() => {
        const confetti = document.createElement('div');
        confetti.innerHTML = confettiColors[Math.floor(Math.random() * confettiColors.length)];
        confetti.style.position = 'fixed';
        confetti.style.left = Math.random() * 100 + 'vw';
        confetti.style.top = '-50px';
        confetti.style.fontSize = Math.random() * 20 + 15 + 'px';
        confetti.style.pointerEvents = 'none';
        confetti.style.zIndex = '1000';
        confetti.style.animation = `confettiFall ${Math.random() * 3 + 3}s linear forwards`;
        
        document.body.appendChild(confetti);
        
        setTimeout(() => confetti.remove(), 6000);
      }, i * 100);
    }
  }

  // CSS pour l'animation des confettis
  const style = document.createElement('style');
  style.textContent = `
    @keyframes confettiFall {
      0% {
        opacity: 1;
        transform: translateY(-50px) rotate(0deg);
      }
      100% {
        opacity: 0;
        transform: translateY(100vh) rotate(720deg);
      }
    }
  `;
  document.head.appendChild(style);
</script>

</body>
</html>