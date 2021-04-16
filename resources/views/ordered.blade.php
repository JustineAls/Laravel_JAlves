@extends('layouts/layout')

@section('title', 'List of Tasks')

@section('main')
<a class="back" href="/" title="Link to the unordered list of tasks (Current tab)">Home</a>

<div class="task-list">
	@foreach($tasks as $task)
	<div class="card">
		<div class="card-content">
			<div class="content">
				<h3>{{ $task->title }}</h3>
			</div>
		</div>
		<div class="card-footer">
			<div class="boutons">
				<a class="colonne" href="/task/{{ $task->id }}" title="Detail of task number {{ $task->id }} (Current tab)" class="card-footer-item">Show task ></a>
				<a class="colonne red-btn" href="/task/{{ $task->id }}/delete" title="Delete task number {{ $task->id }} (Current tab)">Delete task</a>
			</div>
		</div>
	</div>
	@endforeach
</div>
@endsection