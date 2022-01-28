    /* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
    function myFunction() {
        var x = document.getElementById("nav-links");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }

      function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
      }

var keyword = document.getElementById('keyword');
var tombolcari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

/// tambahkan event saat keyword dituylis
keyword.addEventListener('keyup' , function() {

  // buat object ajaxx
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function() {
    if( xhr.readyState == 4 && xhr.status == 200 ) {
      container.innerHTML = xhr.responseText;
    }
  }
    // eksekusi ajax
    xhr.open('GET', 'ajax/surat.php', true);
    xhr.send();
});