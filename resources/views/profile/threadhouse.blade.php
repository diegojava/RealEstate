
<div class="col-sm-4 col-sm-3 center-responsive">
    <div class="column is-gaps is-12">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="/uploads/property/house/{{json_decode($house->property->images)[0]}}" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                    </div>
                    <div class="media-content">
                        <p class="is-6">
                            <span class="has-text-dark">Nombre :</span> {{$house->property->name}} <br>
                            <span class="has-text-dark">Ubicación :</span> {{$house->property->city}} <br>
                            <span class="has-text-dark">$</span> {{number_format($house->property->amount,2)}} MXN </p>
                    </div>
                </div>

                <div class="content">
                    <div class="buttons is-pulled-right">
                        <button class="button is-success is-pulled-right" onclick="window.open('/house/{{$house->id}}','_blank');">Ver más</button>
                        <button class="button is-warning is-pulled-right" onclick="window.open('/profile/house/{{$house->id}}/edit','_blank');">Editar</button>
                        <form action="/profile/house/{{$house->id}}/delete" method="post">
                            @csrf
                            <button class="button is-danger is-pulled-right" type="submit" onclick="deleteMe();">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
