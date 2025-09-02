<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GenRYM Market - Produits par étage</title>
  <script>
  // Solde initial (stocké en mémoire au lieu de localStorage)
  let solde = 50.00;
  let panier = [];

  // Fonction pour ajouter un produit au panier
  function ajouterAuPanier(nom, prix) {
    if (solde >= prix) {
      panier.push({ nom: nom, prix: prix });
      solde -= prix;
      alert(nom + " ajouté au panier !\nSolde restant : " + solde.toFixed(2) + " MAD");
    } else {
      alert("Solde insuffisant pour acheter " + nom);
    }
  }
</script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@300;400;600;700&display=swap">
  <style>
    * {
      margin: 0; 
      padding: 0; 
      box-sizing: border-box; 
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      padding: 20px;
      position: relative;
      overflow-x: hidden;
    }

    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="10" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="10" cy="60" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="90" cy="40" r="1" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
      pointer-events: none;
      z-index: -1;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px rgba(0,0,0,0.1);
      margin-bottom: 40px;
      border-radius: 25px;
      position: relative;
      overflow: hidden;
      animation: slideInDown 0.8s ease-out;
    }

    header::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      animation: shimmer 3s infinite;
    }

    @keyframes shimmer {
      0% { left: -100%; }
      100% { left: 100%; }
    }

    @keyframes slideInDown {
      from {
        opacity: 0;
        transform: translateY(-50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 15px;
      position: relative;
    }

    .logo img {
      height: 50px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .logo img:hover {
      transform: scale(1.1) rotate(5deg);
    }

    .logo h1 {
      font-size: 28px;
      font-weight: 700;
      background: linear-gradient(45deg, #667eea, #764ba2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      position: relative;
    }

    .search-bar {
      flex: 1;
      max-width: 500px;
      margin: 0 30px;
      position: relative;
    }

    .search-bar input {
      width: 100%;
      padding: 15px 25px 15px 50px;
      border: none;
      border-radius: 30px;
      font-size: 16px;
      background: rgba(255, 255, 255, 0.9);
      box-shadow: inset 0 2px 10px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      outline: none;
    }

    .search-bar input:focus {
      transform: scale(1.02);
      box-shadow: 0 0 20px rgba(102, 126, 234, 0.3), inset 0 2px 10px rgba(0,0,0,0.1);
    }

    .search-bar::before {
      content: '🔍';
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 18px;
      z-index: 1;
    }

    .icons {
      display: flex;
      gap: 25px;
      align-items: center;
    }

    .icons a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      background: linear-gradient(45deg, #667eea, #764ba2);
      border-radius: 50%;
      text-decoration: none;
      color: white;
      font-size: 20px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
      position: relative;
      overflow: hidden;
    }

    .icons a::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
      transition: left 0.5s ease;
    }

    .icons a:hover::before {
      left: 100%;
    }

    .icons a:hover {
      transform: translateY(-3px) scale(1.1);
      box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }

    h2 {
      text-align: center;
      margin-bottom: 50px;
      font-size: 3rem;
      font-weight: 700;
      background: linear-gradient(45deg, #ffffff, #f0f0f0);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-shadow: 0 2px 10px rgba(0,0,0,0.1);
      position: relative;
      animation: fadeInUp 1s ease-out 0.3s both;
    }

    h2::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 4px;
      background: linear-gradient(45deg, #667eea, #764ba2);
      border-radius: 2px;
      animation: expandWidth 1s ease-out 0.8s both;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes expandWidth {
      from { width: 0; }
      to { width: 100px; }
    }

    section.etage {
      margin-bottom: 60px;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      padding: 40px;
      border-radius: 25px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      position: relative;
      overflow: hidden;
      animation: slideInUp 0.8s ease-out;
      transition: all 0.3s ease;
    }

    section.etage:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 50px rgba(0,0,0,0.15);
    }

    section.etage::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: linear-gradient(45deg, #667eea, #764ba2, #f093fb, #f5576c);
      background-size: 300% 300%;
      animation: gradientShift 4s ease infinite;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    @keyframes slideInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    section.etage h3 {
      font-size: 2rem;
      font-weight: 600;
      background: linear-gradient(45deg, #667eea, #764ba2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      padding-bottom: 15px;
      margin-bottom: 30px;
      border-bottom: 3px solid transparent;
      border-image: linear-gradient(45deg, #667eea, #764ba2) 1;
      position: relative;
    }
   .products-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr); 
  gap: 30px;
}

    .product-card {
      background: rgba(255, 255, 255, 0.9);
      border-radius: 20px;
      padding: 25px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      text-align: center;
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
      border: 1px solid rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(10px);
    }

    .product-card::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(102, 126, 234, 0.1) 0%, transparent 70%);
      opacity: 0;
      transition: opacity 0.3s ease;
      pointer-events: none;
    }

    .product-card:hover::before {
      opacity: 1;
    }

    .product-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 20px 40px rgba(102, 126, 234, 0.2);
    }

    .product-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 15px;
      margin-bottom: 20px;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .product-card:hover img {
      transform: scale(1.05);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    .product-card h4 {
      font-size: 1.3rem;
      font-weight: 600;
      background: linear-gradient(45deg, #667eea, #764ba2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 10px;
    }

    .product-card p {
      color: #666;
      font-size: 1rem;
      margin-bottom: 15px;
      font-weight: 400;
    }

    .product-card strong {
      font-size: 1.4rem;
      font-weight: 700;
      background: linear-gradient(45deg, #f093fb, #f5576c);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      display: block;
      margin-bottom: 20px;
    }

    .product-card button {
      background: linear-gradient(45deg, #667eea, #764ba2);
      border: none;
      color: white;
      padding: 12px 30px;
      border-radius: 25px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
      position: relative;
      overflow: hidden;
    }

    .product-card button::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
      transition: left 0.5s ease;
    }

    .product-card button:hover::before {
      left: 100%;
    }

    .product-card button:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
      background: linear-gradient(45deg, #5a6fd8, #6a4190);
    }

    .product-card button:active {
      transform: translateY(0);
    }

    /* Animations d'apparition échelonnée */
    .product-card:nth-child(1) { animation: fadeInScale 0.6s ease-out 0.1s both; }
    .product-card:nth-child(2) { animation: fadeInScale 0.6s ease-out 0.2s both; }
    .product-card:nth-child(3) { animation: fadeInScale 0.6s ease-out 0.3s both; }
    .product-card:nth-child(4) { animation: fadeInScale 0.6s ease-out 0.4s both; }

    @keyframes fadeInScale {
      from {
        opacity: 0;
        transform: scale(0.8) translateY(30px);
      }
      to {
        opacity: 1;
        transform: scale(1) translateY(0);
      }
    }

    /* Message "Aucun résultat" */
    .no-results {
      text-align: center;
      padding: 40px;
      font-size: 1.5rem;
      color: #666;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 15px;
      margin: 20px 0;
      display: none;
    }

    /* Particules flottantes */
    .floating-particles {
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
      animation: float 6s infinite linear;
    }

    .particle:nth-child(1) { left: 10%; animation-delay: 0s; animation-duration: 8s; }
    .particle:nth-child(2) { left: 20%; animation-delay: 1s; animation-duration: 10s; }
    .particle:nth-child(3) { left: 30%; animation-delay: 2s; animation-duration: 7s; }
    .particle:nth-child(4) { left: 40%; animation-delay: 3s; animation-duration: 9s; }
    .particle:nth-child(5) { left: 50%; animation-delay: 4s; animation-duration: 8s; }
    .particle:nth-child(6) { left: 60%; animation-delay: 5s; animation-duration: 11s; }
    .particle:nth-child(7) { left: 70%; animation-delay: 6s; animation-duration: 7s; }
    .particle:nth-child(8) { left: 80%; animation-delay: 7s; animation-duration: 9s; }
    .particle:nth-child(9) { left: 90%; animation-delay: 8s; animation-duration: 10s; }

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

    @media (max-width: 900px) {
      .products-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
      }
      
      .logo h1 { font-size: 24px; }
      h2 { font-size: 2.5rem; }
      section.etage { padding: 30px 25px; }
    }

    @media (max-width: 500px) {
      .products-grid {
        grid-template-columns: 1fr;
      }
      .search-bar {
        display: none;
      }
      
      header {
        padding: 15px 20px;
        flex-direction: column;
        gap: 15px;
      }
      
      .icons {
        gap: 15px;
      }
      
      h2 { font-size: 2rem; }
      section.etage h3 { font-size: 1.5rem; }
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
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
  </div>

  <header>
    <div class="logo">
      <img src="lego.png" alt="GenRYM Logo" />
      <h1>GenRYM Produits</h1>
    </div>

    <div class="search-bar">
      <input id="searchInput" type="text" placeholder="Rechercher un produit..." />
    </div>

    <div class="icons">
      <a href="index.html">👤</a>
      <a href="credit.php">💳</a>
      <a href="shoping.php">🛍️</a>
      <a href="restaurant.php">🍽️</a>
      <a href="pharmacie.php">💊</a>
      <a href="bibliotheque.php">📚</a>
            <a href="makeup.php">💄</a>

      <a href="ajouter.html">🛒</a>
    </div>
  </header>

  <h2>Nos produits par étage</h2>

  <!-- Message "Aucun résultat" -->
  <div id="noResults" class="no-results">
    🔍 Aucun produit trouvé pour votre recherche
  </div>

  <!-- 1er Étage -->
  <section class="etage">
    <h3>1er Étage - Produits frais</h3>
    <div class="products-grid">
      <div class="product-card">
        <img src="images/danone.jpg" alt="Danone" />
        <h4>Danone Nature</h4>
        <p>Yaourt nature, 125g</p>
        <strong>2,50 MAD</strong>
        <button onclick="ajouterAuPanier('Danone Nature', 2.50)">Ajouter au panier</button>
      </div>
      <div class="product-card">
        <img src="images/jus d'orange.jpg " alt="Jus d'orange" />
        <h4>Jus d'orange</h4>
        <p>Bouteille 1L</p>
        <strong>12,50 MAD</strong>
        <button onclick="ajouterAuPanier('Jus d\'orange', 12.50)">Ajouter au panier</button>
      </div>
      <div class="product-card">
        <img src="images/fromage.png" alt="Fromage" />
        <h4>Fromage râpé</h4>
        <p>200g</p>
        <strong>30,00 MAD</strong>
        <button onclick="ajouterAuPanier('Fromage râpé', 30.00)">Ajouter au panier</button>
      </div>
      <div class="product-card">
        <img src="images/beurre.png" alt="Beurre" />
        <h4>Beurre doux</h4>
        <p>250g</p>
        <strong>25,50 MAD</strong>
        <button onclick="ajouterAuPanier('Beurre doux', 25.50)">Ajouter au panier</button>
      </div>
    </div>
  </section>

  <!-- 2ème Étage -->
  <section class="etage">
    <h3>2ème Étage - Produits secs</h3>
    <div class="products-grid">
      <div class="product-card">
        <img src="images/pates.webp" alt="Pâtes" />
        <h4>Pâtes Penne</h4>
        <p>500g</p>
        <strong>35,50 MAD</strong>
        <button onclick="ajouterAuPanier('Pâtes Penne', 35.50)">Ajouter au panier</button>
      </div>
      <div class="product-card">
        <img src="images/riz.jpeg" alt="Riz" />
        <h4>Riz basmati</h4>
        <p>1kg</p>
        <strong>40,00 MAD</strong>
        <button onclick="ajouterAuPanier('Riz basmati', 40.00)">Ajouter au panier</button>
      </div>
      <div class="product-card">
        <img src="images/Haricots.png" alt="Haricots" />
        <h4>Haricots secs</h4>
        <p>500g</p>
        <strong>45,00 MAD</strong>
        <button onclick="ajouterAuPanier('Haricots secs', 45.00)">Ajouter au panier</button>
      </div>
      <div class="product-card">
        <img src="images/conserve.jpeg" alt="Conserve de tomates" />
        <h4>Conserve de tomates</h4>
        <p>400g</p>
        <strong>60,00 MAD</strong>
        <button onclick="ajouterAuPanier('Conserve de tomates', 60.00)">Ajouter au panier</button>
      </div>
    </div>
  </section>

  <!-- 3ème Étage -->
  <section class="etage">
    <h3>3ème Étage - Boissons</h3>
    <div class="products-grid">
      <div class="product-card">
        <img src="images/mirinda.jpeg" alt="Mirinda" />
        <h4>Mirinda</h4>
        <p>Canette 330ml</p>
        <strong>3,50 MAD</strong>
        <button onclick="ajouterAuPanier('Mirinda', 3.50)">Ajouter au panier</button>
      </div>
      <div class="product-card">
        <img src="images/eau mineral.png" alt="Eau minérale" />
        <h4>Eau minérale</h4>
        <p>Bouteille 1,5L</p>
        <strong>6,00 MAD</strong>
        <button onclick="ajouterAuPanier('Eau minérale', 6.00)">Ajouter au panier</button>
      </div>
      <div class="product-card">
        <img src="images/jus de pomme.png" alt="Jus de pomme" />
        <h4>Jus de pomme</h4>
        <p>Bouteille 1L</p>
        <strong>13,00 MAD</strong>
        <button onclick="ajouterAuPanier('Jus de pomme', 13.00)">Ajouter au panier</button>
      </div>
      <div class="product-card">
        <img src="images/the glace.jpeg" alt="Thé glacé" />
        <h4>Thé glacé</h4>
        <p>Bouteille 500ml</p>
        <strong>12,00 MAD</strong>
        <button onclick="ajouterAuPanier('Thé glacé', 12.00)">Ajouter au panier</button>
      </div>
    </div>
  </section>

  <!-- 4ème Étage -->
  <section class="etage">
    <h3>4ème Étage - Produits d'entretien</h3>
    <div class="products-grid">
      <div class="product-card">
        <img src="images/lessive liquide.jpeg" alt="Lessive liquide" />
        <h4>Lessive liquide</h4>
        <p>2L</p>
        <strong>35,80 MAD</strong>
        <button onclick="ajouterAuPanier('Lessive liquide', 35.80)">Ajouter au panier</button>
      </div>
      <div class="product-card">
        <img src="images/produit pour vitre.jpeg" alt="Produit pour vitres" />
        <h4>Produit pour vitres</h4>
        <p>500ml</p>
        <strong>55,50 MAD</strong>
        <button onclick="ajouterAuPanier('Produit pour vitres', 55.50)">Ajouter au panier</button>
      </div>
      <div class="product-card">
        <img src="images/desenfectant.webp" alt="Désinfectant" />
        <h4>Désinfectant</h4>
        <p>750ml</p>
        <strong>60,20 MAD</strong>
        <button onclick="ajouterAuPanier('Désinfectant', 60.20)">Ajouter au panier</button>
      </div>
      <div class="product-card">
        <img src="images/eponges.jpg" alt="Éponges" />
        <h4>Éponges</h4>
        <p>Pack de 3</p>
        <strong>12,90 MAD</strong>
        <button onclick="ajouterAuPanier('Éponges', 12.90)">Ajouter au panier</button>
      </div>
    </div>
  </section>

  <script>
    // Script de recherche corrigé
    document.addEventListener('DOMContentLoaded', function() {
      const searchInput = document.getElementById('searchInput');
      const etages = document.querySelectorAll('section.etage');
      const noResults = document.getElementById('noResults');

      function performSearch() {
        const query = searchInput.value.trim().toLowerCase();
        let totalVisibleProducts = 0;

        etages.forEach(etage => {
          const products = etage.querySelectorAll('.product-card');
          let visibleCount = 0;

          products.forEach(product => {
            const title = product.querySelector('h4').textContent.toLowerCase();
            const description = product.querySelector('p').textContent.toLowerCase();

            if (query === '' || title.includes(query) || description.includes(query)) {
              product.style.display = 'block';
              visibleCount++;
            } else {
              product.style.display = 'none';
            }
          });

          // Afficher/cacher l'étage selon le nombre de produits visibles
          if (query === '' || visibleCount > 0) {
            etage.style.display = 'block';
            totalVisibleProducts += visibleCount;
          } else {
            etage.style.display = 'none';
          }
        });

        // Afficher/cacher le message "Aucun résultat"
        if (query !== '' && totalVisibleProducts === 0) {
          noResults.style.display = 'block';
        } else {
          noResults.style.display = 'none';
        }
      }

      // Événement de recherche en temps réel
      searchInput.addEventListener('input', performSearch);
      searchInput.addEventListener('keyup', performSearch);
      
      // Recherche initiale (pour afficher tous les produits)
      performSearch();
    });
  </script>

</body>
</html>