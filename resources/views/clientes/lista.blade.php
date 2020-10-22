@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Clientes') }}
                    <a class="float-right" href="{{ url ('/clientes/novo') }}">Novo cliente</a></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            @if (Session::has('mensagem_sucesso'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('mensagem_sucesso') }}
                                </div>
                            @endif

                        <table class="table">
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Número</th>
                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->endereco}}</td>
                                    <td>{{$cliente->numero}}</td>
                                    <td>
                                        <a href="clientes/{{$cliente->id}}/editar" class="btn btn-default btn-sm">Editar</a>

                                        {!! Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$cliente->id, 'style'=>'display: inline;']) !!}
                                        <button type="submit" class="btn btn-default btn-sm">Excluir</button>
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
