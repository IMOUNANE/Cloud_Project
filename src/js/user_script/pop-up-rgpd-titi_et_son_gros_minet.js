
			function get_ip(){
				fetch("https://api.my-ip.io/ip.json")
				.then((response) => response.json())
					.then((data) => {
						var ip_adress = data["ip"];
						get_infos(ip_adress);
					});
				}
		
			function get_infos(ip_adress){
				fetch("http://localhost/cloud_project/src/?url=apiV1/apikey=WmaurbIZnMR911MtmgSh8f06UeQuSOwbj385mPzVJEAz/ip_adress="+ip_adress)
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
							if(parseInt(choices.user_choice_1, 10) === 1){

								body = document.querySelector("body")
								script = document.createElement("script")
								script.setAttribute("src", "")
								body.appendChild(script)
							}
							if(parseInt(choices.user_choice_2, 10) === 1){

								body = document.querySelector("body")
								script = document.createElement("script")
								script.setAttribute("src", "")
								body.appendChild(script)
							}
							if(parseInt(choices.user_choice_3, 10) === 1){

								body = document.querySelector("body")
								script = document.createElement("script")
								script.setAttribute("src", "")
								body.appendChild(script)
							}
							if(parseInt(choices.user_choice_4, 10) === 1){

								body = document.querySelector("body")
								script = document.createElement("script")
								script.setAttribute("src", "")
								body.appendChild(script)
							}
						}
				});
			}
			get_ip();
			function get_form(datas){
				var strWindowFeatures = "width=500,height=600,directories=no,titlebar=no,toolbar=no,menubar=no,location=no,status=no,resizable=no,scrollbars=yes";
				popup = window.open("http://localhost/cloud_project/src/?url=apiV1/get_form/"+"id="+datas.client_id+"/ip_adress="+datas.unknown, "_blank", strWindowFeatures);
			}
			function create_button(datas){
				var button = document.createElement("button");
				button.setAttribute("type", "button");
				button.onclick = get_form(datas);
				document.body.append(button);
				button.click();
				button.remove();
			}