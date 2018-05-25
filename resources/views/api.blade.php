@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">説明</div>

                <div class="card-body">
                  APIのリストです。<br>
                  パラメータは全部GETで投げてください<br>  
                </div>
            </div>
          
            <div class="card mt-5">
                <div class="card-header">スコアデータ取得</div>

                <div class="card-body">
                  <h3>URL</h3>
                  https://www.ginjake.net/ongeki/api/score
                  <h3>param</h3>
                  <table class="table-bordered">
                    <tr>
                      <th>name</th>
                      <th>必須</th>
                      <th>説明</th>
                      <th>例</th>
                    </tr>
                    <tr>
                      <td>user</td>
                      <td>〇</td>
                      <td>ユーザー名</td>
                      <td>test</td>
                    </tr>
                    
                    <tr>
                      <td>level_start</td>
                      <td></td>
                      <td></td>
                      <td>5</td>
                    </tr>
                    
                    <tr>
                      <td>level_end</td>
                      <td></td>
                      <td></td>
                      <td>13.5</td>
                    </tr>
                    
                    <tr>
                      <td>score_start</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>score_end</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>play_count_start</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>play_count_end</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>clear</td>
                      <td></td>
                      <td>クリア</td>
                      <td>0:未クリア 1:クリア</td>
                    </tr>
                    <tr>
                      <td>difficulty</td>
                      <td></td>
                      <td>難易度</td>
                      <td>BASICとかMASTER</td>
                    </tr>
                </table>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">難易度リスト</div>

                <div class="card-body">
                  <h3>URL</h3>
                  https://www.ginjake.net/ongeki/api/difficulty
                  <h3>param</h3>
                  <table class="table-bordered">
                    <tr>
                      <th>name</th>
                      <th>必須</th>
                      <th>説明</th>
                      <th>例</th>
                    </tr>
                    <tr>
                      <td>type</td>
                      <td></td>
                      <td>難易度リストを取得する</td>
                      <td>1:BASICとかMASTERとか普通っぽいの<br>
                      2:黒とかMASTER+とか裏とか重とか想定<br>
                      3:WorldEnd想定</td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
