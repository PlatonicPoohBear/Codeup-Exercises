<?php 


class Square extends Rectangle 
{
	public function __construct($side) {
		parent::__construct($side, $side);
	}

	public function perimeter() {
		return ($this->height * 4);
	}

	public function area() {
		return ($this->height) * ($this->height);
	}
} 


 ?>