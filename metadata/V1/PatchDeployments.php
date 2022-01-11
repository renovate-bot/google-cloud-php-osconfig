<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_deployments.proto

namespace GPBMetadata\Google\Cloud\Osconfig\V1;

class PatchDeployments
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Datetime::initOnce();
        \GPBMetadata\Google\Type\Dayofweek::initOnce();
        \GPBMetadata\Google\Type\Timeofday::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/cloud/osconfig/v1/patch_deployments.protogoogle.cloud.osconfig.v1google/api/resource.proto)google/cloud/osconfig/v1/patch_jobs.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/type/datetime.protogoogle/type/dayofweek.protogoogle/type/timeofday.proto"�
PatchDeployment
name (	
description (	B�AK
instance_filter (2-.google.cloud.osconfig.v1.PatchInstanceFilterB�A@
patch_config (2%.google.cloud.osconfig.v1.PatchConfigB�A0
duration (2.google.protobuf.DurationB�AK
one_time_schedule (2).google.cloud.osconfig.v1.OneTimeScheduleB�AH N
recurring_schedule (2+.google.cloud.osconfig.v1.RecurringScheduleB�AH 4
create_time (2.google.protobuf.TimestampB�A4
update_time	 (2.google.protobuf.TimestampB�A:
last_execute_time
 (2.google.protobuf.TimestampB�A<
rollout (2&.google.cloud.osconfig.v1.PatchRolloutB�A:d�Aa
\'osconfig.googleapis.com/PatchDeployment6projects/{project}/patchDeployments/{patch_deployment}B

schedule"H
OneTimeSchedule5
execute_time (2.google.protobuf.TimestampB�A"�
RecurringSchedule-
	time_zone (2.google.type.TimeZoneB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A0
time_of_day (2.google.type.TimeOfDayB�AM
	frequency (25.google.cloud.osconfig.v1.RecurringSchedule.FrequencyB�A?
weekly (2(.google.cloud.osconfig.v1.WeeklyScheduleB�AH A
monthly (2).google.cloud.osconfig.v1.MonthlyScheduleB�AH :
last_execute_time	 (2.google.protobuf.TimestampB�A:
next_execute_time
 (2.google.protobuf.TimestampB�A"J
	Frequency
FREQUENCY_UNSPECIFIED 

WEEKLY
MONTHLY	
DAILYB
schedule_config"B
WeeklySchedule0
day_of_week (2.google.type.DayOfWeekB�A"�
MonthlyScheduleJ
week_day_of_month (2(.google.cloud.osconfig.v1.WeekDayOfMonthB�AH 
	month_day (B�AH B
day_of_month"]
WeekDayOfMonth
week_ordinal (B�A0
day_of_week (2.google.type.DayOfWeekB�A"�
CreatePatchDeploymentRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project 
patch_deployment_id (	B�AH
patch_deployment (2).google.cloud.osconfig.v1.PatchDeploymentB�A"Z
GetPatchDeploymentRequest=
name (	B/�A�A)
\'osconfig.googleapis.com/PatchDeployment"�
ListPatchDeploymentsRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (B�A

page_token (	B�A"}
ListPatchDeploymentsResponseD
patch_deployments (2).google.cloud.osconfig.v1.PatchDeployment
next_page_token (	"]
DeletePatchDeploymentRequest=
name (	B/�A�A)
\'osconfig.googleapis.com/PatchDeploymentB�
com.google.cloud.osconfig.v1BPatchDeploymentsZ@google.golang.org/genproto/googleapis/cloud/osconfig/v1;osconfig�Google.Cloud.OsConfig.V1�Google\\Cloud\\OsConfig\\V1�Google::Cloud::OsConfig::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

