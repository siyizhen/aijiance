$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}

	var accordion = new Accordion($('#accordion'), false);
});

$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links1 = this.el.find('.link1');
		// Evento
		links1.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open1');

		if (!e.data.multiple) {
			$el.find('.submenu1').not($next).slideUp().parent().removeClass('open1');
		};
	}

	var accordion = new Accordion($('#accordion1'), false);
});

$(function() {
	$(".submenu2 .menuBox:lt(3)").show();
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links1 = this.el.find('.link2');
		// Evento
		links1.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			
			$notFirst_3=$this.prev().find(".menuBox:gt(2)");
			$prev = $this.prev();

		$notFirst_3.slideToggle();
		$this.parent().toggleClass('open2');

		if (!e.data.multiple) {
			$el.find('.submenu2').not($prev).parent().removeClass('open2');
		};
	}

	var accordion = new Accordion($('#accordion2'), false);
});

$(function() {
	$(".submenu3 .menuBox1:lt(3)").show();
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;
		var links1 = this.el.find('.link3');
		links1.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}
	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$notFirst_3=$this.prev().find(".menuBox1:gt(2)");
			$prev = $this.prev();
			$notFirst_3.slideToggle();
			$this.parent().toggleClass('open3');
		if (!e.data.multiple) {
			$('.submenu3').not($prev).parent().removeClass('open3');
		};
	}
	var accordion = new Accordion($('#accordion3'), false);
});