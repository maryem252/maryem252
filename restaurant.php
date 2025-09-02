<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>GenRYM Market - Restaurant</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Segoe+UI&display=swap">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }

/* Animations et décorations */
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes sparkle {
  0%, 100% { transform: scale(1) rotate(0deg); opacity: 0.8; }
  50% { transform: scale(1.2) rotate(180deg); opacity: 1; }
}

@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
}

@keyframes pulse {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.05); }
}

@keyframes gradientShift {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

/* Arrière-plan décoratif */
body { 
  background: linear-gradient(-45deg, #f4f4f4, #fff5f5, #ffe8e8, #f0f8ff);
  background-size: 400% 400%;
  animation: gradientShift 15s ease infinite;
  padding: 20px; 
  position: relative;
  overflow-x: hidden;
}

body::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: 
    radial-gradient(circle at 20% 20%, rgba(214, 40, 40, 0.1) 0%, transparent 50%),
    radial-gradient(circle at 80% 80%, rgba(247, 127, 0, 0.1) 0%, transparent 50%),
    radial-gradient(circle at 40% 60%, rgba(120, 0, 0, 0.05) 0%, transparent 50%);
  pointer-events: none;
  z-index: -1;
}

/* Éléments décoratifs flottants */
.decoration-stars {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 0;
}

.star {
  position: absolute;
  width: 4px;
  height: 4px;
  background: linear-gradient(45deg, #d62828, #f77f00);
  border-radius: 50%;
  animation: sparkle 3s infinite;
}

.star:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
.star:nth-child(2) { top: 20%; left: 80%; animation-delay: 1s; }
.star:nth-child(3) { top: 60%; left: 15%; animation-delay: 2s; }
.star:nth-child(4) { top: 80%; left: 70%; animation-delay: 0.5s; }
.star:nth-child(5) { top: 30%; left: 90%; animation-delay: 1.5s; }

header { 
  display: flex; 
  justify-content: space-between; 
  align-items: center; 
  padding: 15px 30px; 
  background: linear-gradient(135deg, #fff, #fefefe);
  backdrop-filter: blur(10px);
  box-shadow: 
    0 8px 32px rgba(0,0,0,0.1),
    0 0 0 1px rgba(255,255,255,0.2),
    inset 0 1px 0 rgba(255,255,255,0.3);
  margin-bottom: 30px; 
  border-radius: 20px;
  position: relative;
  overflow: hidden;
  animation: fadeInUp 0.8s ease;
}

header::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
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
}

.logo::before {
  content: '✨';
  position: absolute;
  left: -25px;
  animation: float 2s ease-in-out infinite;
  font-size: 20px;
}

.logo img { 
  height: 45px; 
  border-radius: 50%;
  box-shadow: 0 4px 12px rgba(214, 40, 40, 0.3);
  transition: transform 0.3s ease;
}

.logo img:hover {
  transform: rotate(360deg) scale(1.1);
}

.logo h1 { 
  font-size: 24px; 
  background: linear-gradient(135deg, #d62828, #f77f00, #780000);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  position: relative;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
}

.search-bar { 
  flex: 1; 
  max-width: 400px; 
  margin: 0 20px; 
  position: relative;
}

.search-bar::before {
  content: '🔍';
  position: absolute;
  left: 15px;
  top: 50%;
  transform: translateY(-50%);
  z-index: 1;
  font-size: 16px;
}

.search-bar input { 
  width: 100%; 
  padding: 12px 15px 12px 45px; 
  border: none;
  background: linear-gradient(135deg, #fff, #f8f9fa);
  border-radius: 30px; 
  font-size: 15px; 
  box-shadow: 
    0 4px 16px rgba(0,0,0,0.1),
    inset 0 1px 0 rgba(255,255,255,0.8);
  transition: all 0.3s ease;
}

.search-bar input:focus {
  outline: none;
  box-shadow: 
    0 6px 20px rgba(214, 40, 40, 0.2),
    0 0 0 2px rgba(214, 40, 40, 0.3);
  transform: translateY(-2px);
}

.icons { 
  display: flex; 
  gap: 20px; 
  align-items: center; 
  font-size: 20px; 
}

.icons a { 
  text-decoration: none; 
  color: #d62828;
  padding: 10px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(214, 40, 40, 0.1), rgba(247, 127, 0, 0.1));
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.icons a:hover {
  transform: translateY(-3px) scale(1.1);
  background: linear-gradient(135deg, rgba(214, 40, 40, 0.2), rgba(247, 127, 0, 0.2));
  box-shadow: 0 8px 16px rgba(214, 40, 40, 0.3);
}

.icons a::after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  background: radial-gradient(circle, rgba(255,255,255,0.4) 0%, transparent 70%);
  transform: translate(-50%, -50%);
  border-radius: 50%;
  transition: all 0.3s ease;
}

.icons a:hover::after {
  width: 100px;
  height: 100px;
}

h2 { 
  background: linear-gradient(135deg, #d62828, #f77f00);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-align: center; 
  margin-bottom: 40px; 
  font-size: 2.5em;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
  position: relative;
  animation: fadeInUp 1s ease 0.2s both;
}

h2::before, h2::after {
  content: '🍽️';
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  animation: float 2s ease-in-out infinite;
}

h2::before { left: -60px; animation-delay: 0.5s; }
h2::after { right: -60px; animation-delay: 1s; }

section.etage { 
  margin-bottom: 50px; 
  background: linear-gradient(135deg, rgba(255,255,255,0.9), rgba(248,249,250,0.9));
  backdrop-filter: blur(20px);
  padding: 30px; 
  border-radius: 24px; 
  box-shadow: 
    0 20px 40px rgba(0,0,0,0.1),
    0 0 0 1px rgba(255,255,255,0.2),
    inset 0 1px 0 rgba(255,255,255,0.3);
  position: relative;
  overflow: hidden;
  animation: fadeInUp 0.8s ease;
  border: 2px solid transparent;
  background-clip: padding-box;
}

section.etage::before {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  background: linear-gradient(45deg, #d62828, #f77f00, #780000, #d62828);
  background-size: 400% 400%;
  border-radius: 24px;
  z-index: -1;
  animation: gradientShift 6s ease infinite;
}

section.etage:hover {
  transform: translateY(-5px);
  box-shadow: 
    0 30px 60px rgba(0,0,0,0.15),
    0 0 0 1px rgba(255,255,255,0.3);
}

section.etage h3 { 
  background: linear-gradient(135deg, #780000, #d62828, #f77f00);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  border-bottom: none;
  padding-bottom: 15px; 
  margin-bottom: 25px; 
  font-size: 1.8em; 
  position: relative;
  text-align: center;
}

section.etage h3::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 4px;
  background: linear-gradient(90deg, transparent, #f77f00, transparent);
  border-radius: 2px;
}

.products-grid { 
  display: grid; 
  grid-template-columns: repeat(4, 1fr); 
  gap: 25px; 
}

.product-card { 
  background: linear-gradient(135deg, #fff, #fefefe);
  border-radius: 20px; 
  padding: 20px; 
  box-shadow: 
    0 10px 30px rgba(0,0,0,0.1),
    0 0 0 1px rgba(255,255,255,0.2);
  text-align: center; 
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  position: relative;
  overflow: hidden;
  border: 1px solid transparent;
  background-clip: padding-box;
}

.product-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(214, 40, 40, 0.1), transparent);
  transition: left 0.5s ease;
}

.product-card:hover::before {
  left: 100%;
}

.product-card:hover { 
  transform: translateY(-10px) scale(1.02);
  box-shadow: 
    0 25px 50px rgba(214, 40, 40, 0.2),
    0 0 0 2px rgba(214, 40, 40, 0.1);
}

.product-card img { 
  width: 100%; 
  height: 160px; 
  object-fit: cover; 
  border-radius: 15px; 
  margin-bottom: 15px; 
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.product-card:hover img {
  transform: scale(1.05);
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.product-card h4 { 
  background: linear-gradient(135deg, #d62828, #f77f00);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: 8px; 
  font-size: 1.2em;
  position: relative;
}

.product-card p { 
  color: #666; 
  font-size: 0.95em; 
  margin-bottom: 12px; 
  font-style: italic;
}

.product-card strong { 
  color: #780000; 
  font-size: 1.3em;
  display: block;
  margin-bottom: 15px;
  text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
}

button { 
  background: linear-gradient(135deg, #d62828, #a4161a);
  color: #fff; 
  border: none; 
  padding: 12px 24px; 
  cursor: pointer; 
  border-radius: 25px;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  box-shadow: 
    0 4px 15px rgba(214, 40, 40, 0.4),
    inset 0 1px 0 rgba(255,255,255,0.2);
}

button::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  background: rgba(255,255,255,0.3);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  transition: all 0.3s ease;
}

button:hover::before {
  width: 300px;
  height: 300px;
}

button:hover { 
  background: linear-gradient(135deg, #a4161a, #780000);
  transform: translateY(-2px);
  box-shadow: 
    0 8px 25px rgba(214, 40, 40, 0.6),
    inset 0 1px 0 rgba(255,255,255,0.3);
}

button:active {
  transform: translateY(0);
}

/* Étages spécifiques avec décorations */
section.etage:nth-child(2) h3::before { content: '🥗 '; }
section.etage:nth-child(3) h3::before { content: '🍕 '; }
section.etage:nth-child(4) h3::before { content: '🍰 '; }
section.etage:nth-child(5) h3::before { content: '🥤 '; }

/* Responsive amélioré */
@media (max-width: 900px) { 
  .products-grid { grid-template-columns: repeat(2, 1fr); }
  h2::before, h2::after { display: none; }
}

@media (max-width: 500px) { 
  .products-grid { grid-template-columns: 1fr; } 
  .search-bar { display: none; }
  section.etage { padding: 20px; }
  .star { display: none; }
}

/* Ajout d'étoiles décoratives */
.decoration-stars {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 0;
}
</style>
<script>
// Solde initial
if (localStorage.getItem("solde") === null) {
  localStorage.setItem("solde", 50.00);
}
function ajouterAuPanier(nom, prix) {
  let panier = JSON.parse(localStorage.getItem("panier") || "[]");
  let solde = parseFloat(localStorage.getItem("solde"));
  if (solde >= prix) {
    panier.push({ nom: nom, prix: prix });
    solde -= prix;
    localStorage.setItem("panier", JSON.stringify(panier));
    localStorage.setItem("solde", solde.toFixed(2));
    alert(nom + " ajouté au panier !\nSolde restant : " + solde.toFixed(2) + " MAD");
  } else {
    alert("Solde insuffisant pour acheter " + nom);
  }
}
document.addEventListener("DOMContentLoaded", function() {
  const searchInput = document.getElementById('searchInput');
  const etages = document.querySelectorAll('section.etage');
  searchInput.addEventListener('input', () => {
    const query = searchInput.value.trim().toLowerCase();
    etages.forEach(etage => {
      const products = etage.querySelectorAll('.product-card');
      let visibleCount = 0;
      products.forEach(product => {
        const title = product.querySelector('h4').textContent.toLowerCase();
        const desc = product.querySelector('p').textContent.toLowerCase();
        if (title.includes(query) || desc.includes(query)) {
          product.style.display = '';
          visibleCount++;
        } else {
          product.style.display = 'none';
        }
      });
      etage.style.display = visibleCount > 0 ? '' : 'none';
    });
  });

  // Animation des étoiles décoratives
  function createStars() {
    const starsContainer = document.querySelector('.decoration-stars');
    for (let i = 0; i < 5; i++) {
      const star = document.createElement('div');
      star.className = 'star';
      starsContainer.appendChild(star);
    }
  }
  createStars();
});
</script>
<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="decoration-stars"></div>

<header>
  <div class="logo">
    <img src="lego.png" alt="GenRYM Logo" />
    <h1>GenRYM Restaurant</h1>
  </div>
  <div class="search-bar">
    <input id="searchInput" type="text" placeholder="Rechercher un plat..." />
  </div>
  <div class="icons">
    <a href="index.html">👤</a>
      <a href="credit.php" title="Crédit">💳</a>
    <a href="code.php" title="Produits">📦</a>
    <a href="shoping.php" title="Shopping">🛍️</a>
    <a href="pharmacie.php">💊</a>
     <a href="bibliotheque.php" title="Bibliothèque">📚</a>
             <a href="technologie.php">💻</a>
                   <a href="makeup.php">💄</a>

      <a href="ajouter.html">🛒</a>
  </div>
</header>
<h2>Nos plats par étage</h2>

<section class="etage">
  <h3>1er Étage - Entrées</h3>
  <div class="products-grid">
    <div class="product-card">
      <img src="images/salade fraiche.jpg" alt="Salade">
      <h4>Salade fraîche</h4>
      <p>Laitue, tomate, vinaigrette</p>
      <strong>80,00 MAD</strong>
      <button onclick="ajouterAuPanier('Salade fraîche', 80.00)">Ajouter au panier</button>
    </div>
    <div class="product-card">
      <img src="images/soupe.jpg" alt="Soupe">
      <h4>Soupe de légumes</h4>
      <p>Carottes, pommes de terre, poireaux</p>
      <strong>70,00 MAD</strong>
      <button onclick="ajouterAuPanier('Soupe de légumes', 70.00)">Ajouter au panier</button>
    </div>
    <div class="product-card">
      <img src="images/bruchetta.jpeg" alt="Bruschetta">
      <h4>Bruschetta</h4>
      <p>Pain grillé, tomate, basilic</p>
      <strong>65,00 MAD</strong>
      <button onclick="ajouterAuPanier('Bruschetta', 65.00)">Ajouter au panier</button>
    </div>
    <div class="product-card">
      <img src="images/assete de charcutre.webp" alt="Charcuterie">
      <h4>Assiette de charcuterie</h4>
      <p>Saucisson, jambon cru, pâté</p>
      <strong>85,00 MAD</strong>
      <button onclick="ajouterAuPanier('Assiette de charcuterie', 85.00)">Ajouter au panier</button>
    </div>
  </div>
</section>

<section class="etage">
  <h3>2ème Étage - Plats principaux</h3>
  <div class="products-grid">
    <div class="product-card">
      <img src="images/pizza.jpg"        alt="Pizza">
      <h4>Pizza Margherita</h4>
      <p>Tomate, mozzarella, basilic</p>
      <strong>50,00 MAD</strong>
      <button onclick="ajouterAuPanier('Pizza Margherita', 50.00)">Ajouter au panier</button>
    </div>
    <div class="product-card">
      <img src="images/burger.jpeg" alt="Burger">
      <h4>Burger maison</h4>
      <p>Steak, fromage, salade</p>
      <strong>60,00 MAD</strong>
      <button onclick="ajouterAuPanier('Burger maison', 60.00)">Ajouter au panier</button>
    </div>
    <div class="product-card">
      <img src="images/pates carbonora.jpg" alt="Pâtes">
      <h4>Pâtes carbonara</h4>
      <p>Crème, lardons, parmesan</p>
      <strong>65,00 MAD</strong>
      <button onclick="ajouterAuPanier('Pâtes carbonara', 65.00)">Ajouter au panier</button>
    </div>
    <div class="product-card">
      <img src="images/SteakFrites.jpg" alt="Steak">
      <h4>Steak frites</h4>
      <p>Entrecôte grillée, pommes frites</p>
      <strong>60,00 MAD</strong>
      <button onclick="ajouterAuPanier('Steak frites', 60.00)">Ajouter au panier</button>
    </div>
  </div>
</section>

<section class="etage">
  <h3>3ème Étage - Desserts</h3>
  <div class="products-grid">
    <div class="product-card">
      <img src="images/tiramisu.jpg" alt="Tiramisu">
      <h4>Tiramisu</h4>
      <p>Café, mascarpone, cacao</p>
      <strong>20,00 MAD</strong>
      <button onclick="ajouterAuPanier('Tiramisu', 20.00)">Ajouter au panier</button>
    </div>
    <div class="product-card">
      <img src="images/gateau.jpeg" alt="Gâteau">
      <h4>Gâteau au chocolat</h4>
      <p>Moelleux chocolat noir</p>
      <strong>65,00 MAD</strong>
      <button onclick="ajouterAuPanier('Gâteau au chocolat', 65.00)">Ajouter au panier</button>
    </div>
    <div class="product-card">
      <img src="images/crepes.webp" alt="Crêpe">
      <h4>Crêpe sucre</h4>
      <p>Beurre, sucre</p>
      <strong>45,00 MAD</strong>
      <button onclick="ajouterAuPanier('Crêpe sucre', 45.00)">Ajouter au panier</button>
    </div>
    <div class="product-card">
      <img src="images/salade fruits.jpg" alt="Salade de fruits">
      <h4>Salade de fruits</h4>
      <p>Fruits frais de saison</p>
      <strong>55,00 MAD</strong>
      <button onclick="ajouterAuPanier('Salade de fruits', 55.00)">Ajouter au panier</button>
    </div>
  </div>
</section>

<section class="etage">
  <h3>4ème Étage - Boissons</h3>
  <div class="products-grid">
    <div class="product-card">
      <img src="images/mrindaaaaa.jpg" alt="Coca-Cola">
      <h4>Mirinda</h4>
      <p>Canette 33cl</p>
      <strong>3,50 MAD</strong>
      <button onclick="ajouterAuPanier('Coca-Cola', 3.50)">Ajouter au panier</button>
    </div>
    <div class="product-card">
      <img src="images/orange.png" alt="Jus d'orange">
      <h4>Jus d'orange</h4>
      <p>Verre 25cl</p>
      <strong>25,00 MAD</strong>
      <button onclick="ajouterAuPanier('Jus d\'orange', 25.00)">Ajouter au panier</button>
    </div>
    <div class="product-card">
      <img src="images/the chaud.png" alt="Thé">
      <h4>Thé chaud</h4>
      <p>Thé vert ou noir</p>
      <strong>13,00 MAD</strong>
      <button onclick="ajouterAuPanier('Thé chaud', 13.00)">Ajouter au panier</button>
    </div>
    <div class="product-card">
      <img src="images/cafe.jpg" alt="Café">
      <h4>Café</h4>
      <p>Expresso</p>
      <strong>20,00 MAD</strong>
      <button onclick="ajouterAuPanier('Café', 20.00)">Ajouter au panier</button>
    </div>
  </div>
</section>
<script src="script.js"></script>

</body>
</html>