@extends('cards.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Szczegóły karty</div>
    <div class="card-body">
        <h4 class="card-title">{{$cards->card_title}}</h4>
        <p class="card-title">{{$cards->card_desc}}</p>
    </div>

    <ul>
        @forelse ($cards->cardDetails as $detail)
            <li> Wartość: {{ $detail['value'] }} | Data: {{ $detail['date'] }}</li>
        @empty
            <p>Brak danych</p>
        @endforelse

    </ul>

    <div class="card-footer d-flex">
        <a href="{{ url('/cards/' . $cards->id . '/edit') }}" title="Edytuj" class="btn btn-primary btn-sm">Edytuj</a>

        <form action="{{ url('/cards/' . $cards->id) }}" method="POST" accept-charset="UTF-8">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Czy chcesz usunąć te dane?)" title="Usuń">Usuń</button>
        </form>
    </div>

</div>
