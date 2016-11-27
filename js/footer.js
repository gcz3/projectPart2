/**
 * lightTheme() returns nothing
 * runs when "Light Theme" is clicked on the page and adds CSS file if it is
 * not already there and sets cookie
 *
 * @return nothing
 */
function lightTheme() {
  var lightTheme = getCookie();
  if (lightTheme==='0' || lightTheme==='') {
    addLightTheme();
    document.cookie = "lightTheme=1;path=/projectPart2";
  }
}

/**
 * darkTheme() returns nothing
 * runs when "Dark Theme" is clicked on the page and gets result of cookie
 * and if the light theme is currently being used, sets the cookie to off and
 * reloads the page
 *
 * @return nothing
 */
function darkTheme() {
  var lightTheme = getCookie();
  if (lightTheme==='1') {
    document.cookie = "lightTheme=0;path=/projectPart2";
    location.reload();
  }
}
