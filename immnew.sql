-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 01:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `aboutId` int(11) NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`aboutId`, `content`) VALUES
(1, 'IMM News Network is where ideas take shape, take off, and spark powerful conversations. We’re an open news platform where readers come to find insightful and dynamic thinking. Dive into the heart of any topic and bring new ideas to the surface. Our purpose is to spread these ideas and deepen understanding of the Interactive World.');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `articleId` int(11) NOT NULL,
  `category` set('Industry','Technical','Career') CHARACTER SET utf8mb4 NOT NULL,
  `author` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `title` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `preview` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  `articleLink` varchar(140) CHARACTER SET utf8mb4 NOT NULL,
  `feature` int(1) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`articleId`, `category`, `author`, `title`, `preview`, `content`, `date`, `articleLink`, `feature`, `image`) VALUES
(1, 'Industry', 'Mathilde Guillemain', 'Can the elderly use your website?', 'The great thing about the internet is that everybody can find any information they want. Everybody? Really? When building websites, we often tend to forget the elderly and the disabled. Granted they might not be your number one target, they still have a lot to teach us about accessibility!', 'A good font is a readable font. To make a website readable, choosing the right font is essential. The first step in accessibility is to use Sans serif fonts, way easier to read when you have trouble with your sight. To take it a step further, we need to pay attention to letter & word spacing and line height. People with dyslexia or visual impairment for instance are more comfortable reading when the words are sufficiently spread apart. The WCAG defines norms of accessibility for websites. When it comes to color contrast, the guidelines define two norms: AA & AAA, the first one being the “minimum”, the second being recommended for people with visual impairment. In my experience, contrast is especially important when it comes to text with no other visual indicators (icons, images…).I remember a user feedback for this exact problem: the user kept clicking on the “back” button, instead of the “save” button. The reason? They were too small and too close to each other. Our users being mainly elders: a lot of them had tremors, so they had trouble clicking on the right buttons. A valuable thing I learned while my company software was audited by a visually impaired help organization, is how important the HTML structure is. Screen readers such as Jaws will essentially analyze the structure of your website to read it to the user. If it has poor structure, the screen reader won’t be able to differentiate a menu from a title or a paragraph. Having a well-constructed website is essential, especially if you want people with visual disabilities to use it! Besides the general structure of your pages, don’t forget to make a good use of placeholders in your forms and alt attributes for your images.', '2020-10-26', 'https://poulpux.medium.com/can-the-elderly-use-your-website-tips-to-improve-acessibility-503caf101bf2', 0, 'image1.png'),
(2, 'Industry', 'Josh Andrus', 'Design tools, then & now', 'What I learned from designing interfaces in the Aughts & how it compares to designing today.', 'I was building my design systems library for media players and I wanted to explore desktop media servers a bit. (yes, I’m a nerd) I figured I’d explore Netflix since I really like their micro-interactions as of late. Now what I used to do is a classic scroll, screenshot, and stitch, meaning I’d take screenshots of the vertical scroll web page in each viewable section, and stitch it together in photoshop. Then I’d Bring it into Sketch or XD or whatever and block out my design components.The point is, by being able to turn real site components into design components this easily, the starting point for designs and prototypes is so much closer to the finish line. While I excel when working within constraints, I don’t miss the days where I had to design in a vacuum of the old world limitations. In hindsight, that’s the main reason I started bringing in other designers on projects that involved any interaction design for web and motion.Pound for pound, I’d prefer to design in XD, I really love the repeat grid and component states. Since it’s Adobe Creative Suite and I’m 20 years deep in the software, I can get a lot done with little effort. In terms of collaboration and open source Chrome compatibility, Figma gives me freedom that I otherwise wouldn’t have. Now if we can just get these two playing nice….', '2020-10-26', 'https://uxdesign.cc/design-tools-then-now-56faf382618f', 0, 'image2.png'),
(3, 'Career', 'Haucem Sadki', 'How To Improve Your Online Reputation', 'Based on my 4 years of experience as a business owner and as a freelancer', 'Rather you are a startup owner or a freelancer, it’s a business that has your name on it, and building a business is hard but building a reputation that will ensure that exponential income that comes with it is even harder.\r\nI started freelancing four years ago while maintaining my 9–5 job, I wanted to feel the market of the gig community before making the big jump into this world filled with uncertainties.\r\nAt the beginning of my journey, I thought that it’s going to be as simple as signing up on a social media platform, offer my services with a certain price tag and go from there unaware that the rules are different and it takes time to adapt with them and more importantly, to build a certain “reputation” as a freelancer.\r\nIt must be said that with 90% of consumers reading reviews online and 88% who trust digital reviews as much as personal recommendations, it is better to pay careful attention to their image.\r\nThese essential tips made a big difference for me to build a good reputation as a freelancer in my niche (Geographic information systems and remote sensing)on a lot of platforms like Linkedin and Fiverr and for people that already have a startup or startups, the rules of the game are just the same.We live in a world that is constantly evolving but Business has been and will always be the same, the delivery methods and the information funnels changed but the core foundation never did.\r\nA good business is based on good press and you can’t get a good press without taking the time and making the effort to build a stellar reputation and keep working on enhancing it by always seeking through to satisfy the client and enhancing your workflow to increase your revenue organically.', '2020-10-19', 'https://medium.com/datadriveninvestor/how-to-improve-your-online-reputation-e7ab4f415bf2', 0, 'image3.png'),
(4, 'Career', 'David Kingsbury', 'A Quick and Dirty Guide to Time Management', 'Time management isn’t something that needs overthinking. There are a few basic principles you can follow to squeeze more value out of your time. Here are some simple nuts and bolts you can use to get more done today.', 'Some things you may find helpful:\r\nHave no more than two things on your to-do list for the day. They should be the two most important things you need to get done in the immediate term. Say no to everything that takes you away from those two things until they are done. This is prioritization in action.\r\nDon’t add lots of small, separate items to your to-do list. A long list dilutes your focus and can make you feel overwhelmed. Instead, group small related tasks together and treat them as a single item. Batch process everything you can. Especially email (see below). It stops your attention from getting fragmented with repeated distractions and requires less mental labor than constant task switching. Block an hour or so out in your calendar and work through tasks like admin as a batch. Then forget about them.\r\nHow to deal with email: Unless you work in a customer service role that requires fast response times, turn off your notifications so you don’t get distracted from your main duties by incoming messages. Instead, block out a dedicated chunk of time each day to process your email and do it all in one go. Make sure you schedule this for after your priority tasks have been tackled. It’s rare someone needs an immediate answer, so don’t get sucked into responding to emails as they come in. That’s a sure-fire way for the day to slip away from you.\r\nIdentify what time of day you work best on different tasks and use this to plan your work schedule. For most people, that means focusing on the big stuff before lunch while your brain is fresh and saving the lower-level things for later in the day.\r\nIf you want to get a better sense of how you spend your time, track it in a spreadsheet. Create a simple template that uses now cell for each hour and a color-coding system for different types of activity (research, admin, food, sleep, procrastinating, etc.) This is kind of dull, but it only takes a couple of minutes each day. Within a few weeks, you should have a decent sense of where you can claw time back from your schedule and make better use of it.\r\nI thought I had a good handle on how I spent my time until I tracked it by the hour for three months. Then I realized how much time I wasted. The experience made me way more productive and required minimal effort.\r\nFind a way to automate repetitive low-level tasks so that they don’t eat up your time. If they can’t be automated, delegate, or outsource them. Trying to manually process everything once you hit a certain scale is a death knell for productivity or growth. You’ll be so busy with things like admin that the more important stuff will never get done.\r\nAnd that’s it — no need to get fancy. Just define your goal, prioritize, and execute. Then work on refining your execution until you have it optimized.', '2020-10-25', 'https://medium.com/illumination/a-quick-and-dirty-guide-to-time-management-3fca7affba4a', 0, 'image4.png'),
(5, 'Technical', 'Rounak Bose', 'A Guide to Giving and Receiving Design-centered Critique', 'Critiquing is about a way to make sure that each person in the room is as smart as the smartest individual in the team.', 'It is just so much simpler and easier for our tiny brains filled to the brim with ownership-bias, if during critique, not only is the problem pointed out, but also if a potential solution to the problem (or at least a nudge in the right direction) is handed out to the recipient.Giving and receiving critique properly is something that is very useful in almost all imaginable jobs. For performance reviews, in academia, for code reviews, and for all similar events — the technicalities will change, but the core idea remains constant. With some conscious effort, critiquing will cease to be that awkward phase in design and development where people nod their heads without listening and greet each other with fake smiles. Critiquing is, and should always be, very human at its core.', '2020-09-09', 'https://uxmag.com/articles/a-guide-to-giving-and-receiving-design-centered-critique', 1, 'image5.png'),
(6, 'Technical', 'Vicky Gao', 'The secrets of collaboration', 'A few methods that work well in the world of collaboration.', 'It is an excellent start for you as an individual knowing how to collaborate. However, there is more to a successful team. What matters most is how the entire team functions, not purely an individual’s capability. Does everyone know each other well? Is each individual close to everyone else? Do they care about each other enough so that they would always want to help out and unblock others? It is the relationship that leads to success. So, how could we help build a strong relationship within the team? What is the superpower we as designers have?\r\n\r\nOne of the easiest but effective method is a “walk the wall” activity. All you need is to put design flows on the wall and invite your cross-functional team to gather together. When people are standing in front of a wall of designs, magic happens. The product they are working on becomes so tangible that people start making comments, sharing new ideas, giving feedback, and “+1” on someone else’s comment. The wall visualizes what everyone is devoting to, and opens up conversations among the team.\r\n\r\nHosting workshops is another common way for designers to help build a collaborative team. Besides many benefits a workshop has to the product, it also provides a good team bonding opportunity. Workshops create an immersive environment for people to get to know each other, as all participants are present in a room with multiple activities to go through. Many initial conversations happen in workshops, where you meet teammates whom you don’t interact with frequently.', '2020-06-01', 'https://uxmag.com/articles/the-secrets-of-collaboration', 0, 'image6.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `firstName` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `lastName` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `emailAddress` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `category1` set('industry') CHARACTER SET utf8mb4 NOT NULL,
  `category2` set('technical') CHARACTER SET utf8mb4 NOT NULL,
  `category3` set('career') CHARACTER SET utf8mb4 NOT NULL,
  `role` set('Writer','Contributor','Administrator') CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`firstName`, `lastName`, `emailAddress`, `category1`, `category2`, `category3`, `role`) VALUES
('tester', 'test', 'test@gmail.com', 'industry', '', 'career', 'Contributor'),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('Han', 'Solo', 'falcon123@gmail.com', 'industry', '', 'career', 'Writer'),
('R2', 'D2', 'roller123@gmail.com', '', 'technical', 'career', 'Writer'),
('Boba', 'Fett', 'bounty@gmail.com', 'industry', 'technical', '', 'Contributor');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likeId` int(11) NOT NULL,
  `personId` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `likeicon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`likeId`, `personId`, `articleId`, `likeicon`) VALUES
(5, 1, 5, 'like.png'),
(6, 3, 5, 'like.png'),
(7, 1, 1, 'like.png'),
(8, 1, 2, 'like.png'),
(9, 1, 6, 'like.png'),
(10, 1, 4, 'like.png'),
(11, 1, 3, 'like.png');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `personId` int(11) NOT NULL,
  `firstName` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `lastName` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `emailAddress` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `DOB` datetime NOT NULL,
  `userType` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`personId`, `firstName`, `lastName`, `emailAddress`, `password`, `DOB`, `userType`) VALUES
(1, 'Jason', 'Do', 'jasondo@gmail.com', '12345', '1999-11-07 02:40:29', 'admin'),
(2, 'Tony', 'Stark', 'ironman@gmail.com', '12345', '2018-04-10 12:08:24', 'user'),
(3, 'Bruce', 'banner', 'hulk123@gmail.com', '123', '1997-03-18 00:00:00', 'public'),
(4, 'Peggy', 'Carter', 'agent123@gmail.com', '12345', '1998-03-18 00:00:00', 'user'),
(7, 'Luke', 'Skywalker', 'jedi123@gmail.com', '12345', '1995-03-18 00:00:00', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`aboutId`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleId`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likeId`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`personId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `aboutId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `articleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `personId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
