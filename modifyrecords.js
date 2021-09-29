function edit_row(id) {
	let name = document.getElementById('name' + id).innerHTML;
	let email = document.getElementById('email' + id).innerHTML;
	let job_title = document.getElementById('job_title' + id).innerHTML;
	let telephone = document.getElementById('telephone' + id).innerHTML;

	document.getElementById('name' + id).innerHTML =
		"<input type='text' id='name_text" + id + "' value='" + name + "'>";
	document.getElementById('email' + id).innerHTML =
		"<input type='email' id='email_text" + id + "' value='" + email + "'>";
	document.getElementById('job_title' + id).innerHTML =
		"<input type='text' id='job_title_text" +
		id +
		"' value='" +
		job_title +
		"'>";
	document.getElementById('telephone' + id).innerHTML =
		"<input type='tel' id='telephone_text" +
		id +
		"' value='" +
		telephone +
		"'>";
}

function save_row(id) {
	let name = document.getElementById('name_text' + id).value;
	let email = document.getElementById('email_text' + id).value;
	let job_title = document.getElementById('job_title_text' + id).value;
	let telephone = document.getElementById('telephone_text' + id).value;

	$.ajax({
		type: 'post',
		url: 'modify.php',
		data: {
			edit_row: 'edit_row',
			row_id: id,
			name: name,
			email: email,
			job_title: job_title,
			telephone: telephone,
		},
		success: function (response) {
			if (response == 'success') {
				document.getElementById('name' + id).innerHTML = name;
				document.getElementById('email' + id).innerHTML = email;
				document.getElementById('job_title' + id).innerHTML = job_title;
				document.getElementById('telephone' + id).innerHTML = telephone;
				// document.getElementById('edit_button' + id).style.display = 'block';
				// document.getElementById('save_button' + id).style.display = 'none';
				alert('Details saved');
			}
		},
	});
}

function delete_row(id) {
	$.ajax({
		type: 'post',
		url: 'modify.php',
		data: {
			delete_row: 'delete_row',
			row_id: id,
		},
		success: function (response) {
			if (response == 'success') {
				let row = document.getElementById('row' + id);
				row.parentNode.removeChild(row);
			}
		},
	});
}

function insert_row() {
	let name = document.getElementById('new_name').value;
	let email = document.getElementById('new_email').value;
	let job_title = document.getElementById('new_job_title').value;
	let telephone = document.getElementById('new_telephone').value;



	$.ajax({
		type: 'post',
		url: 'modify.php',
		data: {
			insert_row: 'insert_row',
			name: name,
			email: email,
			job_title: job_title,
			telephone: telephone,
		},
		success: function (response) {
			if (response != '') {
				let id = response;
				let table = document.getElementById('cus_table');
				let table_len = table.rows.length - 1;
				let row = (table.insertRow(table_len).outerHTML =
					"<tr id='row" +
					id +
					"'> <td id='name" +
					id +
					"'>" +
					name +
					"</td> <td id='email" +
					id +
					"'>" +
					email +
					"</td><td id='job_title" +
					id +
					"'>" +
					job_title +
					"<td id='telephone" +
					id +
					"'>" +
					telephone +
					"  <td> <input type='button' class='btn btn-outline-dark' id='edit_button" +
					id +
					"' value='edit' onclick='edit_row(" +
					id +
					");'/> <input type='button' class='btn btn-outline-success' id='save_button" +
					id +
					"' value='save' onclick='save_row(" +
					id +
					");'/><input type='button' class='btn btn-outline-danger' id='delete_button" +
					id +
					"' value='delete' onclick='delete_row(" +
					id +
					");'/></td></tr>");

				document.getElementById('new_name').value;
				document.getElementById('new_email').value;
				document.getElementById('new_job_title').value;
				document.getElementById('new_telephone').value;
				alert('New Details Created');
			}
		},
	});
}
