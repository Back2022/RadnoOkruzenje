<form action="" method="post" enctype="multipart/form-data">
Picture:
<input type="file" name="picture" />
<input type="submit" value="Send" />
</form>
<?php

if(!empty($_FILES)){
//$uploaddir = '/var/www/uploads/';
$uploaddir = __DIR__.'\\uploads\\';
if (!file_exists($uploaddir)) {
    mkdir($uploaddir, 0766);  // RWX 110 -> 766
}
// ukoliko ne mjenjam ili ne postavljam datotečni nastavak, ne treba mi basename
//$uploadfile = $uploaddir . basename($_FILES['picture']['name']); 
$uploadfile = $uploaddir . $_FILES['picture']['name'];
$uploadfile = $uploaddir 
        .md5($_FILES['picture']['name'])
        .'.'
        .pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION); //dohvaća extenziju (.jpg)

echo '<pre>';

if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
print_r($_FILES);
echo "</pre>";
}
?>