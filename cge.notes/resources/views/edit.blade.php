<?php
@extends('layout')

@section('content')
    <h1>Edit Note</h1>
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $note->title }}" required>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required>{{ $note->content }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
