function onProductsCountChange() {
    const href = location.href.replace(/productsPerPage=.*/, 'productsPerPage=' + this.value);

    location.href = href.includes('?') ? href : '?productsPerPage=' + this.value;
}

function onDeleteProductButtonClick(e)
{
    $('#confirm-modal').modal('show');

    $('#delete-modal-btn').click(function () {
        $(e.target).parent().submit();

        $('#delete-modal-btn').off('click');
    });

    return false;
}

$('#select-products-count').click(onProductsCountChange);
$('.delete-product').click(onDeleteProductButtonClick);