<?php session_start(); 
if (!empty($_POST)){
  foreach($_POST as $key => $value){
    $_SESSION[$key] = $value;
    setcookie($key, $value);
  }
}

?>

<form action="form.php" method="post">
 <p>Immatriculation : <input type="text" name="immat"  value= "<?php if (isset($_SESSION['immat'])) echo $_SESSION['immat']; ?>" <?php if (!empty($_POST) && $_POST['immat'] == '') echo 'style="border-color: red;"'?>/></p>
 <label for="cars">Type</label>
<select id="cars" name="cars">
  <option value="touristique"  <?php if (isset($_SESSION['cars']) && $_SESSION['cars'] == "touristique") echo "selected"; ?>>Touristique</option>
  <option value="sportive" <?php if (isset($_SESSION['cars']) && $_SESSION['cars'] == "sportive") echo "selected"; ?>>Sportive</option>
</select>
<p>Energie:</p>
  <input type="radio" id="essence" name="energie" value="essence" <?php if (isset($_SESSION['energie']) && $_SESSION['energie'] == "essence") echo "checked=checked"; ?>>
  <label for="essence">Essence</label><br>
  <input type="radio" id="diesel" name="energie" value="diesel" <?php if (isset($_SESSION['energie']) && $_SESSION['energie'] == "diesel") echo "checked=checked"; ?>>
  <label for="diesel">Diesel</label><br>
  <input type="radio" id="gpl" name="energie" value="gpl" <?php if (isset($_SESSION['energie']) && $_SESSION['energie'] == "gpl") echo "checked=checked"; ?>>
  <label for="gpl">GPL</label><br>
  <input type="radio" id="bio" name="energie" value="bio" <?php if (isset($_SESSION['energie']) && $_SESSION['energie'] == "bio") echo "checked=checked"; ?>>
  <label for="bio">Bioethanol</label><br>
<p>Kilometrage : <input type="text" name="kilometrage" value= "<?php if (isset($_SESSION['kilometrage'])) echo $_SESSION['kilometrage']; ?>" <?php if (!empty($_POST) && $_POST['kilometrage'] == '') echo 'style="border-color: red;"'?>/></p>
<p>Nombre de jours : <input type="number" name="nb_jour" value= "<?php if (isset($_SESSION['nb_jour'])) echo $_SESSION['nb_jour']; ?>" <?php if (!empty($_POST) && $_POST['nb_jour'] == '') echo 'style="border-color: red;"'?>/></p>
<p>Assurance : <input type="checkbox" id="assurance" name="assurance" value="assurance" <?php if (isset($_SESSION['assurance'])) echo "checked" ?> > </p>
<input type="reset" value="Reinitialiser">
<input type="submit" value="Valider">
</form>

<?php 
?>