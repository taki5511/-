 <x-app-layout>
        <x-slot name="header">
       テスト
    </x-slot>
        <h1>テスト</h1>
         <hr>
        <form action='/tests' method="POST">
           @csrf
            <div class="date">
                <h2>日付</h2>
                <input type="date" name=test[date] value={{ old('test.date') }}>
                <p class="title__error" style="color:red">{{ $errors->first('test.date') }}</p>
            </div>
            <div class="subject">
                <h2>科目</h2>
                <input type="text" name=test[subject] placeholder="科目" value={{ old('test.subject') }}>
                <p class="title__error" style="color:red">{{ $errors->first('test.subject') }}</p>
            </div>
            <hr>
            <div class='title'>
                <h2>タイトル</h2>
                <input type="text" name=test[title] placeholder="タイトル"　value={{ old('test.title') }}>
                <p class="title__error" style="color:red">{{ $errors->first('test.title') }}</p>    
            </div>
            <div class="body">
                <h2>問題</h2>
                <textarea name="test[body]"  value={{ old('test.body') }}></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('test.body') }}</p>
            </div>
            <div class="answer">
                <h2>模範解答</h2>
                <textarea name="test[answer]" value={{ old('test.answer') }}></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('test.answer') }}</p>
            </div>
            <div class="image">
                <h2>問題解説添付</h2>
                <input type="file" name="image">
            </div>
            <hr>
            <input type="submit" value="追加">  　　　<a href="/test">✖</a>
        </form>
    </x-app-layout>