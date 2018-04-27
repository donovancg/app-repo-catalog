function sortTable(col) {
	var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("js--table-sort");
    switching = true;
    
    while (switching) {
		switching = false;
		rows = table.getElementsByTagName("TR");
		for (i = 1; i < (rows.length - 1); i++) {
			shouldSwitch = false;
			x = rows[i].getElementsByTagName("TD")[col];
			y = rows[i + 1].getElementsByTagName("TD")[col];
			if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
				shouldSwitch= true;
				break;
			}
		}
		if (shouldSwitch) {
			rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
			switching = true;
		}
	}
}


function sortTableReverse(col) {
	var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("js--table-sort");
    switching = true;
    
    while (switching) {
		switching = false;
		rows = table.getElementsByTagName("TR");
		for (i = (rows.length - 1); i < 1; i--) {
			shouldSwitch = false;
			x = rows[i + 1].getElementsByTagName("TD")[col];
			y = rows[i].getElementsByTagName("TD")[col];
			if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
				shouldSwitch= true;
				break;
			}
		}
		if (shouldSwitch) {
			rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
			console.log(rows[i]);
			switching = true;
		}
	}
}

document.getElementById('js--td-sort-0').addEventListener('click', function() {
	sortTable(0);

	this.classList.add('selected');
	this.firstElementChild.classList.add('ion-ios-arrow-down');
	this.nextElementSibling.classList.remove('selected');
	this.nextElementSibling.nextElementSibling.classList.remove('selected');
	this.nextElementSibling.firstElementChild.classList.remove('ion-ios-arrow-down');
	this.nextElementSibling.nextElementSibling.firstElementChild.classList.remove('ion-ios-arrow-down');
	
});

document.getElementById('js--td-sort-1').addEventListener('click', function() {
	sortTable(1);

	this.classList.add('selected');
	this.firstElementChild.classList.add('ion-ios-arrow-down');
	this.previousElementSibling.classList.remove('selected');
	this.nextElementSibling.classList.remove('selected');

	this.previousElementSibling.firstElementChild.classList.remove('ion-ios-arrow-down');
	this.nextElementSibling.firstElementChild.classList.remove('ion-ios-arrow-down');
});

document.getElementById('js--td-sort-2').addEventListener('click', function() {
	sortTable(2);

	this.classList.add('selected');
	this.firstElementChild.classList.add('ion-ios-arrow-down');
	this.previousElementSibling.classList.remove('selected');
	this.previousElementSibling.classList.remove('selected');

	this.previousElementSibling.firstElementChild.classList.remove('ion-ios-arrow-down');
	this.previousElementSibling.previousElementSibling.firstElementChild.classList.remove('ion-ios-arrow-down');
	// ion-ios-arrow-down

});
