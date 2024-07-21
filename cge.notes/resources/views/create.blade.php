<?php
@extends('layout')

@section('content')
    <h1>Create Note</h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
