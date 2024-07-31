function gotop() {
    window.location = "product.php";
}

function gotologadmin() {
    window.location = "login.php";
}

function gotologinc() {
    window.location = "loginchoose.php";
}





const slides = document.querySelectorAll('.slider-container .slide'); // get all the slides
const eraser = document.querySelector('.eraser'); // the eraser
const prev = document.getElementById('previous'); // previous button
const next = document.getElementById('next'); // next button
const intervalTime = 6000; // time until nextSlide triggers in miliseconds
const eraserActiveTime = 500; // time to wait until the .eraser goes all the way
let sliderInterval; // variable used to save the setInterval and clear it when needed


const nextSlide = () => {
    // Step 1. Add the .active class to the eraser - this will trigger the eraser to move to the left.
    eraser.classList.add('active');
    // Step 2. Set a timeout that will allow the eraser to move all the way to the left. This is where we'll use the eraserActiveTime - it has to be the same as the CSS value we mentioned above.
    setTimeout(() => {
        // Step 3. Get the active .slide and toggle the .active class on it (in this case, remove it).
        const active = document.querySelector('.slide.active');
        active.classList.toggle('active');
        // Step 4. Check to see if the .slide has a next element sibling available. If it has, add the .active class to it.
        if (active.nextElementSibling) {
            active.nextElementSibling.classList.toggle('active');
        } else {
            // Step 5. If it's the last element in the list, add the .active class to the first slide (the one with index 0).
            slides[0].classList.toggle('active');
        }
        // Step 6.Remove the .active class from the eraser - this will trigger the eraser to move back to the right. It also waits 200 ms before doing this (just to give enough time for the next .slide to move in place).
        setTimeout(() => {
            eraser.classList.remove('active');
        }, 180);
    }, eraserActiveTime);
}

//Button functionality
const prevSlide = () => {
    eraser.classList.add('active');
    setTimeout(() => {
        const active = document.querySelector('.slide.active');
        active.classList.toggle('active');
        // The *changed* part from the nextSlide code
        if (active.previousElementSibling) {
            active.previousElementSibling.classList.toggle('active');
        } else {
            slides[slides.length - 1].classList.toggle('active');
        }
        // End of the changed part
        setTimeout(() => {
            eraser.classList.remove('active');
        }, 180);
    }, eraserActiveTime);
}

next.addEventListener('click', () => {
    nextSlide();
    clearInterval(sliderInterval);
    sliderInterval = setInterval(nextSlide, intervalTime);
});

prev.addEventListener('click', () => {
    prevSlide();
    clearInterval(sliderInterval);
    sliderInterval = setInterval(nextSlide, intervalTime);
});

sliderInterval = setInterval(nextSlide, intervalTime);

// Initial slide
setTimeout(nextSlide, 500);



function signup() {

    var fn = document.getElementById("fn").value;
    var ln = document.getElementById("ln").value;
    var pa = document.getElementById("pa").value;
    var em = document.getElementById("em").value;
    var co = document.getElementById("co").value;
    var add = document.getElementById("add").value;
    var st = document.getElementById("st").value;
    var ci = document.getElementById("ci").value;
    var cu = document.getElementById("cu").value;
    var pc = document.getElementById("pc").value;

    var form = new FormData();
    form.append("fn", fn);
    form.append("ln", ln);
    form.append("pa", pa);
    form.append("em", em);
    form.append("co", co);
    form.append("add", add);
    form.append("st", st);
    form.append("ci", ci);
    form.append("cu", cu);
    form.append("pc", pc);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            var text = r.responseText;

            if (text == "Registation Success") {
                swal({
                        title: "Sign up Success!",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Continue!",
                    })
                    .then((signup) => {
                        if (signup) {
                            window.location = "login.php";
                        } else {
                            document.getElementById("fn").value = "";
                            document.getElementById("ln").value = "";
                            document.getElementById("pa").value = "";
                            document.getElementById("em").value = "";
                            document.getElementById("co").value = "";
                            document.getElementById("add").value = "";
                            document.getElementById("st").value = "";
                            document.getElementById("ci").value = "";
                            document.getElementById("cu").value = "";
                            document.getElementById("pc").value = "";
                        }
                    });
            } else {
                swal(text, "You clicked the button!", "warning");
            }


        } else {

        }

    };

    r.open("POST", "signupprocess.php", true);
    r.send(form);


}

function login() {
    var e = document.getElementById("e").value;
    var p = document.getElementById("p").value;
    var c = document.getElementById("c");

    var c1 = "";
    if (c.checked) {
        c1 = "1";
    } else {
        c1 = "2";
    }

    var form = new FormData();
    form.append("email", e);
    form.append("password", p);
    form.append("c", c1);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            var text = r.responseText;

            if (text == "ok") {
                swal({
                        title: "Log In Success!",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Continue!",
                    })
                    .then((login) => {
                        if (login) {
                            gotoindex();
                        } else {
                            document.getElementById("e").value = "";
                            document.getElementById("p").value = "";
                        }
                    });


            } else if (text == "Please enter email !") {
                swal("Please enter email !", {
                        content: "input",
                    })
                    .then((value) => {
                        document.getElementById("e").value = value;
                    });

            } else if (text == "Please enter password !") {
                swal("Please enter password !", {
                        content: "input",
                    })
                    .then((value) => {
                        document.getElementById("p").value = value;
                    });

            } else if (text == "1") {

                document.getElementById("p").value = "";

                swal({
                        title: "Hi Admin!",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Continue!",
                    })
                    .then((login) => {
                        if (login) {
                            swal("Please enter admin secret !", {
                                    content: "input",
                                })
                                .then((value) => {
                                    if (value == "6326#1948") {
                                        swal({
                                                title: "Secret Success!",
                                                text: "You clicked the button!",
                                                icon: "success",
                                                button: "Continue!",
                                            })
                                            .then((login) => {
                                                if (login) {
                                                    window.location = "admin.php";
                                                } else {
                                                    document.getElementById("e").value = "";
                                                    document.getElementById("p").value = "";
                                                }
                                            });
                                    } else {

                                        swal({
                                            title: "Secret wrong!",
                                            text: "You clicked the button!",
                                            icon: "error",
                                            button: "Continue!",
                                        });
                                    }
                                });
                        } else {
                            document.getElementById("e").value = "";
                            document.getElementById("p").value = "";
                        }
                    });

            } else {
                swal(text, "You clicked the button!", "warning");
                document.getElementById("e").value = "";
                document.getElementById("p").value = "";
            }

        } else {

        }

    };

    r.open("POST", "logprocess.php", true);
    r.send(form);
}

function signout() {
    window.location = "signout.php";
}

function cso() {
    swal({
            title: "Are you sure?",
            text: "Do you want to logout your account",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                signout();
            } else {
                swal("Your account is safe!");
            }
        });


}

function viewuser() {
    window.location = "viewuser.php";
}

function gotoindex() {
    window.location = "index.php";
}

function gotoaddp() {
    window.location = "add.php";

}

function add() {

    var name = document.getElementById("n").value;
    var detail = document.getElementById("d").value;
    var weight = document.getElementById("w").value;
    var deli = document.getElementById("de").value;
    var price = document.getElementById("p").value;
    var status = document.getElementById("s").value;

    var file_selector = document.getElementById("i");

    var form = new FormData();
    form.append("n", name);
    form.append("d", detail);
    form.append("w", weight);
    form.append("de", deli);
    form.append("p", price);
    form.append("s", status);
    form.append("i", file_selector.files[0]);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "1") {
                swal("Success", "You clicked the button!", "success");
                document.getElementById("n").value = "";
                document.getElementById("d").value = "";
                document.getElementById("w").value = "";
                document.getElementById("de").value = "";
                document.getElementById("p").value = "";
                document.getElementById("s").value = "";
                document.getElementById("i").value = "";
                view();

            } else {
                swal(text, "You clicked the button!", "warning");

            }

        }
    };

    r.open("POST", "addprocess.php", true);
    r.send(form);

}

function update() {
    window.location = "update.php";
}

function view() {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {
            var text = r.responseText;

            var dd = document.getElementById("view");
            dd.innerHTML = text;

        }

    };
    r.open("GET", "table.php", true);
    r.send();

}

function gotoup() {
    window.location = "up.php";
}

function up(id) {

    var name = document.getElementById("n").value;
    var detail = document.getElementById("d").value;
    var weight = document.getElementById("w").value;
    var price = document.getElementById("p").value;
    var deli = document.getElementById("de").value;
    var status = document.getElementById("s").value;


    var form = new FormData();
    form.append("n", name);
    form.append("d", detail);
    form.append("w", weight);
    form.append("p", price);
    form.append("de", deli);
    form.append("s", status);
    form.append("id", id);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "1") {
                swal("Updated", "You clicked the button!", "success");

            } else {
                swal(text, "You clicked the button!", "warning");

            }

        }
    };

    r.open("POST", "upprocess.php", true);
    r.send(form);

}

function del(id) {

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("id", id);

    r.onreadystatechange = function() {

        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "1") {
                swal({
                        title: "Are you sure?",
                        text: "Do you want to Delete this product",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            location.reload();
                        } else {
                            swal("Your product is safe!");
                        }
                    });


            } else {
                swal(text, "You clicked the button!", "warning");

            }

        }

    };
    r.open("POST", "delete.php", true);
    r.send(form);


}

function upu(id) {

    var fn = document.getElementById("fn").value;
    var ln = document.getElementById("ln").value;
    var pa = document.getElementById("pa").value;
    var em = document.getElementById("em").value;
    var co = document.getElementById("co").value;
    var add = document.getElementById("add").value;
    var st = document.getElementById("st").value;
    var ci = document.getElementById("ci").value;
    var cu = document.getElementById("cu").value;
    var pc = document.getElementById("pc").value;

    var form = new FormData();
    form.append("fn", fn);
    form.append("ln", ln);
    form.append("pa", pa);
    form.append("em", em);
    form.append("co", co);
    form.append("add", add);
    form.append("st", st);
    form.append("ci", ci);
    form.append("cu", cu);
    form.append("pc", pc);
    form.append("id", id);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            var text = r.responseText;

            if (text == "1") {
                swal({
                        title: "Update Success!",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Continue!",
                    })
                    .then((signup) => {
                        if (signup) {
                            window.location = "index.php";
                        }
                    });
            } else {
                swal(text, "You clicked the button!", "warning");
            }


        } else {

        }

    };

    r.open("POST", "updateuser.php", true);
    r.send(form);


}

function viewp() {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {
            var text = r.responseText;

            var dd = document.getElementById("pv");
            dd.innerHTML = text;

        }

    };
    r.open("GET", "pv.php", true);
    r.send();

}

function getsearch() {
    var input = document.getElementById("se").value;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            var d = document.getElementById("pv");
            d.innerHTML = text;
        }
    };
    r.open("POST", "search.php", true);
    r.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    r.send("n=" + input);


}

function ac(id) {

    var form = new FormData();
    form.append("id", id);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "Added Your Cart") {
                swal({
                        title: text,
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Continue!",
                    })
                    .then((signup) => {
                        if (signup) {
                            window.location = "cart.php";
                        }
                    });


            } else if (text == "1") {

                swal({
                        title: "Pleasse Log in First!",
                        text: "You clicked the button!",
                        icon: "warning",
                        button: "Continue!",
                    })
                    .then((signup) => {
                        if (signup) {
                            window.location = "login.php";
                        }
                    });

            }
        }

    };
    r.open("POST", "ac.php", true);
    r.send(form);

}

function viewc() {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {
            var text = r.responseText;

            var dd = document.getElementById("vc");
            dd.innerHTML = text;

        }

    };
    r.open("GET", "vc.php", true);
    r.send();

}

function rc(id) {

    var form = new FormData();
    form.append("id", id);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "1") {
                swal({
                        title: "Are you sure?",
                        text: "Do you want to Remove this product in your cart",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            location.reload();
                        } else {
                            swal("Your product is safe!");
                        }
                    });

            }

        }

    };
    r.open("POST", "rc.php", true);
    r.send(form);

}

function buynow(id) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {

            var text = r.responseText;

            if (text == "2") {
                window.location = "login.php";
            } else if (text == "3") {
                alert("Invalid Product");
            } else {

                var j = JSON.parse(text);

                payhere.onCompleted = function onCompleted(orderId) {
                    alert("Payment Completed");
                };

                payhere.onDismissed = function onDismissed() {
                    alert("Payment popup dismissed");
                };

                payhere.onError = function onError(error) {
                    alert("Invalid Details");
                };



                var payment = {

                    "sandbox": true,
                    "merchant_id": "1217892", // Replace your Merchant ID
                    "return_url": "http://localhost/sri%20lal/return.php", // Important
                    "cancel_url": "http://localhost/sri%20lal/cancel.php", // Important
                    "notify_url": "http://localhost/sri%20lal/notify.php",
                    "order_id": id,
                    "items": j.pn,
                    "amount": j.pp,
                    "currency": "USD",
                    "first_name": j.un,
                    "last_name": j.un,
                    "email": j.ue,
                    "phone": j.um,
                    "address": "74/1,Ambalangoda,Polgasowita",
                    "city": "Colombo",
                    "country": "Sri Lanka",
                    "delivery_address": "74/1,Ambalangoda,Polgasowita",
                    "delivery_city": "Polgasowita",
                    "delivery_country": "Sri Lanka",
                };

                payhere.startPayment(payment);

            }

        }
    };

    r.open("GET", "buynowprocess.php?pid=" + id, true);
    r.send();

}

function getqty(id) {

    var input = document.getElementById("sq").value;

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("sqty", input);
    form.append("id", id);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            var d = document.getElementById("vq");
            d.innerHTML = text;
        }
    };
    r.open("POST", "sqty.php", true);
    r.send(form);

}

function qop() {
    window.location = "qop.php";
}

function sf(id) {

    var input = document.getElementById("fb").value;

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("fb", input);
    form.append("id", id);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            var text = r.responseText;
            swal(text, "You clicked the button!", "success");
            document.getElementById("fb").value = "";

        }
    };
    r.open("POST", "sf.php", true);
    r.send(form);

}

function vfb() {
    window.location = "vfeedback.php";
}

function ded() {
    window.location = "ded.php";
}

function cht(id) {

    var input = document.getElementById("cht").value;

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("cht", input);
    form.append("id", id);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            var div = document.getElementById("vcht");
            var cfn = document.createElement('span');
            cfn.classList.add("fow");
            cfn.innerHTML = text;

            var cbrek = document.createElement('br');
            div.appendChild(cbrek);
            div.appendChild(cfn);

            document.getElementById("cht").value = "";
        }
    };
    r.open("POST", "svecht.php", true);
    r.send(form);

}

function clearr(id) {

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("id", id);

    r.onreadystatechange = function() {

        if (r.readyState == 4) {

            var text = r.responseText;
            if (text == "1") {
                swal({
                        title: "Are you sure?",
                        text: "Do you want to clear all chat",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            location.reload();
                        } else {
                            swal("Your chat not clear!");
                        }
                    });

            }


        }

    };
    r.open("POST", "clear.php", true);
    r.send(form);

}

function vcht() {
    window.location = "vchat.php";
}

function replycht(id) {

    var input = document.getElementById("chcht").value;

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("rc", input);
    form.append("id", id);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            var text = r.responseText;

            if (text == "Reply massage sent!") {
                swal(text, "You clicked the button!", "success");
                document.getElementById("chcht").value = "";
                var b = document.getElementById("bre");
                var bb = document.getElementById("chcht");
                b.innerHTML = "Replied";
                b.disabled = true;
                bb.disabled = true;

            } else {
                swal("Try Again!", "You clicked the button!", "warning");
            }

        }
    };
    r.open("POST", "replyprocess.php", true);
    r.send(form);

}

function delecht(id) {

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("id", id);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            var text = r.responseText;

            if (text == "Massage Delete Eveyrone") {
                swal({
                        title: "Are you sure?",
                        text: "Do you want to delete everyone this massage!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            location.reload();
                        } else {
                            swal("this massage not deleted!");
                        }
                    });

            }

        }
    };
    r.open("POST", "deletecht.php", true);
    r.send(form);

}

function delechtmy(id) {

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("id", id);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            var text = r.responseText;

            if (text == "Massage Delete For Me") {
                swal({
                        title: "Are you sure?",
                        text: "Do you want to delete this massage For Me!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            location.reload();
                        } else {
                            swal("this massage not deleted!");
                        }
                    });

            }

        }
    };
    r.open("POST", "deletechtmy.php", true);
    r.send(form);

}

function delfed(id) {

    var r = new XMLHttpRequest();

    var form = new FormData();
    form.append("id", id);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            var text = r.responseText;

            if (text == "Deleted This FeedBack") {
                swal({
                        title: "Are you sure?",
                        text: "Do you want to delete this feedback!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            location.reload();
                        } else {
                            swal("this feedback not deleted!");
                        }
                    });

            }

        }
    };
    r.open("POST", "delfed.php", true);
    r.send(form);

}