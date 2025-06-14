const productModal = document.getElementById('productModal');
productModal.addEventListener('show.bs.modal', event => {
  const button = event.relatedTarget; // Кнопка, которая открыла модальное окно
  const productName = button.getAttribute('data-product-name');
  const productDate =button.getAttribute('data-product-date');
  const productDescription = button.getAttribute('data-product-description');
  const productImage = button.getAttribute('data-product-image');

  // Заполняем модальное окно данными
  document.getElementById('modalProductName').textContent = productName;
  document.getElementById('modalProductDate').textContent = 'Время создания проекта: ' + productDate;
  document.getElementById('modalProductDescription').textContent = 'Краткое описание: ' + productDescription;
  document.getElementById('modalProductImage').src = productImage;
});
