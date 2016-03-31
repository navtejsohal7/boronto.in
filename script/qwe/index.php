<!DOCTYPE html>
<html>
<head>
    <title>Upload Files using normal form and PHP</title>
<style>
.fileToUpload {
    overflow: hidden;
    position: relative;
}

.fileToUpload [type=file] {
    cursor: inherit;
    display: block;
    font-size: 999px;
    filter: alpha(opacity=0);
    opacity: 0;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
}
</style>
</head>
<body>
  <form enctype="multipart/form-data" method="post" action="upload.php">
      <label for="fileToUpload">
      <input type="file" name="fileToUpload" id="fileToUpload" />
      <input type="submit" value="Upload" /></label>
  </form>
</body>
</html>