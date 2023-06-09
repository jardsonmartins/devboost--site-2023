//Menu mobile
const btnMenu = document.getElementById('js-btn-menu-mobile');
const overlayMenu = document.querySelector('.js-overlay');

function openMenuMobile(){
    document.documentElement.classList.toggle('menu-opened');
}
btnMenu.addEventListener('click', openMenuMobile);
overlayMenu.addEventListener('click', openMenuMobile);

//Formulário de compra
const btnForm = document.getElementById('js-form');
const overlayForm = document.querySelector('.js-overlay-form');

function openForm(){
  document.documentElement.classList.toggle('formulario-opened');
}

btnForm.addEventListener('click', openForm);
overlayForm.addEventListener('click', openForm);


//Passar Url para a Kiwify
var emailInput = document.getElementById("email");
var phoneInput = document.getElementById("phone");
var phoneMask = IMask(phoneInput, {
    mask: "(00) 0 0000-0000"
});

function redirecionar(event) {
    event.preventDefault(); // Evita que o formulário seja enviado normalmente

    // Obtém os valores dos campos do formulário
    var nome = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = phoneMask.value;

    // Codifica os valores para serem passados na URL
    var nomeCodificado = encodeURIComponent(nome);
    var emailCodificado = encodeURIComponent(email);
    var phoneCodificado = encodeURIComponent(phone);

    // Constrói a URL com os parâmetros
    var url = "https://pay.kiwify.com.br/QTnxhp2" +
        "?name=" + nomeCodificado +
        "&email=" + emailCodificado +
        "&phone=" + phoneCodificado;

    // Redireciona para a URL com os parâmetros
    window.location.href = url;
}

// Carrossel com a biblioteca Swiper
var mySwiper = new Swiper('.swiper-container', {
      loop: true,
      pagination: {
          el: '.swiper-pagination',
      },
      slidesPerView: 'auto',
      breakpoints: {
          768: {
              slidesPerView: 2,
          }
      },
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
});

// Biblioteca AOS
AOS.init({
  duration: 1000,
  easing: 'ease-in-out',
  delay: 100,
  once: true
});

// Fechar Details
var details = document.querySelectorAll("details");
details.forEach(function(detail) {
  detail.addEventListener("click", function() {
    if (detail.hasAttribute("open")) {
      scrollToCenter(detail);
    }
    details.forEach(function(d) {
      if (d !== detail) {
        d.removeAttribute("open");
      }
    });
  });
});

// JS do modal do vídeo do Youtube
/*

var botao = document.querySelector(".play");
var modal = document.querySelector(".modal");
var modalFechar = document.querySelector(".modal-fechar");

botao.addEventListener("click", function() {
  modal.style.display = "block";
});

modalFechar.addEventListener("click", function() {
  modal.style.display = "none";
});

window.addEventListener("click", function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});

*/