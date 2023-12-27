var slideIndex = 1;
showSlide(slideIndex);

function nextslide(n) {
    showSlide(slideIndex += n);
}

function dotslide(n) {
    showSlide(slideIndex = n);
}

function showSlide(n) {
    var i;
    var slides = document.getElementsByClassName("imgslide");
    var dot = document.getElementsByClassName("dot");

    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {

        slides[i].style.display = "none";
    }

    for (i = 0; i < slides.length; i++) {

        dot[i].className = dot[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";

    dot[slideIndex - 1].className += " active";

}

//order sweatalert
btn = document.getElementById('iya');
btn.addEventListener('click', function () {
    Swal.fire({
        title: 'Apakah anda mau memesan?',
        text: "klik pesan untuk order!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Pesan'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'verified!',
                'Terimakasih sudah memesan',
                'success'
            )
        }
    })
})
btn = document.getElementById('iya1');
btn.addEventListener('click', function () {
    Swal.fire({
        title: 'Apakah anda mau memesan?',
        text: "klik pesan untuk order!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Pesan'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'verified!',
                'Terimakasih sudah memesan',
                'success'
            )
        }
    })
})
btn = document.getElementById('iya2');
btn.addEventListener('click', function () {
    Swal.fire({
        title: 'Apakah anda mau memesan?',
        text: "klik pesan untuk order!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Pesan'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'verified!',
                'Terimakasih sudah memesan',
                'success'
            )
        }
    })
})
btn = document.getElementById('iya3');
btn.addEventListener('click', function () {
    Swal.fire({
        title: 'Apakah anda mau memesan?',
        text: "klik pesan untuk order!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Pesan'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'verified!',
                'Terimakasih sudah memesan',
                'success'
            )
        }
    })
})