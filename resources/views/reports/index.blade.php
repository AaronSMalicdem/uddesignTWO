@extends('layouts.app')

@section('content')
<h1>Reports</h1>
<a href="{{ route('reports.create') }}" class="btn btn-primary">Add New Report</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>GCash</th>
            <th>Cash</th>
            <th>Print Sales</th>
            <th>Merch Sales</th>
            <th>Custom Sales</th>
            <th>Total Sales</th>
            <th>Print Expenses</th>
            <th>Merch Expenses</th>
            <th>Custom Expenses</th>
            <th>Total Expenses</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reports as $report)
        <tr>
            <td>{{ $report->id }}</td>
            <td>{{ $report->gcash }}</td>
            <td>{{ $report->cash }}</td>
            <td>{{ $report->print_sales }}</td>
            <td>{{ $report->merch_sales }}</td>
            <td>{{ $report->custom_sales }}</td>
            <td>{{ $report->total_sales }}</td>
            <td>{{ $report->print_expenses }}</td>
            <td>{{ $report->merch_expenses }}</td>
            <td>{{ $report->custom_expenses }}</td>
            <td>{{ $report->total_expenses }}</td>
            <td>
                <a href="{{ route('reports.edit', $report->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('reports.destroy', $report->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
