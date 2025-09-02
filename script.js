// =====================
// Apparition des cartes avec effet 3D
// =====================
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".card");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  }, { threshold: 0.2 });

  cards.forEach(card => {
    observer.observe(card);

    // Effet 3D au survol
    card.addEventListener("mousemove", e => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const rotateX = ((y - centerY) / centerY) * 10;
      const rotateY = ((x - centerX) / centerX) * 10;
      card.style.transform = `rotateX(${-rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
    });
    card.addEventListener("mouseleave", () => {
      card.style.transform = "rotateX(0) rotateY(0) scale(1)";
    });
  });
});

// =====================
// Bouton retour en haut stylé
// =====================
const scrollBtn = document.createElement("button");
scrollBtn.innerText = "⬆";
scrollBtn.classList.add("scroll-top-btn");
document.body.appendChild(scrollBtn);

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    scrollBtn.classList.add("show");
  } else {
    scrollBtn.classList.remove("show");
  }
});

scrollBtn.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// =====================
// Menu burger responsive animé
// =====================
const nav = document.querySelector("nav");
if (nav) {
  const menuBtn = document.createElement("div");
  menuBtn.classList.add("burger");
  menuBtn.innerHTML = "<span></span><span></span><span></span>";
  nav.prepend(menuBtn);

  const links = nav.querySelector(".menu");
  menuBtn.addEventListener("click", () => {
    menuBtn.classList.toggle("active");
    links.classList.toggle("active");
  });
}

// =====================
// Effet particules au clic
// =====================
document.addEventListener("click", (e) => {
  for (let i = 0; i < 6; i++) {
    const particle = document.createElement("span");
    particle.classList.add("particle");
    document.body.appendChild(particle);

    const size = Math.random() * 8 + 4;
    particle.style.width = particle.style.height = `${size}px`;
    particle.style.left = `${e.pageX}px`;
    particle.style.top = `${e.pageY}px`;

    const dx = (Math.random() - 0.5) * 200;
    const dy = (Math.random() - 0.5) * 200;

    particle.animate([
      { transform: `translate(0,0)`, opacity: 1 },
      { transform: `translate(${dx}px, ${dy}px)`, opacity: 0 }
    ], { duration: 800, easing: "ease-out" });

    setTimeout(() => particle.remove(), 800);
  }
});

// =====================
// Styles injectés dynamiquement
// =====================
const style = document.createElement("style");
style.innerHTML = `
/* Bouton retour en haut */
.scroll-top-btn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background: linear-gradient(45deg,#f39c12,#e67e22);
  color: #fff;
  border: none;
  padding: 15px;
  border-radius: 50%;
  font-size: 20px;
  cursor: pointer;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  transform: scale(0);
  transition: transform 0.3s ease-in-out;
}
.scroll-top-btn.show {
  transform: scale(1);
}
.scroll-top-btn:hover {
  animation: pulse 1s infinite;
}
@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.2); }
  100% { transform: scale(1); }
}

/* Menu burger */
.burger {
  display: none;
  flex-direction: column;
  cursor: pointer;
  gap: 5px;
  margin-right: 20px;
}
.burger span {
  width: 25px;
  height: 3px;
  background: white;
  border-radius: 3px;
  transition: all 0.4s;
}
.burger.active span:nth-child(1) { transform: rotate(45deg) translate(5px,5px); }
.burger.active span:nth-child(2) { opacity: 0; }
.burger.active span:nth-child(3) { transform: rotate(-45deg) translate(5px,-5px); }

/* Menu responsive */
@media (max-width: 768px) {
  .burger { display: flex; }
  nav .menu {
    display: none;
    flex-direction: column;
    background: #2c3e50;
    position: absolute;
    top: 60px;
    right: 20px;
    padding: 20px;
    border-radius: 15px;
  }
  nav .menu.active {
    display: flex;
    animation: slideDown 0.4s ease;
  }
  @keyframes slideDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }
}

/* Particules clic */
.particle {
  position: absolute;
  border-radius: 50%;
  background: hsl(${Math.random()*360}, 100%, 50%);
  pointer-events: none;
}
`;
document.head.appendChild(style);
