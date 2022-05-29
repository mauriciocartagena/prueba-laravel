@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit Report {{ $report->id }}</h1>
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
            <br>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/expense_reports/{{ $report->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group pb-2">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Type a title" />
                </div>
                <button class="btn btn-success" type="submit">
                    Edit
                </button>
            </form>
        </div>
    </div>
@endsection
