{{--@section('title', '{{$house->property->name}}');--}}
<title>{{$house->property->name}} - Jarming</title>
@include('layouts.v2.navmaster');
 <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{$house->property->name}}</h1>
              <span class="color-text-a">{{$house->property->city}}</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="/all">Propiedades</a>
                </li>
                
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            @foreach (json_decode($house->property->images) as $image)
              <div class="carousel-item-b">
                <img src="/uploads/property/house/{{$image}}" alt="">
              </div>
            @endforeach
            </div>
            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span class="ion-money">$</span>
                    </div>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c">{{number_format($house->property->amount,2)}} {{$house->property->currency}}</h5>
                    </div>
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Resúmen</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Propiedad ID:</strong>
                        <span>{{$house->property->id}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Ubicación:</strong>
                        <span>{{$house->property->city}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Tipo de propiedad:</strong>
                        <span>{{$house->property->type}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Estado:</strong>
                        <span>{{$house->property->contractType}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Área:</strong>
                        <span>{{$house->size}}m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Habitaciones:</strong>
                        <span>{{$house->noOfRooms}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Baños:</strong>
                        <span>{{$house->noOfWashrooms}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Pisos:</strong>
                        <span>{{$house->noOfFloors}}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Descripción</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                        {!! $house->property->description !!}
                  </p>
                </div>
              {{--  <div class="row section-t3">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Amenities</h3>
                    </div>
                  </div>
                </div>
                <div class="amenities-list color-text-a">
                  <ul class="list-a no-margin">
                    <li>Balcony</li>
                    <li>Outdoor Kitchen</li>
                    <li>Cable Tv</li>
                    <li>Deck</li>
                    <li>Tennis Courts</li>
                    <li>Internet</li>
                    <li>Parking</li>
                    <li>Sun Room</li>
                    <li>Concrete Flooring</li>
                  </ul>
                </div>
              </div>
            </div>--}}
          </div>
          <div class="col-md-10 offset-md-1">
            <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active">Mapa</a>
            </ul>
           
                <iframe class="iframe" src="https://maps.google.com/?ll={{$house->property->latitude}},{{$house->property->longitude}}&z=14&t=m&output=embed" height="450" width ="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
              
            </div>
          </div>
          <div class="col-md-12">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Contacta al Agente</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <img src="/uploads/avatars/{{$house->property->user->avatar}}" alt="" class="img-fluid">
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="property-agent">
                  <h4 class="title-agent">{{$house->property->user->name}}</h4>
                  <p class="color-text-a">
                    {{$house->property->user->description}}
                  </p>
                  <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                      <strong>Teléfono:</strong>
                      <span class="color-text-a">{{$house->property->user->phoneNo}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Email:</strong>
                      <span class="color-text-a">{{$house->property->user->email}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Skype:</strong>
                      <span class="color-text-a">{{$house->property->user->skype}}</span>
                    </li>
                  </ul>
                  <div class="socials-a">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-dribbble" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="property-contact">
                  <form action="/house/{{$house->id}}/contactowner" method="post" class="form-a">
                   @csrf
                    <div class="field">
                        <div class="control">
                        <input class="input" type="hidden" id="owner" name="owner" value="{{$house->property->user->id}}">
                        <input class="input" type="hidden" id="path" name="path" value="{{url()->current()}}">
                        
                        @if(Auth::check())
                            <input class="input" type="hidden" name="sender" value="{{auth()->user()->id}}">
                        @else
                            <input class="input" type="hidden" name="sender" value="0" hidden>
                        @endif
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="text" class="form-control form-control form-control-a {{ $errors->has('name') ? ' is-danger' : '' }}" id="name" name="name" placeholder="Name *" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input class="form-control {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" placeholder="Email *" id="email" name="email" required>
                        </div>
                      </div>
                    <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input class="form-control {{ $errors->has('pno') ? ' is-danger' : '' }}" type="tel" placeholder="Teléfono *" id="pno" name="pno" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="text" class="form-control form-control form-control-a {{ $errors->has('subject') ? ' is-danger' : '' }}" id="subject" name="subject" placeholder="Asunto *" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <textarea id="message" class="form-control {{ $errors->has('message') ? ' is-danger' : '' }}" placeholder="Commentario *" name="message" cols="45" rows="6" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-a">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->
  @include('layouts.v2.footer');
