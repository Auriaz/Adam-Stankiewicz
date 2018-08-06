import $ from 'jquery';
import waypoints from '../../../../node_modules/waypoints/lib/noframework.waypoints';
import smoothScroll from 'jquery-smooth-scroll';


/*  #### Przyklejanie nawigacji  ####  */
class StickyNav {
  constructor() {
    this.primeryNav = $('.primery-nav');  
    this.sybolNav = $('.primery-nav__ordered-list__sybol');
    this.socialNav = $('.primery-nav__ordered-list__social-icons');
    this.headerTriggerElement = $(".content");
    this.createHeaderWaypoint();
    this.headerLinks = $(".primary-nav a");
    this.addSmoothScrolling();  
  }

 addSticky() {
    this.primeryNav.addClass('primery-nav--sticky-nav');
    this.sybolNav.addClass('primery-nav__ordered-list__sybol--sticky-nav');
    this.socialNav.addClass('primery-nav__ordered-list__social-icons--sticky-nav');
  }

  removeSticky() {
    this.primeryNav.removeClass('primery-nav--sticky-nav');
    this.sybolNav.removeClass('primery-nav__ordered-list__sybol--sticky-nav');
    this.socialNav.removeClass('primery-nav__ordered-list__social-icons--sticky-nav');
  }

   addSmoothScrolling() {
    this.headerLinks.smoothScroll();
  }

  createHeaderWaypoint() {
    var that = this;
    new Waypoint({
       element: this.headerTriggerElement[0],
      handler: function(direction) {
        if (direction == "down") {
          that.addSticky();
        } else {
          that.removeSticky();
        }
      }
    });
  }
}

export default StickyNav;