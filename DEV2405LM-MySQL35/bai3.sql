CREATE DATABASE DEV2405LMMYSQLB3;
USE DEV2405LMMYSQLB3;

CREATE TABLE VATTU
(
	Mavtu char(4) not null,
	TenVTu varchar(100),
	Dvtinh varchar(10),
	Phantram real,
	Primary Key (Mavtu)
);
------------------------------

CREATE TABLE NHACC
(
	MaNCC char(3) not null,
	TenNCC varchar(100),
	Diachi varchar(200),
	Dienthoai varchar(20),
	Primary Key (MaNCC)
);
------------------------------
CREATE TABLE DONDH
(
	SoDH char(4) not null,
	NgayDH datetime,
	MaNCC char(3) not null,	
	Primary Key (SoDH),
	Foreign Key (MaNCC) References NhaCC(ManCC) 
);
------------------------------
CREATE TABLE CTDONDH
(
	SoDH char(4) not null,
	Mavtu char(4) not null,
	SlDat int,	
	Primary key (SoDH,Mavtu),
	Foreign Key (SoDH) References DonDH(SoDH),
	Foreign Key (MaVTu) References Vattu(MaVTu)
);
------------------------------
CREATE TABLE PNHAP
(
	SoPn char(4) not null,
	NgayNhap Datetime not null,
	SoDH char(4) not null,	
	Primary key (SoPn),
    Foreign Key (SoDH) References DonDH(SoDH)	
);
------------------------------
CREATE TABLE CTPNHAP
(
	SoPn char(4) not null,
	Mavtu char(4) not null,
	SLNhap Int,	
	DGNhap decimal,
	primary key (SoPn,Mavtu),
    Foreign Key (SoPn) References PNhap(SoPn),
	Foreign Key (MaVTu) References VaTTu(MaVTu)	
);
------------------------------
CREATE TABLE PXUAT
(
	SoPx char(4) not null,
	NgayXuat Datetime not null,
	TenKH varchar(100) not null,	
	Primary key (SoPx)	
);
------------------------------
CREATE TABLE CTPXUAT
(
	SoPx char(4) not null,
	Mavtu char(4) not null,
	SLXuat Int,	
	DGXuat decimal,
	Primary key (SoPx,Mavtu)	
);
------------------------------
CREATE TABLE TONKHO
(
	NamThang char(6) not null,
	Mavtu char(4) not null,
	SLDau Int,	
	TongSLN int,
	TongSLX int,
	SLCuoi INT,
	Primary key (NamThang,Mavtu)		
);
-----------------------------------------------------------------------------
/*===================Tao cac CONSTRAINT - rang buoc toan ven=================*/

ALTER TABLE VATTU
	ADD
	CONSTRAINT UNQ_VATTU_Tenvt UNIQUE(Tenvtu);
ALTER TABLE VATTU
	ADD
	CONSTRAINT CHK_VATTU_Phantram CHECK(phantram between 0 And 100);
------------------------------------------------------------------
ALTER TABLE NhaCC
	ADD
	CONSTRAINT UNQ_NHACC_TenNcc UNIQUE(Tenncc,diachi);

------------------------------------------------------------------
ALTER TABLE DONDH
	ADD	
	CONSTRAINT Frk_DONDH_Mancc FOREIGN KEY(Mancc) REFERENCES Nhacc(mancc);

------------------------------------------------------------------
ALTER TABLE CTDONDH
	ADD	
	CONSTRAINT Frk_CTDONDH_sodh FOREIGN KEY(Sodh) REFERENCES Dondh(sodh),
	CONSTRAINT Frk_CTDONDH_Mavtu FOREIGN KEY(Mavtu) REFERENCES Vattu(Mavtu),	
	CONSTRAINT CHK_CTDONDH_sldat CHECK(Sldat>0);
------------------------------------------------------------------
ALTER TABLE CTPNhap
	ADD	
	CONSTRAINT Frk_CTPNHAP_sopn FOREIGN KEY(sopn) REFERENCES Pnhap(sopn)  ON DELETE NO ACTION ON UPDATE CASCADE;
 ALTER TABLE CTPNhap
	ADD	   
	CONSTRAINT Frk_CTPNHAP_Mavtu FOREIGN KEY(Mavtu) REFERENCES Vattu(Mavtu) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE CTPNhap
	ADD	
    CONSTRAINT CHK_CTPNHAP_SlNhap CHECK(SlNhap>0);
ALTER TABLE CTPNhap
	ADD	
	CONSTRAINT CHK_CTPNHAP_DgNhap CHECK(DgNhap>0);
------------------------------------------------------------------
ALTER TABLE CTPXuat
	ADD	
	CONSTRAINT Frk_CTPPXUAT_sopx FOREIGN KEY(sopx) REFERENCES Pxuat(sopx);
ALTER TABLE CTPXuat
	ADD
	CONSTRAINT Frk_CTPPXUAT_Mavtu FOREIGN KEY(Mavtu) REFERENCES Vattu(Mavtu);
ALTER TABLE CTPXuat
	ADD
	CONSTRAINT CHK_SlXuat_CTPXuat CHECK(SlXuat>0);
ALTER TABLE CTPXuat
	ADD
	CONSTRAINT CHK_DgXuat_CTPXuat CHECK(DgXuat>0);
------------------------------------------------------------------
ALTER TABLE TONKHO
	ADD	
	CONSTRAINT Frk_TONKHO_Mavtu FOREIGN KEY(Mavtu) REFERENCES Vattu(Mavtu);
ALTER TABLE TONKHO
	ADD	
	CONSTRAINT CHK_SlDau_CTPXuat CHECK(SlDau>=0);
ALTER TABLE TONKHO
	ADD	
	CONSTRAINT CHK_TongSLN_TONKHO CHECK(TongSLN>=0);
ALTER TABLE TONKHO
	ADD	
	CONSTRAINT CHK_TongSLX_TONKHO CHECK(TongSLX>=0);
    
-- them vao bang nhacc --
select *from nhacc;
insert into nhacc values("C01", "Lê Minh Thành", "54, Kim Mã, Cầu Giấy, Hà Nội", "8781024");
insert into nhacc values("C02" ,"Trần Quang Anh","145, Hùng Vương, Hải Dương" ,"7698154");
insert into nhacc values("C03", "Bùi Hồng Phương", "154/85, Lê Chân, Hải Phòng","9600125");
insert into nhacc values("C04" ,"Vũ Nhật Thắng" ,"198/40 Hương Lộ 14 QTB HCM" ,"8757757");
insert into nhacc values("C05" ,"Nguyễn Thị Thúy", "178 Nguyễn Văn Luông Đà Lạt", "7964251");
insert into nhacc values("C07" ,"Cao Minh Trung" ,"125 Lê Quang Sung Nha Trang" ,"Chưa có");
    

   -- them vao bang dondh--
   select * from dondh;
insert into dondh values("D001", "2012-01-15" ,"C03");
insert into dondh values("D002", "2012-01-30" ,"C01");
insert into dondh values("D003", "2012/02/10" ,"C05");
insert into dondh values("D004", "2012/02/17" ,"C05");
insert into dondh values("D005", "2012/03/01" ,"C02");
insert into dondh values("D006", "2012/03/12" ,"C05");

-- them vao bang ctdondh--
select * from CTDONDH;
INSERT INTO CTDONDH VALUES('D001','DD01',10);
INSERT INTO CTDONDH VALUES('D001','DD02',15);
INSERT INTO CTDONDH VALUES('D002','VD02',30);
INSERT INTO CTDONDH VALUES('D003','TV14',10);
INSERT INTO CTDONDH VALUES('D003','TV29',20);
INSERT INTO CTDONDH VALUES('D004','TL90',10);
INSERT INTO CTDONDH VALUES('D005','TV14',10);
INSERT INTO CTDONDH VALUES('D005','TV29',20);
INSERT INTO CTDONDH VALUES('D006','TV14',10);
INSERT INTO CTDONDH VALUES('D006','TV29',20);
INSERT INTO CTDONDH VALUES('D006','VD01',20);

-- them vao bang pnhap --
select * from PNHAP;
INSERT INTO PNHAP VALUES('N001','2012-1-17','D001');
INSERT INTO PNHAP VALUES('N002','2012-1-20','D001');
INSERT INTO PNHAP VALUES('N003','2012-1-31','D002');
INSERT INTO PNHAP VALUES('N004','2012-2-15','D003');

-- them vao bang ctpnhap --
select * from CTPNHAP;
INSERT INTO CTPNHAP VALUES('N001','DD01',8 ,25);
INSERT INTO CTPNHAP VALUES('N001','DD02',10 ,35);
INSERT INTO CTPNHAP VALUES('N002','DD01', 2,25);
INSERT INTO CTPNHAP VALUES('N002','DD02', 5,35);
INSERT INTO CTPNHAP VALUES('N003','QD02', 30,25);
INSERT INTO CTPNHAP VALUES('N004','TV40', 5,25);
INSERT INTO CTPNHAP VALUES('N004','TV50', 12,35);

-- them vao bang --

INSERT INTO PXUAT VALUES('X001','2014/01/17','Lê Hoàng Anh Tuấn');
INSERT INTO PXUAT VALUES('X002','2014/01/25','Nguyễn Trần Lâm');
INSERT INTO PXUAT VALUES('X003','2014/01/31','Bùi Thị Thu Thủy');
SELECT * FROM PXUAT;

/*Du Lieu Bang CTPXUAT*/
INSERT INTO CTPXUAT VALUES('X001','DD01',2 ,35);
INSERT INTO CTPXUAT VALUES('X002','DD01',1 ,35);
INSERT INTO CTPXUAT VALUES('X002','DD02', 5,49);
INSERT INTO CTPXUAT VALUES('X003','DD01', 3,35);
INSERT INTO CTPXUAT VALUES('X003','DD02', 2,49);
INSERT INTO CTPXUAT VALUES('X003','QD02', 10,32.5);
SELECT * FROM CTPXUAT;
SET SQL_SAFE_UPDATES = 0;
UPDATE  CTPXUAT SET dgxuat=dgxuat*100000 ;

/* update
1. cập nhật số lượng đặt(sldat) cho các ctdondh tăng thêm 10 cho những đơn hàng có mã DD01;
*/
      
      UPDATE ctdondh SET sldat = sldat +10 WHERE SODH='DD01'; 
      
/*      
2. Cập nhật cột phantram trong bảng vật tư:
phần trăm được tăng 10%; */
update vattu set phatram = phantram * 1.1;
/*3.cập nhật cột dgnhap trên bảng ctpnhap
  dgnhap= dgnhap * 10000;*/
  update ctpnhap set  dgnhap= dgnhap * 10000;
  /*
4. sửa slnhap trên bảng  ctpnhap;
slnhap được cộng thêm 5 cho những ctnhap có slnhap < 10;
*/
update ctpnhap set slnhap=slnhap+5;


