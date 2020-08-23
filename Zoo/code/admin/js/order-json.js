// <th class="LAST_NAME">LAST_NAME</th>
// <th class="ID_ORDER">ID_ORDER</th>
// <th class="ADDRES">ADDRES</th>
// <th class="PHONE">PHONE</th>
// <th class="TIME">TIME</th>
// <th class="TOTAL_MONEY">TOTAL_MONEY</th>

$.getJSON("http://localhost:5000/danh-sach-don-hang"
    ,function(data) {
       $(".count").append(" "+data.length);
      for (var i = 0; i < data.length; i++) {
        $(".LAST_NAME_"+i).append(data[i].LAST_NAME);
        $(".ID_ORDER_"+i).append(data[i].ID_ORDER);
        $(".ADDRES_"+i).append(data[i].ADDRES);
        $(".PHONE_"+i).append(data[i].PHONE);
        $(".TIME_"+i).append(data[i].TIME);
        $(".TOTAL_MONEY_"+i).append(data[i].TOTAL_MONEY);
      }
  });
