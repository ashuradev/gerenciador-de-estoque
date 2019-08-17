document
    .getElementById('select-products-count')
    .onchange = function() {
        location.href = '?productsPerPage=' + this.value
    }