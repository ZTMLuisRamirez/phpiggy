CREATE TABLE IF NOT EXISTS users(
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  age tinyint(3) unsigned NOT NULL,
  country varchar(255) NOT NULL,
  social_media_url varchar(255) NOT NULL,
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY(id),
  UNIQUE KEY(email)
);

CREATE TABLE IF NOT EXISTS transactions(
  id bigint(20) NOT NULL AUTO_INCREMENT,
  description varchar(255) NOT NULL,
  amount decimal(10,2) NOT NULL,
  date datetime NOT NULL,
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  user_id bigint(20) unsigned NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(user_id) REFERENCES users(id)
);