<?php
session_start();

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Helo, $username!";
    echo '<br/><br/>';
} else {
    echo '<a href="register.php">Register</a><br/><br/>';
    echo '<a href="login.php">Login</a><br/><br/>';
}
?>

<a href="insert.php" target="_blank">Insert a record</a><br/><br/>
<a href="update.php" target="_blank">Update a record</a><br/><br/>
<a href="delete.php" target="_blank">Delete a record</a><br/><br/>
<a href="upload.php" target="_blank">Upload an iamge</a><br/><br/>

<?php
$xmlFilePath = 'flori.xml';
$xslFilePath = 'style.xsl';
$xmlData = new DOMDocument();
$xmlData->load($xmlFilePath);
$xslData = new DOMDocument();
$xslData->load($xslFilePath);
$xsltProcessor = new XSLTProcessor();
$xsltProcessor->importStylesheet($xslData);
echo $xsltProcessor->transformToXml($xmlData);
?>

<?php
function decodeBase64ToImage($base64String, $filename) {
    $imageData = base64_decode($base64String);
    file_put_contents($filename, $imageData);
}

$xml = simplexml_load_file('images.xml');

echo '<div class="row mt-5">';
foreach ($xml->image as $image) {
    $imageName = (string)$image->name;
    $base64Image = (string)$image->data;

    $imageFilename = $imageName . '.jpg'; 
    decodeBase64ToImage($base64Image, $imageFilename);

    echo '<div class="col-md-4 mb-4">';
    echo '<div class="card">';
    echo '<img src="' . $imageFilename . '" class="card-img-top img-fluid" alt="' . $imageName . '">'; 
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $imageName . '</h5>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
echo '</div>';
?>

