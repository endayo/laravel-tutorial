@extends('layouts.app')

@section('content')
<h1>投稿新規作成</h1>

<form action="{{ route('post.create') }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">タイトル</label>
        <input type="text" name="title" value="{{ old('title') }}" class="form-control">
        @error('title')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">記事</label>
        <textarea name="content" class="form-control">{{ old('content') }}</textarea>
        @error('content')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">作成</button>
</form>
@endsection
