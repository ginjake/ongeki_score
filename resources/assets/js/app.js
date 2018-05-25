
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('form-component', require('./components/FormComponent.vue'));
Vue.component('score-table-component', require('./components/ScoreTableComponent.vue'));
     

var Vueobj = new Vue({
      el: '#app',
      data: {
        scores: null
      },
      created: function(){
      },
      methods: {
       getList : function(send_data) {
           var vm = this;
           axios.get('//www.ginjake.net/ongeki/api/score',{
              params: send_data
            }) // => 成功時
           .then(function (response) {
             vm.scores = response.data.scores;
           })
           .catch(function (error) { // => 失敗時
             console.log("error");
           })
         }
     },
  })
