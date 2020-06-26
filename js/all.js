$(function(){
	$('.carousel').carousel();
	$("#s_abonner").hide();
	$("#developpeur").hide();

	$("#btn_developpeur").click(function(){
		$("#developpeur").show('slow');
		$("#s_abonner").hide();
	})
	$("#btn_s_abonner").click(function(){
		$("#s_abonner").show('slow');
		$("#developpeur").hide();
	})
})