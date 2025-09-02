<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Makeup - GenRYM Market</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@300;400;600;700&display=swap">
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
  
  body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #ff9ff3 0%, #f368e0 50%, #a29bfe 100%);
    min-height: 100vh;
    padding: 20px;
    overflow-x: hidden;
    position: relative;
  }

  /* Décorations flottantes */
  body::before {
    content: '';
    position: fixed;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: float 20s linear infinite;
    z-index: -1;
  }

  @keyframes float {
    0% { transform: translateY(0px) translateX(0px); }
    25% { transform: translateY(-20px) translateX(10px); }
    50% { transform: translateY(-40px) translateX(-10px); }
    75% { transform: translateY(-20px) translateX(15px); }
    100% { transform: translateY(0px) translateX(0px); }
  }

  /* Particules scintillantes */
  .sparkle {
    position: fixed;
    width: 4px;
    height: 4px;
    background: white;
    border-radius: 50%;
    pointer-events: none;
    animation: sparkle 3s linear infinite;
    z-index: 1;
  }

  @keyframes sparkle {
    0% { opacity: 0; transform: scale(0); }
    50% { opacity: 1; transform: scale(1); }
    100% { opacity: 0; transform: scale(0); }
  }

  header {
    display: flex; justify-content: space-between; align-items: center;
    padding: 20px 40px;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 25px;
    margin-bottom: 30px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
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
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    animation: shimmer 3s infinite;
  }

  @keyframes shimmer {
    0% { left: -100%; }
    100% { left: 100%; }
  }

  .logo { display: flex; align-items: center; gap: 15px; position: relative; }
  .logo img { 
    height: 50px; 
    border-radius: 12px; 
    box-shadow: 0 4px 15px rgba(255, 107, 203, 0.3);
    transition: transform 0.3s;
  }
  .logo img:hover {
    transform: rotate(5deg) scale(1.1);
  }
  
  .logo h1 {
    font-size: 28px; font-weight: 700;
    background: linear-gradient(45deg, #ff6bcb, #9b59b6);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    text-shadow: 0 2px 10px rgba(255, 107, 203, 0.3);
    animation: glow 2s ease-in-out infinite alternate;
  }

  @keyframes glow {
    from { filter: drop-shadow(0 0 5px rgba(255, 107, 203, 0.5)); }
    to { filter: drop-shadow(0 0 20px rgba(255, 107, 203, 0.8)); }
  }

  .icons { display: flex; gap: 20px; }
  .icons a {
    width: 45px; height: 45px;
    display: flex; align-items: center; justify-content: center;
    background: linear-gradient(45deg, #ff6bcb, #9b59b6);
    border-radius: 50%;
    color: #fff; text-decoration: none; font-size: 18px;
    transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    position: relative;
    overflow: hidden;
  }

  .icons a::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255,255,255,0.3);
    border-radius: 50%;
    transition: all 0.3s;
    transform: translate(-50%, -50%);
  }

  .icons a:hover::before {
    width: 100%;
    height: 100%;
  }

  .icons a:hover {
    transform: translateY(-3px) scale(1.1);
    box-shadow: 0 8px 25px rgba(255, 107, 203, 0.4);
  }

  h1 {
    text-align: center; font-size: 2.5rem; color: white;
    margin-bottom: 30px; 
    text-shadow: 0 2px 8px rgba(0,0,0,0.2), 0 0 30px rgba(255,255,255,0.5);
    animation: pulse 2s infinite;
    position: relative;
  }

  h1::after {
    content: '✨';
    position: absolute;
    right: -50px;
    top: -10px;
    font-size: 1.5rem;
    animation: bounce 1s infinite;
  }

  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }

  @keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-10px); }
    60% { transform: translateY(-5px); }
  }

  /* Barre de recherche */
  .search-bar { 
    display: flex; justify-content: center; gap: 10px; margin: 20px 0; 
    position: relative;
  }
  
  .search-bar::before {
    content: '🔍';
    position: absolute;
    left: 50%;
    top: -30px;
    transform: translateX(-50%);
    font-size: 1.5rem;
    animation: searchFloat 2s ease-in-out infinite;
  }

  @keyframes searchFloat {
    0%, 100% { transform: translateX(-50%) translateY(0); }
    50% { transform: translateX(-50%) translateY(-5px); }
  }

  .search-bar input {
    width: 60%; max-width: 500px;
    padding: 12px 20px; border-radius: 25px; border: none;
    font-size: 16px; background: rgba(255,255,255,0.95);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    backdrop-filter: blur(10px);
    border: 2px solid transparent;
    transition: all 0.3s;
  }

  .search-bar input:focus {
    border: 2px solid #ff6bcb;
    box-shadow: 0 4px 25px rgba(255, 107, 203, 0.3);
    outline: none;
  }

  .search-bar button {
    padding: 12px 20px; border-radius: 25px; border: none;
    background: linear-gradient(45deg, #ff6bcb, #9b59b6);
    color: white; font-weight: bold; cursor: pointer;
    transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    position: relative;
    overflow: hidden;
  }

  .search-bar button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
  }

  .search-bar button:hover::before {
    left: 100%;
  }

  .search-bar button:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(255, 107, 203, 0.4);
  }

  .etage { 
    display: flex; justify-content: center; gap: 25px; margin: 40px 0; flex-wrap: wrap;
    position: relative;
  }

  .etage::before {
    content: '';
    position: absolute;
    top: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80%;
    height: 2px;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent);
  }

  .produit {
    background: rgba(255,255,255,0.95); 
    border-radius: 20px; 
    padding: 20px; 
    width: 220px;
    text-align: center; 
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: all 0.3s;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.3);
    position: relative;
    overflow: hidden;
  }

  .produit::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #ff6bcb, #9b59b6, #ff6bcb);
    border-radius: 22px;
    z-index: -1;
    opacity: 0;
    transition: opacity 0.3s;
  }

  .produit:hover::before {
    opacity: 1;
  }

  .produit:hover { 
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 15px 30px rgba(255, 107, 203, 0.3);
  }

  .produit img { 
    width: 140px; 
    height: 140px; 
    object-fit: cover; 
    border-radius: 15px; 
    margin-bottom: 15px;
    transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  }

  .produit:hover img {
    transform: scale(1.1) rotate(2deg);
    box-shadow: 0 8px 25px rgba(255, 107, 203, 0.3);
  }

  .produit h3 { 
    font-size: 1.2rem; 
    color: #9b59b6; 
    margin-bottom: 8px;
    text-shadow: 0 2px 5px rgba(155, 89, 182, 0.2);
  }

  .produit p { 
    font-size: 1.1rem; 
    color: #ff6b6b; 
    font-weight: bold; 
    margin-bottom: 15px;
    text-shadow: 0 2px 5px rgba(255, 107, 107, 0.2);
    animation: priceGlow 2s ease-in-out infinite alternate;
  }

  @keyframes priceGlow {
    from { text-shadow: 0 2px 5px rgba(255, 107, 107, 0.2); }
    to { text-shadow: 0 2px 15px rgba(255, 107, 107, 0.6); }
  }

  .produit button {
    padding: 10px 20px; border-radius: 20px; border: none;
    background: linear-gradient(45deg, #ff6bcb, #9b59b6);
    color: white; font-weight: bold; cursor: pointer;
    transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    position: relative;
    overflow: hidden;
  }

  .produit button::before {
    content: '🛒';
    position: absolute;
    top: 50%;
    left: -30px;
    transform: translateY(-50%);
    transition: left 0.3s;
  }

  .produit button:hover::before {
    left: 10px;
  }

  .produit button:hover {
    transform: translateY(-2px) scale(1.05);
    box-shadow: 0 6px 20px rgba(255, 107, 203, 0.4);
    padding-left: 35px;
  }

  .no-results { 
    text-align: center; 
    color: white; 
    font-size: 1.2rem; 
    margin-top: 20px; 
    display: none;
    text-shadow: 0 2px 10px rgba(0,0,0,0.3);
    animation: fadeInOut 2s infinite;
  }

  @keyframes fadeInOut {
    0%, 100% { opacity: 0.7; }
    50% { opacity: 1; }
  }

  /* Effet de neige de paillettes */
  .glitter {
    position: fixed;
    top: -10px;
    width: 3px;
    height: 3px;
    background: white;
    border-radius: 50%;
    pointer-events: none;
    animation: fall linear infinite;
    z-index: 1;
  }

  @keyframes fall {
    0% {
      transform: translateY(-10px) rotate(0deg);
      opacity: 1;
    }
    100% {
      transform: translateY(100vh) rotate(360deg);
      opacity: 0;
    }
  }
</style>
<script>
  // Fonction pour ajouter au panier
  function ajouterAuPanier(nom, prix) {
    alert(nom + " ajouté au panier ! Prix: " + prix + " MAD");
  }

  // Fonction de recherche
  function filtrerProduits(query) {
    const produits = document.querySelectorAll('.produit');
    const q = query.toLowerCase();
    let visible = 0;
    produits.forEach(p => {
      const nom = p.querySelector('h3').textContent.toLowerCase();
      if (nom.includes(q)) {
        p.style.display = "";
        visible++;
      } else {
        p.style.display = "none";
      }
    });
    document.getElementById('no-results').style.display = visible ? "none" : "block";
  }

  // Ajout des effets décoratifs
  document.addEventListener('DOMContentLoaded', function() {
    // Création des particules scintillantes
    function createSparkle() {
      const sparkle = document.createElement('div');
      sparkle.className = 'sparkle';
      sparkle.style.left = Math.random() * window.innerWidth + 'px';
      sparkle.style.top = Math.random() * window.innerHeight + 'px';
      sparkle.style.animationDelay = Math.random() * 3 + 's';
      document.body.appendChild(sparkle);
      
      setTimeout(() => {
        sparkle.remove();
      }, 3000);
    }

    // Création des paillettes qui tombent
    function createGlitter() {
      const glitter = document.createElement('div');
      glitter.className = 'glitter';
      glitter.style.left = Math.random() * window.innerWidth + 'px';
      glitter.style.animationDuration = (Math.random() * 3 + 2) + 's';
      document.body.appendChild(glitter);
      
      setTimeout(() => {
        glitter.remove();
      }, 5000);
    }

    // Génération continue d'effets
    setInterval(createSparkle, 500);
    setInterval(createGlitter, 200);
  });
</script>
</head>
<body>

<header>
  <div class="logo">
    <img src="lego.png" alt="Logo Makeup" />
    <h1>GenRYM Makeup</h1>
  </div>
  <div class="icons">
    <a href="index.html">👤</a>
    <a href="credit.php">💳</a>
    <a href="code.php">📦</a>
    <a href="shoping.php">🛍️</a>
    <a href="restaurant.php">🍽️</a>
    <a href="bibliotheque.php">📚</a>
    <a href="technologie.php">💻</a>
    <a href="ajouter.html">🛒</a>
  </div>
</header>

<h1>💄 Produits Makeup</h1>

<!-- Barre de recherche -->
<div class="search-bar">
  <input id="search" type="search" placeholder="Rechercher un produit makeup..." oninput="filtrerProduits(this.value)">
  <button onclick="document.getElementById('search').value='';filtrerProduits('')">Effacer</button>
</div>
<p id="no-results" class="no-results">Aucun produit trouvé.</p>

<!-- Étage 1 -->
<div class="etage">
  <div class="produit">
    <img src="images/Rouge à lèvres.jpg" alt="Lipstick">
    <h3>Rouge à lèvres</h3>
    <p>120 MAD</p>
    <button onclick="ajouterAuPanier('Rouge à lèvres',120)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Fond de Teint.jpeg" alt="Fond de Teint">
    <h3>Fond de Teint</h3>
    <p>200 MAD</p>
    <button onclick="ajouterAuPanier('Fond de Teint',200)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Palette Yeux.jpg" alt="Palette Yeux">
    <h3>Palette Yeux</h3>
    <p>250 MAD</p>
    <button onclick="ajouterAuPanier('Palette Yeux',250)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Blush.webp" alt="Blush">
    <h3>Blush</h3>
    <p>150 MAD</p>
    <button onclick="ajouterAuPanier('Blush',150)">Acheter</button>
  </div>
</div>

<!-- Étage 2 -->
<div class="etage">
  <div class="produit">
    <img src="images/Parfum.avif" alt="Parfum">
    <h3>Parfum</h3>
    <p>350 MAD</p>
    <button onclick="ajouterAuPanier('Parfum',350)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Highlighter.jpeg" alt="Highlighter">
    <h3>Highlighter</h3>
    <p>180 MAD</p>
    <button onclick="ajouterAuPanier('Highlighter',180)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Mascara.jpeg" alt="Mascara">
    <h3>Mascara</h3>
    <p>130 MAD</p>
    <button onclick="ajouterAuPanier('Mascara',130)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Poudre Fixante.png" alt="Poudre Fixante">
    <h3>Poudre Fixante</h3>
    <p>160 MAD</p>
    <button onclick="ajouterAuPanier('Poudre Fixante',160)">Acheter</button>
  </div>
</div>

<!-- Étage 3 -->
<div class="etage">
  <div class="produit">
    <img src="images/Gloss.jpg" alt="Gloss">
    <h3>Gloss</h3>
    <p>110 MAD</p>
    <button onclick="ajouterAuPanier('Gloss',110)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Eyeliner.avif" alt="Eyeliner">
    <h3>Eyeliner</h3>
    <p>100 MAD</p>
    <button onclick="ajouterAuPanier('Eyeliner',100)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Primer.webp" alt="Primer">
    <h3>Primer</h3>
    <p>140 MAD</p>
    <button onclick="ajouterAuPanier('Primer',140)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/BB Cream.jpg" alt="BB Cream">
    <h3>BB Cream</h3>
    <p>170 MAD</p>
    <button onclick="ajouterAuPanier('BB Cream',170)">Acheter</button>
  </div>
</div>

<!-- Étage 4 -->
<div class="etage">
  <div class="produit">
    <img src="images/Fard à Joues.webp" alt="Fard à Joues">
    <h3>Fard à Joues</h3>
    <p>120 MAD</p>
    <button onclick="ajouterAuPanier('Fard à Joues',120)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Sérum Visage.jpeg" alt="Sérum Visage">
    <h3>Sérum Visage</h3>
    <p>300 MAD</p>
    <button onclick="ajouterAuPanier('Sérum Visage',300)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Démaquillant.jpeg" alt="Démaquillant">
    <h3>Démaquillant</h3>
    <p>90 MAD</p>
    <button onclick="ajouterAuPanier('Démaquillant',90)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Soin Visage.jpeg" alt="Soin Visage">
    <h3>Soin Visage</h3>
    <p>280 MAD</p>
    <button onclick="ajouterAuPanier('Soin Visage',280)">Acheter</button>
  </div>
</div>

</body>
</html>