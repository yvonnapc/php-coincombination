<?php
    class CoinCombination
    {
        function makeCombination($cents)
        {
          $coins = array(
            'quarters' => 0,
            'dimes' => 0,
            'nickels' => 0,
            'pennies' => 0,
          );
          $coins["quarters"] = (int)($cents % 25);

          $coins["dimes"] = (int)($cents / 10);

          $coins["nickels"] = ($cents / 5);

          $coins["pennies"] = ($cents / 1)
        }

    }
 ?>
