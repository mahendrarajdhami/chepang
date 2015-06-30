/*jquery for carousel*/
jQuery(document).ready(function() {
  jQuery("#owl-demo").owlCarousel({
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3] 
  }); 
});
/*for menu*/
jQuery(function() {
  jQuery('#main-menu').smartmenus({
    subMenusSubOffsetX: 1,
    subMenusSubOffsetY: -8
  });
  jQuery('#document').click(function(e){
    e.preventDefault();
  })
   jQuery('#media_coverage').click(function(e){
    e.preventDefault();
  })
});