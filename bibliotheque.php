<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GenRYM Bibliothèque</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;600;700&display=swap">

<style>
* {
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    margin: 0;
    padding: 0;
    min-height: 100vh;
    position: relative;
    overflow-x: hidden;
}

/* Animated background with floating books */
body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle at 20% 80%, rgba(255, 77, 136, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(216, 27, 96, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 40% 40%, rgba(255, 230, 240, 0.2) 0%, transparent 50%);
    animation: float 18s ease-in-out infinite;
    z-index: -1;
}

/* Floating book icons */
body::after {
    content: '📚 📖 📝 ✍️ 📜 📙 📘 📗';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    font-size: 30px;
    opacity: 0.1;
    animation: floatingBooks 25s linear infinite;
    z-index: -1;
    white-space: pre;
    line-height: 100px;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-25px) rotate(180deg); }
}

@keyframes floatingBooks {
    0% { transform: translateY(100vh) rotate(0deg); }
    100% { transform: translateY(-100vh) rotate(360deg); }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

@keyframes glow {
    0%, 100% { box-shadow: 0 0 10px rgba(255, 77, 136, 0.5); }
    50% { box-shadow: 0 0 25px rgba(255, 77, 136, 0.8), 0 0 35px rgba(216, 27, 96, 0.4); }
}

@keyframes shimmer {
    0% { left: -100%; }
    100% { left: 100%; }
}

@keyframes pageFlip {
    0% { transform: rotateY(0deg); }
    50% { transform: rotateY(-15deg); }
    100% { transform: rotateY(0deg); }
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 30px;
    background: linear-gradient(135deg, #ff4d88, #d81b60);
    box-shadow: 0 10px 40px rgba(0,0,0,0.2);
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}

header::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    animation: shimmer 3.5s infinite;
}

.logo {
    display: flex;
    align-items: center;
    gap: 15px;
    z-index: 2;
}

.logo img {
    height: 45px;
    filter: drop-shadow(0 0 15px rgba(255, 255, 255, 0.4));
    animation: pulse 2.5s ease-in-out infinite;
}

.logo h1 {
    font-size: 28px;
    color: white;
    font-weight: 700;
    margin: 0;
    text-shadow: 0 2px 15px rgba(255, 255, 255, 0.3);
}

.icons {
    display: flex;
    gap: 20px;
    align-items: center;
    font-size: 28px;
    z-index: 2;
}

.icons a {
    text-decoration: none;
    color: white;
    cursor: pointer;
    padding: 12px;
    border-radius: 50%;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.icons a:hover {
    transform: translateY(-8px) scale(1.15) rotate(10deg);
    box-shadow: 0 15px 35px rgba(255, 77, 136, 0.4);
    animation: glow 1.5s ease-in-out infinite;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.3), rgba(255, 77, 136, 0.2));
}

.search-bar {
    margin: 30px auto;
    text-align: center;
    position: relative;
}

.search-bar input {
    padding: 15px 25px;
    width: 400px;
    max-width: 90%;
    border-radius: 50px;
    border: none;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(15px);
    font-size: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.search-bar input:focus {
    outline: none;
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(255, 77, 136, 0.3);
    background: rgba(255, 255, 255, 1);
}

section {
    margin: 40px auto;
    width: 95%;
    max-width: 1200px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    padding: 30px;
    border-radius: 25px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    border: 1px solid rgba(255, 255, 255, 0.4);
    position: relative;
    overflow: hidden;
    animation: slideUp 0.8s ease-out;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, #ff4d88, #d81b60, #ff6b9d);
    animation: gradientShift 4s ease-in-out infinite;
}

@keyframes gradientShift {
    0%, 100% { transform: translateX(-100%); }
    50% { transform: translateX(100%); }
}

section h3 {
    color: #d81b60;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 3px solid #f48fb1;
    position: relative;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

section h3::after {
    content: '';
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, #ff4d88, #d81b60);
    border-radius: 2px;
}

.products {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-top: 25px;
    padding: 10px 0;
}
@media (max-width: 768px) {
    .products {
        grid-template-columns: repeat(2, 1fr);
    }
}


.product-card {
    background: linear-gradient(145deg, #ffffff, #fff0f5);
    padding: 20px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 
        0 15px 50px rgba(0, 0, 0, 0.1),
        0 5px 20px rgba(0, 0, 0, 0.06);
    transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.8);
}

.product-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, transparent, #ff4d88, transparent);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.product-card:hover {
    transform: translateY(-15px) scale(1.03);
    box-shadow: 
        0 25px 80px rgba(255, 77, 136, 0.25),
        0 15px 40px rgba(0, 0, 0, 0.15);
    animation: pageFlip 0.6s ease-in-out;
}

.product-card:hover::before {
    opacity: 1;
}

.product-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 15px;
    transition: all 0.4s ease;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.product-card:hover img {
    transform: scale(1.05) rotateY(5deg);
    box-shadow: 0 12px 35px rgba(255, 77, 136, 0.3);
}

.product-card h4 {
    margin: 15px 0 10px 0;
    color: #d81b60;
    font-size: 18px;
    font-weight: 600;
}

.product-card p {
    font-size: 20px;
    font-weight: 700;
    color: #333;
    margin: 10px 0 15px 0;
}

button {
    background: linear-gradient(135deg, #ff4d88, #d81b60);
    color: white;
    border: none;
    padding: 12px 24px;
    cursor: pointer;
    border-radius: 25px;
    font-size: 14px;
    font-weight: 600;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

button::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 0.4s ease;
}

button:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 77, 136, 0.5);
    background: linear-gradient(135deg, #d81b60, #ff4d88);
}

button:hover::before {
    width: 120px;
    height: 120px;
}

button:active {
    transform: translateY(0);
}

/* Stagger animation for product cards */
.product-card:nth-child(1) { animation: slideUp 0.6s ease-out 0.1s both; }
.product-card:nth-child(2) { animation: slideUp 0.6s ease-out 0.2s both; }
.product-card:nth-child(3) { animation: slideUp 0.6s ease-out 0.3s both; }
.product-card:nth-child(4) { animation: slideUp 0.6s ease-out 0.4s both; }

/* Loading animation for images */
.product-card img {
    opacity: 0;
    animation: fadeInImage 0.8s ease-out 0.3s forwards;
}

@keyframes fadeInImage {
    from {
        opacity: 0;
        transform: scale(0.8) rotateY(-20deg);
    }
    to {
        opacity: 1;
        transform: scale(1) rotateY(0deg);
    }
}

/* Special book category icons */
section[data-category="Islamic"] h3::before { content: '🕌 '; }
section[data-category="Développement personnel"] h3::before { content: '🚀 '; }
section[data-category="Philosophie"] h3::before { content: '🤔 '; }
section[data-category="Romans"] h3::before { content: '📚 '; }

/* Responsive Design */
@media (max-width: 768px) {
    header {
        padding: 15px 20px;
        flex-direction: column;
        gap: 15px;
    }

    .logo h1 {
        font-size: 24px;
    }

    .icons {
        font-size: 24px;
        gap: 15px;
    }

    .search-bar input {
        width: 90%;
    }

    section {
        width: 95%;
        padding: 20px;
        margin: 30px auto;
    }

    .products {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    section h3 {
        font-size: 26px;
    }
}

.no-results { 
    text-align: center; 
    color: #d81b60;
    font-size: 1.2rem;
    margin-top: 20px;
    padding: 20px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    border: 1px solid rgba(255, 77, 136, 0.2);
}
</style>

<script>
// Initialisation solde pour les livres
if (localStorage.getItem("solde") === null) {
    localStorage.setItem("solde", 500.00); // solde de départ plus élevé pour les livres
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
    } else {
        alert("Solde insuffisant !");
    }
}

// Fonction de recherche (filtrage)
function filtrerLivres() {
    const query = document.getElementById("search").value.toLowerCase().trim();
    const produits = document.querySelectorAll('.product-card');
    let visibleCount = 0;

    produits.forEach(p => {
        const titre = (p.querySelector('h4')?.textContent || '').toLowerCase();
        const prix = (p.querySelector('p')?.textContent || '').toLowerCase();
        const alt = (p.querySelector('img')?.alt || '').toLowerCase();
        
        if (query === '' || titre.includes(query) || prix.includes(query) || alt.includes(query)) {
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

// Add interactive effects
document.addEventListener('DOMContentLoaded', function() {
    // Add loading effect to images
    document.querySelectorAll('.product-card img').forEach(img => {
        img.addEventListener('load', function() {
            this.style.opacity = '1';
        });
    });

    // Add page flip sound effect simulation
    document.querySelectorAll('.product-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            // Visual page flip effect
            this.style.transformOrigin = 'left center';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transformOrigin = 'center center';
        });
    });

    // Add ripple effect to buttons
    document.querySelectorAll('button').forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = button.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255, 255, 255, 0.6);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s ease-out;
                pointer-events: none;
            `;
            
            button.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
});

// Add ripple animation
const style = document.createElement('style');
style.textContent = `
    @keyframes ripple {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);
</script>

</head>
<body>
<header>
    <div class="logo">
        <img src="lego.png" alt="GenRYM Logo" />
        <h1>GenRYM Bibliothèque</h1>
    </div>
    <div class="icons">
        <a href="index.html">👤</a>
        <a href="credit.php" title="Crédit">💳</a>
        <a href="code.php" title="Produits">📦</a>
        <a href="shoping.php" title="Shopping">🛍️</a>
        <a href="restaurant.php" title="Restaurant">🍽️</a>
        <a href="pharmacie.php">💊</a>
        <a href="code.php">📦</a>
        <a href="technologie.php">💻</a>
              <a href="makeup.php">💄</a>

        <a href="ajouter.html">🛒</a>
    </div>
</header>

<div class="search-bar">
    <input type="text" id="search" placeholder="📖 Rechercher un livre..." oninput="filtrerLivres()">
</div>

<!-- Message "aucun résultat" -->
<p id="no-results" class="no-results" style="display:none;">Aucun livre trouvé pour cette recherche.</p>

<!-- Section Islamic -->
<section data-category="Islamic">
    <h3>Islamic</h3>
    <div class="products">
        <div class="product-card">
            <img src="images/quaran.jpeg" alt="Le Saint Coran">
            <h4>Le Saint Coran</h4>
            <p><strong>60,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('Le Saint Coran', 60.00)">Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="images/prophete.jpeg" alt="Vie du Prophète">
            <h4>Vie du Prophète</h4>
            <p><strong>70,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('Vie du Prophète', 70.00)">Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="images/hadite.jpg" alt="Hadiths essentiels">
            <h4>Hadiths essentiels</h4>
            <p><strong>90,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('Hadiths essentiels', 90.00)">Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="images/Fiqh simplifié.jpg" alt="Fiqh simplifié">
            <h4>Fiqh simplifié</h4>
            <p><strong>100,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('Fiqh simplifié', 100.00)">Ajouter au panier</button>
        </div>
    </div>
</section>

<!-- Section Développement personnel -->
<section data-category="Développement personnel">
    <h3>Développement personnel</h3>
    <div class="products">
        <div class="product-card">
            <img src="images/PouvoirIllimite.gif" alt="Pouvoir illimité">
            <h4>Pouvoir illimité</h4>
            <p><strong>180,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('Pouvoir illimité', 180.00)">Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="images/les 7 habitudes.jpg" alt="Les 7 habitudes">
            <h4>Les 7 habitudes</h4>
            <p><strong>200,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('Les 7 habitudes', 200.00)">Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="images/Réfléchissez et devenez.jpg" alt="Réfléchissez et devenez riche">
            <h4>Réfléchissez et devenez riche</h4>
            <p><strong>220,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('Réfléchissez et devenez riche', 220.00)">Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="images/l'art de la discipline.jpg" alt="L'art de la discipline">
            <h4>L'art de la discipline</h4>
            <p><strong>250,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('L\'art de la discipline', 250.00)">Ajouter au panier</button>
        </div>
    </div>
</section>

<!-- Section Philosophie -->
<section data-category="Philosophie">
    <h3>Philosophie</h3>
    <div class="products">
        <div class="product-card">
            <img src="images/la République.jpeg" alt="La République">
            <h4>La République</h4>
            <p><strong>190,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('La République', 190.00)">Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="images/Ainsi parlait Zarathoustra.jpeg" alt="Ainsi parlait Zarathoustra">
            <h4>Ainsi parlait Zarathoustra</h4>
            <p><strong>180,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('Ainsi parlait Zarathoustra', 180.00)">Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="images/Critique de la raison pure.jpg" alt="Critique de la raison pure">
            <h4>Critique de la raison pure</h4>
            <p><strong>220,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('Critique de la raison pure', 220.00)">Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="images/ethique-de-spinoza.jpg" alt="L'éthique">
            <h4>L'éthique</h4>
            <p><strong>230,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('L\'éthique', 230.00)">Ajouter au panier</button>
        </div>
    </div>
</section>

<!-- Section Romans -->
<section data-category="Romans">
    <h3>Romans</h3>
    <div class="products">
        <div class="product-card">
            <img src="images/les Misérables.jpeg" alt="Les Misérables">
            <h4>Les Misérables</h4>
            <p><strong>240,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('Les Misérables', 240.00)">Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="images/1984.jpeg" alt="1984">
            <h4>1984</h4>
            <p><strong>225,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('1984', 225.00)">Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="images/le Petit Prince.jpg" alt="Le Petit Prince">
            <h4>Le Petit Prince</h4>
            <p><strong>185,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('Le Petit Prince', 185.00)">Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="images/L'Alchimiste.jpeg" alt="L'Alchimiste">
            <h4>L'Alchimiste</h4>
            <p><strong>170,00 MAD</strong></p>
            <button onclick="ajouterAuPanier('L\'Alchimiste', 170.00)">Ajouter au panier</button>
        </div>
    </div>
</section>

</body>
</html>