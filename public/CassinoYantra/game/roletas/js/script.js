const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event) {
  if (event.type === 'touchstart') event.preventDefault();
  const nav = document.getElementById('nav');
  nav.classList.toggle('active');
  const active = nav.classList.contains('active');
  event.currentTarget.setAttribute('aria-expanded', active);
  if (active) {
    event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
  } else {
    event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
  }
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);

window.onload = function desativaRoletas() {
    const roleta2 = document.querySelector("iframe:nth-child(2)").contentWindow;
    roleta2.document.querySelector(".button").style.display = "none";
    roleta2.document.querySelector(".area-roleta").style.filter = "grayscale(1)";

    const roleta3 = document.querySelector("iframe:nth-child(3)").contentWindow;
    roleta3.document.querySelector(".button").style.display = "none";
    roleta3.document.querySelector(".area-roleta").style.filter = "grayscale(1)";
}