@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detalhes do Medicamento') }}</div>
                <table class="table">

                <tr>
                    <th>Número de Registro</th>
                    <td> {{ $medicine->tiss_code }} </td>
                </tr>
                <tr>
                    <th>Nome Comercial</th>
                    <td> {{  $medicine->commercial_name }} </td>
                </tr>
                <tr>
                    <th>Princípio Ativo</th>
                    <td> {{  $medicine->active_principle }} </td>
                </tr>
                <tr>
                    <th>Medicamento Genérico</th>
                    <td> {{  $medicine->is_generic }} </td>
                </tr>
                <tr>
                  <th>Unidade de Fracionamento</th>
                  <td>{{ $medicine->min_frac_unity  }}
                </tr>
                <tr>
                  <th>Medicamento Fracionável</th>
                  <td>{{ $medicine->is_frac  }}
                </tr>
                <tr>
                    <th>Disponibilidade</th>
                    <td> {{ $medicine->available_status }} </td>
                </tr>
                <tr>
                  <th>Status de Validade</th>
                  <td>{{ $medicine->valid_status  }}
                </tr>
                <tr>
                  <th>Quantidade Disponível</th>
                  <td>{{ $medicine->quantity  }}
                </tr>
                <tr>
                  <th>Data de Validade</th>
                  <td>{{ $medicine->val_date  }}
                </tr>
              </table>
            </div>
        </div>
    </div>
  </div>
@endsection
