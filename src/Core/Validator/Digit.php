<?php
/**
 * Digit Validator
 */
class Digit implements ValidatorInterface
{
    /**
     * @param null $value
     * @return bool
     */
    public function validate($value = null)
    {
        if (empty($value)) return false;

        if (ctype_digit($value)) {
            return true;
        }
        return false;
    }
}