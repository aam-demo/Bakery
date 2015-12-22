CREATE TABLE Products (
	Id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(50) NOT NULL,
	Description VARCHAR(1000) NOT NULL,
	Price DECIMAL(13,4) NOT NULL,
	ImageName VARCHAR(50) NULL
);

INSERT INTO Products (Id,Name,Description,Price,ImageName) VALUES (1,'Carrot Cake','A scrumptious mini-carrot cake encrusted with sliced almonds',8.99,'carrot_cake.jpg');
INSERT INTO Products (Id,Name,Description,Price,ImageName) VALUES (2,'Lemon Tart','A delicious lemon tart with fresh meringue cooked to perfection',9.99,'lemon_tart.jpg');
INSERT INTO Products (Id,Name,Description,Price,ImageName) VALUES (3,'Cupcakes','Delectable vanilla and chocolate cupcakes',5.99,'cupcakes.jpg');
INSERT INTO Products (Id,Name,Description,Price,ImageName) VALUES (4,'Bread','Fresh baked French-style bread',1.49,'bread.jpg');
INSERT INTO Products (Id,Name,Description,Price,ImageName) VALUES (6,'Pear Tart','A glazed pear tart topped with sliced almonds and a dash of cinnamon',5.99,'pear_tart.jpg');
INSERT INTO Products (Id,Name,Description,Price,ImageName) VALUES (7,'Chocolate Cake','Rich chocolate frosting cover this chocolate lover’s dream.    ',8.99,'chocolate_cake.jpg');
