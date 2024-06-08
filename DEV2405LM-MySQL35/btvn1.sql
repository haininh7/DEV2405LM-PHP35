/* tao 1 csdl, 
tao 9 bang, 
ve 1 class diagram cho csdl do, 
them data cho csdl do
*/

create database if not exists QLHH; -- quan li hang hoa
use qlhh;
-- b1
CREATE TABLE IF NOT EXISTS vattu(
	mavtu char(4) not null primary key 
    -- not null: kh bo trong; unique: khong dc trung
    ,tenvtu VarChar(100) not null unique  
    , dvtinh varchar(10) null default "" 
    ,phantram real null check(phantram >= 0 && phantram <=100)
)engine = InnoDB default charset utf8;

insert into `vattu` values("DD01","Đầu DVD Hitachi 1 đĩa","Bộ",40);
insert into `vattu` values("DD02","Đầu DVD Hitachi 3 đĩa","Bộ",40);
insert into `vattu` values("DD03","Tủ lạnh Sanyo 150 lit","Cái",25);
insert into `vattu` values("DD04","Tủ lạnh Sanyo 90 lit","Cái",20);
insert into `vattu` values("DD05","Tivi Sony 14 inches","Cái",15);
insert into `vattu` values("TV21","Tivi Sony 21 inches","Cái",10);
insert into `vattu` values("TV29","Tivi Sony 29 inches","Cái",10);
insert into `vattu` values("VD01","Đầu VCD Sony 1 đĩa","Bộ",30);
insert into `vattu` values("VD02","Đầu VCD Sony 3 đĩa","Bộ",30);



-- b2
CREATE TABLE IF NOT EXISTS nhacc(
	manhacc char(3) not null primary key
    , tennhacc VarChar(100) not null 
    , diachi VarChar(200) not null
    , dienthoai VarChar(20) null default ""
)engine = InnoDB default charset utf8;


insert into `nhacc` values("c01","Le Minh Thanh","54 Kim Ma Cau Giay HN","8781024");
insert into `nhacc` values("c02","Tran Quang Anh","145 Hung Vuong HD","7698154");
insert into `nhacc` values("c03","Bui Hong Phuong","154/85 Le Chan HP","9600125");
insert into `nhacc` values("c04","Vu Nhat Thang","198/40 Huong Lo 14 QTB TPHCM","8757757");
insert into `nhacc` values("c05","Nguyễn Thị Thúy","178 Nguyễn Văn Luông Đà Lạt","7964251");
insert into `nhacc` values("c06","Cao Minh Trung","125 Lê Quang Sung Nha Trang","Chua co");


-- b3
CREATE TABLE IF NOT EXISTS dondh( 
	sodh char(4) not null primary key 	
    , ngaydh datetime default current_date()
    ,manhacc char(3) not null
)engine = InnoDB default charset utf8;

insert into `dondh` values("DD1",01/15/2012,"c03");
insert into `dondh` values("DD2",01/30/2012,"c01");
insert into `dondh` values("Dd3",02/10/2012,"c02");
insert into `dondh` values("Dd4",02/17/2012,"c05");
insert into `dondh` values("Dd5",03/01/2012,"c02");
insert into `dondh` values("Dd6",03/12/2012,"c05");

--  b4
CREATE TABLE IF NOT EXISTS ctdondh(
	sodh char(4) not null
    , mavtu char(4) not null
    , sldat int check(sldat > 0)
    , primary key(sodh,mavtu)
)engine = InnoDB default charset utf8;

insert into `ctdondh` values("DD01","DD01",10);
insert into `ctdondh` values("DD01","DD02",15);
insert into `ctdondh` values("DD02","VD02",30);
insert into `ctdondh` values("DD03","TV14",10);
insert into `ctdondh` values("DD03","TV29",20);
insert into `ctdondh` values("DD04","TL90",10);
insert into `ctdondh` values("DD05","TV14",10);
insert into `ctdondh` values("DD05","TV29",20);
insert into `ctdondh`  values("DD06","TV14",10);
insert into `ctdondh`  values("DD06","TV29",20);
insert into `ctdondh`  values("DD06","VD01",20);



-- b5
CREATE TABLE IF NOT EXISTS pnhap(
	sopn char(4) primary key
    ,ngaynhap datetime default CURRENT_TIMESTAMP()
    ,sodh char(4) not null REFERENCES DONDH(sodh) 
)engine = InnoDB default charset utf8;


insert into `pnhap` values("N001","","D001");
insert into `dondh` values("N002",01/30/2012,"c01");
insert into `dondh` values("N003",02/10/2012,"c02");


 -- b6
CREATE TABLE IF NOT EXISTS ctpnhap(
	sopn char(4) not null  
    ,mavtu char(4) not null REFERENCES vattu(mavtu)
    ,slnhap int not null check(slnhap > 0)
    , dgnhap decimal(10,2) not null check(dgnhap > 0),
    primary key(sopn,mavtu)
)engine = InnoDB default charset utf8;

insert into `ctpnhap`  values("N001","DD01",8,2500000);
insert into `ctpnhap`  values("N001","DD02",10,3500000);
insert into `ctpnhap`  values("N002","DD01",2,2500000);
insert into `ctpnhap`  values("N002","DD02",5,3500000);
insert into `ctpnhap`  values("N003","VD02",30,2500000);
insert into `ctpnhap`  values("N004","TV14",5,2500000);
insert into `ctpnhap`  values("N004","TV29",12,3500000);



-- b7
CREATE TABLE IF NOT EXISTS pxuat(
	sopx char(4) not null primary key
    ,ngayxuat datetime default current_date()
    ,tenkh varchar(100) not null
)engine = InnoDB default charset utf8;

-- b8
CREATE TABLE IF NOT EXISTS ctpxuat(
	sopx char(4) not null 
    ,mavtu char(4) not null REFERENCES vattu(mavtu)
    ,slxuat int not null check(slxuat > 0)
    ,dgxuat decimal(10,2) not null check(dgxuat > 0),
     primary key(sopx,mavtu)
)engine = InnoDB default charset utf8;

insert into `ctpxuat`  values("X001","DD01",2,3500000);
insert into `ctpxuat`  values("X002","DD01",1,3500000);
insert into `ctpxuat`  values("X002","DD2",5,4900000);
insert into `ctpxuat`  values("X003","DD01",3,3500000);
insert into `ctpxuat`  values("X003","DD02",2,4900000);
insert into `ctpxuat`  values("X003","VD02",10,3250000);




-- b9
CREATE TABLE IF NOT EXISTS tonkho(
	namthang char(6) not null 
    ,mavtu char(4) not null REFERENCES vattu(mavtu)
    ,sldau int not null check(sldau >= 0)
    ,tongsln int not null check(tongsln >= 0)
    , tongslx int not null check(tongslx >= 0)
    , slcuoi int not null check(slcuoi = sldau + tongsln - tongslx),
    primary key(namthang,mavtu)
)engine = InnoDB default charset utf8;


insert into `tonkho`  values("201201","DD01",0,10,6,4);
insert into `tonkho`  values("201201","DD02",0,15,7,8);
insert into `tonkho`  values("201201","VD02",0,30,10,20);
insert into `tonkho`  values("201202","DD01",4,0,0,4);
insert into `tonkho`  values("201202","DD02",8,0,0,8);
insert into `tonkho`  values("201202","VD02",20,0,0,20);
insert into `tonkho`  values("201202","TV21",5,0,0,5);
insert into `tonkho`  values("201202","TV29",12,0,0,12);