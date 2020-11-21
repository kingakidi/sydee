const close = i("sidebar-close");
const open = i("sidebar-open");
const sidebar = i("sidebar");

open.style.display = "none";
close.onclick = function () {
  open.style.display = "inherit";
  close.style.display = "none";
  sidebar.style.display = "none";
};
open.onclick = function () {
  open.style.display = "none";
  close.style.display = "inherit";
  sidebar.style.display = "block";
};
