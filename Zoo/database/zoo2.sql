


insert into customer values (01,N'Hà Nội',N'hhh01',001);
insert into customer values (02,N'Bắc Giang',N'abc12',002);
insert into customer values (03,N'Bắc Ninh',N'hau92',003);
insert into customer values (04,N'Hải Phòng',N'hiq45',004);
insert into customer values (05,N'Nghệ An',N'bcd32',005);
insert into customer values (06,N'Thanh Hóa',N'dhc21',006);
insert into customer values (07,N'Đà Nẵng',N'kdb79',007);
insert into customer values (08,N'Cà Mau',N'vtd32',008);
go

insert into ZOO values (77777);
go

insert into ANIMAL values (N'Sư tử',12,N'Thú ăn thịt',77777);
insert into ANIMAL values (N'Khiếu đầu đỏ',10,N'Lớp chim',77777);
insert into ANIMAL values (N'Voi',5,N'Thú',77777);
insert into ANIMAL values (N'Khỉ',7,N'Linh trưởng',77777);
insert into ANIMAL values (N'Cá sấu',12,N'Cá',77777);
go

insert into EVENT values(77777,N'Hòa nhạc ngoài trời',N'21/1/2020',N'23/1/2020');
insert into EVENT values(77777,N'Xiếc sư tử',N'13/12/2019',N'29/12/2019');
insert into EVENT values(77777,N'Đêm noel',N'24/12/2019',N'25/12/2019');
insert into EVENT values(77777,N'Vui tết dương lịch',N'30/12/2019',N'3/1/2020');
go

insert into INFORMATION values(001,N'Đỗ Văn',N'Huấn','0966468746',19);
insert into INFORMATION values(002,N'Lê Văn',N'Phương','0174835271',42);
insert into INFORMATION values(003,N'Ngô Thị',N'Thúy','0479362946',64);
insert into INFORMATION values(004,N'Nguyễn Minh',N'Nghĩa','0164825493',23);
insert into INFORMATION values(005,N'Đường Thanh',N'Bình','0397462518',20);
insert into INFORMATION values(006,N'Nguyễn Thành',N'Lâm','0958453726',25);
insert into INFORMATION values(007,N'Lê Thị',N'Phương','0956239164',40);
insert into INFORMATION values(008,N'Nguyễn Đức',N'Mạnh','0856342736',41);
go

insert into EMPLOYEE values(00001,N'Huyền',N'Nghệ An',0394628174,N'Dọn dẹp vệ sinh',77777);
insert into EMPLOYEE values(00002,N'Nghĩa',N'Lạng Sơn',0597362743,N'Cho thú ăn',77777);
insert into EMPLOYEE values(00003,N'Quang',N'Quảng Trị',0657241948,N'Kiểm tra thức ăn',77777);
insert into EMPLOYEE values(00004,N'Bắc',N'Vinh',067436271,N'Thu vé',77777);
insert into EMPLOYEE values(00005,N'Đức',N'Bắc Ninh',0865341836,N'Hướng dẫn viên',77777);
insert into EMPLOYEE values(00006,N'Long',N'Bắc Ninh',0956437234,N'Kiểm tra tài khoản',77777);
go

insert into ACCOUNT values(001,0001,'2013-04-21',00006);
insert into ACCOUNT values(002,0002,'2014-01-09',00006);
insert into ACCOUNT values(003,0003,'2008-05-11',00006);
insert into ACCOUNT values(004,0004,'2013-11-25',00006);
insert into ACCOUNT values(005,0005,'2013-02-14',00006);
insert into ACCOUNT values(006,0006,'2013-05-16',00006);
insert into ACCOUNT values(007,0007,'2013-06-10',00006);
insert into ACCOUNT values(008,0008,'2013-08-21',00006);
go

insert into ORDERS values(001,'2013-04-20',000001,00004,160000,3,01);
insert into ORDERS values(002,'2014-01-09',000002,00004,180000,3,02);
insert into ORDERS values(003,'2013-05-11',000003,00004,120000,2,03);
insert into ORDERS values(004,'2013-11-25',000004,00004,200000,3,04);
insert into ORDERS values(005,'2013-02-14',000005,00004,260000,4,05);
insert into ORDERS values(006,'2013-05-16',000006,00004,60000,1,06);
insert into ORDERS values(007,'2013-06-10',000007,00004,300000,5,07);
insert into ORDERS values(008,'2013-08-21',000008,00004,160000,3,08);
go

insert into TICKET values(000001,N'Vé người lớn','2014-04-20',77777,01);
insert into TICKET values(000002,N'Vé trẻ em','2015-07-20',77777,02);
insert into TICKET values(000003,N'Vé trẻ em','2016-05-20',77777,03);
insert into TICKET values(000004,N'Vé người lớn','2017-02-20',77777,04);
insert into TICKET values(000005,N'Vé người lớn','2011-01-20',77777,05);
insert into TICKET values(000006,N'Vé trẻ em','2016-03-20',77777,06);
insert into TICKET values(000007,N'Vé người lớn','2018-09-20',77777,07);
insert into TICKET values(000008,N'Vé trẻ em','2014-03-20',77777,08);


--đơn hàng:order
select INFORMATION.LAST_NAME, ORDERS.ID_ORDER, CUSTOMER.ADDRES, INFORMATION.PHONE, ORDERS.TIME, ORDERS.TOTAL_MONEY into ##order
from  INFORMATION 
inner join CUSTOMER ON INFORMATION.CUSTOMER_ID = CUSTOMER.CUSTOMER_ID
inner join ORDERS ON CUSTOMER.ID_ORDER = ORDERS.ID_ORDER

select * from ##order

--khách hàng gần đây:recent customer
select INFORMATION.LAST_NAME, TICKET.CLASSIFY, ORDERS.AMOUNT_TICKET, ORDERS.TIME, ORDERS.TICKET_ID into ##recent
from INFORMATION
inner join ORDERS on INFORMATION.CUSTOMER_ID = ORDERS.CUSTOMER_ID
inner join TICKET on ORDERS.ID_ORDER = TICKET.ID_ORDER;

select * from ##recent