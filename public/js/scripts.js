// Select all of checkboxes
$("#checkAll").click(function(){
	$('input:checkbox').not(this).prop('checked', this.checked);
});