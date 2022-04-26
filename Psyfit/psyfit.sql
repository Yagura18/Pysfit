-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 26, 2022 at 12:58 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psyfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

DROP TABLE IF EXISTS `goals`;
CREATE TABLE IF NOT EXISTS `goals` (
  `sno` int(3) NOT NULL,
  `goal` varchar(2000) NOT NULL
) ;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`sno`, `goal`) VALUES
(1, 'Call your Family and friends'),
(2, 'Clear out your wardrobe'),
(3, 'Read a book'),
(4, 'Do a crossword/Sudoku'),
(5, 'Make a photo album/back up your phone pictures'),
(6, 'Plant some flowers'),
(7, 'Start a blog'),
(8, 'Learn Baking'),
(9, 'Learn how to knit'),
(10, 'Dance it out'),
(11, 'Exercise'),
(12, 'Make a travel bucket list'),
(13, 'Get your DIY on'),
(14, 'Learn a language'),
(15, 'Learn to play an instrument'),
(16, 'Organise your photos'),
(17, 'Let your creative juices flow'),
(18, 'Take a course'),
(19, 'Create your own comic book'),
(20, 'Learn pottery'),
(21, 'Learn to draw'),
(22, 'Organise your desk'),
(23, 'Paint a picture'),
(24, 'Clear out your kitchen cupboards'),
(25, 'Write a journal'),
(26, 'Learn Calligraphy'),
(27, 'Learn to code'),
(28, 'Do some gardening'),
(29, 'Make a bucket list'),
(30, 'Write a novel'),
(31, 'Pray / meditate'),
(32, 'Do Some DIY Projects'),
(33, 'Enjoy some hot tea'),
(34, 'Listen to music and if you'),
(35, 'Play online or mobile games with friends'),
(36, 'Scrapbook photos / create a photo book online'),
(37, 'Take a walk'),
(38, 'Read inspiring quotes'),
(39, 'Write a letter to someone'),
(40, 'Start a YouTube channel'),
(41, 'Learn Magic tricks'),
(42, 'Learn origami'),
(43, 'Explore apps on the App store'),
(44, 'watch some series or movies'),
(45, 'Play with your pet'),
(46, 'Run diagnostic, clean up or maintenance tasks on your computer'),
(47, 'Make some music playlists'),
(48, 'Write a letter to someone'),
(49, 'Create a vision board'),
(50, 'Get outside and do yardwork');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

DROP TABLE IF EXISTS `journal`;
CREATE TABLE IF NOT EXISTS `journal` (
  `serial` int(255) NOT NULL AUTO_INCREMENT,
  `txt` varchar(2000) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` varchar(255) NOT NULL,
  `outgoing_msg_id` varchar(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ;

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

DROP TABLE IF EXISTS `quote`;
CREATE TABLE IF NOT EXISTS `quote` (
  `serial` int(10) NOT NULL,
  `txt` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`serial`, `txt`) VALUES
(1, 'Keep your face always toward the sunshine, and shadows will fall behind you'),
(2, 'Do not let life discourage you, everyone who got where he is had to begin where he was'),
(3, 'There is hope, even when your brain tells you there is not'),
(4, 'Give yourself another day, another chance,You will find your courage eventually, Do not give up on yourself just yet'),
(5, 'Just do not give up trying to do what you really want to do.,Where there is love and inspiration, I do not think you can go wrong'),
(6, 'If you have good thoughts they will shine out of your face like sunbeams and you will always look lovely'),
(7, 'We must let go of the life we have planned, so as to accept the one that is waiting for us.'),
(8, 'Even if happiness forgets you a little bit, never completely forget about it'),
(9, 'I have learned over the years that when mind is made up, it diminishes fear, knowing what must be done does away with fear'),
(10, 'In the midst of winter, I finally learned that there was in me an invincible summer.'),
(11, 'What is grief, if not love, persevering'),
(12, 'Prosperity is a great teacher; adversity is a greater. Possession pampers the mind; privation trains and strengthens it.'),
(13, 'A champion needs motivation above and beyond winning.'),
(14, 'We are all on a life long journey and the core of its meaning, the terrible demand of its centrality is forgiving and being forgiven'),
(15, 'Maybe we all have darkness inside of us and some of us are better at dealing with it than others.'),
(16, 'But I know, somehow, that only when it is dark enough can you see the stars.'),
(17, 'If you do not like something change it, if you cannot change it, change the way you think about it'),
(18, 'Even from a dark night, songs of beauty can be born.'),
(19, 'We are not to blame for our illness, but we are responsible for our health.'),
(20, 'There is some good in this world, and it is worth fighting for'),
(21, 'Maybe you have to know the darkness before you can appreciate the light.'),
(22, 'Remember, no one can make you feel inferior without your consent.'),
(23, 'The harder you fall, the higher you bounce.'),
(24, 'The best way to gain self-confidence is to do what you are afraid to do'),
(25, 'If you can find a path with no obstacles, it probably does not lead anywhere'),
(26, 'Even if you fall on your face, you are still moving forward'),
(27, 'Difficult roads lead to beautiful destinations. The best is yet to come'),
(28, 'We should all start to live before we get too old. Fear is stupid. So are regrets.'),
(29, 'Good things come to those who believe, better things come to those who are patient, and the best things come to those who do not give up'),
(30, 'Healing always involves facing truths we would rather not face, and accepting responsibility we would rather not accept'),
(31, 'The limits of the possible can only be defined by going beyond them into the impossible.'),
(32, 'If you want to live a happy life, tie it to a goal, not to people or things.'),
(33, 'The big lesson in life, baby, is never be scared of anyone or anything'),
(34, 'Do not settle for what life gives you; make life better and build something.'),
(35, 'When we do the best we can, we never know what miracle is wrought in our life or the life of another.'),
(36, 'The more man meditates upon good thoughts, the better will be his world and the world at large.'),
(37, 'Be happy for this moment. This moment is your life'),
(38, 'As you know, life is an echo; we get what we give.'),
(39, 'Life does not require that we be the best, only that we try our best.'),
(40, 'You can not put a limit on anything. The more you dream, the farther you get.'),
(41, 'We can do anything we want to if we stick to it long enough.'),
(42, 'There is no saint without a past, no sinner without a future.'),
(43, 'The most wasted of days is one without laughter.'),
(44, 'Life changes very quickly, in a very positive way, if you let it.'),
(45, 'Keep your face to the sunshine and you cannot see a shadow.'),
(46, 'It is never too late to be what you might have been.'),
(47, 'No matter what you are going through, there is a light at the end of the tunnel.'),
(48, 'The journey of a thousand miles begins with a single step.'),
(49, 'If I cannot do great things, I can do small things in a great way.'),
(50, 'Do not wait, the time will never be just right.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) ,
  `status` varchar(20) DEFAULT 'null',
  UNIQUE KEY `user_id` (`user_id`)
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`) VALUES
(12, 'PsyMwDaN', 'user3@g.com', '$2y$10$yWq399mOJI0nVlVq1GN7bOyo72QyRjHeCwITNHokcszqqJtWwHy7e', 'null'),
(11, 'PsyS5d2C', 'user2@g.com', '$2y$10$ipZCVFzdfaT1oTuz0eaTNuQypgdE573TpM0dHA3R80tGdXECeUgeS', 'null'),
(10, 'PsylL3W', 'user1@g.com', '$2y$10$c85.5/5LuOIdT7HC5416vO3X4HW.vbiba7IUIU4niAAi88J45LAJe', 'OccupiedPsy5DaON'),
(13, 'Psy9EzY', 'user4@g.com', '$2y$10$wjiA0QcQ9mBuRl0SwNxDkejI8pHpAVStWcnJlTg0qT6VpWTb9IMjy', 'null'),
(14, 'PsyagEz', 'user5@gmail.com', '$2y$10$PxgPQ2jAUfSy5q75z1BCx.xaDc5fdZhxjQTOhv0tA53vZ088h6JFa', 'null'),
(15, 'Psy5DaON', 'off.yk.18@gmail.com', '$2y$10$VR.Jr1FDVpYEYjpAFZc2IOXU.52/JSaT/bylvok3HzrCczYepPP9S', 'OccupiedPsylL3W'),
(16, 'PsynMoy2', 'abc@gmail.com', '$2y$10$YNP4yfmyXaLcJ39z7K/wK.4sV4X9ntRUT4tlTh9NCns5d0mz7bcYK', 'null'),
(17, 'Psyc1XFYQ', 'user6@gmail.com', '$2y$10$ddE4Nri1ZEC.KhpuHkhDy.EpCs9OMABFY4uOiS7c5.nxG9Bn5Hl8C', 'null');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
