@extends('layouts.app')

@section('content')
    <h1>All Tickets</h1>
    <a href="{{ route('tickets.create') }}">Create Ticket</a>
    @foreach ($tickets as $ticket)
        <div>
            <h3>{{ $ticket->title }} ({{ $ticket->priority }})</h3>
            <p>{{ $ticket->description }}</p>
            <p>Status: {{ $ticket->status }}</p>
        </div>
    @endforeach
@endsection
