<?php
if (isset($_POST['submit'])) {
    // Get the URL entered by the user
    $fileUrl = $_POST['file_url'];
    
    // Generate a unique filename
    $filename = uniqid() . '.pdf'; // You can change the extension to match the file type
    
    // Download the file and save it locally
    $savePath = 'downloads/' . $filename; // Specify the directory where you want to save the file
    
    // Use file_get_contents to download the file
    $fileContent = file_get_contents($fileUrl);
    
    // Save the downloaded file locally
    file_put_contents($savePath, $fileContent);
    
    echo "File downloaded and saved successfully.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Download Remote File</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="file_url" placeholder="Enter file URL" required>
        <input type="submit" name="submit" value="Download">
    </form>
</body>
</html>
