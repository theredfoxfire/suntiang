// Custom JS
$(document).ready(function () {
    window.setTimeout(function() {
		Placeholders.enable();
	}, 100);
    $('.slider-1slide').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: true,
		dots: true
	});
    $('.slider-4slides').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: false,
		dots: false,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	$('.slider-4slides-adds').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		infinite: false,
		autoplaySpeed: 5000,
		arrows: true,
		dots: false
	});
	$('.slider-1slide-wthumb').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		autoplay: false,
		autoplaySpeed: 8000,
		arrows: false,
		dots: false,
		asNavFor: '.slider-1slide-vertthumb'
	});
	$('.slider-1slide-vertthumb').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		vertical: true,
		asNavFor: '.slider-1slide-wthumb',
		focusOnSelect: true,
		arrows: false,
		dots: false
	});
	var $3scenter = $('.slider-3slidescenter');
	$3scenter.on('init', function (event, slick){
		if(slick.slideCount <= slick.options.slidesToShow) {
			$3scenter.addClass('slick-no-nav');
			$3scenter.find('.slick-slide').removeClass('slick-center');
			$('.slick-slide[data-slick-index="1"]').addClass('slick-center');
		}
		else {
			$3scenter.removeClass('slick-no-nav');
		}
	});
	$3scenter.slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 8000,
		arrows: true,
		dots: false,
		centerMode: true,
		centerPadding: '0px',
		responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	$3scenter.slick('slickGoTo', 1);
	var $singleslidemob = $('.single-slidemob'),
		singleslidemobconfig = {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: false,
			arrows: true,
			focusOnSelect: true,
			dots: false
		};
	function showSliderScreen(widthScreen) {
		if (widthScreen <= 767) {
			if (!$singleslidemob.hasClass('slick-initialized')) {
				$singleslidemob.slick(singleslidemobconfig);
			} else {
				$singleslidemob.slick('unslick');
				$singleslidemob.slick(singleslidemobconfig);
			}
		} else {
			if ($singleslidemob.hasClass('slick-initialized')) {
				$singleslidemob.slick('unslick');
			}
		}
	}
	var widthScreen;
	function calcScreen() {
		widthScreen = $(window).width();
		showSliderScreen(widthScreen);
	}
	$(window).ready(calcScreen()).resize(function () {
		var isResizeEnd = true;
		if (isResizeEnd) {
			isResizeEnd = false;
			setTimeout(function () {
				isResizeEnd = true;
				calcScreen();
			});
		}
	});
    $('.text-damion-curved').arctext({radius: 900});
	$('.equal-height').responsiveEqualHeightGrid();
	$("#deliverydate").datepicker({
		dateFormat: 'dd/mm/yy',
		minDate: 'D',
		maxDate: '+1m'
	});
	$("#form-catering #date").datepicker({
		dateFormat: 'dd/mm/yy',
		minDate: 'D',
		maxDate: '+1m'
	});
	$("#form-dailymeal #date").datepicker({
		dateFormat: 'dd/mm/yy',
		minDate: 'D',
		maxDate: '+1m'
	});
	if ($('#modal-catering').length) {
		$('#modal-catering').modal({
			show: true,
			backdrop: 'static'
		});
	}
	if ($('#modal-nopadd').length) {
		$('#modal-nopadd').modal('show');
	}
	// if ($('#modal-dailymeal').length) {
	// 	$('#modal-dailymeal').modal('show');
	// }
	// if ($('#modal-login').length) {
	// 	$('#modal-login').modal('show');
	// }
	$('.nav-bookmark a').click(function () {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			$(this).parent("li").siblings().removeClass("active");
			$(this).parent("li").addClass("active");
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top - 175
				}, 1000);
				return false;
			}
		}
	});
	$('#box-carttoggle').click(function () {
		if (widthScreen > 768) {
			$('#box-cart').toggleClass('expanded');
		} else {
			return false;
		}
	});
	function playAnim(anim) {
    	$('.oneshot').addClass(anim + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
      		$(this).removeClass(anim + ' animated');
		});
    }
	var prodID,
		countcartcustom = 0;
	$('#countcartitem').text(countcartcustom);
	$('#modal-cateringtype').on('show.bs.modal', function (e) {
		var button = $(e.relatedTarget),
		$this = $(this);
		prodID = button.data('id');
		$.ajax({
			method: 'GET',
			url: 'http://jsonplaceholder.typicode.com/photos/',
			data: {id : prodID}
		}).done(function (data) {
			$this.find('h4').text(data[0].title);
			$this.find('#desc p').text(data[0].title);
			$this.find('img').attr('src', data[0].url);
		}).fail(function (msg) {
			alert('Error, please try again');
			$('#modal-cateringtype').modal('hide');
		});
	});
	$('#addtocustomcart').click(function (e) {
        e.preventDefault();
		$.ajax({
			method: 'GET',
			url: 'http://jsonplaceholder.typicode.com/users/',
			data: {id : prodID}
		}).done(function (data) {
			var templatecat = $('#template-cat').html().replace(/PRODNAME/g, data[0].name).replace(/PRODPRICE/g, data[0].address.zipcode).replace(/PRODID/g, prodID);
        	$('#proditems').append(templatecat).hide().fadeIn(500);
			countcartcustom++;
			$('#countcartitem').text(countcartcustom);
			$('#modal-cateringtype').modal('hide');
			playAnim('jello');
		}).fail(function (msg) {
			alert('Error, please try again');
			$('#modal-cateringtype').modal('hide');
		});
    });
	$('#proditems').on('click', '.item-delete', function (e) {
		$item = $(this);
		var prodID = $item.data('id');
		e.preventDefault();
		$.ajax({
			method: 'DELETE',
			url: 'http://jsonplaceholder.typicode.com/posts/' + prodID
		}).done(function (msg) {
			$item.closest('.media-item').fadeOut(500, function () {
				$item.remove();
			});
			countcartcustom--;
			$('#countcartitem').text(countcartcustom);
		}).fail(function (msg) {
			alert('Error, please try again');
		});
	});
	$("#form-register #birth").datepicker({
		dateFormat: 'dd/mm/yy',
		changeMonth: true,
      	changeYear: true,
		maxDate: 'D'
	});
	jQuery.validator.addMethod("phoneValid", function(phone_number, element) {
		phone_number = phone_number.replace(/\s+/g, "");
		return this.optional(element) || phone_number.length > 9 && 
		phone_number.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
	}, "Please specify a valid phone number");
	$('#form-shipping').validate({
		rules: {
			shipaddress: 'required'
		},
		messages: {
			'shipaddress': 'Please select shipping address'
		},
		errorPlacement: function(error, element) {
			if (element.attr('name') === 'shipaddress') {
				error.insertAfter(element.parents('.list-inline'));
			} else {
				error.appendTo(element.parent());
			}
		}
	});
	$('#form-newshipaddr .hasDatepicker, #form-newshipaddr select').on('change', function(e) {
		$('#form-newshipaddr').validate().element($(this));
	});
    $('#form-newshipaddr').validate({
		ignore: ':hidden:not(.selectpicker)',
		rules: {
			fullname: 'required',
			address: 'required',
			province: 'required',
			city: 'required',
			district: 'required',
			phone: {
                required: true,
                phoneValid: true    
            }
		},
        highlight: function(element, errorClass, validClass) {
            $(element).closest('div[class^="col-"]').addClass("error");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.error').removeClass("error");
        },
		errorPlacement: function(error, element) { 
			if (element.hasClass('selectpicker')) {
				error.insertAfter(element.parents('.bootstrap-select'));
			} else
			if (element.hasClass('hasDatepicker')) {
				error.insertAfter(element.parents('.input-group'));
			}
			else {
				error.appendTo(element.parent());
			}
		}
	});
	$('#form-forgotpass').validate({
		rules: {
			email: {
				required: true,
				email: true
			}
		}
	});
	$('#form-login').validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			password: 'required'
		},
		highlight: function(element, errorClass, validClass) {
            $(element).closest('div[class^="col-"]').addClass("error");
			$('.equal-height').responsiveEqualHeightGrid();
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.error').removeClass("error");
			$('.equal-height').responsiveEqualHeightGrid();
        },
		errorPlacement: function(error, element) {
			error.appendTo(element.parent());
		}
	});
	$('#form-register .hasDatepicker, #form-register select').on('change', function(e) {
		$('#form-register').validate().element($(this));
	});
    $('#form-register').validate({
		ignore: ':hidden:not(.selectpicker)',
		ignoreTitle: true,
		rules: {
			fullname: 'required',
			email: {
				required: true,
				email: true
			},
			password: 'required',
			confpass: {
				equalTo: '#password'
			},
			gender: 'required',
			phone: {
                required: true,
                phoneValid: true    
            },			
			birth: 'required',
			province: 'required',
			city: 'required',
			district: 'required'
		},
        highlight: function(element, errorClass, validClass) {
            $(element).closest('div[class^="col-"]').addClass("error");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.error').removeClass("error");
        },
		errorPlacement: function(error, element) { 
			if (element.hasClass('selectpicker')) {
				error.insertAfter(element.parents('.bootstrap-select'));
			} else
			if (element.hasClass('hasDatepicker')) {
				error.insertAfter(element.parents('.input-group'));
			}
			else {
				error.appendTo(element.parent());
			}
		}
	});
	$('#form-paymentconf .hasDatepicker, #form-paymentconf select').on('change', function(e) {
		$('#form-paymentconf').validate().element($(this));
	});
    $('#form-paymentconf').validate({
		ignore: ':hidden:not(.selectpicker)',
		ignoreTitle: true,
		rules: {
			orderid: 'required',
			email: {
				email: true
			},
			date: 'required',
			month: 'required',
			year: 'required',			
			accnumber: 'required',
			accholder: 'required',
			bank: 'required'
		},
        highlight: function(element, errorClass, validClass) {
            $(element).closest('div[class^="col-"]').addClass("error");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.error').removeClass("error");
        },
		errorPlacement: function(error, element) { 
			if (element.hasClass('selectpicker')) {
				error.insertAfter(element.parents('.bootstrap-select'));
			} else
			if (element.hasClass('hasDatepicker')) {
				error.insertAfter(element.parents('.input-group'));
			}
			else {
				error.appendTo(element.parent());
			}
		}
	});
	$('#form-contact .hasDatepicker, #form-contact select').on('change', function(e) {
		$('#form-contact').validate().element($(this));
	});
	$('#form-contact').validate({
		ignore: ':hidden:not(.selectpicker)',
		rules: {
			fullname: 'required',
			email: {
				required: true,
				email: true
			},
			subject: 'required',
			message: 'required'
		},
        highlight: function(element, errorClass, validClass) {
            $(element).closest('div[class^="col-"]').addClass("error");
			$('.equal-height').responsiveEqualHeightGrid();
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.error').removeClass("error");
			$('.equal-height').responsiveEqualHeightGrid();
        },
		errorPlacement: function(error, element) { 
			if (element.hasClass('selectpicker')) {
				error.insertAfter(element.parents('.bootstrap-select'));
			} else
			if (element.hasClass('hasDatepicker')) {
				error.insertAfter(element.parents('.input-group'));
			}
			else {
				error.appendTo(element.parent());
			}
		}
	});
});