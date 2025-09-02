<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Technologie - GenRYM Market</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@300;400;600;700&display=swap">
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body { 
    font-family: 'Segoe UI', sans-serif; 
    background: linear-gradient(135deg, #8B4A9C 0%, #B8A6A6 25%, #D4B5A0 50%, #9B59B6 75%, #7D4A7D 100%);
    min-height: 100vh;
    padding: 20px;
    position: relative;
    overflow-x: hidden;
  }

  /* Décorations de fond animées */
  body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="tech" width="40" height="40" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1.5" fill="%23F5E6D3" opacity="0.3"/><path d="M15 20h10M20 15v10" stroke="%23E8D5C4" opacity="0.2" stroke-width="1"/><rect x="10" y="10" width="20" height="20" fill="none" stroke="%23D4B5A0" opacity="0.1" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23tech)"/></svg>');
    pointer-events: none;
    z-index: -1;
  }

  /* Cercles décoratifs flottants */
  body::after {
    content: '';
    position: fixed;
    top: -50px;
    right: -50px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(245, 230, 211, 0.2) 0%, transparent 70%);
    border-radius: 50%;
    animation: pulse 4s ease-in-out infinite alternate;
    z-index: -1;
  }

  @keyframes pulse {
    0% {
      transform: scale(1);
      opacity: 0.5;
    }
    100% {
      transform: scale(1.2);
      opacity: 0.8;
    }
  }

  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 40px;
    background: linear-gradient(135deg, rgba(245, 230, 211, 0.95) 0%, rgba(232, 213, 196, 0.95) 100%);
    backdrop-filter: blur(20px);
    border: 2px solid rgba(139, 74, 156, 0.3);
    box-shadow: 0 8px 32px rgba(139, 74, 156, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.3);
    border-radius: 30px;
    margin-bottom: 30px;
    animation: slideInDown 0.8s ease-out;
    position: relative;
    overflow: hidden;
  }

  /* Effet de brillance sur le header */
  header::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(139, 74, 156, 0.3), transparent);
    animation: shimmer 4s infinite;
  }

  /* Bordure décorative animée */
  header::after {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #8B4A9C, #D4B5A0, #9B59B6, #F5E6D3);
    border-radius: 32px;
    z-index: -1;
    opacity: 0.6;
    animation: borderRotate 3s linear infinite;
  }

  @keyframes borderRotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
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

  .logo::before {
    content: '✨';
    position: absolute;
    left: -30px;
    font-size: 24px;
    animation: sparkle 2s ease-in-out infinite;
  }

  .logo::after {
    content: '✨';
    position: absolute;
    right: -30px;
    font-size: 24px;
    animation: sparkle 2s ease-in-out infinite 1s;
  }

  @keyframes sparkle {
    0%, 100% {
      opacity: 0;
      transform: scale(0.5) rotate(0deg);
    }
    50% {
      opacity: 1;
      transform: scale(1) rotate(180deg);
    }
  }

  .logo img {
    height: 50px;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(139, 74, 156, 0.3);
    transition: transform 0.3s ease;
    border: 2px solid rgba(139, 74, 156, 0.2);
  }

  .logo img:hover {
    transform: scale(1.15) rotate(8deg);
    box-shadow: 0 10px 30px rgba(139, 74, 156, 0.5);
  }

  .logo h1 {
    font-size: 28px;
    font-weight: 700;
    background: linear-gradient(45deg, #8B4A9C, #9B59B6, #7D4A7D);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative;
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
    width: 55px;
    height: 55px;
    background: linear-gradient(45deg, #8B4A9C, #9B59B6);
    border-radius: 50%;
    text-decoration: none;
    color: #F5E6D3;
    font-size: 22px;
    transition: all 0.4s ease;
    box-shadow: 0 6px 20px rgba(139, 74, 156, 0.4);
    position: relative;
    overflow: hidden;
    border: 2px solid rgba(245, 230, 211, 0.3);
  }

  .icons a::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(245, 230, 211, 0.4), transparent);
    transition: left 0.5s ease;
  }

  .icons a:hover::before {
    left: 100%;
  }

  .icons a:hover {
    transform: translateY(-5px) scale(1.15);
    box-shadow: 0 12px 35px rgba(139, 74, 156, 0.6);
    background: linear-gradient(45deg, #9B59B6, #8B4A9C);
  }

  h1 { 
    color: #F5E6D3;
    text-align: center; 
    font-size: 3.5rem;
    font-weight: 700;
    text-shadow: 0 4px 15px rgba(139, 74, 156, 0.5);
    margin-bottom: 40px;
    position: relative;
    animation: fadeInUp 1s ease-out 0.3s both;
  }

  /* Décorations autour du titre */
  h1::before {
    content: '🌟';
    position: absolute;
    left: -60px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    animation: floatLeft 3s ease-in-out infinite;
  }

  h1::after {
    content: '🌟';
    position: absolute;
    right: -60px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    animation: floatRight 3s ease-in-out infinite;
  }

  @keyframes floatLeft {
    0%, 100% { transform: translateY(-50%) translateX(0px) rotate(0deg); }
    50% { transform: translateY(-50%) translateX(-10px) rotate(180deg); }
  }

  @keyframes floatRight {
    0%, 100% { transform: translateY(-50%) translateX(0px) rotate(0deg); }
    50% { transform: translateY(-50%) translateX(10px) rotate(-180deg); }
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

  .search-bar { 
    display: flex; 
    justify-content: center; 
    gap: 15px; 
    margin: 30px 0;
    animation: fadeIn 1s ease-out 0.5s both;
    position: relative;
  }

  .search-bar::before {
    content: '🔍';
    position: absolute;
    left: calc(20% - 40px);
    top: 50%;
    transform: translateY(-50%);
    font-size: 24px;
    z-index: 1;
    animation: searchPulse 2s ease-in-out infinite;
  }

  @keyframes searchPulse {
    0%, 100% { opacity: 0.6; transform: translateY(-50%) scale(1); }
    50% { opacity: 1; transform: translateY(-50%) scale(1.1); }
  }

  .search-bar input { 
    width: 60%; 
    max-width: 500px;
    padding: 18px 25px; 
    border-radius: 30px; 
    border: 3px solid rgba(139, 74, 156, 0.3);
    font-size: 16px;
    background: linear-gradient(135deg, rgba(245, 230, 211, 0.9) 0%, rgba(232, 213, 196, 0.9) 100%);
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 25px rgba(139, 74, 156, 0.2);
    outline: none;
    transition: all 0.4s ease;
    color: #7D4A7D;
  }

  .search-bar input:focus {
    transform: scale(1.05);
    box-shadow: 0 0 30px rgba(139, 74, 156, 0.4), 0 8px 25px rgba(139, 74, 156, 0.2);
    border-color: #9B59B6;
  }

  .search-bar input::placeholder {
    color: rgba(139, 74, 156, 0.7);
  }

  .search-bar button { 
    padding: 18px 30px; 
    border-radius: 30px; 
    border: none; 
    cursor: pointer;
    background: linear-gradient(45deg, #8B4A9C, #9B59B6);
    color: #F5E6D3;
    font-weight: 600;
    box-shadow: 0 8px 25px rgba(139, 74, 156, 0.4);
    transition: all 0.4s ease;
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
    background: linear-gradient(90deg, transparent, rgba(245, 230, 211, 0.3), transparent);
    transition: left 0.5s ease;
  }

  .search-bar button:hover::before {
    left: 100%;
  }

  .search-bar button:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(139, 74, 156, 0.6);
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
    margin-bottom: 60px;
    animation: slideInUp 0.8s ease-out;
    position: relative;
  }

  /* Décoration d'étage */
  .etage::before {
    content: '✨ ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ ✨';
    position: absolute;
    top: -30px;
    left: 50%;
    transform: translateX(-50%);
    color: rgba(245, 230, 211, 0.8);
    font-size: 14px;
    white-space: nowrap;
    animation: glow 3s ease-in-out infinite alternate;
  }

  @keyframes glow {
    from { text-shadow: 0 0 5px rgba(245, 230, 211, 0.5); }
    to { text-shadow: 0 0 20px rgba(245, 230, 211, 0.8), 0 0 30px rgba(139, 74, 156, 0.5); }
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
    background: linear-gradient(135deg, rgba(245, 230, 211, 0.95) 0%, rgba(232, 213, 196, 0.95) 100%);
    backdrop-filter: blur(20px);
    padding: 30px; 
    border-radius: 25px; 
    width: 280px; 
    text-align: center; 
    box-shadow: 0 15px 40px rgba(139, 74, 156, 0.2);
    border: 2px solid rgba(139, 74, 156, 0.2);
    transition: all 0.5s ease;
    position: relative;
    overflow: hidden;
  }

  /* Effet de lueur sur les produits */
  .produit::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(139, 74, 156, 0.1) 0%, transparent 70%);
    opacity: 0;
    transition: opacity 0.4s ease;
    pointer-events: none;
  }

  .produit:hover::before {
    opacity: 1;
  }

  /* Bordure animée au hover */
  .produit::after {
    content: '';
    position: absolute;
    top: -3px;
    left: -3px;
    right: -3px;
    bottom: -3px;
    background: linear-gradient(45deg, #8B4A9C, #D4B5A0, #9B59B6, #F5E6D3);
    border-radius: 28px;
    z-index: -1;
    opacity: 0;
    transition: opacity 0.4s ease;
  }

  .produit:hover::after {
    opacity: 0.7;
    animation: borderPulse 1s ease-in-out infinite alternate;
  }

  @keyframes borderPulse {
    0% { transform: scale(1); }
    100% { transform: scale(1.02); }
  }

  .produit:hover {
    transform: translateY(-15px) scale(1.05);
    box-shadow: 0 25px 60px rgba(139, 74, 156, 0.3);
  }

  .produit img { 
    width: 150px; 
    height: 150px; 
    object-fit: contain;
    border-radius: 20px;
    margin-bottom: 20px;
    transition: all 0.4s ease;
    box-shadow: 0 8px 25px rgba(139, 74, 156, 0.2);
    border: 2px solid rgba(139, 74, 156, 0.1);
  }

  .produit:hover img {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 15px 40px rgba(139, 74, 156, 0.4);
  }

  .produit h3 {
    font-size: 1.3rem;
    font-weight: 700;
    background: linear-gradient(45deg, #8B4A9C, #9B59B6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 15px;
    position: relative;
  }

  .produit h3::after {
    content: '💜';
    position: absolute;
    right: -25px;
    top: 0;
    font-size: 16px;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .produit:hover h3::after {
    opacity: 1;
    animation: heartBeat 1s ease-in-out infinite;
  }

  @keyframes heartBeat {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.2); }
  }

  .produit p {
    font-size: 1.4rem;
    font-weight: 700;
    background: linear-gradient(45deg, #D4B5A0, #B8A6A6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 25px;
  }

  button { 
    background: linear-gradient(45deg, #8B4A9C, #9B59B6);
    color: #F5E6D3; 
    border: none; 
    padding: 15px 30px; 
    cursor: pointer; 
    border-radius: 30px;
    font-size: 1.1rem;
    font-weight: 600;
    transition: all 0.4s ease;
    box-shadow: 0 8px 25px rgba(139, 74, 156, 0.4);
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
    background: linear-gradient(90deg, transparent, rgba(245, 230, 211, 0.3), transparent);
    transition: left 0.5s ease;
  }

  button:hover::before {
    left: 100%;
  }

  button:hover { 
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(139, 74, 156, 0.6);
    background: linear-gradient(45deg, #9B59B6, #8B4A9C);
  }

  .no-results { 
    text-align: center; 
    color: #F5E6D3;
    font-size: 1.3rem;
    margin-top: 20px;
    padding: 25px;
    background: linear-gradient(135deg, rgba(139, 74, 156, 0.2) 0%, rgba(155, 89, 182, 0.2) 100%);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    border: 2px solid rgba(245, 230, 211, 0.3);
    box-shadow: 0 10px 30px rgba(139, 74, 156, 0.2);
  }

  /* Particules flottantes technologiques */
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
    color: rgba(245, 230, 211, 0.4);
    font-size: 28px;
    animation: floatTech 10s infinite linear;
  }

  .particle:nth-child(1) { left: 5%; animation-delay: 0s; }
  .particle:nth-child(2) { left: 15%; animation-delay: 1.2s; }
  .particle:nth-child(3) { left: 25%; animation-delay: 2.4s; }
  .particle:nth-child(4) { left: 35%; animation-delay: 3.6s; }
  .particle:nth-child(5) { left: 45%; animation-delay: 4.8s; }
  .particle:nth-child(6) { left: 55%; animation-delay: 6s; }
  .particle:nth-child(7) { left: 65%; animation-delay: 7.2s; }
  .particle:nth-child(8) { left: 75%; animation-delay: 8.4s; }
  .particle:nth-child(9) { left: 85%; animation-delay: 9.6s; }
  .particle:nth-child(10) { left: 95%; animation-delay: 0.6s; }

  @keyframes floatTech {
    0% {
      transform: translateY(100vh) rotate(0deg) scale(0.5);
      opacity: 0;
    }
    10% {
      opacity: 1;
      transform: translateY(90vh) rotate(36deg) scale(1);
    }
    90% {
      opacity: 1;
      transform: translateY(-10vh) rotate(324deg) scale(1);
    }
    100% {
      transform: translateY(-100px) rotate(360deg) scale(0.5);
      opacity: 0;
    }
  }

  /* Étoiles décoratives supplémentaires */
  .decoration-stars {
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
    color: rgba(245, 230, 211, 0.6);
    font-size: 16px;
    animation: twinkle 3s ease-in-out infinite;
  }

  .star:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
  .star:nth-child(2) { top: 20%; left: 80%; animation-delay: 0.5s; }
  .star:nth-child(3) { top: 60%; left: 15%; animation-delay: 1s; }
  .star:nth-child(4) { top: 80%; left: 85%; animation-delay: 1.5s; }
  .star:nth-child(5) { top: 40%; left: 90%; animation-delay: 2s; }

  @keyframes twinkle {
    0%, 100% {
      opacity: 0.3;
      transform: scale(0.8);
    }
    50% {
      opacity: 1;
      transform: scale(1.2);
    }
  }

  /* Animations d'apparition échelonnée */
  .produit:nth-child(1) { animation: fadeInScale 0.8s ease-out 0.1s both; }
  .produit:nth-child(2) { animation: fadeInScale 0.8s ease-out 0.3s both; }
  .produit:nth-child(3) { animation: fadeInScale 0.8s ease-out 0.5s both; }
  .produit:nth-child(4) { animation: fadeInScale 0.8s ease-out 0.7s both; }

  @keyframes fadeInScale {
    from {
      opacity: 0;
      transform: scale(0.8) translateY(30px) rotate(-5deg);
    }
    to {
      opacity: 1;
      transform: scale(1) translateY(0) rotate(0deg);
    }
  }

  @media (max-width:800px){
    .etage { 
      flex-wrap: wrap;
      gap: 25px;
    }
    .search-bar input { 
      width: 100%;
    }
    .produit {
      width: 220px;
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
      font-size: 2.8rem;
    }
    h1::before,
    h1::after {
      display: none;
    }
  }
</style>

<script>
  // Initialisation solde
  if (localStorage.getItem("solde") === null) {
    localStorage.setItem("solde", 50.00); // solde de départ
  }

  // Fonction pour ajouter au panier
  function ajouterAuPanier(nom, prix) {
    let panier = JSON.parse(localStorage.getItem("panier") || "[]");
    let solde = parseFloat(localStorage.getItem("solde"));

    if (solde >= prix) {
      panier.push({ nom: nom, prix: prix });
      solde -= prix;
      localStorage.setItem("panier", JSON.stringify(panier));
      localStorage.setItem("solde", solde.toFixed(2));
      alert(nom + " ajouté au panier ! Solde restant : " + solde.toFixed(2) + " MAD");
      document.getElementById("solde").textContent = solde.toFixed(2);
    } else {
      alert("Solde insuffisant !");
    }
  }

  // Fonction de recherche (filtrage)
  function filtrerProduits(query) {
    const produits = document.querySelectorAll('.produit');
    const q = (query || '').toLowerCase().trim();
    let visibleCount = 0;

    produits.forEach(p => {
      const nom = (p.querySelector('h3')?.textContent || '').toLowerCase();
      const prix = (p.querySelector('p')?.textContent || '').toLowerCase();
      const alt = (p.querySelector('img')?.alt || '').toLowerCase();
      // On cherche dans le nom, le texte du paragraphe (prix) et l'attribut alt
      if (q === '' || nom.includes(q) || prix.includes(q) || alt.includes(q)) {
        p.style.display = '';
        visibleCount++;
      } else {
        p.style.display = 'none';
      }
    });

    const noRes = document.getElementById('no-results');
    if (visibleCount === 0) {
      noRes.style.display = 'block';
    } else {
      noRes.style.display = 'none';
    }
  }

  // Ajout d'un petit debounce pour ne pas filtrer trop souvent
  function debounce(fn, wait){
    let t;
    return function(...args){
      clearTimeout(t);
      t = setTimeout(()=>fn.apply(this,args), wait);
    }
  }

  document.addEventListener('DOMContentLoaded', function(){
    // Initialiser le solde au chargement

    const inputSearch = document.getElementById('search');
    const btnClear = document.getElementById('clear-search');

    // Fonction de recherche en temps réel
    if (inputSearch) {
      inputSearch.addEventListener('input', function(e) {
        filtrerProduits(e.target.value);
      });

      // Recherche à l'appui sur Entrée
      inputSearch.addEventListener('keydown', function(e){
        if (e.key === 'Enter') {
          e.preventDefault();
          filtrerProduits(this.value);
        }
      });
    }

    // Bouton effacer
    if (btnClear) {
      btnClear.addEventListener('click', function(){
        inputSearch.value = '';
        filtrerProduits('');
        inputSearch.focus();
      });
    }

    // Filtrer au chargement si un paramètre ?q= existe dans l'URL
    const params = new URLSearchParams(window.location.search);
    if (params.has('q')) {
      const q = params.get('q');
      inputSearch.value = q;
      filtrerProduits(q);
    }

    // Test initial pour s'assurer que tous les produits sont visibles
    filtrerProduits('');
  });
</script>
<link rel="stylesheet" href="style.css">

</head>

<body>
  <!-- Étoiles décoratives -->
  <div class="decoration-stars">
    <div class="star">⭐</div>
    <div class="star">✨</div>
    <div class="star">🌟</div>
    <div class="star">💫</div>
    <div class="star">⭐</div>
  </div>

  <!-- Particules flottantes technologiques -->
  <div class="floating-particles">
    <div class="particle">💻</div>
    <div class="particle">🖥️</div>
    <div class="particle">📱</div>
    <div class="particle">⌨️</div>
    <div class="particle">🖱️</div>
    <div class="particle">💻</div>
    <div class="particle">🔌</div>
    <div class="particle">📡</div>
    <div class="particle">💾</div>
    <div class="particle">🎧</div>
  </div>

  <header>
    <div class="logo">
      <img src="lego.png" alt="GenRYM Logo" />
      <h1>GenRYM Market</h1>
    </div>

    <div class="icons">
      <a href="index.html" title="Profil">👤</a>
      <a href="credit.php" title="Crédit">💳</a>
      <a href="code.php" title="Produits">📦</a>
      <a href="shoping.php" title="Shopping">🛍️</a>
      <a href="restaurant.php" title="Restaurant">🍽️</a>
      <a href="bibliotheque.php" title="Bibliothèque">📚</a>
      <a href="pharmacie.php">💊</a>
      <a href="makeup.php">💄</a>
      <a href="ajouter.html" title="Panier">🛒</a>
      <div style="color: #8B4A9C; font-weight: bold; font-size: 16px; margin-left: 15px;">


    </div>
  </header>

<h1>💻 Produits Technologiques</h1>

<!-- Barre de recherche -->
<div class="search-bar">
  <input id="search" type="search" placeholder="Rechercher un produit technologique" aria-label="Recherche des produits" />
  <button id="clear-search">Effacer</button>
</div>

<!-- Message "aucun résultat" -->
<p id="no-results" class="no-results" style="display:none;">Aucun produit trouvé pour cette recherche.</p>

<!-- Étage 1 - Étudiants & Général -->
<div class="etage">
  <div class="produit">
    <img src="images/pc gamer.jpg" alt="PC Gamer">
    <h3>PC Gamer</h3>
    <p>8795 MAD</p>
    <button onclick="ajouterAuPanier('PC Gamer', 8795)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Casque Audio.webp" alt="Casque Audio">
    <h3>Casque Audio</h3>
    <p>300 MAD</p>
    <button onclick="ajouterAuPanier('Casque Audio', 300)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Souris Gaming.jpg" alt="Souris Gaming">
    <h3>Souris Gaming</h3>
    <p>250 MAD</p>
    <button onclick="ajouterAuPanier('Souris Gaming', 250)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Clavier Mécanique.png" alt="Clavier Mécanique">
    <h3>Clavier Mécanique</h3>
    <p>750 MAD</p>
    <button onclick="ajouterAuPanier('Clavier Mécanique', 750)">Acheter</button>
  </div>
</div>

<!-- Étage 2 - Maison -->
<div class="etage">
  <div class="produit">
    <img src="images/Machine à Laver.jpg" alt="Machine à Laver">
    <h3>Machine à Laver</h3>
    <p>7650 MAD</p>
    <button onclick="ajouterAuPanier('Machine à Laver', 7650)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Réfrigérateur.webp" alt="Réfrigérateur">
    <h3>Réfrigérateur</h3>
    <p>6780 MAD</p>
    <button onclick="ajouterAuPanier('Réfrigérateur', 6780)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Lave-vaisselle.jpg" alt="Lave-vaisselle">
    <h3>Lave-vaisselle</h3>
    <p>5690 MAD</p>
    <button onclick="ajouterAuPanier('Lave-vaisselle', 5690)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/HearBots.jpg" alt="HearBots">
    <h3>HearBots</h3>
    <p>350 MAD</p>
    <button onclick="ajouterAuPanier('HearBots', 350)">Acheter</button>
  </div>
</div>

<!-- Étage 3 - Cuisine -->
<div class="etage">
  <div class="produit">
    <img src="images/Casserole.jpg" alt="Casserole">
    <h3>Casserole</h3>
    <p>700 MAD</p>
    <button onclick="ajouterAuPanier('Casserole', 700)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Poêle.jpg" alt="Poêle">
    <h3>Poêle</h3>
    <p>590 MAD</p>
    <button onclick="ajouterAuPanier('Poêle', 590)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Mixeur.jpg" alt="Mixeur">
    <h3>Mixeur</h3>
    <p>470 MAD</p>
    <button onclick="ajouterAuPanier('Mixeur', 470)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Grille-Pain.jpg" alt="Grille-Pain">
    <h3>Grille-Pain</h3>
    <p>730 MAD</p>
    <button onclick="ajouterAuPanier('Grille-Pain', 730)">Acheter</button>
  </div>
</div>

<!-- Étage 4 - Vie Générale -->
<div class="etage">
  <div class="produit">
    <img src="images/Aspirateur Robot.webp" alt="Aspirateur Robot">
    <h3>Aspirateur Robot</h3>
    <p>3700 MAD</p>
    <button onclick="ajouterAuPanier('Aspirateur Robot', 3700)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Chauffage Électrique.jpg" alt="Chauffage Électrique">
    <h3>Chauffage Électrique</h3>
    <p>4670 MAD</p>
    <button onclick="ajouterAuPanier('Chauffage Électrique', 4670)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Ventilateur.jpg" alt="Ventilateur">
    <h3>Ventilateur</h3>
    <p>960 MAD</p>
    <button onclick="ajouterAuPanier('Ventilateur', 960)">Acheter</button>
  </div>
  <div class="produit">
    <img src="images/Lampe LED.webp" alt="Lampe LED">
    <h3>Lampe LED</h3>
    <p>25 MAD</p>
    <button onclick="ajouterAuPanier('Lampe LED', 25)">Acheter</button>
  </div>
</div>
<script src="script.js"></script>

</body>
</html>
