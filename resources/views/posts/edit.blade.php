        <x-app-layout>
        <x-slot name="header">
       投稿記録
    </x-slot>
    
        <h1>本日の勉強記録</h1>
        <hr>
        <form action='/posts/{{ $post->id }}' method="POST">
            @csrf
            @method('PUT')
            <div class="date">
                <h2>日付</h2>
                <input type="date" name=post[date] value={{ $post->date }}>
                <p class="title__error" style="color:red">{{ $errors->first('post.date') }}</p>
            </div>
            <div class="study_time">
                <h2>勉強時間</h2>
                <input type="text" name=post[study_time] placeholder="勉強時間" value={{ $post->study_time }}>
                <p class="title__error" style="color:red">{{ $errors->first('post.study_time') }}</p>
            </div>
            <hr>
            <div class="subject">
                <h2>科目</h2>
                <input type="text" name=post[subject] placeholder="科目名" value={{ $post->subject }}>
                <p class="title__error" style="color:red">{{ $errors->first('post.subject') }}</p>
            </div>
            <hr>
            <div class="body">
                <h2>まとめ・メモ</h2>
                <textarea name="post[body]" placeholder="今日は英単語の勉強をした。">{{ $post->body }}</textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <hr>
            <input type="submit" value="update">             <a href="/posts/{{ $post->id }}">✖</a>
        </form>
    </x-app-layout>