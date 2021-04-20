<a href="index.php?url=logout">Déconnexion</a>

<h1>hello world your Admin</h1>

<form method="post" action="?url=client_script">
    <label for="script_1">Script à usage commercial</label>
    <input type="text" name="script_1" value="<?=$client_script_1?>">
    <label for="script_2">Script à usage Analytics</label>
    <input type="text" name="script_2"value="<?=$client_script_2?>">
    <label for="script_3">Script à ...</label>
    <input type="text" name="script_3" value="<?=$client_script_3?>">
    <label for="script_4">Script à ...</label>
    <input type="text" name="script_4" value="<?=$client_script_4?>">
    <input type="hidden" name="client_id" value="<?=$id_client?>">

    <input type=submit>
    
</form>
<div>
    <label for="script_path">Lien du Script</label>
    <input name="script_path" value="<?=$script_path?>" disabled="disabled">
    <button type="button">Copier le script</button><!--Ajouter js-->
</div>
