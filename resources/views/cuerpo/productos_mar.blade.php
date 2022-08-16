@extends('base.base_marpemx')


@section('content')


      <section class="section section-sm section-first bg-default text-left">
        <div class="container">

          <div class="filter"> 
                  <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filtros<span class="fa fa-filter pl-1"></span>
                  </button>
                </div>
                <div id="mobile-filter" class="collapse">
                    <!-- <p class="pl-sm-0 pl-2"> Home | <b>All Breads</b></p> -->
                    <div class="border-bottom pb-2 ml-2">
                        <h4 id="burgundy">Filtros</h4>
                    </div>
                    <div class="py-2 border-bottom ml-3">
                        <h6 class="font-weight-bold">Categories</h6>
                        <div id="orange"><span class="fa fa-minus"></span></div>
                        <form>
                            <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Fresh Artisan Breads</label> </div>
                            <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Breakfast Breads</label> </div>
                            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Healthy Breads</label> </div>
                        </form>
                    </div>
                  <div class="py-2 border-bottom ml-3">
                      <h6 class="font-weight-bold">Accompainments</h6>
                      <div id="orange"><span class="fa fa-minus"></span></div>
                      <form>
                          <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Tea Cakes</label> </div>
                          <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Cookies</label> </div>
                          <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Pastries</label> </div>
                          <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Cookie Dough</label> </div>
                          <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
                      </form>
                  </div>
                  <div class="py-2 ml-3">
                      <h6 class="font-weight-bold">Top Offers</h6>
                      <div id="orange"><span class="fa fa-minus"></span></div>
                      <form>
                          <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
                          <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">5% off on artisan breads</label> </div>
                      </form>
                  </div>
                </div>

          <div class="row row-40 justify-content-xl-between">
            <div class="col-xl-3 d-none d-xl-block">                
              <div class="offset-left-xl-45">                            

                <div class="py-2 border-bottom ml-3">
                    <h6 class="font-weight-bold">Categories</h6>
                    <div id="orange"><span class="fa fa-minus"></span></div>
                    <form>
                        <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Fresh Artisan Breads</label> </div>
                        <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Breakfast Breads</label> </div>
                        <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Healthy Breads</label> </div>
                    </form>
                </div>
                <div class="py-2 border-bottom ml-3">
                    <h6 class="font-weight-bold">Accompainments</h6>
                    <div id="orange"><span class="fa fa-minus"></span></div>
                    <form>
                        <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Tea Cakes</label> </div>
                        <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Cookies</label> </div>
                        <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Pastries</label> </div>
                        <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Cookie Dough</label> </div>
                        <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
                    </form>
                </div>
                <div class="py-2 ml-3">
                    <h6 class="font-weight-bold">Top Offers</h6>
                    <div id="orange"><span class="fa fa-minus"></span></div>
                    <form>
                        <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
                        <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">5% off on artisan breads</label> </div>
                    </form>
                </div>               

              </div>
            </div>
            

            <div class="col-xl-9">
              <div class="container">
                <div class="d-flex flex-row">
                    <!-- <div class="text-muted m-2" id="res">Showing 44 results</div> -->
                    <!-- <div class="ml-auto mr-lg-4">
                        <div id="sorting" class="border rounded p-1 m-1"> <span class="text-muted">Sort by</span> <select name="sort" id="sort">
                                <option value="popularity"><b>Popularity</b></option>
                                <option value="prcie"><b>Price</b></option>
                                <option value="rating"><b>Rating</b></option>
                            </select> </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card"> <img class="card-img-top" src="{{asset('/images/Catalogo/Calzado Industrial/Calzadodielectrico1867585868.png')}}">
                            <div class="card-body">
                                <h5><b>Calzado Industrial</b> </h5>
                                <!-- <div class="d-flex flex-row my-2">
                                    <div class="text-muted">₹110/loaf</div>
                                    <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 loaf</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                                </div> <button class="btn w-100 rounded my-2">Add to cart</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card"> <img class="card-img-top" src="{{asset('images/Catalogo/Protección auditiva/Orejeras941553185.png')}}">
                            <div class="card-body">
                                <h5><b>Protección auditiva</b> </h5>
                                <!-- <div class="d-flex flex-row my-2">
                                    <div class="text-muted">₹35/piece</div>
                                    <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                                </div> <button class="btn w-100 rounded my-2">Add to cart</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card"> <img class="card-img-top" src="{{asset('/images/Catalogo/Protección para el cuerpo/Chalecos1443193982.png')}}">
                            <div class="card-body">
                                <h5><b>Protección para el cuerpo</b> </h5>
                                <!-- <div class="d-flex flex-row my-2">
                                    <div class="text-muted">₹80/loaf</div>
                                    <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 loaf</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                                </div> <button class="btn w-100 rounded my-2">Add to cart</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card"> <img class="card-img-top" src="{{asset('images/Catalogo/Protección visual/Lentesdeproteccion1091357457.png')}}">
                            <div class="card-body">
                                <h5><b>Protección visual</b> </h5>
                                <!-- <div class="d-flex flex-row my-2">
                                    <div class="text-muted">₹160/piece</div>
                                    <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                                </div> <button class="btn w-100 rounded my-2">Add to cart</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card"> <img class="card-img-top" src="{{asset('images/Catalogo/Protección respiratoria/Cubrebocas1452797759.png')}}">
                            <div class="card-body">
                                <h5><b>Protección respiratoria</b> </h5>
                                <!-- <div class="d-flex flex-row my-2">
                                    <div class="text-muted">₹85/piece</div>
                                    <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                                </div> <button class="btn w-100 rounded my-2">Add to cart</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card d-relative"> <img class="card-img-top" src="{{asset('images/Catalogo/Protección manual/Guantesconrecubrimiento393317952.png')}}">
                            <div class="card-body">
                                <h5><b>Protección manual</b> </h5>
                                <!-- <div class="rounded bg-white discount" id="orange">10% off</div>
                                <div class="d-flex flex-row my-2">
                                    <div class="text-muted price"><del>₹55</del>₹45/piece</div>
                                    <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span>1pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                                </div> <button class="btn w-100 rounded my-2">Add to cart</button> -->
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>      

@endsection