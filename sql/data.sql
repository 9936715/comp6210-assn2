CREATE DATABASE `comp6210`;

USE `comp6210`;

SET sql_mode='NO_AUTO_VALUE_ON_ZERO';

CREATE TABLE `profiles` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `logged_in` CHAR(16),
  `name` VARCHAR(255) NOT NULL,
  `pic` VARCHAR(255) NOT NULL,
  `github` VARCHAR(255) NOT NULL,
  `facebook` VARCHAR(255) NOT NULL,
  `linkedin` VARCHAR(255) NOT NULL,
  `twitter` VARCHAR(255) NOT NULL,
  `youtube` VARCHAR(255) NOT NULL,
  `article1` VARCHAR(255) NOT NULL,
  `article2` VARCHAR(255) NOT NULL,
  `article3` VARCHAR(255) NOT NULL,
  `article4` VARCHAR(255) NOT NULL,
  `article5` VARCHAR(255) NOT NULL
) AUTO_INCREMENT = 1;

CREATE TABLE `messages` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `message` VARCHAR(255) NOT NULL,
  `response` VARCHAR(255) DEFAULT NULL,
  `visitor_email` VARCHAR(255) NOT NULL,
  `profile_id` INT(11) DEFAULT NULL
) AUTO_INCREMENT = 1;

INSERT INTO `profiles` (`username`, `password`, `id`, `name`, `pic`, `github`, `facebook`, `linkedin`, `twitter`, `youtube`, `article1`, `article2`, `article3`, `article4`, `article5`) VALUES
('admin', 'admin', 0, 'Administrator', '', '', '', '', '', '', '', '', '', '', '');

INSERT INTO `profiles` (`username`, `password`, `name`, `pic`, `github`, `facebook`, `linkedin`, `twitter`, `youtube`, `article1`, `article2`, `article3`, `article4`, `article5`) VALUES
('user1', 'user1', 'Vicente Calvo', 'https://randomuser.me/api/portraits/men/1.jpg', 'https://github.com/vincente-calvo', 'https://www.facebook.com/vicente-calvo', 'https://nz.linkedin.com/vincente-calvo', 'https://twitter.com/vincente-calvo', 'https://www.youtube.com/vincente-calvo', 'https://ourcodeworld.com/articles/read/1069/five-ways-to-improve-your-website', 'https://ourcodeworld.com/articles/read/1067/7-methods-of-ensuring-that-your-most-important-business-calls-are-never-missed-through-cloud-telephony', 'https://ourcodeworld.com/articles/read/1066/5-tips-to-improve-your-website-s-ux-design-for-maximum-conversion-rate', 'https://ourcodeworld.com/articles/read/1064/how-to-achieve-high-quality-code-a-practical-guide', 'https://ourcodeworld.com/articles/read/1062/4-reasons-why-web-designers-should-learn-programming'),
('user2', 'user2', 'Eemil Ollila', 'https://randomuser.me/api/portraits/men/81.jpg', 'https://github.com/eemil-ollila', 'https://www.facebook.com/eemil-ollila', 'https://nz.linkedin.com/eemil-ollila', 'https://twitter.com/eemil-ollila', 'https://www.youtube.com/eemil-ollila', 'https://www.entrepreneur.com/article/332896', 'https://www.entrepreneur.com/article/330077', 'https://www.entrepreneur.com/article/329803', 'https://www.entrepreneur.com/article/250323', 'https://www.entrepreneur.com/article/323501'),
('user3', 'user3', 'Brianna Sullivan', 'https://randomuser.me/api/portraits/women/13.jpg', 'https://github.com/brianna-sullivan', 'https://www.facebook.com/brianna-sullivan', 'https://nz.linkedin.com/brianna-sullivan', 'https://twitter.com/brianna-sullivan', 'https://www.youtube.com/brianna-sullivan', 'https://hackernoon.com/im-harvesting-credit-card-numbers-and-passwords-from-your-site-here-s-how-9a8cb347c5b5', 'https://hackernoon.com/learn-blockchains-by-building-one-117428612f46', 'https://medium.freecodecamp.org/how-to-think-like-a-programmer-lessons-in-problem-solving-d1d8bf1de7d2', 'https://medium.com/zerotomastery/dont-be-a-junior-developer-608c255b3056', 'https://medium.freecodecamp.org/the-main-pillars-of-learning-programming-and-why-beginners-should-master-them-e04245c17c56'),
('user4', 'user4', 'Alyssia Morin', 'https://randomuser.me/api/portraits/women/2.jpg', 'https://github.com/alyssia-morin', 'https://www.facebook.com/alyssia-morin', 'https://nz.linkedin.com/alyssia-morin', 'https://twitter.com/alyssia-morin', 'https://www.youtube.com/alyssia-morin', 'https://ourcodeworld.com/articles/read/1061/3-reasons-why-macos-is-better-than-windows-for-programming', 'https://ourcodeworld.com/articles/read/1060/how-to-implement-botdetect-captcha-in-your-symfony-4-forms', 'https://ourcodeworld.com/articles/read/941/11-useful-python-development-setup-tips-to-boost-your-productivity', 'https://ourcodeworld.com/articles/read/1054/wumgr-an-open-source-tool-to-manage-updates-of-microsoft-products-on-the-windows-os', 'https://ourcodeworld.com/articles/read/1055/best-tools-to-manage-your-mobile-apps-development-project'),
('user5', 'user5', 'Grada Gaal', 'https://randomuser.me/api/portraits/women/66.jpg', 'https://github.com/grada-gaal', 'https://www.facebook.com/grada-gaal', 'https://nz.linkedin.com/grada-gaal', 'https://twitter.com/grada-gaal', 'https://www.youtube.com/grada-gaal', 'https://hackernoon.com/how-not-to-be-a-mediocre-developer-c59a49f97fc5', 'https://medium.com/@benbob/what-i-learned-from-working-for-both-bill-gates-and-steve-jobs-f0c04e1e5160', 'https://engineering.videoblocks.com/web-architecture-101-a3224e126947', 'https://medium.com/@addyosmani/the-cost-of-javascript-in-2018-7d8950fbb5d4', 'https://edgecoders.com/the-mistakes-i-made-as-a-beginner-programmer-ac8b3e54c312'),
('user6', 'user6', 'Marenthe Reitsma', 'https://randomuser.me/api/portraits/women/73.jpg', 'https://github.com/marenthe-reistma', 'https://www.facebook.com/marenthe-reistma', 'https://nz.linkedin.com/marenthe-reistma', 'https://twitter.com/marenthe-reistma', 'https://www.youtube.com/', 'https://hackernoon.com/how-not-to-be-a-mediocre-developer-c59a49f97fc5', 'https://medium.com/@benbob/what-i-learned-from-working-for-both-bill-gates-and-steve-jobs-f0c04e1e5160', 'https://engineering.videoblocks.com/web-architecture-101-a3224e126947', 'https://medium.com/@addyosmani/the-cost-of-javascript-in-2018-7d8950fbb5d4', 'https://edgecoders.com/the-mistakes-i-made-as-a-beginner-programmer-ac8b3e54c312');

INSERT INTO `messages` (`message`, `response`, `visitor_email`, `profile_id`) VALUES
('message 1', 'response 1', 'visitor1@email.com', 1),
('message 2', 'response 2', 'visitor2@email.com', 2),
('message 3', 'response 3', 'visitor3@email.com', 3),
('message 4', 'response 4', 'visitor4@email.com', 4),
('message 5', 'response 5', 'visitor5@email.com', 5),
('message 6', 'response 6', 'visitor6@email.com', 6);