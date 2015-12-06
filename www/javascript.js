$(function () {
	setTimeout(setPageHeight, 50);
	setTimeout(showGem, 1000);

	function setPageHeight() {
		height = (Math.ceil(($("#page").height() - 585 - 509) / 98)) * 98 + 585 + 509;
		$("#page").height(height);
	}

	function showGem() {
		$("#gem")
				  .fadeToggle(300)
				  .fadeToggle(600)
				  .fadeToggle(300)
				  .fadeToggle(2000, function () {
					  setTimeout(showGem, 1000);
				  });
	}

});
