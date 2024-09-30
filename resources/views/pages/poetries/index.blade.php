@extends('layouts.app')

@section('content')
<div class="container">
    <h2>UpoetrY</h2>
    <a href="" class="btn btn-primary mb-3">Create New Poetry</a>

    @if($poetries->isEmpty())
        <p>You have no poetries yet.</p>
    @else
        <ul class="list-group">
            @foreach($poetries as $poetry)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <a href="">{{ $poetry->title }}</a>
                    <p class="text-muted">{{ $poetry->created_at->format('d M Y') }} | {{ ucfirst($poetry->privacy) }}</p>
                </div>
                <div>
                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pages.poetries.destroy', $poetry->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
