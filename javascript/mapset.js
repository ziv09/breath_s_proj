// var url = 'https://ruienyuski.github.io/git_test/itaiwan.json';//定位座標
var url = 'http://127.0.0.1:8080/sai_xampp/git%20push/breath_s_proj/json/place.json';//定位座標

function initMap() {
  //設定中心點座標

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: { lat: 24.149431, lng: 120.683551 }
  });

  callAjax(url);

  function callAjax(url) {
    var xhr = new XMLHttpRequest();
    xhr.open('get', url, true);
    xhr.send(null);

    xhr.onload = function () {

      var record = JSON.parse(xhr.responseText);
      wifiData = record.result.records;
      len = wifiData.length;


      //跑迴圈依序將值塞入到 marker
      for (i = 0; i < wifiData.length; i++) {
        var str = {};
        var place = {};

        place.lat = parseFloat(wifiData[i]['lat']);
        place.lng = parseFloat(wifiData[i]['lng']);

        str.map = map;
        // str.title = wifiData[i]['地點']
        str.position = place;
        console.log(str);
        new google.maps.Marker(str);
      }
    };
  };
}
