@extends('layouts.app')

@section('content')
    <h1>Create Ticket</h1>
    <form method="POST" action="{{ route('tickets.store') }}">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>
        <label>Description:</label>
        <textarea name="description" required></textarea>
        <label>Priority:</label>
        <select name="priority">
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
        </select>
        <label>OS:</label>
        <input type="text" name="os" required>
        <label>Software:</label>
        <input type="text" name="software" required>
        <button type="submit">Create</button>
    </form>
@endsection
