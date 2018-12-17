create table posts_tags
(
  id       int auto_increment
    primary key,
  tags_id  int null,
  posts_id int null
)
  engine = InnoDB;


