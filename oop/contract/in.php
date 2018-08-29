<?php
abstract class  onlineGeteway{
    protected  $options;
    public  function  __construct(){
        $this->options=array(
            'mellat'=>array('merchant'=>'12345',
                'username'=>'5dst',
                'password'=>'37898',
                ),
            'saman'=>array(
                'api_key'=>'s77770s7ts862',
            ),
            'parsian'=>array(
                'username'=>'dkedhxv',
                'password'=>'65782923',
            ),
        );

    }

    abstract   public  function  sendRequeast();
    abstract   public  function  verifyRequeast();
}


class Mellat   extends   onlineGeteway{
    private  $gatewayName;
    private  $mellatOptions;
    public  function __construct()
    {
        $this->gatewayName='mellat';
        parent::__construct();
        $this->mellatOptions=$this->options[$this->gatewayName];

    }

    public  function  sendRequeast()
    {
echo "<pre>";
        var_dump($this->mellatOptions);
echo "</pre>";
    }
     public  function  verifyRequeast()
    {
        // TODO: Implement sendRequeast() method.
    }
}
/*$mellat=new  Mellat();
$mellat->sendRequeast();*/
$gateWay=Factory::make('mellat');
$gateWay->sendRequeast();
class Factory{
    public static  function make($class){
            $className=ucfirst($class);
            if(!class_exists($className)){
                return false;
            }
            return new $className;
    }
}