　  <x-app-layout>
　      <link rel="stylesheet" href={{asset('css/index.css')}}>
　       <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
        <x-slot name="header">>
            勉強記録
        </x-slot>
        
        <h1>勉強記録</h1>
        <form action="/" method="get">
            <input type="text" name="search_name" placeholder="検索">
            <input type="submit" name="submit" value="検索">
        </form>
    <canvas id="barChart"></canvas>
    <script>
        const posts=@json($posts);
        console.log(posts);
        
        const graph_labels=posts.map((post, index) => {
        console.log(post);
            return post.date;
        });
        console.log(graph_labels);
        
        const graph_data=posts.map(post => {
            return post.study_time;
        });
        
        let barCtx = document.getElementById("barChart");
        let barConfig = {
          type: 'bar',
          data: {
            labels: graph_labels,
            datasets: [{
              data: graph_data,
              label: 'label',
              backgroundColor: [  // それぞれの棒の色を設定(dataの数だけ)
                '#99FF99',
　　　　　　　　'#99FF99',
                '#99FF99',
              ],
              borderWidth: 1,
            }]
          },
        };
        let barChart = new Chart(barCtx, barConfig);
        
        
        
        
        
        // // 棒グラフの設定
        // let barCtx = document.getElementById("barChart");
        // let barConfig = {
        //   type: 'bar',
        //   data: {
        //     labels: ["", "", "", "", "", "",""],
        //     datasets: [{
        //       data: [10, 19, 6, 8, 2, 11,5],
        //       label: 'label',
        //       backgroundColor: [  // それぞれの棒の色を設定(dataの数だけ)
        //         '#99FF99',
　　　　　　　　// '#99FF99',
        //         '#99FF99',
        //         '#99FF99',
        //         '#99FF99',
        //         '#99FF99',
        //         '#99FF99'
        //       ],
        //       borderWidth: 1,
        //     }]
        //   },
        // };
        // let barChart = new Chart(barCtx, barConfig);
    </script>
        <div class='posts'>
            <table>
                <thead>
                   <tr>
                        <th>科目</th>
                        <th>勉強時間</th>
                        <th>日付</th>
                        <th>作成者</th>
                   </tr>
                </thead>
             @foreach($posts as $post)
                <div class='post'>
                    <tr>
                        <a href="/posts/{{ $post->id}}">
                        <td><a href="/posts/{{ $post->id}}"><h2 class='subject'>{{ $post->subject }}</h2></a></td>
                        <td><a href="/posts/{{ $post->id}}"><p class='study_time'>{{ $post->study_time }}時間</p></a></td>
                        <td><a href="/posts/{{ $post->id}}"><p class='date'>{{ $post->date }}</p></a></td>
                        </a>
                        <td>{{$post->user_id}}</td>
                    </tr>    
                </div>
             @endforeach
           </table>   
        </div>
        {{--<div class='paginate'>{{ $posts->links()}}</div>--}}
        <a href="/posts/create">追加</a>
    </x-app-layout>