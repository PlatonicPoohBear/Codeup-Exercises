<?php 

class Rectangle 
{
	private $height;
	private $width;

	public function __construct($height, $width) {
		
		if (is_numeric($height) && is_numeric($width)) {
			$this->height = $height;
			$this->width = $width;
		}
	}

	public function area() {
		return ($this->getHeight() * $this->getWidth());
	}
	
	public function perimeter() {
		return ($this->getHeight() * 2) + ($this->getWidth() * 2);
	}

	public function getHeight() {
		return $this->height;
	}

	public function getWidth() {
		return $this->width;
	}
}

 ?>