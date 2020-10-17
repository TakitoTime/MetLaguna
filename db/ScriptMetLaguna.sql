create database MetLaguna;

use MetLaguna;

create table Cuenta(id int auto_increment primary key, 
					correo varchar(100) not null,
                    contraseña varchar(200) not null);

create table Usuario(id int auto_increment primary key,
					 nombreUsuario varchar(20) not null,
                     nombres varchar(100) not null,
                     apellidoPaterno varchar(50) not null,
                     apellidoMaterno varchar(50) not null,
                     telefono varchar(20),
                     edad int,
                     foto text,
                     cuenta_id int,
                     foreign key (cuenta_id) references cuenta(id));
                     
create table Municipio(id int auto_increment primary key,
					   nombre varchar(50) not null,
                       estado varchar(50) not null,
                       descripcion varchar(200),
                       historia text);

create table TipoLugar(id int auto_increment primary key,
					   nombre varchar(200) not null,
                       descripcion varchar(200));

create table Lugar(id int auto_increment primary key,
				   municipio_id int,
                   tipoLugar_id int,
				   nombre varchar(200) not null,
				   descripcion varchar(200),
                   foreign key (municipio_id) references Municipio(id),
                   foreign key (tipoLugar_id) references TipoLugar(id));

create table ComidaTipica(id int auto_increment primary key,
						  nombre varchar(200) not null,
						  historia text);
                   
create table Gastronomia(id int auto_increment primary key,
						 municipio_id int,
                         comidaTipica_id int,
                         foreign key (municipio_id) references Municipio(id),
                         foreign key (comidaTipica_id) references ComidaTipica(id));
	
create table direccion(id int auto_increment primary key,
					   lugar_id int null,
					   calle varchar(50),
                       numero int null,
                       colonia varchar(50),
                       codigoPostal int,
					   foreign key (lugar_id) references Lugar(id));
	
create table Foto(id int auto_increment primary key,
				  lugar_id int null,
                  gastronomia_id int null,
                  municipio_id int null,
				  url text,
				  descripcion varchar(200),
                  foreign key (lugar_id) references Lugar(id),
                  foreign key (gastronomia_id) references Gastronomia(id),
                  foreign key (municipio_id) references Municipio(id));
	