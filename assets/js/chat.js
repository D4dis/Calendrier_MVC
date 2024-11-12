
document.getElementById("chatForm").addEventListener("submit", function (e) {
  e.preventDefault(); 

  if (document.getElementById('inputMsg').value !== '') {

    const formData = new FormData(this);

    fetch("index.php?ctrl=chat&action=sendMsg", {
      method: "POST",
      body: formData
    })
    .then(() => {
      const msgCont = document.createElement('div');
      msgCont.classList.add('chat-message-content');
      msgCont.classList.add('me-2');
      const newMsg = document.createElement('div');
      newMsg.classList.add('mb-1');
      newMsg.classList.add('sent-message-content');
      newMsg.classList.add('bg-primary');
      newMsg.classList.add('rounded-2');
      newMsg.classList.add('p-3');
      newMsg.classList.add('text-white');
      // newMsg.classList.add('rounded-pill');
      // newMsg.classList.add('border');
      // newMsg.classList.add('border-primary');
      // newMsg.classList.add('py-2');
      // newMsg.classList.add('ps-3');
      // newMsg.classList.add('pe-3');
      const msgTxt = document.createElement('p');
      msgTxt.classList.add('mb-0');
      // msgTxt.classList.add('fw-semibold');
      // msgTxt.classList.add('fs-9');
      msgTxt.textContent = document.getElementById('inputMsg').value;
      msgCont.appendChild(newMsg);
      newMsg.appendChild(msgTxt);
      document.getElementById('msgBox').appendChild(msgCont);
    })
      .finally(() => {
        document.getElementById('inputMsg').value = "";
      });
  }
});


