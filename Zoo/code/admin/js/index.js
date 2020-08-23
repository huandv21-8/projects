const express = require('express');
const app = express();
const sql = require('mssql');
const config = {
    user: 'sa',
    password: 'z@GH7ytQ',
    server: '210.245.95.62',
    database: 'T1907A_GROUP2_Kawazaki'
};
const bodyParser = require("body-parser");
app.use(bodyParser.json());
app.use(bodyParser.urlencoded());

var connection = sql.connect(config, function(err) {
    if(err) console.log(err);
    else console.log("Connected SQLServer");
});
var request = new sql.Request(connection);
app.listen(5000,function () {
   console.log("Server is running..") ;
});
// Tao cac API
app.get("/danh-sach-khach-hang",function (req,res) {
    res.setHeader('Access-Control-Allow-Origin', '*');
    request.query("SELECT * FROM CUSTOMER",function (err,rows) {
        if (err) {
            console.log(err);
        } else {
            res.send(rows.recordset);
        }
    })
});
app.get("/danh-sach-don-hang",function (req,res) {
    res.setHeader('Access-Control-Allow-Origin', '*');
    request.query("SELECT * FROM ORDERS",function (err,rows) {
        if (err) {
            console.log(err);
        } else {
            res.send(rows.recordset);
        }
    })
});

app.post("/them-lop-hoc",function (req,res) {
   res.setHeader('Access-Control-Allow-Origin', '*');
   var tenlop = req.body.ten_lop;
   var phonghoc = req.body.phong_hoc;
   var sql_txt = "INSERT INTO lop_hoc (ten_lop,phong_hoc) VALUES('"+tenlop+"','"+phonghoc+"')";
   request.query(sql_txt,function (err,rows) {
       if(err){
           console.log(err);
           res.send("0");
       }else{
           res.send("1");
       }
   })
});

app.post("/xoa-sinh-vien",function (req,res) {
    res.setHeader('Access-Control-Allow-Origin', '*');
    var ma_sv = req.body.ma_sv;

    var sql_txt = "DELETE FROM sinh_vien WHERE ma_sv = "+ma_sv;
    request.query(sql_txt,function (err,rows) {
        if(err){
            console.log(err);
            res.send("0");
        }else{
            res.send("1");
        }
    });
});

app.post("/chi-tiet-lop-hoc",function (req,res) {
    res.setHeader('Access-Control-Allow-Origin', '*');
    var ma_lop = req.body.ma_lop;

    var sql_txt =  "SELECT * FROM lop_hoc WHERE ma_lop = "+ma_lop;
    request.query(sql_txt,function (err,rows) {
        if(err){
            console.log(err);
        }else{
            res.send(rows.recordset);
        }
    });
});

app.post("/sua-lop-hoc",function (req,res) {
    res.setHeader('Access-Control-Allow-Origin', '*');
    var malop = req.body.ma_lop;
    var tenlop = req.body.ten_lop;
    var phonghoc = req.body.phong_hoc;
    var sql_txt = "UPDATE lop_hoc SET ten_lop = '"+tenlop+"' , phong_hoc = '"+phonghoc+"' WHERE ma_lop = "+malop;

    request.query(sql_txt,function (err,rows) {
        if(err){
            console.log(err);
            res.send("0");
        }else{
            res.send("1");
        }
    })
});
