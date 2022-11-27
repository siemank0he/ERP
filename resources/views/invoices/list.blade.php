@extends('template')

@section('title')
    Lista faktur
@endsection

@section('content')
    <div class="container">
        <table>
        @forelse ($invoicesList as $invoice)
            <tr>
                <td> {{ $invoice->name }} </td>
                <td> {{ $invoice->price_brutto }} </td>
                <td> <a href=" {{ url('/invoices', [$invoice->id]) }} ">Szczegóły</a> </td>
                <td> <a href=" {{ url('/invoices', [$invoice->id, 'edit']) }} ">Edycja</a> </td>
                <td> <a href=" {{ url('/invoices', [$invoice->id, 'delete']) }} ">Usuń</a> </td>
            </tr>
        @empty
            Brak rekordów!
        @endforelse
        </table>
    </div>
@endsection
