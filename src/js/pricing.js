// apparition au scroll

let ids = ["containerCustomPlan", "containerChangePricing"];

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