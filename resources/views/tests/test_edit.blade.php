 <x-app-layout>
        <x-slot name="header">
       テスト
    </x-slot>
        <h1>テスト</h1>
         <hr>
        <form action='/tests/{{ $test->id }}' method="POST">
           @csrf
           @method('PUT')
            <div class="date">
                <h2>日付</h2>
                <input type="date" name=test[date] value={{ $test->date }}>
                <p class="title__error" style="color:red">{{ $errors->first('test.date') }}</p>
            </div>
            <div class="subject">
                <h2>科目</h2>
                <input type="text" name=test[subject] placeholder="科目" value={{ $test->subject }}>
                <p class="title__error" style="color:red">{{ $errors->first('test.subject') }}</p>
            </div>
            <hr>
            <div class='title'>
                <h2>タイトル</h2>
                <input type="text" name=test[title] placeholder="タイトル"　value={{ $test->title }}>
                <p class="title__error" style="color:red">{{ $errors->first('test.title') }}</p>    
            </div>
            <div class="body">
                <h2>問題</h2>
                <textarea name="test[body]"  value={{ $test->body }}></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('test.body') }}</p>
            </div>
            <div class="answer">
                <h2>模範解答</h2>
                <textarea name="test[answer]" value={{ $test->answer }}></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('test.answer') }}</p>
            </div>
            <div class="image">
                <input type="file" name="image">
            </div>
            <hr>
            <input type="submit" value="追加">  　　　<a href="/tests/{{ $test->id }}">✖</a>
        </form>
    </x-app-layout>