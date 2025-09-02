<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GenRYM Market - Nos Engagements & Valeurs</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: #333;
      position: relative;
      overflow-x: hidden;
    }

    /* Particules animées */
    .floating-particles {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      pointer-events: none;
    }

    .particle {
      position: absolute;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      animation: floatUp 8s infinite linear;
    }

    @keyframes floatUp {
      0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
      10% { opacity: 1; }
      90% { opacity: 1; }
      100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
    }

    /* --- HEADER AMÉLIORÉ --- */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      box-shadow: 0 8px 32px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
      border-bottom: 2px solid rgba(0, 119, 182, 0.2);
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 15px;
      animation: slideInLeft 1s ease-out;
    }

    .logo img {
      height: 50px;
      filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.2));
      animation: bounce 2s infinite;
    }

    .logo h1 {
      font-size: 28px;
      background: linear-gradient(45deg, #0077b6, #90e0ef, #0077b6);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: colorShift 3s ease-in-out infinite;
    }

    @keyframes slideInLeft {
      from { transform: translateX(-100px); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }

    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
      40% { transform: translateY(-10px); }
      60% { transform: translateY(-5px); }
    }

    @keyframes colorShift {
      0%, 100% { filter: hue-rotate(0deg); }
      50% { filter: hue-rotate(180deg); }
    }

    nav ul {
      display: flex;
      list-style: none;
      gap: 30px;
    }

    nav a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
      padding: 10px 20px;
      border-radius: 25px;
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
      background: linear-gradient(90deg, transparent, rgba(0, 119, 182, 0.3), transparent);
      transition: left 0.5s;
    }

    nav a:hover::before {
      left: 100%;
    }

    nav a:hover {
      color: #0077b6;
      background: rgba(0, 119, 182, 0.1);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0, 119, 182, 0.2);
    }

    /* --- HERO SECTION SPECTACULAIRE --- */
    .hero {
      text-align: center;
      padding: 100px 20px;
      background: linear-gradient(135deg, rgba(0, 119, 182, 0.9), rgba(144, 224, 239, 0.9));
      backdrop-filter: blur(10px);
      color: white;
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
      background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
      background-size: 50px 50px;
      animation: moveBackground 20s linear infinite;
      z-index: -1;
    }

    @keyframes moveBackground {
      0% { transform: translate(0, 0); }
      100% { transform: translate(50px, 50px); }
    }

    .hero h2 {
      font-size: 48px;
      margin-bottom: 20px;
      animation: fadeInUp 1s ease-out;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .hero p {
      font-size: 22px;
      margin-bottom: 30px;
      animation: fadeInUp 1s ease-out 0.3s both;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .hero button {
      padding: 18px 40px;
      font-size: 20px;
      background: linear-gradient(45deg, #fff, #f0f0f0);
      color: #0077b6;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.3s ease;
      animation: fadeInUp 1s ease-out 0.6s both;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      position: relative;
      overflow: hidden;
    }

    .hero button::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: rgba(0, 119, 182, 0.2);
      border-radius: 50%;
      transition: all 0.3s ease;
      transform: translate(-50%, -50%);
    }

    .hero button:hover::before {
      width: 300px;
      height: 300px;
    }

    .hero button:hover {
      transform: scale(1.1);
      box-shadow: 0 12px 35px rgba(0, 119, 182, 0.3);
    }

    @keyframes fadeInUp {
      from { transform: translateY(30px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    /* --- SECTION STATISTIQUES --- */
    .stats {
      padding: 80px 40px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      margin: 20px;
      border-radius: 25px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    .stats h2 {
      text-align: center;
      font-size: 36px;
      color: #0077b6;
      margin-bottom: 50px;
      position: relative;
    }

    .stats h2::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 4px;
      background: linear-gradient(90deg, #ff6b6b, #4ecdc4, #45b7d1);
      border-radius: 2px;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .stat-card {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 30px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .stat-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(0, 119, 182, 0.1), transparent);
      transition: left 0.5s;
    }

    .stat-card:hover::before {
      left: 100%;
    }

    .stat-card:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 20px 40px rgba(0, 119, 182, 0.2);
    }

    .stat-number {
      font-size: 48px;
      font-weight: bold;
      color: #0077b6;
      display: block;
      margin-bottom: 10px;
    }

    .stat-label {
      font-size: 16px;
      color: #666;
      font-weight: bold;
    }

    /* --- ENGAGEMENTS SECTION AMÉLIORÉE --- */
    .engagements {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 30px;
      padding: 80px 40px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .engagement-section {
      margin-bottom: 60px;
    }

    .section-title {
      text-align: center;
      font-size: 42px;
      color: #0077b6;
      margin-bottom: 60px;
      position: relative;
      animation: fadeInUp 1s ease-out;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 150px;
      height: 4px;
      background: linear-gradient(90deg, #ff6b6b, #4ecdc4, #45b7d1);
      border-radius: 2px;
      animation: expandWidth 1s ease-out 0.5s both;
    }

    @keyframes expandWidth {
      from { width: 0; }
      to { width: 150px; }
    }

    .card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(15px);
      padding: 35px;
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      text-align: left;
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
      border: 2px solid transparent;
      animation: slideInUp 0.6s ease-out;
    }

    .card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(0, 119, 182, 0.05), rgba(144, 224, 239, 0.05));
      z-index: -1;
      border-radius: 20px;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .card:hover::before {
      opacity: 1;
    }

    .card:hover {
      transform: translateY(-15px) scale(1.02);
      box-shadow: 0 25px 50px rgba(0,119,182,0.2);
      border-color: rgba(0, 119, 182, 0.3);
    }

    @keyframes slideInUp {
      from { transform: translateY(50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    .card h3 {
      margin-bottom: 20px;
      color: #0077b6;
      font-size: 24px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .card h3 .emoji {
      font-size: 32px;
      animation: bounce 2s infinite;
    }

    .card p {
      color: #555;
      line-height: 1.8;
      font-size: 16px;
      margin-bottom: 15px;
    }

    .card .details {
      background: rgba(0, 119, 182, 0.1);
      padding: 20px;
      border-radius: 15px;
      margin-top: 20px;
      border-left: 4px solid #0077b6;
    }

    .card .details h4 {
      color: #0077b6;
      margin-bottom: 10px;
      font-size: 18px;
    }

    .card .details ul {
      list-style: none;
      padding-left: 0;
    }

    .card .details li {
      padding: 5px 0;
      position: relative;
      padding-left: 25px;
    }

    .card .details li::before {
      content: '✓';
      position: absolute;
      left: 0;
      color: #4ecdc4;
      font-weight: bold;
    }

    /* --- SECTION TÉMOIGNAGES --- */
    .testimonials {
      padding: 80px 40px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      margin: 20px;
      border-radius: 25px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    .testimonials h2 {
      text-align: center;
      font-size: 36px;
      color: #0077b6;
      margin-bottom: 50px;
    }

    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .testimonial {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      position: relative;
      transition: all 0.3s ease;
    }

    .testimonial::before {
      content: '"';
      position: absolute;
      top: -10px;
      left: 20px;
      font-size: 60px;
      color: rgba(0, 119, 182, 0.3);
      font-family: serif;
    }

    .testimonial:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(0, 119, 182, 0.15);
    }

    .testimonial p {
      font-style: italic;
      margin-bottom: 20px;
      color: #555;
      line-height: 1.6;
    }

    .testimonial .author {
      font-weight: bold;
      color: #0077b6;
      text-align: right;
    }

    /* --- PRODUITS SECTION AMÉLIORÉE --- */
    .produits {
      padding: 80px 40px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      margin: 20px;
      border-radius: 25px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .produits h2 {
      font-size: 36px;
      margin-bottom: 50px;
      color: #0077b6;
    }

    .grid-produits {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .produit {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 25px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .produit::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(78, 205, 196, 0.3), transparent);
      transition: left 0.5s;
    }

    .produit:hover::before {
      left: 100%;
    }

    .produit:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 20px 40px rgba(0, 119, 182, 0.2);
    }

    .produit img {
      max-width: 100%;
      border-radius: 15px;
      margin-bottom: 15px;
      filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.1));
      transition: transform 0.3s ease;
    }

    .produit:hover img {
      transform: scale(1.1);
    }

    .produit h4 {
      color: #0077b6;
      margin-bottom: 10px;
      font-size: 20px;
    }

    .produit p {
      font-size: 18px;
      font-weight: bold;
      color: #ff6b6b;
    }

    /* --- FOOTER AMÉLIORÉ --- */
    footer {
      background: linear-gradient(135deg, #0077b6, #023e8a);
      color: white;
      text-align: center;
      padding: 40px 20px;
      margin-top: 40px;
      position: relative;
      overflow: hidden;
    }

    footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4);
    }

    footer p {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .social-links {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 20px;
    }

    .social-links a {
      color: white;
      font-size: 24px;
      transition: all 0.3s ease;
      padding: 10px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
    }

    .social-links a:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: scale(1.2);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .hero h2 { font-size: 36px; }
      .hero p { font-size: 18px; }
      .section-title { font-size: 32px; }
      header { padding: 15px 20px; }
      nav ul { flex-direction: column; gap: 10px; }
      .engagements { grid-template-columns: 1fr; padding: 40px 20px; }
      .stats-grid { grid-template-columns: repeat(2, 1fr); }
    }

    /* Animation pour les particules flottantes */
    .floating-icons {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: -1;
    }

    .floating-icon {
      position: absolute;
      font-size: 24px;
      opacity: 0.1;
      animation: floatAround 15s infinite linear;
    }

    @keyframes floatAround {
      0% { transform: translate(0, 100vh) rotate(0deg); }
      100% { transform: translate(50px, -100px) rotate(360deg); }
    }
  </style>
</head>
<body>

  <!-- Particules flottantes -->
  <div class="floating-particles">
    <div class="particle" style="left: 10%; width: 20px; height: 20px; animation-delay: 0s;"></div>
    <div class="particle" style="left: 30%; width: 30px; height: 30px; animation-delay: 2s;"></div>
    <div class="particle" style="left: 60%; width: 25px; height: 25px; animation-delay: 4s;"></div>
    <div class="particle" style="left: 80%; width: 15px; height: 15px; animation-delay: 1s;"></div>
    <div class="particle" style="left: 45%; width: 35px; height: 35px; animation-delay: 3s;"></div>
  </div>

  <!-- Icônes flottantes -->
  <div class="floating-icons">
    <div class="floating-icon" style="left: 5%; animation-delay: 0s;">🌱</div>
    <div class="floating-icon" style="left: 15%; animation-delay: 3s;">♻️</div>
    <div class="floating-icon" style="left: 25%; animation-delay: 6s;">🚚</div>
    <div class="floating-icon" style="left: 35%; animation-delay: 9s;">💚</div>
    <div class="floating-icon" style="left: 45%; animation-delay: 12s;">✨</div>
    <div class="floating-icon" style="left: 55%; animation-delay: 1s;">🌍</div>
    <div class="floating-icon" style="left: 65%; animation-delay: 4s;">🤝</div>
    <div class="floating-icon" style="left: 75%; animation-delay: 7s;">💡</div>
    <div class="floating-icon" style="left: 85%; animation-delay: 10s;">🎯</div>
    <div class="floating-icon" style="left: 95%; animation-delay: 13s;">❤️</div>
  </div>

  <!-- HEADER -->
  <header>
    <div class="logo">
      <img src="lego.png" alt="GenRYM Logo" />
      <h1>GenRYM Market</h1>
    </div>
    <nav>
      <ul>
        <li><a href="accueil.php">🏠 Accueil</a></li>
        <li><a href="#promotions">🔥 Promotions</a></li>
        <li><a href="ajouter.html">🛒 Panier</a></li>
        <li><a href="engagement.php">💎 Engagements</a></li>
        <li><a href="index.html">👤 Connexion</a></li>
      </ul>
    </nav>
  </header>

  <!-- HERO -->
  <section class="hero" id="hero">
    <h2>🌟 Nos Engagements, Votre Confiance</h2>
    <p>Chez GenRYM Market, nous nous engageons chaque jour à vous offrir une expérience d'achat exceptionnelle, responsable et transparente. Découvrez nos valeurs et notre vision pour un commerce plus éthique.</p>
    <button>✨ Découvrir nos valeurs</button>
  </section>

  <!-- STATISTIQUES -->
  <section class="stats">
    <h2>📊 GenRYM en Chiffres</h2>
    <div class="stats-grid">
      <div class="stat-card">
        <span class="stat-number">50,000+</span>
        <span class="stat-label">Clients satisfaits</span>
      </div>
      <div class="stat-card">
        <span class="stat-number">25,000+</span>
        <span class="stat-label">Produits référencés</span>
      </div>
      <div class="stat-card">
        <span class="stat-number">98%</span>
        <span class="stat-label">Taux de satisfaction</span>
      </div>
      <div class="stat-card">
        <span class="stat-number">500+</span>
        <span class="stat-label">Producteurs partenaires</span>
      </div>
      <div class="stat-card">
        <span class="stat-number">15</span>
        <span class="stat-label">Années d'expérience</span>
      </div>
      <div class="stat-card">
        <span class="stat-number">100,000+</span>
        <span class="stat-label">Livraisons effectuées</span>
      </div>
    </div>
  </section>

  <!-- ENGAGEMENTS DÉTAILLÉS -->
  <section class="engagement-section" id="engagements">
    <h2 class="section-title">💎 Nos Engagements Fondamentaux</h2>
    <div class="engagements">
      
      <div class="card">
        <h3><span class="emoji">✅</span> Fraîcheur Garantie Premium</h3>
        <p>Nous nous engageons à vous fournir uniquement des produits de la plus haute qualité. Notre chaîne du froid est maintenue de la source jusqu'à votre domicile.</p>
        <div class="details">
          <h4>🔍 Nos Standards Qualité :</h4>
          <ul>
            <li>Contrôle qualité quotidien par nos experts</li>
            <li>Traçabilité complète de nos produits</li>
            <li>Respect strict de la chaîne du froid</li>
            <li>Partenariats avec des producteurs locaux certifiés</li>
            <li>Laboratoire interne pour les analyses microbiologiques</li>
            <li>Certification HACCP et ISO 22000</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <h3><span class="emoji">💰</span> Prix Justes & Transparents</h3>
        <p>Nous pratiquons une politique de prix équitables, sans surprise. Notre engagement : des prix compétitifs avec une transparence totale sur nos marges.</p>
        <div class="details">
          <h4>💡 Notre Politique Tarifaire :</h4>
          <ul>
            <li>Aucun frais caché sur vos commandes</li>
            <li>Prix bloqués pendant 30 jours minimum</li>
            <li>Remboursement de la différence si moins cher ailleurs</li>
            <li>Programme de fidélité avec 5% de cashback</li>
            <li>Promotions hebdomadaires jusqu'à -50%</li>
            <li>Prix dégressifs selon les quantités</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <h3><span class="emoji">🚚</span> Livraison Express & Fiable</h3>
        <p>Notre service de livraison est conçu pour s'adapter à votre emploi du temps. Livraison en 2h chrono dans Agadir et environs.</p>
        <div class="details">
          <h4>⚡ Options de Livraison :</h4>
          <ul>
            <li>Livraison express en 2h (gratuite dès 50€)</li>
            <li>Créneaux de livraison personnalisables</li>
            <li>Livraison le dimanche et jours fériés</li>
            <li>Service de livraison écologique (vélos électriques)</li>
            <li>Suivi en temps réel de votre commande</li>
            <li>Remboursement en cas de retard</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <h3><span class="emoji">🌍</span> Écoresponsabilité Active</h3>
        <p>Notre engagement environnemental va au-delà des mots. Nous agissons concrètement pour réduire notre impact écologique et promouvoir une consommation responsable.</p>
        <div class="details">
          <h4>🌱 Nos Actions Écologiques :</h4>
          <ul>
            <li>100% de nos emballages