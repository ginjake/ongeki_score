let wait = 1000
var crawler_list = []
var result_area_html = '<div style="background-color:rgb(200,200,255);border-radius:10px;"><div id="disp_result_area" style="padding:10px;"></div></div>'
var level_list = [
    {id:3, name:"2"},
    {id:5, name:"3"},
    {id:7, name:"4"},
    {id:9, name:"5"},
    {id:11, name:"6"},
    {id:13, name:"7"},
    {id:14, name:"7.5"},
    {id:15, name:"8"},
    {id:16, name:"8.5"},
    {id:17, name:"9"},
    {id:18, name:"9.5"},
    {id:19, name:"10"},
    {id:20, name:"10.5"},
    {id:21, name:"11"},
    {id:22, name:"11.5"},
    {id:23, name:"12"},
    {id:24, name:"12.5"},
    {id:25, name:"13"},
    {id:26, name:"13.5"},
]

function save_csv(data) {
  let blob = new Blob([json2csv(data)], {type: 'text/csv'});
  let url  = URL.createObjectURL(blob);

  let a = document.createElement("a");

  a.href = url;
  a.target = '_blank';
  a.download = 'ongeki_score.csv';

  a.click();
}

function json2csv(json) {
    let header = Object.keys(json[0]).join(',') + "\n";

    let body = json.map(function(d){
        return Object.keys(d).map(function(key) {
            return d[key];
        }).join(',');
    }).join("\n");

    return header + body;
}

function loadScript(src, callback) {
   let done = false;
   let head = document.getElementsByTagName('head')[0];
   let script = document.createElement('script');
   script.src = src;
   head.appendChild(script);
   // Attach handlers for all browsers
   script.onload = script.onreadystatechange = function() {
       if ( !done && (!this.readyState ||
               this.readyState === "loaded" || this.readyState === "complete") ) {
           done = true;
           callback();
           // Handle memory leak in IE
           script.onload = script.onreadystatechange = null;
           if ( head && script.parentNode ) {
               head.removeChild( script );
           }
       }
   };
}
function make_page_crawler(detail_crawler) {
  let crawl_id = 0
  let get_recursion = function() {
    $.ajax({
      type:"GET",
      //contentType: "text/html; charset=EUC-JP",
      url:"https://ongeki-net.com/ongeki-mobile/record/musicLevel/search/?level="+level_list[crawl_id].id,
      dataType:"html"
    }).done(response => {
      let obj = $('.container3 form', response)

        obj.each((index,element) => {
          let difficult;
          if ($('img:nth-child(2)', element)[0].src.match(/basic/)) {
              difficult = "BASIC"
          } else {
              return // id取るだけならbasicだけで良い
              if ($('img:nth-child(2)', element)[0].src.match(/advanced/)) {
                  difficult = "ADVANCED"
              }
              if ($('img:nth-child(2)', element)[0].src.match(/expert/)) {
                  difficult = "EXPERT"
              }
              if ($('img:nth-child(2)', element)[0].src.match(/master/)) {
                  difficult = "MASTER"
              }
          }
          //console.log($('.music_label', element).text())
          const id = $('input', element).val()
          const name = $('.music_label', element).text()
          const level = level_list[crawl_id].name
          let data = {
              id: id,
              difficult:difficult,
              level:level,
              name:name,
          }
          //console.log(data)
          crawler_list.push(data)
        });
        $("#disp_result_area").html("取得リストの作成中<br>"+crawl_id+"ページ目取得完了")

        crawl_id++

        if (crawl_id < level_list.length) {
            //setTimeout(detail_crawler, wait, crawler_list)
            setTimeout(get_recursion, wait)
        } else {
          setTimeout(detail_crawler, wait, crawler_list)
      }
    })
  }
  return get_recursion
}

function make_crawler() {
  let crawl_id = 0
  let score_csv_data = []

  var difficult_single_get = (music_data, selector_id, response) => {
      var block_obj = $('#'+selector_id, response)
      if (block_obj.length == 0) {
          return
      }
      var last_play = $(".music_label table tbody tr:first-child td:nth-child(2)", block_obj).text()
      var play_count = $(".music_label table tbody tr:nth-child(2) td:nth-child(2)", block_obj).text()
      var over_damage_high_score = $(".score_table  tbody tr:nth-child(2) td:nth-child(1)", block_obj).text()
      var battle_high_score = $(".score_table  tbody tr:nth-child(2) td:nth-child(2)", block_obj).text().replace(/,/g,"")
      var technical_high_score = $(".score_table  tbody tr:nth-child(2) td:nth-child(3)", block_obj).text().replace(/,/g,"")

      var clear_flag = 0
      if ($(".music_score_icon_area img:nth-child(1)", block_obj)[0].src.match(/music_icon_br_usually.png/)) {
          clear_flag = 1
      }

      var bell_flag = 0
      if ($(".music_score_icon_area img:nth-child(3)", block_obj)[0].src.match(/music_icon_fb.png/)) {
          bell_flag = 1
      }

      var ab_flag
      if ($(".music_score_icon_area img:nth-child(4)", block_obj)[0].src.match(/music_icon_ab.png/)) {
          ab_flag = "AB"
      }
      if ($(".music_score_icon_area img:nth-child(4)", block_obj)[0].src.match(/music_icon_fc.png/)) {
          ab_flag = "FC"
      }

      let data = {
              music_id:music_data.id,
              music_name:music_data.name,
              difficulty:selector_id.toUpperCase(),
              over_damage_high_score:over_damage_high_score,
              battle_high_score:battle_high_score,
              technical_high_score:technical_high_score,
              play_count:play_count,
              clear_flag:clear_flag,
              bell_flag:bell_flag,
              ab_flag:ab_flag,
              last_play:last_play,
      }
      console.log(data)
      score_csv_data.push(data)
      $("#disp_result_area").html("music_id:"+music_data.id+"取得完了")
      $("#disp_result_area").append(JSON.stringify(data)+"<br><br>");
  }
  let get_detail_data = (response, music_data) => {

      difficult_single_get(music_data, "basic", response)
      difficult_single_get(music_data, "advanced", response)
      difficult_single_get(music_data, "expert", response)
      difficult_single_get(music_data, "master", response)
   };
  get_recursion = function(crawler_list) {
    console.log(crawl_id)
    $.ajax({
      type:"GET",
      url:"https://ongeki-net.com/ongeki-mobile/record/musicDetail",
      data:{idx:crawler_list[crawl_id].id},
      //contentType: "text/html; charset=EUC-JP",
      dataType:"html"
    }).done(response => {
      get_detail_data(response,crawler_list[crawl_id])
      crawl_id++
      if (crawl_id < crawler_list.length) {
        setTimeout(get_recursion, wait, crawler_list)
        //save_csv(score_csv_data)
      } else {
        save_csv(score_csv_data)
      }
    })
  }
  return get_recursion
}

loadScript("https://code.jquery.com/jquery-3.2.1.min.js", function() {
  $(".wrapper").append(result_area_html);
  detail_crawler = make_crawler()
  page_crawler = make_page_crawler(detail_crawler)
  page_crawler()

})
