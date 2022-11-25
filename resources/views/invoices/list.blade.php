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
                <td> {{ $invoice->amount }} </td>
                <td> {{ $invoice->price_netto }} </td>
                <td> {{ $invoice->price_brutto }} </td>
            </tr>
        @empty
            Brak rekordów!
        @endforelse
        </table>
    </div>
@endsection
