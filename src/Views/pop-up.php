<!--MODEL A GENERER EN JS-->
<form action="?url=post_ajax" method="POST">
  <label for="user_choice_1">Choix 1 [TITRE A DEFINIR]</label>
  <input type="radio" name="user_choice_1" value="1">
  <label for="user_choice_2">Choix 2 [TITRE A DEFINIR]</label>
  <input type="radio" name="user_choice_2" value="1">
  <label for="user_choice_3">Choix 3 [TITRE A DEFINIR]</label>
  <input type="radio" name="user_choice_3" value="1">
  <label for="user_choice_4">Choix 4 [TITRE A DEFINIR]</label>
  <input type="radio" name="user_choice_4" value="1">

  <button type="button" onclick="set_choices_false()">Tout refuser</button>
  <button type="button" onclick="set_choices()">Enregistrer</button>
</form>

<script type="text/javascript" src="http://localhost:80/cloud_project/src/js/pop-up.js"></script>

