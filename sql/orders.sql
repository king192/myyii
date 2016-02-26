-- 订单表
create table orders (
id int unsigned not null auto_increment,
goods_name varchar(30) not null,
customer_id int unsigned not null,
primary key (`id`)
);
insert into orders (goods_name,customer_id) values ('apple',1);
insert into orders (goods_name,customer_id) values ('book',1);
insert into orders (goods_name,customer_id) values ('phone',2);
insert into orders (goods_name,customer_id) values ('books',1);