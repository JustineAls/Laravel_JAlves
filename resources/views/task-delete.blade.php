@extends('layouts/layout')

@section('title', 'Deleted successfully')

@section('main')
<div class="task-list success">
    Task {{ $id }} has been deleted successfully!

    <a class="back" href="/" title="Return to homepage (Current tab)">Home</a>
</div>
@endsection