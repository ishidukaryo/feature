<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。

class Car
{
    private $name; #車種
    private $number; #カーナンバー
    private $color; #色

    public function __construct($name, $number, $color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function information()
    {
        echo '車の車種:' . $this->getName() . '、車体番号:' . $this->getNumber() . '、カラー:' . $this->getColor() . 'です。';
    }
}

class Taxi extends Car{
    private $passenger;

    public function pickUp($passenger)
    {
        $this->passenger = $passenger;
    }

    public function information()
    {
        return '車の車種:' . $this->getName() . '、車体番号:' . $this->getNumber() . '、カラー:' . $this->getColor() . '、乗車人数は' . $this->passenger . 'です。';
    }

    public function lower($passenger)
    {
        if ($this->passenger - $passenger >= 0) {
            $this->passenger = $this->passenger - $passenger;
            echo $passenger . '人降車しました。';
        } else {
            echo '降車人数に誤りがあります';
        }
    }

}




// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->information();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 2人降車
$taxi1->lower(2);
