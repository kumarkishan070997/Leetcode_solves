class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
if($x<0){
 return false;
}
else{
    $xx = $x;
$r = 0;
while($x > 0){
    $r = $r*10;
    $r = $r+$x%10;
    $x = (int)($x/10);
}
    
if($xx == $r){
return true;
}
else{
return false;
}
}
    }
}