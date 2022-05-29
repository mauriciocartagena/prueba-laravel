@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Reports</h1>
            <hr />

        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/create">Create New Report</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                    </tr>
                </thead>
                @foreach ($expenseReports as $expenseReport)
                    <tr>
                        <td> {{ $expenseReport->title }} </td>
                        <td>
                            <a href="/expense_reports/{{ $expenseReport->id }}" class="btn btn-dark">
                                {{ $expenseReport->title }} </a>
                        </td>
                        <td>
                            <a href="/expense_reports/{{ $expenseReport->id }}/edit">Edit</a>
                        </td>
                        <td>
                            <a href="/expense_reports/{{ $expenseReport->id }}/confirmDelete"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
