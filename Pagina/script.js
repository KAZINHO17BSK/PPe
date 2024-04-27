function curtir() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("contadorCurtidas").textContent = this.responseText + " curtidas";
      }
    };
    xhttp.open("GET", "../Curtir/curtir.php", true);
    xhttp.send();
  }

