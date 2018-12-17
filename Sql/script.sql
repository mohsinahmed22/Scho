create table users_type
(
  id        int auto_increment
    primary key,
  type_name varchar(255) null
);

create table users
(
  id         int auto_increment
    primary key,
  username   varchar(255) null,
  password   varchar(255) null,
  first_name varchar(255) null,
  last_name  varchar(255) null,
  email      varchar(255) null,
  user_type  int(6)       null,
  constraint users_users_type_id_fk
  foreign key (user_type) references users_type (id)
);

create table school_profile
(
  id                    int auto_increment
    primary key,
  user_id               int                null,
  school_name           varchar(255)       null,
  school_phone          varchar(255)       null,
  school_email          varchar(255)       null,
  school_address        varchar(255)       null,
  school_fb_link        varchar(255)       null,
  school_twitter_link   varchar(255)       null,
  school_website_link   varchar(255)       null,
  school_city           varchar(255)       null,
  school_area           varchar(255)       null,
  school_description    text               null,
  school_mont_system    varchar(255)       null,
  school_type           varchar(255)       null,
  school_special_child  int(2) default '0' null,
  school_main_campus    int(2) default '0' null,
  school_branches       int(2) default '0' null,
  school_cover          varchar(255)       null,
  school_avatar         varchar(255)       null,
  school_profile_status varchar(255)       null,
  constraint school_profile_users_id_fk
  foreign key (user_id) references users (id)
);

create table school_branches
(
  id                        int auto_increment
    primary key,
  school_profile_id         int          null,
  school_branch_address     varchar(255) null,
  school_branch_phone       varchar(255) null,
  school_branch_email       varchar(255) null,
  school_branch_description varchar(255) null,
  constraint school_branches_school_profile_id_fk
  foreign key (school_profile_id) references school_profile (id)
);

create index school_branches_school_profile_id_fk
  on school_branches (school_profile_id);

create table school_jobs
(
  id                      int auto_increment
    primary key,
  school_profile_id       int                                     null,
  school_branches_id      int                                     null,
  school_job_title        varchar(255)                            null,
  school_job_description  varchar(255)                            null,
  school_job_salary       varchar(255)                            null,
  school_job_status       varchar(255) default 'Available'        null,
  school_job_publish_date timestamp default CURRENT_TIMESTAMP     not null,
  school_job_valid_till   timestamp default '0000-00-00 00:00:00' not null,
  job_status              varchar(255)                            null,
  constraint school_jobs_school_profile_id_fk
  foreign key (school_profile_id) references school_profile (id),
  constraint school_jobs_school_branches_id_fk
  foreign key (school_branches_id) references school_branches (id)
);

create index school_jobs_school_branches_id_fk
  on school_jobs (school_branches_id);

create index school_jobs_school_profile_id_fk
  on school_jobs (school_profile_id);

create index school_profile_users_id_fk
  on school_profile (user_id);

create table seeker_profile
(
  id                    int auto_increment
    primary key,
  user_id               int          null,
  seeker_phone          varchar(255) null,
  seeker_intersted_in   varchar(255) null,
  seeker_kids           varchar(255) null,
  seeker_profile_status varchar(255) null,
  constraint seeker_profile_users_id_fk
  foreign key (user_id) references users (id)
);

create index seeker_profile_users_id_fk
  on seeker_profile (user_id);

create table tutors_profile
(
  id                   int auto_increment
    primary key,
  user_id              int          null,
  tutor_job_status     varchar(255) null,
  tutor_dob            varchar(255) null,
  tutor_city           varchar(255) null,
  tutor_address        varchar(255) null,
  tutor_facebook_link  varchar(255) null,
  tutor_linkedin       varchar(255) null,
  tutor_description    text         null,
  tutor_cover          varchar(255) null,
  tutor_avatar         varchar(255) null,
  tutor_profile_status varchar(255) null,
  constraint tutors_profile_users_id_fk
  foreign key (user_id) references users (id)
);

create table posts
(
  id                 int auto_increment
    primary key,
  user_id            int          null,
  school_profile_id  int          null,
  school_branches_id int          null,
  tutor_profile_id   int          null,
  posts_title        varchar(255) null,
  posts_description  text         null,
  posts_tags         text         null,
  posts_status       int          null,
  constraint posts_users_id_fk
  foreign key (user_id) references atten_db.users (id),
  constraint posts_school_profile_id_fk
  foreign key (school_profile_id) references school_profile (id),
  constraint posts_school_branches_id_fk
  foreign key (school_branches_id) references school_branches (id),
  constraint posts_tutors_profile_id_fk
  foreign key (tutor_profile_id) references tutors_profile (id)
);

create table downloads
(
  id             int auto_increment
    primary key,
  user_id        int          null,
  posts_id       int          null,
  download_title varchar(255) null,
  download_file  varchar(255) null,
  download_tags  varchar(255) null,
  constraint downloads_users_id_fk
  foreign key (user_id) references users (id),
  constraint downloads_posts_id_fk
  foreign key (posts_id) references posts (id)
);

create index downloads_posts_id_fk
  on downloads (posts_id);

create index downloads_users_id_fk
  on downloads (user_id);

create index posts_school_branches_id_fk
  on posts (school_branches_id);

create index posts_school_profile_id_fk
  on posts (school_profile_id);

create index posts_tutors_profile_id_fk
  on posts (tutor_profile_id);

create index posts_users_id_fk
  on posts (user_id);

create table review
(
  id                 int auto_increment
    primary key,
  user_id            int          null,
  school_profile_id  int          null,
  school_branches_id int          null,
  tutor_id           int          null,
  question_1         varchar(255) null,
  question_2         varchar(255) null,
  question_3         varchar(255) null,
  question_4         varchar(255) null,
  question_5         varchar(255) null,
  question_6         text         null,
  overall_rating     varchar(255) null,
  overall_message    text         null,
  constraint review_users_id_fk
  foreign key (user_id) references users (id),
  constraint review_school_profile_id_fk
  foreign key (school_profile_id) references school_profile (id),
  constraint review_school_branches_id_fk
  foreign key (school_branches_id) references school_branches (id),
  constraint review_tutors_profile_id_fk
  foreign key (tutor_id) references tutors_profile (id)
);

create index review_school_branches_id_fk
  on review (school_branches_id);

create index review_school_profile_id_fk
  on review (school_profile_id);

create index review_tutors_profile_id_fk
  on review (tutor_id);

create index review_users_id_fk
  on review (user_id);

create index tutors_profile_users_id_fk
  on tutors_profile (user_id);

create index users_users_type_id_fk
  on users (user_type);


