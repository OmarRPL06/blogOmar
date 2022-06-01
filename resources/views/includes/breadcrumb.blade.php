<link rel="stylesheet" href="/css/breadcrumb.css">

@if(! empty($breadcrumbs))

    @foreach($breadcrumbs as $label => $link)

        <ul class="breadcrumb">

            <li><a href="{{ url("/") }}">Inicio</a></li>

            @if(! empty( $link ) )

                <li><a href="{{ $link }}">{{ $label }}</a></li>

            @else

                <li class="desactived">{{ $label }}</li>

            @endif

        </ul>

    @endforeach

@endif
