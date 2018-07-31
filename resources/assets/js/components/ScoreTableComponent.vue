<template>
    <div id="main_table" class="row justify-content-center mt-5">
      <div class="col-md-12">
          <div class="card card-default">
            <div class="card-header">スコア</div>
            <div class="card-body">
              <table class="table table-sm">
                <tr>
                  <th>name</th>
                  <th>difficult_name</th>
                  <th>level</th>
                  <th>テクニカルスコア</th>
                  <th>バトルスコア</th>
                  <th>オーバーダメージスコア</th>
                  <th>play_count</th>
                  <th>clear</th>
                </tr>
                <tr v-for="score in scores">
                     <td>{{score.name}}</td>
                     <td>{{difficulties[score.difficulty_id - 1].name}}</td>
                     <td>{{score.level}}</td>
                     <td>{{score.technical_high_score}}</td>
                     <td>{{score.battle_high_score}}</td>
                     <td>{{score.over_damage_high_score}}</td>
                     <td>{{score.play_count}}</td>
                     <td>{{score.clear_flag}}</td>
                 </tr>
               </table>
            </div>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
        props: [
          'scores',
          'difficulties'
        ]
    }

</script>
