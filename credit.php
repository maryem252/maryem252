<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>GenRYM Crédit</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #0077b6;
    margin: 0;
    padding: 20px;
    min-height: 100vh;
    position: relative;
    overflow-x: hidden;
  }
  
  /* Particules décoratives flottantes */
  body::before {
    content: '💰 🏦 💳 📊 💎 ✨';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    font-size: 20px;
    opacity: 0.1;
    animation: float 20s infinite linear;
    pointer-events: none;
    z-index: -1;
  }
  
  @keyframes float {
    0% { transform: translateY(100vh) rotate(0deg); }
    100% { transform: translateY(-100vh) rotate(360deg); }
  }
  
  /* Barre logo comme sur ton site */
  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background: linear-gradient(145deg, #ffffff, #f0f0f0);
    box-shadow: 0 8px 32px rgba(0,0,0,0.15);
    margin-bottom: 40px;
    border-radius: 15px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
    animation: slideDown 0.8s ease-out;
  }
  
  @keyframes slideDown {
    from { transform: translateY(-100px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
  }

  .icons {
    display: flex;
    gap: 15px;
    align-items: center;
    font-size: 24px;
  }

  .icons a {
    text-decoration: none;
    color: #0077b6;
    cursor: pointer;
    transition: all 0.3s ease;
    padding: 8px;
    border-radius: 50%;
    background: linear-gradient(145deg, #f0f0f0, #ffffff);
    box-shadow: 5px 5px 10px #d1d1d1, -5px -5px 10px #ffffff;
  }
  
  .icons a:hover {
    transform: scale(1.2) rotate(10deg);
    box-shadow: 0 5px 15px rgba(0,119,182,0.4);
  }
  
  .logo {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  
  .logo img {
    height: 40px;
    filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
  }
  
  .logo h1 {
    font-size: 22px;
    color: #0077b6;
    margin: 0;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
  }
  
  /* Contenu centré */
  main {
    max-width: 450px;
    margin: 0 auto;
    background: linear-gradient(145deg, #ffffff, #f8f9fa);
    padding: 40px 35px;
    border-radius: 25px;
    box-shadow: 
      0 20px 40px rgba(0,0,0,0.1),
      0 0 0 1px rgba(255,255,255,0.5) inset;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.3);
    position: relative;
    animation: slideUp 1s ease-out;
  }
  
  @keyframes slideUp {
    from { transform: translateY(50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
  }
  
  /* Décoration coins du main */
  main::before {
    content: '💳';
    position: absolute;
    top: -10px;
    right: -10px;
    font-size: 24px;
    animation: bounce 2s infinite;
  }
  
  main::after {
    content: '💰';
    position: absolute;
    bottom: -10px;
    left: -10px;
    font-size: 24px;
    animation: bounce 2s infinite 1s;
  }
  
  @keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-10px); }
    60% { transform: translateY(-5px); }
  }
  
  h1 {
    font-weight: 700;
    font-size: 1.8em;
    margin-bottom: 20px;
    text-align: center;
    color: #0077b6;
    background: linear-gradient(45deg, #0077b6, #023e8a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: none;
    position: relative;
  }
  
  h1::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: linear-gradient(45deg, #0077b6, #023e8a);
    border-radius: 2px;
  }
  
  .solde {
    font-size: 1.6em;
    margin-bottom: 30px;
    font-weight: bold;
    text-align: center;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 
      0 10px 20px rgba(102, 126, 234, 0.3),
      0 0 0 1px rgba(255,255,255,0.2) inset;
    position: relative;
    overflow: hidden;
    animation: glow 3s ease-in-out infinite alternate;
  }
  
  @keyframes glow {
    0% { box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3), 0 0 0 1px rgba(255,255,255,0.2) inset; }
    100% { box-shadow: 0 15px 30px rgba(102, 126, 234, 0.5), 0 0 20px rgba(102, 126, 234, 0.3) inset; }
  }
  
  .solde::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    animation: shine 3s infinite;
  }
  
  @keyframes shine {
    0% { left: -100%; }
    100% { left: 100%; }
  }
  
  label {
    font-weight: 600;
    margin-bottom: 8px;
    display: block;
    color: #0077b6;
    position: relative;
    padding-left: 25px;
  }
  
  label::before {
    content: '💵';
    position: absolute;
    left: 0;
    top: 0;
  }
  
  input[type="number"], input[type="date"] {
    width: 100%;
    padding: 15px 20px;
    font-size: 1.1em;
    border: 2px solid transparent;
    background: linear-gradient(white, white) padding-box,
                linear-gradient(45deg, #667eea, #764ba2) border-box;
    border-radius: 12px;
    margin-bottom: 25px;
    outline: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  }
  
  input[type="number"]:focus, input[type="date"]:focus {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
  }
  
  button {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    font-weight: 700;
    font-size: 1.2em;
    padding: 16px 0;
    width: 100%;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    box-shadow: 
      0 6px 20px rgba(102, 126, 234, 0.4),
      0 0 0 1px rgba(255,255,255,0.2) inset;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    margin-bottom: 15px;
  }
  
  button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
  }
  
  button:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.6);
  }
  
  button:hover::before {
    left: 100%;
  }
  
  button:active {
    transform: translateY(0);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
  }
  
  /* Style pour le bouton de retour */
  .btn-return {
    background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
    margin-top: 10px;
  }
  
  .btn-return:hover {
    box-shadow: 0 10px 30px rgba(231, 76, 60, 0.6);
  }
  
  .message {
    margin-top: 20px;
    font-weight: 600;
    text-align: center;
    color: #0077b6;
    padding: 15px;
    border-radius: 10px;
    background: rgba(255,255,255,0.8);
    backdrop-filter: blur(5px);
    border: 1px solid rgba(255,255,255,0.3);
    animation: fadeIn 0.5s ease-out;
  }
  
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  /* Style pour les transactions en attente */
  .pending-section {
    margin-top: 30px;
    padding: 20px;
    background: rgba(255, 193, 7, 0.1);
    border-left: 4px solid #ffc107;
    border-radius: 10px;
    animation: fadeIn 0.5s ease-out;
  }
  
  .pending-transaction {
    background: rgba(255,255,255,0.9);
    padding: 15px;
    margin: 10px 0;
    border-radius: 10px;
    border: 1px solid rgba(255, 193, 7, 0.3);
    display: flex;
    justify-content: space-between;
    align-items: center;
    animation: slideIn 0.3s ease-out;
  }
  
  @keyframes slideIn {
    from { transform: translateX(-20px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
  }
  
  .pending-info {
    display: flex;
    flex-direction: column;
    gap: 5px;
  }
  
  .pending-amount {
    font-weight: bold;
    color: #e74c3c;
    font-size: 1.1em;
  }
  
  .pending-date {
    font-size: 0.9em;
    color: #666;
  }
  
  .btn-small {
    padding: 8px 15px;
    font-size: 0.9em;
    border-radius: 15px;
  }
  
  nav {
    margin-top: 40px;
    text-align: center;
    padding: 20px;
    background: rgba(255,255,255,0.1);
    border-radius: 15px;
    backdrop-filter: blur(10px);
  }
  
  nav a {
    margin: 0 15px;
    color: #0077b6;
    font-weight: 600;
    text-decoration: none;
    font-size: 1.1em;
    padding: 8px 16px;
    border-radius: 20px;
    transition: all 0.3s ease;
    display: inline-block;
    background: linear-gradient(145deg, #f0f0f0, #ffffff);
    box-shadow: 5px 5px 10px #d1d1d1, -5px -5px 10px #ffffff;
  }
  
  nav a:hover {
    transform: translateY(-2px);
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
  }
</style>
</head>

<header>
  <div class="logo">
    <img src="lego.png" alt="GenRYM Logo" />
    <h1>GenRYM Market</h1>
  </div>

  <div class="icons">
    <a href="index.html" title="Profil">👤</a>
    <a href="code.php" title="Produits">📦</a>
    <a href="shoping.php" title="Shopping">🛍️</a>
    <a href="restaurant.php" title="Restaurant">🍽️</a>
    <a href="bibliotheque.php" title="Bibliothèque">📚</a>
    <a href="pharmacie.php">💊</a>
    <a href="technologie.php">💻</a>
    <a href="ajouter.html" title="Panier">🛒</a>
  </div>
</header>
<body>

<main>
  <h1>Gérer votre Crédit</h1>

  <div class="solde">Solde actuel : <span id="soldeValue">0,00</span> MAD</div>

  <label for="creditAmount">Montant à ajouter :</label>
  <input type="number" id="creditAmount" min="0.01" step="0.01" placeholder="Ex: 10,00" />

  <button id="btnAddCredit">Ajouter le crédit</button>

  <!-- Section pour le délai de retour -->
  <label for="returnDate">📅 Définir délai de retour :</label>
  <input type="date" id="returnDate" />
  
  <label for="returnAmount">💰 Montant à retourner :</label>
  <input type="number" id="returnAmount" min="0.01" step="0.01" placeholder="Ex: 5,00" />
  
  <button id="btnScheduleReturn">Programmer le retour</button>
  
  <button id="btnManualReturn" class="btn-return">Retourner crédit maintenant</button>

  <div class="message" id="message"></div>

  <!-- Section des transactions en attente -->
  <div id="pendingSection" class="pending-section" style="display: none;">
    <h3>⏳ Retours programmés</h3>
    <div id="pendingList"></div>
  </div>

  <nav>
    <a href="code.php">Produits</a>
    <a href="pharmacie.php">Pharmacie</a>
    <a href="restaurant.php">Restaurant</a>
  </nav>
</main>

<script>
  // Initialiser solde à 50€ si pas encore défini
  if (localStorage.getItem('solde') === null) {
    localStorage.setItem('solde', '50.00');
  }
  
  // Initialiser les retours programmés
  if (localStorage.getItem('scheduledReturns') === null) {
    localStorage.setItem('scheduledReturns', JSON.stringify([]));
  }

  const soldeValue = document.getElementById('soldeValue');
  const creditInput = document.getElementById('creditAmount');
  const btnAddCredit = document.getElementById('btnAddCredit');
  const returnDateInput = document.getElementById('returnDate');
  const returnAmountInput = document.getElementById('returnAmount');
  const btnScheduleReturn = document.getElementById('btnScheduleReturn');
  const btnManualReturn = document.getElementById('btnManualReturn');
  const message = document.getElementById('message');
  const pendingSection = document.getElementById('pendingSection');
  const pendingList = document.getElementById('pendingList');

  function afficherSolde() {
    const solde = parseFloat(localStorage.getItem('solde'));
    soldeValue.textContent = solde.toFixed(2).replace('.', ',');
  }

  function afficherMessage(text, color = '#0077b6') {
    message.textContent = text;
    message.style.color = color;
    message.style.display = 'block';
    
    // Auto-hide après 5 secondes
    setTimeout(() => {
      message.style.display = 'none';
    }, 5000);
  }

  function afficherRetoursProgrammes() {
    const scheduledReturns = JSON.parse(localStorage.getItem('scheduledReturns')) || [];
    
    if (scheduledReturns.length === 0) {
      pendingSection.style.display = 'none';
      return;
    }
    
    pendingSection.style.display = 'block';
    pendingList.innerHTML = '';
    
    scheduledReturns.forEach((returnItem, index) => {
      const div = document.createElement('div');
      div.className = 'pending-transaction';
      div.innerHTML = `
        <div class="pending-info">
          <div class="pending-amount">-${returnItem.amount} MAD</div>
          <div class="pending-date">📅 ${returnItem.date}</div>
        </div>
        <button onclick="annulerRetour(${index})" class="btn-small btn-return">Annuler</button>
      `;
      pendingList.appendChild(div);
    });
  }

  function verifierRetoursEchus() {
    const scheduledReturns = JSON.parse(localStorage.getItem('scheduledReturns')) || [];
    const today = new Date().toISOString().split('T')[0];
    let retoursTraites = [];
    
    scheduledReturns.forEach((returnItem, index) => {
      if (returnItem.date <= today) {
        // Effectuer le retour
        let solde = parseFloat(localStorage.getItem('solde'));
        if (solde >= returnItem.amount) {
          solde -= returnItem.amount;
          localStorage.setItem('solde', solde.toFixed(2));
          afficherMessage(`✅ Retour automatique de ${returnItem.amount} MAD effectué !`, '#28a745');
        } else {
          afficherMessage(`❌ Solde insuffisant pour le retour de ${returnItem.amount} MAD`, '#dc3545');
        }
      } else {
        retoursTraites.push(returnItem);
      }
    });
    
    // Mettre à jour la liste des retours en supprimant ceux qui ont été traités
    const retoursRestants = scheduledReturns.filter((returnItem) => returnItem.date > today);
    localStorage.setItem('scheduledReturns', JSON.stringify(retoursRestants));
    
    afficherSolde();
    afficherRetoursProgrammes();
  }

  function annulerRetour(index) {
    const scheduledReturns = JSON.parse(localStorage.getItem('scheduledReturns')) || [];
    scheduledReturns.splice(index, 1);
    localStorage.setItem('scheduledReturns', JSON.stringify(scheduledReturns));
    afficherRetoursProgrammes();
    afficherMessage('🗑️ Retour programmé annulé', '#ffc107');
  }

  // Événements
  btnAddCredit.addEventListener('click', () => {
    let montant = parseFloat(creditInput.value.replace(',', '.'));
    if (isNaN(montant) || montant <= 0) {
      afficherMessage("⚠️ Veuillez saisir un montant valide (supérieur à 0).", '#d90429');
      return;
    }
    let solde = parseFloat(localStorage.getItem('solde'));
    solde += montant;
    localStorage.setItem('solde', solde.toFixed(2));
    afficherSolde();
    afficherMessage(`✅ Crédit ajouté avec succès ! Nouveau solde : ${solde.toFixed(2).replace('.', ',')} MAD`, '#28a745');
    creditInput.value = '';
  });

  btnScheduleReturn.addEventListener('click', () => {
    const returnDate = returnDateInput.value;
    const returnAmount = parseFloat(returnAmountInput.value.replace(',', '.'));
    
    if (!returnDate) {
      afficherMessage("⚠️ Veuillez sélectionner une date de retour.", '#d90429');
      return;
    }
    
    if (isNaN(returnAmount) || returnAmount <= 0) {
      afficherMessage("⚠️ Veuillez saisir un montant valide pour le retour.", '#d90429');
      return;
    }
    
    const today = new Date().toISOString().split('T')[0];
    if (returnDate <= today) {
      afficherMessage("⚠️ La date de retour doit être dans le futur.", '#d90429');
      return;
    }
    
    const scheduledReturns = JSON.parse(localStorage.getItem('scheduledReturns')) || [];
    scheduledReturns.push({
      date: returnDate,
      amount: returnAmount,
      scheduled: new Date().toISOString()
    });
    
    localStorage.setItem('scheduledReturns', JSON.stringify(scheduledReturns));
    
    afficherMessage(`⏰ Retour de ${returnAmount} MAD programmé pour le ${returnDate}`, '#28a745');
    returnDateInput.value = '';
    returnAmountInput.value = '';
    afficherRetoursProgrammes();
  });

  btnManualReturn.addEventListener('click', () => {
    const returnAmount = parseFloat(returnAmountInput.value.replace(',', '.'));
    
    if (isNaN(returnAmount) || returnAmount <= 0) {
      afficherMessage("⚠️ Veuillez saisir un montant valide pour le retour.", '#d90429');
      return;
    }
    
    let solde = parseFloat(localStorage.getItem('solde'));
    if (solde < returnAmount) {
      afficherMessage("❌ Solde insuffisant pour effectuer ce retour.", '#d90429');
      return;
    }
    
    solde -= returnAmount;
    localStorage.setItem('solde', solde.toFixed(2));
    afficherSolde();
    afficherMessage(`✅ Retour de ${returnAmount} MAD effectué ! Nouveau solde : ${solde.toFixed(2).replace('.', ',')} MAD`, '#28a745');
    returnAmountInput.value = '';
  });

  // Initialiser l'affichage
  afficherSolde();
  afficherRetoursProgrammes();
  verifierRetoursEchus();
  
  // Vérifier les retours échus toutes les minutes
  setInterval(verifierRetoursEchus, 60000);
  
  // Rendre la fonction globale pour les boutons
  window.annulerRetour = annulerRetour;
</script>

</body>
</html>