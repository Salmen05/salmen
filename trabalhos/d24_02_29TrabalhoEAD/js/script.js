function fazerLogin() {
  const impemail = document.getElementById("impemail").value;
  const impsenha = document.getElementById("impsenha").value;
  const log = document.getElementById('log');
  const divLoading = document.getElementById("cu");
  if (impemail === "" && impsenha === "") {
    log.style.display = "block";
    log.innerHTML = "Por favor, preencha os campos acima";
    log.classList.remove("alert-light");
    log.classList.add("alert-warning");
    return;
  } else if (impemail === "") {
    log.style.display = "block";
    log.innerHTML = "Por favor, preencha o campo de e-mail.";
    log.classList.remove("alert-light");
    log.classList.add("alert-warning");
    return;
  } else if (impsenha === "") {
    log.style.display = "block";
    log.innerHTML = "Preencha o campo de senha"
    log.classList.remove("alert-light");
    log.classList.add("alert-warning");
    return;
  } else if (impsenha.length < 6) {
    log.style.display = "block";
    log.innerHTML = "A senha deve conter no mínimo 6 dígitos"
    log.classList.remove("alert-light");
    log.classList.add("alert-warning");
    return;
  } else {
    log.style.display = "none"
  }
  mostrarProcessando();
  fetch("indextest.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: "impemail=" + encodeURIComponent(impemail) + "&impsenha=" + encodeURIComponent(impsenha)
  },
  ).then((response) => response.json())
    .then((data) => {
      if (data.success) {
        setTimeout(function () {
          window.location.href = "home.php";
        }, 2000);
        log.style.display = "block";
        log.classList.remove("alert-danger");
        log.classList.remove("alert-light");
        log.classList.add("alert-success");
        log.innerHTML = data.message;
      } else {
        log.style.display = "block";
        log.classList.remove("alert-light");
        log.classList.add("alert-danger");
        log.innerHTML = data.message;
      }
      esconderProcessando();
    })
    .catch((error) => {
      console.error("Erro na requisição", error);
    });
}
function mostrarProcessando() {
  var divProcessando = document.createElement("div");
  divProcessando.id = "processandoDiv";
  divProcessando.style.position = "fixed";
  divProcessando.style.top = "85%";
  divProcessando.style.left = "16.5%";
  divProcessando.style.transform = "translate(-50%, -50%)";
  divProcessando.innerHTML = '<img src="img/loading.gif" width="200px" alt="Processando..." title="Processando...">';
  cu.appendChild(divProcessando);
}
function esconderProcessando() {
  const divProcessando = document.getElementById("processandoDiv");
  if (divProcessando) {
    cu.removeChild(divProcessando);
  }
}



function duvifale() {
  alert('Envio Concluido!!!')
}