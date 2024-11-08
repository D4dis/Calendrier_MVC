
document.getElementById("chatForm").addEventListener("submit", function (e) {
  e.preventDefault(); // Empêche le rechargement de la page

  if (document.getElementById('inputMsg').value !== '') {

    // Récupère les données du formulaire
    const formData = new FormData(this);

    // Envoie les données via AJAX
    fetch("index.php?ctrl=chat&action=sendMsg", {
      method: "POST",
      body: formData
    })
    .then(() => {
      const newMsg = document.createElement('div');
      newMsg.classList.add('mb-2');
      newMsg.classList.add('d-inline-flex');
      newMsg.classList.add('align-items-center');
      newMsg.classList.add('text-decoration-none');
      newMsg.classList.add('text-body-emphasis');
      newMsg.classList.add('bg-body-hover');
      newMsg.classList.add('rounded-pill');
      newMsg.classList.add('border');
      newMsg.classList.add('border-primary');
      newMsg.classList.add('py-2');
      newMsg.classList.add('ps-2');
      newMsg.classList.add('pe-2');
      const msgTxt = document.createElement('p');
      msgTxt.classList.add('mb-0');
      msgTxt.classList.add('fw-semibold');
      msgTxt.classList.add('fs-9');
      msgTxt.textContent = document.getElementById('inputMsg').value;
      newMsg.appendChild(msgTxt);
      document.getElementById('msgBox').appendChild(newMsg);
    })
      .finally(() => {
        document.getElementById('inputMsg').value = "";
      });
  }
});

