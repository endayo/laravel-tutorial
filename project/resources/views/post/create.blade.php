<h1>投稿新規作成</h1>

<form action="{{ route('post.create') }}" method="post">
    @csrf
    <div>
        <label for="">タイトル</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="">記事</label>
        <textarea name="content">{{ old('content') }}</textarea>
        @error('content')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">作成</button>
</form>
