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
    <input id="script_path" name="script_path" value='<?='<script src="'.$script_path.'"></script>'?>' disabled="disabled">
    <input type="hidden" id="copy_link">
    <button type="button" onclick="copy_link()">Copier le script</button><!--Ajouter js-->
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
function copy_link(){
    let linkToCopy = document.getElementById('copy_link');
        linkToCopy.value = document.getElementById('script_path').value;
        linkToCopy.setAttribute('type', 'text');
        linkToCopy.select();

    let success = document.execCommand('copy');

    if(success){
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Lien copié avec succès !',
            showConfirmButton: false,
            timer: 1000
        })
        linkToCopy.value = '';
        linkToCopy.setAttribute('type', 'hidden');
    }
}
</script>
