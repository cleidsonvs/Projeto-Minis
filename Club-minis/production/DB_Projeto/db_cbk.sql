create database db_cbk;
use db_cbk;

/*Table de produto vai ser usada para o módulo de Cadastro - Novo Produto*/

create table t_produto (
    cod int primary key auto_increment,
    nome varchar(100),
    qtd int
);

/*Table de cliente vai ser usada para o módulo de Cadastro - Novo Cliente*/

create table t_cliente (
    cod int primary key auto_increment,
    cpf int unique not null,
    nome varchar(100) not null,
    endereco varchar(100),
    data_cadastro date
);

/*Table de pedido vai ser usada para o módulo de Vendas - Novo Pedido e Pedidos em Aberto*/

create table t_pedido (
    cod int primary key auto_increment,
    cliente varchar (100),
    produto varchar(100),
    qtd int,
    dada_pedido date
);

/*Table de financeiro vai ser usada para o módulo de Financeiro*/

create table t_financeiro (
    numDoc int primary key auto_increment,
    tipoDoc varchar(100),
    valor int
);