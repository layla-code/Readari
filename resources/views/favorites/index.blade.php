@extends('layouts.app')
@section('title', 'Favorites articles page')
@section('content')
<div class="container mt-5">
@forelse($favorites as $article)
    <div class="bg-light p-3 rounded mb-3 favorite-item" data-id="{{ $article->id }}">
        <h5 class="mb-1">{{ $article->Title }}</h5>
        <p class="text-muted mb-1">{{ $article->Description }}</p>

        <button class="btn btn-sm btn-danger remove-favorite-btn" data-id="{{ $article->id }}">
            Remove from Favorites
        </button>
    </div>
@empty
    <p class="text-muted">You haven't added any favorites yet.</p>
@endforelse
   </div>
@endsection
@section('scripts')
  <script src="{{ asset('js/script.js') }}"></script>
@endsection