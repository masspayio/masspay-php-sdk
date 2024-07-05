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
/**
 * @name ReportSchedule
 * ReportSchedule
 */
/**
 * Report export type
 */
enum reportScheduleExport: string {
    case CSV = "csv";
    case XLSX = "xlsx";
}
/**
 * Defines when a report will be generated, e.g. everyday, every week/couple of weeks at a certain day, every x of the month at a certain day
 */
enum reportScheduleIntervalType: string {
    case DAILY = "daily";
    case WEEKLY = "weekly";
    case BI_WEEKLY = "bi-weekly";
    case X_TH_OF_THE_MONTH = "x-th-of-the-month";
}
/**
 * Report schedule day of the week if intervalType is weekly/bi-weekly
 */
enum reportScheduleDayOfTheWeek: string {
    case MON = "mon";
    case TUE = "tue";
    case WED = "wed";
    case THU = "thu";
    case FRI = "fri";
    case SAT = "sat";
    case SUN = "sun";
}
/**
 * Defines a date or a date range from which transactions will be included to a report, e.g. yesterday, last week (from last mon till last sun), last 7 days (from yesterday to 7 days back)
 */
enum reportScheduleIncludeTransactionsFor: string {
    case YESTERDAY = "yesterday";
    case LAST_7_DAYS = "last-7-days";
    case LAST_14_DAYS = "last-14-days";
    case LAST_28_DAYS = "last-28-days";
    case PREVIOUS_MONTH = "previous-month";
    case PREVIOUS_WEEK = "previous-week";
    case PREVIOUS_2_WEEKS = "previous-2-weeks";
}
class ReportSchedule
{
    /**
     * @var string $name The name of the report
     */
    public ?string $name;
    /**
     * @var reportScheduleFields[] $fields Array of fields
     */
    public ?array
    $fields;
    /**
     * @var string[] $organisations Array of organisations
     */
    public ?array
    $organisations;
    /**
     * @var ReportFilterRules $filter Report filter
     */
    public ?array
    $filter;
    /**
     * @var reportScheduleExport $export Report export type
     */
    public ?reportScheduleExport $export;
    /**
     * @var reportScheduleIntervalType $intervalType Defines when a report will be generated, e.g. everyday, every week/couple of weeks at a certain day, every x of the month at a certain day
     */
    public ?reportScheduleIntervalType $intervalType;
    /**
     * @var int $dayOfTheMonth Day of the month if the interval type equals to x-th-of-the-month
     */
    public ?int $dayOfTheMonth;
    /**
     * @var reportScheduleDayOfTheWeek $dayOfTheWeek Report schedule day of the week if intervalType is weekly/bi-weekly
     */
    public ?reportScheduleDayOfTheWeek $dayOfTheWeek;
    /**
     * @var reportScheduleIncludeTransactionsFor $includeTransactionsFor Defines a date or a date range from which transactions will be included to a report, e.g. yesterday, last week (from last mon till last sun), last 7 days (from yesterday to 7 days back)
     */
    public ?reportScheduleIncludeTransactionsFor $includeTransactionsFor;
    /**
     * @var string $emailAddress A specific email address to receive a notification about this kind of report
     */
    public ?string $emailAddress;
    /**
     * @var string $webhookUrl A webhook url to receive a notification about this kind of report
     */
    public ?string $webhookUrl;
    /**
     * @var string $createdAt Created at
     */
    public ?string $createdAt;
    /**
     * @var string $nextDateToGenerate Date when the next time will be sent to generation
     */
    public ?string $nextDateToGenerate;
    public function __construct(?string $name = null, ?array
    $fields = null, ?array
    $organisations = null, ?array
    $filter = null, ?reportScheduleExport $export = null, ?reportScheduleIntervalType $intervalType = null, ?int $dayOfTheMonth = null, ?reportScheduleDayOfTheWeek $dayOfTheWeek = null, ?reportScheduleIncludeTransactionsFor $includeTransactionsFor = null, ?string $emailAddress = null, ?string $webhookUrl = null, ?string $createdAt = null, ?string $nextDateToGenerate = null)
    {
        $this->name = $name;
        $this->fields = $fields;
        $this->organisations = $organisations;
        $this->filter = $filter;
        $this->export = $export;
        $this->intervalType = $intervalType;
        $this->dayOfTheMonth = $dayOfTheMonth;
        $this->dayOfTheWeek = $dayOfTheWeek;
        $this->includeTransactionsFor = $includeTransactionsFor;
        $this->emailAddress = $emailAddress;
        $this->webhookUrl = $webhookUrl;
        $this->createdAt = $createdAt;
        $this->nextDateToGenerate = $nextDateToGenerate;
    }
    public static function fromArray(array $data): self
    {
        return new ReportSchedule($data['name'], $data['fields'], $data['organisations'], $data['filter'], $data['export'], $data['interval_type'], $data['day_of_the_month'], $data['day_of_the_week'], $data['include_transactions_for'], $data['email_address'], $data['webhook_url'], $data['created_at'], $data['next_date_to_generate']);
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'fields' => $this->fields,
            'organisations' => $this->organisations,
            'filter' => $this->filter,
            'export' => $this->export,
            'interval_type' => $this->intervalType,
            'day_of_the_month' => $this->dayOfTheMonth,
            'day_of_the_week' => $this->dayOfTheWeek,
            'include_transactions_for' => $this->includeTransactionsFor,
            'email_address' => $this->emailAddress,
            'webhook_url' => $this->webhookUrl,
            'created_at' => $this->createdAt,
            'next_date_to_generate' => $this->nextDateToGenerate,
        ];
    }
}

