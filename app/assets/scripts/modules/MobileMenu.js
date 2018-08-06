import $ from 'jquery';

class MobileMenu {
  constructor() {
    this.menuIcon = $(".header-side__menu-icon");
    this.menuContent = $(".header-side__menu-content");
    this.events();
  }

  events() {
    this.menuIcon.click(this.toggleTheMenu.bind(this));
  }

  toggleTheMenu() {
    this.menuContent.toggleClass("header-side__menu-content--is-visible");
    this.menuIcon.toggleClass("header-side__menu-icon--close-x");
  }
}

export default MobileMenu;