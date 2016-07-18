$(function(){
	
	$('label').hide();
	$('input').focus(function() {
		$('label[for="' + this.name + '"]').slideDown(300);
	}).blur(function() {
		$('label[for="' + this.name + '"]').slideUp(300);
	});
});