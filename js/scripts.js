/*------------------------------------------*/
/*  Awesome Bootstrap 3 sidebar Navigation  */
/*------------------------------------------*/

$(document).ready(
    function () {
        var trigger = $('.hamburger'),
        overlay = $('.overlay'),
        isClosed = false;

        trigger.click(function () {
        hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});

/*------------------------------------------------*/
/*  FINAL Awesome Bootstrap 3 sidebar Navigation  */
/*------------------------------------------------*/

/////////////////////////////////////////////////////////////

/*------------------------------*/
/*  CSS Search Field Animation  */
/*------------------------------*/

$("#inpt_search").on('focus', function () {
	$(this).parent('label').addClass('active');
});

$("#inpt_search").on('blur', function () {
	if($(this).val().length == 0)
		$(this).parent('label').removeClass('active');
});

/*------------------------------------*/
/*  FINAL CSS Search Field Animation  */
/*------------------------------------*/

/////////////////////////////////////////////////////////////

