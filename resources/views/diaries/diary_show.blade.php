　　<x-app-layout>
　　    <link rel="stylesheet" href={{asset('css/show.css')}}>
        <x-slot name="header">
            日記
        </x-slot>
        <h1>日記</h1>
        <div class='content'>
            <div class='content_diary'>
                {{ $diary->date }}
                <hr>
                <h2>タイトル</h2>
                {{ $diary->title }}    
                <hr>
                {{ $diary->body }}    
                <hr>
            </div>
        </div>
        @if($diary->image_url)
        <div>
            <img src="{{ $diary->image_url }}" alt="画像が読み込めません。">
        </div>
        @endif
        <table>
            <tr>
                <td><div class='edit'>
                    <a href="/diaries/{{ $diary->id }}/edit">編集</a>
                </div></td>
               <td><form action="/diaries/{{ $diary->id }}" id="form_{{ $diary->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteDiary({{ $diary->id }})">削除</button> 
                </form></td>
                <td><div class='footer'>
                    <a href="/diary">戻る</a>
                </div></td>
            </tr>
        </table>
         <script>
            function deleteDiary(id) {
            'use strict'
            
               if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                   document.getElementById(`form_${id}`).submit();
               }
            }
        </script>
    </x-app-layout>
