<?php
include "./MyClass.php";
/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // We can redeclare the public and protected properties, but not private
    public $public = 'Public2';
    protected $protected = 'Protected2';
    
    // HEREDOC sintaksa  
    // https://www.php.net/manual/en/language.types.string.php
    protected $nekitekst = <<<ovojekrajteksta
<div id="lipsum">
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ex sed est venenatis dictum. Proin at mollis velit. Praesent ultrices purus egestas, feugiat lectus eu, ullamcorper sapien. Aliquam erat ex, molestie sed interdum non, egestas nec elit. Donec semper malesuada tellus pellentesque sagittis. Cras massa turpis, eleifend a magna et, gravida iaculis odio. Duis ut iaculis risus, blandit mattis mauris. Praesent in sapien ac justo viverra lobortis non non velit. Nam cursus at mi in varius. Etiam tincidunt semper nisi nec malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent semper elit eget egestas interdum. Ut quis purus vitae arcu iaculis sollicitudin non non ipsum.
</p>
<p>
Sed non efficitur arcu, 'a lobortis' elit. Nulla dolor sem, porta vitae nunc non, tristique consequat urna. Maecenas euismod augue felis, pulvinar fringilla dui condimentum vitae. Nullam condimentum nec sapien sed vehicula. Morbi hendrerit libero eget tincidunt laoreet. Pellentesque sit amet accumsan massa. Vestibulum tristique lacinia ipsum, vitae sagittis arcu malesuada tempus. Vestibulum sit amet posuere purus, at consectetur orci. Nullam tristique erat sit amet augue commodo mattis.
</p></div>
ovojekrajteksta;

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}
class mojaTrecaKlasa extends MyClass2{
    public function printHello() {
        echo "<b>";
        parent::printHello();
        echo "</b>";
        echo $this->nekitekst;
        
    }
}

$m3= new mojaTrecaKlasa();
$m3->printHello();

$obj2 = new MyClass2();
//echo $obj2->public; // Works
//echo $obj2->protected; // Fatal Error
//echo $obj2->private; // Undefined


echo "<hr>";
$obj2->printHello(); // Shows Public2, Protected2, Undefined