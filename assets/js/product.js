$(document).ready(function () {
  $.get(`${API_BASE}/products/${PRODUCT_ID}`, function (product) {
    $('#product-detail').html(`
      <div class="product-detail-container d-flex flex-column flex-md-row align-items-start gap-4">
        <div class="product-image-container text-center">
          <img src="${product.thumbnail}" class="img-fluid rounded shadow-sm" alt="${product.title}" style="max-height: 400px; object-fit: contain;">
        </div>

        <div class="product-info text-start">
          <h2 class="fw-bold">${product.title}</h2>
          <p class="text-muted mb-2">Marca: <strong>${product.brand}</strong></p>
          <p class="text-muted mb-3">Categoría: <span class="badge bg-secondary">${product.category}</span></p>

          <p class="lead">${product.description}</p>

          <div class="mt-3">
            <p class="fs-4 text-success fw-bold"> $${product.price}</p>
            <p><strong>Stock disponible:</strong> ${product.stock}</p>
            <p><strong>Calificación:</strong> ⭐ ${product.rating}</p>
          </div>

          <button class="btn btn-success mt-3 px-4 py-2">Agregar al carrito</button>
        </div>
      </div>
    `);
  }).fail(function () {
    $('#product-detail').html('<p class="text-danger">Producto no encontrado.</p>');
  });
});
