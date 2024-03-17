<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photoshop Integration</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Photoshop online</h1></header>

<?php
// Construct JSON configuration object
$config = array(
    "files" => array(
        "https://www.mysite.com/images/design.psd",
        "https://www.mysite.com/images/button.png",
        "data:image/png;base64,iVBORw0KGgoAAAAN..."
    ),
    "resources" => array(
        "https://www.xyz.com/brushes/Nature.ABR",
        "https://www.xyz.com/grads/Gradients.GRD",
        "https://www.xyz.com/fonts/NewFont.otf"
    ),
    "server" => array(
        "version" => 1,
        "url" => "https://www.myserver.com/saveImage.php",
        "formats" => array("psd:true", "png", "jpg:0.5")
    ),
    // Add more parameters as needed
);

// Encode JSON configuration object
$configEncoded = urlencode(json_encode($config));

// Construct URL for Photopea with encoded parameters
$photopeaURL = "https://www.photopea.com#" . $configEncoded;
?>

<iframe src="<?php echo $photopeaURL; ?>" width="100%" height="800px"></iframe>
</body>
</html>
