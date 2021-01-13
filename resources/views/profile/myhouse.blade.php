<link rel="stylesheet" href="/css/bootstrap.css">
<div class="column displaybox">
    @include('profile.navprofile')
    <nav class="breadcrumb has-arrow-separator has-background-white" aria-label="breadcrumbs">
        <ul>
            <li><a href="/profile">Perfil</a></li>
            <li class="is-active"><a href="/profile">Mis Propiedades: Casas</a></li>
        </ul>
    </nav>
    <div class="containerx">
        <div class="grayme">
            <div class="row">
                    @if($houses->count() > 0) 
                    @foreach ($houses as $house)
                        @include('profile.threadhouse') 
                    @endforeach 
                    @else
                        @include('profile.noresult')
                    @endif
            </div>
            {{ $houses->links() }}
        </div>
        
    </div>
</div>
<script>
    function deleteMe() {
    event.preventDefault();
    var form = event.target.form;
    Swal.fire({
        title: '¿Estás seguro de eliminar de tus propiedades?',
        text: "¡No podrás revertir esta acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: "hsl(141, 71%, 48%)",
        cancelButtonColor: "hsl(348, 100%, 61%)",
        confirmButtonText: 'Si, ¡borrar propiedad!',
        cancelButtonText: 'No, ¡cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            
            form.submit();

        } else if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.cancel
        ) {
            Swal.fire(
                '¡Listo!',
                'Tu propiedad está a salvo :)',
                'info'
            )
        }
    });
}
</script>