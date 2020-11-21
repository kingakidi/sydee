let cf = i("course-form");
let ct = i("courseTitle");
let cError = i("course-error");
let cBtn = i("course");

ct.onkeyup = function () {
  // RUN CHECK ON COURSE EXISTENCE

  if (ct.value.trim().length > 0) {
    let courseAjax = new XMLHttpRequest();

    courseAjax.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText !== "OK") {
          cError.innerHTML = this.responseText;
          cBtn.disable = true;
          cBtn.style.visibility = "hidden";
        } else {
          cError.innerHTML = this.responseText;
          cBtn.disable = false;
          cBtn.style.visibility = "visible";
        }
      }
    };
    courseAjax.open("POST", "control/courses.php", true);
    courseAjax.setRequestHeader(
      "Content-type",
      "application/x-www-form-urlencoded"
    );
    courseAjax.send(`ct=${ct.value}&checkcourse=1`);
  } else {
    cError.innerHTML = "";
  }
};
cf.onsubmit = function (e) {
  e.preventDefault();

  if (ct.value.trim().length > 0) {
    //   CHECK AVAILABILITY
    let courseAjax = new XMLHttpRequest();
    courseAjax.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText !== "OK") {
          cError.innerHTML = this.responseText;
          cBtn.disable = true;
        } else {
          cError.innerHTML = this.responseText;
          cBtn.disable = false;
        }
      }
    };
    courseAjax.open("POST", "control/courses.php", true);
    courseAjax.setRequestHeader(
      "Content-type",
      "application/x-www-form-urlencoded"
    );
    courseAjax.send(`ct=${ct.value}&addcourse=1`);
  } else {
    cError.innerHTML = "";
  }
};
