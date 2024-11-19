<?php include "./components/head.php"  ?>
<title>OTP Page</title>
<style>
    .height-100 {
        height: 100vh
    }

    .card {
        width: 400px;
        border: none;
        height: 300px;
        box-shadow: 0px 5px 20px 0px #d2dae3;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .card h6 {
        color: #0b5ed7;
        font-size: 20px
    }

    .inputs input {
        width: 40px;
        height: 40px
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0
    }

    .card-2 {
        background-color: #fff;
        padding: 10px;
        width: 350px;
        height: 100px;
        bottom: -50px;
        left: 20px;
        position: absolute;
        border-radius: 5px
    }

    .card-2 .content {
        margin-top: 50px
    }

    .card-2 .content a {
        color: red
    }

    .form-control:focus {
        box-shadow: none;
        border: 2px solid #0b5ed7
    }

    .validate {
        border-radius: 20px;
        height: 40px;
        width: 140px
    }
</style>
</head>

<body>
    <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="position-relative">
            <div class="card p-2 text-center">
                <h6>Please enter the one time password <br> to verify your account</h6>
                <div> <span>A code has been sent to</span> <small>*******9897</small> </div>
                <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                    <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" />
                </div>
                <div class="d-flex justify-between gap-4 mt-4">
                    <a class="btn btn-secondary px-4 validate">Resend</a>
                    <a href="/HRMS/dashboard" class="btn btn-primary px-4 validate">Validate</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            function OTPInput() {
                const inputs = document.querySelectorAll('#otp > *[id]');
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener('input', function(event) {
                        if (inputs[i].value.length === 1) {
                            if (i !== inputs.length - 1) {
                                inputs[i + 1].focus();
                            }
                        }
                    });
                    inputs[i].addEventListener('keydown', function(event) {
                        if (event.key === "Backspace") {
                            if (inputs[i].value === '' && i !== 0) {
                                inputs[i - 1].focus();
                            }
                        }
                    });
                }
            }
            OTPInput();
        });
    </script>
</body>

</html>
