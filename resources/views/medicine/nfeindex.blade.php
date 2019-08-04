@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header">{{ __('Lista de Notas Fiscais') }}

                </div>
                    <table class="table">
                        <tr>
                            <th>Identificador</th>
                            <th>Operação</th>
                            <th>Data de Emissão</th>
                            <th>Data de Saída/Entrada</th>
                            <th>Origem</th>
                            <th>Destinatário</th>
                        </tr>
                            @foreach($nfes as $item)
                            <tr>
                                <td>{{ $item->nfID }}</td>
                                <td>{{ $item->natOP }}</td>
                                <td>{{ $item->dhEmi }}</td>
                                <td>{{ $item->dhSaiEnt }}</td>
                                <td>{{ $item->xNome }}</td>
                                <td>{{ $item->dxNome }}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
