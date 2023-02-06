
<?php 

ob_start();
$title="Drapeaux";
?>

 
<h1 align='center'>Quel est le nom du pays</h1>
        
<img src="<?= $choice['url'];?>" alt="drapeau" style="display: block; margin: 0 auto;">

<div class="content">
   <form action="game.php" method="post">
        <input type="hidden" name="flag_name" value="<?= $choice["name"];?>">
        <input type="text" name="answere">
        <input type="submit" value="submit" name="submit">    
   </form>
   <a href="src\des.php"><button id="but">Fin</button></a>
</div>


<?php $content = ob_get_clean();

?>
<?php include 'layout.php'; ?>