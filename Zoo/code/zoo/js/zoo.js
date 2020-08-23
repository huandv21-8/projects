

/*jQuery(document).ready(function($) {
 $('.share').click(function() {
 var NWin = window.open($(this).prop('href'), '',
  'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
 if (window.focus)
 {
 NWin.focus();
 }
 return false;
 });
});

jQuery(document).ready(function($) {
  //selector đến menu cần làm việc
  var TopFixMenu = $("#menu");
  // dùng sự kiện cuộn chuột để bắt thông tin đã cuộn được chiều dài là bao nhiêu.
    $(window).scroll(function(){
    // Nếu cuộn được hơn 150px rồi
        if($(this).scrollTop()>150){
      // Tiến hành show menu ra
        TopFixMenu.show();
        }else{
      // Ngược lại, nhỏ hơn 150px thì hide menu đi.
            TopFixMenu.hide();
        }}
    )
})
*/


(function () {         //lives in an IIfe
  var $imgs = $('img'); //get the images
  var $search = $('#filter-search');// get the input element
  var cache = [];  //create an array called cache

  $imgs.each(function () {     //for each image
    cache.push({             // add an object to the cache array
      element: this,         //this image
      text: this.alt.trim().toLowerCase()  //its alt text (lowercase trimmed)
    });
  });

function filter() {      //declare filter() function
  var query = this.value.trim().toLowerCase();   //get the query
  cache.forEach(function (img) {  //for each entry in cache pass image
    var index = 0;   // set indext to 0

    if (query) {   //if there is some query text
      index = img.text.indexOf(query);  //find if query is in there
    }

    img.element.style.display = index === -1 ? 'none' : '';  //show / hide
  });
}

if ('oninput' in $search[0]){   //if browserts supports input event
  $search.on('input', filter);  //use input event to call filter()
}else {                          //otherwise
  $search.on('keyup', filter);   //use keyup event to call filter
}

}());
