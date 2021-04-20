var nav = document.getElementById("nav");
let open = document.getElementById("open");

open.addEventListener("click", () => {
  nav.classList.toggle("is-open");
  isDisplayed();
});

function isClosed() {
  let items = document.querySelectorAll(".item-link");
  items.forEach(
    item => "click",
    () => {
      nav.classList.remove(".is-open");
    }
  );
}

function isDisplayed() {
  let elements = document.querySelectorAll(".element");
  elements.forEach(element => {
    element.classList.toggle("is-displayed");
  });
}
