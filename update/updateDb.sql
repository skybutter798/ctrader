
-- add status column to plans table 
ALTER TABLE plans ADD COLUMN status VARCHAR(255) NOT NULL DEFAULT 'active' AFTER expiration;

-- add referral_proffit_from column to settings table after website_theme
ALTER TABLE settings ADD COLUMN referral_proffit_from VARCHAR(255) NOT NULL DEFAULT 'deposit' AFTER website_theme;

ALTER TABLE settings_conts 
ADD COLUMN old_version VARCHAR(191) NOT NULL DEFAULT '5' AFTER purchase_code;

-- add mt4_type to mt4_accounts table
ALTER TABLE mt4_details ADD COLUMN mt_type VARCHAR(255) NOT NULL AFTER mt4_password;

ALTER TABLE crypto_records
MODIFY COLUMN quantity DECIMAL(16,8);

-- remove the notifications table   
DROP TABLE notifications;

-- add new table called notifications 
CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

