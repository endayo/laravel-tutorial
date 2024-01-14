<h1>Hello Post Page!</h1>

<a href="{{ route('post.create') }}">新規作成</a>

<table class="table" border="1">
    <thead>
    <tr>
      <td>ID</td>
      <td>タイトル</td>
      <td>作成日</td>
    </tr>
    </thead>
    <tbody>
        {{-- posts配列をループして、投稿記事の情報を表示 --}}
        @foreach ($posts as $post)
            <tr>
                <td><a href="#">{{ $post->id }}</a></td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>