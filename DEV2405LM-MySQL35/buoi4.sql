use qlsinhvien;
select * from khoa;
select * from sinhvien;
select * from monhoc;
select * from ketqua;
/* truy vấn dữ liệu */
-- 1 truy vấn đơn giản (không có form) --
select 'Devmaster Academy ';
-- 2. Đặt tên cột trong cột kết quả(as)
select 'Devmaster Academy ' as 'Company Name';
-- select 'Devmaster Academy ' as [Company Name]; --error

-- 3. truy vấn trên 1 bảng sử dụng *
-- hiển thị thông tin bảng khoa
select * from khoa;
-- 4. liệt kê danh sách cột từ tập dữ liệu(nguồn : from)
select MaKH as 'Mã khoa', TenKH as 'Tên khoa'
from KHOA as k;
-- 5.truy vấn có điều kiện(where) -> giới hạn dữ liệu trong tập kết quả
-- liệt kê thông tin sinh viên là nam
select * from sinhvien where PHAI=1;
-- điều kiện so sánh tương đối : like;not like;%;_ => thường dùng với dữ liệu kiểu chuỗi
-- liệt kê sinh viên có tên bắt đầu là m;
select * from sinhvien where TenSV like 'm%';
-- liệt kê sinh viên có tên chứa kí tự m '%m%';
-- liệt kê sinh viên có tên có kí tự thứ 2 là h
select * from sinhvien where TenSV like '_h%';
-- điều kiện so sánh kết hợp
-- liệt kê sinh viên khoa TH 
select * from sinhvien where phai=1 and MaKH = 'TH';
-- liệt kê sinh viên khoa Anh văn có học bổng lớn hiwn 100000

select * from sinhvien where MaKH ='AV' and Hocbong > 100000;
-- liệt kê sinh viên khoa anh văn và khoa tin học
select * from sinhvien where MaKH ='AV' or MaKH='TH';
-- liệt kê tất cả sinh viên không thuộc khaoa anh văn
select * from sinhvien where MaKH <>'AV';
select * from sinhvien where not (MaKH ='AV');
select * from sinhvien where MaKH != 'AV';
-- điều kiện so sánh tập hợp: IN, NOT IN 
-- liệt kê sinh viên thuộc khoa anh văn, khoa triết
select * from sinhvien where MaKH in ('AV','TR');
-- liệt kê sinh viên không thuộc khoa anh văn, khoa triết
select * from sinhvien where MaKH not in ('AV','TR');
-- 6. sắp xếp dữ liệu trong tập kết quả 
-- order by<column name> ASC | DESC, ...
-- liệt kế thông tin sinh viên, dữ liệu saows theo học bổng giảm dần
select * from sinhvien order by Hocbong desc;
select * from sinhvien order by 8 desc;
select MASV, concat(HOSV + ' ' + tensv) as 'Họ tên' 
from sinhvien
order by concat(HOSV + ' ' + tensv) asc;
-- liệt kê thông tin sinh viên; 
-- dữ liệu sắp theo tên tăng dần, nếu trùng thì sắp theo học bổng giảm dần
select * 
from sinhvien
order by TenSV, Hocbong desc; 
-- 7. sử dụng từ khóa distinct => loại bỏ dòng trùng lặp, giữ lại 1
select PHAI from SINHVIEN;
select distinct PHAI from SINHVIEN;
select MAKH from SINHVIEN;
select distinct MAKH from SINHVIEN;
-- 8. sử dụng limit trong câu lệnh truy vấn
-- limit n => lấy ra <n> hàng đầu tiên
select * 
from sinhvien 
limit 1;
-- 
select * 
from sinhvien
order by masv desc 
limit 1;

select *
from sinhvien limit 2,3;  -- lấy từ vị trí thứ 3 và lấy 3 bản ghi
-- lấy ra 2 sinh viên có học bổng cao nhất
select * from sinhvien order by hocbong desc limit 2;

-- 9. truy vấn kết hợp hay nhiều bảng
-- join:
/* 
inner join
left join
right join
full join
*/
-- inner join
-- liệt kê thông tin : MaKH, tenKH, MaSV, HoSV, TenSV, Hocbong
select k.MaKH, tenKH, MaSV, HoSV, TenSV, Hocbong
from khoa as k
   join sinhvien as s on K.MAKH=S.MaKH;
-- left join
-- liệt kê thông tin : MaKH, tenKH, MaSV, HoSV, TenSV, Hocbong
select k.MaKH, tenKH, MaSV, HoSV, TenSV, Hocbong
from khoa as k
   left join sinhvien as s on K.MAKH=S.MaKH;
-- right join
-- liệt kê thông tin : MaKH, tenKH, MaSV, HoSV, TenSV, Hocbong
select k.MaKH, tenKH, MaSV, HoSV, TenSV, Hocbong
from sinhvien as s
   right join khoa as k on K.MAKH=S.MaKH;
-- full join
-- liệt kê thông tin : MaKH, tenKH, MaSV, HoSV, TenSV, Hocbong
select k.MaKH, tenKH, MaSV, HoSV, TenSV, Hocbong
from sinhvien as s
   left join khoa as k on K.MAKH=S.MaKH
   union
   select k.MaKH, tenKH, MaSV, HoSV, TenSV, Hocbong
   from sinhvien as s
   right join khoa as k on K.MAKH=S.MaKH;
   
-- liệt kê thông tin :MaKH, tenKH, MaSV, HoSV, TenSV, Hocbong, diem
-- khoa, sinhvien, ketqua

select k.MaKH, tenKH, s.MaSV, HoSV, TenSV, Hocbong,diem
from khoa as k 
join sinhvien as s on k.makh=s.makh 
join ketqua as kq on s.masv=kq.masv;

-- liệt kê thông tin :MaKH, tenKH, MaSV, HoSV, TenSV, Hocbong, diem, tenmh
-- khoa, sinhvien, ketqua, monhoc
select k.MaKH, tenKH, s.MaSV, HoSV, TenSV, Hocbong,diem
from khoa as k 
join sinhvien as s on k.makh=s.makh 
join ketqua as kq on s.masv=kq.masv
join monhoc as m on m.mamh=kq.mamh;

-- 10. truy vấn thống kê: sum, avg, count, max, min
-- tính tổng học bổng của toàn bộ sinh viên
select sum(hocbong) as 'tổng học bổng' from sinhvien;
-- tính điểm trung bình thi của toàn bộ sinh 
select avg(DIEM) as 'Điểm trung bình' from ketqua;
-- đếm số môn học 
select count(mamh) as 'tổng' from monhoc;
-- Max: đưa ra học bổng cao nhất(sinhvien)
select max(hocbong) as 'học bổng' from sinhvien;
-- min: đưa ra điểm thi thấp nhất(ketqua)
select min(diem) MinDiem from ketqua;


-- 11. truy vấn gộp nhóm( group by)
-- tính tổng học bổng theo từng khoa:
-- thông tin bao gồm: makh, tenKH, tonghb
select k.khoa, tenkh, sum(hocbong) as tonghb
from khoa as k
left join sinhvien as s on k.makh=s.makh
group by k.makh, tenkh;

select k.khoa, tenkh,
   case isnull(sum(hocbong))
   when 1 then 0
   when 0 then sum(hocbong)
   end as tonghb
from khoa as k
left join sinhvien as s on k.makh=s.makh
group by k.makh, tenkh
order by tonghb desc;

-- tính điểm trung bình của từng sinh viên
-- thông tin : masv, hosv, tensv, phai(nam,nữ), diemtb(avg(diem))
select s.masv, hosv, tensv,
    case 
        when phai=1 then'nam'
        else 'nữ'
        end as phai,
        avg(diem) as diemtb
from sinhvien as s
  left join ketqua as k on s.masv =k.masv
group by s.masv, hosv, tensv;

-- 12.truy vấn thống kê gộp nhóm có điều kiện chứa hàm thống kêalter
-- having:
-- thống kê sinh viên có điểm thi trung bình >=5
select s.masv, hosv, tensv,
    case when phai=1 then'nam' else 'nữ' end as phai,
        avg(diem) as diemtb
from sinhvien as s
   join ketqua as k on s.masv =k.masv
  -- where avg(diem) >=5 (sai)
   group by s.masv, hosv, tensv
having avg(diem)>=5;

-- 13. truy vấn con
-- liệt kê thông tin khoa chưa có sinh viên
select *
from khoa
where makh not in (select distinct makh from sinhvien);
-- liệt kê các môn học đã có sinh viên thi

select *
from monhoc
where mamh in (select distinct mamh from ketqua);

-- 14. truy vấn tham chiếu
-- đếm số sinh viên nam, nữ, tổng số sinh viên theo từng khoa
-- makh, tenkh, tongnam,tongnu,tongsv
select makh, tenkh,
    (select count(masv) from sinhvien where phai=1 and makh=k.makh) as tongnam,
    (select count(masv) from sinhvien where phai=0 and makh=k.makh) as tongnu,
    (select count(masv) from sinhvien where  makh=k.makh) as tongsv
from khoa as k;

-- 15. truy vấn tạo bảng
create table thongke
select makh, tenkh,
    (select count(masv) from sinhvien where phai=1 and makh=k.makh) as tongnam,
    (select count(masv) from sinhvien where phai=0 and makh=k.makh) as tongnu,
    (select count(masv) from sinhvien where makh=k.makh) as tongsv
from khoa as k;
select * from thongke;




   







