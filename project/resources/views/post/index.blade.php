<h1>Hello Post Page!</h1>

<a href="{{ route('post.create') }}">新規作成</a>

<table class="table" border="1">
    <thead>
    <tr>
      <td>ID</td>
      <td>タイトル</td>
      <td>作成日</td>
      <td></td>
    </tr>
    </thead>
    <tbody>
        {{-- posts配列をループして、投稿記事の情報を表示 --}}
        @foreach ($posts as $post)
            <tr>
                <td><a href="{{ route('post.edit', ['id' => $post->id]) }}">{{ $post->id }}</a></td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                    <a href="{{ route('post.edit', ['id' => $post->id]) }}">編集</a>
                    <a href="{{ route('post.destroy', ['id' => $post->id]) }}">削除</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>