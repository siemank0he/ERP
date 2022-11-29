@extends('cards.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Dodaj nową kartę obiegową</div>
    <div class="card-body">

        <form action=" {{ url('cards') }} " method="post">
            {!! csrf_field() !!}
            <label>Tytuł karty obiegowej</label>
            <input type="text" name="card_title" id="card_title" class="form-control"><br>
            <label>Opis karty obiegowej</label>
            <input type="text" name="card_desc" id="card_desc" class="form-control"><br>
            <input type="submit" value="Zapisz" class="btn btn-success">
        </form>

    </div>
</div>

@stop
