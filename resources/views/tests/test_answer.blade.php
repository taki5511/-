　<x-app-layout>
        <x-slot name="header">
            テスト
        </x-slot>
        <h1>テスト</h1>
        <div class='content'>
            <div class='content_test'>
                {{ $test->body }}    
                <hr>
                <h2>模範解答</h2>
                {{ $test->answer }}
            </div>
        </div>
        @if($test->image_url)
        <div>
            <img src="{{ $test->image_url }}" alt="画像が読み込めません。">
        </div>
        @endif
        <div class='footer'>
        <a href="/test">科目選択ページに    戻る</a>     <a href='/tests/{{ $test->id }}'>回答に戻る</a>
                </div>
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