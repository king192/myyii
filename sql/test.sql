create table test (
id int unsigned not null auto_increment,
name varchar(30) not null,
primary key (`id`)
);

insert into test (name) values ('hello');
insert into test (name) values ('hi');