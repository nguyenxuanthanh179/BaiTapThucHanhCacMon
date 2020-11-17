function showmenu() {
    var menu = document.getElementById("menu");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }

}

function money() {
  var money = document.getElementById("money");
  if (money.style.display === "none") {
    money.style.display = "block";
  } else {
    money.style.display = "none";
  }

}

function language() {
  var language = document.getElementById("language");
  if (language.style.display === "none") {
    language.style.display = "block";
  } else {
    language.style.display = "none";
  }

}

$(document).ready(function(){
  $("#button").click(function(){
      $(".show-category").toggle(500);
  });
});