@section('title', 'Todas las Propiedades');
@include('layouts.v2.navmaster');
 <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Amazing Properties</h1>
              <span class="color-text-a">Grid Properties</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <form>
                <select class="custom-select">
                  <option selected>All</option>
                  <option value="1">New to Old</option>
                  <option value="2">For Rent</option>
                  <option value="3">For Sale</option>
                </select>
              </form>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">

        @foreach ($properties as $property)
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="/uploads/property/{{strtolower($property->type)}}/{{json_decode($property->images)[0]}}" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="/{{checkPropertyTypeById($property->id)}}/{{getPropertyTypeIdById($property->id)}}">
                      {{$property->name}}</h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">rent | ${{number_format($property->amount,2)}} MXN</span>
                    </div>
                    <a href="/{{checkPropertyTypeById($property->id)}}/{{getPropertyTypeIdById($property->id)}}" class="link-a">Más información
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Agente</h4>
                        <span>{{$property->user->name}}
                          
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Disponibilidad</h4>
                        <span>{{$property->availability}}</span>
                      </li>
                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

        </div>
        <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                <li class="page-item">
                 {{ $properties->links() }}
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->
  @include('layouts.v2.footer');