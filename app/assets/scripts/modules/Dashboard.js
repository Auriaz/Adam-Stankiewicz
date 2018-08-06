import $ from 'jquery';

class Dashboard {
	constructor() {
		this.RandomInsert = $("#randomInsert");
		this.ListInsert = $("#listInsert");	
		this.events();	
	}

	DeleteListing(id) {
		var that = this;

		$.post('DeleteListing', {'id': id}, function(o) {
			that.parent().remove();	
		}, 'json');
	}

	events() {
		this.RandomInsert.push(this.GetListings.bind(this));
		this.RandomInsert.submit(this.PostInsert.bind(this));
	}

	GetListings() {
		var that = this;

		$.get('Dashboard/GetListings', function(o) {	
			var count = Object.keys(o).length;
			
			for (var i = 0; i < count; i++) {
				that.ListInsert.append('<div>'+ o[i].text +'<a class="del" rel="'+ o[i].id +'" href="#">X</a></div>');
			}
			
			$('.del').click(function(){
				var id = $(this).attr('rel');
				that.DeleteListing(id);
			});
		}, 'json');

		return false;
	}

	PostInsert() {
		var that = this;
		var urls = this.RandomInsert.attr('action');
		var data = this.RandomInsert.serialize();
		
		$.post(urls, data, function(o) {

			that.ListInsert.append('<div>'+ o.text +'<a class="del" rel="'+ o.id +'" href="#">X</a></div>');
			
			$('.del').click(function(){
				var id = $(this).attr('rel');
				that.DeleteListing(id);
			});
		}, 'json');

		return false;
	}
}
export default Dashboard;