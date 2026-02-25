class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function firstMissingPositive($nums) {
        $size = count($nums);
        for($i=0;$i<$size;$i++){
            $number = $nums[$i];
            $position = $number-1;
            if($nums[$position] != $number){
                $temp = $nums[$i];
                $nums[$i] = $nums[$position];
                $nums[$position] = $temp;
                $i--;
            }
        }
        foreach($nums as $key => $value){
            if($key+1 != $value)
                return $key+1;
        }
        return $size+1;
    }
}