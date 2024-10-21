 <x-app-layout>
        <x-slot name="header">
       日記
    </x-slot>
        <h1>本日の日記</h1>
         <hr>
        <form action='/diaries' method="POST" enctype="multipart/form-data">
           @csrf
            <div class="date">
                <h2>日付</h2>
                <input type="date" name=diary[date] value={{ old('diary.date') }}>
                <p class="title__error" style="color:red">{{ $errors->first('diary.date') }}</p>
            </div>
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name=diary[title] placeholder="タイトル" value={{ old('diary.title') }}>
                <p class="title__error" style="color:red">{{ $errors->first('diary.title') }}</p>
            </div>
            <hr>
            <div class="body">
                <textarea name="diary[body]"  value={{ old('diary.body') }}></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('diary.body') }}</p>
            </div>
            <div class="image">
                <input type="file" name="image">
            </div>
            <hr>
            <input type="submit" value="追加">  　　　<a href="/diary">✖</a>
        </form>
    </x-app-layout>