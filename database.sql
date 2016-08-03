-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: 2016 年 08 月 03 日 15:10
-- 伺服器版本: 5.0.67-community
-- PHP 版本: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `mnfaneml_305CDE`
--

-- --------------------------------------------------------

--
-- 資料表結構 `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL auto_increment,
  `booking_name` text NOT NULL,
  `booking_location` text NOT NULL,
  `booking_type` text NOT NULL,
  `booking_user` text NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  PRIMARY KEY  (`booking_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- 資料表的匯出資料 `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_name`, `booking_location`, `booking_type`, `booking_user`, `booking_date`, `booking_time`) VALUES
(54, 'Shaukeiwan', 'Shaukeiwan', 'Rapid', 'admin', '2016-08-26', '11:00:00'),
(55, '', '', '', '', '0000-00-00', '00:00:00'),
(56, '', '', '', '', '0000-00-00', '00:00:00'),
(57, '', '', '', '', '0000-00-00', '00:00:00'),
(58, '', '', '', '', '0000-00-00', '00:00:00'),
(59, '', '', '', '', '0000-00-00', '00:00:00'),
(60, '', '', '', '', '0000-00-00', '00:00:00'),
(61, '', '', '', '', '0000-00-00', '00:00:00'),
(62, 'Lai Chi Kok', 'Lai Chi Kok', 'Rapid', '123', '2016-08-01', '15:00:00'),
(63, 'Shaukeiwan', 'Shaukeiwan', 'Rapid', '123', '2016-08-26', '18:00:00'),
(64, 'Shaukeiwan', 'Shaukeiwan', 'Conventional', '', '2016-09-03', '15:00:00'),
(65, 'Shaukeiwan', 'Shaukeiwan', 'Conventional', 'user3', '2016-08-26', '11:00:00'),
(66, 'Shaukeiwan', 'Shaukeiwan', 'Rapid', 'user3', '2016-09-03', '15:00:00'),
(67, 'Lai Chi Kok', 'Lai Chi Kok', 'Rapid', 'user2', '2016-08-26', '15:00:00'),
(68, 'Shaukeiwan', 'Shaukeiwan', 'Conventional', 'demo', '2016-08-26', '15:00:00'),
(70, 'Central', 'Central', 'Rapid', 'user0', '2016-08-26', '18:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) default NULL,
  `user_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `comment`
--

INSERT INTO `comment` (`comment_id`, `user_id`, `news_id`, `comment_content`, `comment_date`) VALUES
(1, 2, 1, 'Nice!!', '2016-07-27');

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL auto_increment,
  `title` text character set utf8 collate utf8_unicode_ci NOT NULL COMMENT 'title',
  `date` date NOT NULL COMMENT 'date',
  `content` text character set utf8 collate utf8_unicode_ci NOT NULL COMMENT 'textarea',
  `image` text NOT NULL COMMENT 'url',
  PRIMARY KEY  (`news_id`),
  UNIQUE KEY `date` (`date`),
  UNIQUE KEY `id` (`news_id`),
  KEY `date_2` (`date`),
  KEY `date_3` (`date`),
  KEY `date_4` (`date`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`news_id`, `title`, `date`, `content`, `image`) VALUES
(1, 'Knowing HIV Status First Step in Controlling AIDS', '2016-06-02', 'The 21st International AIDS Conference starts in a few weeks in Durban, South Africa. Perhaps the greatest achievement in the long fight against HIV/AIDS is that it''s no longer a death sentence. Instead, AIDS can be a chronic, manageable disease, if people receive treatment.\r\n \r\nTesting is the first step toward that goal. It is as simple as swabbing the inside of the mouth or getting a finger prick. In the latter, the blood is then put on a test stick that shows results within minutes. One line is negative; two lines, positive.\r\n\r\nVOA went to Nova Salud, an organization whose mission is to reduce the risk of HIV/AIDS and common sexually transmitted diseases, or STD''s. A man who identified himself only as "Rigo" said he encourages all Latinos to get tested because, "You don''t know the past of your partners, and you can be living with the (HIV) virus and you don''t know it."\r\n\r\nHe was followed by a woman with a toddler named Zoey. Zoey''s mother said she gets tested because she has children and has to know her status because of her family.', 'http://gdb.voanews.com/41783EE6-3411-4489-8983-2944100D6E6A_w640_r1_s_cx0_cy9_cw0.jpg'),
(2, 'Open for all: City''s AIDS control facility benefits Afghan nationals', '2016-06-04', 'PESHAWAR: The HIV/AIDS control programme in Peshawar has not only benefitted locals. People from across the border in Afghanistan have also been registering for treatment in the provincial metropolis.\n\nAt least 150 Afghan nationals were registered for the programme even though the Afghan government has started its own programme to control the spread of HIV/AIDS.\n\nOfficials associated with the programme told The Express Tribune the number of Afghan patients registered with the Family Care Center (FCC) in Peshawar would have increased. However, the Afghan government has started its own programme and, so far, around 150 patients have been provided medical assistance at the facility.\n\n“There are female patients but we don’t know whether they are refugees or not and visit Pakistan only for medical assistance against HIV/AIDs,” a senior health official who had been part of the AIDs control programme told The Express Tribune.\n\nThe official, who requested anonymity since he was no longer part of the programme, said Afghan nationals were registered for treatment since the programme was launched in 2007. He added the number was still the same since new patients were receiving medical assistance against HIV/AIDs in Afghanistan.\n\nSpeaking to The Express Tribune, FCC Incharge Dr Fawad said the number of patients registered with the programme was around 2,400. They hailed from various places of the province while at least 150 of them were Afghan nationals. Now, he said, fresh cases were registered in Afghanistan.\n\n“We have at least 20 people who are transgender registered with the programme but this is only at the centre established in the provincial capital,” Fawad said.” 23% of the total HIV/AIDs patients were female.\n\nIssue of funds\n\nAlthough the number of HIV/AIDs patients has been increasing with each passing day, the AIDs control programme in Khyber-Pakhtunkhwa had been abandoned.\n\nThe programme was being run only at a centre in Hayatabad. It is being run on its own since the flow of aid had stopped from Global Fund, an international financing organisation that had been providing financial.\n\nA PC-1 was meant to be approved in 2014, but that has yet to be initiated by the provincial government.\n\nHowever, besides issuance of funds for other health programmes, the budget document for fiscal year 2016-17 showed funds were set aside for vaccines for protection against different diseases and for schemes introduced for treatment of hepatitis, thalassemia and HIV/AIDs.\n\nThe website of National AIDS Control Programme showed the programme was being run with full support from the federal government to the centres established across the country.', 'http://i1.tribune.com.pk/wp-content/uploads/2016/07/1135603-healthAIDSHIVAFP-1467577380-607-640x480.jpg'),
(3, 'South Africa''s bid to end AIDS', '2016-06-29', 'On a Wednesday morning in April, a line of 600 HIV-infected people snakes through the hallways to the first waiting room of the Themba Lethu Clinic, a wing of the Helen Joseph Hospital in Johannesburg, South Africa. In most places in the country, where clinics are overtaxed, this would presage a wait of up to 10 hours. But here something different is happening. Staffers at computer monitors swiftly log in people and dispatch them for triage or, if they have tuberculosis, a special area away from others. Those who only need their antiretroviral (ARV) drugs walk directly to the pharmacists, who retrieve each patient’s electronic medical record and use a robotic system to pull drugs from shelves and fill orders. The average wait time is 30 minutes to 2 hours to complete a doctor or nurse visit and 15 minutes at the pharmacy. A prototype ATM promises to further speed visits by directly dispensing ARV pills; one day, it is hoped, similar pill machines in shopping malls could make some clinic visits unnecessary.\r\n\r\n“This is an awesomely efficient place,” says Ian Sanne, who heads Right to Care, a nongovernmental organization that runs this and several other clinics in collaboration with the health department. In developed countries, where patients complain about much shorter waits, this boast might seem absurd. But in South Africa, the Themba Lethu Clinic is celebrated as an example of what can be done to care for large numbers of HIV-infected people. This is at once a compliment to the clinic and a hint of the country’s overwhelming HIV/AIDS challenge.\r\n\r\nSouth Africa has pledged to ramp up efforts to end its massive HIV/AIDS epidemic, the world’s largest. Come September, it will offer every infected person ARVs, which both stave off disease and make people less infectious. The immediate goal is to reach what is known as 90-90-90 by 2020: to have 90% of infected people aware of their status, 90% of known positives start ARVs, and 90% of that group drive the amount of virus in their bloodstream down to un-detectable levels. The theory is that as viral levels drop, transmission will, too, leading the epidemic to spiral downward. This 90-90-90 target is the cornerstone of a grand campaign, articulated by the Joint United Nations Programme on HIV/AIDS (UNAIDS) and widely embraced by world leaders, to end the AIDS epidemic “as a global public health threat” by 2030. \r\n\r\nIn a nation estimated to have at least 6.6 million HIV-infected people—18% of the world’s total—the drive to hit 90-90-90 by 2020 seems overly ambitious to many experts. And the obstacles faced by South Africa provide a sobering reality check to the lofty, laudable aspiration of ending AIDS, a topic that promises to occupy center stage later this month in Durban at the biannual International AIDS Conference.\r\n\r\nModels and reality\r\nA model predicts how different HIV/AIDS response scenarios would affect new infection rates, or incidence. As seen on the map, some areas of the country have far more HIV than others.', 'http://www.sciencemag.org/sites/default/files/styles/article_main_large/public/images/1280x720_JIMI3180%5B8%5D.jpg'),
(4, 'A fear of Aids made me sexually inhibited. Can I liberate my desires? ', '2016-07-04', 'I’m a 71-year-old man with a husband who is 21 years younger. We’ve been together for eight years and married for two. The problem is that I got traumatised by fear of Aids in the late 80s and I’ve become inhibited in my sexual behaviour. I was brought up in a time when homosexuality was against the law, and I am still struggling to liberate myself.\r\n\r\nMake two lists now – the first one of all the erotically exciting things you would like to do, regardless of any risk for HIV transmission. Make it a long list, and let your imagination take you wherever it will – from passionate embraces in a dark movie theatre or exciting touches while swimming at a private picnic, to full-on intercourse, oral sex or whatever might be arousing for you.\r\n\r\nThen make another list of just those things you fancy that could expose you to a risk of HIV exposure. You will find that the second list is extremely short compared with the first. The point is, there are so many non-insertive forms of wonderfully erotic sex, you can stop worrying about disease and instead focus on pleasure. Put your sexual energy and imagination to summoning the positive aspects of love-making, then act on whatever is comfortable, not forgetting erotic conversation, mutual masturbation and sex toys. If your husband will cooperate by creating his own thrilling list, so much the better!\r\n\r\n', 'https://i.guim.co.uk/img/media/c1ebbed88f71cd9a00d5cf9c20dbab95b1d103d1/0_356_5616_3370/master/5616.jpg?w=620&q=20&auto=format&usm=12&fit=max&dpr=2&s=d5f0d54fc481f45ccb55cddaa00f92d5'),
(5, 'Stars come out to support amFAR auction for AIDS research', '2016-07-05', 'Over July Fourth weekend, stars came out in Paris for an amfAR auction to support AIDS research.\r\n\r\nSpotted at the Peninsula there were Jennifer Garner and Adrien Brody, models Naomi Campbell and Petra Nemcova, and designers Tory Burch and Donatella Versace.\r\n\r\nUte Lemper performed, and lots included a 1974 photo of David Bowie meeting amfAR’s founding international chairman, Elizabeth Taylor, as well as a portfolio of 10 Andy Warhol prints of Mick Jagger signed by both the artist and the rocker.\r\n\r\nSimon de Pury was auctioneer.\r\n\r\n', 'https://nyppagesix.files.wordpress.com/2016/07/544425532.jpg?quality=90&strip=all&w=1328&h=882&crop=1'),
(6, 'Injectible drug users more vulnerable to AIDS', '2016-07-01', 'Manav Mander\r\nTribune News Service\r\nLudhiana, July 4\r\nSharing of needles is making drug addicts HIV positive. Since 2008, 2,293 youths from Ludhiana got themselves registered with the “Injectable Drug Users project”, out of which 318 have been found to be HIV positive. These youth were sharing needles while injecting drugs and ultimately fell prey to AIDS.\r\nDr DN Kotnis Acupuncture Hospital, which is also running an NGO, has undertaken “Injectable Drug Users Project” which is run by the Punjab State AIDS Control Society.\r\nDr Inderjit Singh Dhingra, Medical Superintendent, Dr DN Kotnis Hospital, said they undertook the project in 2008 and since then 2,293 youths got registered with them under the project. After conducting tests, it came to light that 318 were HIV positive. The main reason behind becoming HIV positive was the sharing of the needles, he said.\r\nHe said they had also identified ‘hot spots’ in Ludhiana where such activities were being carried out. “In Ludhiana, we have identified nearly 17-18 such spots where youths get high on drugs. Our volunteers go to these spots and counsel them. It is not easy to make them agree to leave drugs at once, so our volunteers also distribute needles to them, asking them to use new needles, instead of sharing them,” Dr Dhingra said. “Those who agree to leave drugs are admitted to hospitals and various tests are carried on them to know about their health condition,” he said.\r\nWhat is sharing needles?\r\nNeedle sharing is the practice of intravenous drug-users by which a syringe is shared by multiple individuals to administer intravenous drugs, and is a primary vector for diseases which can be transmitted through blood (blood-borne pathogens)', 'http://images.tribuneindia.com/cms/gall_content/2016/7/2016_7$largeimg05_Tuesday_2016_020432810.jpg'),
(7, 'Singer Ben Chalatit brings high profile to Aids fight', '2016-07-02', 'Meanwhile, about 87 percent of the total HIV reported cases in Bhutan are between the age groups of 20 and 49.\r\n\r\nLyonpo said that HIV/AIDS is not a standalone disease or a burden within the purview of the health sector domain. “It is a social problem requiring our coordinated efforts at all levels.”\r\n\r\nLyonpo pointed out that media in different forms could play a vital role in linking the communities with HIV prevention interventions and awareness raising programmes, which in long run will have a significant contribution to the change in individuals’ behavior.\r\n\r\nMedia is a powerful medium in bringing about a desired behavior outcome in our society, and we must harness this opportunity through such forums and gathering, he added.\r\n\r\nManaging editor with Bhutan Observer, Rabi C Dahal, said that mass media plays a central role in people’s lives. Although the news media does not specifically tell readers what to think, it plays an important role in identifying what issues we should think about.\r\n\r\n“The more coverage a topic receives in the news, the more likely it is to be a concern of the public,” the editor said. “Conversely, issues not mentioned by the media are likely to be ignored or to receive little attention.”\r\n\r\nThe news coverage of HIV/AIDS provides a good example of how an important health issue may be invisible to the public eye until the media bring it to light, the editor added.\r\n\r\n', 'http://gaynewsnetwork.com.au/cache/com_zoo/images/Shuga-web_27fbf8b3537f408a278b68438b4b4773.jpg'),
(8, 'South Sudan''s ruling factions are flouting peace deal and preparing for conflict, say researchers', '2016-07-03', 'An international conflict research group said South Sudan was at risk of falling back into full-scale war, just two months after the government and rebels formed a coalition government aimed at ending more than two years of conflict.\r\n\r\nThe International Crisis Group said on Friday that the two sides were flouting a peace agreement they signed in August and are preparing for widespread conflict.', 'http://www.telegraph.co.uk/content/dam/news/2016/07/02/77308202_South_Sudan_government_soldiers_in_the_town_of_Koch_Unity_state_South_Sudan_Friday_Sept_25-large_trans++otd3MiTutjsnpk608JD341Ipe4BElCKbXLS6F8gJS0A.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_status` varchar(13) NOT NULL,
  `user_type` varchar(13) NOT NULL,
  `user_createtime` date NOT NULL,
  `user_loginname` varchar(13) NOT NULL,
  `user_password` char(32) NOT NULL,
  `user_email` varchar(13) NOT NULL,
  `user_emailkey` varchar(13) NOT NULL,
  `user_birthday` date default NULL,
  `user_gender` varchar(13) default NULL,
  `user_logintime` date default NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`user_id`, `user_status`, `user_type`, `user_createtime`, `user_loginname`, `user_password`, `user_email`, `user_emailkey`, `user_birthday`, `user_gender`, `user_logintime`) VALUES
(46, 'notactive', 'user', '2016-08-03', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user1@address', 'emailkey', '2003-11-30', 'M', '2016-08-03'),
(38, 'active', 'admin', '2016-08-02', 'admin', '202cb962ac59075b964b07152d234b70', 'email2', 'emailkey', '2016-08-03', 'M', '2016-08-02'),
(47, 'notactive', 'user', '2016-08-03', 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user2@address', 'emailkey', '1993-02-02', 'F', '2016-08-03'),
(48, 'notactive', 'user', '2016-08-03', 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'user3@address', 'emailkey', '1992-02-02', 'M', '2016-08-03'),
(53, 'notactive', 'user', '2016-08-03', 'user0', 'c6f057b86584942e415435ffb1fa93d4', 'user0@address', 'emailkey', '2000-01-01', 'M', '2016-08-03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
