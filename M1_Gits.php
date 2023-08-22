<!DOCTYPE html>
<html>
 
<body>
  <?php
    function css($rel, $href) {
        echo "<link rel='{$rel}' href='{$href}'>";
    }
  ?>

  <?php css("stylesheet", "style.css");?>

  <?php
    echo "<h1 class='mycss'>MSIB Batch 5</h1>";
  ?> 

  <?php
    echo "<p class='mycss2'>Nama        : Billy Chayady</p>"
  ?>
  <?php
    echo "<p class='mycss2'>Jurusan     : Teknik Informatika</p>"
  ?>
  <?php
    echo "<p class='mycss2'>Universitas : Universitas Mikroskil</p>"
  ?> 
 
</body>
</html>
