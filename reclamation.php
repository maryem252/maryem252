<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Réclamation - GenRYM Market</title>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body { 
    font-family: 'Arial', sans-serif; 
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 20px; 
    min-height: 100vh;
    position: relative;
    overflow-x: hidden;
  }

  /* Décorations de fond animées */
  body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="80" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="60" r="1" fill="rgba(255,255,255,0.2)"/><circle cx="60" cy="40" r="1" fill="rgba(255,255,255,0.2)"/></svg>') repeat;
    animation: float 20s linear infinite;
    pointer-events: none;
    z-index: -1;
  }

  @keyframes float {
    0% { transform: translateY(0px) rotate(0deg); }
    100% { transform: translateY(-20px) rotate(360deg); }
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
    width: 4px;
    height: 4px;
    background: rgba(255, 255, 255, 0.6);
    border-radius: 50%;
    animation: particleFloat 15s linear infinite;
  }

  .particle:nth-child(1) { left: 10%; animation-delay: -5s; }
  .particle:nth-child(2) { left: 20%; animation-delay: -1s; }
  .particle:nth-child(3) { left: 30%; animation-delay: -3s; }
  .particle:nth-child(4) { left: 40%; animation-delay: -6s; }
  .particle:nth-child(5) { left: 50%; animation-delay: -2s; }
  .particle:nth-child(6) { left: 60%; animation-delay: -4s; }
  .particle:nth-child(7) { left: 70%; animation-delay: -7s; }
  .particle:nth-child(8) { left: 80%; animation-delay: -1.5s; }
  .particle:nth-child(9) { left: 90%; animation-delay: -8s; }

  @keyframes particleFloat {
    0% { 
      transform: translateY(100vh) scale(0);
      opacity: 0;
    }
    10% {
      opacity: 1;
    }
    90% {
      opacity: 1;
    }
    100% { 
      transform: translateY(-10vh) scale(1);
      opacity: 0;
    }
  }
  
  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 30px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    border-radius: 15px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    position: relative;
    overflow: hidden;
  }

  header::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    animation: shimmer 3s infinite;
  }

  @keyframes shimmer {
    0% { left: -100%; }
    100% { left: 100%; }
  }

  .logo {
    display: flex;
    align-items: center;
    gap: 15px;
    position: relative;
    z-index: 2;
  }

  .logo img {
    height: 50px;
    filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
    transition: transform 0.3s ease;
  }

  .logo img:hover {
    transform: scale(1.1) rotate(5deg);
  }

  .logo h1 {
    font-size: 26px;
    color: #0077b6;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    background: linear-gradient(45deg, #0077b6, #023e8a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative;
  }

  .icons {
    display: flex;
    gap: 20px;
    font-size: 28px;
    align-items: center;
    position: relative;
    z-index: 2;
  }

  .icons a {
    text-decoration: none;
    color: #0077b6;
    cursor: pointer;
    transition: all 0.3s ease;
    padding: 10px;
    border-radius: 50%;
    position: relative;
    background: rgba(0, 119, 182, 0.1);
    backdrop-filter: blur(5px);
  }

  .icons a:hover {
    transform: translateY(-5px) scale(1.2);
    background: rgba(0, 119, 182, 0.2);
    box-shadow: 0 10px 20px rgba(0, 119, 182, 0.3);
  }

  .icons a::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: radial-gradient(circle, rgba(0, 119, 182, 0.3), transparent);
    border-radius: 50%;
    transition: all 0.3s ease;
    transform: translate(-50%, -50%);
    z-index: -1;
  }

  .icons a:hover::before {
    width: 60px;
    height: 60px;
  }

  h1 { 
    text-align: center; 
    color: #fff;
    margin-bottom: 30px;
    font-size: 36px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    position: relative;
    padding: 20px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    animation: titleGlow 2s ease-in-out infinite alternate;
  }

  @keyframes titleGlow {
    0% { 
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3), 0 0 10px rgba(255,255,255,0.3);
    }
    100% { 
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3), 0 0 20px rgba(255,255,255,0.6);
    }
  }

  h1::before {
    content: '✨';
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    animation: sparkle 1.5s ease-in-out infinite;
  }

  h1::after {
    content: '✨';
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    animation: sparkle 1.5s ease-in-out infinite 0.5s;
  }

  @keyframes sparkle {
    0%, 100% { 
      opacity: 1;
      transform: translateY(-50%) scale(1);
    }
    50% { 
      opacity: 0.5;
      transform: translateY(-50%) scale(1.2);
    }
  }

  form {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(15px);
    padding: 40px;
    border-radius: 20px;
    max-width: 700px;
    margin: 0 auto;
    box-shadow: 
      0 20px 40px rgba(0,0,0,0.1),
      0 0 0 1px rgba(255,255,255,0.2);
    border: 1px solid rgba(255, 255, 255, 0.3);
    position: relative;
    overflow: hidden;
  }

  form::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #667eea, #764ba2, #667eea);
    background-size: 200% 100%;
    animation: gradientShift 3s ease infinite;
  }

  @keyframes gradientShift {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
  }

  form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
    position: relative;
    padding-left: 30px;
  }

  form label::before {
    content: '📝';
    position: absolute;
    left: 0;
    top: 0;
    font-size: 18px;
  }

  form label[for="email"]::before {
    content: '📧';
  }

  form label[for="message"]::before {
    content: '💬';
  }

  form input, form textarea {
    width: 100%;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 12px;
    border: 2px solid rgba(102, 126, 234, 0.3);
    font-size: 16px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
    position: relative;
  }

  form input:focus, form textarea:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 20px rgba(102, 126, 234, 0.3);
    transform: translateY(-2px);
  }

  form textarea {
    resize: vertical;
    min-height: 120px;
  }

  form button {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    border: none;
    padding: 15px 30px;
    cursor: pointer;
    border-radius: 25px;
    font-size: 18px;
    font-weight: bold;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(40, 167, 69, 0.3);
    min-width: 200px;
  }

  form button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
  }

  form button:hover::before {
    left: 100%;
  }

  form button:hover {
    background: linear-gradient(135deg, #218838, #1aa179);
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(40, 167, 69, 0.4);
  }

  form button:active {
    transform: translateY(-1px);
  }

  .success {
    text-align: center;
    color: #fff;
    font-weight: bold;
    margin-top: 30px;
    padding: 20px;
    background: rgba(40, 167, 69, 0.9);
    border-radius: 15px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 10px 20px rgba(40, 167, 69, 0.3);
    animation: successPulse 0.8s ease-out;
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

  /* Décorations en coins */
  .corner-decoration {
    position: fixed;
    width: 100px;
    height: 100px;
    background: radial-gradient(circle, rgba(255,255,255,0.1), transparent);
    border-radius: 50%;
    pointer-events: none;
    z-index: -1;
  }

  .corner-decoration.top-left {
    top: -50px;
    left: -50px;
    animation: cornerPulse 4s ease-in-out infinite;
  }

  .corner-decoration.top-right {
    top: -50px;
    right: -50px;
    animation: cornerPulse 4s ease-in-out infinite 1s;
  }

  .corner-decoration.bottom-left {
    bottom: -50px;
    left: -50px;
    animation: cornerPulse 4s ease-in-out infinite 2s;
  }

  .corner-decoration.bottom-right {
    bottom: -50px;
    right: -50px;
    animation: cornerPulse 4s ease-in-out infinite 3s;
  }

  @keyframes cornerPulse {
    0%, 100% { 
      transform: scale(1);
      opacity: 0.3;
    }
    50% { 
      transform: scale(1.5);
      opacity: 0.1;
    }
  }

  /* Responsive */
  @media (max-width: 768px) {
    .icons {
      gap: 15px;
      font-size: 24px;
    }
    
    form {
      padding: 20px;
      margin: 0 10px;
    }
    
    h1 {
      font-size: 28px;
      margin: 0 10px 20px;
    }
  }
</style>
</head>
<body>

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

<div class="corner-decoration top-left"></div>
<div class="corner-decoration top-right"></div>
<div class="corner-decoration bottom-left"></div>
<div class="corner-decoration bottom-right"></div>

<header>
  <div class="logo">
    <img src="lego.png" alt="GenRYM Logo" />
    <h1>GenRYM Market</h1>
  </div>

  <div class="icons">
    <a href="index.html" title="Profil">👤</a>
    <a href="credit.php" title="Crédit">🏦</a>
    <a href="pharmacie.php" title="Pharmacie">📦</a>
    <a href="shoping.php" title="Shopping">🛍️</a>
    <a href="restaurant.php" title="Restaurant">🍽️</a>
    <a href="bibliotheque.php" title="Bibliothèque">📚</a>
    <a href="add.html" title="Panier">🛒</a>
  </div>
</header>

<h1>📝 Réclamation / Demande</h1>

<form id="reclamationForm">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom" placeholder="Votre nom" required>

  <label for="email">Email :</label>
  <input type="email" id="email" name="email" placeholder="Votre email" required>

  <label for="message">Message :</label>
  <textarea id="message" name="message" rows="6" placeholder="Écrivez votre problème ou demande ici..." required></textarea>

  <button type="submit">Envoyer la réclamation</button>
</form>

<p class="success" id="successMsg" style="display:none;">Merci ! Votre réclamation a été envoyée avec succès. ✅</p>

<script>
  document.getElementById('reclamationForm').addEventListener('submit', function(e){
    e.preventDefault();

    // On récupère les valeurs
    const nom = document.getElementById('nom').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    if(nom && email && message){
      // Ici, on pourrait envoyer les données à un serveur via fetch/ajax
      console.log({nom, email, message});
      document.getElementById('successMsg').style.display = 'block';

      // Réinitialiser le formulaire
      this.reset();

      // Faire disparaître le message après 5 secondes
      setTimeout(() => {
        document.getElementById('successMsg').style.display = 'none';
      }, 5000);
    }
  });

  // Animation des icônes au survol
  document.querySelectorAll('.icons a').forEach(icon => {
    icon.addEventListener('mouseenter', function() {
      this.style.animation = 'bounce 0.6s ease';
    });
    
    icon.addEventListener('animationend', function() {
      this.style.animation = '';
    });
  });

  // Ajouter l'animation bounce
  const style = document.createElement('style');
  style.textContent = `
    @keyframes bounce {
      0%, 20%, 60%, 100% { transform: translateY(0) scale(1); }
      40% { transform: translateY(-10px) scale(1.1); }
      80% { transform: translateY(-5px) scale(1.05); }
    }
  `;
  document.head.appendChild(style);
</script>

</body>
</html>