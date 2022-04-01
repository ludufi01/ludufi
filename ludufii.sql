-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 02:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ludufii`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2022_01_24_110216_create_scholar_tracker_table', 3),
(9, '2022_02_02_053119_create_quiz_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test1@gmail.com', 'oSup2fXc6o5ZrPDIpyIrlh3yx2HMOrdY8vcx6A1cFjaYn69LiIimJt2Gvc1u', '2022-01-17 04:06:33'),
('ishal.s12345@gmail.com', 'zl3TW8VRpnP0xT17ELnWYsuYfo6Q2gxFlI5ZpfP9iidg5033fht7S0RoGTBQ', '2022-01-17 05:10:37'),
('ishal.s12345@gmail.com', '0ZFdZhWCchOrkhYpCnCD2Ss8XYLUgEAUXvrnHByJ2Mk3l1ewWCeviwCzEMgR', '2022-01-17 05:11:19'),
('ishal.s12345@gmail.com', 'NNagk5ykdyjWxK5XHBHp6wTNIfjLrf588ZjlSCRhwZ06ZD8KiZ5Giwzkmbnl', '2022-01-17 05:12:02'),
('ishal.s12345@gmail.com', '3Du0XLYmT0ss5LSy04WLsWcyrowHQdDw6y7pOWaoZv3lC2YfGkz971QupJCj', '2022-01-17 05:30:01'),
('ishal.s12345@gmail.com', 'LjajQrv4On8wo6Woa9SKaBXQ3rTnz1gxwS8LigM6ofM2vHy0giUmCZ7jzOvL', '2022-01-17 05:31:38'),
('ishal.s12345@gmail.com', 'oqEx0hCfsao2mbIDhMyGoDrxtUY8jmJ6Wc9EzI97MuLavBH6oyiH80kPbUan', '2022-01-17 05:31:44'),
('ishal.s12345@gmail.com', 'PMlFz4lRPbIcpewprNFwlreBkJlHpIBxW6YCz9j2Av4RKAFFPUq2WypyDeJg', '2022-01-17 05:32:07'),
('ishal.s12345@gmail.com', 'RQiUl3Cztcy8jmYunvq33SDwZl5OMEL8fAIdpN1atM5pbBdKruJcRQ546duM', '2022-01-17 05:33:46'),
('ishal.s12345@gmail.com', 'FxMMT2h6m6aAPXZOQ02yAN5TweeF9hillAmR1eeZmMSlCdtcMKQRCxI0xs2w', '2022-01-17 05:40:59'),
('ishal.s12345@gmail.com', 'ZwSbuxoSQ2eHy6ItM1NgOYQD3yjc3peKmvtxZ24OGWuKZU87ApNsd0ZHew7G', '2022-01-17 05:43:21'),
('ishal.s12345@gmail.com', 'fLuPz5jhrDc42kotF8nMvlzCCeOEopIBOhvJpnHBZjknpYdnqaYcJnOSuNEW', '2022-01-17 05:49:59'),
('ishal.s12345@gmail.com', '4888FS8Q7Lf5gIqUt5haZRi5dyiffNsSl9W2KvnRUrEpMubhwFT2TOtQf5qF', '2022-01-17 05:50:23'),
('ishal.s12345@gmail.com', 'osjVFWg8QWEemRpQe6w3snfvxr16s4CDfHp7XCc9R7sdY7YGyh8CDmfESDid', '2022-01-17 05:50:38'),
('ishal.s12345@gmail.com', 'RxwShmz41dx2SJDy9AaIiZAWixRAkCVqcbvx2blJjO56eKGv6k2XNoAk0LyF', '2022-01-17 05:51:56'),
('ishal.s12345@gmail.com', 'ibCgWemCdkuXnskL4Na03SaWXrcazr3ZGN1fpPD0dMJkrAVURIGyYRr6mAgK', '2022-01-17 05:53:12'),
('ishal.s12345@gmail.com', 'cjfKPCGClrdmWdVASq9XfLvLCNYdBU2AZNXQicXBo1FCvj6Qq6jGOcyhfO9U', '2022-01-17 06:17:19'),
('ishal.s12345@gmail.com', 'wjcwhVUQMFMsG9uQUY8UaOOPoSO8qR45qzDeOHtiMBht5AUUs7Yc59Sv9Blu', '2022-01-17 06:17:58'),
('ishal.s12345@gmail.com', 'K4xU5QTt7awPye3W0wXMI7jilLjcBJCO3oVRJeP7Zifmdlenc1VY3kVY8Gha', '2022-01-17 06:37:40'),
('ishal.s12345@gmail.com', 'sH3lkYrF8Iu7X69ePkssoS84cllQvj17jmQjHxKvs1Xu1J2oIc9NJ0M7Cu2O', '2022-01-17 06:38:32'),
('ishal.s12345@gmail.com', 'dfB1quSTMcyu7ZBjZVEEYJVBNVzSFgL2tBFPI1lLMAxbhdkG2L1oNUctXeYv', '2022-01-17 06:48:20'),
('ishal.s12345@gmail.com', '1xgrvi0KfIqgpyGTHgvVDRLAh5Asm0z3a9BaQpJ6payjthOxyXV3d0ujEOur', '2022-01-17 06:50:15'),
('ishal.s12345@gmail.com', 'CX4vbtNJqEaZ1NaugXNaNgZ48IxVV8PsfSvmiOtcpdU3nIsLcF2i6sgyrwts', '2022-01-17 06:55:39'),
('ishal.s12345@gmail.com', 'Axjuo8sFMjf158seineFwlWX5wTapr8eCvbInXgQCVOFLMCkAB1mOrnH1nMh', '2022-01-17 06:56:56'),
('ishal.s12345@gmail.com', 'cg0ojmmkzz6BdoDW3ne4mGEQlttER0dLTadQfMK0cYCXrYH7zJLFmJmM28tl', '2022-01-17 06:59:15'),
('test@gmail.com', 'ua4CpZNK4IcJSn3EVGUN0VREvTokHZM6xaFg8sdCC7RfYsQpl70GyKyEgpUZ', '2022-01-18 02:07:50'),
('test@gmail.com', '5zWo3EmSWOAQvmXAGOzQvlNtK5pvjs2xqhBSiVTpdgN8HV2i45fpDaqo5Ge5', '2022-01-18 02:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discord_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previous_mmr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ronin_payout_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_available_axie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_occupation` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `still_student` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bonus_damage_combo_attack` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `axie_highest_morale` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `axie_skills_additional_damage` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `axie_highest_speed` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attack_ignore_shield` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `all_buffs` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `axie_healing_ability` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `axie_melee_cards` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `axie_discard_cards` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `axie_lowest_shield` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_backdoor_combos` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shrimpinator_special` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kind_axie_card_combos` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terminator_special` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disablesour_special` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reptile_axie_special` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `triple_bug_signal_cute_bunny_special` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `double_anemone_special` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aqua_jump_best_move` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `axie_pul_middle_lane` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chosen_axie_previous` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `email`, `full_name`, `twitter_username`, `discord_id`, `previous_mmr`, `ronin_payout_address`, `time_available_axie`, `current_occupation`, `still_student`, `bonus_damage_combo_attack`, `axie_highest_morale`, `axie_skills_additional_damage`, `axie_highest_speed`, `attack_ignore_shield`, `all_buffs`, `axie_healing_ability`, `axie_melee_cards`, `axie_discard_cards`, `axie_lowest_shield`, `cancel_backdoor_combos`, `shrimpinator_special`, `kind_axie_card_combos`, `terminator_special`, `disablesour_special`, `reptile_axie_special`, `triple_bug_signal_cute_bunny_special`, `double_anemone_special`, `aqua_jump_best_move`, `axie_pul_middle_lane`, `chosen_axie_previous`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ishal.s12345@gmail.com', 'asd', 'asd', 'asd', 'on', 'asd', 'on', 'asd', 'on', 'asd', 'asd', 'asd', 'asd', 'asd', NULL, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'images/quiz/070845WhatsApp Image 2022-01-03 at 12.13.49 AM.jpeg', 'asd', 0, '2022-02-02 02:08:45', '2022-02-02 02:08:45'),
(2, 'ishal.s12345@gmail.com', 'asd', 'asd', 'asd', 'between_1200_1600', 'asd', '2_4_hours', 'asd', 'yes', 'asd', 'asd', 'asd', 'asd', 'asd', '[\"Aroma\",\"Fragile\",\"Attack up\",\"Stench\",\"Stun\"]', 'asd', 'asd', 'asd', 'asd', 'asd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, '2022-02-02 02:31:06', '2022-02-02 02:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `scholar_trackers`
--

CREATE TABLE `scholar_trackers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ronin_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_percentage` int(11) NOT NULL,
  `scholar_percentage` int(11) NOT NULL,
  `scholar_ronin_address` int(11) DEFAULT NULL,
  `trainee_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainee_ronin_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholar_trackers`
--

INSERT INTO `scholar_trackers` (`id`, `name`, `ronin_address`, `manager_percentage`, `scholar_percentage`, `scholar_ronin_address`, `trainee_percentage`, `trainee_ronin_address`, `created_at`, `updated_at`) VALUES
(4, 'Demo123', 'ronin:97a9107c1793bc407d6f527b77e7fff4d812bece', 11, 89, NULL, NULL, NULL, '2022-01-24 07:43:25', '2022-02-04 08:48:00'),
(5, 'Demo1', 'ronin:9e020194df76cbe13b5629edf917a334523087af', 2, 98, NULL, NULL, NULL, '2022-01-25 06:17:48', '2022-01-25 06:17:48'),
(7, 'Demo2', 'ronin:c1267dbd279bb074130d4d0c4172d62a4bae4ec2', 3, 97, NULL, NULL, NULL, '2022-01-26 08:46:58', '2022-01-26 08:46:58'),
(12, 'Demo3', 'ronin:2ebd51e17b56e9cea3317e8d13ab99ffb168427c', 4, 96, NULL, NULL, NULL, '2022-01-26 09:00:09', '2022-01-26 09:00:09'),
(16, 'Demo4', 'ronin:54e7dbd0a96ef19185aff9782080c12e7c4a596f', 10, 90, NULL, NULL, NULL, '2022-01-27 05:08:18', '2022-01-27 05:08:18'),
(35, 'Demo5', 'ronin:798c78078886c198b30e2b5651dc6103e5a52f2a', 5, 95, NULL, NULL, NULL, '2022-01-27 06:12:31', '2022-01-27 06:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `quiz` int(11) NOT NULL,
  `ronin_wallet` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `email_verified_at`, `password`, `country`, `phone`, `status`, `code`, `type`, `quiz`, `ronin_wallet`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'asd', 'ishal.s112345@gmail.com', '', NULL, '$2y$10$z7diUaFTxWhKMww.ujfKLeJHn5p1uXJwnuUaM1XqXZObrRwZ8Zpeu', '', 0, '', 2764, 0, 0, 0, NULL, '2022-01-17 01:54:19', '2022-01-17 07:10:23'),
(2, 'asd', 'asd', 'test@gmail.com', '', NULL, '$2y$10$pwH7RVRaup2d1RRVLfCTNOrkkpfUeKDLRHcCI7npszpkoesMrZV5.', '', 0, '', 1785, 0, 0, 0, NULL, '2022-01-17 02:32:36', '2022-01-18 02:17:03'),
(3, 'asd', 'asd', 'test3@gmail.com', '', NULL, '$2y$10$B8fTsm6uKdg1PSteU.JoD.7h.Zmvapq9OOnP.g6Fh4yCJW7Ig2Qsm', '', 0, '', 0, 0, 0, 0, NULL, '2022-01-17 03:02:33', '2022-01-17 03:02:33'),
(4, 'asd', 'asd', 'ishal@gmail.com', '', NULL, '$2y$10$/ctqgmfEK1ErexGvjb..RO2vqyXLQXW.3nXGm6qpplI3fJLG6CZfO', '', 0, '1', 2409, 0, 0, 0, NULL, '2022-01-17 08:37:19', '2022-01-17 08:44:43'),
(5, 'asd', 'asd', 'ishal.s12345@gmail.com', 'wasiqgh', NULL, '$2y$10$3r8PdOBMFGLYCFpuW0X.ROrxakIS5z4ptH3WmvZ2Ck5uTqYt7pe.S', 'Pakistan (‫پاکستان‬‎)', 923123123123, '1', 9078, 0, 0, 0, NULL, '2022-01-18 01:34:25', '2022-01-18 01:35:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholar_trackers`
--
ALTER TABLE `scholar_trackers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `scholar_tracker_ronin_address_unique` (`ronin_address`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `scholar_trackers`
--
ALTER TABLE `scholar_trackers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
