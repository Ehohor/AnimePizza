
-- CREATE TABLE content (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     name VARCHAR(50) NOT NULL UNIQUE,
--     body TEXT
-- )


-- CREATE TABLE users (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     is_admin BOOL DEFAULT false,
--     name VARCHAR(55) NOT NULL,
--     surname VARCHAR(55) NOT NULL,
--     balance FLOAT DEFAULT 0,
--     email VARCHAR(255) NOT NULL UNIQUE,
--     password TEXT NOT NULL
-- );

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    options TEXT,
    quantity INT NOT NULL,
    price FLOAT DEFAULT 0,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- CREATE TABLE products (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     title VARCHAR(100) NOT NULL UNIQUE,
--     price FLOAT DEFAULT 0,
--     quantity INT DEFAULT 0,
--     description TEXT NOT NULL,
--     is_option BOOL DEFAULT false
-- );