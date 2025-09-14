(() => {
  // src/js/index.js
  var FaqAccordion = class extends HTMLElement {
    constructor() {
      super();
      this.accordion = this.querySelector("ul");
      this.accordionItems = this.querySelectorAll("li");
    }
    connectedCallback() {
      console.log(this);
      this.accordionItems.forEach((item) => {
        item.addEventListener("click", () => {
          item.classList.toggle("open");
        });
      });
    }
  };
  customElements.define("faq-accordion", FaqAccordion);
})();
//# sourceMappingURL=bundle.js.map
