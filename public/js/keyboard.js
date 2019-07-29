shortcut.add("F2", function () {
  showProdutosF2();
});

shortcut.add("F3", function () {
  showClientesF3();
});

shortcut.add("F4", function () {
  showPagamentosF4();
});

function showProdutosF2() {
  Swal.fire({
    title: 'Pesquisar Produto',
    input: 'text',
  });
}

function showClientesF3() {
  Swal.fire({
    title: 'Pesquisar Cliente',
    input: 'text',
  });
}

function showPagamentosF4() {
  Swal.fire({
    title: 'Pesquisar Pagamento',
    input: 'text',
  });
}