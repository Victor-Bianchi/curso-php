<div class="titulo">Upload e Download de Arquivos em PHP</div>

<?php
if(isset($_FILES) && isset($_FILES['arquivo'])) {
    $uploadPath = __DIR__.'/uploads';
    $archiveName = $_FILES['arquivo']['name'] = 'uploaded_'.$_FILES['arquivo']['name'];
    $fullPathArchive = $uploadPath."/".$archiveName;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp, $fullPathArchive)) {
        echo "Sucesso!";
    } else {
        echo "Erro...";
    }
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <input type="reset" value="Limpar">
    <button>Subir</button>
</form>