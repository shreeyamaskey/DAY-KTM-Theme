const nav = document.querySelector('nav');

window.addEventListener('scroll', () => {
    // console.log(window.scrollY);
    if (window.scrollY >= 50) {
        nav.classList.add('nav-active');
    } else {
        nav.classList.remove('nav-active');
    }
})

function navOpen(){
    document.querySelector('nav ul').classList.toggle('show');
}

function sendEmail() {
    var name = $('#name').val();
    var email = $('#email').val();
    var message = $('#message').val();

    var body = 'Name: ' + name + '<br> Email: ' + email + '<br>Message: ' + message;

    Email.send({
        SecureToken : "374a17b9-c242-4ba0-9d84-6231b8aaa85c",
        To: 'dearasianyouthktm@gmail.com',
        From: "dearasianyouthktm@gmail.com",
        Subject: "New Inquiry Contact Form From " + name,
        Body: body
    }).then(
        message => {
            if (message == 'OK') {
                // alert('Your message has been sent. Thank you for connecting!')

                Swal.fire({
                    text: 'Your message has been sent. Thank you for connecting!',
                    padding: '1em',
                    color: '#680f08',
                    width: 500
                  })
            }
            else {
                console.error(message);
                Swal.fire('Your message cannot be sent due to an error.');
                // alert('Your message cannot be sent due to an error.')
            }
        }
    );
}



