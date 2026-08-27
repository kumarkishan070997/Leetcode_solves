class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
    $str = '';
    $max = 0;
    $result = '';
    for($i=0;$i<strlen($s);$i++){
        for($j=$i;$j<strlen($s);$j++){
        $str = substr($s, $i, $j - $i + 1);
            if($str === strrev($str)){
                if($max < strlen($str)){
                $max = strlen($str);
                $result = $str;
                }
            }
        }
        $str = '';
    }
    return $result;
}
}