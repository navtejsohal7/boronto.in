<html>
<head>
<title>Upload Multiple Files</title>

<script type="text/javascript">
var i = 1;

function add_file(file) {
	var j = i - 1;

	var box = document.getElementById('file_list');
	var num = box.length;
	var file_exists = 0;

	for (x = 0; x < num; x++) {
		if (box.options[x].text == file) {
			alert('This file has already been added to the Upload List.');
			document.getElementById('file_' + j).value = "";
			file_exists = 1;
			break;
		}
	}

	if (file_exists == 0) {
		// For Internet Explorer
		try {
			el = document.createElement('<input type="file" name="userfile[]" id="file_' + i + '" size="30" onChange="javascript:add_file(this.value);">');
		}
		// For other browsers
		catch (e) {
			el = document.createElement('input');
			el.setAttribute('type', 'file');
			el.setAttribute('name', 'userfile[]');
			el.setAttribute('id', 'file_' + i);
			el.setAttribute('size', '30');
			el.setAttribute('onChange', 'javascript:add_file(this.value);');
		}

		document.getElementById('file_' + j).style.display = 'none';

		if (document.getElementById('list_div').style.display == 'none') {
			document.getElementById('list_div').style.display = 'block';
		}

		document.getElementById('files_div').appendChild(el);
		box.options[num] = new Option(file, 'file_' + j);

		i++;
	}
}

function remove_file() {
	var box = document.getElementById('file_list');

	if (box.selectedIndex != -1) {
		var value = box.options[box.selectedIndex].value;
		var child = document.getElementById(value);
	
		box.options[box.selectedIndex] = null;
		document.getElementById('files_div').removeChild(child);
	
		if (box.length == 0) {
			document.getElementById('list_div').style.display = 'none';
		}
	}
	else {
		alert('You must first select a file from the list.');
	}
}

function do_submit() {
// Uncomment this block for the real onSubmit code
/*
	var box = document.getElementById('file_list');
	var max_files = 5;
	
	if (box.length <= max_files) {	
		var child = document.getElementById('file_' + (i - 1));

		div = document.getElementById('files_div');
		div.removeChild(child);
		div.style.display = 'none';

		return true;
	}
	else
	{
		alert('You have more files listed than the maximum allowed.\nPlease limit your upload files to no more than <? echo $upload_max_files; ?> at a time.');
		return false;
	}
*/
// Just for test page
	alert('Files uploaded successfully');
	return false;
}
</script>

</head>

<body style="text-align: center;">

<form enctype="multipart/form-data" action="some_file.php" method="post" onSubmit="return do_submit()">

<div name="files_div" id="files_div">
	File: &nbsp;
	<input type="file" name="userfile[]" id="file_0" size="30" onChange="javascript:add_file(this.value);">
</div>

<br><br>

<div name="list_div" id="list_div" style="display: none;">
	<select multiple name="file_list" id="file_list" size="6"></select>
	<br><br>
	<input type="button" id="remove_file_btn" value="Remove Selected" onClick="javascript:remove_file();">
	<br><br><br>
	<input type="submit" name="submit" value="Upload">
</div>

</body>
</html>