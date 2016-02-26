<?php
$installer = $this;
$installer->startSetup();
$installer->run("
INSERT INTO `{$installer->getTable('directory_country_region')}` VALUES
(NULL , 'IN', 'AN','Andaman and Nicobar'),
(NULL , 'IN', 'BR','Bihar'),
(NULL , 'IN', 'MZ','Mizoram'),
(NULL , 'IN', 'DD','Daman and Diu'),
(NULL , 'IN', 'DN','Dadra and Nagar Haveli'),
(NULL , 'IN', 'DL','Delhi'),
(NULL , 'IN', 'NL','Nagaland'),
(NULL , 'IN', 'WB','West Bengal'),
(NULL , 'IN', 'HR','Haryana'),
(NULL , 'IN', 'HP','Himachal Pradesh'),
(NULL , 'IN', 'AS','Assam'),
(NULL , 'IN', 'UT','Uttaranchal'),
(NULL , 'IN', 'JH','Jharkhand'),
(NULL , 'IN', 'JK','Jammu and Kashmir'),
(NULL , 'IN', 'UP','Uttar Pradesh'),
(NULL , 'IN', 'SK','Sikkim'),
(NULL , 'IN', 'CT','Chhattisgarh'),
(NULL , 'IN', 'CH','Chandigarh'),
(NULL , 'IN', 'GA','Goa'),
(NULL , 'IN', 'GJ','Gujarat'),
(NULL , 'IN', 'RJ','Rajasthan'),
(NULL , 'IN', 'MP','Madhya Pradesh'),
(NULL , 'IN', 'MH','Maharashtra'),
(NULL , 'IN', 'TN','Tamil Nadu'),
(NULL , 'IN', 'PY','Puducherry'),
(NULL , 'IN', 'AP','Andhra Pradesh'),
(NULL , 'IN', 'TR','Tripura'),
(NULL , 'IN', 'AR','Arunachal Pradesh'),
(NULL , 'IN', 'KA','Karnataka'),
(NULL , 'IN', 'PB','Punjab'),
(NULL , 'IN', 'ML','Meghalaya'),
(NULL , 'IN', 'MN','Manipur'),
(NULL , 'IN', 'OR','Orissa'),
(NULL , 'IN', 'KL','Kerala');

INSERT INTO `{$installer->getTable('directory_country_region_name')}`  (`locale` ,`region_id` ,`name` ) 
SELECT 'en_US', tmp.region_id, tmp.default_name FROM `{$installer->getTable('directory_country_region')}` 
AS tmp WHERE tmp.country_id='IN';
");

/*
INSERT INTO `{$installer->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES
    ('IN', 'DH', 'Dadra and Nagar Haveli');
INSERT INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Dadra and Nagar Haveli');
*/
$installer->endSetup();