<?php 

class Rectangle 
{
	public $height;
	public $width;

	public function __construct($height, $width) {
		
		if (is_numeric($height) && is_numeric($width)) {
			$this->height = $height;
			$this->width = $width;
		}
	}

	public function area() {
		return ($this->height * $this->width);
	}
	
	public function perimeter() {
		return ($this->height * 2) + ($this->width * 2);
	}
}

 ?>