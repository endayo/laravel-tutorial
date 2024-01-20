<h1>{{ $post->title }} 編集</h1>

<form action="{{ route('post.edit', ['id' => $post->id]) }}" method="post">
    @csrf
    <div>
        <label for="">タイトル</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
        @error('title')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="">記事</label>
        <textarea name="content">{{ old('content', $post->content) }}</textarea>
        @error('content')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">更新</button>
</form>
