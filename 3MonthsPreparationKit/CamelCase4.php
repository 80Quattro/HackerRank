<?php
/*
    Camel Case is a naming style common in many programming languages. In Java, method and variable names typically start 
    with a lowercase letter, with all subsequent words starting with a capital letter (example: startThread). 
    Names of classes follow the same pattern, except that they start with a capital letter (example: BlueCar).
    Your task is to write a program that creates or splits Camel Case variable, method, and class names.

    Input Format

    Each line of the input file will begin with an operation (S or C) followed by a semi-colon followed by M, C, or V followed by a semi-colon followed by the words you'll need to operate on.
    The operation will either be S (split) or C (combine)
    M indicates method, C indicates class, and V indicates variable
    In the case of a split operation, the words will be a camel case method, class or variable name that you need to split into a space-delimited list of words starting with a lowercase letter.
    In the case of a combine operation, the words will be a space-delimited list of words starting with lowercase letters that you need to combine into the appropriate camel case String. Methods should end with an empty set of parentheses to differentiate them from variable names.

    Output Format
        For each input line, your program should print either the space-delimited list of words (in the case of a split operation) 
        or the appropriate camel case string (in the case of a combine operation).

    Sample Input
        S;M;plasticCup()
        C;V;mobile phone
        C;C;coffee machine
        S;C;LargeSoftwareBook
        C;M;white sheet of paper
        S;V;pictureFrame

    Sample Output
        plastic cup
        mobilePhone
        CoffeeMachine
        large software book
        whiteSheetOfPaper()
        picture frame

    Explanation
        Use Scanner to read in all information as if it were coming from the keyboard.
        Print all information to the console using standard output (System.out.print() or System.out.println()).
        Outputs must be exact (exact spaces and casing).
*/

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$input = array();

while( $line = fgets($_fp) ) {
    array_push(
        $input, 
        explode( ';', $line )
    );
}

fclose( $_fp );

foreach($input as $in) {
    
    if($in[0] == 'S') {
        echo split($in[1], $in[2]);
    }
    elseif($in[0] == 'C') {
        echo combine($in[1], $in[2]);
    }
}

function split($type, $name) {
    
    if($type == 'M') { // method
        $name = trim($name);
        $name = substr($name, 0, -2); // erase '()' in the end
        $name .= "\n";
    }
    elseif($type == 'C') { // class
        $name = strtolower( substr($name, 0, 1) ) . substr($name, 1); // first letter - to lower case
    }
    
    $name = str_split($name);
    
    $str = '';
    foreach($name as $n) {
        if(ctype_upper($n)) {
            $str .= ' ' . strtolower($n);
        }
        else {
            $str .= $n;
        }
    }
    
    return $str;
}

function combine($type, $name) {
    
    if($type == 'C') { // class
        $name = strtoupper( substr($name, 0, 1) ) . substr($name, 1); // first letter - to upper case
    }
    
    $name = str_split($name);
    
    $str = '';
    $nextUpper = false;
    foreach($name as $n) {
        if($n == ' ') {
            $nextUpper = true;
        }
        else {
            if($nextUpper) {
                $str .= strtoupper($n);
                $nextUpper = false;
            }
            else {
                $str .= $n;
            }
        }
    }
    
    if($type == 'M') { // method
        $str = trim($str);
        $str .= "()\n";
    }
    
    return $str;
    
}

?>
