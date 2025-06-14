const productModal = document.getElementById('productModal');
productModal.addEventListener('show.bs.modal', event => {
  const button = event.relatedTarget; // Кнопка, которая открыла модальное окно
  const productName = button.getAttribute('data-product-name');
  const productCategory = button.getAttribute('data-product-category');
  const productDate =button.getAttribute('data-product-date');
  const productDescription = button.getAttribute('data-product-description');
  const productImage = button.getAttribute('data-product-image');

  // Заполняем модальное окно данными
  document.getElementById('modalProductCategory').textContent = productCategory;
  document.getElementById('modalProductName').textContent = productName;
  document.getElementById('modalProductDate').textContent = productDate;
  document.getElementById('modalProductDescription').textContent = productDescription;
  document.getElementById('modalProductImage').src = productImage;
});
