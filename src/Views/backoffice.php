

<a href="index.php?url=logout">Déconnexion</a>
<h1>hello world your Admin</h1>






<div >
    <label for="" value="">
    <input type="text" name="script_1" value="">
<br>
    <label for="" value="">
    <input type="text" name="script_2"value="">
<br>
    <label for="" value="">
    <input type="text"name="script_3" value="">
<br>
    <label for="" value="">
    <input type="text"name="script_4" value="">
<br>

        <label for="key">Lien du Script</label>
        <input name="key" disabled="disabled" value="<?=$path[0]["script_path"]?>" >

        
   
    <button type="button"><a href="?url=generate&id=<?=$id?>"> Générer une nouvelle clé</button>
</div>