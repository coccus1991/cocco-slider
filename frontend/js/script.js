jQuery('.carousel').carousel({
    interval: false
}) 

function cambia(id){

	jQuery('.carousel').carousel(id)
	jQuery("#bottoni_slidercocco .btn-group").children("button").each(function(index,element){
     jQuery("#"+element.id).removeClass('active');
	})

	jQuery("#bottone_slidercocco_"+id).addClass("active");
}

jQuery( document ).ready(function() {
	var width = parseInt(jQuery(window).width());
    if ( width < 1024)
{
	jQuery(".groupList").addClass('btn-group-vertical');

}
else{

	jQuery(".groupList").addClass('btn-group-justified');

}
});

jQuery(window).resize(function() {
var width = parseInt(jQuery(window).width())
  if ( width < 1024)
{
	jQuery(".btn-group-justified").removeClass('btn-group-justified').addClass('btn-group-vertical');

}
else{

	jQuery(".btn-group-vertical").removeClass('btn-group-vertical').addClass('btn-group-justified');

}
});