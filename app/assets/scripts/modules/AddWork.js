import $ from 'jquery';

class AddWork {
	constructor() {
		this.editWork = $('.edit-work__mobility');
		this.addWork = $('.add-work__subtitle')
		this.events();
	}

	events() {
		this.addWork.click(this.toggleEditor.bind(this));
	}

	toggleEditor() {
		this.editWork.toggleClass("edit-work__mobility--is-invisible")
	}
}

export default AddWork;