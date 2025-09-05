@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>My Tasks</h2>
        <a href="{{ route('tasks.create') }}" class="btn btn-success">Add Task</a>
    </div>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>
                    @if ($task->status === 'pending')
                    <span class="badge bg-warning text-dark">Pending</span>
                    @else
                    <span class="badge bg-success">Done</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('tasks.show', $task) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                    </form>
                    @if ($task->status === 'pending')
                    <form action="{{ route('tasks.done', $task) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">Done</button>
                    </form>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">No tasks found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection