<x-app-layout>
        <x-slot name="header">
       日記
    </x-slot>
        <h1>本日の日記</h1>
        <hr>
        <form action='/diaries/{{ $diary->id }}' method="POST">
            @csrf
            @method('PUT')
            <div class="date">
                <h2>日付</h2>
                <input type="date" name=diary[date] value={{ $diary->date }}>
                <p class="title__error" style="color:red">{{ $errors->first('diary.date') }}</p>
            </div>
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name=diary[title] placeholder="タイトル" value={{ $diary->title }}>
                <p class="title__error" style="color:red">{{ $errors->first('diary.title') }}</p>
            </div>
            <hr>
            <div class="body">
                <textarea name="diary[body]">{{ $diary->body }}</textarea>
                <p class="title__error" style="color:red">{{ $errors->first('diary.body') }}</p>
            </div>
            <hr>
            <input type="submit" value="update">              <a href="/diaries/{{ $diary->id }}">✖</a>
        </form>
    </x-app-layout>