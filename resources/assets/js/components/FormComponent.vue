<template>
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12">
            <div class="card card-default">
                <div class="card-header">絞り込みフィルター</div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-inline">
                      <div class="col-md-3">
                        <label>レベル</label>
                        <div class="form-inline">
                          <input type="text" class="form-control col-sm-5" v-model="form_data['level_start']">
                          <span class="col-sm-2">~</span>
                          <input type="text" class="form-control col-sm-5" v-model="form_data['level_end']">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <label for="difficult" >難易度</label>
                        <div class="form-inline">
                          <select v-model="form_data['difficulty']" class="form-control col-md-12" id="select">
                            <option value="">指定無し</option>
                            <option v-for="difficulty in difficulties">{{difficulty.name}}</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="name">user</label>
                        <input type="text" class="form-control col-md-12" id="user" v-model="form_data['user']">
                      </div>
                      <div class="col-md-4">
                        <label>オーバーダメージ</label>
                        <div class="form-inline">
                          <input type="number" class="form-control col-md-5" v-model="form_data['damage_score_start']">
                          <span class="col-md-2">~</span>
                          <input type="number" class="form-control col-md-5" v-model="form_data['damage_score_end']">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="form-inline">
                      <div class="col-md-3">
                        <label>回数</label>
                        <div class="form-inline">
                          <input type="number" class="form-control col-md-5" v-model="form_data['play_count_start']">
                          <span class="col-md-2">~</span>
                          <input type="number" class="form-control col-md-5" v-model="form_data['play_count_end']">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <label for="difficult">クリア</label>
                        <div class="form-inline">
                          <select v-model="form_data['clear']" class="form-control col-md-12" id="select">
                            <option value="">指定無し</option>
                            <option value="1">クリア済</option>
                            <option value="0">未クリア</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label>テクニカルスコア</label>
                        <div class="form-inline">
                          <input type="text" class="form-control col-md-5" v-model="form_data['score_start']">
                          <span class="col-md-2">~</span>
                          <input type="text" class="form-control col-md-5" v-model="form_data['score_end']">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label>バトルスコア</label>
                        <div class="form-inline">
                          <input type="number" class="form-control col-md-5" v-model="form_data['battle_score_start']">
                          <span class="col-md-2">~</span>
                          <input type="number" class="form-control col-md-5" v-model="form_data['battle_score_end']">
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-primary col-md-8" v-on:click="submit">絞り込み</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
          return {
            form_data: {user:this.first_user},
          }
        },
        props: [
          'first_user',
          'difficulties'
        ],
        mounted() {
            console.log('Component mounted.')
            
            this.$parent.getList(this.form_data)
        },
        methods: {
          submit: function (event) {
            // メソッド内の `this` は、 Vue インスタンスを参照します
            this.$parent.getList(this.form_data)
          }
        },
    }
</script>
