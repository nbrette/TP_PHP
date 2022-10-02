<?php 

require_once('pdo.php');

$pdo = new SQLLite();
$name = 'Robin';
//2. Récupérer tout le contenu de la table characters.
$character = $pdo->get('SELECT * FROM characters', []);
var_dump($character);
// 3. Récupérer uniquement la ligne d’un personnage dont le nom est fourni en paramètre.
$name = 'Robin';
$name_param = $pdo->get('SELECT * FROM characters WHERE name = :name', ['name' => $name]);
var_dump($name_param);  
// 5. optionnel : Insérer un nouveau personnage, fourni en paramètre sous forme de tableau.
$pdo->insert('INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES (:name ,:strength,:agility,:intelligence,:tribe,:class);', ['Bernardo',12,12,12,'Viking','warrior']);
?>