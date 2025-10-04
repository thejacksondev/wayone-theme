(() => {
  // src/js/index.js
  var FaqAccordion = class extends HTMLElement {
    constructor() {
      super();
      this.accordion = this.querySelector("ul");
      this.accordionItems = this.querySelectorAll("li");
    }
    connectedCallback() {
      this.accordionItems.forEach((item) => {
        item.addEventListener("click", () => {
          item.classList.toggle("open");
        });
      });
    }
  };
  customElements.define("faq-accordion", FaqAccordion);
  (function() {
    const navToggle = document.querySelector(".nav__toggle");
    const navToggleClose = document.querySelector(".nav__toggle-close");
    const navMenu = document.querySelector(".nav__menu");
    const mbLinks = document.querySelectorAll(".nav__menu--mobile a");
    navToggle.addEventListener("click", () => {
      navMenu.classList.toggle("open");
    });
    navToggleClose.addEventListener("click", () => {
      navMenu.classList.remove("open");
      document.body.style.overflow = "auto";
    });
    mbLinks.forEach((link) => {
      link.addEventListener("click", () => {
        navMenu.classList.remove("open");
        document.body.style.overflow = "auto";
      });
    });
    const observer = new ResizeObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.target.clientWidth > 991) {
          navMenu.classList.remove("open");
          document.body.style.overflow = "auto";
        }
      });
    });
    observer.observe(document.body);
  })();
  AOS.init({
    duration: 1e3,
    easing: "cubic-bezier(0.4, 0, 0.2, 1)",
    once: true,
    offset: 100,
    delay: 100,
    mirror: false,
    anchorPlacement: "top-bottom",
    disable: false
  });
})();
//# sourceMappingURL=bundle.js.map
