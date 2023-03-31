

<!-- Evitar la inyeccion de codigo malicioso a traves del html -->

<?php
extract($_GET);
if(isset($comentarios)) {
echo htmlspecialchars($comentarios);
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inyeccion por formulario</title>
</head>
<body>
  <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>">
    <textarea name="comentarios" cols="30" rows="10" 
    placeholder="Sus comentarios aquí"><?=$comentarios??''?></textarea>
    <br>
    <fieldset>
      <legend>Sexo</legend>
      <label>Mujer
      <input checked 
        <?=(!isset($sexo) || (isset($sexo) && $sexo==='m')) ? 'checked ' :  "" ?>
        type="radio" 
        value="m" 
        name="sexo"
      >

      </label>
      <label>Hombre
      <input type="radio" value="h" name="sexo">
      </label>
    </fieldset>
    <?php 
    $provincias = [
      "C" => "A coruña",
      "L" => "Lugo",
      "O" => "Ourense",
      "P" => "Pontevedra"
    ]
    ?>
    <select name="provincia" <?php 
    foreach($provincias as $key => $value) {
      $selected = (isset($provincias) && $key===$provincias) ? 'selected': '' ;
      echo "<option $selected value='$key'>$value</option>";
    }?>
    >
      <option selected value="C">A Coruña</option>
      <option value="L">Lugo</option>
      <option value="O">Ourense</option>
      <option value="P">Pontevedra</option>
    </select>
      <button>Enviar</button>
  </form>
</body>
</html>
