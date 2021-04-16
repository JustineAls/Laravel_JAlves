@extends('layouts/layout')

@section('title', $task->title)

@section('main')
<div class="task-list">
    <div class="card">
        <div class="card-content">
            <p class="card-text">{{$task->description}}</p>
            <p class="card-date">{{ $task->created_at->isoFormat('\l\e dddd D MMMM Y')}}</p>
        </div>
    </div>
</div>
<div class="links-task">
    <a class="colonne red-btn" href="/task/{{ $task->id }}/delete" title="Delete task number {{ $task->id }} (Current tab)">Delete task</a>
    <a class="back" href="/" title="Return to homepage (Current tab)">Home</a>
</div>
@endsection