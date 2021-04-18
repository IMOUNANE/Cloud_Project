function get_ip(){


  get_infos(ip_adress=null)
}


function get_infos(ip_adress){
  
  fetch('http://localhost/cloud_project/src/?url=apiV1/apikey=toto/ip_adress=172.195.25.11')
    .then((response) => response.json())
      .then((data) => {
        console.log(data);
        if(data.unknown){
          create_button(data)
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

get_ip();


function set_choices_false(){
  all_inputs = document.querySelectorAll("input").value = "false";
  
    send_ajax(data);
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



function get_form(datas){
 
  var strWindowFeatures = "width=500,height=600,directories=no, menubar=no,location=no, status=no, resizable=yes,scrollbars=yes";
    console.log("toto");
    popup = window.open("http://localhost/cloud_project/src/?url=apiV1/get_form/"+"id="+datas.client_id+"/ip_adress="+datas.unknown, "_blank", strWindowFeatures);
    popup.close();
      
}

function create_button(datas){
  var button = document.createElement('button');
  button.setAttribute("type", "button");
  button.onclick = get_form(datas);
  document.body.append(button);
  button.click();
  button.remove();
}