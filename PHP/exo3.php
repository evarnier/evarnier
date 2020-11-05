<html>
 <head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="" >
 </head>
 <body>
 <?php
//$montableau = array("nom");
//echo '<table border="1"><tr>';

    $montableau[0][0][1]= 'nom';
    $montableau[0][1][0]= "prenom";
    $montableau[1][0][0]= "mdp";
    
    $montableau[0][0][2]= 'varnier';
    $montableau[0][2][0]= "evans";
    $montableau[2][0][0]= "jsp";


for ($i = 1; $i<3; $i++ )

{

?>
<html><table border="1"><tr>
<?php
echo "<td>".$montableau[0][0][$i]."</td>" ;
echo "<td>".$montableau[0][$i][0]."</td>";
echo "<td>".$montableau[$i][0][0]."</td>";
?>
</tr></table>
<?php

}





    /*
    tab[1]= arway("varnier", "evans", "pas d'inspi")
    tab[2]= arway("toujours", "pas", "2 mdp")
    ) ;
    echo " tab[0][0] ".tab0[1][0];
    echo " tab[0][1]  ".tab[1][0];*

*/?>
</body>
</html>