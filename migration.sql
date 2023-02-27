CREATE TABLE `units` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255)
);

CREATE TABLE `material` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255),
  `avarage` float,
  `price` int,
  `is_available` int,
  `unit_id` integer,
  FOREIGN KEY (`unit_id`) REFERENCES `units`(`id`)
);

CREATE TABLE `pruchases` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255),
  `price` float,
  `qty` int,
  `material_id` int,
  FOREIGN KEY (`material_id`) REFERENCES `material`(`id`)
);

CREATE TABLE `roles` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255)
);

CREATE TABLE `employee` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255),
  `phone` varchar(255) ,
  `role_id` int,
  `img` varchar(255),
  `address` varchar(255),
  `nationalId` varchar(255),
  `nationalId_img` varchar(255),
  `salary_type` varchar(255),
  FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`)
);

CREATE TABLE `shift` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `employ_id` int,
  `start_time` datetime,
  `end_time` datetime,
  `start_cash` int,
  `end_cash` int,
  FOREIGN KEY (`employ_id`) REFERENCES `employee`(`id`)
);

CREATE TABLE `permission` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255)
);

CREATE TABLE `roles_ permission` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `role_id` int,
  `permission_id` int,
  FOREIGN KEY (`permission_id`) REFERENCES `permission`(`id`),
  FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`)
);

CREATE TABLE `addons` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255),
  `is_available` int,
  `price` float
);

CREATE TABLE `categories` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255),
  `img` varchar(255),
  `parent` int,
  FOREIGN KEY (`parent`) REFERENCES `categories`(`id`)
);

CREATE TABLE `zones` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255),
  `is_available` int,
  `delivery_fee` float
);

CREATE TABLE `tables` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `order_id` int,
  `no_seats` int,
  `is_available` int
);

CREATE TABLE `customers` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255),
  `phone` varchar(255),
  `address` varchar(255)
);

CREATE TABLE `attributs` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255)
);

CREATE TABLE `tables_reservation` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `table_id` int,
  `customer_id` int,
  `start_time` datetime,
  `end_time` datetime,
  FOREIGN KEY (`table_id`) REFERENCES `tables`(`id`),
  FOREIGN KEY (`customer_id`) REFERENCES `customers`(`id`)
);

CREATE TABLE `orders` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `customer_id` int,
  `order_details` text,
  `order_type` varchar(255),
  `total_amount` float,
  `amount_received` float,
  `discount` float,
  `tax` float,
  `payment_methd` varchar(255),
  `shift_id` int,
  `service_fee` float,
  `status` int,
  FOREIGN KEY (`customer_id`) REFERENCES `customers`(`id`)
);

CREATE TABLE `outside_orders` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `order_id` int,
  `delivery_man_id` int,
  `zone_id` int,
  FOREIGN KEY (`zone_id`) REFERENCES `zones`(`id`),
  FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`)
);



CREATE TABLE `items` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255),
  `category_id` int,
  `img` varchar(255),
  `price` int,
  `variation` text,
  `addons` varchar(255),
  `description` text,
  `discount` float,
  `discount_type` varchar(255),
  `status` int,
  FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`)
);

CREATE TABLE `items_materials` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `material_id` int,
  `item_id` int,
  FOREIGN KEY (`material_id`) REFERENCES `material`(`id`),
  FOREIGN KEY (`item_id`) REFERENCES `items`(`id`)
);

