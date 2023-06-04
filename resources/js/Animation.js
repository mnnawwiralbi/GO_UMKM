var links = document.getElementsByClassName('smooth-scroll');


for (var i = 0; i < links.length; i++) {
	
	links[i].addEventListener('click', function(event) {
		
		event.preventDefault();

        var target = this.getAttribute('href');
        var targetElement = document.querySelector(target);
        
        if(targetElement) {
        	
        	var targetOffset = targetElement.getBoundingClientRect().top; // Mendapatkan posisi vertikal elemen target
            
            var currentScroll = window.pageYOffset || document.documentElement.scrollTop; // Mendapatkan posisi scroll saat ini
      
            var finalOffset = targetOffset + currentScroll; // Menyesuaikan posisi scroll dengan elemen target
      
            window.scrollTo({
            top:finalOffset,
            behavior: 'smooth' // Mengaktifkan animasi perpindahan yang mulus
            });
        }

        
	});

}

window.addEventListener('scroll', function() {
  var navbar = document.getElementsByClassName('wrapper');
  
  if (window.pageYOffset > 0) {
    navbar.classList.add('sticky');
  } else {
    navbar.classList.remove('sticky');
  }
});
 


function showPage() {
  document.getElementById("smallPage").style.display = "block";
}

function hidePage() {
  document.getElementById("smallPage").style.display = "none";
}
