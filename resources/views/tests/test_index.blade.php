<x-app-layout>
        <link rel="stylesheet" href={{asset('css/test_index.css')}}>
        <x-slot name="header">
            テスト
     </x-slot>
        <h1>科目選択</h1>
        <div class='tests'>
           <table>
                @foreach($tests as $test)
                    <div class='test'>
                        <tr>
                            <td> <a href="/tests/title"><h2 class='subject'>{{ $test->subject }}</h2> </a></td>  
                        </tr>
                    </div>
                @endforeach
            </table>
        </div>
        <hr>
        テストを<a href="/tests/create"><button type="button">追加</button></a>
    </x-app-layout>