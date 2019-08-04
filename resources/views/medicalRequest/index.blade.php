@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header">{{ __('Lista de Guias') }}

                </div>
                    <table class="table">
                        <tr>
                            <th>Número de Registro</th>
                            <th>Nome do Beneficiário</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Celular</th>
                            <th>Status da Guia</th>
                        </tr>
                            @foreach($mrequests as $item)
                            <tr>
                                <td>{{ $item->reg_number }}</td>
                                <td>{{ $item->client_name }}</td>
                                <td>{{ $item->client_email }}</td>
                                <td>{{ $item->client_phone }}</td>
                                <td>{{ $item->client_cellphone }}</td>
                                <td>{{ $item->status}}</td>

                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
