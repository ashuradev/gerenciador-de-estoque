document
    .getElementById('select-products-count')
    .onchange = function() {
        const href = location.href.replace(/productsPerPage=.*/, 'productsPerPage=' + this.value)

        location.href = href.includes('?') ? href : '?productsPerPage=' + this.value
    }