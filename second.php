<?php
class NegativeValue extends Exception {
	private $value;
	public function __construct($message, $code, $value) {
		parent::__construct ( $message, $code );
		$this->value = $value;
	}

	public function getValue() {
		return $this->value;
	}

	public function __toString() {
		return "Исключение " . $this->getCode () . ": " . $this->getMessage () . "\n" 
				. " в " . $this->getFile () . ", строка " . $this->getLine () . "\n" 
				. "значение :" . $this->value;
	}
}

function equation($b, $m ) {
	if ($m == 0) {
		throw new NegativeValue ( "Коефициент 'а' равен 0!", E_ERROR, $m );
	}
	return $b*$b-$m;
}

function answer($a, $b, $discriminant){
    if($discriminant<0){
        throw new NegativeValue ( "Дискриминант меньше 0!", E_ERROR, $discriminant );
    }
    else if($discriminant == 0){
        return -$b / 2*$a;
    }
    else{
        $x1 = (-$b-sqrt($discriminant)) / 2*$a;
        $x2 =(-$b+sqrt($discriminant)) / 2*$a;
    }
    return array($x1, $x2);
    
}

try {
	// $a = 1;
    // $b = -3;
    // $c = -4;

    //при этих корнях дискриминант будет равен 0
    // $a = 1;
    // $b = -6;
    // $c = 9;

    //при этих корнях дискриминант будет меньше 0
    $a = 5;
    $b = 3;
    $c = 7;


    $m = 4*$a*$c;
    $discriminant = equation ( $b, $m );
    
    $f = answer($a, $b, $discriminant);
    if(is_array($f)==1){
        echo implode(", ", $f);
    }else{
        echo $f;
    }
    
} catch ( NegativeValue $ea ) {
	echo $ea;
}catch ( Exception $ea ) {
	echo $ea;
}

