-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 01:55 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codecrush`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(11) NOT NULL,
  `answer` varchar(256) DEFAULT NULL,
  `language_id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `language_id`, `question_id`, `answer_id`) VALUES
(1, 'Equal strings', 1, 1, 1),
(2, 'Unequal strings ', 1, 1, 2),
(3, 'No output ', 1, 1, 3),
(4, 'Compilation error', 1, 1, 4),
(5, 'Hello', 1, 2, 1),
(6, 'Hi', 1, 2, 2),
(7, 'HelloHi', 1, 2, 3),
(8, 'Compile error', 1, 2, 4),
(9, 'Executable code', 1, 3, 1),
(10, 'Object code', 1, 3, 2),
(11, 'Assembly code', 1, 3, 3),
(12, 'None of the above.', 1, 3, 4),
(13, 'Fine', 1, 4, 1),
(14, 'Nine', 1, 4, 2),
(15, 'Compile error', 1, 4, 3),
(16, 'Runtime error', 1, 4, 4),
(17, 'Hello', 1, 5, 1),
(18, 'No output', 1, 5, 2),
(19, 'Compile error', 1, 5, 3),
(20, 'Runtime error', 1, 5, 4),
(21, '40 AC 00 00', 1, 6, 1),
(22, '00 00 AC 40', 1, 6, 2),
(23, '00 00 CA 04', 1, 6, 3),
(24, 'None', 1, 6, 4),
(25, 'memfree(int p);', 1, 7, 1),
(26, 'free(p);', 1, 7, 2),
(27, 'dealloc(p);', 1, 7, 3),
(28, 'Both, free(p); & dealloc(p);', 1, 7, 4),
(29, 'stdio.h, locale.h, stddef.h, stdlib.h, string.h,', 1, 8, 1),
(30, 'stddef.h, locale.h, math.h, stdlib.h, string.h,', 1, 8, 2),
(31, 'time.h, wchar.h, math.h, locale.h,', 1, 8, 3),
(32, 'math.h', 1, 8, 4),
(33, 'ptr is a pointer to an array of 10 integer pointers.', 1, 9, 1),
(34, 'ptr is a array of 10 pointers to integers', 1, 9, 2),
(35, 'ptr is a array of 10 integer pointers', 1, 9, 3),
(36, 'None of the above', 1, 9, 4),
(37, 'pf is a pointer of a function which return int', 1, 10, 1),
(38, 'pf is a pointer', 1, 10, 2),
(39, 'pf is a function pointer', 1, 10, 3),
(40, 'None of the above', 1, 10, 4),
(41, 'virtual void f()=0 { }', 2, 1, 1),
(42, 'void virtual f()=0 { }', 2, 1, 2),
(43, 'virtual void f() {} = 0;', 2, 1, 3),
(44, 'None of the above.', 2, 1, 4),
(45, '5', 2, 2, 1),
(46, 'Garbage', 2, 2, 2),
(47, 'Error at the statement i=i;', 2, 2, 3),
(48, 'Compile error: \'i\' declared twice.', 2, 2, 4),
(49, 'Function overloading', 2, 3, 1),
(50, 'Virtual classes', 2, 3, 2),
(51, 'Virtual functions', 2, 3, 3),
(52, 'Friend function', 2, 3, 4),
(53, 'C++', 2, 4, 1),
(54, 'Small talk', 2, 4, 2),
(55, 'Simula', 2, 4, 3),
(56, 'All the above.', 2, 4, 4),
(57, 'Abstraction', 2, 5, 1),
(58, 'Encapsulation', 2, 5, 2),
(59, 'Inheritance', 2, 5, 3),
(60, 'None of the above.', 2, 5, 4),
(61, '(i) and (ii) are true', 2, 6, 1),
(62, '(i) and (ii) are false', 2, 6, 2),
(63, 'Only (i) is true', 2, 6, 3),
(64, 'Only (ii) is true', 2, 6, 4),
(65, 'Runtime error', 2, 7, 1),
(66, 'Compile time error', 2, 7, 2),
(67, 'Logical error', 2, 7, 3),
(68, 'None of the above', 2, 7, 4),
(69, 'Hi', 2, 8, 1),
(70, 'HiHello', 2, 8, 2),
(71, 'Hello', 2, 8, 3),
(72, 'Error', 2, 8, 4),
(73, 'a.exe', 2, 9, 1),
(74, 'a', 2, 9, 2),
(75, 'a.out', 2, 9, 3),
(76, 'out.a', 2, 9, 4),
(77, 'string_cmp()', 2, 10, 1),
(78, 'strcmp()', 2, 10, 2),
(79, 'equals()', 2, 10, 3),
(80, 'str_compare()', 2, 10, 4),
(81, 's', 3, 1, 1),
(82, '-1', 3, 1, 2),
(83, '\' \'', 3, 1, 3),
(84, 'None of the above', 3, 1, 4),
(85, 'z = z++', 3, 2, 1),
(86, 'z = ++z', 3, 2, 2),
(87, 'z += 1', 3, 2, 3),
(88, 'z -= 1', 3, 2, 4),
(89, 'Syntax Error', 3, 3, 1),
(90, 'Type Error', 3, 3, 2),
(91, 'Runtime Error', 3, 3, 3),
(92, 'Both b & c', 3, 3, 4),
(93, 'We cannot remove an element from set.', 3, 4, 1),
(94, 'Method is executed but no exception is raised.', 3, 4, 2),
(95, 'Key error is raised.', 3, 4, 3),
(96, 'There doesn\'t exist such method as remove.', 3, 4, 4),
(97, 'L.insert(2,6)', 3, 5, 1),
(98, 'L.insert(3,6)', 3, 5, 2),
(99, 'L.add(3,6)', 3, 5, 3),
(100, 'L.append(2,6)', 3, 5, 4),
(101, 'Class B inherits all the data fields of class A.', 3, 6, 1),
(102, 'Class B needs an Argument.', 3, 6, 2),
(103, 'The data field \'j\' cannot be accessed by object b.', 3, 6, 3),
(104, 'Class B is inheriting class A but the data field \'i\' in A cannot be inherited.', 3, 6, 4),
(105, '{}', 3, 7, 1),
(106, '()', 3, 7, 2),
(107, '[]', 3, 7, 3),
(108, 'set()', 3, 7, 4),
(109, 'Write', 3, 8, 1),
(110, 'Output.binary', 3, 8, 2),
(111, 'Dump', 3, 8, 3),
(112, 'Binary.output', 3, 8, 4),
(113, 'Window.eventloop()', 3, 9, 1),
(114, 'Window.mainloop()', 3, 9, 2),
(115, 'Window.loop()', 3, 9, 3),
(116, 'Eventloop.window()', 3, 9, 4),
(117, 'Only A label', 3, 10, 1),
(118, 'Only A button and A label', 3, 10, 2),
(119, 'Only A checkbox', 3, 10, 3),
(120, 'A label, a check box , a button and a radio button.', 3, 10, 4),
(121, 'Real time ', 4, 1, 1),
(122, 'Graphical User Interface ', 4, 1, 2),
(123, 'Character User Interface', 4, 1, 3),
(124, 'None of These ', 4, 1, 4),
(125, 'window', 4, 2, 1),
(126, 'form', 4, 2, 2),
(127, 'screen', 4, 2, 3),
(128, 'None of the above.', 4, 2, 4),
(129, 'Display', 4, 3, 1),
(130, 'Disable', 4, 3, 2),
(131, 'Hide', 4, 3, 3),
(132, 'Enabled', 4, 3, 4),
(133, 'Object browser', 4, 4, 1),
(134, 'Form layout window ', 4, 4, 2),
(135, 'Code editor window ', 4, 4, 3),
(136, 'None of the above', 4, 4, 4),
(137, 'Public constants ', 4, 5, 1),
(138, 'Private constants ', 4, 5, 2),
(139, 'Static constants ', 4, 5, 3),
(140, 'None of these ', 4, 5, 4),
(141, 'Ltrim ', 4, 6, 1),
(142, 'Rtrim ', 4, 6, 2),
(143, 'Trim ', 4, 6, 3),
(144, 'All of the above', 4, 6, 4),
(145, 'Setfocus ', 4, 7, 1),
(146, 'Gotfocus ', 4, 7, 2),
(147, 'Lostfocus ', 4, 7, 3),
(148, 'None of these ', 4, 7, 4),
(149, 'Text ', 4, 8, 1),
(150, 'Password char ', 4, 8, 2),
(151, 'Multiline ', 4, 8, 3),
(152, 'Enable ', 4, 8, 4),
(153, 'command button', 4, 9, 1),
(154, 'text box', 4, 9, 2),
(155, 'label', 4, 9, 3),
(156, 'combobox', 4, 9, 4),
(157, 'int', 4, 10, 1),
(158, 'dim', 4, 10, 2),
(159, 'static', 4, 10, 3),
(160, 'declare', 4, 10, 4),
(161, 'C# is a modern, general-purpose, object-oriented programming language developed by Microsoft.', 5, 1, 1),
(162, 'C# was developed by Anders Hejlsberg and his team during the development of .Net Framework.', 5, 1, 2),
(163, 'C# is designed for Common Language Infrastructure (CLI).', 5, 1, 3),
(164, 'All of the above.', 5, 1, 4),
(165, 'The value types directly contain data.', 5, 2, 1),
(166, 'int, char, and float, which stores numbers, alphabets, and floating point numbers, respectively are value types.', 5, 2, 2),
(167, 'When you declare an int type, the system allocates memory to store the value.', 5, 2, 3),
(168, 'All of the above.', 5, 2, 4),
(169, 'ToDecimal', 5, 3, 1),
(170, 'ToDouble', 5, 3, 2),
(171, 'ToInt16', 5, 3, 3),
(172, 'ToInt32', 5, 3, 4),
(173, 'ToType', 5, 4, 1),
(174, 'ToUInt16', 5, 4, 2),
(175, 'ToUInt32', 5, 4, 3),
(176, 'ToUInt64', 5, 4, 4),
(177, 'Encapsulation is defined as the process of enclosing one or more items within a physical or logical package.', 5, 5, 1),
(178, 'Encapsulation, in object oriented programming methodology, prevents access to implementation details.', 5, 5, 2),
(179, 'Abstraction allows making relevant information visible and encapsulation enables a programmer to implement the desired level of abstraction.', 5, 5, 3),
(180, 'All of the above.', 5, 5, 4),
(181, 'Rank', 5, 6, 1),
(182, 'LongLength', 5, 6, 2),
(183, 'Length', 5, 6, 3),
(184, 'None of the above.', 5, 6, 4),
(185, 'Private', 5, 7, 1),
(186, 'Public', 5, 7, 2),
(187, 'Protected', 5, 7, 3),
(188, 'Internal', 5, 7, 4),
(189, 'abstract', 5, 8, 1),
(190, 'as', 5, 8, 2),
(191, 'foreach', 5, 8, 3),
(192, 'All of the above.', 5, 8, 4),
(193, 'elif', 5, 9, 1),
(194, 'define', 5, 9, 2),
(195, 'if', 5, 9, 3),
(196, 'else', 5, 9, 4),
(197, 'warning', 5, 10, 1),
(198, 'region', 5, 10, 2),
(199, 'line', 5, 10, 3),
(200, 'error', 5, 10, 4),
(201, 'A class is a blue print from which individual objects are created. A class can contain fields and methods to describe the behavior of an object.', 6, 1, 1),
(202, 'class is a special data type.', 6, 1, 2),
(203, 'class is used to allocate memory to a data type.', 6, 1, 3),
(204, 'none of the above.', 6, 1, 4),
(205, '8 bit', 6, 2, 1),
(206, '16 bit', 6, 2, 2),
(207, '32 bit', 6, 2, 3),
(208, '64 bit', 6, 2, 4),
(209, '0', 6, 3, 1),
(210, '0.0', 6, 3, 2),
(211, 'null', 6, 3, 3),
(212, 'undefined', 6, 3, 4),
(213, 'Variables, methods and constructors which are declared private can be accessed only by the members of the super class.', 6, 4, 1),
(214, 'Variables, methods and constructors which are declared protected can be accessed by any subclass of the super class.', 6, 4, 2),
(215, 'Variables, methods and constructors which are declared public in the superclass can be accessed by any class.', 6, 4, 3),
(216, 'All of the above.', 6, 4, 4),
(217, 'Encapsulation is a technique to define different methods of same type.', 6, 5, 1),
(218, 'Encapsulation is the ability of an object to take on many forms.', 6, 5, 2),
(219, 'Encapsulation is the technique of making the fields in a class private and providing access to the fields via public methods.', 6, 5, 3),
(220, 'None of the above.', 6, 5, 4),
(221, 'It is used to create syncronized code.', 6, 6, 1),
(222, 'There is no such block.', 6, 6, 2),
(223, 'It is used to initialize the static data member., It is excuted before main method at the time of class loading.', 6, 6, 3),
(224, 'None of the above.', 6, 6, 4),
(225, 'type.', 6, 7, 1),
(226, 'object.', 6, 7, 2),
(227, 'Both of the above.', 6, 7, 3),
(228, 'None of the above.', 6, 7, 4),
(229, 'Synchronization is the capability to control the access of multiple threads to shared resources.', 6, 8, 1),
(230, 'Synchronization is the process of writing the state of an object to another object.', 6, 8, 2),
(231, 'Synchronization is the process of writing the state of an object to byte stream.', 6, 8, 3),
(232, 'None of the above.', 6, 8, 4),
(233, 'Methods with same name but different parameters.', 6, 9, 1),
(234, 'Methods with same name but different return types.', 6, 9, 2),
(235, 'Methods with same name, same parameter types but different parameter names.', 6, 9, 3),
(236, 'None of the above.', 6, 9, 4),
(237, 'If an error occurs.', 6, 10, 1),
(238, 'If an exception occurs.', 6, 10, 2),
(239, 'Both of the above.', 6, 10, 3),
(240, 'None of the above.', 6, 10, 4),
(241, 'Canvas', 7, 1, 1),
(242, 'Audio & Video', 7, 1, 2),
(243, 'Geolocation', 7, 1, 3),
(244, 'All of the above.', 7, 1, 4),
(245, 'section', 7, 2, 1),
(246, 'article', 7, 2, 2),
(247, 'aside', 7, 2, 3),
(248, 'header', 7, 2, 4),
(249, 'datetime', 7, 3, 1),
(250, 'datetime-local', 7, 3, 2),
(251, 'date', 7, 3, 3),
(252, 'month', 7, 3, 4),
(253, 'Cookies are included with every HTTP request, thereby slowing down your web application by transmitting the same data.', 7, 4, 1),
(254, 'Cookies are included with every HTTP request, thereby sending data unencrypted over the internet.', 7, 4, 2),
(255, 'Cookies are limited to about 4 KB of data . Not enough to store required data.', 7, 4, 3),
(256, 'All of the above.', 7, 4, 4),
(257, 'Using SSE you can push DOM events continously from your web server to the visitor\'s browser.', 7, 5, 1),
(258, 'The event streaming approach opens a persistent connection to the server, sending data to the client when new information is available, eliminating the need for continuous polling.', 7, 5, 2),
(259, 'Server-sent events standardizes how we stream data from the server to the client.', 7, 5, 3),
(260, 'All of the above.', 7, 5, 4),
(261, 'HTML5 supports <audio> tag which is used to embed sound content in an HTML or XHTML document.', 7, 6, 1),
(262, 'The current HTML5 draft specification does not specify which audio formats browsers should support in the audio tag.', 7, 6, 2),
(263, 'Both of the above.', 7, 6, 3),
(264, 'None of the above.', 7, 6, 4),
(265, 'offline', 7, 7, 1),
(266, 'off', 7, 7, 2),
(267, 'out', 7, 7, 3),
(268, 'onbeforeonload', 7, 7, 4),
(269, 'ondragleave', 7, 8, 1),
(270, 'ondrag', 7, 8, 2),
(271, 'ondragend', 7, 8, 3),
(272, 'ondragenter', 7, 8, 4),
(273, 'ondrop', 7, 9, 1),
(274, 'ondurationchange', 7, 9, 2),
(275, 'onemptied', 7, 9, 3),
(276, 'onended', 7, 9, 4),
(277, 'onhaschange', 7, 10, 1),
(278, 'oninput', 7, 10, 2),
(279, 'ondata', 7, 10, 3),
(280, 'onloadeddata', 7, 10, 4),
(281, 'The Type Selector', 8, 1, 1),
(282, 'The Universal Selector', 8, 1, 2),
(283, 'The Descendant Selector', 8, 1, 3),
(284, 'The Class Selector', 8, 1, 4),
(285, 'in', 8, 2, 1),
(286, 'mm', 8, 2, 2),
(287, 'pc', 8, 2, 3),
(288, 'pt', 8, 2, 4),
(289, 'px', 8, 3, 1),
(290, 'vh', 8, 3, 2),
(291, 'vw', 8, 3, 3),
(292, 'vmin', 8, 3, 4),
(293, 'font-family', 8, 4, 1),
(294, 'font-style', 8, 4, 2),
(295, 'font-variant', 8, 4, 3),
(296, 'font-weight', 8, 4, 4),
(297, 'text-indent', 8, 5, 1),
(298, 'text-align', 8, 5, 2),
(299, 'text-decoration', 8, 5, 3),
(300, 'text-transform', 8, 5, 4),
(301, 'white-space', 8, 6, 1),
(302, 'text-shadow', 8, 6, 2),
(303, 'text-decoration', 8, 6, 3),
(304, 'text-transform', 8, 6, 4),
(305, ':border-collapse', 8, 7, 1),
(306, ':border-spacing', 8, 7, 2),
(307, ':caption-side', 8, 7, 3),
(308, ':empty-cells', 8, 7, 4),
(309, ':border-top-color', 8, 8, 1),
(310, ':border-left-color', 8, 8, 2),
(311, ':border-right-color', 8, 8, 3),
(312, ':border-bottom-color', 8, 8, 4),
(313, ':margin', 8, 9, 1),
(314, ':margin-bottom', 8, 9, 2),
(315, ':margin-top', 8, 9, 3),
(316, ':margin-left', 8, 9, 4),
(317, 'padding-bottom', 8, 10, 1),
(318, 'padding-top', 8, 10, 2),
(319, 'padding-left', 8, 10, 3),
(320, 'padding-right', 8, 10, 4),
(321, 'Less server interaction', 9, 1, 1),
(322, 'Immediate feedback to the visitors', 9, 1, 2),
(323, 'Increased interactivity', 9, 1, 3),
(324, 'All of the above.', 9, 1, 4),
(325, 'JavaScript can manipulate cookies using the cookie property of the Document object.', 9, 2, 1),
(326, 'JavaScript can read, create, modify, and delete the cookie or cookies that apply to the current web page.', 9, 2, 2),
(327, 'Both of the above.', 9, 2, 3),
(328, 'None of the above.', 9, 2, 4),
(329, 'getIndex()', 9, 3, 1),
(330, 'location()', 9, 3, 2),
(331, 'indexOf()', 9, 3, 3),
(332, 'None of the above.', 9, 3, 4),
(333, 'toValue()', 9, 4, 1),
(334, 'toNumber()', 9, 4, 2),
(335, 'toString()', 9, 4, 3),
(336, 'None of the above.', 9, 4, 4),
(337, 'toString()', 9, 5, 1),
(338, 'valueOf()', 9, 5, 2),
(339, 'toLocaleString()', 9, 5, 3),
(340, 'toPrecision()', 9, 5, 4),
(341, 'concat()', 9, 6, 1),
(342, 'match()', 9, 6, 2),
(343, 'search()', 9, 6, 3),
(344, 'replace()', 9, 6, 4),
(345, 'toLocaleUpperCase()', 9, 7, 1),
(346, 'toUpperCase()', 9, 7, 2),
(347, 'toString()', 9, 7, 3),
(348, 'substring()', 9, 7, 4),
(349, 'fixed()', 9, 8, 1),
(350, 'fontcolor()', 9, 8, 2),
(351, 'blink()', 9, 8, 3),
(352, 'bold()', 9, 8, 4),
(353, 'concat()', 9, 9, 1),
(354, 'every()', 9, 9, 2),
(355, 'filter()', 9, 9, 3),
(356, 'forEach()', 9, 9, 4),
(357, 'toSource()', 9, 10, 1),
(358, 'sort()', 9, 10, 2),
(359, 'toString()', 9, 10, 3),
(360, 'unshift()', 9, 10, 4),
(361, 'css 1', 8, 12, 1),
(362, 'css2', 8, 12, 2),
(363, 'css3', 8, 12, 3),
(364, 'css4', 8, 12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_email` varchar(256) NOT NULL,
  `contact_name` varchar(256) NOT NULL,
  `contact_message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_email`, `contact_name`, `contact_message`) VALUES
(1, 'suchit@gmail.com', 'suchit', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `language_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_id`, `language_name`) VALUES
(1, 'c'),
(2, 'c++'),
(3, 'python'),
(4, 'vb'),
(5, 'c#'),
(6, 'java'),
(7, 'html'),
(8, 'css'),
(9, 'javascript');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `question` varchar(250) DEFAULT NULL,
  `question_program` varchar(256) DEFAULT NULL,
  `ans_id` int(11) NOT NULL,
  `language_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `question_program`, `ans_id`, `language_id`) VALUES
(1, 'What is the output of the following program?', '#include<stdio.h>\r\n{\r\n	int x = 1;\r\n	switch(x)\r\n	{\r\n		default: printf(\"Hello\");\r\n		case 1: printf(\"hi\"); break;\r\n	}\r\n}', 3, 1),
(2, 'What is the output of the following program?', '#include&ltstdio.h&gt\n{\n	int x = 1;\n	switch(x)\n	{\n		default: printf(\"Hello\");\n		case 1:printf(\"hi\");break;\n	}\n}', 2, 1),
(3, 'Compiler generates ___ file.', '', 2, 1),
(4, 'What is the output of the following program?', '#include&ltstdio.h&gt\nmain()\n{\n	char s[] = \"Fine\";\n	*s = \"N\";\n	printf(\"%s\", s);\n}', 2, 1),
(5, 'What is the output of the following program?', '#include&ltstdio.h&gt\nmain()\n{\n	char s1[50], s2[50] = \"Hello\";\n	s1 = s2;\n	printf(\"%s\", s1);\n}', 3, 1),
(6, 'In normalized form, if the binary equivalent of 5.375 is \"0100 0000 1010 1100 0000 0000 0000 0000\" then what will be the output of the program in Intel core machine?', '#include&ltstdio.h&gt\n#include&ltmath.h&gt\nint main ()\n{\n	float a = 5.375;\n	char *p;\n	int i;\n	p = (char*)&a;\n	for(i=0; i &lt= 3; i++)\n		printf(\"%02x\n\", (unsigned char)p[i]);\n	return 0;\n}', 2, 1),
(7, 'The given below program allocates the memory, what function will you use to free the allocated memory?', '#include&ltstdio.h&gt\n#include&ltstdlib.h&gt\n#define MAXROW 4\n# define MAXCOL 5\nint main ()\n{\n	int **p,i, j;\n	p = (int **) malloc(MAXROW * sizeof(int*));\n	return 0;\n}', 2, 1),
(8, 'Which of the following header file can be used to define the NULL macro?', '', 1, 1),
(9, 'What do the following statement defines?', '', 2, 1),
(10, 'In the given below statement, what does the \"pf\" indicate?', '', 1, 1),
(11, 'Choose the pure virtual function definition from the following.', '', 3, 2),
(12, 'What is the output of the following program?', '#include&ltiostream&gt\nusing namespace std;\nclass abc {\n	public:\n		int i;\n		abc(int i) {\n			 i = i;\n		}\n};\nmain() {\n	abc m(5);\n	cout&lt&ltm.i;\n}', 2, 2),
(13, 'Runtime polymorphism is done using.', '', 2, 2),
(14, 'Choose the Object oriented programming language from below.', '', 4, 2),
(15, 'Which feature of the OOPS gives the concept of reusability?', '', 3, 2),
(16, 'single file can be opened by several streams simultaneously.', '', 2, 2),
(17, 'An exception is __', '', 2, 2),
(18, 'What is the output of the following program?', '#include&ltiostream&gt\r\nusing namespace std;\r\nmain() {\r\n	float t = 2;\r\n	switch(t) {\r\n		case 2: cout&lt&lt\"Hi\";\r\n			default: cout&lt&lt\"Hello\";\r\n		}\r\n}', 1, 2),
(19, 'The default executable generation on UNIX for a C++ program is ___', '', 2, 2),
(20, 'What is the built in library function to compare two strings?', '', 1, 2),
(21, 'What is output for \'search\'. find(\'S\') ?', '', 2, 3),
(22, 'Which is invalid in python for z = 5 ?', '', 1, 3),
(23, 'Select the option for following code ?', 's =0\r\nfor dinrange(0,5,0.1):\r\n... s += d\r\n...print(s)\r\n', 4, 3),
(24, 'Suppose we have a set a = {10,9,8,7}, and we execute a.remove(14) what will happen ?', '', 3, 3),
(25, 'What command is used to insert 6 in a list \'\'L\'\' at 3rd position ?', '', 1, 3),
(26, 'What happens in the below code?', 'class A:\ndef __init__(self,i=100):\nself.i=\nclass B(A):\ndef _init__(self,j=0):\nself.j=j\ndefmain():\n	   b=B()\nprint(b.i)\nprint(b.j)\nmain()\n', 4, 3),
(27, 'Which options are correct to create an empty set in Python?', '', 4, 3),
(28, 'Select the correct function among them which can be used to write the data to perform for a binary output?', '', 3, 3),
(29, 'Which way among them is used to create an event loop ?', '', 2, 3),
(30, 'Best part is you can display images in various options in Python. Select the option where you can display an image ?', '', 4, 3),
(31, 'Visual Basic is a tool that allows you to develop application in............ ', '', 2, 4),
(32, 'Form_Mouse Down ( ) procedure is executed when any mouse button is clicked in a free area of the ______', '', 2, 4),
(33, '_____ method removes a dialog box from view.', '', 3, 4),
(34, '_______ is used for finding out about objects, properties and methods. ', '', 1, 4),
(35, '_______ cannot be declared in a form or class module ', '', 1, 4),
(36, '_______ function is used to return a copy of a string without leading spaces.', '', 1, 4),
(37, '_______is a method which moves the focus to the specified control or form ', '', 1, 4),
(38, 'The default property for a text box control is _____ ', '', 1, 4),
(39, 'The ______ is a tool used for both the Input and output purpose.', '', 2, 4),
(40, 'In visual basic the declaration of variables is done by _____ key word.', '', 2, 4),
(41, 'Which of the following is correct about C#?', '', 4, 5),
(42, 'Which of the following is correct about value type variables in C#?', '', 4, 5),
(43, 'Which of the following converts a type to a 16-bit integer in C#?', '', 3, 5),
(44, 'Which of the following converts a type to an unsigned big type in C#?', '', 4, 5),
(45, 'Which of the following statements is correct about encapsulation?', '', 4, 5),
(46, 'Which of the following property of Array class in C# gets a 32-bit integer, the total number of elements in all the dimensions of the Array', '', 3, 5),
(47, 'Which of the following is the default access specifier of a class?', '', 4, 5),
(48, 'Which of the following is a reserved keyword in C#?', '', 2, 5),
(49, 'Which of the following preprocessor directive allows creating a compound conditional directive in C#?', '', 1, 5),
(50, 'Which of the following preprocessor directive allows generating a level one warning from a specific location in your code in C#?', '', 1, 5),
(51, 'What is a class in java?', '', 1, 6),
(52, 'What is the size of float variable?', '', 3, 6),
(53, 'What is the default value of byte variable?', '', 1, 6),
(54, 'Which of the following is true about super class?', '', 4, 6),
(55, 'What is Encapsulation?', '', 2, 6),
(56, 'What is static block?', '', 3, 6),
(57, 'Static binding uses which information for binding?', '', 1, 6),
(58, 'What is synchronization?', '', 1, 6),
(59, 'What is function overloading?', '', 2, 6),
(60, 'In which case, a program is expected to recover?', '', 2, 6),
(61, 'Which of the following feature is a part of HTML 5?', '', 4, 7),
(62, 'Which of the following tag represents the header of a section in HTML5?', '', 4, 7),
(63, 'Which of the following input control represents a date consisting of a year and a month encoded according to ISO 8601 in Web Form 2.0?', '', 4, 7),
(64, 'Which of the following is true about Cookies?', '', 4, 7),
(65, 'Which of the following is correct about Server Side Events(SSE) in HTML5?', '', 4, 7),
(66, 'Which of the following is true about \'audio\' tag in HTML5?', '', 3, 7),
(67, 'Which of the following attribute triggers event when the document goes offline?', '', 1, 7),
(68, 'Which of the following attribute triggers event when an element has been dragged to a valid drop target?', '', 4, 7),
(69, 'Which of the following attribute triggers event when the length of the media is changed?', '', 2, 7),
(70, 'Which of the following attribute triggers event when an element gets user input?', '', 2, 7),
(71, 'Which of the following selector matches the name of any element type?', '', 2, 8),
(72, 'Which of the following defines a measurement in inches?', '', 1, 8),
(73, 'Which of the following defines 1% of viewport height?', '', 2, 8),
(74, 'Which of the following property is used to change the face of a font?', '', 1, 8),
(75, 'Which of the following property is used to align the text of a document?', '', 2, 8),
(76, 'Which of the following property is used to control the flow and formatting of text?', '', 1, 8),
(77, 'Which of the following property of a table element specifies whether the border should be shown if a cell is empty?', '', 4, 8),
(78, 'Which of the following property changes the color of right border?', '', 3, 8),
(79, 'Which of the following property specifies the left margin of an element?', '', 4, 8),
(80, 'Which of the following property specifies the left padding of an element?', '', 3, 8),
(81, 'Which of the following is an advantage of using JavaScript?', '', 2, 9),
(82, 'Which of the following is true about cookie handling in JavaScript?', '', 1, 9),
(83, 'Which built-in method returns the index within the calling String object of the first occurrence of the specified value?', '', 2, 9),
(84, 'Which built-in method returns the string representation of the number\'s value?', '', 1, 9),
(85, 'Which of the following function of Number object returns the number\'s value?', '', 2, 9),
(86, 'Which of the following function of String object is used to match a regular expression against a string?', '', 1, 9),
(87, 'Which of the following function of String object returns a string representing the specified object?', '', 4, 9),
(88, 'Which of the following function of String object causes a string to be displayed in the specified color as if it were in a &ltfont color=\'color\'&gt tag?', '', 3, 9),
(89, 'Which of the following function of Array object calls a function for each element in the array?', '', 4, 9),
(90, 'Which of the following function of Array object sorts the elements of an array?', '', 3, 9),
(91, 'how ablut the cs', 'style\r\n\r\np{\r\n\r\nhello world\r\n\r\n}', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_log`
--

CREATE TABLE `quiz_log` (
  `q_id` int(11) NOT NULL,
  `q_uid` varchar(256) NOT NULL,
  `q_lang` int(11) NOT NULL,
  `q_attempt` int(11) NOT NULL,
  `q_correct` int(11) NOT NULL,
  `q_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_log`
--

INSERT INTO `quiz_log` (`q_id`, `q_uid`, `q_lang`, `q_attempt`, `q_correct`, `q_time`) VALUES
(7, 'jignesh', 5, 10, 4, '2018-09-27 05:27:20'),
(15, 'abc123', 7, 10, 9, '2018-10-19 18:23:17'),
(16, 'jd1999', 2, 10, 5, '2018-10-23 04:26:54'),
(17, 'MIHIR MER', 6, 10, 4, '2019-04-01 09:02:27'),
(18, 'MIHIR MER', 6, 10, 9, '2019-04-01 12:02:32'),
(22, 'suchit', 7, 10, 7, '2019-04-04 03:56:01'),
(23, 'suchit123', 8, 10, 10, '2019-12-19 17:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `user_lang` varchar(256) NOT NULL,
  `user_country` varchar(256) NOT NULL,
  `user_number` varchar(256) NOT NULL,
  `user_admin` int(11) NOT NULL DEFAULT 0,
  `user_log` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'signup timestanp'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `user_lang`, `user_country`, `user_number`, `user_admin`, `user_log`) VALUES
(9, 'suchit', 'sheth', 'suchit@gmail.com', 'suchit123', '$2y$10$V0vzx6jpwpniX9of0PETTOs4/n5easUpgc818npCtbxI2asodTMxq', 'css', 'India', '+917600024010', 1, '2018-09-26 06:32:05'),
(10, 'jignesh', 'shaparia', 'abcdefg@gmail.com', 'jignesh', '$2y$10$dVVP5gJ7r3iYfkO6MsrBBONhIzOVf1OcL/Ko0QFiTGNRQ0HmejxYC', 'c#', 'India', '+917600024010', 0, '2018-09-27 05:26:05'),
(11, 'jignesh', 'shaparia', 'abcdefg@gmail.com', 'jignesh', '$2y$10$2CSwx1oPQ7ZWVB4x4aPWd.aBUUavoorY8FcNOjkubRiM1tndRidK2', 'c#', 'India', '+917600024010', 0, '2018-09-27 05:26:05'),
(12, 'suchit', 'sheth', 'suchit@gmail.com', 'suchit', '$2y$10$/phpVgep1VDkGUp8DTqGWewwrvCHkQ7CtU3psSUU6YfpyLpNfo6US', 'java', 'India', '+91760024010', 0, '2018-10-02 05:55:28'),
(13, 'abc', 'hell', 'abc@gmail.com', 'abc', '$2y$10$zjbzan47O1xP3l.TuMhje.JYMdonH7upZAl0A/DVLyJI40RGDkKbi', 'c++', 'India', '123456789', 0, '2018-10-10 02:35:42'),
(15, 'kapil', 'savaliya', 'kapil@gmail.com', 'kapil', '$2y$10$8I3.I8rUwM9vOSSkoHbunuRqn7hOBV9I6aMWa3l4r6S52N/aDQ5iC', 'c++', 'India', '1234567890', 0, '2018-10-10 03:02:06'),
(16, 'mms', 'mms', 'mms@mms.com', 'mms', '$2y$10$hCfmwZiwHeXXWlNvgN8V0eX7GNIlgIMjarHeOB/RqNfl4/1cptJCm', 'c++', 'India', '123456789', 0, '2018-10-10 03:23:03'),
(17, 'hell', 'hell', 'mihir@gmail.com', 'mihir', '$2y$10$IJVRYCH34M6FQyQyWfFYxeeLnXvLb7kD1VJK7Bn8KJyJ9JAyq9wWi', 'c++', 'India', '1234567890', 0, '2018-10-10 03:28:22'),
(19, 'suchit', 'suchit', 'anky@gmail.com', 'anky', '$2y$10$5PtmZc7mdHUQBhr7ohr4/.ATzieQbw2uQ7nlezQj4I/TfDYrmYfOK', 'c++', 'India', '8999995544', 0, '2018-10-10 03:34:21'),
(20, 'hello', 'hello', 'hello@gmail.com', 'hello', '$2y$10$UiNjOMh3v5/ZSXFPWOcEausHUAfVnMNMYA4k23ZLS4g.Tvwsq8QPK', 'c', 'India', '7600024010', 1, '2018-10-10 13:32:00'),
(21, 'hello', 'hello', 'hello@gmail.com', 'suchit123', '$2y$10$/0UEfM2h4mdF9h5rnzl8H.tqeWvkk5mU4fc1Xl6NrhHn48ILQz/j2', 'c', 'India', '7600024010', 1, '2018-10-10 13:33:59'),
(22, 'hello', 'hello', 'hello@gmail.com', 'suchit123', '$2y$10$m8OZtWb7BXf2ZX6897rIR.uIhuI.sgcTIBrAYM5vVk2N5zA4Va07a', 'c', 'India', '7600024010', 1, '2018-10-10 13:35:41'),
(23, 'hello', 'abc', 'abc@gmail.com', 'abc123', '$2y$10$6s7tz0CqTyTq2lUZo0Vrg.f7M4U0qGhKKexAZUmqzdICW81urCnFq', 'html', 'India', '+917600024010', 0, '2018-10-19 18:13:30'),
(24, 'abc', 'abc', 'abcabc@abc.com', 'abc', '$2y$10$vOFD1GCX7jISe1QjhN8SvOpHAysnaHiMFowLfdFB8K98n/xLVDCVu', 'c++', 'India', '+9194088968066', 0, '2018-10-20 04:06:10'),
(25, 'mms', 'mms', 'mms@mms.com', 'mms', '$2y$10$1sFmW3bhACs6cFkUKzBS9O38UvcwBLXLeoW4MZV286AKAXafqDn46', 'c++', 'India', '+9194088968066', 0, '2018-10-20 04:06:55'),
(26, 'jd', 'makwana', 'jdmakwana1999@gmail.com', 'jd1999', '$2y$10$sLwpoVl9XJO/.i2cjzd/.esUrrzgo.8Ezg1jsGTnYX5mjzs3svkBq', 'c++', 'India', '+919978275163', 0, '2018-10-23 04:22:33'),
(27, 'MIHIR', 'MER', 'mermihir@yahoo.com', 'MIHIR MER', '$2y$10$EeqVs2LWC/iY0obFI3itE.hEUYvOamDghWGB9VXsEgpXrGhBRhwv6', 'java', 'India', '+919408896806', 0, '2019-04-01 09:00:27'),
(28, 'kapil', 'savaniya', 'kapil.s@gmail.com', 'kapil', '$2y$10$QNqTEcvY38yEa6DGBn.B3eqvUiuIgYWifiF.yd4z3xMBiOcFPndBW', 'html', 'India', '+911234567890', 0, '2019-04-04 03:53:56'),
(29, 'abc', 'abc', 'abc@gmail.com', 'abc', '$2y$10$fz3BCDQZ0aT5wddoaA171.q4moE.e29tmG1qVXu4kcM2QI.kmpB6W', 'java', 'India', '7600024010', 0, '2019-04-04 03:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `user_for_id` int(11) NOT NULL,
  `user_log` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_action` varchar(256) NOT NULL COMMENT 'login/logout'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `user_for_id`, `user_log`, `user_action`) VALUES
(34, 12, '2018-10-02 05:56:07', 'login'),
(35, 9, '2018-10-02 13:27:01', 'login'),
(36, 9, '2018-10-05 04:06:30', 'login'),
(37, 9, '2018-10-05 04:09:56', 'logout'),
(38, 9, '2018-10-10 02:41:09', 'login'),
(39, 9, '2018-10-10 02:51:02', 'logout'),
(40, 13, '2018-10-10 03:08:38', 'login'),
(41, 13, '2018-10-10 03:08:42', 'logout'),
(42, 13, '2018-10-10 03:09:27', 'login'),
(43, 13, '2018-10-10 03:09:57', 'logout'),
(44, 13, '2018-10-10 03:10:08', 'login'),
(45, 13, '2018-10-10 03:10:19', 'logout'),
(46, 13, '2018-10-10 03:11:38', 'login'),
(47, 13, '2018-10-10 03:11:51', 'logout'),
(48, 13, '2018-10-10 03:16:26', 'login'),
(49, 13, '2018-10-10 03:16:33', 'logout'),
(50, 13, '2018-10-10 03:16:40', 'login'),
(51, 13, '2018-10-10 03:16:50', 'logout'),
(52, 13, '2018-10-10 03:16:56', 'login'),
(53, 13, '2018-10-10 03:16:59', 'logout'),
(54, 12, '2018-10-10 03:33:36', 'login'),
(55, 12, '2018-10-10 03:33:40', 'logout'),
(56, 19, '2018-10-10 03:39:31', 'login'),
(57, 19, '2018-10-10 03:39:42', 'login'),
(58, 19, '2018-10-10 03:39:44', 'logout'),
(59, 19, '2018-10-10 03:39:52', 'login'),
(60, 19, '2018-10-10 03:40:00', 'logout'),
(61, 12, '2018-10-10 03:43:39', 'login'),
(62, 12, '2018-10-10 03:44:01', 'login'),
(63, 12, '2018-10-10 03:44:04', 'logout'),
(64, 20, '2018-10-10 13:32:40', 'login'),
(65, 20, '2018-10-10 13:32:45', 'logout'),
(66, 9, '2018-10-13 01:05:43', 'login'),
(67, 9, '2018-10-13 01:12:30', 'login'),
(68, 9, '2018-10-13 01:12:54', 'login'),
(69, 9, '2018-10-13 01:13:06', 'login'),
(70, 9, '2018-10-13 01:13:44', 'login'),
(71, 9, '2018-10-13 01:40:42', 'login'),
(72, 9, '2018-10-13 01:41:33', 'login'),
(73, 9, '2018-10-13 08:07:29', 'login'),
(74, 9, '2018-10-14 11:14:56', 'login'),
(75, 9, '2018-10-14 11:15:36', 'login'),
(76, 9, '2018-10-14 12:34:57', 'login'),
(77, 9, '2018-10-14 13:13:39', 'logout'),
(78, 12, '2018-10-14 13:13:53', 'login'),
(79, 12, '2018-10-14 13:16:58', 'login'),
(80, 12, '2018-10-14 13:27:32', 'logout'),
(81, 12, '2018-10-14 13:27:41', 'login'),
(82, 12, '2018-10-14 13:29:28', 'logout'),
(83, 9, '2018-10-14 13:29:35', 'login'),
(84, 9, '2018-10-14 13:29:47', 'logout'),
(85, 12, '2018-10-14 13:29:55', 'login'),
(86, 12, '2018-10-15 03:04:59', 'logout'),
(87, 9, '2018-10-15 03:59:41', 'login'),
(88, 9, '2018-10-15 04:06:01', 'logout'),
(89, 9, '2018-10-15 04:38:05', 'login'),
(90, 9, '2018-10-15 04:39:53', 'logout'),
(91, 9, '2018-10-15 04:41:49', 'login'),
(92, 9, '2018-10-17 11:53:37', 'login'),
(93, 9, '2018-10-18 01:05:52', 'login'),
(94, 9, '2018-10-18 02:05:21', 'logout'),
(95, 9, '2018-10-18 02:05:32', 'login'),
(96, 9, '2018-10-18 10:53:37', 'login'),
(97, 9, '2018-10-18 12:32:17', 'quiz-submit'),
(98, 9, '2018-10-18 12:33:22', 'quiz-submit'),
(99, 9, '2018-10-18 12:35:45', 'quiz-submit'),
(100, 9, '2018-10-18 12:36:47', 'quiz-submit'),
(101, 9, '2018-10-18 14:19:07', 'login'),
(102, 9, '2018-10-18 14:28:36', 'quiz-submit'),
(103, 9, '2018-10-19 07:44:07', 'login'),
(104, 9, '2018-10-19 16:34:20', 'quiz-submit'),
(105, 9, '2018-10-19 17:58:12', 'logout'),
(106, 9, '2018-10-19 18:07:59', 'login'),
(107, 9, '2018-10-19 18:10:58', 'logout'),
(108, 23, '2018-10-19 18:16:48', 'login'),
(109, 23, '2018-10-19 18:19:26', 'quiz-submit'),
(110, 23, '2018-10-19 18:22:41', 'logout'),
(111, 23, '2018-10-19 18:22:50', 'login'),
(112, 23, '2018-10-19 18:23:17', 'quiz-submit'),
(113, 23, '2018-10-19 18:25:11', 'logout'),
(114, 23, '2018-10-20 04:08:13', 'login'),
(115, 26, '2018-10-23 04:22:54', 'login'),
(116, 26, '2018-10-23 04:26:54', 'quiz-submit'),
(117, 12, '2018-12-22 06:26:01', 'login'),
(118, 12, '2018-12-24 04:15:12', 'login'),
(119, 27, '2019-04-01 09:00:46', 'login'),
(120, 27, '2019-04-01 09:02:27', 'quiz-submit'),
(121, 27, '2019-04-01 09:14:13', 'logout'),
(122, 23, '2019-04-01 11:57:58', 'login'),
(123, 27, '2019-04-01 11:59:47', 'login'),
(124, 27, '2019-04-01 12:02:32', 'quiz-submit'),
(125, 23, '2019-04-02 09:03:16', 'login'),
(126, 23, '2019-04-03 21:02:10', 'login'),
(127, 23, '2019-04-04 00:02:23', 'login'),
(128, 23, '2019-04-04 00:04:52', 'quiz-submit'),
(129, 23, '2019-04-04 00:06:57', 'logout'),
(130, 23, '2019-04-04 00:09:46', 'login'),
(131, 23, '2019-04-04 00:32:54', 'login'),
(132, 9, '2019-04-04 00:33:33', 'login'),
(133, 23, '2019-04-04 00:35:44', 'quiz-submit'),
(134, 23, '2019-04-04 00:36:05', 'quiz-submit'),
(135, 9, '2019-04-04 00:40:38', 'logout'),
(136, 23, '2019-04-04 00:40:54', 'login'),
(137, 23, '2019-04-04 03:52:49', 'logout'),
(138, 12, '2019-04-04 03:54:52', 'login'),
(139, 12, '2019-04-04 03:56:01', 'quiz-submit'),
(140, 12, '2019-04-04 03:58:00', 'logout'),
(141, 23, '2019-04-04 03:58:50', 'login'),
(142, 23, '2019-04-04 04:04:14', 'login'),
(143, 23, '2019-04-04 04:16:34', 'logout'),
(144, 23, '2019-04-04 04:16:51', 'login'),
(145, 23, '2019-04-04 04:32:15', 'login'),
(146, 9, '2019-12-19 17:21:34', 'login'),
(147, 9, '2019-12-19 17:23:05', 'quiz-submit'),
(148, 9, '2019-12-19 17:23:24', 'logout'),
(149, 9, '2019-12-19 17:26:24', 'login'),
(150, 9, '2020-02-11 04:50:33', 'login'),
(151, 9, '2020-02-11 10:32:36', 'login'),
(152, 9, '2020-04-06 09:37:14', 'login'),
(153, 9, '2020-04-06 09:44:01', 'logout'),
(154, 9, '2020-04-06 09:50:44', 'login'),
(155, 9, '2020-04-06 11:53:49', 'logout'),
(156, 9, '2020-04-06 11:54:19', 'login');

-- --------------------------------------------------------

--
-- Table structure for table `video_log`
--

CREATE TABLE `video_log` (
  `video_id` int(11) NOT NULL,
  `video_user_id` int(11) NOT NULL,
  `video_counter_value` int(11) NOT NULL,
  `video_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_log`
--

INSERT INTO `video_log` (`video_id`, `video_user_id`, `video_counter_value`, `video_time`) VALUES
(1, 26, 1, '2018-10-23 04:24:18'),
(2, 23, 1, '2019-04-02 09:03:45'),
(3, 23, 2, '2019-04-02 09:03:51'),
(4, 23, 1, '2019-04-04 00:03:27'),
(5, 23, 1, '2019-04-04 01:29:35'),
(6, 23, 2, '2019-04-04 01:30:02'),
(7, 23, 3, '2019-04-04 01:30:02'),
(8, 23, 4, '2019-04-04 03:08:28'),
(9, 23, 1, '2019-04-04 04:41:42'),
(10, 9, 1, '2019-12-19 17:27:17'),
(11, 9, 1, '2020-02-11 10:35:47'),
(12, 9, 1, '2020-04-06 11:54:58'),
(13, 9, 2, '2020-04-06 11:56:54'),
(14, 9, 3, '2020-04-06 11:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `video_path`
--

CREATE TABLE `video_path` (
  `video_path_id` int(11) NOT NULL,
  `video_path` varchar(256) NOT NULL,
  `language_id` int(11) NOT NULL,
  `video_title_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_path`
--

INSERT INTO `video_path` (`video_path_id`, `video_path`, `language_id`, `video_title_id`) VALUES
(1, 'youtube c/1.mp4', 1, 1),
(2, 'youtube c/2.mp4', 1, 2),
(3, 'youtube c/3.mp4', 1, 3),
(4, 'youtube c/4.mp4', 1, 4),
(5, 'youtube c/5.mp4', 1, 5),
(6, 'youtube c++/1.mp4', 2, 1),
(7, 'youtube c++/2.mp4', 2, 2),
(8, 'youtube c++/3.mp4', 2, 3),
(9, 'youtube c++/4.mp4', 2, 4),
(10, 'youtube c++/5.mp4', 2, 5),
(11, 'python/1.mp4', 3, 1),
(12, 'python/2.mp4', 3, 2),
(13, 'python/3.mp4', 3, 3),
(14, 'python/4.mp4', 3, 4),
(15, 'python/5.mp4', 3, 5),
(16, 'vb/1.mp4', 4, 1),
(17, 'vb/2.mp4', 4, 2),
(18, 'vb/3.mp4', 4, 3),
(19, 'vb/4.mp4', 4, 4),
(20, 'vb/5.mp4', 4, 5),
(21, 'c#/1.mov', 5, 1),
(22, 'c#/2.mov', 5, 2),
(23, 'c#/3.mov', 5, 3),
(24, 'c#/4.mov', 5, 4),
(25, 'c#/5.mov', 5, 5),
(26, 'java/1.flv', 6, 1),
(27, 'java/2.flv', 6, 2),
(28, 'java/3.flv', 6, 3),
(29, 'java/4.flv', 6, 4),
(30, 'java/5.flv', 6, 5),
(31, 'html/1.mp4', 7, 1),
(32, 'html/2.mp4', 7, 2),
(33, 'html/3.mp4', 7, 3),
(34, 'html/4.mp4', 7, 4),
(35, 'html/5.mp4', 7, 5),
(36, 'css/1.mov', 8, 1),
(37, 'css/2.mov', 8, 2),
(38, 'css/3.mov', 8, 3),
(39, 'css/4.mov', 8, 4),
(40, 'css/5.mov', 8, 5),
(41, 'javscript/1.mov', 9, 1),
(42, 'javscript/2.mov', 9, 2),
(43, 'javscript/3.mov', 9, 3),
(44, 'javscript/4.mov', 9, 4),
(45, 'javscript/5.mov', 9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `video_title`
--

CREATE TABLE `video_title` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(256) NOT NULL,
  `language_id` int(11) NOT NULL,
  `video_title_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_title`
--

INSERT INTO `video_title` (`video_id`, `video_title`, `language_id`, `video_title_id`) VALUES
(1, 'Learn c in minute', 1, 1),
(2, 'Learn c in minute part-2', 1, 2),
(3, 'How to Install the GCC', 1, 3),
(4, 'Switch,Arrays,Strings and more', 1, 4),
(5, 'Pointers,Arrays and Functions', 1, 5),
(6, 'Learn C++ through Problem Solving', 2, 1),
(7, 'Conditionals, Arrays, Vectors, Strings, Loops', 2, 2),
(8, 'Pointers & Functions', 2, 3),
(9, 'Exception Handling & Looping', 2, 4),
(10, 'Strings & Math', 2, 5),
(11, 'installation', 3, 1),
(12, 'print-and-strings', 3, 2),
(13, 'math', 3, 3),
(14, 'variables', 3, 4),
(15, 'while-loops', 3, 5),
(16, 'HelloWorld', 4, 1),
(17, 'Hello World Again', 4, 2),
(18, 'Variables', 4, 3),
(19, 'Getting Input', 4, 4),
(20, 'IF Statements', 4, 5),
(21, 'installing of c#', 5, 1),
(22, 'firstprog of c#', 5, 2),
(23, 'intro of c#', 5, 3),
(24, 'overview of c#', 5, 4),
(25, 'structure in c#', 5, 5),
(26, 'Installing the JDK', 6, 1),
(27, 'Running a Java Program', 6, 2),
(28, 'Downloading Eclipse', 6, 3),
(29, 'Hello YouTube', 6, 4),
(30, 'Variables', 6, 5),
(31, 'exploring', 7, 1),
(32, 'iframe', 7, 2),
(33, 'hidecursor', 7, 3),
(34, 'bullets', 7, 4),
(35, 'challenge', 7, 5),
(36, 'What is CSS3', 8, 1),
(37, 'The current status of CSS3', 8, 2),
(38, 'An overview of CSS3 capabilities', 8, 3),
(39, 'Can you use CSS3 now', 8, 4),
(40, 'Detecting support for CSS3', 8, 5),
(41, 'IntroJS', 9, 1),
(42, 'Creating', 9, 2),
(43, 'Tools', 9, 3),
(44, 'Structure', 9, 4),
(45, 'Where', 9, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `quiz_log`
--
ALTER TABLE `quiz_log`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`),
  ADD KEY `logging` (`user_for_id`);

--
-- Indexes for table `video_log`
--
ALTER TABLE `video_log`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `video_path`
--
ALTER TABLE `video_path`
  ADD PRIMARY KEY (`video_path_id`);

--
-- Indexes for table `video_title`
--
ALTER TABLE `video_title`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=365;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `quiz_log`
--
ALTER TABLE `quiz_log`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `video_log`
--
ALTER TABLE `video_log`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `video_path`
--
ALTER TABLE `video_path`
  MODIFY `video_path_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `video_title`
--
ALTER TABLE `video_title`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_log`
--
ALTER TABLE `user_log`
  ADD CONSTRAINT `logging` FOREIGN KEY (`user_for_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
