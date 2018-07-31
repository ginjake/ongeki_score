<template>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">絞り込みフィルター</div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-inline">
                      <label class="col-sm-3">レベル</label>
                      <label for="difficult" class="col-sm-3">難易度</label>
                      <label for="name" class="col-sm-3">user</label>
                      <label for="nankna" class="col-sm-3">未実装</label>
                    </div>
                    <div class="form-inline">
                      <div class="col-sm-3 form-inline">
                        <input type="text" class="form-control col-sm-5" v-model="form_data['level_start']">
                        <span class="col-sm-2">~</span>
                        <input type="text" class="form-control col-sm-5" v-model="form_data['level_end']">
                      </div>
                      <div class="col-sm-3 form-inline">
                        <select v-model="form_data['difficulty']" class="form-control col-sm-12" id="select">
                          <option value="">指定無し</option>
                          <option v-for="difficulty in difficulties">{{difficulty.name}}</option>
                        </select>
                      </div>
                      <div class="col-sm-3 form-inline">
                        <input type="text" class="form-control col-sm-12" id="user" v-model="form_data['user']">
                      </div>
                      <div class="col-sm-2 form-inline">
                        <input type="text" class="form-control col-sm-12" id="name" v-model="form_data['name']">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-inline">
                      <label class="col-sm-3">回数</label>
                      <label for="difficult" class="col-sm-3">クリア</label>
                      <label for="name" class="col-sm-4">テクニカルスコア</label>
                      <label for="nankna" class="col-sm-2">未実装</label>
                    </div>
                    <div class="form-inline">
                      <div class="col-sm-3 form-inline">
                        <input type="number" class="form-control col-sm-5" v-model="form_data['play_count_start']">
                        <span class="col-sm-2">~</span>
                        <input type="number" class="form-control col-sm-5" v-model="form_data['play_count_end']">
                      </div>
                      <div class="col-sm-3 form-inline">
                        <select v-model="form_data['clear']" class="form-control col-sm-12" id="select">
                          <option value="">指定無し</option>
                          <option value="1">クリア済み</option>
                          <option value="0">未クリア</option>
                        </select>
                      </div>
                      <div class="col-sm-4 form-inline">
                        <input type="text" class="form-control col-sm-5" v-model="form_data['score_start']">
                        <span class="col-sm-2">~</span>
                        <input type="text" class="form-control col-sm-5" v-model="form_data['score_end']">
                      </div>
                      <div class="col-sm-2 form-inline">
                        <input type="text" class="form-control col-sm-12" id="nankna">
                      </div>
                    </div>
                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-primary col-sm-8" v-on:click="submit">絞り込み</button>
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
