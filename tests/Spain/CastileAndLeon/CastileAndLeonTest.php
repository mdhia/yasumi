<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @author Sacha Telgenhof <stelgenhof@gmail.com>
 */

namespace Yasumi\Tests\Spain\CastileAndLeon;

use Yasumi\Holiday;

/**
 * Class for testing holidays in Castile And Leon (Spain).
 */
class CastileAndLeonTest extends CastileAndLeonBaseTestCase
{
    /**
     * @var int year random year number used for all tests in this Test Case
     */
    protected $year;

    /**
     * Tests if all national holidays in Castile And Leon are defined by the provider class.
     */
    public function testNationalHolidays()
    {
        $this->assertDefinedHolidays([
            'newYearsDay',
            'epiphany',
            'valentinesDay',
            'maundyThursday',
            'goodFriday',
            'easter',
            'castileAndLeonDay',
            'internationalWorkersDay',
            'assumptionOfMary',
            'nationalDay',
            'allSaintsDay',
            'constitutionDay',
            'immaculateConception',
            'christmasDay',
        ], self::REGION, $this->year, Holiday::TYPE_NATIONAL);
    }

    /**
     * Tests if all observed holidays in Castile And Leon are defined by the provider class.
     */
    public function testObservedHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_OBSERVANCE);
    }

    /**
     * Tests if all seasonal holidays in Castile And Leon are defined by the provider class.
     */
    public function testSeasonalHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_SEASON);
    }

    /**
     * Tests if all bank holidays in Castile And Leon are defined by the provider class.
     */
    public function testBankHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_BANK);
    }

    /**
     * Tests if all other holidays in Castile And Leon are defined by the provider class.
     */
    public function testOtherHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_OTHER);
    }

    /**
     * Initial setup of this Test Case.
     */
    protected function setUp()
    {
        $this->year = $this->generateRandomYear(1981);
    }
}
