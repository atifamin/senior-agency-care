function AppMaster() {
	this.profileCropper = {
		blob:[]
	};
}

function CardLoader(element){
	var light = element;
	$(light).block({
		message: '<i class="icon-spinner spinner"></i>',
		overlayCSS: {
			backgroundColor: '#fff',
			opacity: 0.8,
			cursor: 'wait'
		},
		css: {
			border: 0,
			padding: 0,
			backgroundColor: 'none'
		}
	});
	return $(light);
}