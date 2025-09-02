<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GenRYM Market - Accueil</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #0077b6, #00b4d8, #90e0ef, #caf0f8);
        background-size: 400% 400%;
        animation: gradientMove 10s ease infinite;
        position: relative;
        overflow-x: hidden;
    }

    /* ANIMATED BACKGROUND */
    @keyframes gradientMove {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* FLOATING PARTICLES BACKGROUND */
    .particles-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        overflow: hidden;
    }

    .particle-bg {
        position: absolute;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        animation: floatParticles 20s infinite linear;
    }

    .particle-bg:nth-child(1) { width: 3px; height: 3px; left: 10%; animation-delay: 0s; animation-duration: 15s; }
    .particle-bg:nth-child(2) { width: 5px; height: 5px; left: 20%; animation-delay: 2s; animation-duration: 18s; }
    .particle-bg:nth-child(3) { width: 2px; height: 2px; left: 30%; animation-delay: 4s; animation-duration: 12s; }
    .particle-bg:nth-child(4) { width: 4px; height: 4px; left: 40%; animation-delay: 1s; animation-duration: 16s; }
    .particle-bg:nth-child(5) { width: 6px; height: 6px; left: 50%; animation-delay: 3s; animation-duration: 14s; }
    .particle-bg:nth-child(6) { width: 3px; height: 3px; left: 60%; animation-delay: 5s; animation-duration: 17s; }
    .particle-bg:nth-child(7) { width: 4px; height: 4px; left: 70%; animation-delay: 2s; animation-duration: 13s; }
    .particle-bg:nth-child(8) { width: 5px; height: 5px; left: 80%; animation-delay: 6s; animation-duration: 19s; }
    .particle-bg:nth-child(9) { width: 2px; height: 2px; left: 90%; animation-delay: 1s; animation-duration: 11s; }
    .particle-bg:nth-child(10) { width: 7px; height: 7px; left: 5%; animation-delay: 4s; animation-duration: 20s; }

    @keyframes floatParticles {
        0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
    }

    /* ===== HEADER ENHANCED ===== */
    header {
        background: linear-gradient(135deg, rgba(0,119,182,0.95), rgba(0,180,216,0.95));
        backdrop-filter: blur(15px);
        color: white;
        padding: 15px 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        position: relative;
        z-index: 100;
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }

    header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
        animation: headerShine 3s infinite;
    }

    @keyframes headerShine {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    header img {
        height: 60px;
        border-radius: 50%;
        border: 3px solid rgba(255,255,255,0.3);
        animation: logoSpin 8s linear infinite;
        filter: drop-shadow(0 0 15px rgba(255,255,255,0.5));
    }

    @keyframes logoSpin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    h1 { 
        color: white; 
        text-align: center; 
        font-size: 28px;
        text-shadow: 0 0 20px rgba(255,255,255,0.5);
        background: linear-gradient(45deg, #ffffff, #90e0ef);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: textGlow 2s ease-in-out infinite alternate;
    }

    @keyframes textGlow {
        0% { filter: drop-shadow(0 0 5px rgba(255,255,255,0.3)); }
        100% { filter: drop-shadow(0 0 15px rgba(255,255,255,0.8)); }
    }

    nav {
        display: flex;
        gap: 25px;
        flex-wrap: wrap;
    }

    nav a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        padding: 10px 15px;
        border-radius: 20px;
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.2);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    nav a::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.3s ease;
    }

    nav a:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        background: rgba(255,255,255,0.2);
    }

    nav a:hover::before {
        left: 100%;
    }

    /* ===== SLIDER ENHANCED ===== */
    .slider {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 600px;
        background: linear-gradient(135deg, rgba(224,247,250,0.9), rgba(187,222,251,0.9));
        backdrop-filter: blur(20px);
        overflow: hidden;
        position: relative;
        margin: 20px;
        border-radius: 25px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        border: 1px solid rgba(255,255,255,0.3);
    }

    .slider::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: conic-gradient(from 0deg, transparent, rgba(255,255,255,0.1), transparent);
        animation: rotate360 12s linear infinite;
    }

    @keyframes rotate360 {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .slides {
        display: flex;
        gap: 80px;
        animation: slide 25s infinite linear;
        position: relative;
        z-index: 2;
    }

    .slides a {
        position: relative;
        display: block;
        animation: itemFloat 3s ease-in-out infinite alternate;
    }

    .slides a:nth-child(odd) {
        animation-delay: 1s;
    }

    @keyframes itemFloat {
        0% { transform: translateY(0px); }
        100% { transform: translateY(-15px); }
    }

    .slides a img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        border: 6px solid rgba(0,119,182,0.8);
        box-shadow: 
            0 15px 35px rgba(0,0,0,0.3),
            inset 0 0 20px rgba(255,255,255,0.2);
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
    }

    .slides a::before {
        content: '';
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        background: conic-gradient(from 0deg, #0077b6, #00b4d8, #90e0ef, #0077b6);
        border-radius: 50%;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
        animation: ringRotate 2s linear infinite;
    }

    @keyframes ringRotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .slides a:hover::before {
        opacity: 1;
    }

    .slides a img:hover {
        transform: scale(1.3) rotate(15deg);
        box-shadow: 
            0 25px 60px rgba(0,0,0,0.4),
            0 0 50px rgba(0,119,182,0.6);
        border-color: #ff6f61;
        filter: brightness(1.1);
    }

    @keyframes slide {
        0% {transform: translateX(0);}
        100% {transform: translateX(-100%);}
    }

    /* ===== FOOTER ENHANCED ===== */
    footer {
        background: linear-gradient(135deg, rgba(225,236,247,0.95), rgba(193,225,245,0.95));
        backdrop-filter: blur(15px);
        padding: 50px 30px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        color: #003366;
        border-top: 4px solid #0077b6;
        margin-top: 30px;
        position: relative;
        box-shadow: 0 -10px 30px rgba(0,0,0,0.1);
    }

    footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, #0077b6, #00b4d8, #90e0ef, #0077b6);
        animation: borderFlow 3s linear infinite;
    }

    @keyframes borderFlow {
        0% { background-position: 0% 50%; }
        100% { background-position: 200% 50%; }
    }

    footer > div {
        background: rgba(255,255,255,0.2);
        padding: 25px;
        border-radius: 15px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.3);
        margin: 10px;
        min-width: 200px;
        transition: all 0.3s ease;
    }

    footer > div:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        background: rgba(255,255,255,0.3);
    }

    footer h3 {
        margin-bottom: 15px;
        color: #004a99;
        font-size: 18px;
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        position: relative;
    }

    footer h3::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 30px;
        height: 2px;
        background: linear-gradient(90deg, #0077b6, #00b4d8);
        border-radius: 1px;
    }

    footer ul {
        list-style: none;
        padding: 0;
    }

    footer ul li {
        margin: 8px 0;
    }

    footer ul li a {
        color: #004a99;
        text-decoration: none;
        transition: all 0.3s ease;
        padding: 5px 10px;
        border-radius: 8px;
        display: inline-block;
    }

    footer ul li a:hover {
        background: rgba(0,119,182,0.1);
        color: #0077b6;
        transform: translateX(5px);
    }

    /* SOCIAL ICONS ENHANCED */
    .social-icons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .social-icons div {
        position: relative;
    }

    .social-icons a {
        display: block;
        padding: 8px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .social-icons a:hover {
        transform: scale(1.1) rotate(360deg);
        background: rgba(0,119,182,0.2);
        border-color: #0077b6;
        box-shadow: 0 8px 20px rgba(0,119,182,0.3);
    }

    .social-icons img {
        border-radius: 50%;
        filter: brightness(1.1);
        transition: filter 0.3s ease;
    }

    .social-icons a:hover img {
        filter: brightness(1.3) contrast(1.2);
    }

    /* ===== COOKIES ENHANCED ===== */
    .cookies {
        background: linear-gradient(135deg, rgba(199,223,245,0.95), rgba(176,203,228,0.95));
        backdrop-filter: blur(15px);
        padding: 20px;
        display: flex;
        justify-content: center;
        gap: 20px;
        border-top: 1px solid rgba(255,255,255,0.3);
        box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
        flex-wrap: wrap;
    }

    .cookies button {
        padding: 12px 25px;
        border-radius: 25px;
        border: none;
        cursor: pointer;
        background: linear-gradient(135deg, #0077b6, #00b4d8);
        color: white;
        font-weight: bold;
        font-size: 14px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,119,182,0.3);
        position: relative;
        overflow: hidden;
    }

    .cookies button::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
        transform: rotate(45deg);
        transition: all 0.3s ease;
    }

    .cookies button:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,119,182,0.4);
        background: linear-gradient(135deg, #005f8a, #0077b6);
    }

    .cookies button:hover::before {
        left: 100%;
    }

    /* GLOWING ORBS */
    .glow-orb {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: orbFloat 8s ease-in-out infinite;
        z-index: -1;
    }

    .orb1 {
        width: 200px;
        height: 200px;
        top: 10%;
        left: 5%;
        animation-delay: 0s;
    }

    .orb2 {
        width: 150px;
        height: 150px;
        top: 60%;
        right: 10%;
        animation-delay: 4s;
        background: radial-gradient(circle, rgba(144,224,239,0.1) 0%, transparent 70%);
    }

    .orb3 {
        width: 100px;
        height: 100px;
        top: 30%;
        right: 30%;
        animation-delay: 2s;
        background: radial-gradient(circle, rgba(0,180,216,0.1) 0%, transparent 70%);
    }

    @keyframes orbFloat {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(20px, -20px) scale(1.1); }
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        header {
            flex-direction: column;
            gap: 15px;
            padding: 15px;
        }
        
        nav {
            justify-content: center;
        }
        
        .slider {
            height: 400px;
            margin: 10px;
        }
        
        .slides a img {
            width: 150px;
            height: 150px;
        }
        
        footer {
            padding: 30px 15px;
        }
        
        footer > div {
            min-width: auto;
            width: 100%;
            margin: 5px 0;
        }
    }
</style>
</head>
<body>

<!-- FLOATING PARTICLES BACKGROUND -->
<div class="particles-bg">
    <div class="particle-bg"></div>
    <div class="particle-bg"></div>
    <div class="particle-bg"></div>
    <div class="particle-bg"></div>
    <div class="particle-bg"></div>
    <div class="particle-bg"></div>
    <div class="particle-bg"></div>
    <div class="particle-bg"></div>
    <div class="particle-bg"></div>
    <div class="particle-bg"></div>
</div>

<!-- GLOWING ORBS -->
<div class="glow-orb orb1"></div>
<div class="glow-orb orb2"></div>
<div class="glow-orb orb3"></div>

<!-- ===== HEADER ===== -->
<header>
    <img src="lego.png" alt="GenRYM Logo">
    <h1>✨ GenRYM Market ✨</h1>

    <nav>
        <a href="index.html">👤 Contact</a>
        <a href="code.php"> 📦Produits</a>
        <a href="pharmacie.php">💊 Pharmacie</a>
        <a href="restaurant.php">🍽️ Restaurant</a>
        <a href="bibliotheque.php">📚 Bibliothèque</a>
        <a href="shoping.php">🛍️ Shopping</a>
        <a href="technologie.php">💻 Technologie</a>
              <a href="makeup.php">💄Makeup</a>

        <a href="credit.php">💳 Crédit</a>
        <a href="ajouter.html">🛒Panier</a>
    </nav>
</header>

<!-- ===== SLIDER ===== -->
<div class="slider">
    <div class="slides">
        <a href="index.html"><img src="images/private.jpg" alt="Privé"></a>
        <a href="code.php"><img src="images/snacks.jpg" alt="Snacks"></a>
        <a href="restaurant.php"><img src="images/resrantt.jpg" alt="Restaurant"></a>
        <a href="bibliotheque.php"><img src="images/books.jpg" alt="Bibliothèque"></a>
        <a href="shopping.php"><img src="images/shoppp.jpg" alt="Shopping"></a>
        <a href="technologie.php"><img src="images/things.jpg" alt="Technologie"></a>
        <a href="pharmacie.php"><img src="images/pharmaciee.jpg" alt="Pharmacie"></a>
        <a href="makeup.php"><img src="images/makeup.jpg" alt="Makeup"></a>
        <a href="credit.php"><img src="images/creditt.jpg" alt="Crédit"></a>
        <!-- Duplicate pour continuité -->

    </div>
</div>

<!-- ===== FOOTER ===== -->
<footer>
    <div>
        <h3>⚖️ Informations légales</h3>
        <ul>
            <li><a href="engagement.php">🤝 Engagements GenRYM</a></li>
            <li><a href="equipe.php">👥 Notre équipe</a></li>
            <li><a href="history.php">📋 Informations légales</a></li>
        </ul>
    </div>
    <div>
        <h3>ℹ️ À propos</h3>
        <ul>
            <li><a href="avis.php">⭐ AVIS</a></li>
            <li><a href="reclamation.php">📝 Réclamation</a></li>
            <li><a href="group.php">🏢 GenRYM Group</a></li>
        </ul>
    </div>
    <div>
        <h3>🌟 Suivez-nous</h3>
        <div class="social-icons">
            <div><a href="https://www.facebook.com/maryemmm.52" target="_blank"><img src="images/facebook.avif" width="40"></a></div>
            <div><a href="https://www.instagram.com/__maryem_19" target="_blank"><img src="images/instgram.jpeg" width="40"></a></div>
            <div><a href="https://www.snapchat.com/add/maryemm.19?share_id=pDbAjvnPXIM&locale=en-US" target="_blank"><img src="images/Snapchat.png" width="40"></a></div>
            <div><a href="https://www.tiktok.com/@maryem_520" target="_blank"><img src="images/tiktko.png" width="40"></a></div>
        </div>
    </div>
</footer>

<!-- ===== COOKIES ===== -->
<div class="cookies">
    <button>✅ J'AI COMPRIS</button>
    <button>🔍 EN SAVOIR PLUS</button>
</div>

<footer style="background: linear-gradient(135deg, #003366, #004a99); color: white; text-align: center; padding: 20px; margin-top: 0;">
    © 2025 GenRYM Market. Tous droits réservés. ✨
</footer>

</body>
</html>