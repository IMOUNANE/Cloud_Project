function get_infos(){
  
  fetch('?url=apiV1/apikey=toto/ip_adress=172.195.25.12', {
    method: 'GET',
    body: JSON.stringify(ip_adress)
  }).then(function(response) {
    return response.json();
  }).then(function(data) {
    if(data.unknown){
      set_infos(data.unknown);
    }else{
      if(parseInt(data.user_choice_1, 10) === 1){ //On converti la string en nombre en base 10
        //script client à charger (exemple googleAds)
      }
      if(parseInt(data.user_choice_2, 10) === 1){
        //script client à charger (exemple googleAnalytics)
      }
      if(parseInt(data.user_choice_3, 10) === 1){
        //script client à charger
      }
      if(parseInt(data.user_choice_4, 10) === 1){
        //script client à charger
      }
      //Pas besoin de else, si la réponse est false (0) on ne charge pas les scripts clients
    }
  })
}



json = {script: '<script>alert</script>'}


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

function set_infos(ip_adress){
  alert('On affiche le formulaire');
  //Et on traite l'information
}