<?php
// Compte admin
   $loginAdmin = "admin";
   $passAdmin = "adEM34cpR";

// Compte public
   $loginPublic = "epsi";
   $passPublic = "epsipass";

// LDAP variables
   $ldaphost = "192.168.100.7";
   $ldapport = 389;
   $ldapUsrAdmin = "cn=admin,dc=montpellier,dc=lan";
   $ldapUsreleve = "ou=Pedago,ou=Utilisateurs,dc=montpellier,dc=lan";  //pour la focntion sync bdd
   $ldapPassAdmin = "citK19c3";
   $baseDnAuth = "ou=Pedago,ou=Utilisateurs,dc=montpellier,dc=lan";
   $passEncode = "SHA1";
   $passEncodePrefix = "{SHA}";
   $ldapEmail = "mail";
   $ldapClasse = "description";
   $ldapFullName = "cn";
   $ldapClassB1 = "cn=B1,ou=EPSI,ou=Etudiants,ou=Groupes,dc=montpellier,dc=lan";
   $ldapClassB2 = "cn=B2,ou=EPSI,ou=Etudiants,ou=Groupes,dc=montpellier,dc=lan";
   $ldapClassB3 = "cn=B3,ou=EPSI,ou=Etudiants,ou=Groupes,dc=montpellier,dc=lan";
   $ldapClassI4 = "cn=I1,ou=EPSI,ou=Etudiants,ou=Groupes,dc=montpellier,dc=lan";
   $ldapClassI5 = "cn=I2,ou=EPSI,ou=Etudiants,ou=Groupes,dc=montpellier,dc=lan";
   $ldapClassWIS1 = "cn=WIS1,ou=WIS,ou=Etudiants,ou=Groupes,dc=montpellier,dc=lan";
   $ldapClassWIS2 = "cn=WIS2,ou=WIS,ou=Etudiants,ou=Groupes,dc=montpellier,dc=lan";
   $ldapClassWIS3 = "cn=WIS3,ou=WIS,ou=Etudiants,ou=Groupes,dc=montpellier,dc=lan";
   $ldapClassE1 = "cn=WIS4,ou=WIS,ou=Etudiants,ou=Groupes,dc=montpellier,dc=lan";
   $ldapClassE2 = "cn=WIS5,ou=WIS,ou=Etudiants,ou=Groupes,dc=montpellier,dc=lan";

// MYSQL variables
   $bddHost = "127.0.0.1";
   $dbName = "stage";
   $login = "admin";
   //$password = "ujhcLas3a";
   $password = "mydil123456";
