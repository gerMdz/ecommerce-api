@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => 'https://apatxee.com/'])
            <img src="https://storage.googleapis.com/media-ecommerce-alterhome/public/upload/products/small_TpzlDnMkPheuvPzj7Qf6vsWwHX7gOd5oTET.jpg"
                 height="40px" alt="">
        @endcomponent
    @endslot

    <div>
        <h1 style="text-align: center;font-size: 28px;">¡Pago exitoso!</h1>
        <br>
        <h2>¡Hola! {{$pay->name}}</h2>
        <p>Tu pago se ha procesado de forma exitosa, y tu compra fue enviada</p>
        <p>Referencia:</p>
        <h1>{{$pay->uuid}}</h1>
        <div>
            <div>
                @component('mail::button', ['url' => 'https://apatxee.com/purchases'])
                    Ver detalles
                @endcomponent
            </div>
        </div>


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <!-- footer here -->
@endcomponent
@endslot
@endcomponent