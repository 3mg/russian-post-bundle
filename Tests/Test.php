<?php
/**
 * Created by PhpStorm.
 * User: nickolay
 * Date: 03.09.15
 * Time: 12:24
 */

namespace a3mg\RussianPostBundle\Tests;


use a3mg\RussianPostBundle\Exception\InvalidTrackException;
use a3mg\RussianPostBundle\Service\RussianPostApi;
use a3mg\RussianPostBundle\Service\RussianPostApiFactory;
use a3mg\RussianPostBundle\Validator\TrackValidator;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testTrackValidation()
    {
        $this->assertEquals( "14211716007389", TrackValidator::filterTrack("142117  16  00738 9.\x00\x00" ) );

        $this->assertTrue(TrackValidator::validateUPU_S10("EE123456785KR"));
        $this->assertFalse(TrackValidator::validateUPU_S10("EE1234567856KR"));
        $this->assertFalse(TrackValidator::validateUPU_S10("EE123456785AP")); // Invalid country code
        $this->assertFalse(TrackValidator::validateUPU_S10("QZ123456785RU"));
        $this->assertFalse(TrackValidator::validateUPU_S10("EE1234AA785RU"));
        $this->assertFalse(TrackValidator::validateUPU_S10("14211716007389"));

        $this->assertTrue(TrackValidator::validateRTM_001_01_99("14211716007389"));
        $this->assertFalse(TrackValidator::validateRTM_001_01_99("14211716007388"));
        $this->assertFalse(TrackValidator::validateRTM_001_01_99("142117160073889"));
        $this->assertFalse(TrackValidator::validateRTM_001_01_99("142117160073"));
        $this->assertFalse(TrackValidator::validateRTM_001_01_99("EE1234AA785RU"));

        $this->assertTrue(TrackValidator::validateTrack("EE123456785KR"));
        $this->assertTrue(TrackValidator::validateTrack("14211716007389"));
    }

    public function testApi()
    {
        $api = RussianPostApiFactory::createApi("admin", "adminpass");

        try {
            /** @var OperationHistoryData $object */
            $object = $api->getTrackOperationHistory("RA322481130RU", $debug);
            $this->assertTrue($object instanceof OperationHistoryData);
            $this->assertGreaterThan(0, count($object->getHistoryRecord()));
        } catch (\Exception $e) {
            $this->assertTrue(null === $e); // Always false because exception must not occurs
        }

        try {
            /** @var OperationHistoryData $object */
            $object = $api->getTrackOperationHistory("EE123456785AP", $debug); // Invalid country code
            $this->assertFalse($object instanceof OperationHistoryData);
        } catch (\Exception $e) {
            $this->assertTrue($e instanceof InvalidTrackException);
        }
    }
}