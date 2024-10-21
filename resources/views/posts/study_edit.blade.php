    <x-app-layout>
        <x-slot name="header">
       投稿記録
    </x-slot>
    
        <h1>本日の勉強記録</h1>
        <hr>
        <form action="/posts{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="date">
                <h2>日付</h2>
                <input type="date" name=post[date]>
                <p class="title__error" style="color:red">{{ $errors->first('post.date') }}</p>
            </div>
            <div class="time">
                <h2>勉強時間</h2>
                <input type="text" name=post[study_time] placehilder="勉強時間">
                <p class="title__error" style="color:red">{{ $errors->first('post.study_time') }}</p>
            </div>
            <hr>
            <div class="subject">
                <h2>科目</h2>
                <input type="text" name=post[subject] placehilder="科目名">
                <p class="title__error" style="color:red">{{ $errors->first('post.subject') }}</p>
            </div>
            <hr>
            <div class="body">
                <h2>まとめ・メモ</h2>
                <textarea name="post[body]" placehilder="今日も1日お疲れ様でした。"></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <hr>
            <input type="submit" value="追加">             <a href="/">✖</a>
        </form>
    </x-app-layout>