<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pharmacie - GenRYM Market</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@300;400;600;700&display=swap">
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body { 
    font-family: 'Segoe UI', sans-serif; 
    background: linear-gradient(135deg, #00c851 0%, #007e33 50%, #004d20 100%);
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
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="medical" width="50" height="50" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="2" fill="%23ffffff" opacity="0.1"/><path d="M20 25h10M25 20v10" stroke="%23ffffff" opacity="0.1" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23medical)"/></svg>');
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
    border-radius: 25px;
    margin-bottom: 30px;
    animation: slideInDown 0.8s ease-out;
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
    background: linear-gradient(90deg, transparent, rgba(0,200,81,0.2), transparent);
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
    background: linear-gradient(45deg, #00c851, #007e33);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
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
    background: linear-gradient(45deg, #00c851, #007e33);
    border-radius: 50%;
    text-decoration: none;
    color: white;
    font-size: 20px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,200,81,0.3);
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
    box-shadow: 0 8px 25px rgba(0,200,81,0.4);
  }

  #solde-display {
    background: rgba(255, 255, 255, 0.9);
    padding: 8px 15px;
    border-radius: 20px;
    font-weight: 600;
    color: #007e33;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }

  h1 { 
    color: white;
    text-align: center; 
    font-size: 3rem;
    font-weight: 700;
    text-shadow: 0 2px 10px rgba(0,0,0,0.3);
    margin-bottom: 30px;
    position: relative;
    animation: fadeInUp 1s ease-out 0.3s both;
  }

  h1::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 150px;
    height: 4px;
    background: linear-gradient(45deg, #ffffff, #ccffdd);
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
    to { width: 150px; }
  }

  .search-bar { 
    display: flex; 
    justify-content: center; 
    gap: 15px; 
    margin: 30px 0;
    animation: fadeIn 1s ease-out 0.5s both;
  }

  .search-bar input { 
    width: 60%; 
    max-width: 500px;
    padding: 15px 20px; 
    border-radius: 25px; 
    border: none;
    font-size: 16px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    outline: none;
    transition: all 0.3s ease;
  }

  .search-bar input:focus {
    transform: scale(1.02);
    box-shadow: 0 0 20px rgba(0,200,81,0.3), 0 5px 15px rgba(0,0,0,0.1);
  }

  .search-bar button { 
    padding: 15px 25px; 
    border-radius: 25px; 
    border: none; 
    cursor: pointer;
    background: linear-gradient(45deg, #00c851, #007e33);
    color: white;
    font-weight: 600;
    box-shadow: 0 5px 15px rgba(0,200,81,0.3);
    transition: all 0.3s ease;
  }

  .search-bar button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,200,81,0.4);
  }

  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }

  .etage { 
    display: flex; 
    flex-wrap: nowrap; 
    justify-content: center; 
    gap: 30px; 
    margin-bottom: 50px;
    animation: slideInUp 0.8s ease-out;
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

  .produit { 
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    padding: 25px; 
    border-radius: 20px; 
    width: 250px; 
    text-align: center; 
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border: 1px solid rgba(255, 255, 255, 0.3);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
  }

  .produit::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(0,200,81,0.1) 0%, transparent 70%);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
  }

  .produit:hover::before {
    opacity: 1;
  }

  .produit:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0,200,81,0.2);
  }

  .produit img { 
    width: 150px; 
    height: 150px; 
    object-fit: contain;
    border-radius: 15px;
    margin-bottom: 15px;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }

  .produit:hover img {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  }

  .produit h3 {
    font-size: 1.2rem;
    font-weight: 600;
    background: linear-gradient(45deg, #00c851, #007e33);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 10px;
  }

  .produit p {
    font-size: 1.3rem;
    font-weight: 700;
    background: linear-gradient(45deg, #ff6b6b, #ee5a24);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 20px;
  }

  button { 
    background: linear-gradient(45deg, #00c851, #007e33);
    color: white; 
    border: none; 
    padding: 12px 25px; 
    cursor: pointer; 
    border-radius: 25px;
    font-size: 1rem;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,200,81,0.3);
    position: relative;
    overflow: hidden;
  }

  button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
  }

  button:hover::before {
    left: 100%;
  }

  button:hover { 
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,200,81,0.4);
    background: linear-gradient(45deg, #00b84a, #006b2b);
  }

  .no-results { 
    text-align: center; 
    color: white;
    font-size: 1.2rem;
    margin-top: 20px;
    padding: 20px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    border: 1px solid rgba(255, 255, 255, 0.2);
  }

  /* Particules flottantes médicales */
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
    color: rgba(255, 255, 255, 0.3);
    font-size: 20px;
    animation: floatMedical 8s infinite linear;
  }

  .particle:nth-child(1) { left: 10%; animation-delay: 0s; }
  .particle:nth-child(2) { left: 20%; animation-delay: 1s; }
  .particle:nth-child(3) { left: 30%; animation-delay: 2s; }
  .particle:nth-child(4) { left: 40%; animation-delay: 3s; }
  .particle:nth-child(5) { left: 50%; animation-delay: 4s; }
  .particle:nth-child(6) { left: 60%; animation-delay: 5s; }
  .particle:nth-child(7) { left: 70%; animation-delay: 6s; }
  .particle:nth-child(8) { left: 80%; animation-delay: 7s; }
  .particle:nth-child(9) { left: 90%; animation-delay: 8s; }

  @keyframes floatMedical {
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

  /* Animations d'apparition échelonnée */
  .produit:nth-child(1) { animation: fadeInScale 0.6s ease-out 0.1s both; }
  .produit:nth-child(2) { animation: fadeInScale 0.6s ease-out 0.2s both; }
  .produit:nth-child(3) { animation: fadeInScale 0.6s ease-out 0.3s both; }
  .produit:nth-child(4) { animation: fadeInScale 0.6s ease-out 0.4s both; }

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

  @media (max-width:800px){
    .etage { 
      flex-wrap: wrap;
      gap: 20px;
    }
    .search-bar input { 
      width: 100%;
    }
    .produit {
      width: 200px;
    }
    header {
      padding: 15px 20px;
      flex-direction: column;
      gap: 15px;
    }
    .icons {
      gap: 15px;
    }
    h1 {
      font-size: 2.5rem;
    }
  }
</style>
</head>

<body>
  <!-- Particules flottantes médicales -->
  <div class="floating-particles">
    <div class="particle">💊</div>
    <div class="particle">🩺</div>
    <div class="particle">💉</div>
    <div class="particle">🧬</div>
    <div class="particle">⚕</div>
    <div class="particle">💊</div>
    <div class="particle">🩹</div>
    <div class="particle">🔬</div>
    <div class="particle">💊</div>
  </div>

  <header>
    <div class="logo">
      <img src="lego.png" alt="GenRYM Logo" />
      <h1>GenRYM Pharmacie</h1>
    </div>

    <div class="icons">
      <a href="login.php" title="Profil">👤</a>
      <a href="credit.php" title="Crédit">💳</a>
      <a href="code.php" title="Produits">📦</a>
      <a href="shoping.php" title="Shopping">🛍️</a>
      <a href="restaurant.php" title="Restaurant">🍽</a>
      <a href="bibliotheque.php" title="Bibliothèque">📚</a>
      <a href="technologie.php">💻</a>
            <a href="makeup.php">💄</a>

      <a href="ajouter.html" title="Panier">🛒</a>
    </div>
  </header>

<h1>💊 Produits Pharmaceutiques</h1>

<!-- Barre de recherche -->
<div class="search-bar">
  <input id="search" type="search" placeholder="Rechercher un médicament" aria-label="Recherche des produits" />
  <button id="clear-search">Effacer</button>
</div>

<!-- Message "aucun résultat" -->
<p id="no-results" class="no-results" style="display:none;">Aucun produit trouvé pour cette recherche.</p>

<!-- Étage 1 -->
<div class="etage">
  <div class="produit">
    <img src="images/doliprane.jpeg" alt="Doliprane">
    <h3>Doliprane 500mg</h3>
    <p>20,00 MAD</p>
    <button onclick="ajouterAuPanier('Doliprane 500mg', 20.00)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Vitamine c.webp" alt="Vitamine C">
    <h3>Vitamine C</h3>
    <p>30,00 MAD</p>
    <button onclick="ajouterAuPanier('Vitamine C', 30.00)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/sirop.png" alt="Sirop Toux">
    <h3>Sirop contre la toux</h3>
    <p>40,00 MAD</p>
    <button onclick="ajouterAuPanier('Sirop contre la toux', 40.00)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/masque.webp" alt="Masque Chirurgical">
    <h3>Masque Chirurgical</h3>
    <p>20,00 MAD</p>
    <button onclick="ajouterAuPanier('Masque Chirurgical', 20.00)">Acheter</button>
  </div>
</div>

<!-- Étage 2 -->
<div class="etage">
  <div class="produit">
    <img src="images/thermometre.jpg" alt="Thermomètre">
    <h3>Thermomètre Digital</h3>
    <p>50,00 MAD</p>
    <button onclick="ajouterAuPanier('Thermomètre Digital', 50.00)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/gants.jpg" alt="Gants Médicaux">
    <h3>Gants Médicaux</h3>
    <p>30,00 MAD</p>
    <button onclick="ajouterAuPanier('Gants Médicaux', 30.00)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/betadine.jpg" alt="Bétadine">
    <h3>Bétadine</h3>
    <p>20,00 MAD</p>
    <button onclick="ajouterAuPanier('Bétadine', 20.00)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/savon.jpg" alt="Savon antiseptique">
    <h3>Savon Antiseptique</h3>
    <p>35,00 MAD</p>
    <button onclick="ajouterAuPanier('Savon Antiseptique', 35.00)">Acheter</button>
  </div>
</div>

<!-- Étage 3 -->
<div class="etage">
  <div class="produit">
    <img src="images/seringue.webp" alt="Seringue">
    <h3>Seringue 5ml</h3>
    <p>12,00 MAD</p>
    <button onclick="ajouterAuPanier('Seringue 5ml', 12.00)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/pansement.jpg" alt="Pansement">
    <h3>Pansement</h3>
    <p>40,00 MAD</p>
    <button onclick="ajouterAuPanier('Pansement',40.00 )">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/alcool.jpg" alt="Alcool médical">
    <h3>Alcool médical</h3>
    <p>25,00 MAD</p>
    <button onclick="ajouterAuPanier('Alcool médical', 25.00)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/gel.png" alt="Gel hydroalcoolique">
    <h3>Gel Hydroalcoolique</h3>
    <p> 50,00 MAD</p>
    <button onclick="ajouterAuPanier('Gel Hydroalcoolique',50.00 )">Acheter</button>
  </div>
</div>

<!-- Étage 4 -->
<div class="etage">
  <div class="produit">
    <img src="images/pilules.webp" alt="Pilules multivitaminées">
    <h3>Pilules Multivitaminées</h3>
    <p>150,00 MAD</p>
    <button onclick="ajouterAuPanier('Pilules Multivitaminées', 150.00)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/inhalateur.webp" alt="Inhalateur">
    <h3>Inhalateur</h3>
    <p>70,00 MAD</p>
    <button onclick="ajouterAuPanier('Inhalateur',70.00 )">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/speray.webp" alt="Spray nasal">
    <h3>Spray Nasal</h3>
    <p>60,00 MAD</p>
    <button onclick="ajouterAuPanier('Spray Nasal', 60.00)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/crime.webp" alt="Crème antiseptique">
    <h3>Crème Antiseptique</h3>
    <p> 65,00 MAD</p>
    <button onclick="ajouterAuPanier('Crème Antiseptique', 65.00)">Acheter</button>
  </div>
</div>

<script>
  // Variables globales pour stocker les données en mémoire
  let solde = 50.00;
  let panier = [];

  // Fonction pour ajouter au panier
  function ajouterAuPanier(nom, prix) {
    if (solde >= prix) {
      panier.push({ nom: nom, prix: prix });
      solde -= prix;
      alert(nom + " ajouté au panier ! Solde restant : " + solde.toFixed(2) + " MAD");
      document.getElementById("solde").textContent = solde.toFixed(2);
    } else {
      alert("Solde insuffisant !");
    }
  }

  // Fonction de recherche (filtrage) - CORRIGÉE
  function filtrerProduits(query) {
    const produits = document.querySelectorAll('.produit');
    const q = (query || '').toLowerCase().trim();
    let visibleCount = 0;

    produits.forEach(produit => {
      const nom = (produit.querySelector('h3')?.textContent || '').toLowerCase();
      const alt = (produit.querySelector('img')?.alt || '').toLowerCase();
      
      // On cherche dans le nom du produit et l'attribut alt de l'image
      if (q === '' || nom.includes(q) || alt.includes(q)) {
        produit.style.display = '';
        produit.parentElement.style.display = ''; // Afficher aussi l'étage parent
        visibleCount++;
      } else {
        produit.style.display = 'none';
      }
    });

    // Gestion des étages vides
    document.querySelectorAll('.etage').forEach(etage => {
      const produitsVisibles = etage.querySelectorAll('.produit:not([style*="display: none"])');
      if (produitsVisibles.length === 0) {
        etage.style.display = 'none';
      } else {
        etage.style.display = 'flex';
      }
    });

    // Affichage du message "aucun résultat"
    const noRes = document.getElementById('no-results');
    if (visibleCount === 0) {
      noRes.style.display = 'block';
    } else {
      noRes.style.display = 'none';
    }
  }

  // Fonction debounce pour optimiser les performances
  function debounce(fn, wait) {
    let timeout;
    return function(...args) {
      clearTimeout(timeout);
      timeout = setTimeout(() => fn.apply(this, args), wait);
    }
  }

  // Initialisation au chargement de la page
  document.addEventListener('DOMContentLoaded', function() {
    // Affichage du solde initial
    document.getElementById('solde').textContent = solde.toFixed(2);

    // Configuration de la barre de recherche
    const inputSearch = document.getElementById('search');
    const btnClear = document.getElementById('clear-search');

    // Recherche avec debounce pour optimiser les performances
    const debouncedFilter = debounce((e) => filtrerProduits(e.target.value), 150);
    inputSearch.addEventListener('input', debouncedFilter);

    // Recherche instantanée à l'appui sur Entrée
    inputSearch.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        filtrerProduits(this.value);
      }
    });

    // Bouton pour effacer la recherche
    btnClear.addEventListener('click', function() {
      inputSearch.value = '';
      filtrerProduits('');
      inputSearch.focus();
    });

    // Support des paramètres URL pour la recherche
    const params = new URLSearchParams(window.location.search);
    if (params.has('q')) {
      const query = params.get('q');
      inputSearch.value = query;
      filtrerProduits(query);
    }
  });
</script>

</body>
</html>
