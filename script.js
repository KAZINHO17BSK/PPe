function curtir() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("contadorCurtidas").textContent = this.responseText + " curtidas";
      }
    };
    xhttp.open("GET", "curtir.php", true);
    xhttp.send();
  }
  document.getElementById('loginBtn').addEventListener('click', function() {
    console.log('Botão de login clicado');
    document.getElementById('loginModal').style.display = 'block';
});

document.getElementsByClassName('close-button')[0].addEventListener('click', function() {
    console.log('Botão de fechar clicado');
    document.getElementById('loginModal').style.display = 'none';
});

document.getElementById('cancelBtn').addEventListener('click', function() {
    console.log('Botão de cancelar clicado');
    document.getElementById('loginModal').style.display = 'none';
});

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    console.log('Formulário de login enviado');
    console.log('Telefone: ' + document.getElementById('phone').value);
    console.log('Senha: ' + document.getElementById('password').value);
    document.getElementById('loginModal').style.display = 'none';
});

