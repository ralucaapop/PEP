<?php
session_start();
require_once "verificaSesiune.Pinc.php";
?>
<nav class="bara">

<h4 class="logo"><a href='profesor.php'>CATALOG</a></h4>
    
    <ul class="butoane">
    <?php
        
            echo"<li><a href='deconectareP.inc.php'>Deconecteaza-te</a></li>";
        
        
        
    ?>
        
    </ul>
    <div class="meniuLogo">
        <div class="linie1"></div>
        <div class="linie2"></div>
        <div class="linie3"></div>
    </div>
</nav>
<script src="bara.js"></script>