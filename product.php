<?php
require_once __DIR__ . '/includes/env.php';
include_once "includes/header.php";

$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) {
  die("Producto inválido.");
}
?>

<div id="product-detail" class="text-center">Cargando producto...</div>

<div class="text-center mt-4">
  <a href="index.php" class="btn btn-secondary">← Volver a inicio</a>
</div>

<script>
  const PRODUCT_ID = <?= json_encode((int) $id) ?>;
</script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="assets/js/product.js"></script>

<?php include_once "includes/footer.php"; ?>
