@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Report </h1>
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
                <div class="form-group pb-2">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Type a email" />
                </div>
                <button class="btn btn-success" type="submit">
                    Send Email
                </button>
            </form>
        </div>
    </div>
@endsection
