@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete Report {{ $report->id }}</h1>
            <hr />

        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{ $report->id }}" method="POST">
                @csrf
                @method('DELETE')
                <br />
                <button class="btn btn-success" type="submit">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endsection
