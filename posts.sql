create table posts
(
  id                int auto_increment
    primary key,
  user_id           int                                 null,
  post_title        varchar(255)                        null,
  post_description  text                                null,
  posts_tags        text                                null,
  posts_status      varchar(255) default 'Unpublished'  null,
  post_is_active    int(1) default '0'                  null,
  post_url          varchar(255)                        null,
  meta_title        varchar(255)                        null,
  meta_description  text                                null,
  meta_keyword      varchar(255)                        null,
  post_date         timestamp default CURRENT_TIMESTAMP null,
  post_category     int                                 null,
  post_featured_img varchar(255)                        null
)
  engine = InnoDB;

