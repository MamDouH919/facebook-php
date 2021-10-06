function validateEmail() {
    let x = document.forms["myForm"]["email"].value;
    let Reg = (/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,4})+$/)
    if (x.match(Reg)) {
        validatePass();
    }
    else{
        document.getElementById("err1").style.display= 'block';
        document.getElementById("username").style.border = "1px solid red";
        document.getElementById("err2").style.display= 'none';
    }
    return false;
    }

function validatePass() {
        let x = document.forms["myForm"]["pass"].value;
        if ( x == ""){
            document.getElementById("err2").style.display= 'block';
            document.getElementById("err1").style.display= 'none';
            document.getElementById("username").style.border = "1px solid #dddfe2";
        }
        else{
            window.location = 'login-done.html';
        }
        return false;
    }
/////////////////////////////////////////////////////
// /////////////Already Have account ///////
/////////////////////////////////////////////////////
function validateEmail2() {
    let x = document.forms["-myForm"]["-email"].value;
    let Reg = (/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,4})+$/)
    if (x.match(Reg)) {
        validatePass2();
    }
    else{
        document.getElementById("err1").style.display= 'block';
        document.getElementById("err2").style.display= 'none';
        document.getElementById("-or").style.display= 'block';
        document.getElementById("Cr-acc").style.visibility= 'visible';
        document.getElementById("fpass").innerHTML= 'Forgotten account?';
    }
    return false;
    }
function validatePass2() {
        let x = document.forms["-myForm"]["-pass"].value;
        if ( x == ""){
            document.getElementById("err2").style.display= 'block';
            document.getElementById("err1").style.display= 'none';
            document.getElementById("-or").style.display= 'none';
            document.getElementById("Cr-acc").style.visibility= 'hidden';
            document.getElementById("fpass").innerHTML= 'Forgotten password?';
        }
        else{
            window.location = 'login-done.html';
        }
        return false;
    }
/////////////////////////////////////////////////////
// js for create new account 
////////////////////////////////////////////
    function myFunction() {
        var x = document.getElementById("fname");
        if (x.value==""){
            x.style.border = "1px solid red";
        }
    return false;
        }
    function myFunction2() {
        var x = document.getElementById("fname");
        x.style.border = "1px solid #dddfe2";
    return false;
    }
    function myFunction3() {
        var x = document.getElementById("lname");        
        if (x.value ==""){
            x.style.border = "1px solid red";
        }
    return false;
        }
    function myFunction4() {
        var x = document.getElementById("lname");
        x.style.border = "1px solid #dddfe2";
    return false;
    }
    function myFunction5() {
        var x = document.getElementById("-email");
        if (x.value== ""){
            x.style.border = "1px solid red";
        }
            return false;
        }
    function myFunction6() {
        var x = document.getElementById("-email");
        x.style.border = "1px solid #dddfe2";
    return false;
    }
    function myFunction7() {
        var x = document.getElementById("-pass");
        if (x.value==""){
            x.style.border = "1px solid red";
        }
    return false;
        }
    function myFunction8() {
        var x = document.getElementById("-pass");
        x.style.border = "1px solid #dddfe2";
    return false;
    }
    function myFunction9() {
        var x = document.getElementById("male");
        var y = document.getElementById("female");
        x.style.border = "1px solid #dddfe2";
        y.style.border = "1px solid #dddfe2";

    }
    function myFunction10() {
        var x = document.getElementById("day");
        var y = document.getElementById("month");
        var z = document.getElementById("year");
        x.style.border = "1px solid #dddfe2";
        y.style.border = "1px solid #dddfe2";
        z.style.border = "1px solid #dddfe2";

    }

    $(document).on('click', "#btnsiup", function () {
        var Firstname = $('#fname').val();
        var Lastname = $('#lname').val();
        var Email = $('#-email').val();
        var password = $('#-pass').val();
        var Gender = $('input[name="gender"]:checked').val();
        // console.log(Gender)
        var Day = $("#day option:selected").val();
        var Month1 = $("#month option:selected").val();
        let x = 1 ;
        var Month2 = parseFloat(Month1);
        var Month = x + Month2 ;
        var Year = $("#year option:selected").val();
        var Year1 = $("#year option:selected").val();
        let currentYear = new Date().getFullYear();
        var name_vaildation = /^[a-zA-Z]/;
        var email_vaildation = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,4})+$/;
        var password_vaildation = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!$])[a-zA-Z0-9!$ ]{8,15}$/;
        var valid = true;

        if (Firstname==""/*!name_vaildation.test(Firstname)*/)
        {
            $("#fname").css({"border": "1px solid red"});
            valid = false;
        }

        if (Lastname==""/*!name_vaildation.test(Lastname)*/)
        {
            $("#lname").css({"border": "1px solid red"});
            valid = false;
        }

        if (password==""/*!password_vaildation.test(password)*/)
        {
            $("#-pass").css({"border": "1px solid red"});
                valid = false;
        }

        if (Email==""/*!email_vaildation.test(Email)*/)
        {
            $("#-email").css({"border": "1px solid red"});
            valid = false;
        }

        // if(Gender==undefined)
        // {
        //     $("#male").css({"border": "1px solid red"});
        //     $("#female").css({"border": "1px solid red"});
        //     valid = false;
        // }

        // if(currentYear - Year1 < 18)
        // {
        //     $("#day").css({"border": "1px solid red"});
        //     $("#month").css({"border": "1px solid red"});
        //     $("#year").css({"border": "1px solid red"});
        //     valid = false;
        // }

        if (valid){
            // $("#firstN").html('Fisrt Name : ' + Firstname);
            // $("#lastN").html('Last Name : ' + Lastname);
            // $("#Mail").html('Email : ' + Email);
            // $("#PassWord").html('Password : ' + password);
            // $("#Gender").html('Gender : ' + Gender);
            // $("#Birthday").html('Birthday : ' + Day +"-"+ Month +"-"+ Year);
            
            $.post("PHP.php",{
                fname : Firstname ,lname : Lastname, email : Email , pass : password ,
                gender : Gender, day : Day , month : Month , year : Year

                },
                function (data ,status,xhr)
                {
                    // console.log(gender)
                    $("#Err-form").html(data)
                    console.log(status);
                    console.log(xhr);
                    });
            }
        }
    );
    
    
