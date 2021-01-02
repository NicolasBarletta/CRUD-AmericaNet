create table cliente (
id_cliente int AUTO_INCREMENT;
funcionario varchar(300) not null;
cpfCliente varchar(300) not null;
nomeCliente varchar(200) not null;
contrato int not null,
planoAntigo varchar(200) not null;
planoNovo varchar(200) not null;
qtdChip int not null;
data varchar(200);
PRIMARY KEY(id_cliente))

create table funcionario (
id_funcionario int AUTO_INCREMENT;
funcionario varchar(200) not null;
PRIMARY KEY(id_funcionario))

create table planos (
id_plano int AUTO_INCREMENT;
plano varchar(200) not null;
PRIMARY KEY(id_plano))

create table usuarios (
id_usuario int AUTO_INCREMENT;
nome_usuario varchar(200) not null;
senha varchar(200) not null;
nivel_usuario varchar(200) not null;
PRIMARY KEY(id_usuario))