<?php
    require_once "src/CoinCombination.php";

    class CoinCombinationTest extends PHPUnit_Framework_TestCase
    {

        function test_One_Cent()
        {
          $test_CoinCombination = new CoinCombination;
          $input = '1';

          $result = $test_CoinCombination->makeCombination($input);

          $this->assertEquals(("Quarters: 0 Dimes: 0 Nickels: 0 Pennies: 1"), $result);
        }

        function test_Five_Cents()
        {
          $test_CoinCombination = new CoinCombination;
          $input = '5';

          $result = $test_CoinCombination->makeCombination($input);

          $this->assertEquals(("Quarters: 0 Dimes: 0 Nickels: 1 Pennies: 0"), $result);
        }

        function test_Ten_Cents()
        {
          $test_CoinCombination = new CoinCombination;
          $input = '10';

          $result = $test_CoinCombination->makeCombination($input);

          $this->assertEquals(("Quarters: 0 Dimes: 1 Nickels: 0 Pennies: 0"), $result);
        }

        function test_TwentyfiveCenters()
        {
          $test_CoinCombination = new CoinCombination;
          $input = '25';

          $result = $test_CoinCombination->makeCombination($input);

          $this->assertEquals(("Quarters:1 Dimes: 0 Nickels: 0 Pennies: 0"), $result);
        }
    }

 ?>
