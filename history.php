<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Histoire de GenRYM Market</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Roboto', Arial, sans-serif;
    background: linear-gradient(135deg, #caf0f8 0%, #90e0ef 50%, #0077b6 100%);
    padding: 40px 20px;
    margin: 0;
    color: #023e8a;
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
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)" opacity="0.7"><animate attributeName="r" values="1;3;1" dur="4s" repeatCount="indefinite"/></circle><circle cx="80" cy="80" r="1.5" fill="rgba(255,255,255,0.15)" opacity="0.5"><animate attributeName="r" values="0.5;2.5;0.5" dur="3s" repeatCount="indefinite"/></circle><circle cx="50" cy="70" r="2.5" fill="rgba(255,255,255,0.12)" opacity="0.6"><animate attributeName="r" values="1.5;3.5;1.5" dur="5s" repeatCount="indefinite"/></circle></svg>') repeat;
    animation: floatBackground 30s linear infinite;
    pointer-events: none;
    z-index: -2;
  }

  @keyframes floatBackground {
    0% { transform: translateY(0px) rotate(0deg); }
    100% { transform: translateY(-100px) rotate(360deg); }
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
    width: 8px;
    height: 8px;
    background: radial-gradient(circle, rgba(255,255,255,0.9), rgba(0,180,216,0.4));
    border-radius: 50%;
    animation: particleFloat 25s linear infinite;
    box-shadow: 0 0 15px rgba(255,255,255,0.6);
  }

  .particle:nth-child(1) { left: 10%; animation-delay: -3s; }
  .particle:nth-child(2) { left: 20%; animation-delay: -12s; }
  .particle:nth-child(3) { left: 30%; animation-delay: -7s; }
  .particle:nth-child(4) { left: 40%; animation-delay: -15s; }
  .particle:nth-child(5) { left: 50%; animation-delay: -5s; }
  .particle:nth-child(6) { left: 60%; animation-delay: -18s; }
  .particle:nth-child(7) { left: 70%; animation-delay: -2s; }
  .particle:nth-child(8) { left: 80%; animation-delay: -9s; }
  .particle:nth-child(9) { left: 90%; animation-delay: -6s; }

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

  /* Header avec logo à gauche */
  header {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    padding: 20px 30px;
    border-radius: 25px;
    box-shadow: 
      0 10px 30px rgba(0,0,0,0.15),
      0 0 0 1px rgba(255,255,255,0.3);
    margin-bottom: 50px;
    border: 2px solid rgba(255, 255, 255, 0.2);
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
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
    animation: headerShimmer 4s infinite;
  }

  @keyframes headerShimmer {
    0% { left: -100%; }
    100% { left: 100%; }
  }

  .logo {
    display: flex;
    align-items: center;
    gap: 20px;
    position: relative;
    z-index: 2;
  }

  .logo::before {
    content: '✨';
    position: absolute;
    left: -15px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 28px;
    animation: logoSparkle 2.5s ease-in-out infinite;
  }

  .logo::after {
    content: '🏪';
    position: absolute;
    right: -40px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 30px;
    animation: logoFloat 3s ease-in-out infinite;
  }

  @keyframes logoSparkle {
    0%, 100% { 
      opacity: 0.4;
      transform: translateY(-50%) scale(1);
    }
    50% { 
      opacity: 1;
      transform: translateY(-50%) scale(1.2);
    }
  }

  @keyframes logoFloat {
    0%, 100% { 
      transform: translateY(-50%);
    }
    50% { 
      transform: translateY(-60%);
    }
  }

  .logo img {
    height: 60px;
    filter: drop-shadow(0 6px 12px rgba(0,0,0,0.2));
    transition: all 0.4s ease;
    border-radius: 50%;
    padding: 8px;
    background: rgba(0, 119, 182, 0.1);
    backdrop-filter: blur(5px);
  }

  .logo img:hover {
    transform: scale(1.15) rotate(15deg);
    filter: drop-shadow(0 10px 25px rgba(0,119,182,0.5));
    background: rgba(0, 119, 182, 0.2);
  }

  .logo h1 {
    font-size: 32px;
    color: #0077b6;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.1);
    background: linear-gradient(45deg, #0077b6, #00b4d8, #90e0ef);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative;
    animation: titleGlow 4s ease-in-out infinite;
  }

  @keyframes titleGlow {
    0%, 100% { 
      text-shadow: 2px 2px 6px rgba(0,0,0,0.1);
    }
    50% { 
      text-shadow: 2px 2px 12px rgba(0,119,182,0.4), 0 0 20px rgba(0,180,216,0.3);
    }
  }

  /* Sections centrées */
  .history, .services, .legal {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(15px);
    padding: 40px 35px;
    border-radius: 30px;
    box-shadow: 
      0 15px 40px rgba(0,0,0,0.15),
      0 0 0 1px rgba(255,255,255,0.3);
    max-width: 900px;
    margin: 0 auto 40px auto;
    text-align: center;
    transition: all 0.4s ease;
    border: 2px solid rgba(255, 255, 255, 0.2);
    position: relative;
    overflow: hidden;
  }

  .history::before, .services::before, .legal::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #caf0f8, #90e0ef, #0077b6, #caf0f8);
    background-size: 300% 100%;
    animation: sectionGradient 5s ease infinite;
  }

  @keyframes sectionGradient {
    0% { background-position: 300% 0; }
    100% { background-position: -300% 0; }
  }

  .history:hover, .services:hover, .legal:hover {
    transform: translateY(-8px);
    box-shadow: 
      0 25px 60px rgba(0,0,0,0.2),
      0 0 0 1px rgba(255,255,255,0.4);
  }

  /* Décorations spécifiques pour chaque section */
  .history {
    position: relative;
  }

  .history::after {
    content: '📚';
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 40px;
    opacity: 0.3;
    animation: historyIcon 4s ease-in-out infinite;
  }

  @keyframes historyIcon {
    0%, 100% { 
      transform: rotate(0deg) scale(1);
      opacity: 0.3;
    }
    50% { 
      transform: rotate(10deg) scale(1.1);
      opacity: 0.6;
    }
  }

  .services {
    position: relative;
  }

  .services::after {
    content: '⚡';
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 40px;
    opacity: 0.3;
    animation: servicesIcon 3s ease-in-out infinite;
  }

  @keyframes servicesIcon {
    0%, 100% { 
      opacity: 0.3;
      filter: brightness(1);
    }
    50% { 
      opacity: 0.8;
      filter: brightness(1.5);
    }
  }

  .legal {
    position: relative;
  }

  .legal::after {
    content: '⚖️';
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 40px;
    opacity: 0.3;
    animation: legalIcon 5s ease-in-out infinite;
  }

  @keyframes legalIcon {
    0%, 100% { 
      transform: rotate(-5deg);
      opacity: 0.3;
    }
    50% { 
      transform: rotate(5deg);
      opacity: 0.6;
    }
  }

  h2 {
    color: #0077b6;
    margin-bottom: 25px;
    font-size: 32px;
    position: relative;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    padding: 15px;
    background: rgba(0, 119, 182, 0.05);
    border-radius: 15px;
    backdrop-filter: blur(5px);
  }

  h2::after {
    content: '';
    display: block;
    width: 80px;
    height: 6px;
    background: linear-gradient(90deg, #00b4d8, #90e0ef);
    margin: 15px auto 0 auto;
    border-radius: 3px;
    animation: underlineGlow 3s ease-in-out infinite;
  }

  @keyframes underlineGlow {
    0%, 100% { 
      box-shadow: 0 0 5px rgba(0, 180, 216, 0.3);
    }
    50% { 
      box-shadow: 0 0 20px rgba(0, 180, 216, 0.8);
    }
  }

  p {
    font-size: 19px;
    line-height: 1.7;
    margin-bottom: 18px;
    position: relative;
    padding: 15px;
    background: rgba(202, 240, 248, 0.1);
    border-radius: 12px;
    border-left: 4px solid rgba(0, 119, 182, 0.3);
    transition: all 0.3s ease;
  }

  p:hover {
    background: rgba(202, 240, 248, 0.2);
    border-left-color: #0077b6;
    transform: translateX(5px);
  }

  .info {
    margin-top: 30px;
    padding: 25px;
    background: linear-gradient(135deg, rgba(144, 224, 239, 0.8), rgba(202, 240, 248, 0.6));
    backdrop-filter: blur(10px);
    border-radius: 20px;
    font-weight: bold;
    font-size: 18px;
    border: 2px solid rgba(0, 180, 216, 0.3);
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0, 180, 216, 0.2);
  }

  .info::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    animation: infoShimmer 3s infinite;
  }

  @keyframes infoShimmer {
    0% { left: -100%; }
    100% { left: 100%; }
  }

  ul {
    margin-top: 25px;
    padding-left: 0;
    list-style: none;
  }

  li {
    margin-bottom: 20px;
    background: linear-gradient(135deg, rgba(202, 240, 248, 0.8), rgba(255, 255, 255, 0.6));
    backdrop-filter: blur(10px);
    padding: 18px 20px;
    border-radius: 15px;
    font-size: 18px;
    box-shadow: 
      0 8px 20px rgba(0,0,0,0.1),
      0 0 0 1px rgba(0, 180, 216, 0.2);
    border: 2px solid rgba(255, 255, 255, 0.3);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  li:hover {
    transform: translateY(-3px) translateX(5px);
    box-shadow: 
      0 15px 30px rgba(0,0,0,0.15),
      0 0 0 1px rgba(0, 180, 216, 0.4);
    background: linear-gradient(135deg, rgba(202, 240, 248, 1), rgba(255, 255, 255, 0.8));
  }

  li::before {
    content: "✨";
    margin-right: 12px;
    font-size: 18px;
    animation: checkmarkPulse 2s ease-in-out infinite;
  }

  @keyframes checkmarkPulse {
    0%, 100% { 
      transform: scale(1);
      filter: brightness(1);
    }
    50% { 
      transform: scale(1.2);
      filter: brightness(1.5);
    }
  }

  /* Liens dans la section légale */
  a {
    color: #0077b6;
    text-decoration: none;
    transition: all 0.3s ease;
    padding: 2px 4px;
    border-radius: 4px;
    background: rgba(0, 119, 182, 0.1);
  }

  a:hover {
    color: #023e8a;
    background: rgba(0, 119, 182, 0.2);
    transform: scale(1.05);
  }

  /* Décorations en coins */
  .corner-decoration {
    position: fixed;
    width: 150px;
    height: 150px;
    background: radial-gradient(circle, rgba(202, 240, 248, 0.3), transparent);
    border-radius: 50%;
    pointer-events: none;
    z-index: -1;
  }

  .corner-decoration.top-left {
    top: -75px;
    left: -75px;
    animation: cornerPulse 6s ease-in-out infinite;
  }

  .corner-decoration.top-right {
    top: -75px;
    right: -75px;
    animation: cornerPulse 6s ease-in-out infinite 2s;
  }

  .corner-decoration.bottom-left {
    bottom: -75px;
    left: -75px;
    animation: cornerPulse 6s ease-in-out infinite 4s;
  }

  .corner-decoration.bottom-right {
    bottom: -75px;
    right: -75px;
    animation: cornerPulse 6s ease-in-out infinite 1s;
  }

  @keyframes cornerPulse {
    0%, 100% { 
      transform: scale(1);
      opacity: 0.4;
    }
    50% { 
      transform: scale(1.4);
      opacity: 0.1;
    }
  }

  @media (max-width: 600px) {
    body {
      padding: 20px 10px;
    }
    
    .history, .services, .legal {
      padding: 25px 20px;
      margin-bottom: 30px;
    }
    
    h2 {
      font-size: 26px;
    }
    
    .logo {
      gap: 15px;
    }
    
    .logo h1 {
      font-size: 24px;
    }
    
    header {
      padding: 15px 20px;
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
</header>

<div class="history">
  <h2>Notre Histoire 🏬</h2>
  <p>GenRYM Market est un supermarché tout neuf créé pour offrir à ses clients les meilleurs produits alimentaires, technologiques et de première nécessité avec un service de qualité.</p>
  <p>Nous visons à devenir le supermarché préféré de notre communauté à Agadir, en apportant confort et innovation à vos achats.</p>
  
  <div class="info">
    📍 <strong>Position :</strong> Agadir, Maroc<br>
    📅 <strong>Date de création :</strong> 4 Août 2025
  </div>
</div>

<div class="services">
  <h2>Nos Services et Avantages 💡</h2>
  <ul>
    <li>Faire du shopping en magasin et acheter vêtements, produits de cuisine, produits technologiques et plus.</li>
    <li>Prendre un crédit pour faciliter vos achats.</li>
    <li>Profiter de notre restaurant pour des repas délicieux sur place.</li>
    <li>Ajouter et consulter des livres dans notre bibliothèque.</li>
    <li>Faire toutes vos courses <strong>en ligne</strong> depuis chez vous.</li>
    <li>Profiter de promotions spéciales et offres exclusives.</li>
  </ul>
</div>

<div class="legal">
  <h2>Informations légales 📜</h2>
  <p><strong>Nom légal :</strong> GenRYM Market </p>
  <p><strong>Numéro d'enregistrement :</strong> RC 2025-AG12345</p>
  <p><strong>Adresse :</strong> Boulevard Hassan II, Agadir, Maroc</p>
  <p><strong>Téléphone :</strong> <a href="tel:+212 6 24 99 50 36"></a>+212 6 24 99 50 36</p>
  <p><strong>Email :</strong><a href="mailto:meryemboukyoud2019@gmail.com" ></a>meryemboukyoud2019@gmail.com</p>
  <p><strong>Horaires :</strong> Tous les jours de 08h00 à 23h00</p>
  <p><strong>Politique :</strong> Satisfaction garantie ou remboursement dans les 14 jours.</p>
</div>

<script>
// Animation des éléments au scroll
const observerOptions = {
  threshold: 0.1,
  rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('animate-in');
    }
  });
}, observerOptions);

// Observer toutes les sections
document.querySelectorAll('.history, .services, .legal').forEach(section => {
  observer.observe(section);
});

// Effet de parallaxe léger
window.addEventListener('scroll', () => {
  const scrolled = window.pageYOffset;
  const rate = scrolled * -0.5;
  
  document.querySelectorAll('.particle').forEach((particle, index) => {
    particle.style.transform = `translateY(${rate * (index + 1) * 0.1}px)`;
  });
});

// Animation des liens au clic
document.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', function(e) {
    const ripple = document.createElement('span');
    ripple.classList.add('ripple-effect');
    this.appendChild(ripple);
    
    setTimeout(() => {
      ripple.remove();
    }, 600);
  });
});

// Ajouter les styles d'animation
const style = document.createElement('style');
style.textContent = `
  .animate-in {
    animation: slideInUp 0.8s ease-out forwards;
  }
  
  @keyframes slideInUp {
    0% {
      opacity: 0;
      transform: translateY(50px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  .ripple-effect {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.6);
    transform: scale(0);
    animation: ripple 0.6s linear;
    pointer-events: none;
  }
  
  @keyframes ripple {
    to {
      transform: scale(4);
      opacity: 0;
    }
  }
`;
document.head.appendChild(style);
</script>

</body>
</html>