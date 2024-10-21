<x-app-layout>
         <link rel="stylesheet" href={{asset('css/diary_index.css')}}>
        <x-slot name="header">
            日記
        </x-slot>
        <h1>日記</h1>
         <div class='diaries'>
            <table>
              <thead>
                   <tr>
                        <th>タイトル</th>
                        <th>日付</th>
                   </tr>
                </thead>
                @foreach($diaries as $diary)
                    <div class='diary'>
                        
                            <tr>
                               
                                <td> <a href="/diaries/{{ $diary->id}}"><h2 class='title'>{{ $diary->title }}</h2> </a></td>  
                                <td><a href="/diaries/{{ $diary->id}}"><h3 class='date'>{{ $diary->date }}</h3></a></td>
                               
                            </tr>
                            <tr>
                                <td colspan="2"><a href="/diaries/{{ $diary->id}}"><p class='body'>{{ $diary->body }}</p></a></td>
                            </tr>
                       
                    </div>
                @endforeach
            </table>
        </div>
        <hr>
            <a href="/diaries/create">追加</a>
        <div class='paginate'>{{ $diaries->links()}}</div>
    </x-app-layout>
