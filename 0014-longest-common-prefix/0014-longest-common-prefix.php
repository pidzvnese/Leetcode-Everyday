class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if (empty($strs)) {
            return "";
        }

        $prefix = $strs[0];
        $count = count($strs);

        for ($i = 1; $i < $count; $i++) {
            while (!str_starts_with($strs[$i], $prefix)) {
                $prefix = substr($prefix, 0, -1);
                if (empty($prefix)) {
                    return "";
                }
            }
        }

        return $prefix;
    }
}