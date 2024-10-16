// -------------read more toggle------------
function readMoreToggle() {
    var dots = document.querySelector('.dots');
    var moreText = document.querySelector('.more-text');
    var btnText = document.querySelector('button');

    if (dots.style.display === 'none') {
      dots.style.display = 'inline';
      btnText.innerHTML = 'Read More';
      moreText.style.display = 'none';
    } else {
      dots.style.display = 'none';
      btnText.innerHTML = 'Read Less';
      moreText.style.display = 'inline';
    }
}

// ----------we call it typewriter ---------
document.addEventListener("DOMContentLoaded", function() {
    const text = "Hi, I am Bisola Bolarinwa";
    let i = 0;
    const speed = 100; // typing speed in ms

    function typeWriter() {
        if (i < text.length) {
            document.getElementById("typewriter").innerHTML += text.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }

    typeWriter();
});
