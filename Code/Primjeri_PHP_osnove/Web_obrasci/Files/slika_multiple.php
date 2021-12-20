<form action="" method="post" enctype="multipart/form-data">
Picture:
<input type="file" name="picture[]" multiple="true" />
<input type="submit" value="Send" />
</form>
<?php
ini_set('max_file_uploads', '30');   // ovo ne radi, treba postavku napraviti u php.ini
if(!empty($_FILES)){
//$uploaddir = '/var/www/uploads/';
$uploaddir = __DIR__.'\\uploads\\';
if (!file_exists($uploaddir)) {
    mkdir($uploaddir, 0766);  // RWX 110 -> 766
}
echo '<pre>';

// ukoliko ne mjenjam ili ne postavljam datotečni nastavak, ne treba mi basename
//$uploadfile = $uploaddir . basename($_FILES['picture']['name']); 
    for ($i = 0; $i < count($_FILES['picture']['name']); $i++) {
        
       

$uploadfile = $uploaddir . $_FILES['picture']['name'][$i];
$uploadfile = $uploaddir 
        .md5($_FILES['picture']['name'][$i])
        .'.'
        .pathinfo($_FILES['picture']['name'][$i], PATHINFO_EXTENSION); //dohvaća extenziju (.jpg)



if (move_uploaded_file($_FILES['picture']['tmp_name'][$i], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
    }
/**/
print_r($_FILES);
echo "</pre>";
}
?>