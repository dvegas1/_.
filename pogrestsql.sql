


users_status


CREATE TABLE estatusdevice(
 user_id serial PRIMARY KEY,
 username VARCHAR (50) UNIQUE NOT NULL,
 signal VARCHAR (100) UNIQUE NOT NULL,
 device VARCHAR (100) UNIQUE NOT NULL,
battery VARCHAR (100) UNIQUE NOT NULL,
status VARCHAR (100) UNIQUE NOT NULL,
internalmemory VARCHAR (100) UNIQUE NOT NULL,
externalmemory VARCHAR (100) UNIQUE NOT NULL,
date TIMESTAMP
);

    "conexion" => "connection:MOBILE:LTE",
    "provider" => "provider:Android",
    "interna" => "internal free: 597MB",
    "externa" => "external free: 597MB",
    "bateria" => "battery level 100",
    "cargandocon" => "Cargando Via AC"
	
SELECT * FROM estatusdevice;

 user_id | username | signal | device | battery | status | internalmemory | externalmemory | date

INSERT INTO estatusdevice (username,signal,device,battery,status,internalmemory,externalmemory,date) 
VALUES ('dvegas','connection:MOBILE:LTE','provider:Android','battery level 100','CONECTADO','597MB','600MB','2011-08-06 14:54:17');