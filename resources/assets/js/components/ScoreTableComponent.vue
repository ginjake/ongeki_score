<template>
    <div class="container">
        <div id="main_table" class="row justify-content-center">
          <table>
            <tr>
              <th>name</th>
              <th>artist</th>
              <th>difficult_name</th>
              <th>level</th>
              <th>score</th>
              <th>play_count</th>
              <th>clear</th>
            </tr>
            <tr v-for="score in scores">
                 <td>{{score.name}}</td>
                 <td>{{score.artist}}</td>
                 <td>{{score.difficult_name}}</td>
                 <td>{{score.level}}</td>
                 <td>{{score.score}}</td>
                 <td>{{score.play_count}}</td>
                 <td>{{score.clear}}</td>
             </tr>
           </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
          'scores'
        ]
    }

</script>