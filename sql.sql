CREATE TABLE `users`
(
  id int(11) NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL UNIQUE,
  email VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  firstname VARCHAR(100),
  lastname VARCHAR(120),
  picture_url VARCHAR(255) DEFAULT 'default.jpg',
  role_id VARCHAR(8) NOT NULL DEFAULT '2Ci',
  is_active TINYINT(1) DEFAULT 0,
  ok_newsletter TINYINT(1) DEFAULT 0,
  created DATETIME,
  modified DATETIME
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `roles`
(
  id VARCHAR(8) UNIQUE PRIMARY KEY,
  name VARCHAR(200)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `categories`
(
  id INT NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150) NOT NULL UNIQUE
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `products`
(
  id INT NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL UNIQUE,
  description TEXT,
  price VARCHAR(8) NOT NULL,
  category_id INT NOT NULL,
  is_daily TINYINT NOT NULL DEFAULT 0
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `orders`
(
  id INT NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  created DATETIME
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `orders_products`
(
  id int NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
  order_id INT NOT NULL,
  product_id INT NOT NULL,
  quantity INT NOT NULL DEFAULT 1
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

ALTER TABLE users
ADD CONSTRAINT fk_role_id FOREIGN KEY(role_id) REFERENCES roles(id);

ALTER TABLE products
ADD CONSTRAINT fk_category_id FOREIGN KEY(category_id) REFERENCES categories(id);

ALTER TABLE orders
ADD CONSTRAINT fk_user_id FOREIGN KEY(user_id) REFERENCES users(id);

ALTER TABLE orders_products
ADD CONSTRAINT fk_order_id FOREIGN KEY(order_id) REFERENCES orders(id);

ALTER TABLE orders_products
ADD CONSTRAINT fk_product_id FOREIGN KEY(product_id) REFERENCES products(id);


INSERT INTO roles (id,name) VALUES ('7cHhuIc2','Administrateur'),
('2Ci','Membre');