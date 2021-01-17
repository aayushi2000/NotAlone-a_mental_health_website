document.addEventListener("DOMContentLoaded", function(){
      var el = document.querySelector(".button-bird");
      var text = document.querySelector(".button-bird__text");
          el.addEventListener('click', function() {
            el.classList.toggle('active');

            if(el.classList.contains('active')){
            	console.log('true');
            	text.innerHTML = 'Hope you feel light now!';
            }else{
            	text.innerHTML = 'Let go';
            }
        });
    });
    function ClearFields() {

        document.getElementById("thoughts").value = "";
    }
