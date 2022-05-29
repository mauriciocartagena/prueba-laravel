@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Create Expense</h1>
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
            <br />
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports" method="POST">
                @csrf
                <div class="form-group pb-2">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Type a title"
                        value="{{ old('title') }}" />
                </div>
                <button class="btn btn-success" type="submit">
                    Create
                </button>
            </form>
        </div>
    </div>
@endsection
