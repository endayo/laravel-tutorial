@extends('layouts.app')

@section('content')
    <h1>Hello World</h1>
    <div class="mb-3">
        <div class="row row-cols-2 g-3">
            @foreach($pagination as $post)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mb-3">
        {{ $pagination->links() }}
    </div>
@endsection