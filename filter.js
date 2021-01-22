//filters for portfolio by their data filter attribute
//these attributes are defined within the portfolio.html

$(document).ready(function () {

  //assigning the data attribute
  $(".filter-button").click(function () {
    var value = $(this).attr('data-filter');

    //shows all gallery dates
    if (value == "all") {
      $('.filter').show('1000');
    }

    //will hide the rest of the dates if it is not of the same value
    else {
      $(".filter").not('.' + value).hide('3000');
      $('.filter').filter('.' + value).show('3000');

    }
  });

  if ($(".filter-button").removeClass("active")) {
    $(this).removeClass("active");
  }

  $(this).addClass("active");

});