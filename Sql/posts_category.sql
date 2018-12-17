create table posts_category
(
  id             int auto_increment
    primary key,
  category_title varchar(255) null,
  category_url   varchar(255) null
)
  engine = InnoDB;


