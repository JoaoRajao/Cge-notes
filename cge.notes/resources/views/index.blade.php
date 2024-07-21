<?php
@extends('layout')

@section('content')
    <h1>Notes</h1>
    <a href="{{ route('notes.create') }}">Create Note</a>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <ul>
        @foreach ($notes as $note)
            <li>
                <a href="{{ route('notes.show', $note->id) }}">{{ $note->title }}</a>
                <a href="{{ route('notes.edit', $note->id) }}">Edit</a>
                <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
