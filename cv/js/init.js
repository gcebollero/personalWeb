(function($){
  $(function(){
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    //Inicialize modal
    $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
    }
  );
  //Change collapsible icon and text in abilities section
  $('#collapsible-more-abilities').collapsible({
     accordion: false, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
     onOpen: function(el) { $("#collapsible-abilities-icon").replaceWith('<i id="collapsible-abilities-icon" class="material-icons">remove</i>'); $("#collapsible-abilities-text").replaceWith('<span id="collapsible-abilities-text">Menos</span>');}, // Callback for Collapsible open
     onClose: function(el) {  $("#collapsible-abilities-icon").replaceWith('<i id="collapsible-abilities-icon" class="material-icons">add</i>'); $("#collapsible-abilities-text").replaceWith('<span id="collapsible-abilities-text">Mas</span>'); } // Callback for Collapsible close
   });

      jQuery(window).scroll(function() {
          if (jQuery(this).scrollTop() > 220) {
              jQuery('.back-to-top').fadeIn(500);
          } else {
              jQuery('.back-to-top').fadeOut(500);
          }
      });

      jQuery('.back-to-top').click(function(event) {
          event.preventDefault();
          //jQuery('html, body').animate({scrollTop: 0}, duration);
          $("html, body").animate({ scrollTop: 0 }, "slow");
          return false;
      });

  //Set last modified date
  var d = new Date(document.lastModified);
  var datestring = d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear();
  document.getElementById("footerLastModified").innerHTML = datestring;

  //Make toast about cookies
  var $toastContent = $('<span>Si continúa navegando consideramos<br> que acepta el uso de cookies. <a href="#" data-toggle="modal" data-target="modalCookies">MAS INFO</a></span>');
  Materialize.toast($toastContent, 5000);



  var width = screen.width;
  var height = screen.height;

  //alert(width+" x "+height);


  //Materialize.toast('Si continúa navegando consideramos que acepta el uso de cookies.', 5000) // 4000 is the duration of the toast
}); // end of document ready
//set active menu sections
$("li").on("click",function() {
  //IDS validas
  var ids = ["menu_about","menu_language","menu_abilities","menu_contact","menu_social"];
  //Comprobamos que sea una id del menu, si no, salimos
  var is_a_valid_id = false;
  for(var j = 0; j <  5 && !is_a_valid_id;j++){
    is_a_valid_id=(this.id===ids[j]);
  }
  if(!is_a_valid_id){
    return true;
  }
  //Es del menú
  var set = false;
  for(var i = 0; i < ids.length && !set;i++){
    //Quitamos todos los active del menú
    document.getElementById(ids[i]).className=" ";
    if(this.id===ids[i]){
      //Asignamos al que reciba la pulsación
      document.getElementById(ids[i]).className="active";
      set=true;
    }
  }
   $('.button-collapse').sideNav('hide');
});
})(jQuery); // end of jQuery name space
