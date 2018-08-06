import $ from 'jquery';

class PreventDelete {
	constructor() {
	  	this.delete = $(".delete");
	  	this.events();
	}

	events() {
	  	this.delete.click(this.preventDel.bind(this));
	}

	preventDel() {
  		var c = confirm('Czy jesteś pewien, że chcesz usunąć ?');

  		if (c == false) return false;
	}
}
export default PreventDelete;