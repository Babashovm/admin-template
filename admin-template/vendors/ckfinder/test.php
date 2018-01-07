<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ckfinder Test</title>
	<script type="text/javascript" src="ckfinder.js"></script>
</head>
<body>
<script type="text/javascript">

function BrowseServer()
{
	
	var finder = new CKFinder();
	finder.basePath = '/ckfinder/';	
	finder.selectActionFunction = SetFileField;
	finder.popup();

}
function SetFileField( fileUrl )
{
	document.getElementById( 'xFilePath' ).value = fileUrl;
}
	</script>

	<input id="xFilePath" name="fotoo" class="textfield" />

<input type="button" value="&#350;&#601;kli Yükl&#601;" onclick="BrowseServer();" />
	
</body>
</html>