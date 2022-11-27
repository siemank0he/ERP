@extends('template')

@section('title')
    Lista faktur
@endsection

@section('content')
    <div class="container">
        @isset($invoice)


            <table>
                <tr>
                    <td>Nazwa faktury</td>
                    <td>{{ $invoice->name }}</td>
                </tr>
                <tr>
                    <td>Ilość</td>
                    <td> {{ $invoice->amount }} </td>
                </tr>
                <tr>
                    <td>Netto</td>
                    <td> {{ $invoice->price_netto }} zł</td>
                </tr>
                <tr>
                    <td>Brutto</td>
                    <td> {{ $invoice->price_brutto }} zł</td>
                </tr>
            </table>
        @endisset
    </div>
@endsection
