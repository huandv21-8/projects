$.getJSON("http://localhost:5000/danh-sach-khach-hang"
    ,function(data) {
      $(".count").append(" "+data.length);
      for (var i = 0; i < data.length; i++) {
        $(".LAST_NAME_"+i).append(data[i].LAST_NAME);
        $(".CLASSIFY_"+i).append(data[i].CLASSIFY);
        $(".AMOUNT_TICKET_"+i).append(data[i].AMOUNT_TICKET);
        $(".TIME_"+i).append(data[i].TIME);
        $(".TICKET_ID_"+i).append(data[i].TICKET_ID);
      }
  });
