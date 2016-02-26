-- 一对多，这是一个用户表，只保留基本用户数据
create table customer (
id int unsigned not null auto_increment,
name varchar(30) not null,
-- order_id int unsigned not null,
primary key (`id`)
);
insert into customer (name) values ('zhangsan');
insert into customer (name) values ('zhangsan');
insert into customer (name) values ('lisi');