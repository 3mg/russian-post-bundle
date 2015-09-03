<?php

namespace a3mg\RussianPostBundle\Validator;

use Symfony\Component\Intl\Intl;

/**
 * Class TrackValidator
 * @package a3mg\RussianPostBundle\Validator
 */
class TrackValidator
{
    /**
     * @param $track
     * @return mixed
     */
    public static function filterTrack($track) {
        return preg_replace("/[^0-9A-ZА-Я]|[\xC2\xA0]/", "", mb_strtoupper($track, 'utf-8'));
    }

    /**
     * @param string $track
     * @return bool
     */
    public static function validateTrack($track) {
        $track = self::filterTrack($track);
        return (self::validateUPU_S10($track) || self::validateRTM_001_01_99($track));
    }

    public static function validateUPU_S10($track) {
        if(!preg_match("/^([A-Z]{2})(\\d{8})(\\d{1})([A-Z]{2})$/", $track, $matches)) {
            return false;
        }
        list($track, $serviceIndicator, $serialNumber, $checkDigit, $countryCode) = $matches;

        // Check $serviceIndicator
        if(!preg_match("/([ELMRUVCHABDNPZ][A-Z])|(Q[A-M])|(G[AD])/", $serviceIndicator)) {
            return false;
        }

        // Check $checkDigit
        $serialNumberDigits = str_split($serialNumber);
        $weightFactors = array(8, 6, 4, 2, 3, 5, 9, 7);
        $weightedSum = array_reduce(range(0, 7), function($sum, $i) use ($serialNumberDigits, $weightFactors) {
            return $sum + $serialNumberDigits[$i] * $weightFactors[$i];
        });
        $res = 11 - ($weightedSum % 11);
        $appropriateCheckDigit = ($res >= 1 && $res <= 9) ? $res : ( $res == 11 ? 5 : 0 );

        if ($appropriateCheckDigit != $checkDigit) {
            return false;
        }

        // Check $countryCode
        $countryCodes = array_keys(Intl::getRegionBundle()->getCountryNames());
        if (!in_array($countryCode, $countryCodes)) {
            return false;
        }

        return true;
    }

    public static function validateRTM_001_01_99($track) {
        if(!preg_match("/^(\\d{6})(\\d{2})(\\d{5})(\\d{1})$/", $track, $matches)) {
            return false;
        }
        list($track, $postOfficeIndex, $monthNumber, $serialNumber, $checkDigit) = $matches;

        // Check $checkDigit
        $trackDigits = str_split($track);

        $oddSumX3 = 3 * array_reduce(range(1, 13, 2), function($sum, $i) use ($trackDigits) {
                return $sum + $trackDigits[$i - 1];
            });
        $evenSum = array_reduce(range(2, 12, 2), function($sum, $i) use ($trackDigits) {
            return $sum + $trackDigits[$i - 1];
        });
        $sum = $oddSumX3 + $evenSum;
        $next10 = ceil($sum/10.0) * 10;
        $appropriateCheckDigit = $next10 - $sum;

        if ($appropriateCheckDigit != $checkDigit) {
            return false;
        }

        return true;
    }
}