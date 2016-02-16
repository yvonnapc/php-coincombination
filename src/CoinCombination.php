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
          if ($cents >= 25) {
            $coins['quarters'] = floor($cents / 25);
            $cents -= $coins['quarters'] * 25;
          }

          if ($cents >= 10) {
            $coins['dimes'] = floor($cents / 10);
            $cents -= $coins['dimes'] * 10;
          }

          if ($cents >= 5) {
            $coins['nickels'] = floor($cents / 5);
            $cents -= $coins['nickels'] * 5;
          }

          $coins['pennies'] = $cents;





          // $coins["dimes"] = (int)($quarters_remainder / 10);
          // $dimes_remainder = $quarters_remainder % 10;
          //
          // $coins["nickels"] = (int)($dimes_remainder / 5);
          //
          //  $coins["pennies"] = $dimes_remainder % 5;

           return $coins;
        }



    }
 ?>
