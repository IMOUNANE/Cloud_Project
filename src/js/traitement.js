//ON traite le formulaire ici
const urlcourante = document.location.href;
const cut_url = urlcourante.split('/id=')[1];
const client_id = cut_url.split('/ip_adress=')[0];
const ip_adress = cut_url.split('/ip_adress=')[1];

console.log("L'id client est : " + client_id, "et l'adresse ip est : " + ip_adress);

form = window.document.querySelector("form");

form.create("<input type='hidden' name='client_id' value='"+client_id+"'>")
form.write("<input type='hidden' name='ip_adress' value='"+ip_adress+"'>") // à refaire pour générer les inputs

var userChoice = {AllChoices:{},infos:{}};
var inputs = document.querySelectorAll("input")

//Passe toutes les value à false si le type de l'input est différent de hidden et les stock dans userChoice
function set_choices_false(){
  inputs.forEach(input => {
    if ((input.type !== "hidden")) {
      input.setAttribute("value", "false");
      userChoice.AllChoices[input.name] = input.value;
    } else {
      userChoice.infos[input.name] = input.value;
    }
  })
  console.log(userChoice); 
  //ajax send
  //Rappel de la fonction get_infos() au moment de la réponse de l'ajax
}

//Récupère les choix de l'utilisateur et les stock dans userChoice
function set_choices(){
  inputs.forEach(input => {
    if(input.checked) {
      input.setAttribute("value", "true");
      userChoice.AllChoices[input.name] = input.value;
    } else if (input.type === "hidden") {
      userChoice.infos[input.name] = input.value;
    } else { input.setAttribute("value", "false");
      userChoice.AllChoices[input.name] = input.value;
    }
    //send_ajax(data)
    //Rappel de la fonction get_infos() au moment de la réponse de l'ajax
  });
  console.log(userChoice);
}


function send_ajax(data){
  //traitement ajax
}