var dropdownVisible = false;
var utilityDropdownVisible = false;
var siteProgressDropdownVisible = false;

function toggleSiteProgressDropdown() {
  var floorDropdownContainer = document.getElementById("dropdownContainer");
  var utilityDropdownContainer = document.getElementById(
    "utilityDropdownContainer"
  );
  var siteProgressDropdownContainer = document.getElementById(
    "siteProgressDropdownContainer"
  );
  var twoDUnitPlans = document.querySelector(".two-d-unitplans");
  var threeDUnitPlans = document.querySelector(".three-d-unitplans");
  var constructionImagesContainer = document.querySelector(
    ".construction-img-container"
  );
  // var twoDUnitPlans = document.querySelector('.two-d-unitplans');
  // var threeDUnitPlans = document.querySelector('.three-d-unitplans');
  // twoDUnitPlans.style.display = 'none';
  // threeDUnitPlans.style.display = 'none';

  constructionImagesContainer.style.display = "block";
  siteProgressDropdownContainer.style.display = "block";
  floorDropdownContainer.style.display = "none";
  utilityDropdownContainer.style.display = "none";
  siteProgressDropdownContainer.style.display = "block";
  twoDUnitPlans.style.display = "none";
  threeDUnitPlans.style.display = "none";

  if (!siteProgressDropdownVisible) {
    document
      .querySelectorAll(
        ".floorplans-towerA, .floorplans-towerB, .floorplans-towerC"
      )
      .forEach((tower) => {
        tower.style.display = "none";
      });
  } else {
  }

  siteProgressDropdownVisible = !siteProgressDropdownVisible;
  dropdownVisible = false;
  utilityDropdownVisible = false;
  removeActiveClass();
  document.getElementById("siteProgressButton").classList.add("active");
}

window.onload = function () {
  preloadImages();
  showSelectedOption(document.getElementById("interestedSelect"));

  var twoDUnitPlans = document.querySelector(".two-d-unitplans");
  var threeDUnitPlans = document.querySelector(".three-d-unitplans");
  var constructionImagesContainer = document.querySelector(
    ".construction-img-container"
  );

  twoDUnitPlans.style.display = "none";
  threeDUnitPlans.style.display = "none";
  constructionImagesContainer.style.display = "none";
};

function toggleDropdown(event) {
  var selectDropdown = document.getElementById("interestedSelect");
  var siteProgressButton = document.getElementById("siteProgressButton");
  var target = event ? event.target : window.event.target;
  var twoDUnitPlans = document.querySelector(".two-d-unitplans");

  twoDUnitPlans.style.display = "none";

  if (!target.matches(".dropdown-btn") || target === siteProgressButton) {
    if (dropdownVisible) {
      dropdownVisible = false;
      selectDropdown.style.display = "block";
    }
  } else {
    showSelectedOption(selectDropdown);
    removeActiveClass();
    floorPlanButton.classList.add("active");
  }
}

function showSelectedOption(selectElement) {
  var floorplan = document.getElementById("dropdownContainer");
  var unitplandrop = document.getElementById("utilityDropdownContainer");
  var twoDUnitPlans = document.querySelector(".two-d-unitplans");
  var threeDUnitPlans = document.querySelector(".three-d-unitplans");
  var siteprogress = document.querySelector(".construction-img-container");

  var sitedropdown = document.getElementById("siteProgressDropdownContainer");

  sitedropdown.style.display = "none";

  floorplan.style.display = "block";
  unitplandrop.style.display = "none";
  siteprogress.style.display = "none";
  twoDUnitPlans.style.display = "none";
  threeDUnitPlans.style.display = "none";

  var towers = document.querySelectorAll(
    ".floorplans-towerA, .floorplans-towerB, .floorplans-towerC"
  );
  towers.forEach((tower) => {
    tower.style.display = "none";
  });

  var selectedOption = selectElement.value;
  document.getElementById(selectedOption).style.display = "block";
  removeActiveClass();
  floorPlanButton.classList.add("active");
}

function toggleUtilityDropdown() {
  var floorDropdownContainer = document.getElementById("dropdownContainer");
  var utilityDropdownContainer = document.getElementById(
    "utilityDropdownContainer"
  );
  var twoDUnitPlans = document.querySelector(".two-d-unitplans");
  var threeDUnitPlans = document.querySelector(".three-d-unitplans");
  var constructionImagesContainer = document.querySelector(
    ".construction-img-container"
  );
  constructionImagesContainer.style.display = "none";

  var sitedropdown = document.getElementById("siteProgressDropdownContainer");

  floorDropdownContainer.style.display = "none";
  sitedropdown.style.display = "none";

  if (!utilityDropdownVisible) {
    utilityDropdownContainer.style.display = "block";
    floorDropdownContainer.style.display = "none";

    document
      .querySelectorAll(
        ".floorplans-towerA, .floorplans-towerB, .floorplans-towerC"
      )
      .forEach((tower) => {
        tower.style.display = "none";
      });

    twoDUnitPlans.style.display = "block";
    threeDUnitPlans.style.display = "none";
  } else {
    utilityDropdownContainer.style.display = "block";
    twoDUnitPlans.style.display = "block";
    threeDUnitPlans.style.display = "none";
  }

  utilityDropdownVisible = !utilityDropdownVisible;
  dropdownVisible = false;
  removeActiveClass();
  unitPlansButton.classList.add("active");
}

function showUtilityPlanOption(selectElement) {
  var twoDUnitPlans = document.querySelector(".two-d-unitplans");
  var threeDUnitPlans = document.querySelector(".three-d-unitplans");
  var floorDropdownContainer = document.getElementById("dropdownContainer");
  var constructionImagesContainer = document.querySelector(
    ".construction-img-container"
  );
  var utilityDropdownContainer = document.getElementById(
    "utilityDropdownContainer"
  );
  var sitedropdown = document.getElementById("siteProgressDropdownContainer");

  floorDropdownContainer.style.display = "none";
  sitedropdown.style.display = "none";
  floorDropdownContainer.style.display = "none";
  twoDUnitPlans.style.display = "none";
  threeDUnitPlans.style.display = "none";
  constructionImagesContainer.style.display = "none";
  utilityDropdownContainer.style.display = "block";

  document
    .querySelectorAll(
      ".floorplans-towerA, .floorplans-towerB, .floorplans-towerC"
    )
    .forEach((tower) => {
      tower.style.display = "none";
    });

  var selectedUtilityPlan = selectElement.value;
  if (selectedUtilityPlan === "utility2D") {
    twoDUnitPlans.style.display = "block";
  } else if (selectedUtilityPlan === "utility3D") {
    threeDUnitPlans.style.display = "block";
  }

  removeActiveClass();
}

function showConstructionImages() {
  var utilityDropdownContainer = document.getElementById(
    "utilityDropdownContainer"
  );
  var floorDropdownContainer = document.getElementById("dropdownContainer");
  var constructionImagesContainer = document.querySelector(
    ".construction-img-container"
  );
  var twoDUnitPlans = document.querySelector(".two-d-unitplans");
  var threeDUnitPlans = document.querySelector(".three-d-unitplans");
  var sitedropdown = document.getElementById("siteProgressDropdownContainer");

  sitedropdown.style.display = "block";
  twoDUnitPlans.style.display = "none";
  threeDUnitPlans.style.display = "none";

  document
    .querySelectorAll(
      ".floorplans-towerA, .floorplans-towerB, .floorplans-towerC"
    )
    .forEach((tower) => {
      tower.style.display = "none";
    });

  utilityDropdownContainer.style.display = "none";
  floorDropdownContainer.style.display = "none";

  document.querySelector(".two-d-unitplans").style.display = "none";
  document.querySelector(".three-d-unitplans").style.display = "none";

  constructionImagesContainer.style.display = "block";
  removeActiveClass();
  siteProgressButton.classList.add("active");
}

function removeActiveClass() {
  var buttons = document.querySelectorAll(".dropdown-btn");
  buttons.forEach((button) => {
    button.classList.remove("active");
  });
}

function preloadImages() {
  var imageUrls = [
    "./media/unitplans/u-1.jpg",
    "./media/unitplans/u-2.jpg",
    "./media/construction/c-4.jpg",
    "./media/construction/c-5.jpg",
  ];

  imageUrls.forEach(function (imageUrl) {
    var img = new Image();
    img.src = imageUrl;
  });
}
