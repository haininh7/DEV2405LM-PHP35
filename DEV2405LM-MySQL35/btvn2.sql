
show databases
-- tao cau truc bang
create database if not exists qlSinhVien
USE qlSinhVien

-- cau1,2 : tao bang, nhap du lieu

-- tao bang Khoa
create table if not exists Khoa(
	MaKH char(4) primary key
    , TenKH varchar(100)
)engine = InnoDB default charset utf8;

select *from Khoa;
-- nhap du lieu cho bang Khoa
insert into Khoa values("AV", "Anh Văn");
insert into Khoa values("DT", "Điện tử");
insert into Khoa values("KT", "Kế toán");
insert into Khoa values("TH", "Tin học");
insert into Khoa values("TR", "Triết");
insert into Khoa values(NULL, NULL);

create table if not exists SinhVien(
	MaSV char(4) primary key
    , HoSV varchar(100)
    , TenSV varchar(100)
    , Phai char(4)
    , NgaySinh date
    , NoiSinh varchar(100)
    , MaKH char(4) references Khoa(MaKH)
    , HocBong decimal(10)
    , DiemTrungBinh int
)engine = InnoDB default charset utf8;

select * from SinhVien;
-- nhap du lieu cho bang SinhVien

insert into SinhVien values("A01", "Nguyễn Thị", "Vân", "False", "1986-02-23 00:00:00", "Hà Giang", "KT", 130000, 5.1800000190734865);
insert into SinhVien values("A02", "Trần Văn", "Chính", "False", "1994-12-20 00:00:00", "Bình Định", "TH", 150000, NULL);
insert into SinhVien values("A03", "Lê Thu Bạch", "Yến", "True", "1993-02-21 00:00:00", "Tp.HCM", "TH", 0, NULL);
insert into SinhVien values("A04", "Trần Anh", "Tuấn", "False", "1987-12-20 00:00:00", "Hà Nội", "AV", 80000, NULL); 
insert into SinhVien values("A10", "Trần Thị", "Mai", "True", "1994-10-04 00:00:00", "Hà Nội", "TH", 0, NULL);
insert into SinhVien values("A11", "Nguyễn Thành", "Nam", "False", "2000-01-01 00:00:00", "Cà Mau", "AV", NULL, NULL);
insert into SinhVien values("A12", "Nguyễn Quang", "Quyền", "False", "2001-01-01 00:00:00", "Đồng Nai", "DT", NULL, NULL);
insert into SinhVien values("B01", "Hoàng Thanh", "Mai", "True", "1992-08-12 00:00:00", "Hải Phòng", "TR", 0, NULL); 
insert into SinhVien values("B02", "Trần Thị Thu", "Thủy", "True", "1990-01-02 00:00:00", "Tp.HCM", "AV", 80000, NULL);
insert into SinhVien values("B03", "Đố Văn", "Lâm", "False", "1994-02-26 00:00:00", "Bình Định", "TR", 0, NULL);
insert into SinhVien values("B04", "Bùi Kim", "Dung", "False", "1988-10-18 00:00:00", "Hµ Néi", "TH", 170000, NULL); 
insert into SinhVien values("C01", "Hà Quang", "Anh", "False", "1985-03-11 00:00:00", "Tp. HCM", "TR", 0, NULL);
insert into SinhVien values("C03", "Lê Quang", "Lưu", "False", "1985-02-23 00:00:00 Hà Nội", "TH", 0, NULL);
insert into SinhVien values("T03", "Hoàng Thị Hải", "Yến", "True", "1989-09-10 00:00:00", "Hà Nội", "AV", 170000, NULL);
insert into SinhVien values("T06", "Nguyễn Văn", "Thắng", "False", "1988-10-18 00:00:00", "Hà Nội", "AV", 1500000, NULL);
insert into SinhVien values(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- tao bang MonHoc
create table if not exists MonHoc(
	MaMH char(4) primary key
    , TenMH varchar(100)
    , Sotiet int
)engine = InnoDB default charset utf8;

select *from MonHoc;
-- nhap du lieu cho bang MonHoc
insert into MonHoc values("01", "Cơ sở dữ liệu", 45);
insert into MonHoc values("02", "Trí tuệ nhân tạo", 45);
insert into MonHoc values("03", "Toán rời rạc ứng dụng", 45);
insert into MonHoc values("04", "Đồ họa ứng dụng", 60);
insert into MonHoc values("05", "Tiếng Anh cơ bản", 60);
insert into MonHoc values("06","Tin học văn phòng", 60);
insert into MonHoc values("07", "Pháp luật đại cương", 30);
insert into MonHoc values("08", "Anh chuyên Ngành", 45);
insert into MonHoc values("09", "PTTK Hệ thống", 60);


-- tao bang KetQua

create table if not exists KetQua(
	MaSV char(4) references SinhVien(MaSV) 
    , MaMH varchar(100) references MonHoc(MaMH)
    , Diem int default 0
)engine = InnoDB default charset utf8;

select * from KetQua;
-- nhap du lieu cho bang KetQua
insert into KetQua values("A01", "01", 3);
insert into KetQua values("A01", "02", 6);
insert into KetQua values("A01", "03", 5);
insert into KetQua values("A01", "04", 8);
insert into KetQua values("A01", "05", 3.9);
insert into KetQua values("A02", "01", 4.5);
insert into KetQua values("A02", "03", 7);
insert into KetQua values("A02", "05", 8);
insert into KetQua values("A02", "06", 8);
insert into KetQua values("A02", "08", 6);
insert into KetQua values("A03", "01", 2);
insert into KetQua values("A03", "03", 2.5);
insert into KetQua values("A03", "04", 9);
insert into KetQua values("A04", "02", 9);
insert into KetQua values("A04", "03", 10);
insert into KetQua values("A04", "04", 6);
insert into KetQua values("A04", "06", 8);
insert into KetQua values("A04", "08", 9);
insert into KetQua values("B01", "01", 7);
insert into KetQua values("B01", "03", 2.5);
insert into KetQua values("B01", "04", 4);
insert into KetQua values("B02", "02", 6);
insert into KetQua values("B02", "03", 7);
insert into KetQua values("B02", "04", 10);
insert into KetQua values("B02", "06", 8);
insert into KetQua values("B02", "08", 7);
insert into KetQua values("B04", "01", 8);
insert into KetQua values("B04", "03", 7);
insert into KetQua values("B04", "04", 9);
insert into KetQua values("C01", "01", 3);
insert into KetQua values("C01", "03", 2);
insert into KetQua values("C01","04", 7);
insert into KetQua values("C01", "05", 5);
insert into KetQua values("C01", "06", 6);


-- cau3: them du lieu sau khi da nhap xong:

-- thêm sinh viên mới
insert into SinhVien values("K01", "Lê Thành", "Nguyên", "True", "1980-10-20","TP.HCM", "TH", 850000, NULL);

-- thêm môn học mới
insert into MonHoc values("10", "Xử lý ảnh", 45);

-- thêm 1 khoa mới
insert into Khoa values("CT", "Công Trình");

-- thêm 1 sinh viên mới
insert into SinhVien values("K02", "Nguyễn Trần", "Quân", "True", "2024-06-06","Huế", "CT", 950000, NULL);

-- thêm vào bàng kết quả
insert into KetQua values("A02", "06", 7);
insert into KetQua values("A03", "06", 7);
insert into KetQua values("A10", "06", 7);
insert into KetQua values("B04", "06", 7);

-- thêm vào bảng kết quả
insert into KetQua values("C02", "01", 8);
insert into KetQua values("C02", "02", 8);
insert into KetQua values("C02", "03", 8);
insert into KetQua values("C02", "04", 8);
insert into KetQua values("C02", "05", 8);
insert into KetQua values("C02", "06", 8);
insert into KetQua values("C02", "07", 8);
insert into KetQua values("C02", "08", 8);
insert into KetQua values("C02", "09", 8);


-- cau4: xoá thông tin trong cơ sở dữ liệu:

create table if not exists DeleteTable(
	MaSV char(4) primary key
    , HoSV varchar(100)
    , TenSV varchar(100)
    , Phai char(4)
    , NgaySinh date
    , NoiSinh varchar(100)
    , MaKH char(4) references Khoa(MaKH)
    , HocBong decimal(10)
)engine = InnoDB default charset utf8;

select * from DeleteTable;
-- nhap du lieu cho bang DeleteTable

insert into DeleteTable values("A01", "Nguyễn Thị", "Vân", "False", "1986-02-23", "Hà Giang", "KT", 130000);
insert into DeleteTable values("A02", "Trần Văn", "Chính", "False", "1994-12-20", "Bình Định", "TH", 150000);
insert into DeleteTable values("A03", "Lê Thu Bạch", "Yến", "True", "1993-02-21", "Tp.HCM", "TH", 0);
insert into DeleteTable values("A04", "Trần Anh", "Tuấn", "False", "1987-12-20", "Hà Nội", "AV", 80000); 
insert into DeleteTable values("A10", "Trần Thị", "Mai", "True", "1994-10-04", "Hà Nội", "TH", 0);
insert into DeleteTable values("A11", "Nguyễn Thành", "Nam", "False", "2000-01-01", "Cà Mau", "AV", NULL);
insert into DeleteTable values("A12", "Nguyễn Quang", "Quyền", "False", "2001-01-01", "Đồng Nai", "DT", NULL);
insert into DeleteTable values("B01", "Hoàng Thanh", "Mai", "True", "1992-08-12", "Hải Phòng", "TR", 0); 
insert into DeleteTable values("B02", "Trần Thị Thu", "Thủy", "True", "1990-01-02", "Tp.HCM", "AV", 80000);
insert into DeleteTable values("B03", "Đố Văn", "Lâm", "False", "1994-02-26", "Bình Định", "TR", 0);
insert into DeleteTable values("B04", "Bùi Kim", "Dung", "False", "1988-10-18", "Hµ Néi", "TH", 170000); 
insert into DeleteTable values("C01", "Hà Quang", "Anh", "False", "1985-03-11", "Tp. HCM", "TR", 0);
insert into DeleteTable values("C03", "Lê Quang", "Lưu", "False", "1985-02-23", "Hà Nội", "TH", 0);
insert into DeleteTable values("T03", "Hoàng Thị Hải", "Yến", "True", "1989-09-10", "Hà Nội", "AV", 170000);
insert into DeleteTable values("T06", "Nguyễn Văn", "Thắng", "False", "1988-10-18", "Hà Nội", "AV", 1500000);


-- xoa

DELETE FROM DeleteTable WHERE HocBong = 0;
DELETE FROM DeleteTable WHERE NgaySinh = "1987-12-20";
DELETE FROM DeleteTable WHERE Phai = "True";

-- cau5: cap nhat
update MonHoc set SoTiet = 45 WHERE Monhoc = "Van"; -- khong co mon Van
update SinhVien set TenSV= "Kỳ" where TenSV= "Mai";
update SinhVien set Phai= "True" where HoSV= "Trần Thanh" AND TenSV= "Kỳ";
update SinhVien set NgaySinh= "1990/07/05" where HoSV= "Trần Thị Thu" AND TenSV= "Thuy";
update SinhVien set HocBong= HocBong + 100000 where MaKH="AV";
