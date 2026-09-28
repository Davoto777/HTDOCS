<?php
$cantidad = $_POST['cantidad'];
?>
<form action="resultado.php" method="POST">
    <?php for ($i = 1; $i <= $cantidad; $i++): ?>
        n<?= $i ?>: <input type="number" name="numeros[]" required>
    <?php endfor; ?>
    <button>SUMAR</button>
</form>