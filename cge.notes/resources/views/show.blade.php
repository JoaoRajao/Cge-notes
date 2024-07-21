<?php
@extends('layout')

@section('content')
    <h1>{{ $note->title }}</h1>
    <p>{{ $note->content }}</p>
    <a href="{{ route('notes.index') }}">Back to Notes</a>
@endsection
