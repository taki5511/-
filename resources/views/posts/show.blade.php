    <x-app-layout>
        <link rel="stylesheet" href={{asset('css/show.css')}}>
        <x-slot name="header">
            勉強記録
        </x-slot>
        <h1>本日の勉強記録</h1>
        <div class='content'>
            <div class='content_post'>
                {{ $post->date }}
                <h2>勉強時間</h2>
                {{ $post->study_time }}時間    
                <hr>
                <h2>科目</h2>
                {{ $post->subject }}    
                <hr>
                <h2>まとめ・メモ</h2>
                {{ $post->body }}    
            </div>
        </div>
        <table>
            <tr>
                <td><div class='edit'>
                    <a href="/posts/{{ $post->id }}/edit">編集</a>
                    </div></td>
                <td><form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">削除</button> 
                </form></td>
                <td><div class='footer'>
                    <a href="/">戻る</a>
                </div></td>
            </tr>
        </table>
        <script>
            function deletePost(id) {
            'use strict'
            
               if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                   document.getElementById(`form_${id}`).submit();
               }
            }
        </script>
    </x-app-layout>