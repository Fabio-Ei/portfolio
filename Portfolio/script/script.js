const modal = document.getElementById('contact_modal');
const openBtn = document.getElementById('openModal');
const closeBtn = document.getElementById('closeModal')

// Abre o modal de forma estritamente "Modal" (bloqueia o fundo)
openBtn.onclick = function () {
  modal.showModal();
};

closeBtn.onclick = function () {
  modal.close();
}

modal.onclick = function (event) {
  if(event.target === modal) {
    modal.close();
  }
}