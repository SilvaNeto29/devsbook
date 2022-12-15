-- Arquivo de configuração e arquitetura do banco de dados



-- Criacao tabela usuarios
CREATE TABLE `users` (
`id`  int NOT NULL AUTO_INCREMENT,
`name`  varchar(100) NULL ,
`email`  varchar(100) NULL ,
`password`  varchar(200) NULL ,
`birthdate`  datetime NULL ,
`city`  varchar(100) NULL ,
`work`  varchar(100) NULL ,
`cover`  varchar(100) NULL ,
`avatar`  varchar(100) NULL ,
`token`  varchar(200) NULL ,
PRIMARY KEY (`id`)
)
;



-- Criacao de tabela de relacao entre usuarios
CREATE TABLE `userrelations` (
`id`  int NOT NULL AUTO_INCREMENT ,
`user_from`  int NULL ,
`user_to`  int NULL ,
PRIMARY KEY (`id`)
)
;



-- Tabela de posts
CREATE TABLE `posts` (
`id`  int NOT NULL AUTO_INCREMENT ,
`type`  varchar(255) NULL ,
`created_at`  datetime NULL ,
`body`  text NULL ,
PRIMARY KEY (`id`)
)
;



-- Tabela de likes de posts
CREATE TABLE `postlikes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Tabela de comentarios de posts
CREATE TABLE `postcomments` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;