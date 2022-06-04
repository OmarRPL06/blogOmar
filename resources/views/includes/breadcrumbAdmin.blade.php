<link rel="stylesheet" href="/css/breadcrumb.css">

@if(! empty($breadcrumbs))

    <ul class="breadcrumb">

        <li><a href="{{ url("/dash") }}">Inicio</a></li>

        @foreach($breadcrumbs as $label => $link)


                @if(! empty( $link ) )

                    <li><a href="{{ $link }}">{{ $label }}</a></li>

                @else

                    <li class="desactived">{{ $label }}</li>

                @endif


        @endforeach

    </ul>

@endif


