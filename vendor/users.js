const by = i("by");
const term = i("term");
const userForm = i("u-search");
const output = i("search-output");

// SEARCH AS YOU TYPE ON TERM
term.onkeyup = function () {
  if (term.value.trim().length > 0) {
    // SEND TO AJAX
    let searchCheck = new XMLHttpRequest();
    searchCheck.onreadystatechange = function () {
      if ((this.readyState = 4 && this.status == 200)) {
        output.innerHTML = this.responseText;
      } else {
        output.innerHTML = "";
      }
    };
    searchCheck.open("POST", "control/users.php", true);
    searchCheck.setRequestHeader(
      "Content-type",
      "application/x-www-form-urlencoded"
    );
    searchCheck.send(`term=${term.value}&by=${by.value}&searchCheck=1`);
  }
};

// SUBMIT FORM
userForm.onsubmit = function (e) {
  e.preventDefault();
  output.innerHTML =
    "<p style='text-align: center; font-size: 20px; '>LOADING ...</p>";
  if (term.value.trim().length > 0) {
    // SEND TO AJAX
    let searchCheck = new XMLHttpRequest();
    searchCheck.onreadystatechange = function () {
      if ((this.readyState = 4 && this.status == 200)) {
        output.innerHTML = this.responseText;
      } else {
        output.innerHTML = "";
      }
    };
    searchCheck.open("POST", "control/users.php", true);
    searchCheck.setRequestHeader(
      "Content-type",
      "application/x-www-form-urlencoded"
    );
    searchCheck.send(`term=${term.value}&by=${by.value}&searchCheck=1`);
  }
};
