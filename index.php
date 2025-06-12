<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Productos y Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light">
    <div class="container">
        <?php include_once "includes/header.php"; ?>

        <header class="mb-5">
            <h1 class="mb-3">🛍️ Productos Destacados</h1>
            <p class="lead">Descubre nuestra selección de productos recomendados para ti.</p>
        </header>

        <section aria-labelledby="productos">
            <div id="product-list" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            </div>
            <div id="product-spinner" class="text-center my-4 d-none">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Cargando productos...</span>
                </div>
            </div>
        </section>

        <hr class="my-5">

        <?php include_once "includes/footer.php"; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php require_once __DIR__ . '/includes/env.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>
