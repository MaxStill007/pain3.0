<div class="mt-5 mx-auto CustomWidth">
    <div class="row">
        @foreach ($products as $product)
          <div class="col-md-4 py-3 my-3 py-md-0">
            <div class="card bg-CustomBrown border-0">
              <img src="/img/{{$product->image}}" class="card-img-center m-4 float-center rounded-2" alt="" />
              <div class="card-body text-CustomWhite">
                <h3 class="headlines text-center">{{$product->name}}</h3>
                                                
                <button class="btn btn-CustomDimPrimary text-CustomWhite headlines fs-6 mt-3 mx-auto px-4 py-3 rounded-3 d-flex aligh-items-center justify-content-center"
                  data-bs-toggle="modal" data-bs-target="#productModal"
                  data-product-id="{{ $product->id }}"
                  data-product-category="{{ $product->category }}"
                  data-product-name="{{ $product->name }}"
                  data-product-date="{{ $product->created_at }}"
                  data-product-description="{{ $product->description }}"
                  data-product-image="/img/{{ $product->image }}"
                  data-product-stack="{{ $product->techstack }}"
                  >
                  <span class="material-icons-outlined pe-2">search</span>
                    Подробности
                </button>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>

<!-- Модальное окно -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 75%;">
            <div class="modal-content bg-CustomBrown text-CustomWhite">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Подробности о продукте</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <!-- Первая строка: изображение + информация -->
                        <div class="row align-items-start mb-3">
                            <!-- Изображение слева -->
                            <div class="col-md-4 mb-3 mb-md-0">
                                <img id="modalProductImage" src="" alt="Product Image" class="img-fluid rounded shadow">
                            </div>

                            <!-- Информация справа -->
                            <div class="col-md-7">
                                <p id="modalProductName" class="h4 mb-3 font-weight-bold"></p>
                                <p id="modalCategValue" class="text-light mb-0">
                                    <i class="bi bi-calendar me-2"></i>Категория программного обеспечения:
                                    <span id="modalProductCategory" class="ms-2"></span>
                                </p>
                                <p id="modalStackValue" class="text-light mb-0">
                                    <i class="bi bi-calendar me-2"></i>Используемые технологии:
                                    <span id="modalProductStack" class="ms-2"></span>
                                </p>
                                <p id="modalDateValue" class="text-light mb-0">
                                    <i class="bi bi-calendar me-2"></i>Дата релиза проекта:
                                    <span id="modalProductDate" class="ms-2"></span>
                                </p>
                                <!-- Дополнительные поля можно добавить здесь -->
                            </div>
                        </div>

                        <!-- Вторая строка: описание на всю ширину -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <h6 class="border-bottom pb-2 mb-3">Описание:</h6>
                                <p id="modalProductDescription" class="line-height-1-8"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-CustomDimPrimary text-CustomWhite text-center headlines" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>