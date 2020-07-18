var accordions = document.getElementsByClassName('submenu-parent');
var adminSlideoutButton = document.getElementById('admin-slideout-button');

adminSlideoutButton.onclick = function () {
  this.classList.toggle('is-active');
  document.getElementById('admin-side-menu').classList.toggle('is-active');
}

for (var i = 0; i < accordions.length; i++) {

  if(accordions[i].classList){

  }

  accordions[i].onclick = function () {
    this.classList.toggle('is-active');

    var submenu = this.nextElementSibling;
    if (submenu.style.maxHeight) {
      // menu is open, we need to close it now
      submenu.style.maxHeight = null;
      submenu.style.marginTop = null;
      submenu.style.marginBottom = null;
    } else {
      // meny is close, so we need to open it
      submenu.style.maxHeight = submenu.scrollHeight + "px";
      submenu.style.marginTop = "0.75em";
      submenu.style.marginBottom = "0.75em";
    }
  }
}
