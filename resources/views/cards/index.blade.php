@extends('cards.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Laravel 9</h2>
                    </div>
                    <div class="card-body">
                        <a href=" {{ url('/cards/create') }} " class="btn btn-success btn-sm" title="Dodaj nową kartę">Dodaj</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Data</th>
                                        <th>Wartość</th>
                                        <th>Akcja</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ( $cards as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->value }}</td>
                                        <td>
                                            <a href="{{ url('/cards/' . $item->id) }}" title="Szczegóły" class="btn btn-secondary btn-sm">Szczegóły</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
