@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detalhes da GUIA') }}</div>
                <table class="table">

                <tr>
                    <th>Número de Registro</th>
                    <td> {{ $mrequest->reg_number }} </td>
                </tr>
                <tr>
                    <th>Nome do Beneficiário</th>
                    <td> {{  $mrequest->client_name }} </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td> {{  $mrequest->client_email }} </td>
                </tr>
                <tr>
                    <th>Telefone</th>
                    <td> {{  $mrequest->client_phone }} </td>
                </tr>
                <tr>
                  <th>Celular</th>
                  <td>{{ $mrequest->client_cellphone  }}
                </tr>
                <tr>
                  <th>Status da Guia</th>
                  <td>{{ $mrequest->status  }}
                </tr>
                <tr>
                    <th>Data de Cadastro</th>
                    <td> {{ $mrequest->created_at }} </td>
                </tr>
                <tr>
                  <th>Data de Validade</th>
                  <td>{{ $mrequest->val_date  }}
                </tr>
                <tr>
                  <th>Medicamentos</th>
                  <td>
                        <li>{{ $mrequest->medicines }}</li>

                  </td>
                </tr>
                <tr>
                  <th>Materiais</th>
                  <td>
                        <li>{{ $mrequest->materials }}</li>

                  </td>
                </tr>

              </table>
            </div>
        </div>
    </div>
  </div>
@endsection
