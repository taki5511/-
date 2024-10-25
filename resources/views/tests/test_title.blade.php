<x-app-layout>
        <link rel="stylesheet" href={{asset('css/index.css')}}>
        <x-slot name="header">
            テスト
     </x-slot>
        <h1>テスト</h1>
         <div class='tests'>
           <table>
              <thead>
                   <tr>
                        <th>タイトル</th>
                        <th>日付</th>
                   </tr>
                </thead>
                @foreach($tests as $test)
                    <div class='test'>
                        
                            <tr>
                                <td><a href="/tests/{{ $test->id}}"><h3 class='title'>{{ $test->title }}</h3></a></td>
                                <td><a href="/tests/{{ $test->id}}"><p class='date'>{{ $test->date }}</p></a></td>
                            </tr>
                    </div>
                @endforeach
            </table>
        </div>
        <div class='paginate'></div>
    </x-app-layout>