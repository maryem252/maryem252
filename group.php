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
      font-family: 'Arial', sans-serif; 
      margin: 0; 
      padding: 0; 
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      position: relative;
      overflow-x: hidden;
    }

    /* Particules animées en arrière-plan */
    .particles {
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
      animation: float 6s ease-in-out infinite;
    }

    .particle:nth-child(1) { left: 10%; width: 20px; height: 20px; animation-delay: 0s; }
    .particle:nth-child(2) { left: 30%; width: 30px; height: 30px; animation-delay: 2s; }
    .particle:nth-child(3) { left: 60%; width: 25px; height: 25px; animation-delay: 4s; }
    .particle:nth-child(4) { left: 80%; width: 15px; height: 15px; animation-delay: 1s; }
    .particle:nth-child(5) { left: 45%; width: 35px; height: 35px; animation-delay: 3s; }

    @keyframes float {
      0%, 100% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
      10%, 90% { opacity: 1; }
      50% { transform: translateY(-100px) rotate(180deg); }
    }

    /* Header avec effet glassmorphism */
    header { 
      background: linear-gradient(135deg, rgba(0, 119, 182, 0.9), rgba(2, 62, 138, 0.9));
      backdrop-filter: blur(15px);
      color: white; 
      padding: 30px; 
      text-align: center; 
      position: relative;
      border-bottom: 2px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    }

    .logo { 
      display: flex; 
      align-items: center; 
      justify-content: center; 
      gap: 20px;
      animation: slideInDown 1s ease-out;
    }

    .logo img { 
      height: 60px; 
      filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.3));
      animation: bounce 2s infinite;
    }

    .logo h1 {
      font-size: 3em;
      background: linear-gradient(45deg, #ffdd57, #ff6b6b, #4ecdc4);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      animation: colorShift 3s ease-in-out infinite;
    }

    @keyframes slideInDown {
      from { transform: translateY(-100px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
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

    /* Navigation avec effets hover avancés */
    nav { 
      background: linear-gradient(90deg, #023e8a, #0077b6, #023e8a);
      padding: 15px; 
      text-align: center;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    nav a { 
      color: white; 
      margin: 0 20px; 
      text-decoration: none; 
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
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      transition: left 0.5s;
    }

    nav a:hover::before {
      left: 100%;
    }

    nav a:hover { 
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    section { 
      padding: 60px 20px; 
      position: relative;
      background: rgba(255, 255, 255, 0.1);
      margin: 20px;
      border-radius: 20px;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    h2 { 
      text-align: center; 
      color: #0077b6; 
      margin-bottom: 40px;
      font-size: 2.5em;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
      animation: fadeInUp 1s ease-out;
      position: relative;
    }

    h2::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 4px;
      background: linear-gradient(90deg, #ff6b6b, #4ecdc4, #45b7d1);
      border-radius: 2px;
      animation: expandWidth 1s ease-out 0.5s both;
    }

    @keyframes fadeInUp {
      from { transform: translateY(30px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes expandWidth {
      from { width: 0; }
      to { width: 100px; }
    }

    /* Section Promotion avec effet 3D */
    .promo-section { 
      background: linear-gradient(135deg, #ffdd57, #ff6b6b);
      display: flex; 
      justify-content: center; 
      align-items: center; 
      padding: 40px; 
      border-radius: 25px; 
      box-shadow: 0 15px 35px rgba(0,0,0,0.2), 0 5px 15px rgba(0,0,0,0.1);
      margin: 40px auto; 
      max-width: 900px; 
      position: relative;
      transform: perspective(1000px) rotateX(5deg);
      transition: all 0.3s ease;
      overflow: hidden;
    }

    .promo-section::before {
      content: '🎉';
      position: absolute;
      top: 20px;
      left: 20px;
      font-size: 3em;
      animation: spin 3s linear infinite;
    }

    .promo-section::after {
      content: '🎊';
      position: absolute;
      bottom: 20px;
      right: 20px;
      font-size: 3em;
      animation: spin 3s linear infinite reverse;
    }

    @keyframes spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    .promo-section:hover {
      transform: perspective(1000px) rotateX(0deg) scale(1.02);
      box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    }

    .promo-section img { 
      max-width: 100%; 
      height: auto; 
      border-radius: 15px;
      filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.2));
      transition: transform 0.3s ease;
    }

    .promo-section img:hover {
      transform: scale(1.05) rotate(2deg);
    }

    /* Cartes produits avec animations */
    .products { 
      display: grid; 
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
      gap: 30px; 
      max-width: 1200px; 
      margin: auto; 
    }

    .product-card { 
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 30px; 
      border-radius: 20px; 
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      text-align: center;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      border: 2px solid transparent;
      animation: slideInUp 0.6s ease-out;
    }

    .product-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4);
      z-index: -1;
      border-radius: 20px;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    @keyframes slideInUp {
      from { transform: translateY(50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    .product-card:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 20px 40px rgba(0,0,0,0.2);
      border-color: #4ecdc4;
    }

    .product-card:hover::before {
      opacity: 0.1;
    }

    .product-card img { 
      height: 120px; 
      margin-bottom: 20px;
      border-radius: 10px;
      transition: transform 0.3s ease;
      filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.1));
    }

    .product-card:hover img {
      transform: rotateY(10deg) scale(1.1);
    }

    .product-card h3 {
      color: #333;
      margin-bottom: 10px;
      font-size: 1.4em;
    }

    .product-card p {
      color: #666;
      font-size: 1.2em;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .product-card button { 
      background: linear-gradient(45deg, #0077b6, #023e8a);
      color: white; 
      border: none; 
      padding: 15px 30px; 
      border-radius: 25px; 
      cursor: pointer;
      font-weight: bold;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .product-card button::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      transition: all 0.3s ease;
      transform: translate(-50%, -50%);
    }

    .product-card button:hover::before {
      width: 300px;
      height: 300px;
    }

    .product-card button:hover { 
      transform: scale(1.1);
      box-shadow: 0 5px 15px rgba(0, 119, 182, 0.4);
    }

    /* Section crédit avec style moderne */
    .credit { 
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      max-width: 1000px; 
      margin: auto;
    }

    .credit-box { 
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 30px; 
      border-radius: 20px; 
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      text-align: center;
      transition: all 0.3s ease;
      border: 2px solid rgba(255, 255, 255, 0.3);
      position: relative;
      overflow: hidden;
    }

    .credit-box::before {
      content: '💳';
      position: absolute;
      top: -20px;
      right: -20px;
      font-size: 4em;
      opacity: 0.1;
      transform: rotate(15deg);
    }

    .credit-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0,0,0,0.2);
      border-color: #4ecdc4;
    }

    /* Section nouveautés */
    .news { 
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      max-width: 1200px; 
      margin: auto;
    }

    .news-card { 
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 30px; 
      border-radius: 20px; 
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      text-align: center;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      border: 2px solid transparent;
    }

    .news-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(78, 205, 196, 0.3), transparent);
      transition: left 0.5s;
    }

    .news-card:hover::before {
      left: 100%;
    }

    .news-card:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: 0 15px 35px rgba(0,0,0,0.2);
      border-color: #4ecdc4;
    }

    /* Contact section */
    .contact { 
      display: flex; 
      flex-direction: column; 
      align-items: center; 
      gap: 30px; 
    }

    iframe { 
      border: none; 
      border-radius: 15px; 
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      transition: transform 0.3s ease;
    }

    iframe:hover {
      transform: scale(1.02);
    }

    .contact-info { 
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 30px; 
      border-radius: 15px; 
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      text-align: center;
      border: 2px solid rgba(255, 255, 255, 0.3);
    }

    .contact-info p {
      margin: 10px 0;
      font-size: 1.1em;
      color: #333;
    }

    .contact-info strong {
      color: #0077b6;
    }

    /* Animation d'entrée pour les éléments */
    .animate-on-scroll {
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 0.6s ease-out forwards;
    }

    /* Confettis animés */
    .confetti {
      position: absolute;
      top: -10px;
      background: #ff6b6b;
      width: 10px;
      height: 10px;
      animation: confetti-fall 3s linear infinite;
    }

    .confetti:nth-child(odd) { background: #4ecdc4; animation-delay: 0.5s; }
    .confetti:nth-child(even) { background: #ffdd57; animation-delay: 1s; }

    @keyframes confetti-fall {
      0% { transform: translateY(-100px) rotate(0deg); opacity: 1; }
      100% { transform: translateY(100vh) rotate(720deg); opacity: 0; }
    }

    /* Responsive design amélioré */
    @media (max-width: 768px) {
      .logo h1 { font-size: 2em; }
      nav a { margin: 0 10px; padding: 8px 15px; }
      h2 { font-size: 2em; }
      section { margin: 10px; padding: 40px 15px; }
      .products, .credit, .news { grid-template-columns: 1fr; }
      iframe { width: 100%; max-width: 400px; }
    }
  </style>
</head>
<body>
  <!-- Particules animées -->
  <div class="particles">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
  </div>

  <header>
    <div class="logo">
      <img src="lego.png" alt="GenRYM Logo">
      <h1>GenRYM Market</h1>
    </div>
  </header>

  <nav>
    <a href="#promo">🔥 Promotion</a>
    <a href="#shopping">🛒 Produits</a>
    <a href="#credit">💳 Crédit</a>
    <a href="#news">🆕 Nouveautés</a>
    <a href="#contact">📍 Contact</a>
  </nav>

  <!-- 🎉 Section Promotion -->
  <section id="promo">
    <h2>🔥 Super Promotion</h2>
    <div class="promo-section">
      <img src="images/promo.png" alt="Promotion GenRYM">
    </div>
  </section>

  <!-- 🛒 Shopping Section -->
  <section id="shopping">
    <h2>🛒 Produits en Vente</h2>
    <div class="products">
      <div class="product-card">
        <img src="images/riz.jpeg" alt="Produit 1">
        <h3>🌾 Riz Basmati</h3>
        <p>25 MAD</p>
        <button>Ajouter au panier ✨</button>
      </div>
      <div class="product-card">
        <img src="images/pomme.jpeg" alt="Produit 2">
        <h3>🍎 Pommes</h3>
        <p>3 MAD</p>
        <button>Ajouter au panier ✨</button>
      </div>
      <div class="product-card">
        <img src="images/laptop.jpeg" alt="Produit 3">
        <h3>💻 Ordinateur Portable</h3>
        <p>3700 MAD</p>
        <button>Ajouter au panier ✨</button>
      </div>
    </div>
  </section>

  <!-- 💳 Crédit Section -->
  <section id="credit">
    <h2>💳 Crédit & Fidélité</h2>
    <div class="credit">
      <div class="credit-box">
        <h3>🎁 Carte de Fidélité</h3>
        <p>Gagnez des points à chaque achat et profitez de réductions spéciales.</p>
      </div>
      <div class="credit-box">
        <h3>💰 Paiement en Plusieurs Fois</h3>
        <p>Payez en 3x sans frais sur vos achats supérieurs à 100 MAD.</p>
      </div>
      <div class="credit-box">
        <h3>📝 Demander un Crédit</h3>
        <button onclick="window.location.href='credit.php'">Faire une Demande ✨</button>
      </div>
    </div>
  </section>

  <!-- 🆕 Nouveautés Section -->
  <section id="news">
    <h2>🆕 Nouveautés</h2>
    <div class="news">
      <div class="news-card">
        <h3>📦 Nouveau Service</h3>
        <p>Livraison gratuite dès 50 MAD d'achat. 🚚💨</p>
      </div>
      <div class="news-card">
        <h3>🛍️ Nouveau Produit</h3>
        <p>Découvrez notre nouvelle collection de vêtements. 👔✨</p>
      </div>
      <div class="news-card">
        <h3>📱 Application Mobile</h3>
        <p>Téléchargez notre appli et commandez partout. 📲🌟</p>
      </div>
    </div>
  </section>

  <!-- 📍 Contact & Google Maps -->
  <section id="contact">
    <h2>📍 Nous Trouver</h2>
    <div class="contact">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9999999999996!2d-9.598107!3d30.427755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaf7f3c8c8c8c8c%3A0xabcdef123456789!2sGenRYM+Market!5e0!3m2!1sfr!2sfr!4v1692623412345!5m2!1sfr!2sfr"
        width="600" height="300" allowfullscreen="" loading="lazy"></iframe>
      <div class="contact-info">
        <p><strong>📍 Adresse :</strong> Boulevard Hassan II, Agadir, Maroc</p>
        <p><strong>📞 Téléphone :</strong> +212 6 24 99 50 36</p>
        <p><strong>📧 Email :</strong> meryemboukyoud2019@gmail.com</p>
        <p><strong>🕐 Horaires :</strong>  Tous les jours de 08h00 à 23h00</p>
      </div>
    </div>
  </section>

  <script>
    // Animation au scroll
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, observerOptions);

    // Observer toutes les cartes
    document.querySelectorAll('.product-card, .credit-box, .news-card').forEach(card => {
      card.style.opacity = '0';
      card.style.transform = 'translateY(30px)';
      card.style.transition = 'all 0.6s ease-out';
      observer.observe(card);
    });

    // Effet de parallaxe pour le header
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const parallax = document.querySelector('header');
      if (parallax) {
        parallax.style.transform = `translateY(${scrolled * 0.5}px)`;
      }
    });

    // Animation des particules supplémentaires
    function createFloatingElement() {
      const emoji = ['✨', '🎊', '🎉', '⭐', '💫'][Math.floor(Math.random() * 5)];
      const element = document.createElement('div');
      element.innerHTML = emoji;
      element.style.position = 'fixed';
      element.style.left = Math.random() * 100 + 'vw';
      element.style.top = '100vh';
      element.style.fontSize = Math.random() * 20 + 20 + 'px';
      element.style.zIndex = '-1';
      element.style.pointerEvents = 'none';
      element.style.animation = `float ${Math.random() * 3 + 4}s ease-in-out forwards`;
      
      document.body.appendChild(element);
      
      setTimeout(() => {
        element.remove();
      }, 7000);
    }

    // Créer des éléments flottants périodiquement
    setInterval(createFloatingElement, 3000);
  </script>

</body>
</html>