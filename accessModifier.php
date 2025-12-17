<?php
class Car {
	private $name;
	private $price;
	private $branch;

	public function setName($name) {
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
	public function setPrice($price) {
		$this->price = $price;
	}
	public function getPrice(){
		return $this->price;
	}

	public function setBranch($branch) {
		$this->branch = $branch;
	}
	public function getBranch(){
		return $this->branch;
	}
}

// ---- Dùng class ----
$car = new Car();
$car->setName("Honda City");
$car->setPrice(15000);
$car->setBranch("Honda");  // ✅ Gán giá trị qua setter

echo $car->getName() . "<br>";
echo $car->getPrice() . "<br>";
echo $car->getBranch() . "<br>"; // ✅ Lấy giá trị qua getter
?>
