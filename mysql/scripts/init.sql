CREATE DATABASE IF NOT EXISTS `site`;

USE `site`;

CREATE TABLE IF NOT EXISTS `survey_responses` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `followup_code` VARCHAR(10) NOT NULL,
  `testimonial` TEXT,
  `postal_address` TEXT,
  `followup_date_completed` DATETIME,
  `is_followup_completed` tinyint(1) GENERATED ALWAYS AS (`followup_date_completed` IS NOT NULL)
);

CREATE UNIQUE INDEX `idx_followup_code` ON `survey_responses` (`followup_code`);

INSERT INTO `survey_responses` (`name`, `followup_code`, `testimonial`, `postal_address`, `followup_date_completed`)
VALUES 
  ('Ben Farmer', 'ABC123', 'Great product. Very happy. Would buy again.', '123 Fake St\r\nToowoomba QLD 4350', '2022-06-21 10:15:06'),
  ('Jane Doe', 'XYZ456', NULL, NULL, NULL),
  ('Thomas Person', 'DEF553', NULL, NULL, NULL),
  ('Samantha Somebody', 'AAA223', NULL, NULL, NULL);