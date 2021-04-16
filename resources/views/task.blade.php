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
<a class="colonne red-btn" href="/task/{{ $task->id }}/delete">Delete task</a>

@endsection