document.addEventListener("DOMContentLoaded", () => {
  let menu = document.querySelector("#menu-btn");
  let header = document.querySelector(".header");

  if (menu && header) {
    menu.addEventListener("click", () => {
      menu.classList.toggle("fa-times");
      header.classList.toggle("active");
      document.body.classList.toggle("active");
    });
  } else {
    console.warn("Menu button or header not found.");
  }
});
