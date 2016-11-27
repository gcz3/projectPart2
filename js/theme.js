function addLightTheme() {
  var newlink = document.createElement("link");
  newlink.setAttribute("rel", "stylesheet");
  newlink.setAttribute("type", "text/css");
  newlink.setAttribute("href", "../../projectPart2/css/light_theme.css");

  document.getElementsByTagName("head").item(0).appendChild(newlink);
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function lightTheme() {
  var lightTheme = getCookie("lightTheme");
  if (lightTheme==0) {
    addLightTheme();
    document.cookie = "lightTheme=1;path=/projectPart2";
  }
}

function darkTheme() {
  var lightTheme = getCookie("lightTheme");
  if (lightTheme==1) {
    document.cookie = "lightTheme=0;path=/projectPart2";
    location.reload();
  }
}

var theme = getCookie("lightTheme");
if (theme==1) {
  addLightTheme();
}
