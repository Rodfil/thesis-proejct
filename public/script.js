$(function(){
  
    $(".dropdown-menu a").click(function(){
      
      $(".btn:first-child").text($(this).text());
       $(".btn:first-child").val($(this).text());
    });
  
  });

  $(function(){
  
    $(".dropdown-menu span").click(function(){
      
      $(".btn1:first-child").text($(this).text());
       /* $(".btn1:first-child").val($(this).text()); */
    });
  
  });


$(document).ready(function() {
    $('.arrow').click(function() {
      $('.sidebar').toggleClass('open');
      console.log("rodfil");
    });
}); 

$(function() {
  $('#my-dropdown').on('change', function() {
    if ($(this).val() != '') {
      $(this).addClass('my-select-selected');
      $(this).find('option[value="selection"][disabled]').remove();
    } 
  });
});


$(document).ready(function() {
  $('.inputs-request').on('input', function() {
    if ($(this).val().length > 0) {
      $(this).addClass('filled');
      $(this).prev('label').addClass('active');
    } else {
      $(this).removeClass('filled');
      $(this).prev('label').removeClass('active');
    }
  });
});




/* 
  $('.datepicker').pickadate({
    weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    showMonthsShort: true
    }) */