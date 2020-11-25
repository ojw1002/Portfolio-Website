//Filters Portfolio Project by their data filter attribute
//These attributes are defined within the html portfolio doc
//JQuery

$(document).ready(function(){

    //assigning the data attribute
    $(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    //shows all gallery dates
    if(value == "all"){
      $('.filter').show('1000');
    }
  
    //will hide the rest of the dates if it is not of the same value
    else {
      $(".filter").not('.'+ value).hide('3000');
      $('.filter').filter('.'+ value).show('3000');
    
    }
    });
  
    if ($(".filter-button").removeClass("active")) {
      $(this).removeClass("active");
    }
    
    $(this).addClass("active");

});