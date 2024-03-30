<?php
$data['statusCampaign'] = '0';

var_dump(empty($data['statusCampaign']));

if (($data['statusCampaign']) == 0) {
$data['status'] = 'الحملة غير مفعلة';
} elseif ($data['statusCampaign'] == 1) {
$data['status'] = 'الحملة مفعلة';
}

echo $data['status'];