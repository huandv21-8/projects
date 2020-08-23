$('.slider').each(function() {//For every slider
  var $this = $(this);//Current slide
  var $group = $this.find('.slide-group');//Get the slide container
  var $slides = $this.find('.slide');//Hold all slides
  var buttonArray = []; //Hold navigation of buttons.
  var currentIndex = 0; //Current slide
  var timeout;//sets gap between auto-sliding

    function move(newIndex) { //creates the slide from old to new one
      var animateLeft, slideLeft;
      //call advance here to set slide moves
      advance();

      //If it is the current slide
      if($group.is(':animated') || currentIndex === newIndex){
        return;
      }
      buttonArray[currentIndex].removeClass('active');//Remote class from item
      buttonArray[newIndex].addClass('active');//Add class to new item

      if(newIndex > currentIndex){//If new item > current
        slideLeft ='100%';//Sit the new slide to the right
        animateLeft = '-100%';//Animate the current group to the left.
      }else{
        slideLeft ='-100%';//Sit the new slide to the left
        animateLeft = '100%';//Animate the current group to the right.
      }
      //Posstion new slide t left or right or current
      $slides.eq(newIndex).css({
        left:slideLeft,
        display:'block'
      });
      $group.animate({
        left:animateLeft
      },function(){// Animate slide
        $slides.eq(currentIndex).css({
          display:'none'
        });//Hide previous slide
        $slides.eq(newIndex).css({
          left: 0
        });//Set position of the new item
        $group.css({
          left:0
        });//Set position of group slides
        currentIndex = newIndex;//Set currentIndex to the new image
      });
    }
    function advance() { //used to set
      clearTimeout(timeout);//Clear previous timeout
      timeout = setTimeout(function(){//Set new timer
        if(currentIndex < ($slides.length - 1)){//If slide < total slides
          move(currentIndex +1);//Move to the next slide
        }else{
          move(0);//Move to the fist slide
        }
      },5000);//Milliseconds timer will wait
    }
    $.each($slides, function(index){
      //Create a button element for the button
      var $button =
      $('<button type="button" class="slide-btn">&bull;</button>');
      if(index === currentIndex){//If index is the current item
        $button.addClass('active');//Add the active class
      }
      $button.on('click', function(){//Create event handler for the button
        move(index);//It calls the moves() function
      }).appendTo('.slide-buttons');//add to the buttons holder
      buttonArray.push($button);//Add it to the button array
    });
    advance();//Script is set up, advance() to move it
  });
