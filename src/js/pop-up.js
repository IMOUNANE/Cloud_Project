function get_infos(){
  fetch('?url=apiV1/apikey=fsd6f54sf/ip_adress=172.195.25.12', {
    method: 'POST',
    body: JSON.stringify(ip_adress)
  }).then(function(response) {
    return response.json();
  }).then(function(data) {
    console.log(data);
    if(data.unknown){
      set_infos(); 
    }else{
      if(data.user_choice_1){
        //script client à charger (exemple googleAds)
      }
      if(data.user_choice_2){
        //script client à charger (exemple googleAnalytics)
      }
      if(data.user_choice_3){
        //script client à charger
      }
      if(data.user_choice_4){
        //script client à charger
      }
    }
  })
}

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

function set_infos(){
  alert('On affiche le formulaire');
  //Et on traite l'information
}