@extends('template')

@section('title')
    Lista faktur
@endsection

@section('content')
    <div class="container">
        @forelse ($invoicesList as $invoice)
            Tu będą dane ksiązki!
        @empty
            Brak rekordów!
        @endforelse
    </div>
@endsection
