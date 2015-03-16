/**
 * 
 */
$(function() {
	$(
			"#sortable1, #sortable2, #sortable3, #sortable4, #sortable5, " +
			"#sortable6, #sortable7, #sortable8, #sortable9, #sortable10, " +
			"#sortable11, #sortable12, #sortable13, #sortable14, #sortable15, " +
			"#sortable16, #sortable17, #sortable18, #sortable19, #sortable20, #sortable21")
			.sortable({
				connectWith : ".connectedSortable"
			}).disableSelection();
});