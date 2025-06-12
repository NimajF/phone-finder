$(document).ready(function () {
  const $list = $('#product-list');
  $list.html('<p class="text-center">Cargando productos...</p>');

  $.get(`${API_BASE}/products?limit=9`, function (res) {
    $list.empty();

    res.products.forEach(product => {
      $list.append(`
        <div class="col">
          <div class="card shadow-sm">
            <img src="${product.thumbnail}" class="card-img-top" alt="${product.title}">
            <div class="card-body">
                <h5 class="card-title">${product.title}</h5>
                <p class="card-text text-muted">${product.brand}</p>
                <p class="card-text"><strong>$${product.price}</strong></p>
                <a href="product.php?id=${product.id}" class="btn btn-outline-primary">Ver más</a>
            </div>
          </div>
        </div>
      `);
    });
  });
});
