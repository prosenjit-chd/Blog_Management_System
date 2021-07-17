-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 07:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `comment`, `comment_date`, `username`, `postid`) VALUES
(1, 'New comment', 'August-12, 2020', 'Evan', 14),
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.!\r\n', 'August-13, 2020', 'rahim', 14),
(3, 'hi', 'August-15, 2020', 'admin', 14),
(4, 'how are you?', 'August-15, 2020', 'admin', 14),
(5, 'good morning', 'August-15, 2020', 'admin', 14),
(6, 'good morning again', 'August-15, 2020', 'admin', 14),
(7, 'hi', 'August-15, 2020', 'admin', 14),
(8, 'hi', 'August-28, 2020', 'admin', 17),
(9, 'Nice story', 'August-28, 2020', 'supto', 18),
(10, 'Very good', 'August-28, 2020', 'supto', 17),
(11, 'best this is', 'August-28, 2020', 'supto', 15),
(12, 'Very Nice', 'August-28, 2020', 'anik', 18),
(13, 'very good sir', 'August-28, 2020', 'anik', 1),
(14, 'my favorite ', 'August-28, 2020', 'anik', 16),
(15, 'better', 'August-28, 2020', 'anik', 15),
(16, 'best this is', 'August-28, 2020', 'kona', 18),
(17, 'Nice story', 'August-28, 2020', 'kona', 2),
(18, 'Very good', 'August-28, 2020', 'kona', 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_content` longtext NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `post_username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `post_title`, `post_content`, `post_date`, `post_username`) VALUES
(1, 'The Red Badge of Courage ', '\"Great Books is an hour-long documentary and biography program that aired on The Learning Channel. The series was a project co-created by Walter Cronkite and former child actor Jonathan Ward under a deal they had with their company Cronkite-Ward, the The Discovery Channel, and The Learning Channe...', 'August-30, 2020', 'admin'),
(2, 'New Grub Street ', '\"Great Books is an hour-long documentary and biography program that aired on The Learning Channel. The series was a project co-created by Walter Cronkite and former child actor Jonathan Ward under a deal they had with their company Cronkite-Ward, the The Discovery Channel, and The Learning Channe...', 'August-29, 2020', 'prosenjitch'),
(3, 'Three Men in a Boat ', 'The following is a complete list of the titles included in the exhibition Books of the Century at The New York Public Library\'s Center for the Humanities, May 20, 1995-July 13, 1996, and in The New York Public Library\'s Books of the Century, published by Oxford University Press. A celebration ...', 'August-28, 2020', 'kona'),
(4, 'The Adventures of Huckleberry Finn', 'The following is a complete list of the titles included in the exhibition Books of the Century at The New York Public Library\'s Center for the Humanities, May 20, 1995-July 13, 1996, and in The New York Public Library\'s Books of the Century, published by Oxford University Press. A celebration ...', 'August-25, 2020', 'biplob'),
(5, 'Post Again', 'Great Books of the Western World is a series of books originally published in the United States in 1952 by Encyclopædia Britannica Inc. to present the western canon in a single package of 54 volume...', 'August-20, 2020', 'prosenjitch'),
(6, 'Alice’s Adventures in Wonderland ', 'Great Books of the Western World is a series of books originally published in the United States in 1952 by Encyclopædia Britannica Inc. to present the western canon in a single package of 54 volume...', 'August-16, 2020', 'anik'),
(7, 'The Scarlet Letter', 'The Gardiner Public Library, from 1988 to 2007, polled various famous figures from all around the world (writers, artists, filmmakers, politicians, actors, etc.) to ask for their book recommendations. This list is based on the books that received at least two mentions', 'August-12, 2020', 'kona'),
(8, 'Brideshead Revisited', 'The Gardiner Public Library, from 1988 to 2007, polled various famous figures from all around the world (writers, artists, filmmakers, politicians, actors, etc.) to ask for their book recommendations. This list is based on the books that received at least two mentions', 'August-10, 2020', 'biplob'),
(9, 'The Life and Opinions of Tristram Shandy', 'Intended as a companion to the infamous Modern Library ranking of the top 100 books of the past century, this list represents a different viewpoint--that of the booksellers themselves. Compiled from the responses of over 150 Koen Book Distributors customers, the following titles represent the', 'August-5, 2020', 'supto'),
(10, 'Far from the Madding Crowd', 'Intended as a companion to the infamous Modern Library ranking of the top 100 books of the past century, this list represents a different viewpoint--that of the booksellers themselves. Compiled from the responses of over 150 Koen Book Distributors customers, the following titles represent the', 'August-1, 2020', 'prosenjitch'),
(11, 'Any Jane Austen novel', '\"In the early 1950s Raymond Queneau asked several dozen French authors and critics to list the hundred books they would choose if they had to limit themselves to that number. He reproduced all their responses in the book Pour une Bibliothèque Idéale (Gallimard, 1956), along with the overall top ', 'July-25, 2020', 'admin'),
(12, 'Daphne du Maurier', '\"In the early 1950s Raymond Queneau asked several dozen French authors and critics to list the hundred books they would choose if they had to limit themselves to that number. He reproduced all their responses in the book Pour une Bibliothèque Idéale (Gallimard, 1956), along with the overall top ', 'July-19, 2020', 'admin'),
(13, 'Great Expectations', 'This list is generated from 128 \"best of\" book lists from a variety of great sources. An algorithm is used to create a master list based on how many lists a particular book appears on. Some lists count more than others. I generally trust \"best of all time\" lists voted by authors and experts over user-generated lists. On the lists that are actually ranked, the book that is 1st counts a lot more than the book that\'s 100th.', 'July-13, 2020', 'biplob'),
(14, 'His Dark Materials', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad officia repellendus beatae autem ipsam sed aperiam consectetur, quod consequatur eius placeat ducimus alias adipisci deleniti tempore quia aspernatur unde repellat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad officia repellendus beatae autem ipsam sed aperiam consectetur, quod consequatur eius placeat ducimus alias adipisci deleniti tempore quia aspernatur unde repellat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad officia repellendus beatae autem ipsam sed aperiam consectetur, quod consequatur eius placeat ducimus alias adipisci deleniti tempore quia aspernatur unde repellat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad officia repellendus beatae autem ipsam sed aperiam consectetur, quod consequatur eius placeat ducimus alias adipisci deleniti tempore quia aspernatur unde repellat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad officia repellendus beatae autem ipsam sed aperiam consectetur, quod consequatur eius placeat ducimus alias adipisci deleniti tempore quia aspernatur unde repellat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad officia repellendus beatae autem ipsam sed aperiam consectetur, quod consequatur eius placeat ducimus alias adipisci deleniti tempore quia aspernatur unde repellat.', 'July-2, 2020', 'anik'),
(15, 'Diary of a Nobody', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in faucibus mauris. Cras eu pellentesque dui. Sed mattis a tellus condimentum ultricies. Cras sed dui imperdiet, laoreet diam cursus, egestas lorem. Donec in consectetur ex. In urna dui, tristique eu molestie vitae, pellentesque quis tortor. Phasellus imperdiet ex augue, quis malesuada arcu sagittis quis. Maecenas molestie neque id nulla luctus mollis. Fusce laoreet et felis sit amet aliquet. Mauris a velit tellus. In ut sodales velit. Integer eu enim mauris. Etiam commodo quis est at consequat.\r\n\r\nUt auctor mollis est, congue pulvinar arcu ultrices pulvinar. Pellentesque venenatis felis vitae nisi finibus, a porta mauris consequat. Curabitur pulvinar aliquam quam, eget pellentesque lacus posuere sit amet. Sed sed blandit mauris. Pellentesque tincidunt et purus non blandit. Suspendisse accumsan orci et cursus dignissim. Vestibulum nulla eros, ultrices vel porttitor eget, pharetra lobortis dolor. \r\n\r\nNullam rutrum rhoncus lectus eget ultrices. Pellentesque volutpat fringilla gravida. Aliquam erat volutpat. Maecenas ullamcorper lectus eu ipsum iaculis, at tempor enim ultricies. In condimentum turpis sit amet turpis varius placerat. Praesent cursus scelerisque volutpat. ', 'June-28, 2020', 'kona'),
(16, 'The Lord of the Rings', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in faucibus mauris. Cras eu pellentesque dui. Sed mattis a tellus condimentum ultricies. Cras sed dui imperdiet, laoreet diam cursus, egestas lorem. \r\n\r\nDonec in consectetur ex. In urna dui, tristique eu molestie vitae, pellentesque quis tortor. Phasellus imperdiet ex augue, quis malesuada arcu sagittis quis. Maecenas molestie neque id nulla luctus mollis. Fusce laoreet et felis sit amet aliquet. Mauris a velit tellus. In ut sodales velit. Integer eu enim mauris. Etiam commodo quis est at consequat.', 'June-22, 2020', 'supto'),
(17, 'Nineteen Eighty-Four, by George Orwell', 'This list is generated from 128 \"best of\" book lists from a variety of great sources. An algorithm is used to create a master list based on how many lists a particular book appears on. Some lists count more than others. I generally trust \"best of all time\" lists voted by authors and experts over user-generated lists. On the lists that are actually ranked, the book that is 1st counts a lot more than the book that\'s 100th.', 'June-15, 2020', 'prosenjitch'),
(18, 'Middlemarch, by George Eliot', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in faucibus mauris. Cras eu pellentesque dui. Sed mattis a tellus condimentum ultricies. Cras sed dui imperdiet, laoreet diam cursus, egestas lorem. Donec in consectetur ex. In urna dui, tristique eu molestie vitae, pellentesque quis tortor. Phasellus imperdiet ex augue, quis malesuada arcu sagittis quis. Maecenas molestie neque id nulla luctus mollis.Fusce laoreet et felis sit amet aliquet. Mauris a velit tellus. In ut sodales velit. Integer eu enim mauris. Etiam commodo quis est at consequat.', 'June-1, 2020', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `block` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `designation`, `block`) VALUES
(1, 'prosenjitch', 'prosenjit@gmail.com', 'b27ba2bcd8469c9c4c7f1131fe772aaa', 'bloger', 0),
(2, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', 0),
(3, 'biplob', 'biplob@gmail.com', '202cb962ac59075b964b07152d234b70', 'generaluser', 0),
(4, 'kona', 'kona@gmail.com', '202cb962ac59075b964b07152d234b70', 'golduser', 0),
(5, 'anik', 'anik@gmail.com', '202cb962ac59075b964b07152d234b70', 'primiumuser', 0),
(6, 'supto', 'supto@gmail.com', '202cb962ac59075b964b07152d234b70', 'generaluser', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
