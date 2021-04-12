INSERT INTO `address_book` (`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) 
VALUES (NULL, '李曉明10', 'ming@gmail.com', '0988888555', '2013-04-11', '台北市', NOW());




SELECT COUNT(1) num,p.`category_sid`,c.name cate_name FROM `products` p JOIN `categories` c ON p.category_sid = c.sid GROUP BY p.`category_sid`
