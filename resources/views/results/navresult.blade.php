<div class="container">
    <div class="is-centered">
        <a class="navbar-item is-centered is-horizontal-center" href="/">
            <img src="/img/logoblack.png"  width="112" height="28">
        </a>       
        <div class="buttons is-centered">
        @guest
          <a class="button is-light is-centered nounnounderlinebtn" href="/login">
            Iniciar sesión
          </a>
        @if (Route::has('register'))
          <a class="button is-primary is-centered nounnounderlinebtn" href="/register">
              <strong>Registro</strong>
          </a>
        @endif
        @else
        <a class="button is-primary is-centered nounderlinebtn" href="/profile">
            Mi perfil
          </a>
          <a class="button is-light is-centered nounderlinebtn" href="/logout">
              Cerrar sesión
            </a>
        </div>
    </div>
</div>
  <nav class="navbar" role="navigation" class="is-centered" aria-label="main navigation">
    <div class="navbar-brand">
      <a role="button" class="navbar-burger burger button is-primary" aria-label="menu" aria-expanded="false" onclick="document.querySelector('.below').classList.toggle('is-active');" data-target="belownav">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="belownav" class="navbar-menu below is-centered navsearch">
      <div class="navbar-start">
            <a class="navbar-item menuitemnav" href="/house">
                Casas
            </a>
            <a class="navbar-item menuitemnav" href="/land">
                Terrenos
            </a>
            <a class="navbar-item menuitemnav" href="/apartment">
                Departamentos
            </a>
            <a class="navbar-item menuitemnav" href="/building">
                Edificios
            </a>
            <a class="navbar-item menuitemnav" href="/warehouse">
              Bodegas
            </a>
            <a class="navbar-item menuitemnav" href="/blog">
              Blog
            </a>
            <a class="navbar-item menuitemnav" href="/about">
              Acerca
            </a>
            <a class="navbar-item menuitemnav" href="/contactus">
              Contacto
            </a>
      </div>
      <div class="navbar-end">
      <div class="navbar-item">
      @endguest
      </div>
    </div>
    </div>
  </nav>
