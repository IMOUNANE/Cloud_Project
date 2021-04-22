//ON traite le formulaire ici
const urlcourante = document.location.href;
const cut_url = urlcourante.split('/id=')[1];
const client_id = cut_url.split('/ip_adress=')[0];
const ip_adress = cut_url.split('/ip_adress=')[1];

//console.log("L'id client est : " + client_id, "et l'adresse ip est : " + ip_adress);

form = window.document.querySelector("form");
inputs = form.querySelectorAll('input');

inputs.forEach(input => {
  if (input.type === "hidden") {
      if(input.name === "client_id") {
        input.setAttribute("value", client_id);
      }else{
        input.setAttribute("value", ip_adress);
      }
    }
  });

var userChoice = {AllChoices:{},infos:{}};
var inputs = document.querySelectorAll("input")

function set_choices_false(){
  inputs.forEach(input => {
    if (input.type !== "hidden") {
      input.setAttribute("value", 0);
      userChoice.AllChoices[input.name] = input.value;
    } else {
      userChoice.infos[input.name] = input.value;
    }
  })
  send_ajax(userChoice);
}

function set_choices(){
  inputs.forEach(input => {
    if(input.checked) {
      userChoice.AllChoices[input.name] = input.value;
    } else if (input.type === "hidden") {
      userChoice.infos[input.name] = input.value;
    }
  });

  send_ajax(userChoice);
}


function send_ajax(data){
  var request = new XMLHttpRequest();
      request.open('POST', 'http://gravity-zero.fr/?url=post_ajax', true);
      request.setRequestHeader("Content-Type", "application/json");
      request.onreadystatechange = function () {
          if (request.readyState === 4) {
              if (request.status === 200) {
                  let res = JSON.parse(request.response);
                  console.log(res);
                  if (res) {
                      //On ferme la fenêtre quand on à la réponse de l'ajax.
                      //Pas besoin de chercher à rappeler get_infos(), au prochain chargement on aura l'info
                      window.close(); 
                  }else{
                      console.log("erreur");
                  }
              }else{
                console.log("Pas de statut 200")
              }
          }else{
            console.log("pb de readyState")
          }
      }
      let datas = JSON.stringify(data);
      request.send(datas);
}