<?php
session_start();
?>
<nav class="bara">
        
        <h4 class="logo"><a href='administrator.php'>CATALOG</a></h4>
       
    
    <ul class="butoane">
    <?php
        {
            echo"<li><a href='deconectare.inc.php'>Deconecteaza-te</a></li>";
            echo"<li><a href='adminProfesori.php'>Profesori</a></li>";
            echo"<li><a href='adminClase.php'>Clase</a></li>";   
        }
        
    ?>
        
    </ul>
    <div class="meniuLogo">
        <div class="linie1"></div>
        <div class="linie2"></div>
        <div class="linie3"></div>
    </div>
</nav>
<script src="bara.js"></script>