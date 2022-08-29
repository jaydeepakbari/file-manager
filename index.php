<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="src/style.css?v=<?= time() ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<div class="file-upload btn-file">
	  	<div class="file">
	  		<img src="https://via.placeholder.com/100x100?text=No%20Image">
	  	</div>
	  	<div class="tools"></div>
	</div>

	<div class="file-chooser">
		<div class="files-tools">
			<button class="btn-filemanager btn-back">Back</button>
			<button class="btn-filemanager btn-folder">Folder</button>
			<button class="btn-filemanager btn-delete">Delete</button>
		</div>
		<div class="delete-warning">
			<div>Choose files</div>
			<div><button class="btn-filemanager btn-delete-confirm">Delete</button> <button class="btn-filemanager btn-delete-remove">Cancel</button></div>
		</div>
		<div class="empty">
			No any images.
		</div>

		<div class="files"><ul></ul></div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="src/script.js?v=<?= time() ?>"></script>
	<script type="text/javascript">
		$(".btn-file").fileManager({
			callback:function(files,el) {
				if(files.href){
					$(el).find("img").attr("src",files.href)
				} else {
					$(el).find("img").attr("src","https://via.placeholder.com/100x100?text=No%20Image")
				}
			}
		});
	</script>
</body>
</html>