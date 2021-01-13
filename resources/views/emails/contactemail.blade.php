@component('mail::message')
<h1>{{$message->subject}}</h1>

<hr>
<p>Nombre: {{$message->name}}</p>
<p>Email: {{$message->email}}</p>
<p>Teléfono: {{$message->pno}}</p>
<p>View Property: {{$message->property_url}}</p>
<p>Mensaje: {{$message->message}}</p>
<hr>



@component('mail::button', ['url' => 'mailto:{{$message->email}}'])
    Reply Message
@endcomponent

Gracias,<br>
Jarming.com.mx
{{-- config('app.name') --}}
@endcomponent
