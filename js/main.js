$('.span12').show("slow").blur("slow");
//$('.span12').fadeIn("slow");

function failCheck (obj) {
	if (obj.checked) { 
		alert('А Вам воно точно треба?'); 
		obj.checked = false;
	}
}

function toggleImg (img) {
	$(img).toggleClass('selected');
	$('body').toggleClass('black');
}

$("table.last td").click(function() {
  $(this).toggleClass("red");
});