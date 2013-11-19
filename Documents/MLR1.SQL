DROP DATABASE IF EXISTS MLR1;

CREATE DATABASE IF NOT EXISTS MLR1;
USE MLR1;
# -----------------------------------------------------------------------------
#       TABLE : DEVOIR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS DEVOIR
 (
   IDDEVOIR INT(32) NOT NULL  ,
   IDMODULE CHAR(32) NOT NULL  ,
   IDCLASSE CHAR(32) NOT NULL  ,
   CONTENUEDEVOIR CHAR(32) NULL  ,
   DEBUTDEVOIR CHAR(32) NULL  ,
   FINDEVOIR CHAR(32) NULL  
   , PRIMARY KEY (IDDEVOIR) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE DEVOIR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_DEVOIR_MODULE
     ON DEVOIR (IDMODULE ASC);

CREATE  INDEX I_FK_DEVOIR_CLASSE
     ON DEVOIR (IDCLASSE ASC);

# -----------------------------------------------------------------------------
#       TABLE : CONTROLE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CONTROLE
 (
   IDCONTROLE CHAR(32) NOT NULL  ,
   IDINTERVENTION CHAR(32) NOT NULL  ,
   IDTYPECONTROLE CHAR(32) NOT NULL  ,
   CONTENUECONTROLE CHAR(32) NULL  ,
   DATECONTROLE CHAR(32) NULL  ,
   CORRECTIONCONTROLE CHAR(32) NULL  ,
   URLCONTROLE CHAR(32) NULL  
   , PRIMARY KEY (IDCONTROLE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CONTROLE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CONTROLE_INTERVENTION
     ON CONTROLE (IDINTERVENTION ASC);

CREATE  INDEX I_FK_CONTROLE_TYPECONTROLE
     ON CONTROLE (IDTYPECONTROLE ASC);

# -----------------------------------------------------------------------------
#       TABLE : UTILISATEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS UTILISATEUR
 (
   IDUTILISATEUR CHAR(32) NOT NULL  ,
   PRENOMUTILISATEUR CHAR(32) NULL  ,
   NOMUTILISATEUR CHAR(32) NULL  ,
   LOGINUTILISATEUR CHAR(32) NULL  ,
   PASSWORDUTILISATEUR CHAR(32) NULL  
   , PRIMARY KEY (IDUTILISATEUR) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : INTERVENTION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INTERVENTION
 (
   IDINTERVENTION CHAR(32) NOT NULL  ,
   IDMODULE CHAR(32) NOT NULL  ,
   IDCLASSE CHAR(32) NOT NULL  ,
   IDUTILISATEUR CHAR(32) NOT NULL  ,
   DATEINTERVENTION CHAR(32) NULL  ,
   DUREEINTERVENTION CHAR(32) NULL  ,
   CONTENUEINTERVENTION CHAR(32) NULL  ,
   NOMINTERVENTION CHAR(32) NULL  ,
   IPINTERVENTION CHAR(32) NULL  
   , PRIMARY KEY (IDINTERVENTION) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE INTERVENTION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_INTERVENTION_MODULE
     ON INTERVENTION (IDMODULE ASC);

CREATE  INDEX I_FK_INTERVENTION_CLASSE
     ON INTERVENTION (IDCLASSE ASC);

CREATE  INDEX I_FK_INTERVENTION_UTILISATEUR
     ON INTERVENTION (IDUTILISATEUR ASC);

# -----------------------------------------------------------------------------
#       TABLE : TYPECLASSE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPECLASSE
 (
   IDTYPECLASSE CHAR(32) NOT NULL  ,
   NOMTYPECLASSE CHAR(32) NULL  
   , PRIMARY KEY (IDTYPECLASSE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : SYLLABUS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SYLLABUS
 (
   IDSYLLABUS CHAR(32) NOT NULL  ,
   IDMODULE CHAR(32) NOT NULL  ,
   DATESYLLABUS CHAR(32) NULL  ,
   URLSYLLABUS CHAR(32) NULL  
   , PRIMARY KEY (IDSYLLABUS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE SYLLABUS
# -----------------------------------------------------------------------------


CREATE UNIQUE INDEX I_FK_SYLLABUS_MODULE
     ON SYLLABUS (IDMODULE ASC);

# -----------------------------------------------------------------------------
#       TABLE : MODULE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MODULE
 (
   IDMODULE CHAR(32) NOT NULL  ,
   NOMMODULE CHAR(32) NULL  
   , PRIMARY KEY (IDMODULE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CLASSE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CLASSE
 (
   IDCLASSE CHAR(32) NOT NULL  ,
   IDTYPECLASSE CHAR(32) NOT NULL  ,
   NOMCLASSE CHAR(32) NULL  
   , PRIMARY KEY (IDCLASSE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CLASSE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CLASSE_TYPECLASSE
     ON CLASSE (IDTYPECLASSE ASC);

# -----------------------------------------------------------------------------
#       TABLE : TYPECONTROLE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPECONTROLE
 (
   IDTYPECONTROLE CHAR(32) NOT NULL  ,
   NOMTYPECONTROLE CHAR(32) NULL  
   , PRIMARY KEY (IDTYPECONTROLE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ETUDIER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ETUDIER
 (
   IDMODULE CHAR(32) NOT NULL  ,
   IDCLASSE CHAR(32) NOT NULL  
   , PRIMARY KEY (IDMODULE,IDCLASSE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ETUDIER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ETUDIER_MODULE
     ON ETUDIER (IDMODULE ASC);

CREATE  INDEX I_FK_ETUDIER_CLASSE
     ON ETUDIER (IDCLASSE ASC);

# -----------------------------------------------------------------------------
#       TABLE : ENSEIGNER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENSEIGNER
 (
   IDUTILISATEUR CHAR(32) NOT NULL  ,
   IDMODULE CHAR(32) NOT NULL  
   , PRIMARY KEY (IDUTILISATEUR,IDMODULE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ENSEIGNER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ENSEIGNER_UTILISATEUR
     ON ENSEIGNER (IDUTILISATEUR ASC);

CREATE  INDEX I_FK_ENSEIGNER_MODULE
     ON ENSEIGNER (IDMODULE ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE DEVOIR 
  ADD FOREIGN KEY FK_DEVOIR_MODULE (IDMODULE)
      REFERENCES MODULE (IDMODULE) ;


ALTER TABLE DEVOIR 
  ADD FOREIGN KEY FK_DEVOIR_CLASSE (IDCLASSE)
      REFERENCES CLASSE (IDCLASSE) ;


ALTER TABLE CONTROLE 
  ADD FOREIGN KEY FK_CONTROLE_INTERVENTION (IDINTERVENTION)
      REFERENCES INTERVENTION (IDINTERVENTION) ;


ALTER TABLE CONTROLE 
  ADD FOREIGN KEY FK_CONTROLE_TYPECONTROLE (IDTYPECONTROLE)
      REFERENCES TYPECONTROLE (IDTYPECONTROLE) ;


ALTER TABLE INTERVENTION 
  ADD FOREIGN KEY FK_INTERVENTION_MODULE (IDMODULE)
      REFERENCES MODULE (IDMODULE) ;


ALTER TABLE INTERVENTION 
  ADD FOREIGN KEY FK_INTERVENTION_CLASSE (IDCLASSE)
      REFERENCES CLASSE (IDCLASSE) ;


ALTER TABLE INTERVENTION 
  ADD FOREIGN KEY FK_INTERVENTION_UTILISATEUR (IDUTILISATEUR)
      REFERENCES UTILISATEUR (IDUTILISATEUR) ;


ALTER TABLE SYLLABUS 
  ADD FOREIGN KEY FK_SYLLABUS_MODULE (IDMODULE)
      REFERENCES MODULE (IDMODULE) ;


ALTER TABLE CLASSE 
  ADD FOREIGN KEY FK_CLASSE_TYPECLASSE (IDTYPECLASSE)
      REFERENCES TYPECLASSE (IDTYPECLASSE) ;


ALTER TABLE ETUDIER 
  ADD FOREIGN KEY FK_ETUDIER_MODULE (IDMODULE)
      REFERENCES MODULE (IDMODULE) ;


ALTER TABLE ETUDIER 
  ADD FOREIGN KEY FK_ETUDIER_CLASSE (IDCLASSE)
      REFERENCES CLASSE (IDCLASSE) ;


ALTER TABLE ENSEIGNER 
  ADD FOREIGN KEY FK_ENSEIGNER_UTILISATEUR (IDUTILISATEUR)
      REFERENCES UTILISATEUR (IDUTILISATEUR) ;


ALTER TABLE ENSEIGNER 
  ADD FOREIGN KEY FK_ENSEIGNER_MODULE (IDMODULE)
      REFERENCES MODULE (IDMODULE) ;

