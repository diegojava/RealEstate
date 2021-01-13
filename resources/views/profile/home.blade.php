<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Perfil de {{$user->name}}</title>

    {{-- CSS Files --}}
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/sweetalert2.min.css">
    
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600|Kanit:300,300i,400,400i,500,500i,600" rel="stylesheet">

</head>
<body>
    <div class="columns panelboard">
        <div class="column is-one-fifth sidebar">
            <aside class="menu">
                <figure class="image is-128x128 profileavatar" id="myBtn">
                    <img class="is-rounded is-centered has-text-centered avatarstyle" src="/uploads/avatars/{{auth()->user()->avatar}}">
                    <figcaption>
                      <h5 class="has-text-centered has-text-white"><span><i class="fas fa-cloud-upload-alt"></i></span><br>Change</h5>
                    </figcaption>	
                </figure>
                <p class="has-text-dark has-text-centered is-4 is-size-7 has-text-weight-bold is-uppercase">Bienvenido, {{auth()->user()->name}}</p>
                <p class="menu-label has-text-link is-4 is-size-7 has-text-weight-bold is-uppercase">
                  General
                </p>
                <ul class="menu-list listitem is-size-6">
                  <li><a href="/profile">Panel de control</a></li>
                  <li><a href="/profile/myfavorite">Mis favoritos</a></li>
                  {{-- <li><a href="/profile/myoffers">My Offers</a></li>
                  <li><a href="/profile/message">My Inbox</a></li> --}}
                </ul>
                <p class="menu-label has-text-link is-4 is-size-7 has-text-weight-bold is-uppercase">
                  Administración
                </p>
                <ul class="menu-list listitem">
                  <li><a href="/profile/editaccount">Editar perfil</a></li>
                  <li><a href="/profile/changepassword">Cambiar contraseña</a></li>
                  {{--<li><a href="/profile/deleteaccount">Eliminar cuenta</a></li>--}}
                </ul>
                <p class="menu-label has-text-link is-4 is-size-7 has-text-weight-bold is-uppercase">
                  Mis Propiedades
                </p>
                <ul class="menu-list listitem">
                  <li><a href="/profile/myhouse">Casas</a></li>
                  <li><a href="/profile/myland">Terrenos</a></li>
                  <li><a href="/profile/mybuilding">Edificios</a></li>
                  <li><a href="/profile/myapartment">Departamentos</a></li>
                  <li><a href="/profile/mywarehouse">Bodegas</a></li>
                </ul>
                <p class="menu-label has-text-link is-4 is-size-7 has-text-weight-bold is-uppercase">
                  Otros
                </p>
                <ul class="menu-list listitem">
                  <li><a href="{{ route('logout') }}">Cerrar sesión</a></li>
                </ul>
              </aside>
        </div>
          @if(Request::is('profile'))
            @include('profile.dashboard')
          @elseif(Request::is('profile/changepassword'))
            @include('profile.changepassword')
          @elseif(Request::is('profile/myoffers'))
            @include('profile.myoffers')
          @elseif(Request::is('profile/editaccount'))
            @include('profile.editprofile')
          @elseif(Request::is('profile/myfavorite'))
            @include('profile.favorite')
          @elseif(Request::is('profile/message/all'))
            @include('profile.allmessage')
          @elseif(Request::is('profile/message'))
            @include('profile.message')
          @elseif(Request::is('profile/sold'))
            @include('profile.marksold')
          @elseif(Request::is('profile/message/*/view'))
            @include('profile.viewmessage')
          @elseif(Request::is('profile/deleteaccount'))
            @include('profile.deleteaccount')
          @elseif(Request::is('profile/myhouse'))
            @include('profile.myhouse')
          @elseif(Request::is('profile/myland'))
            @include('profile.myland')
          @elseif(Request::is('profile/myapartment'))
            @include('profile.myapartment')
          @elseif(Request::is('profile/mybuilding'))
            @include('profile.mybuilding')
          @elseif(Request::is('profile/mywarehouse'))
            @include('profile.mywarehouse')
          @elseif(Request::is('profile/alloffers'))
            @include('profile.offers')
          @elseif(Request::is('profile/offers/*/contact'))
            @include('profile.contactoffer')
          @elseif(Request::is('profile/offers/*/contact/owner'))
            @include('profile.contactofferowner')
          @elseif(Request::is('profile/house/*/edit'))
            @include('profile.edithouse')
          @elseif(Request::is('profile/land/*/edit'))
            @include('profile.editland')
          @elseif(Request::is('profile/building/*/edit'))
            @include('profile.editbuilding')
          @elseif(Request::is('profile/apartment/*/edit'))
            @include('profile.editapartment')
          @elseif(Request::is('profile/warehouse/*/edit'))
            @include('profile.editwarehouse')  
          @else
            @include('profile.dashboard')
          
          @endif
        <div id="myModal" class="modal column is-half is-offset-one-quarter">
            <div class="modal-content">
                <div class="is-pulled-right">
                        <span class="close has-text-danger"><i class="far fa-times-circle"></i></span>
                </div>
                <p>Elige una foto de perfil</p>
                <form action="/profile/updateavatar" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="file has-name is-centered">
                            <label class="file-label">
                              <input class="file-input" type="file" name="avatar" id="file-input">
                              <span class="file-cta">
                                <span class="file-icon">
                                  <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">
                                  Elige una imagen…
                                </span>
                              </span>
                              <div class="file-name has-text-dark" id="file-name">
                                
                              </div>
                            </label>
                          </div>
                          <br>
                        <div class="field is-centered has-text-centered">
                          <button type="submit" class="button is-primary"><span class="savebutton">Guardar</span></button>
                        </div>
                </form>
            </div>   
        </div>
    </div>
    {{-- Footer --}}
    @include('layouts.footer')

    {{-- JavaScript Files --}}
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/sweetalert2.all.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    @include('sweet::alert')
    <script>
            
            var modal = document.getElementById('myModal');
            var btn = document.getElementById("myBtn");
            var span = document.getElementsByClassName("close")[0];
            btn.onclick = function() {
              modal.style.display = "block";
            }
            span.onclick = function() {
              modal.style.display = "none";
            }
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }

            //Display File Name
            var input = document.getElementById( 'file-input' );
            var infoArea = document.getElementById( 'file-name' );
            input.addEventListener( 'change', showFileName );
            function showFileName( event ) {      
            var input = event.srcElement;         
            var fileName = input.files[0].name;
            infoArea.textContent = 'File name: ' + fileName;
}
            </script>

</body>
</html>