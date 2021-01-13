<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir Propiedad - Jarming</title>

    {{-- CSS Files --}}
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/bootstrap.css"> {{-- Google Fonts --}}
    <link
        href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600|Kanit:300,300i,400,400i,500,500i,600"
        rel="stylesheet">
    <style>
        #map {
            height: 300px;
        }
    </style>
</head>

<body>
    @include('results.navresult')
    <br>
    <div class="title has-text-centered">Añadir casa/residencial</div>
    <br>
    <div class="container">
        <div class="columns is-mobile is-centered">
            <div class="column is-8">
                {{-- @include('layouts.errors') --}}
                @if(session()->has('message'))
                <div class="notification is-success">
                    <button class="delete"></button>
                    <h1 class="is-size-4"><b> {{ session()->get('message') }}</b></h1>
                </div>
                @endif
            </div>
        </div>

        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <label for="name">Nombre de la propiedad</label>
                            <input class="input is-primary {{ $errors->has('name') ? ' is-danger' : '' }}" type="text"
                                name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Tipo de propiedad</label>
                            <br>
                            <div class="select is-primary is-full {{ $errors->has('type') ? ' is-danger' : '' }}">
                                <select name="type">
                                    <option value="House">Casa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Precio de la propiedad</label>
                            <input class="input is-primary {{ $errors->has('amount') ? ' is-danger' : '' }}" type="text" name="amount" value="{{ old('amount') }}">
                            @if ($errors->has('amount'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('amount') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Divisa</label>
                            <br>
                            <div class="select is-primary is-full {{ $errors->has('currency') ? ' is-danger' : '' }}">
                                <select name="currency">
                                    <option value="MXN">MXN</option>
                                    <option value="USD">USD</option>
                                </select>
                            </div>
                        </div>
                    </div>
                     <div class="field">
                        <div class="control">
                            <label for="name">Tipo de Contrato</label>
                            <br>
                            <div class="select is-primary is-full {{ $errors->has('contractType') ? ' is-danger' : '' }}">
                                <select name="contractType">
                                    <option value="Venta">Venta</option>
                                    <option value="Renta">Renta</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Ciudad</label>
                            <br>
                            <div class="select is-primary is-full {{ $errors->has('city') ? ' is-danger' : '' }}">
                                <select name="city">
                                    <option>Ciudad de México</option>
                                    <option>Guadalajara</option>
                                    <option>Monterrey</option>
                                    <option>Estado de México</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Código postal</label>
                            <input class="input is-primary {{ $errors->has('postalcode') ? ' is-danger' : '' }}" type="text" name="postalcode" value="{{ old('postalcode') }}">
                            @if ($errors->has('postalcode'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('postalcode') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Provincia</label>
                            <br>
                            <div class="select is-primary is-full {{ $errors->has('province') ? ' is-danger' : '' }}">
                                <select name="province">
                                    <option value="Central">Central</option>
                                    <option value="Eastern">Eastern</option>
                                    <option value="North Central">North Central</option>
                                    <option value="North Western">North Western</option>
                                    <option value="Northern">Northern</option>
                                    <option value="Sabaragamuwa">Sabaragamuwa</option>
                                    <option value="Southern">Southern</option>
                                    <option value="Uva">Uva</option>
                                    <option value="Western">Western</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <label for="name">Descripción de la propiedad</label>
                            <textarea name="description" class="textarea is-primary {{ $errors->has('description') ? ' is-danger' : '' }}" value="{{ old('description') }}"></textarea>
                            @if ($errors->has('description'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('description') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">No. de contacto</label>
                            <input class="input is-primary {{ $errors->has('contactno') ? ' is-danger' : '' }}" type="text" name="contactno" 
                            value="{{Auth::user()->phoneNo}}">
                            @if ($errors->has('contactno'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('contactno') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Email de contacto</label>
                            <input class="input is-primary {{ $errors->has('contactemail') ? ' is-danger' : '' }}" type="text" name="contactemail"
                                value="{{Auth::user()->email}}">
                                @if ($errors->has('contactemail'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('contactemail') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    {{-- Image Upload Section --}}
                    <div class="field">
                        <div class="control">
                            <label for="img">Fotos de la propiedad <strong class="is-small">(Tip: Añade más de una imagen [Max
                                    Image Size: 4MB])</strong></label>
                            <div class="input-group control-group increment">
                                <input type="file" name="filename[]" class="form-control">
                                <div class="input-group-btn">
                                    <button class="button is-success addmore" type="button"><i
                                            class="glyphicon glyphicon-plus"></i>Más</button>
                                </div>
                            </div>

                            <div class="clone hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="filename[]" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="button is-danger" type="button"><i
                                                class="glyphicon glyphicon-remove"></i> Quitar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($errors->has('filename'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('filename') }}</strong>
                                </span> @endif
                    </div>
                    <div class="field">
                        <div class="control maphere">
                            <label for="name">Ubicación: Google Maps</label>
                            <input class="input is-primary " type="text" id="searchmap">
                            <div id="map" class="column"></div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Latitud</label>
                            <input class="input is-primary {{ $errors->has('lat') ? ' is-danger' : '' }}" type="text" name="lat" id="lat" value="{{ old('lat') }}">
                            @if ($errors->has('lat'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('lat') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Longitud</label>
                            <input class="input is-primary {{ $errors->has('lng') ? ' is-danger' : '' }}" type="text" name="lng" id="lng" value="{{ old('lng') }}">
                            @if ($errors->has('lng'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('lng') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                </div>
                {{-- next column start here --}}
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <label for="name">No de habitaciones</label>
                            <input class="input is-primary {{ $errors->has('rooms') ? ' is-danger' : '' }}" type="number" name="rooms" value="{{ old('rooms') }}">
                            @if ($errors->has('rooms'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('rooms') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">No de cocinas</label>
                            <input class="input is-primary {{ $errors->has('kitchen') ? ' is-danger' : '' }}" type="number" name="kitchen" value="{{ old('kitchen') }}">
                            @if ($errors->has('kitchen'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('kitchen') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">No de pisos</label>
                            <input class="input is-primary {{ $errors->has('floor') ? ' is-danger' : '' }}" type="number" name="floor" value="{{ old('floor') }}">
                            @if ($errors->has('floor'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('floor') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">No de baños</label>
                            <input class="input is-primary {{ $errors->has('washroom') ? ' is-danger' : '' }}" type="number" name="washroom" value="{{ old('washroom') }}">
                            @if ($errors->has('washroom'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('washroom') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                      <div class="field">
                        <div class="control">
                            <label for="name">Cajones de estacionamiento</label>
                            <input class="input is-primary {{ $errors->has('parkingSpaces') ? ' is-danger' : '' }}" type="number" name="parkingSpaces" value="{{ old('parkingSpaces') }}">
                            @if ($errors->has('parkingSpaces'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('parkingSpaces') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Tamaño(área)</label>
                            <input class="input is-primary {{ $errors->has('size') ? ' is-danger' : '' }}" type="number" name="size" value="{{ old('size') }}">
                            @if ($errors->has('size'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('size') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Alberca</label>
                            <br>
                            <div class="select is-primary {{ $errors->has('swimming') ? ' is-danger' : '' }}">
                                <select name="swimming">
                                    <option value="Available">Si</option>
                                    <option value="Not Available" selected>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Jardin</label>
                            <br>
                            <div class="select is-primary {{ $errors->has('garden') ? ' is-danger' : '' }}">
                                <select name="garden">
                                    <option value="Available">Si</option>
                                    <option value="Not Available" selected>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Escuela más cercana</label>
                            <input class="input is-primary {{ $errors->has('nschool') ? ' is-danger' : '' }}" type="text" name="nschool" value="{{ old('nschool') }}">
                            @if ($errors->has('nschool'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('nschool') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Carretera más cercana</label>
                            <input class="input is-primary {{ $errors->has('nrailway') ? ' is-danger' : '' }}" type="text" name="nrailway" value="{{ old('nrailway') }}">
                            @if ($errors->has('nrailway'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('nrailway') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Parada de autobús/metro cercana</label>
                            <input class="input is-primary {{ $errors->has('nbus') ? ' is-danger' : '' }}" type="text" name="nbus" value="{{ old('nbus') }}">
                            @if ($errors->has('nbus'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('nbus') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control is-pulled-right">
                            <button type="submit" class="button is-primary">
                                Añadir
                            </button>
                            <button type="reset" class="button is-warning">
                                
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <br>
    <br>
    </div>
    {{-- Footer --}}
    @include('layouts.footer') {{-- JavaScript Files --}}
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>s
    <script>
        tinymce.init({ selector:'textarea' });
    </script>
    <script>
        var map;
            function initAutocomplete() {
                map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 6.9814435, lng: 81.0741583},
                zoom: 15
                });

                var marker = new google.maps.Marker({
                position: {lat: 6.9814435, lng: 81.0741583},
                map: map,
                draggable: true,
                });

                var input = document.getElementById('searchmap');
                var searchBox = new google.maps.places.SearchBox(input);
                //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                google.maps.event.addListener(searchBox,'places_changed',function(){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i, place;
                    for (i = 0; place=places[i]; i++) {
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);
                        
                    }

                    map.fitBounds(bounds);
                    map.setZoom(15);
                });

                google.maps.event.addListener(marker,'position_changed',function(){
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();

                    $('#lat').val(lat);
                    $('#lng').val(lng);
                });
            }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKNG_uMsCgUvpLc_Adr2n9nwo6BWOImoM&libraries=places&callback=initAutocomplete"
        async defer></script>
    <script type="text/javascript">
        $(document).ready(function() {
    
          $(".addmore").click(function(){ 
              var html = $(".clone").html();
              $(".increment").after(html);
          });
    
          $("body").on("click",".is-danger",function(){ 
              $(this).parents(".control-group").remove();
          });
    
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                $notification = $delete.parentNode;
                $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                });
            });
        });
    </script>
</body>

</html>