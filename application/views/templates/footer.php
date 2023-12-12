<footer>
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="display:flex;">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6749 9.92481C14.0264 9.57369 14.503 9.37646 14.9999 9.37646C15.4968 9.37646 15.9733 9.57369 16.3249 9.92481L23.3974 16.9948C23.749 17.3466 23.9464 17.8236 23.9463 18.3209C23.9462 18.5671 23.8977 18.811 23.8034 19.0384C23.7091 19.2659 23.5709 19.4726 23.3968 19.6467C23.2226 19.8208 23.0158 19.9588 22.7883 20.053C22.5608 20.1472 22.3169 20.1957 22.0707 20.1956C21.8244 20.1955 21.5806 20.147 21.3531 20.0527C21.1256 19.9584 20.919 19.8202 20.7449 19.6461L14.9999 13.9011L9.25488 19.6461C9.082 19.8252 8.87517 19.9682 8.64646 20.0665C8.41775 20.1649 8.17174 20.2167 7.92278 20.219C7.67382 20.2213 7.4269 20.174 7.19643 20.0798C6.96595 19.9856 6.75654 19.8465 6.58041 19.6706C6.40428 19.4946 6.26496 19.2853 6.17057 19.0549C6.07618 18.8245 6.02863 18.5777 6.03067 18.3287C6.03272 18.0797 6.08432 17.8337 6.18248 17.6049C6.28064 17.3761 6.42338 17.1691 6.60238 16.9961L13.6749 9.92231L13.6749 9.92481Z" fill="#020202"/>
        </svg>
    </button>

    <div class="footerText">
        <p>dicatlon 2023</p>
</div>
</footer>



<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    window.scrollTo({top: 0, behavior: 'smooth'});
  //document.body.scrollTop = 0;
  //document.documentElement.scrollTop = 0;
}
</script>



</body>
</html>