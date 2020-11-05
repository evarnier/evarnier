<html>
<head>

</head>
<body>
    
<?php
$_POST = "zone de texte"; // le texte stocké dans la variable $_POST

// bouton selectionner
function afficher(){
    echo "selectionne";
    }
?>



<form action="" method="post">
<input type="_POST" value="<?php echo $_POST; ?>" name="_POST"/> <!-- champs de texte contenant le contenu de la variable $_POST -->
</form>


<!--bouton -->
<form>
    <input type="submit" name="selectionner" value="selectionner" onclick="afficher();">
</form>






</body>

</html>
