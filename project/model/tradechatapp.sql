-- Database: `tradechatapp`

CREATE TABLE IF NOT EXISTS `messages` (
    `msg_id` int(11) NOT NULL AUTO_INCREMENT,
    `incoming_msg_id` int(255) NOT NULL,
    `outgoing_msg_id` int(255) NOT NULL,
    `msg` varchar(1000) NOT NULL,
    PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `users` (
    `user_id` int(11) NOT NULL AUTO_INCREMENT,
    `unique_id` int(255) NOT NULL,
    `fname` varchar(255) NOT NULL,
    `lname` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `img` varchar(255) NOT NULL,
    `status` varchar(255) NOT NULL,
    PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `post` (
    `post_id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,   
    `content` text NOT NULL,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`post_id`),
    FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `article` (
    `article_id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,   
    `title` varchar(255) NOT NULL,
    `content` text NOT NULL,
    `published_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`article_id`),
    FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `pay` (
    `pay_id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,   
    `amount` decimal(10,2) NOT NULL,
    `payment_method` varchar(50) NOT NULL,
    `transaction_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`pay_id`),
    FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `report` (
    `report_id` int(11) NOT NULL AUTO_INCREMENT,
    `reporter_id` int(11) NOT NULL,   
    `reported_id` int(11) NOT NULL,   
    `reason` varchar(255) NOT NULL,
    `details` text,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`report_id`),
    FOREIGN KEY (`reporter_id`) REFERENCES `users`(`user_id`) ON DELETE CASCADE,
    FOREIGN KEY (`reported_id`) REFERENCES `users`(`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
