-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2026 at 08:01 PM
-- Server version: 8.0.46-37
-- PHP Version: 8.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcddiwmy_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Lounge Sofa', 1549.00, 'furniture', '2026-10-30 19:45:46', '2026-10-30 19:45:46', 'Bestselling Lounge marries modern style with built-to-last durability. The ultimate in comfort, the sofa features relaxing, medium-depth seats and supersoft back cushions that invite curling up and sinking in. Slim, modern track arms lighten the look and maximize sitting space, making Lounge the perfect place to relax.', 'hygge_sofa_thumb.jpg', 'hygge_sofa_1.jpg,hygge_sofa_2.jpg'),
(2, 'Solid Wood Dining Table', 1799.00, 'furniture', '2026-10-30 19:47:12', '2026-10-30 19:47:12', 'Simple and rustic, our Basque dining table displays the heft and character of a European farmhouse antique. Styled with substantial legs and hand-planed wooden planks, the generously sized extension table seats 8, expanding to seat 10. The solid sustainably sourced mango wood from trees no longer bearing fruit is stained light brown, finished with a grey wash and waxed to a soft sheen, highlighting the wood\'s open grain and naturally occurring knots unique to each plank. Exposed peg detailing that dots the tabletop adds to Basque\'s unique character. The Basque extension table is a Crate & Barrel exclusive.', 'hygge_table_thumb.jpg', 'hygge_table_1.jpg,hygge_table_2.jpg'),
(3, 'Walnut Wood Dining Chair', 579.00, 'furniture', '2026-10-30 19:48:31', '2026-10-30 19:48:31', 'Inspired by vintage Italian design, our sculptural Via chair indulges your dining room with design-gallery good looks and comfort to spare. Sustainably sourced walnut fashions the frame with organic tapers and flowing lines that form the crisscrossed seat and elongated back legs. A curved oval back cushion and mounded seat beckon with plush velvet upholstery in toffee brown.', 'hygge_chair_thumb.jpg', 'hygge_chair_1.jpg,hygge_chair_2.jpg'),
(4, 'Solid Driftwood 6-Drawer Dresser', 2099.00, 'furniture', '2026-10-30 19:49:52', '2026-10-30 19:49:52', 'Refined and bold, Keane takes bedroom storage to the next level. Scaled to create a stately presence in the master bedroom, each piece is crafted of beautiful mahogany and meranti wood with a grey-wash driftwood finish. Studded with warm brass round pulls, this roomy six-drawer low dresser has inset panels and channel detailing to call attention to its clean, architectural lines. Our best-selling Keane collection is a Crate & Barrel exclusive.', 'hygge_drawer_thumb.jpg', 'hygge_drawer_1.jpg,hygge_drawer_2.jpg'),
(5, 'Adelaide Curved Upholstered King Bed', 2499.00, 'furniture', '2026-10-30 19:51:11', '2026-10-30 19:51:11', 'Rest easy within the plush, generous curves of our Adelaide bed. Designed with rounded contours and generous cushioning for a cozy-yet-elegant look, the bed curves the gently arched headboard around the rails in a comforting embrace.', 'hygge_bed_thumb.jpg', 'hygge_bed_1.jpg,hygge_bed_2.jpg'),
(6, 'Black Metal and Glass Storage Display Cabinet', 2199.00, 'furniture', '2026-10-30 19:52:32', '2026-10-30 19:52:32', 'Ventana\'s Old World arch, contemporary zinc-colored iron construction and light-reflecting glass panes and black-painted shelves put on quite a display in the library or living room. Exquisitely crafted, the dramatically scaled glass display cabinet is welded by hand with welding marks left on view attesting to its fine workmanship.\r\n', 'hygge_cabinet_thumb.jpg', 'hygge_cabinet_1.jpg,hygge_cabinet_2.jpg'),
(7, 'Upholstered Storage Bench', 899.00, 'furniture', '2026-10-30 19:53:43', '2026-10-30 19:53:43', 'Grace the foot of your Anneli bed with a storage bench designed with the same cozy rounded contours. The bench is fully upholstered and features a plushly padded seat that lifts up to provide easy access to interior storage for stowing blankets, pillows or off-season garments.', 'hygge_bench_thumb.jpg', 'hygge_bench_1.jpg,hygge_bench_2.jpg'),
(8, 'Anchor Hocking Glass Mixing Bowls, Set Of 10\r\n', 59.95, 'kitchen', '2026-10-30 19:55:39', '2026-10-30 19:55:39', 'A kitchen classic, this 10-piece set of clear glass bowls addresses every kitchen need. The smallest bowl is perfect for an egg yolk or a salt-and-pepper mix for seasoning. Turn to the largest bowl for mixing dough or tossing salads. And there are eight more sizes in between to make mixing, prepping and serving a breeze. We love the broad-rim detailing and the way the bowls nest neatly for space-saving storage. Upgrade your mixing bowl options, or box the set up as a sure-to-be-treasured graduation, housewarming or shower gift.', 'hygge_bowl_thumb.jpg', 'hygge_bowl_1.jpg,hygge_bowl_2.jpg'),
(9, 'Classic Waffle Maker\r\n', 34.96, 'kitchen', '2026-10-30 19:56:44', '2026-10-30 19:56:44', 'Make every waffle exactly to your liking with this brushed stainless steel waffle maker. Weighted plates ensure even cooking, five browning levels let you select your ideal level of doneness and nonstick baking plates release finished waffles easily. For worry-free waffling, the red light indicates when the plates are properly heated and the green light illuminates when your waffle is ready to eat.', 'hygge_waffle_thumb.jpg', 'hygge_waffle_1.jpg,hygge_waffle_2.jpg'),
(10, 'Naturals Sheet Pans, Set of 3\r\n', 49.95, 'kitchen', '2026-10-30 19:57:47', '2026-10-30 19:57:47', 'With these three sheet pans, there\'s almost no limit to what you can bake. Make homemade granola for breakfast, a sheet-pan meal for dinner and bar cookies for dessert. The three sizes are useful for baking projects large and small, and the pans nest neatly for compact storage. The Nordic Ware Naturals collection features classic baking pans in natural aluminum, which conducts heat evenly and never rusts. Reinforced, professional-grade bakeware will last through a lifetime of delicious dinners and desserts.', 'hygge_pan_thumb.jpg', 'hygge_pan_1.jpg,hygge_pan_2.jpg'),
(11, 'Acacia Utensils, Set of 5', 109.95, 'kitchen', '2026-10-30 19:58:59', '2026-10-30 19:58:59', 'Stir, scoop, serve, scrape, flip and mix with our signature set of five acacia utensils. The essential tools ably handle polenta, pancakes, dumplings, noodles and mashed potatoes. Sustainable acacia wood shapes modern organic tools with a warm, classic look and cylindrical handles for a sturdy grip. We love the way the refined beveled edges finish the elongated handles with a dynamic detail. Exquisitely proportioned, our exclusive Crate & Barrel utensil set includes a spoon, slotted spoon, pasta spoon, solid turner and spurtle turner for a well-outfitted workspace that\'s up to any cooking challenge.\r\n\r\nDirect from our design team to your kitchen, the sophisticated assortment in our signature The Kitchen by Crate line combines beautiful simplicity and peerless performance. From initial sketches to rigorous testing, every expertly designed product in this kitchen collection meets our standards, and yours.', 'hygge_utensil_thumb.jpg', 'hygge_utensil_1.jpg,hygge_utensil_2.jpg'),
(12, 'Bamboo Flatware Tray', 36.95, 'kitchen', '2026-10-30 20:00:01', '2026-10-30 20:00:01', 'All the right spaces for flatware in renewable bamboo. Adjustable tray expands to fit almost any kitchen drawer and includes two additional dividers to customize the compartments.', 'hygge_tray_thumb.jpg', 'hygge_tray_1.jpg,hygge_tray_2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
