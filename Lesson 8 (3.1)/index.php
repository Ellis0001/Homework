<?php
echo' Машина, Телевизор, Шариковая ручка, Утка, Товар';
echo "<br>";

class Pen 
{
    private $color;
    public function __construct($color)
    {
        $this->color = $color;
    }
    public function write($text)
    {
        return "<p style=\"color: $this->color\">" . $text . '</p>';
    }
}
$bluePen = new Pen('blue');
$greenPen = new Pen('green');
echo $bluePen->write('Текст синим цветом');

echo $greenPen->write('Текст зелёным цветом');


class Product
{
    private $name;
    private $category;
    private $price;
    private $discount;
    public function __construct($name, $category, $price, $discount = 0)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->discount = $discount;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getDiscount()
    {
        return $this->discount;
    }
    public function setDiscount($newDiscount)
    {
        return $this->discount = $newDiscount;
    }
    public function getPublicPrice()
    {
        return ($this->price - ($this->price * ($this->discount / 100)));
    }
}
$shorts = new Product('Шорты зелёные', 'Туризм', 1000);
$hats = new Product('Шляпа', 'Аксессуары', 300, 20);
echo 'Цена шорт без скидки: ', $shorts->getPrice(), '<br />';
echo 'Цена шляпы без скидки: ', $hats->getPrice(), '<br />';
echo '<br />';
echo 'Цена шорт со скидкой: ', $shorts->getPublicPrice(), '<br />';
echo 'Цена шляпы со скидкой: ', $hats->getPublicPrice(), '<br />';
echo '<br />';

class Duck
{
	public $message  =  "Кря-Кря";
	public $weightkg;
	public $age;
	

    public function saySmth()
    {

		$this ->message = $message;
		echo "Hello!";
		echo "<br>";
    }
}

$duck01  =  new Duck();
$duck01->message= "Кря!";
$duck01->weightkg= 2;
$duck01->age= 1;
echo "\"$duck01->message\"";
echo "<br>";
$duck01->saySmth();

$duck02  =  new Duck();
$duck02->message= "Кряки кря!";
$duck02->weightkg= 2;
$duck02->age= 2;

echo "\"$duck02->message\"";
echo "<br>";
$duck02->saySmth();
var_dump($duck01);
var_dump($duck02);


class TeleVisor
{
    public $brand;
	public $currentchannel;
	
    public function __construct($brand, $currentchannel) 
    {
        $this->brand - $brand;
        $this->currentchannel - $currentchannel;
        
    }
	public function whatChannelON ()
	{
		return $this->currentchannel;
	}
}

	

$tvSamsung = new TeleVisor('Samsung', 'TNT');
$tvSmart = new TeleVisor('Smart', 'CTC');
echo '<br />';
echo 'На Самсунге смотрят:', $tvSamsung->whatChannelON (), '<br />';
echo 'На Смарте смотрят:', $tvSmart->whatChannelON (), '<br />';


var_dump($tvSamsung);
var_dump($tvSmart);
?>