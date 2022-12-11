/* Autor: Rafael F. Andrade */

$(document).ready(function(){
  var temperature = {
    celsius : 0,
    fahrenheit : 0
  };
  
  var paramWeather = {
    "lat": "",
    "long" : "",
    "units" : "metric", // Celsius
    "appid" : "07e122641db44a4c386fa96e9e91ede0"
  };
  
  var urlGetWeather =  "https://cors-anywhere.herokuapp.com/http://api.openweathermap.org/data/2.5/weather?";
  
  $.getJSON('https://ipinfo.io/json', function(data){
    var local = data.loc.split(',');
    
    paramWeather.lat = local[0];
    paramWeather.long = local[1];
    
    $("#country").html(data.country);
    $("#city").html(data.city);
    
    urlGetWeather += "lat="+ paramWeather.lat + "&lon="+ paramWeather.long;
    urlGetWeather += "&units="+ paramWeather.units;
    urlGetWeather += "&appid="+ paramWeather.appid;
    
    $.getJSON(urlGetWeather, function(obj){
      var codeWeather = obj.weather[0].id;

      temperature.celsius = Math.round(obj.main.temp);
      temperature.fahrenheit = Math.round((obj.main.temp * 9)/5 + 32);

      defineBackground(codeWeather);
      
      $("#icon-weather i").addClass(whatIconClass(codeWeather));
      $("#temp-status").html(obj.weather[0].main);
      $("#temp-number").html(temperature.celsius);
    });
  });
  
  $("#btn-change").on("click", function(){
    var $tempType = $("#temp-type");
    if($tempType.text() === "C"){
      $("#temp-number").html(temperature.fahrenheit);
      $tempType.text("F");
    }
    else if($tempType.text() === "F"){
      $("#temp-number").html(temperature.celsius);
      $tempType.text("C");
    }
  });
});

function getDayPeriod() {
  var dateNow = new Date();
  var hour = dateNow.getHours();
  
  if(hour < 18 && hour >= 6){
    return "day";
  }
  else {
    return "night";
  }
}

/* JSON created by tbranyen on GitHub (https://gist.github.com/tbranyen/62d974681dea8ee0caa1)
  and adapted by me for this APP*/
function whatIconClass(code) {
  
    var weatherIcons = {
      "200": {
        "label": "thunderstorm with light rain",
        "icon": "storm-showers"
      },

      "201": {
        "label": "thunderstorm with rain",
        "icon": "storm-showers"
      },

      "202": {
        "label": "thunderstorm with heavy rain",
        "icon": "storm-showers"
      },

      "210": {
        "label": "light thunderstorm",
        "icon": "storm-showers"
      },

      "211": {
        "label": "thunderstorm",
        "icon": "thunderstorm"
      },

      "212": {
        "label": "heavy thunderstorm",
        "icon": "thunderstorm"
      },

      "221": {
        "label": "ragged thunderstorm",
        "icon": "thunderstorm"
      },

      "230": {
        "label": "thunderstorm with light drizzle",
        "icon": "storm-showers"
      },

      "231": {
        "label": "thunderstorm with drizzle",
        "icon": "storm-showers"
      },

      "232": {
        "label": "thunderstorm with heavy drizzle",
        "icon": "storm-showers"
      },

      "300": {
        "label": "light intensity drizzle",
        "icon": "sprinkle"
      },

      "301": {
        "label": "drizzle",
        "icon": "sprinkle"
      },

      "302": {
        "label": "heavy intensity drizzle",
        "icon": "sprinkle"
      },

      "310": {
        "label": "light intensity drizzle rain",
        "icon": "sprinkle"
      },

      "311": {
        "label": "drizzle rain",
        "icon": "sprinkle"
      },

      "312": {
        "label": "heavy intensity drizzle rain",
        "icon": "sprinkle"
      },

      "313": {
        "label": "shower rain and drizzle",
        "icon": "sprinkle"
      },

      "314": {
        "label": "heavy shower rain and drizzle",
        "icon": "sprinkle"
      },

      "321": {
        "label": "shower drizzle",
        "icon": "sprinkle"
      },

      "500": {
        "label": "light rain",
        "icon": "rain"
      },

      "501": {
        "label": "moderate rain",
        "icon": "rain"
      },

      "502": {
        "label": "heavy intensity rain",
        "icon": "rain"
      },

      "503": {
        "label": "very heavy rain",
        "icon": "rain"
      },

      "504": {
        "label": "extreme rain",
        "icon": "rain"
      },

      "511": {
        "label": "freezing rain",
        "icon": "rain-mix"
      },

      "520": {
        "label": "light intensity shower rain",
        "icon": "showers"
      },

      "521": {
        "label": "shower rain",
        "icon": "showers"
      },

      "522": {
        "label": "heavy intensity shower rain",
        "icon": "showers"
      },

      "531": {
        "label": "ragged shower rain",
        "icon": "showers"
      },

      "600": {
        "label": "light snow",
        "icon": "snow"
      },

      "601": {
        "label": "snow",
        "icon": "snow"
      },

      "602": {
        "label": "heavy snow",
        "icon": "snow"
      },

      "611": {
        "label": "sleet",
        "icon": "sleet"
      },

      "612": {
        "label": "shower sleet",
        "icon": "sleet"
      },

      "615": {
        "label": "light rain and snow",
        "icon": "rain-mix"
      },

      "616": {
        "label": "rain and snow",
        "icon": "rain-mix"
      },

      "620": {
        "label": "light shower snow",
        "icon": "rain-mix"
      },

      "621": {
        "label": "shower snow",
        "icon": "rain-mix"
      },

      "622": {
        "label": "heavy shower snow",
        "icon": "rain-mix"
      },

      "701": {
        "label": "mist",
        "icon": "sprinkle"
      },

      "711": {
        "label": "smoke",
        "icon": "smoke"
      },

      "721": {
        "label": "haze",
        "icon": "day-haze"
      },

      "731": {
        "label": "sand, dust whirls",
        "icon": "cloudy-gusts"
      },

      "741": {
        "label": "fog",
        "icon": "fog"
      },

      "751": {
        "label": "sand",
        "icon": "cloudy-gusts"
      },

      "761": {
        "label": "dust",
        "icon": "dust"
      },

      "762": {
        "label": "volcanic ash",
        "icon": "smog"
      },

      "771": {
        "label": "squalls",
        "icon": "day-windy"
      },

      "781": {
        "label": "tornado",
        "icon": "tornado"
      },

      "800": {
        "label": "clear sky",
        "icon": "sunny"
      },

      "801": {
        "label": "few clouds",
        "icon": "cloudy"
      },

      "802": {
        "label": "scattered clouds",
        "icon": "cloudy"
      },

      "803": {
        "label": "broken clouds",
        "icon": "cloudy"
      },

      "804": {
        "label": "overcast clouds",
        "icon": "cloudy"
      },


      "900": {
        "label": "tornado",
        "icon": "tornado"
      },

      "901": {
        "label": "tropical storm",
        "icon": "hurricane"
      },

      "902": {
        "label": "hurricane",
        "icon": "hurricane"
      },

      "903": {
        "label": "cold",
        "icon": "snowflake-cold"
      },

      "904": {
        "label": "hot",
        "icon": "hot"
      },

      "905": {
        "label": "windy",
        "icon": "windy"
      },

      "906": {
        "label": "hail",
        "icon": "hail"
      },

      "951": {
        "label": "calm",
        "icon": "sunny"
      },

      "952": {
        "label": "light breeze",
        "icon": "cloudy-gusts"
      },

      "953": {
        "label": "gentle breeze",
        "icon": "cloudy-gusts"
      },

      "954": {
        "label": "moderate breeze",
        "icon": "cloudy-gusts"
      },

      "955": {
        "label": "fresh breeze",
        "icon": "cloudy-gusts"
      },

      "956": {
        "label": "strong breeze",
        "icon": "cloudy-gusts"
      },

      "957": {
        "label": "high wind, near gale",
        "icon": "cloudy-gusts"
      },

      "958": {
        "label": "gale",
        "icon": "cloudy-gusts"
      },

      "959": {
        "label": "severe gale",
        "icon": "cloudy-gusts"
      },

      "960": {
        "label": "storm",
        "icon": "thunderstorm"
      },

      "961": {
        "label": "violent storm",
        "icon": "thunderstorm"
      },

      "962": {
        "label": "hurricane",
        "icon": "cloudy-gusts"
      }
    };
    var prefix = 'wi wi-';
    var icon = weatherIcons[code].icon;
    var dayPeriod = getDayPeriod();

    // If we are not in the ranges mentioned above, add a day/night prefix.
    if (!(code > 699 && code < 800) && !(code > 899 && code < 1000)) {
      icon = 'day-'+ icon;
    }

    // Finally tack on the prefix.
    return (prefix + icon);
}

function defineBackground(code){
  
  var imgBG = {
      "clear" : {
          "day" : "http://www.hostcgs.com.br/hostimagem/images/2484MJO8.gif",
          "night" : "http://s15.postimg.org/snfokm3zf/clear_night.gif",
          "colorIcon" : "#f1c40f"
        },
      "clouds" : {
          "day" : "http://s13.postimg.org/mzp1rpwif/clouds_day.gif",
          "night" : "http://www.hostcgs.com.br/hostimagem/images/164clouds_night.gif",
          "overcast" : "http://s15.postimg.org/fxbg7iw17/clouds_broken.gif",
          "colorIcon" : "#2c3e50"
        },
      "rain" : {
          "img" : "http://2.bp.blogspot.com/-PNrGZUMD4HA/VGtqXN106nI/AAAAAAAAcE8/aF8l-oRSGqg/s1600/rain.gif",
          "colorIcon" : "#3498db"
        },
      "thunderstorm" : {
          "img" : "http://static.businessinsider.com/image/54aaa38069beddb532870503/image.gif",
          "colorIcon" : "#e67e22"
        },
      "snow" : {
          "img" : "http://media.nbcdfw.com/images/1200*675/snow-122815.gif",
          "colorIcon" : "#16a085"
        }
  };
  
  var dayPeriod = getDayPeriod();
  var urlBG = "";
  var iconColor = "";
  
  if(code === 800 || code === 801) {
    urlBG = imgBG.clear[dayPeriod];
    iconColor = imgBG.clear.colorIcon;
  }
  else if(code >= 802 && code <= 804){
    urlBG = imgBG.clouds[dayPeriod];
    iconColor = imgBG.clouds.colorIcon;
    if(code === 804){
      urlBG = imgBG.clouds.overcast;
    }
  }
  else if(code >= 300 && code <= 531){
    urlBG = imgBG.rain.img;
    iconColor = imgBG.rain.colorIcon;
  }
  else if(code >= 200 && code <= 232){
    urlBG = imgBG.thunderstorm.img;
    iconColor = imgBG.thunderstorm.colorIcon;
  }
  else if(code >= 200 && code <= 232){
    urlBG = imgBG.snow.img;
    iconColor = imgBG.snow.colorIcon;
  }
  
  $("body").css("background-image", "url('"+  urlBG +"')");
  $("#icon-weather").css("color", iconColor);
}