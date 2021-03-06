let mobileNav = document.getElementById("mobileNavigation");
let mobileNavOverlay = document.getElementById("mobileNavigationOverlay");
mobileNav.addEventListener("transitionend", () => mobileNav.classList.remove("nav-animate"));

class Navigation {
	static open() {
		mobileNav.classList.add("nav-animate");
		mobileNav.classList.add("nav-show");
		mobileNavOverlay.classList.add("nav-overlay-show");
	}
	static close() {
		mobileNav.classList.add("nav-animate");
		mobileNav.classList.remove("nav-show");
		mobileNavOverlay.classList.remove("nav-overlay-show");
	}
}

let toggleButton = document.getElementById("mobileNavigationButton");
let overlay = document.getElementById("mobileNavigationOverlay");
toggleButton.addEventListener("click", () => Navigation.open());
overlay.addEventListener("click", () => Navigation.close());

let navButtons = document.querySelectorAll(".js-nav-button");
navButtons.forEach((navButton) => {
	if (window.location.pathname === "/" && navButton.href.includes("home") ||
		(window.location.pathname !== "/" && navButton.href.includes(window.location.pathname)))
		navButton.classList.add("active");
});
