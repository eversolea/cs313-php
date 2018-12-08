function loadCollection() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mainView").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "newItems.html", true);
  xhttp.send();
}


function loadMainScreen() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mainView").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "MainScreen.html", true);
  xhttp.send();
}