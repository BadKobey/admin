@extends('layouts.main')

@section('content')
    <main>
        <!-- page__title-start -->
        <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/slider/top.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__title-inner text-center">
                            <h1>Корзина</h1>
                            <div class="page__title-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Корзина</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page__title-end -->

        <!-- cart-area start -->
        <section class="cart-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">

                            <!-- <div class="table-content table-responsive">
                              <table class="table">
                                  <thead>
                                  <tr>
                                      <th class="product-thumbnail">Images</th>
                                      <th class="cart-product-name">Наименование</th>
                                      <th class="product-price">Артикул</th>
                                      <th class="product-quantity">Количество</th>
                                      <th class="product-subtotal">Цена</th>
                                      <th class="product-remove">Remove</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td class="product-thumbnail"><a href="product-details.html"><img src="assets/img/cart/cart-1.jpg" alt=""></a></td>
                                      <td class="product-name"><a href="product-details.html">Фильтр</a></td>
                                      <td class="product-price"><span class="amount">11741</span></td>
                                      <td class="product-quantity">
                                          <div class="cart-plus-minus"><input type="text" value="1"><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                                      </td>
                                      <td class="product-subtotal"><span class="amount">357.00 руб.</span></td>
                                      <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                  </tr>

                                  </tbody>
                              </table>
                          </div> -->

                            <div class="row justify-content-end">
                                <div class="col-md-5">
                                    <div class="cart-page-total">
                                        <h2>Итого</h2>
                                        <ul class="mb-20">
                                            <li>Стоимость товара<span>0 руб. </span></li>
                                            <li>Стоимость с доставкой<span>0 руб.</span></li>
                                        </ul>
                                        <a class="btn-tp-2" href="checkout.html">Оформить заказ</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart-area end -->

    </main>
@endsection
