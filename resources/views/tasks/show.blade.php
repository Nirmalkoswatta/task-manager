@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Task Details</h2>
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
    <div class="d-flex justify-content-between">
        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection