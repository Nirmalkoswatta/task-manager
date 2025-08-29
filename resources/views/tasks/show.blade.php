@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Task Details</h1>
    <div class="mb-3">
        <strong>Title:</strong> {{ $task->title }}
    </div>
    <div class="mb-3">
        <strong>Description:</strong> {{ $task->description }}
    </div>
    <div class="mb-3">
        <strong>Status:</strong> {{ ucfirst($task->status) }}
    </div>
    <div class="mb-3">
        <strong>Created At:</strong> {{ $task->created_at->format('Y-m-d') }}
    </div>
    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
