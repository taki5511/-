　<x-app-layout>
        <x-slot name="header">
            テスト
        </x-slot>
        <h1>テスト</h1>
        <div class='content'>
            <div class='content_test'>
                <h2>科目</h2>
                {{ $test->subject }}
                <hr>
                <h2>タイトル</h2>
                {{ $test->title }}    
                <hr>
                {{ $test->body }}    
                <hr>
                
            </div>
        </div>
        @if($test->image_url)
        <div>
            <img src="{{ $test->image_url }}" alt="画像が読み込めません。">
        </div>
        @endif
        <table>
            <tr>
                <h3>解答</h3>
                <div class='answer'>
                    <textarea name="test[answer]"  value={{ old('test.answer') }}></textarea>
                </div>
                <a href='/tests/{{ $test->id }}/answer'>解答CHECK!</a>
            </tr>
            <tr>
                <td><div class='edit'>
                    <a href="/tests/{{ $test->id }}/edit">編集</a>
                </div></td>
               <td><form action="/tests/{{ $test->id }}" id="form_{{ $test->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteTest({{ $test->id }})">削除</button> 
                </form></td>
                <td><div class='footer'>
                    <a href="/test">戻る</a>
                </div></td>
            </tr>
        </table>
         <script>
            function deleteTest(id) {
            'use strict'
            
               if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                   document.getElementById(`form_${id}`).submit();
               }
            }
        </script>
    </x-app-layout>