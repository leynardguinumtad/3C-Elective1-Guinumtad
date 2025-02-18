<?php

namespace App\Http\Controllers; //defualt na lalabas kapag gumawa ng controller

use Illuminate\Http\Request;

class ComputationController extends Controller
{
    public function compute($operator, $num1, $num2)
    { //parameter ng function na compute na kelangan para sa route

        switch ($operator) { //para malaman kung anong operator ang tinaype ng user sa url
            case 'add':
            case 'addition': //if add or addition ang tinype gagawin nya ung nasa baba na operation 
                $result = $num1 + $num2; //mag dagdag gamit tong 2 variables
                break; //hindi na mag proceed if ginawa na 'tong case na 'to
            case 'subtract': //same sa taas na kapag ito ang nasa url gagawin ung nasa baba na operation
                $result = $num1 - $num2; // mag babawas gamit tong 2 variables
                break; //hindi na mag proceed if ginawa na 'tong case na 'to
            case 'multiply': //same sa taas na kapag ito ang nasa url gagawin ung nasa baba na operation
                $result = $num1 * $num2; // mag multiply gamit tong 2 variables
                break; //hindi na mag proceed if ginawa na 'tong case na 'to
            case 'division':
            case 'divide': //same sa taas na kapag ito ang nasa url gagawin ung nasa baba na operation
                $result = $num1 / $num2; // mag divide gamit tong 2 variables
                break; //hindi na mag proceed if ginawa na 'tong case na 'to
        }

        $backgroundColor = ($result % 2 == 0) ? 'green' : 'blue'; //change color ng result pag even numbers green ung box tas pag hindi blue ung box

        $textColor1 = ($num1 % 2 != 0) ? 'blue' : 'orange'; // kulay ng text depende sa input ng user
        $textColor2 = ($num2 % 2 != 0) ? 'blue' : 'orange'; // kulay ng text depende sa input ng user
        $text = ($result % 2 == 0) ? 'Green' : 'BLUE'; // kulay ng text depende sa input ng user

        //Dito lalabas ung output after ma enter na user ung tamang url 
        return "<div style='padding: 20px; text-align: left;'>
                <p>Leynard I. Guinumtad BSIT-3C </p>
                <p>URL: http://domain/$operator/$num1/$num2 </p>
                <p>Value 1: <span style='color: $textColor1;'>$num1</span></p>
                <p>Value 2: <span style='color: $textColor2;'>$num2</span></p>
                <p>Operator: $operator</p>
                <p><strong style='color: $backgroundColor;'>Result (Displayed in $text): </Strong> <span style='background-color: $backgroundColor; padding: 10px; border: 1px solid black; color: white;'>$result</span></p></div>";
    }
}
