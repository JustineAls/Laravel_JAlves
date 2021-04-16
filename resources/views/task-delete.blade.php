@extends('layouts/layout')

@section('title', 'Delete')

@section('main')
<div class="task-list">
    Task {{ $id }} has been deleted successfully!

    <a class="back" href="/">Home</a>
</div>
@endsection