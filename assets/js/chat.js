
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
      msgCont.classList.add('chat-message');
      msgCont.classList.add('me-2');
      const newMsg = document.createElement('div');
      newMsg.classList.add('mb-1');
      newMsg.classList.add('sent-message-content');
      newMsg.classList.add('bg-primary');
      newMsg.classList.add('rounded-2');
      newMsg.classList.add('p-3');
      newMsg.classList.add('text-white');
      newMsg.setAttribute('data-bs-theme', 'light');
      const msgTxt = document.createElement('p');
      msgTxt.classList.add('mb-0');
      msgTxt.textContent = document.getElementById('inputMsg').value;
      msgCont.appendChild(newMsg);
      newMsg.appendChild(msgTxt);
      console.log(msgCont)
      document.getElementById('msgBox').appendChild(msgCont);
    })
      .finally(() => {
        document.getElementById('inputMsg').value = "";
      });
  }
});


