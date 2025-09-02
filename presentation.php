<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GenRYM Market</title>
  <style>
    /* RESET */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #0077b6, #00b4d8, #90e0ef, #48cae4, #023e8a);
      background-size: 400% 400%;
      animation: gradientShift 8s ease infinite;
      color: #333;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      overflow-x: hidden;
      position: relative;
    }

    /* ANIMATED GRADIENT BACKGROUND */
    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* LOGO */
    .logo {
      display: flex;
      align-items: center;
      gap: 15px;
      animation: logoFloat 3s ease-in-out infinite;
      position: relative;
      z-index: 10;
    }

    .logo::before {
      content: '';
      position: absolute;
      width: 120%;
      height: 120%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
      border-radius: 50%;
      animation: pulse 2s infinite;
      z-index: -1;
    }

    .logo img {
      height: 70px;
      filter: drop-shadow(0 0 20px rgba(255,255,255,0.5));
      animation: rotate 10s linear infinite;
    }

    .logo h1 {
      font-size: 32px;
      color: #ffffff;
      font-weight: 700;
      text-shadow: 0 0 30px rgba(255,255,255,0.5);
      background: linear-gradient(45deg, #ffffff, #90e0ef, #48cae4);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    .hero::before,
.particles,
.particles .particle,
.bubbles,
.bubbles .bubble,
 .glow-effect {
  pointer-events: none;
}

    /* PRESENTATION */
    .hero {
      margin-top: 40px;
      max-width: 800px;
      padding: 30px;
      background: rgba(255,255,255,0.1);
      border: 1px solid rgba(255,255,255,0.2);
      border-radius: 25px;
      backdrop-filter: blur(15px);
      box-shadow: 
        0 8px 25px rgba(0,0,0,0.3),
        inset 0 1px 0 rgba(255,255,255,0.2);
      animation: heroFloat 2s ease-in-out infinite alternate;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: conic-gradient(from 0deg, transparent, rgba(255,255,255,0.1), transparent);
      animation: spin 8s linear infinite;
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .hero h2 {
      font-size: 42px;
      color: #fff;
      margin-bottom: 20px;
      text-shadow: 0 0 20px rgba(255,255,255,0.3);
      animation: textGlow 2s ease-in-out infinite alternate;
    }

    .hero p {
      font-size: 20px;
      color: #f8f9fa;
      line-height: 1.7;
      margin-bottom: 30px;
      text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }

    .btn {
      display: inline-block;
      padding: 15px 35px;
      background: linear-gradient(45deg, #ffffff, #e3f2fd);
      color: #0077b6;
      font-size: 20px;
      border-radius: 35px;
      text-decoration: none;
      font-weight: bold;
      box-shadow: 
        0 8px 25px rgba(0,0,0,0.3),
        inset 0 1px 0 rgba(255,255,255,0.5);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .btn::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(45deg, transparent, rgba(255,255,255,0.3), transparent);
      transform: rotate(45deg);
      transition: all 0.3s ease;
    }

    .btn:hover {
      background: linear-gradient(45deg, #0077b6, #023e8a);
      color: #fff;
      transform: scale(1.05) translateY(-2px);
      box-shadow: 0 12px 35px rgba(0,0,0,0.4);
    }

    .btn:hover::before {
      left: 100%;
    }

    /* ANIMATIONS */
    @keyframes logoFloat {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
    }

    @keyframes heroFloat {
      0% { transform: translateY(0px); }
      100% { transform: translateY(-5px); }
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); opacity: 0.3; }
      50% { transform: scale(1.1); opacity: 0.6; }
    }

    @keyframes rotate {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    @keyframes textGlow {
      0% { text-shadow: 0 0 20px rgba(255,255,255,0.3); }
      100% { text-shadow: 0 0 30px rgba(255,255,255,0.6), 0 0 40px rgba(144,224,239,0.4); }
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    @keyframes slideUp {
      from {opacity: 0; transform: translateY(50px);}
      to {opacity: 1; transform: translateY(0);}
    }

    /* PARTICLES SYSTEM */
    .particles {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      overflow: hidden;
      z-index: 1;
    }

    .particle {
      position: absolute;
      background: rgba(255,255,255,0.6);
      border-radius: 50%;
      animation: float 15s infinite linear;
    }

    .particle:nth-child(1) { width: 4px; height: 4px; left: 10%; animation-delay: 0s; animation-duration: 12s; }
    .particle:nth-child(2) { width: 6px; height: 6px; left: 20%; animation-delay: 2s; animation-duration: 18s; }
    .particle:nth-child(3) { width: 3px; height: 3px; left: 30%; animation-delay: 4s; animation-duration: 15s; }
    .particle:nth-child(4) { width: 5px; height: 5px; left: 40%; animation-delay: 1s; animation-duration: 20s; }
    .particle:nth-child(5) { width: 4px; height: 4px; left: 50%; animation-delay: 3s; animation-duration: 14s; }
    .particle:nth-child(6) { width: 7px; height: 7px; left: 60%; animation-delay: 5s; animation-duration: 16s; }
    .particle:nth-child(7) { width: 3px; height: 3px; left: 70%; animation-delay: 2s; animation-duration: 13s; }
    .particle:nth-child(8) { width: 5px; height: 5px; left: 80%; animation-delay: 4s; animation-duration: 17s; }
    .particle:nth-child(9) { width: 4px; height: 4px; left: 90%; animation-delay: 1s; animation-duration: 19s; }
    .particle:nth-child(10) { width: 6px; height: 6px; left: 5%; animation-delay: 6s; animation-duration: 11s; }

    @keyframes float {
      0% {
        transform: translateY(100vh) rotate(0deg);
        opacity: 0;
      }
      10% {
        opacity: 1;
      }
      90% {
        opacity: 1;
      }
      100% {
        transform: translateY(-100px) rotate(360deg);
        opacity: 0;
      }
    }

    /* ENHANCED BUBBLES */
    .bubbles {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0; 
      left: 0;
      overflow: hidden;
      z-index: 1;
    }

    .bubble {
      position: absolute;
      bottom: -150px;
      background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.4), rgba(255,255,255,0.1));
      border-radius: 50%;
      animation: rise 25s infinite ease-in;
      box-shadow: inset 0 0 20px rgba(255,255,255,0.2);
    }

    .bubble:nth-child(1) {
      width: 100px; height: 100px;
      left: 8%;
      animation-duration: 20s;
      background: radial-gradient(circle at 30% 30%, rgba(144,224,239,0.4), rgba(144,224,239,0.1));
    }
    .bubble:nth-child(2) {
      width: 60px; height: 60px;
      left: 25%;
      animation-duration: 28s;
      animation-delay: 2s;
      background: radial-gradient(circle at 30% 30%, rgba(72,202,228,0.4), rgba(72,202,228,0.1));
    }
    .bubble:nth-child(3) {
      width: 120px; height: 120px;
      left: 45%;
      animation-duration: 30s;
      animation-delay: 5s;
      background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.5), rgba(255,255,255,0.1));
    }
    .bubble:nth-child(4) {
      width: 80px; height: 80px;
      left: 65%;
      animation-duration: 24s;
      animation-delay: 1s;
      background: radial-gradient(circle at 30% 30%, rgba(0,180,216,0.4), rgba(0,180,216,0.1));
    }
    .bubble:nth-child(5) {
      width: 45px; height: 45px;
      left: 80%;
      animation-duration: 18s;
      animation-delay: 4s;
      background: radial-gradient(circle at 30% 30%, rgba(144,224,239,0.5), rgba(144,224,239,0.1));
    }
    .bubble:nth-child(6) {
      width: 90px; height: 90px;
      left: 15%;
      animation-duration: 26s;
      animation-delay: 3s;
      background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.3), rgba(255,255,255,0.1));
    }

    @keyframes rise {
      0% {
        transform: translateY(0) scale(1) rotate(0deg);
        opacity: 0;
      }
      10% {
        opacity: 1;
      }
      90% {
        opacity: 0.8;
      }
      100% {
        transform: translateY(-120vh) scale(1.5) rotate(180deg);
        opacity: 0;
      }
    }

    /* GLOW EFFECTS */
    .glow-effect {
      position: absolute;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
      animation: glow 4s ease-in-out infinite alternate;
      z-index: 0;
    }

    .glow-1 {
      top: 20%;
      left: 10%;
      animation-delay: 0s;
    }

    .glow-2 {
      top: 60%;
      right: 15%;
      animation-delay: 2s;
      background: radial-gradient(circle, rgba(144,224,239,0.1) 0%, transparent 70%);
    }

    @keyframes glow {
      0% { 
        transform: scale(1); 
        opacity: 0.3;
      }
      100% { 
        transform: scale(1.2); 
        opacity: 0.1;
      }
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      .hero {
        margin: 20px;
        padding: 20px;
      }
      
      .hero h2 {
        font-size: 28px;
      }
      
      .hero p {
        font-size: 16px;
      }
      
      .logo h1 {
        font-size: 24px;
      }
    }
  </style>
</head>
<body>
  <!-- Glow Effects -->
  <div class="glow-effect glow-1"></div>
  <div class="glow-effect glow-2"></div>

  <!-- Enhanced Particles -->
  <div class="particles">
    <div class="particle"></div>
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

  <!-- Enhanced Bubbles -->
  <div class="bubbles">
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
  </div>

  <!-- Logo -->
  <div class="logo">
    <img src="lego.png" alt="GenRYM Logo" />
    <h1>GenRYM Market</h1>
  </div>

  <!-- Hero Section -->
  <div class="hero">
    <div class="hero-content">
      <h2>Bienvenue sur GenRYM Market ✨</h2>
      <p>
        La meilleure plateforme pour découvrir, acheter et vendre vos produits 
        en toute simplicité. Profitez d'un design moderne et d'une expérience fluide 
        avec des effets visuels époustouflants.
      </p>
      <a href="accueil.php" class="btn">🚀 Explorer Maintenant</a>




    </div>
  </div>
</body>
</html>