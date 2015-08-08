$(function () {
	setTimeout(setPageHeight, 50);

	function setPageHeight() {
		height = (Math.ceil(($("#page").height() - 585 - 509) / 98)) * 98 + 585 + 509;
		$("#page").height(height);
	}
});
