@extends('cards.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Szczegóły karty</div>
    <div class="card-body">
        <h4 class="card-title">Data: {{$cards->date}}</h4>
        <p class="card-title">Wartość: {{$cards->value}}</p>
    </div>
    <div class="card-footer d-flex">
        <a href="{{ url('/cards/' . $cards->id . '/edit') }}" title="Edytuj" class="btn btn-primary btn-sm">Edytuj</a>

        <form action="{{ url('/cards/' . $cards->id) }}" method="POST" accept-charset="UTF-8">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Czy chcesz usunąć te dane? Data: {{ $cards->date }} Wartość: {{ $cards->value }}')" title="Usuń">Usuń</button>
        </form>
    </div>

</div>
