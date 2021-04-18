function get_infos(){
  
  fetch('http://localhost/cloud_project/src/?url=apiV1/apikey=toto/ip_adress=172.195.25.12')
    .then((response) => response.json())
      .then((data) => {
        console.log(data);
        if(data.unknown){
          get_form(data.unknown);
        }else if(data.erreur){
          console.log(data.erreur);
        }else{
          choices = data.choices;
          console.log(choices);
          if(parseInt(choices.user_choice_1, 10) === 1){ //On converti la string en nombre en base 10
            console.log("Ok pour googleAds");//script client à charger (exemple googleAds)
          }
          if(parseInt(choices.user_choice_2, 10) === 1){
            console.log("Ok pour googleAnalytics");//script client à charger (exemple googleAnalytics)
          }
          if(parseInt(choices.user_choice_3, 10) === 1){
            console.log("Ok pour autres");//script client à charger
          }
          if(parseInt(choices.user_choice_4, 10) === 1){
            console.log("Ok pour autres+1");//script client à charger
          }
          //Pas besoin de else, si la réponse est false (0) on ne charge pas les scripts clients
        }
      });
}

get_infos();

function set_choices_false(){
  all_inputs = document.querySelectorAll("input").value = "false";
  //ajax send
  //Rappel de la fonction get_infos() au moment de la réponse de l'ajax
}

function set_choices(){
  inputs = document.querySelectorAll("input").value

  inputs.forEach(value => {
    console.log(value);
    //Récupérer choix utilisateurs ?
    //ajax send
    //Rappel de la fonction get_infos() au moment de la réponse de l'ajax
  });
}


function get_form(ip_adress){
  //créer le formulaire (modèle : views/pop-up.php) dans une balise alerte
  var windowObjectReference = window.open("http://localhost/cloud_project/src/?url=apiV1/get_form");

}