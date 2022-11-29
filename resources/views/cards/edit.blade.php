@extends('cards.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edytuj dane</div>
    <div class="card-body">

        <form action="{{ url('/cards/' . $cards->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $cards->id }}">
            <label>Tytuł</label>
            <input type="text" name="card_title" id="card_title" value="{{ $cards->card_title }}" class="form-control"><br>
            <label>Opis</label>
            <input type="text" name="card_desc" id="card_desc" value="{{ $cards->card_desc }}" class="form-control"><br>
            <input type="submit" value="Edytuj" class="btn btn-success">
        </form>

    </div>
</div>

@stop
