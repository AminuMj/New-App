<?php
class StockController extends CController
{
/**
@param string the symbol of the stock
@return float the stock price
@soap
*/
public function getPrice($symbol) { $prices=array('IBM'=>100, 'GOOGLE'=>350); return isset($prices[$symbol])?$prices[$symbol]:0; //...return stock price for $symbol }
}


    public function actions()
    {
        return array(
            'quote'=>array(
                'class'=>'CWebServiceAction',
            ),
        );
    }
 
    /**
     * @param string the symbol of the stock
     * @return float the stock price
     * @soap
     */
    public function getPrice($symbol)
    {
        //...return stock price for $symbol
    }


$client=new SoapClient('http://hostname/path/to/index.php?r=stock/quote');
echo $client->getPrice('GOOGLE');

}
)