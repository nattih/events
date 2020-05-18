/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     04/05/2020 22:04:45                          */
/*==============================================================*/


drop table if exists admini;

drop table if exists commentaire;

drop table if exists evenement;

/*==============================================================*/
/* Table: admin                                                 */
/*==============================================================*/
create table admin
(
   id_admi              int not null AUTO_INCREMENT,
   nom                  varchar(254),
   prenom               varchar(254),
   mail                 varchar(254),
   motdepasse           varchar(254),
   primary key (id_admi)
);

/*==============================================================*/
/* Table: commentaire                                           */
/*==============================================================*/
create table commentaire
(
   id_comment           int not null AUTO_INCREMENT,
   id             int not null,
   pseudo               varchar(254),
   commentaire          varchar(254),
   primary key (id_comment)
);

/*==============================================================*/
/* Table: evenement                                             */
/*==============================================================*/
create table evenement
(
   id             int not null AUTO_INCREMENT,
   categorie            varchar(254),
   nom                  varchar(254),
   date_debut           datetime,
   date_fin             datetime,
   organisateur         varchar(254),
   descriptions         varchar(254),
   photo                varchar(254),
   primary key (id)
);

alter table commentaire add constraint FK_Association_1 foreign key (id)
      references evenement (id) on delete restrict on update restrict;

