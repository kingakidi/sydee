let up = i("upload-form");
let t = i("title");
let u = i("user");
let course = i("course");
let aError = i("aError");
let uBtn = i("upload");

// upload.addEventListerner = function (e) {
//   console.log(e);
// };

t.onkeyup = function () {
  console.log(t.value);
};
up.onsubmit = function (e) {
  e.preventDefault();
  //   console.log(`${t.value} ${u.value} ${course.value}`);

  if (t.value.trim().length > 0) {
    let accessAjax = new XMLHttpRequest();
    accessAjax.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText !== "OK") {
          aError.innerHTML = this.responseText;
        } else {
          aError.innerHTML = this.responseText;
          cBtn.disable = false;
        }
      }
    };
    accessAjax.open("POST", "control/accessment.php", true);
    accessAjax.setRequestHeader(
      "Content-type",
      "application/x-www-form-urlencoded"
    );
    accessAjax.send(
      `ct=${t.value}&u=${u.value}&c=${course.value}&addAccessment=1`
    );
  }
};
