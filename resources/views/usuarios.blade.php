{{$texto}}

@if($checagem == true)

    checagem = true

@else

checagem = false

@endif;

<br/>

@foreach($usuarios as $usuarios)
    {{$usuarios}} <br/>
@endforeach
