function pagination (page) {
    		$('ul.pagination').empty();
	allproducts = $('.col-sm-4').length;
	totalpages = Math.ceil((allproducts)/9);
	if (page > 3) $('<li class="page-item"><button class="page-link" onclick="pagination(0)">First</button></li>').appendTo('ul.pagination');
	if (page > 0) $('<li class="page-item"><button class="page-link" onclick="pagination('+(page - 1)+')">Previous</button></li>').appendTo('ul.pagination');
	if (totalpages < 6) {
		for (var i = 0; i < totalpages; i++) {
			$('<li class="page-item"><button id = "page_'+i+'" class="page-link" onclick="pagination('+i+')">'+(i+1)+'</button></li>').appendTo('ul.pagination');
		}
	}
	else {
		if (page < 3) {
			for ( var i = 0; i < (page+4); i++) {
				$('<li class="page-item"><button id = "page_'+i+'" class="page-link" onclick="pagination('+i+')">'+(i+1)+'</button></li>').appendTo('ul.pagination');
			}
		}
		else if ((page >= 3) && (page <= (totalpages - 4))) {
			for (var i = (page-3); i < (page + 4); i++) {
				$('<li class="page-item"><button id = "page_'+i+'" class="page-link" onclick="pagination('+i+')">'+(i+1)+'</button></li>').appendTo('ul.pagination');
			}
		}
		else if (page > (totalpages - 4)) {
			for (var i = (page-3); i < totalpages; i++) {
				$('<li class="page-item"><button id = "page_'+i+'" class="page-link" onclick="pagination('+i+')">'+(i+1)+'</button></li>').appendTo('ul.pagination');
			}
		}
	}
	if ((page + 1) < totalpages) $('<li class="page-item"><button class="page-link" onclick="pagination('+(page + 1)+')">Next</button></li>').appendTo('ul.pagination');
	if (page < (totalpages - 4)) $('<li class="page-item"><button class="page-link" onclick="pagination('+(totalpages - 1)+')">Last</button></li>').appendTo('ul.pagination');
	$('#page_'+page).addClass('bg-dark');
	$('.col-sm-4').hide();
 	for (var i = page * 9; i < ((page * 9) + 9); i++) {
 		$('#product_'+i).show();
 	}
}