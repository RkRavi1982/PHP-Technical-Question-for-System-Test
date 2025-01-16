<?php

echo '<h1>PHP OOP Classes and Objects Example for Beginners: Technical Question for System Test</h1>';


class php_opps
{
    private $fname;
    private $lname;
    private $address;
    private $contactNo;
    private $workingPost;
    private $salary;
    private $loan;
    private $duesAmount;
    private $transAmount;


    public function __construct()
    {
        $this->fname;
        $this->lname;
        $this->address;
        $this->contactNo;
        $this->workingPost;
        $this->salary;
        $this->loan;
        $this->duesAmount;   
        $this->transAmount; 
    }

    public function createProfile($fn,$ln,$ad,$cn,$wp,$sal,$loan,$da)
    {
        $this->fname=$fn;
        $this->lname=$ln;
        $this->address=$ad;
        $this->contactNo=$cn;
        $this->workingPost=$wp;
        $this->salary=$sal;
        $this->loan=$loan;
        $this->duesAmount=$da;

        $profile = array(
            "fname"=>$this->fname,
            "lname"=>$this->lname,
            "address"=>$this->address,
            "contactNo"=>$this->contactNo,
            "workingPost"=>$this->workingPost,
            "salary"=>$this->salary,
            "loan"=>$this->loan,
            "duesAmount"=>$this->duesAmount    
        );
        return $profile;
    }
    
    public function tranferMoney($fn,$tamt)
    {
        $this->fname=$fn;
        $this->transAmount=$tamt;
        $balanceAmt = $this->duesAmount-$this->transAmount;

        $tAmount = array(
            "fname"=>$this->fname,
            "transAmount"=>$this->transAmount,
            "duesAmount"=>$balanceAmt
        );
        return $tAmount;
    }

}

$obj_oops = new php_opps();
$Profile1 = $obj_oops->createProfile("Rajan","Ravi","New Delhi", "9999999999","Data Analyst","1000000","500000","450000");
echo '<pre>';
print_r($Profile1);
$TAmount = $obj_oops->tranferMoney("Rajan",20000);
echo '<pre>';
print_r($TAmount);
$Profile2 = $obj_oops->createProfile("Deepak","Jha","New Delhi", "8888888888","Technical","1500000","500000","950000");
echo '<pre>';
print_r($Profile2);
$TAmount = $obj_oops->tranferMoney("Deepak",50000);
echo '<pre>';
print_r($TAmount);

?>