--
-- Database: `laravel`
--

-- --------------------------------------------------------
--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `age`, `phone`, `city`, `email`, `company`, `created_at`, `updated_at`) VALUES
(1, 'Ivan', 'Ivanov', 28, 88894755, 'Plovdiv', 'ivan.ivanov@ii.com', 'Billa', '2024-05-21 12:33:25', '2024-05-22 02:55:06'),
(2, 'Krasimir', 'Georgiev', 67, 7657657, 'Lovech', 'krasimir.georgiev@kg.com', 'Lidl', '2024-05-21 12:33:25', '2024-05-22 02:54:44'),
(3, 'Petar', 'Petrov', 23, 7657657, 'Burgas', 'petar.petrov@pp.com', 'Billa', '2024-05-21 12:34:16', '2024-05-22 02:55:55'),
(5, 'Jonh', 'Doe', 56, 894357544, 'Burgas', 'jonh.doe@jd.com', 'Billa', '2024-05-21 12:36:10', '2024-05-22 02:52:16'),
(6, 'Georgi', 'Georgiev', 16, 869154964, 'Sofia', 'georgi.georgiev@gg.com', 'Lidl', '2024-05-22 02:51:04', '2024-05-22 02:51:04'),
(7, 'Daniela', 'Petkova', 35, 945645345, 'Pleven', 'daniela.petkova@dp.com', 'Kaufland', '2024-05-22 02:56:33', '2024-05-22 02:56:33'),
(8, 'Elena', 'Borisova', 39, 4854545, 'Sofia', 'elena.borisova@eb.com', 'Lidl', '2024-05-22 02:57:41', '2024-05-22 02:57:41'),
(9, 'Boris', 'Ivanov', 46, 544654605, 'Burgas', 'boris.ivanov@bi.com', 'Lidl', '2024-05-22 02:58:53', '2024-05-22 02:58:53'),
(10, 'Violeta', 'Georgieva', 27, 463468454, 'Plovdiv', 'violeta.georgieva@vg.com', 'Kaufland', '2024-05-22 03:01:42', '2024-05-22 03:01:47'),
(11, 'Petko', 'Petkov', 42, 1345458, 'Plovdiv', 'petko.petkov@pp.com', 'Kaufland', '2024-05-22 03:03:33', '2024-05-22 03:03:33'),
(12, 'Ivan', 'Georgiev', 55, 324054540, 'Sofia', 'ivan.georgiev@ig.com', 'Kaufland', '2024-05-22 03:04:08', '2024-05-22 03:04:08'),
(13, 'Katrin', 'Borisova', 38, 54054054, 'Plovdiv', 'katrin.borisova@kb.com', 'Billa', '2024-05-22 03:05:18', '2024-05-22 03:05:18'),
(14, 'Boris', 'Borisov', 19, 4054450, 'Sofia', 'boris.borisov@bb.com', 'Kaufland', '2024-05-22 03:06:01', '2024-05-22 03:17:42'),
(15, 'Petya', 'Ivanova', 31, 4156004, 'Plovdiv', 'petya.ivanova@pi.com', 'Billa', '2024-05-22 03:07:01', '2024-05-22 03:07:01'),
(16, 'Dora', 'Petkova', 44, 40540405, 'Vidin', 'dora.petkova@dp.com', 'Billa', '2024-05-22 03:07:48', '2024-05-22 03:07:48'),
(17, 'Gabriela', 'Gigova', 51, 51051085, 'Sofia', 'gabriela.gigova@gg.com', 'Lidl', '2024-05-22 03:09:11', '2024-05-22 03:09:11'),
(18, 'Ivana', 'Ivanova', 26, 654040, 'Sofia', 'ivana.ivanova@ii.com', 'Billa', '2024-05-22 03:10:02', '2024-05-22 03:10:02'),
(19, 'Georgi', 'Petkov', 44, 6060406, 'Plovdiv', 'georgi.petkov@gp.com', 'Billa', '2024-05-22 03:18:32', '2024-05-22 03:18:32'),
(20, 'Daniel', 'Dekov', 47, 14505, 'Burgas', 'daniel.dekov@dd.com', 'Lidl', '2024-05-22 03:18:59', '2024-05-22 03:18:59'),
(21, 'Ignat', 'Todorov', 64, 54054084, 'Burgas', 'ignat.todorov@it.com', 'Lidl', '2024-05-22 03:19:30', '2024-05-22 03:19:30');

-- --------------------------------------------------------

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$12$3yv6I3lgUoluwKod7vHGCuZ9uQXX66pn2n3LEpJOKNrZQ8B1bJPrW', NULL, '2024-05-22 06:05:02', '2024-05-22 06:05:02');
