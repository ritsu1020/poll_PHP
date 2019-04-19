# poll_PHP
Poll_PHP

## member

takeshi koga

* PHP practice
* mysql
* test
* class

### PHP 投票システム

DB設計

> create database dotinstall_poll_php;

>grant all on dotinsatall_poll_php. * to dbuser@localhost identified by 'xxxxxx';


>use dotinsatall_poll_php

> drop table if exists answers;
creata table answers (
id int not null auto_increment primary_key,
answer int not null,
created datatime,
remote_addr varchar(15),
user_agent varchar(255),
answer_date date,
unique unique_answer(remote_addr, user_agent, answer_date)
);

$thisの意味
> このクラスの中の～…　メソッドとプロパティの前に記述する
