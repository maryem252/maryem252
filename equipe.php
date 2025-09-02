<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notre Équipe - GenRYM Market</title>
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

    /* Particules animées en arrière-plan */
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
      animation: floatUp 10s infinite linear;
    }

    .particle:nth-child(1) { left: 10%; width: 20px; height: 20px; animation-delay: 0s; }
    .particle:nth-child(2) { left: 30%; width: 30px; height: 30px; animation-delay: 3s; }
    .particle:nth-child(3) { left: 60%; width: 25px; height: 25px; animation-delay: 6s; }
    .particle:nth-child(4) { left: 80%; width: 15px; height: 15px; animation-delay: 2s; }
    .particle:nth-child(5) { left: 45%; width: 35px; height: 35px; animation-delay: 4s; }
    .particle:nth-child(6) { left: 20%; width: 18px; height: 18px; animation-delay: 7s; }

    @keyframes floatUp {
      0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
      10% { opacity: 1; }
      90% { opacity: 1; }
      100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
    }

    /* Étoiles scintillantes */
    .stars {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: -1;
    }

    .star {
      position: absolute;
      color: rgba(255, 255, 255, 0.6);
      font-size: 12px;
      animation: twinkle 3s infinite;
    }

    @keyframes twinkle {
      0%, 100% { opacity: 0; transform: scale(0.5); }
      50% { opacity: 1; transform: scale(1); }
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
      border-bottom: 3px solid rgba(0, 119, 182, 0.2);
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
      padding: 12px 25px;
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
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(0, 119, 182, 0.2);
    }

    /* --- HERO SECTION SPECTACULAIRE --- */
    .hero {
      text-align: center;
      padding: 100px 20px;
      background: linear-gradient(135deg, rgba(0, 119, 182, 0.9), rgba(144, 224, 239, 0.9));
      backdrop-filter: blur(15px);
      color: white;
      position: relative;
      overflow: hidden;
      margin: 20px;
      border-radius: 25px;
      border: 2px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    .hero::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 2px, transparent 2px);
      background-size: 60px 60px;
      animation: moveBackground 25s linear infinite;
      z-index: -1;
    }

    @keyframes moveBackground {
      0% { transform: translate(0, 0); }
      100% { transform: translate(60px, 60px); }
    }

    .hero h2 {
      font-size: 48px;
      margin-bottom: 20px;
      animation: fadeInUp 1s ease-out;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      position: relative;
    }

    .hero h2::after {
      content: '👥✨';
      position: absolute;
      top: -20px;
      right: -60px;
      font-size: 0.7em;
      animation: spin 4s linear infinite;
    }

    @keyframes spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    .hero p {
      font-size: 20px;
      margin-bottom: 30px;
      animation: fadeInUp 1s ease-out 0.3s both;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    @keyframes fadeInUp {
      from { transform: translateY(30px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    /* --- SECTION STATISTIQUES ÉQUIPE --- */
    .team-stats {
      padding: 60px 40px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      margin: 20px;
      border-radius: 25px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 25px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .stat-card {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 25px;
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
      font-size: 36px;
      font-weight: bold;
      color: #0077b6;
      display: block;
      margin-bottom: 10px;
    }

    .stat-label {
      font-size: 14px;
      color: #666;
      font-weight: bold;
    }

    /* --- TEAM SECTION AMÉLIORÉE --- */
    .team {
      padding: 80px 40px;
      text-align: center;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(5px);
      margin: 20px;
      border-radius: 25px;
    }

    .team h2 {
      font-size: 42px;
      color: #0077b6;
      margin-bottom: 50px;
      position: relative;
      animation: fadeInUp 1s ease-out;
    }

    .team h2::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 120px;
      height: 4px;
      background: linear-gradient(90deg, #ff6b6b, #4ecdc4, #45b7d1);
      border-radius: 2px;
      animation: expandWidth 1s ease-out 0.5s both;
    }

    @keyframes expandWidth {
      from { width: 0; }
      to { width: 120px; }
    }

    .team-intro {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 40px;
      border-radius: 20px;
      margin-bottom: 50px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 50px;
    }

    .team-intro h3 {
      color: #0077b6;
      font-size: 28px;
      margin-bottom: 20px;
    }

    .team-intro p {
      font-size: 18px;
      line-height: 1.6;
      color: #555;
      margin-bottom: 15px;
    }

    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 35px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .member {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(15px);
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
      border: 2px solid transparent;
      animation: slideInUp 0.6s ease-out;
    }

    .member::before {
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

    .member:hover::before {
      opacity: 1;
    }

    .member:hover {
      transform: translateY(-15px) scale(1.03);
      box-shadow: 0 25px 50px rgba(0,119,182,0.2);
      border-color: rgba(0, 119, 182, 0.3);
    }

    @keyframes slideInUp {
      from { transform: translateY(50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    .member-image {
      position: relative;
      margin-bottom: 20px;
      overflow: hidden;
      border-radius: 15px;
    }

    .member img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 15px;
      transition: transform 0.4s ease;
      filter: drop-shadow(0 8px 15px rgba(0, 0, 0, 0.2));
    }

    .member:hover img {
      transform: scale(1.1);
    }

    .member-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(45deg, rgba(0, 119, 182, 0.8), rgba(144, 224, 239, 0.8));
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
      border-radius: 15px;
    }

    .member:hover .member-overlay {
      opacity: 1;
    }

    .social-links {
      display: flex;
      gap: 15px;
    }

    .social-links a {
      color: white;
      font-size: 24px;
      padding: 10px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.2);
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .social-links a:hover {
      background: rgba(255, 255, 255, 0.3);
      transform: scale(1.2);
    }

    .member h3 {
      font-size: 24px;
      color: #0077b6;
      margin-bottom: 8px;
      font-weight: bold;
    }

    .member .role {
      font-size: 16px;
      color: #666;
      font-weight: bold;
      margin-bottom: 15px;
      padding: 5px 15px;
      background: rgba(0, 119, 182, 0.1);
      border-radius: 20px;
      display: inline-block;
    }

    .member .description {
      font-size: 14px;
      color: #555;
      line-height: 1.6;
      margin-bottom: 15px;
      text-align: left;
    }

    .member .skills {
      text-align: left;
    }

    .member .skills h4 {
      color: #0077b6;
      font-size: 16px;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .skills-list {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }

    .skill-tag {
      background: linear-gradient(45deg, #4ecdc4, #44a08d);
      color: white;
      padding: 4px 10px;
      border-radius: 15px;
      font-size: 12px;
      font-weight: bold;
    }

    .member .experience {
      background: rgba(0, 119, 182, 0.1);
      padding: 15px;
      border-radius: 10px;
      margin-top: 15px;
      text-align: left;
    }

    .experience h4 {
      color: #0077b6;
      font-size: 14px;
      margin-bottom: 8px;
    }

    .experience p {
      font-size: 13px;
      color: #666;
    }

    /* --- SECTION VALEURS ÉQUIPE --- */
    .team-values {
      padding: 60px 40px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      margin: 20px;
      border-radius: 25px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    .team-values h2 {
      text-align: center;
      font-size: 36px;
      color: #0077b6;
      margin-bottom: 40px;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .value-card {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 25px;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .value-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0, 119, 182, 0.15);
    }

    .value-card h3 {
      color: #0077b6;
      font-size: 20px;
      margin-bottom: 15px;
    }

    .value-card .emoji {
      font-size: 48px;
      display: block;
      margin-bottom: 15px;
      animation: bounce 2s infinite;
    }

    /* --- FOOTER AMÉLIORÉ --- */
    footer {
      background: linear-gradient(135deg, #0077b6, #023e8a);
      color: white;
      text-align: center;
      padding: 50px 20px;
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
      height: 3px;
      background: linear-gradient(90deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4);
    }

    footer h3 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    footer p {
      font-size: 16px;
      margin-bottom: 15px;
      opacity: 0.9;
    }

    .footer-contact {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
      margin-top: 30px;
    }

    .footer-contact div {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 16px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .hero h2 { font-size: 36px; }
      .hero p { font-size: 18px; }
      .team h2 { font-size: 32px; }
      header { padding: 15px 20px; }
      nav ul { flex-direction: column; gap: 10px; }
      .team-grid { grid-template-columns: 1fr; }
      .stats-grid { grid-template-columns: repeat(2, 1fr); }
      .values-grid { grid-template-columns: 1fr; }
      .team, .team-stats, .team-values { padding: 40px 20px; margin: 10px; }
    }

    /* Animations supplémentaires */
    .animate-on-scroll {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.6s ease-out;
    }

    .animate-on-scroll.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body>

  <!-- Particules flottantes -->
  <div class="floating-particles">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
  </div>

  <!-- Étoiles scintillantes -->
  <div class="stars">
    <div class="star" style="left: 10%; top: 20%;">✨</div>
    <div class="star" style="left: 20%; top: 80%; animation-delay: 1s;">⭐</div>
    <div class="star" style="left: 70%; top: 10%; animation-delay: 2s;">💫</div>
    <div class="star" style="left: 80%; top: 60%; animation-delay: 0.5s;">🌟</div>
    <div class="star" style="left: 50%; top: 30%; animation-delay: 1.5s;">✨</div>
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
        <li><a href="equipe.php">👥 Notre Équipe</a></li>
        <li><a href="avis.php">💎 Votre vis</a></li>
        <li><a href="index.html">👤 Connexion</a></li>
      </ul>
    </nav>
  </header>

  <!-- HERO -->
  <section class="hero" id="hero">
    <h2>🌟 Rencontrez Notre Équipe Exceptionnelle</h2>
    <p>Chez GenRYM Market, nous croyons que le succès repose sur une équipe soudée, passionnée et dédiée à l'excellence. Découvrez les visages et les talents qui font la force de notre entreprise depuis plus de 15 ans.</p>
  </section>

  <!-- STATISTIQUES ÉQUIPE -->
  <section class="team-stats">
    <div class="stats-grid">
      <div class="stat-card">
        <span class="stat-number">12</span>
        <span class="stat-label">Experts passionnés</span>
      </div>
      <div class="stat-card">
        <span class="stat-number">8</span>
        <span class="stat-label">Années d'expérience moyenne</span>
      </div>
      <div class="stat-card">
        <span class="stat-number">15</span>
        <span class="stat-label">Langues parlées</span>
      </div>
      <div class="stat-card">
        <span class="stat-number">100%</span>
        <span class="stat-label">Engagement qualité</span>
      </div>
    </div>
  </section>

  <!-- INTRODUCTION ÉQUIPE -->
  <section class="team" id="equipe">
    <h2>👨‍💼 Notre Dream Team de 12 Experts</h2>
    
    <div class="team-intro">
      <h3>🚀 Une Équipe, Une Vision</h3>
      <p>Notre équipe multidisciplinaire réunit des professionnels expérimentés, chacun apportant son expertise unique pour créer une expérience client exceptionnelle. De la direction générale aux opérations terrain, nous partageons tous la même passion : votre satisfaction.</p>
      <p>Formés aux dernières technologies et méthodes de travail, nos collaborateurs suivent régulièrement des formations pour rester à la pointe de leur domaine. L'esprit d'équipe et l'innovation sont au cœur de notre culture d'entreprise.</p>
    </div>

    <div class="team-grid">
      
      <div class="member">
        <div class="member-image">
          <img src="images/girl1.jpg" alt="Sarah Dupont">
          <div class="member-overlay">
            <div class="social-links">
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="Email">📧</a>
              <a href="#" title="Téléphone">📞</a>
            </div>
          </div>
        </div>
        <h3>Sarah Dupont</h3>
        <p class="role">🎯 Directrice Générale & Fondatrice</p>
        <p class="description">Leader visionnaire avec 15 ans d'expérience dans la grande distribution. Sarah a fondé GenRYM Market avec la mission de révolutionner l'expérience d'achat en ligne au Maroc.</p>
        <div class="skills">
          <h4>🎯 Expertises :</h4>
          <div class="skills-list">
            <span class="skill-tag">Leadership</span>
            <span class="skill-tag">Stratégie</span>
            <span class="skill-tag">Innovation</span>
            <span class="skill-tag">Management</span>
          </div>
        </div>
        <div class="experience">
          <h4>📈 Réalisations :</h4>
          <p>• Croissance de 300% du CA en 3 ans<br>• 50 000+ clients fidélisés<br>• Prix "Entrepreneur de l'année 2023"</p>
        </div>
      </div>

      <div class="member">
        <div class="member-image">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop&crop=face" alt="Jean Martin">
          <div class="member-overlay">
            <div class="social-links">
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="Email">📧</a>
              <a href="#" title="Téléphone">📞</a>
            </div>
          </div>
        </div>
        <h3>Jean Martin</h3>
        <p class="role">🛒 Responsable Achats & Sourcing</p>
        <p class="description">Expert en négociation et sourcing avec un réseau de plus de 500 fournisseurs. Jean garantit la qualité et les meilleurs prix pour tous nos produits.</p>
        <div class="skills">
          <h4>🎯 Expertises :</h4>
          <div class="skills-list">
            <span class="skill-tag">Négociation</span>
            <span class="skill-tag">Sourcing</span>
            <span class="skill-tag">Qualité</span>
            <span class="skill-tag">Logistique</span>
          </div>
        </div>
        <div class="experience">
          <h4>📈 Réalisations :</h4>
          <p>• 500+ fournisseurs partenaires<br>• Réduction des coûts de 25%<br>• Certification bio pour 80% des produits frais</p>
        </div>
      </div>

      <div class="member">
        <div class="member-image">
          <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&h=300&fit=crop&crop=face" alt="Amélie Laurent">
          <div class="member-overlay">
            <div class="social-links">
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="Email">📧</a>
              <a href="#" title="Téléphone">📞</a>
            </div>
          </div>
        </div>
        <h3>Amélie Laurent</h3>
        <p class="role">📈 Responsable Marketing & Communication</p>
        <p class="description">Créative et analytique, Amélie développe nos stratégies marketing digitales et gère notre image de marque avec passion et innovation.</p>
        <div class="skills">
          <h4>🎯 Expertises :</h4>
          <div class="skills-list">
            <span class="skill-tag">Marketing Digital</span>
            <span class="skill-tag">Réseaux Sociaux</span>
            <span class="skill-tag">Design</span>
            <span class="skill-tag">Analytics</span>
          </div>
        </div>
        <div class="experience">
          <h4>📈 Réalisations :</h4>
          <p>• +200% followers sur réseaux sociaux<br>• ROI marketing de 450%<br>• 15 campagnes primées</p>
        </div>
      </div>

      <div class="member">
        <div class="member-image">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&h=300&fit=crop&crop=face" alt="David Moreau">
          <div class="member-overlay">
            <div class="social-links">
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="Email">📧</a>
              <a href="#" title="Téléphone">📞</a>
            </div>
          </div>
        </div>
        <h3>David Moreau</h3>
        <p class="role">🚚 Chef Logistique & Opérations</p>
        <p class="description">Maître de l'efficacité opérationnelle, David coordonne toute notre chaîne logistique pour assurer des livraisons rapides et parfaites.</p>
        <div class="skills">
          <h4>🎯 Expertises :</h4>
          <div class="skills-list">
            <span class="skill-tag">Logistique</span>
            <span class="skill-tag">Supply Chain</span>
            <span class="skill-tag">Optimisation</span>
            <span class="skill-tag">Transport</span>
          </div>
        </div>
        <div class="experience">
          <h4>📈 Réalisations :</h4>
          <p>• 100 000+ livraisons réussies<br>• Temps de livraison réduit de 40%<br>• Taux de satisfaction 98.5%</p>
        </div>
      </div>

      <div class="member">
        <div class="member-image">
          <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=300&h=300&fit=crop&crop=face" alt="Claire Bernard">
          <div class="member-overlay">
            <div class="social-links">
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="Email">📧</a>
              <a href="#" title="Téléphone">📞</a>
            </div>
          </div>
        </div>
        <h3>Claire Bernard</h3>
        <p class="role">👥 Responsable Ressources Humaines</p>
        <p class="description">Experte en développement des talents, Claire veille au bien-être de notre équipe et recrute les meilleurs profils pour GenRYM Market.</p>
        <div class="skills">
          <h4>🎯 Expertises :</h4>
          <div class="skills-list">
            <span class="skill-tag">Recrutement</span>
            <span class="skill-tag">Formation</span>
            <span class="skill-tag">Management</span>
            <span class="skill-tag">Coaching</span>
          </div>
        </div>
        <div class="experience">
          <h4>📈 Réalisations :</h4>
          <p>• 95% de rétention des employés<br>• 50+ formations dispensées<br>• Certification "Great Place to Work"</p>
        </div>
      </div>

      <div class="member">
        <div class="member-image">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=300&h=300&fit=crop&crop=face" alt="Julien Petit">
          <div class="member-overlay">
            <div class="social-links">
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="Email">📧</a>
              <a href="#" title="Téléphone">📞</a>
            </div>
          </div>
        </div>
        <h3>Julien Petit</h3>
        <p class="role">💰 Chef Comptable & Finance</p>
        <p class="description">Gardien de nos finances, Julien assure la gestion rigoureuse de notre comptabilité et optimise nos performances économiques.</p>
        <div class="skills">
          <h4>🎯 Expertises :</h4>
          <div class="skills-list">
            <span class="skill-tag">Comptabilité</span>
            <span class="skill-tag">Finance</span>
            <span class="skill-tag">Audit</span>
            <span class="skill-tag">Fiscalité</span>
          </div>
        </div>
        <div class="experience">
          <h4>📈 Réalisations :</h4>
          <p>• Croissance CA de +35% annuel<br>• Optimisation fiscale de 200K€<br>• 0 retard de paiement fournisseurs</p>
        </div>
      </div>

      <div class="member">
        <div class="member-image">
          <img src="images/girl2.jpg" alt="Sophie Richard">
          <div class="member-overlay">
            <div class="social-links">
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="Email">📧</a>
              <a href="#" title="Téléphone">📞</a>
            </div>
          </div>
        </div>
        <h3>Sophie Richard</h3>
        <p class="role">📢 Chargée de Communication & RP</p>
        <p class="description">Ambassadrice de notre marque, Sophie gère notre communication externe et développe notre notoriété avec créativité et professionnalisme.</p>
        <div class="skills">
          <h4>🎯 Expertises :</h4>
          <div class="skills-list">
            <span class="skill-tag">Communication</span>
            <span class="skill-tag">Relations Presse</span>
            <span class="skill-tag">Événementiel</span>
            <span class="skill-tag">Content Marketing</span>
          </div>
        </div>
        <div class="experience">
          <h4>📈 Réalisations :</h4>
          <p>• 150+ articles de presse<br>• 20 événements organisés<br>• Notoriété brand +300%</p>
        </div>
      </div>

      <div class="member">
        <div class="member-image">
          <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=300&h=300&fit=crop&crop=face" alt="Thomas Lefèvre">
          <div class="member-overlay">
            <div class="social-links">
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="Email">📧</a>
              <a href="#" title="Téléphone">📞</a>
            </div>
          </div>
        </div>
        <h3>Thomas Lefèvre</h3>
        <p class="role">🔍 Responsable Qualité & Conformité</p>
        <p class="description">Garant de l'excellence, Thomas supervise tous nos processus qualité et assure la conformité de nos produits aux normes les plus strictes.</p>
        <div class="skills">
          <h4>🎯 Expertises :</h4>
          <div class="skills-list">
            <span class="skill-tag">Qualité</span>
            <span class="skill-tag">HACCP</span>
            <span class="skill-tag">Audit</span>
            <span class="skill-tag">Certification</span>
          </div>
        </div>
        <div class="experience">
          <h4>📈 Réalisations :</h4>
          <p>• Certification ISO 22000<br>• 0 non-conformité majeure<br>• 99.8% de produits conformes</p>
        </div>
      </div>

      <div class="member">
        <div class="member-image">
          <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?w=300&h=300&fit=crop&crop=face" alt="Julie Robert">
          <div class="member-overlay">
            <div class="social-links">
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="Email">📧</a>
              <a href="#" title="Téléphone">📞</a>
            </div>
          </div>
        </div>
        <h3>Julie Robert</h3>
        <p class="role">🥬 Chef Produits Frais & Bio</p>
        <p class="description">Experte en produits frais, Julie sélectionne rigoureusement nos fruits, légumes et produits bio pour garantir fraîcheur et qualité exceptionnelles.</p>
        <div class="skills">
          <h4>🎯 Expertises :</h4>
          <div class="skills-list">
            <span class="skill-tag">Produits Bio</span>
            <span class="skill-tag">Nutrition</span>
            <span class="skill-tag">Sélection</span>
            <span class="skill-tag">Saisonnalité</span>
          </div>
        </div>
        <div class="experience">
          <h4>📈 Réalisations :</h4>
          <p>• 200+ producteurs bio partenaires<br>• 90% de produits locaux<br>• Certification Agriculture Biologique</p>
        </div>
      </div>

      <div class="member">
        <div class="member-image">
          <img src="https://images.unsplash.com/photo-1507591064344-4c6ce005b128?w=300&h=300&fit=crop&crop=face" alt="Antoine Dubois">
          <div class="member-overlay">
            <div class="social-links">
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="Email">📧</a>
              <a href="#" title="Téléphone">📞</a>
            </div>
          </div>
        </div>
        <h3>Antoine Dubois</h3>
        <p class="role">🛡️ Responsable Sécurité & Protection</p>
        <p class="description">Veilleur infatigable, Antoine assure la sécurité de nos installations, de nos données et de nos équipes avec expertise et vigilance.</p>
        <div class="skills">
          <h4>🎯 Expertises :</h4>
          <div class="skills-list">
            <span class="skill-tag">Cybersécurité</span>
            <span class="skill-tag">Sécurité Physique</span>
            <span class="skill-tag">RGPD</span>
            <span class="skill-tag">Risk Management</span>
          </div>
        </div>
        <div class="experience">
          <h4>📈 Réalisations :</h4>
          <p>• 0 incident sécurité en 3 ans<br>• Conformité RGPD 100%<br>• Certification ISO 27001</p>
        </div>
      </div>

      <div class="member">
        <div class="member-image">
          <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=300&h=300&fit=crop&crop=face" alt="Camille Fontaine">
          <div class="member-overlay">
            <div class="social-links">
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="Email">📧</a>
              <a href="#" title="Téléphone">📞</a>
            </div>
          </div>
        </div>
        <h3>Camille Fontaine</h3>
        <p class="role">💬 Chef Service Client & Satisfaction</p>
        <p class="description">Ambassadrice de votre satisfaction, Camille et son équipe sont à votre écoute 24h/24 pour répondre à tous vos besoins avec sourire et efficacité.</p>
        <div class="skills">
          <h4>🎯 Expertises :</h4>
          <div class="skills-list">
            <span class="skill-tag">Relation Client</span>
            <span class="skill-tag">Support</span>
            <span class="skill-tag">CRM</span>
            <span class="skill-tag">Médiation</span>
          </div>
        </div>
        <div class="experience">
          <h4>📈 Réalisations :</h4>
          <p>• Satisfaction client 98.7%<br>• Temps de réponse < 2h<br>• 50 000+ problèmes résolus</p>
        </div>
      </div>

      <div class="member">
        <div class="member-image">
          <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=300&h=300&fit=crop&crop=face" alt="Lucas Garnier">
          <div class="member-overlay">
            <div class="social-links">
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="Email">📧</a>
              <a href="#" title="Téléphone">📞</a>
            </div>
          </div>
        </div>
        <h3>Lucas Garnier</h3>
        <p class="role">💻 Responsable IT & Innovation</p>
        <p class="description">Architecte de notre avenir numérique, Lucas développe et maintient tous nos systèmes informatiques tout en innovant constamment pour améliorer votre expérience.</p>
        <div class="skills">
          <h4>🎯 Expertises :</h4>
          <div class="skills-list">
            <span class="skill-tag">Développement Web</span>
            <span class="skill-tag">Cloud Computing</span>
            <span class="skill-tag">Intelligence Artificielle</span>
            <span class="skill-tag">DevOps</span>
          </div>
        </div>
        <div class="experience">
          <h4>📈 Réalisations :</h4>
          <p>• 99.9% uptime plateforme<br>• IA de recommandation +45% ventes<br>• Migration cloud complète</p>
        </div>
      </div>