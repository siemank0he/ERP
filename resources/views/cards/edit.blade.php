@extends('cards.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edytuj dane</div>
    <div class="card-body">

        <form action="{{ url('/cards/' . $cards->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $cards->id }}">
            <label>Data</label>
            <input type="date" name="date" id="date" value="{{ $cards->date }}" class="form-control"><br>
            <label>Wartość</label>
            <input type="text" name="value" id="value" value="{{ $cards->value }}" class="form-control"><br>
            <input type="submit" value="Edytuj" class="btn btn-success">
        </form>

    </div>
</div>

@stop
