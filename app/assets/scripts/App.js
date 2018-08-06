import $ from 'jquery';
import Dashboard from './modules/Dashboard';
import MobileMenu from './modules/MobileMenu';
import RevealOnScroll from './modules/RevealOnScroll';
import PreventDelete from './modules/PreventDelete';
//import StickyHeader from './modules/StickyHeader';
//import Modal from './modules/Modal';
//import SuperTest from './modules/SuperTest'

//import './modules/Slider';
import './modules/initTinymce';
import StickyNav from './modules/StickyNav';
//import AddWork from './modules/AddWork';

 //import './modules/Editor';
//import './modules/getData';


//var superTest = new SuperTest();
//var modal = new Modal();


//import './modules/tabSlideStart';
var dashboard = new Dashboard();
//var addWork = new AddWork();
var mobileMenu = new MobileMenu();

new RevealOnScroll($(".information-section__columns"),"65%");
new RevealOnScroll($(".postcard"),"80%");
var stickyNav = new StickyNav();
var preventDelete = new PreventDelete();
//new RevealOnScroll($(".testimonials"), "65%");
//var stickyHeader = new StickyHeader(); 