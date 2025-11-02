<?php  

class Device {  
    protected string $brand;  
    protected string $model;  
    protected int $price;  

    public function __construct(string $brand, string $model, int $price) {  
        $this->brand = $brand;  
        $this->model = $model;  
        $this->price = $price;  
    }  

    public function getSummary() {  
        return "$this->brand - $this->model $this->price";  
    }  

    public function getInfo() {  
        echo "Phone brand: $this->brand, Model: $this->model, Price: $this->price تومان";  
    }  
}  

class Phone extends Device {  
    public int $simCount;  

    public function __construct(string $brand, string $model, int $price, int $simCount) {  
        $this->brand = $brand;  
        $this->model = $model;  
        $this->price = $price;  
        $this->simCount = $simCount;  
    }  

    public function setInfo() {  
        echo " SIM count: {$this->simCount}<br>";  
    }  
}  

$apple = new Phone('Apple', 'iPhone 12max', 990000, 1);  
$apple->getInfo();  
$apple->setInfo();  

echo "<br>";  

$samsung = new Phone('Samsung', 'a21', 1200000, 2);  
$samsung->getInfo();  
$samsung->setInfo();  

?>
