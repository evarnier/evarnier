<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
 <?php 

 $NombreAleatoire = rand ( 0 , 100 );
  
  if($NombreAleatoire%2 == 1)
{
echo '<div class="paire"> </div> ';
}
else
{
    echo"<div> impaire </div>";

}


highlight_file((__FILE__));

?>
</body>
</html>