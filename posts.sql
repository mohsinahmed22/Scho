create table posts
(
  id               int auto_increment
    primary key,
  user_id          int                null,
  post_title       varchar(255)       null,
  post_description text               null,
  posts_tags       text               null,
  posts_status     int                null,
  post_is_active   int(1) default '0' null,
  post_url         varchar(255)       null
)
  engine = InnoDB;


