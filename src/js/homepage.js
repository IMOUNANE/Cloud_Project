// apparition au scroll

let ids = ["store", "control", "settings", "informations", "start", "price"];

ids.forEach(function(id) {
  let element = document.getElementById(id);

  let waypoint = new Waypoint({
    element: element,
    handler: function(direction) {
      element.classList.add("is-reached");
    },
    offset: "75%"
  });
});
