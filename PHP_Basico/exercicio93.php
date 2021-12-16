<?Php

// Builder

use Symfony\Component\VarDumper\VarDumper;

interface BuilderPasswordGenerator{
    public function setUpperIncluded(bool $state);
    public function setLowerIncluded(bool $state);
    public function setDigitIncluded(bool $state);
    public function setPunctuationIncluded(bool $state);
    public function setAmbiguousExcluded(bool $state);
    public function setMinUpper(int $qnt);
    public function setMinLower(int $qnt);
    public function setMinDigits(int $qnt);
    public function setMinPunctuation(int $qnt);
}

//class concrete
class PasswordGenerator{
    public $upperIncluded;
    public $lowerIncluded;
    public $digitIncluded;
    public $punctuationIncluded;
    public $ambiguousExcluded;
    public $minUpper;
    public $minLower;
    public $minDigits;
    public $minPunctuation;

    public function __construct(){
        
    }
}

class PasswordGeneratorEasy implements BuilderPasswordGenerator{
    
    private PasswordGenerator $passwordGenerator;
    
    public function __construct()
    {
        $this->passwordGenerator = new PasswordGenerator();
        $this->setUpperIncluded(false);
        $this->setLowerIncluded(false);
        $this->setDigitIncluded(false);
        $this->setPunctuationIncluded(false);
        $this->setAmbiguousExcluded(false);
        $this->setMinUpper(0);
        $this->setMinLower(0);
        $this->setMinDigits(6);
        $this->setMinPunctuation(0);
    }
    
    public function setUpperIncluded(bool $state){
        $this->passwordGenerator->upperIncluded=$state;
    }

    public function setLowerIncluded(bool $state){
        $this->passwordGenerator->lowerIncluded=$state;
    }

    public function setDigitIncluded(bool $state){
        $this->passwordGenerator->digitIncluded=$state;
    }

    public function setPunctuationIncluded(bool $state){
        $this->passwordGenerator->punctuationIncluded=$state;
    }

    public function setAmbiguousExcluded(bool $state){
        $this->passwordGenerator->ambiguousExcluded=$state;
    }

    public function setMinUpper(int $qnt){
        $this->passwordGenerator->minUpper=$qnt;
    }

    public function setMinLower(int $qnt){
        $this->passwordGenerator->minLower=$qnt;
    }

    public function setMinDigits(int $qnt){
        $this->passwordGenerator->minDigits=$qnt;
    }

    public function setMinPunctuation(int $qnt){
        $this->passwordGenerator->minPunctuation=$qnt;
    }
    public function getPasswordGenerator(){
        return $this->passwordGenerator;
    }
}

$passwordEasy = new PasswordGeneratorEasy();
var_dump($passwordEasy);

