/**
 * addLightTheme() returns nothing
 * adds the light theme stylesheet to a file to properly change the theme
 *
 * @return nothing
 */
function addLightTheme() {
  var newlink = document.createElement("link");
  newlink.setAttribute("rel", "stylesheet");
  newlink.setAttribute("type", "text/css");
  newlink.setAttribute("href", "../../projectPart2/css/light_theme.css");

  document.getElementsByTagName("head").item(0).appendChild(newlink);
}

/**
 * getCookie() returns the value of the lightTheme cookie
 * used to determine whether to use the dark or light theme for the site
 *
 * @return {String} value of cookie
 */
function getCookie() {
  var name = "lightTheme=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
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

// determines whether to add the light theme stylesheet when a page loads
var theme = getCookie();
if (theme==='1') {
  addLightTheme();
}
