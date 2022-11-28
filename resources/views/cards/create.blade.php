@extends('cards.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Dodaj dane</div>
    <div class="card-body">

        <form action=" {{ url('cards') }} " method="post">
            {!! csrf_field() !!}
            <label>Data</label>
            <input type="date" name="date" id="date" class="form-control"><br>
            <label>Wartość</label>
            <input type="text" name="value" id="value" class="form-control"><br>
            <input type="submit" value="Zapisz" class="btn btn-success">
        </form>

    </div>
</div>

@stop
