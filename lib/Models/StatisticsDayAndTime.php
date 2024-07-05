<?php
/**
 * MassPay API
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: info@masspay.io
 *
 * NOTE: This file is auto generated.
 * Do not edit the file manually.
 */
namespace MasspaySdk\Models;
class StatisticsDayAndTime
{
    /**
     * @var array[] $sun Statistics for Sunday
     */
    public ?array
    $sun;
    /**
     * @var array[] $mon Statistics for Monday
     */
    public ?array
    $mon;
    /**
     * @var array[] $tue Statistics for Tuesday
     */
    public ?array
    $tue;
    /**
     * @var array[] $wed Statistics for Wednesday
     */
    public ?array
    $wed;
    /**
     * @var array[] $thu Statistics for Thursday
     */
    public ?array
    $thu;
    /**
     * @var array[] $fri Statistics for Friday
     */
    public ?array
    $fri;
    /**
     * @var array[] $sat Statistics for Saturday
     */
    public ?array
    $sat;
    public function __construct(?array
    $sun = null, ?array
    $mon = null, ?array
    $tue = null, ?array
    $wed = null, ?array
    $thu = null, ?array
    $fri = null, ?array
    $sat = null)
    {
        $this->sun = $sun;
        $this->mon = $mon;
        $this->tue = $tue;
        $this->wed = $wed;
        $this->thu = $thu;
        $this->fri = $fri;
        $this->sat = $sat;
    }
    public static function fromArray(array $data): self
    {
        return new StatisticsDayAndTime($data['sun'], $data['mon'], $data['tue'], $data['wed'], $data['thu'], $data['fri'], $data['sat']);
    }
    public function toArray(): array
    {
        return [
            'sun' => $this->sun,
            'mon' => $this->mon,
            'tue' => $this->tue,
            'wed' => $this->wed,
            'thu' => $this->thu,
            'fri' => $this->fri,
            'sat' => $this->sat,
        ];
    }
}

