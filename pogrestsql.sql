


users_status


CREATE TABLE estatusdevices(
 user_id serial PRIMARY KEY,
 username VARCHAR (50) ,
 signal VARCHAR (100) ,
 device VARCHAR (100)  ,
battery VARCHAR (100) ,
status VARCHAR (100)  ,
internalmemory VARCHAR (100),
externalmemory VARCHAR (100),
date TIMESTAMP
);


alter table estatusdevices
 add informacion tinyint VARCHAR (100) after user_id;

    "conexion" => "connection:MOBILE:LTE",
    "provider" => "provider:Android",
    "interna" => "internal free: 597MB",
    "externa" => "external free: 597MB",
    "bateria" => "battery level 100",
    "cargandocon" => "Cargando Via AC"
	
	
	0 => informacion,1 => WIFI:,2 => ,3 => 994MB,4 => 994MB,5 => 22Cargando Via 
	Array(    [0] => informacion    [1] => WIFI:    [2] =>     [3] => 997MB    [4] => 997MB    [5] => 29Cargando Via usb)
	
SELECT * FROM estatusdevices;
SELECT count(*) FROM estatusdevice where username='dvegas';

DELETE FROM estatusdevices WHERE user_id in ('2','3','4','5','6');

 user_id | username | signal | device | battery | status | internalmemory | externalmemory | date

INSERT INTO estatusdevices (username,signal,device,battery,status,internalmemory,externalmemory,date) 
VALUES ('dvegas','connection:MOBILE:LTE','provider:Android','battery level 100','CONECTADO','597MB','600MB','2011-08-06 14:54:17');