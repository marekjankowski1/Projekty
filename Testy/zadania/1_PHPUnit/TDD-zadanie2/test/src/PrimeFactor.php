class PrimeFactors
{

    public static function generatePrimeFactors($n)
    {
        $result = [];
        $divider = 2;
        while ($n > 1)
        {
            while ($n % $divider == 0)
            {
                $result[] = $divider;
                $n /= $divider;
            }
            $divider++;
        }
        return $result;
    }

}
