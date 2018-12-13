create table pages
(
  id               int auto_increment
    primary key,
  page_title       varchar(255) null,
  page_description text         null,
  page_url         varchar(255) null,
  page_tags        text         null,
  meta_title       varchar(255) null,
  meta_description text         null,
  meta_keyword     text         null,
  page_status      varchar(255) null,
  page_is_active   int(1)       null
)
  engine = InnoDB;