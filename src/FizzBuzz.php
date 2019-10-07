<?php

class FizzBuzz
{
    var $fizzBuzzCombos =
    [
        "FizzBuzz" => [3,5],
        "Fizz" => [3],
        "Buzz" => [5]
    ];

    public function generateResponse($userNumber)
    {
        $response = "";
        $counter = 1;

        while($counter <= $userNumber)
        {
            $found = false;
            foreach($this->fizzBuzzCombos as $type=>$combos)
            {
                if ($found) continue;
                if($this->checkForType($type,$counter))
                {
                    $found = true;
                    $response = $this->appendOutput($response,$type);
                }
            }
            if(!$found)
                $response = $this->appendOutput($response,$counter);

            $counter++;
        }

        return substr($response,0,-1);
    }

    function checkForType($type, $number)
    {
        foreach($this->fizzBuzzCombos[$type] as $check)
        {
            if(($number % $check) != 0)
                return false;
        }
        return true;
    }

    function appendOutput($output,$add)
    {
        return $output.=$add." ";
    }
    

}
