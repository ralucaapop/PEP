<?php
session_start();
require_once "verificaSesiuneE.inc.php";
?>
<nav class="bara">

<h4 class="logo">CATALOG</h4>
    
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