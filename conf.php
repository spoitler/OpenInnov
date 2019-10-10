<?php
// LDAP variables
   $ldaphost = "192.168.100.51";
   $ldapport = 389;
   $ldapUsrAdmin = "cn=admin,dc=mydil,dc=fr";
   $ldapUsreleve = "ou=users,dc=mydil,dc=fr";  //pour la focntion sync bdd
   $ldapPassAdmin = "f43gh3tj";
   $baseDnAuth = "ou=users, dc=mydil, dc=fr";
   $passEncode = "SHA1";
   $passEncodePrefix = "{SHA}";
   $ldapEmail = "mail";
   $ldapClasse = "description";
   $ldapFullName = "cn";
   $ldapClassB1 = "";
   $ldapClassB2 = "";
   $ldapClassB3 = "";
   $ldapClassI4 = "";
   $ldapClassI5 = "";

// MYSQL variables
   $host = "127.0.0.1";
   $dbName = "stage";
   $login = "admin";
   //$password = "ujhcLas3a";
   $password = "mydil123456";
