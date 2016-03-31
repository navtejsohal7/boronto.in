 <?
    // Copy global $_FILES array to new $files array and strip out any empty objects
    $files = array();
    $x = 0;

    foreach ($_FILES as $key => $value) {
        if ((!is_null($value)) && ($value !== "")) {
            $files[$x] = $value;
            $x++;
        }
    }

    // Count number of files uploaded
    $num_files = count($files[0]['tmp_name']);

    for ($i = 0; $i < $num_files; $i++) {
        // Shorten variable names
        $tmp_file = $files[0]['tmp_name'][$i];
        $filename = $files[0]['name'][$i];

        // If the upload was successful...
        if (is_uploaded_file($tmp_file)) {
            /*
             *    Insert code to copy file to desired folder on server
             */

            // Delete temporary uploaded file
            unlink($tmp_file);
        }
        // ... otherwise, print an error
        else {
            echo "Error uploading file <b>$filename</b>.<br><br>";
        }
    }
?> 