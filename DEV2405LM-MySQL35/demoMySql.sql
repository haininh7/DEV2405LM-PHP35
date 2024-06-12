create database day10Db;
use day10Db;
-- tạo bảng tbl_user

create table tbl_user(
    user_id int(11) not null,
    user_name varchar(64) not null,
    pass_word varchar(128) default null,
    email varchar(100) default null,
    full_name varchar(32) default null,
    avata varchar(128) default null,
    status tinyint(1) default '1'

) engine=InnoDB AUTO_INCREMENT=1 default charset=UTF8;

create table IF NOT EXISTS  tbl_province(
 pro_id int(11) not null,
 pro_name varchar(64) not null,
 status tinyint(1) default '1'
 ) engine=InnoDB AUTO_INCREMENT=1 default charset=utf8;
 
 alter table tbl_user
   add primary key (user_id);
   
alter table tbl_user
      modify user_id int(11) not null auto_increment;
      
alter table tbl_user
    add pro_id int(11) not null after full_name;
    
alter table tbl_province 
     add primary key (pro_id);
	
alter table tbl_province
    modify pro_id int(11) not null auto_increment;
    
      select * from tbl_province;
    insert into tbl_province(pro_name,status) values("Hà Nội",1);
    insert into tbl_province(pro_name,status) values("Hải Phòng",1);
    insert into tbl_province(pro_name,status) values("Lạng Sơn",1);
    insert into tbl_province(pro_name,status) values("Tuyên Quang",1);
    insert into tbl_province(pro_name,status) values("Phú Thọ",1);
    insert into tbl_province(pro_name,status) values("Bắc Ninh",1);
    insert into tbl_province(pro_name,status) values("Hải Dương",1);
    insert into tbl_province(pro_name,status) values("Hưng Yên",1);
    insert into tbl_province(pro_name,status) values("Hà Nam",1);
    insert into tbl_province(pro_name,status) values("Ninh Bình",1);
    insert into tbl_province(pro_name,status) values("Thanh Hóa",1);
    insert into tbl_province(pro_name,status) values("Nghệ AN",1);
    
    select * from tbl_user;
    insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("admin","123456", "admin@mail.com","Nguyễn Quang Anh", "1", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("cuongnd","123456", "cuongnd@mail.com","Nguyễn Đình Cương", "2", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("vietpv","123456", "vietpv@mail.com","Phạm Văn Việt", "3", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("tunq","123456", "tunq@mail.com","Nguyễn Quang Tú", "1", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("vinhpt","123456", "admin@mail.com","Phan Thành Minh", "3", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("hoangvv","123456", "hoangvv@mail.com","Võ Văn Hoàng", "5", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("ducdd","123456", "ducdd@mail.com","Đỗ Đăng Đức", "5", null,1);
    insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("hoangkt","123456", "hoangkt@mail.com","Khuất Thành Hoàng", "7", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("cuongvx","123456", "cuongvxn@mail.com","Vũ Xuân Cường", "6", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("tuannq","123456", "tuannq@mail.com","Nguyễn Qang Tuấn", "3", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("tungnm","123456", "tungnm@mail.com","Nguyễn Mạnh Cường", "1", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("haivq","123456", "haivq@mail.com","Vũ Quang Hải", "3", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("hungtx","123456", "hungtx@mail.com","Trần Xuân hải", "4", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("haicx","123456", "haicx@mail.com","Chu Xuân Hải", "2", null,1);
     insert into tbl_user (user_name, pass_word, email, full_name, pro_id, avata,status)
    values("khuongnq","123456", "khuongnq@mail.com","Nguyên Quang Khương", "1", null,1);
     
     
   
   
   
   
 
 

