<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wheels on Lease</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }

        headertop {
            display: none;
            justify-content: space-between;
            align-items: center;
            background-color: #f4f7f9;
            padding: 3px 20px;
            color: rgb(0, 0, 0);
            padding-right: 0.3cm;
            padding-left: 0.3cm;
        }


        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8ffff;
            padding: 10px 20px;
            color: rgb(0, 0, 0);
            padding-right: 1.5cm;
            padding-left: 1.5cm;
        }

        headertwo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f4f7f9;
            padding: 5px 20px;
            color: rgb(0, 0, 0);
            padding-right: 1.5cm;
            padding-left: 1.5cm;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            cursor:default;
        }







        .search-bar {
            display: flex;
            align-items: center;
            width: 90%;
            margin-left: 20px;
            margin-right: -90px;
            padding-left: 2cm;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            width: 75%;
            background: #f1f1f1;
            border-start-start-radius: 5px;
            border-end-start-radius: 5px;
        }

        .search-bar button {
            border-start-end-radius: 5px;
            border-end-end-radius: 5px;
            width: 50px;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        .search-bar button:hover {
            background: #0b7dda;
        }














        .login-register {
    display: flex;

}





.login-box {
    border: 1px solid #373D3F;
    padding: 10px 18px;
    margin: 0 20px;
    text-decoration: none; /* Remove text decoration from the <a> tags */
    transition: background-color 0.3s, color 0.3s;
    cursor: pointer; /* Change cursor to indicate clickability */
    border-radius: 5px;
}

.register-box {
    border: 1px solid #373D3F;
    padding: 10px 18px;
    margin: 0 0px;
    text-decoration: none; /* Remove text decoration from the <a> tags */
    transition: background-color 0.3s, color 0.3s;
    cursor: pointer; /* Change cursor to indicate clickability */
    border-radius: 5px;
}


.login-box div,
.register-box div {
    color: #373D3F;
    font-weight: bold;
}

.login-box:hover,
.register-box:hover {
    background-color: #373D3F;
    color: #fff;
}

.login-box:hover div,
.register-box:hover div {
    color: #fff;
}














        .categoriesextra a {
            color: #373D3F;
            text-decoration: none;
            margin-left: 36px;
            font-weight: bold;
        }

        .categories {
            color: #000000;
            text-decoration: none;
            margin-left: 38px;
            font-weight: bold;
            cursor:default;
        }
        .categoriesextra a:hover {
              color: #ff0000;
               }








        /* Add arrow styling */

        /* Responsive Dropdown Styles */
        .categoriesextras {
            display: flex;
            align-items: center;

        }

        .categoriesextras a {
            color: #f50606;
            text-decoration: none;
            margin-left: 30px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }
        .categoriesextras a:hover {
              color: #000000;
               }














               .dropdown {
            min-width: 15%;
            position: relative;
            margin-left: 2em;
            margin-right: -2em;


        }

        .dropdown * {
            box-sizing: border-box;
        }

        .select {
            background: #f1f1f1;
            color: rgb(101, 100, 100);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px grey solid;
            border-radius: 5px;
            padding: 10px;
            padding-left: 0.3cm;
            padding-right: 0.4cm;
            cursor: pointer;
        }



        .select:hover {
            background:#dcdcdc;
        }

        .caret {
            width: 0.2cm;
            height: 0cm;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-top: 8px solid #000000;
            transition: 0.3s;
        }

        .caret-rotate {
            transform: rotate(180deg);
        }

        .menu {
            list-style: none;
            padding: 0.2em 0.5em;
            background: #ffffff;
            border: 1px #363a43 solid;
            box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.2);
            border-radius: 0.5em;
            color: #373D3F;
            position: absolute;
            top: 3em;
            left: 50%;
            width: 100%;
            transform: translateX(-50%);
            opacity: 0;
            display: none;
            transition: 0.2s;
            z-index: 1;


        }

        .menu li {
            padding: 0.7em 0.5em;
            margin: 0.3em 0;
            border-radius: 0.5em;
            cursor: pointer;
        }

        .menu li:hover {
            background: #dcdcdc;
        }

        .active {
            background: #ffffff;
        }

        .menu-open {
            display: block;
            opacity: 1;
        }


















    headertwo .login-register
    {
        display:none;
    }






































        @media screen and (max-width: 1400px) {
            .search-bar {
                display: flex;
                align-items: center;
                margin-left: 0px;
                padding-left: 2cm;
            }



            .categoriesextras {
                display: flex;
                align-items: flex-end;

            }
        }










        /* Media Query for Phone Screen */
        @media screen and (max-width: 1300px) {

            .categoriesextras {
                display: flex;
                align-items: flex-end;

            }
            .categories {
                margin-left: 3px;
            }




            .search-bar {
                display: flex;
                align-items: center;
                margin-left: 0px;
                padding-left: 1cm;
            }


            header {
            padding-right: 0.5cm;
            padding-left: 0.5cm;
        }

        headertwo {
            padding-right: 0.5cm;
            padding-left: 0.5cm;
        }

        .search-bar {

                padding-left: 2cm;
            }

            .dropdown {

margin-left: 1.5em;
margin-right: -2em;


}




        }









        @media screen and (max-width: 1185px) {


        .search-bar {

padding-left: 1.3cm;
}


.select {

padding-left: 0.2cm;
padding-right: 0.2cm;

}

.dropdown {

            margin-left: 1em;
            margin-right: -2em;


        }



        }











        @media screen and (max-width: 1152px) {









            .login-register a {
            color: #373D3F;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }



.login-box, .register-box {
    border: 0;
    padding: 0;
    margin: 0;
    text-decoration: 0; /* Remove text decoration from the <a> tags */
    transition: background-color 0;
    cursor:0; /* Change cursor to indicate clickability */
    border-radius: 0;
}

.login-box div,
    .register-box div {
        color: initial; /* Reset color for smaller screens */
        font-weight: bold; /* Reset font weight for smaller screens */
    }

    .login-box:hover,
    .register-box:hover {
        background-color: initial; /* Reset background color for smaller screens */
        color: initial; /* Reset text color for smaller screens */
    }

    .login-box:hover div,
.register-box:hover div {
    color: #fc0303;
}










        }



















        @media screen and (max-width: 1104px) {




            headertwo {

padding: 2px 20px;

}




        .categoriesextra {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100px;
                padding-left: 1px;
                align-items: flex-start;

                margin-left: -0.2cm;

            }

            .categoriesextra a {
                font-weight: bold;
            }

            .categories.active + .categoriesextra {
                display: none;/* change to flex to show onclick categories dropdown oprtions*/
            }

            .categories {
                margin-left: 18px;
                cursor: pointer;
            }

            .categories::after {
                content: "▼";
                margin-left: 3px;
                display: none;/* change to flex to show ▼ near categories dropdown oprtions*/
            }

            .categories.active::after {
                content: "▲";
            }




            .login-register{
            flex-direction: column;
            align-items: flex-end;
        }


         .register-box {

padding-top: 0.12cm;

}




.categoriesextras {
                display: flex;
                flex-direction: row;
                align-items: flex-end;

            }





































        }













        @media screen and (max-width: 1020px) {



            .search-bar {

padding-left: 1.3cm;
}


header {
            padding-right: 0.3cm;
            padding-left: 0.3cm;
        }

        headertwo {
            padding-right: 0.3cm;
            padding-left: 0.3cm;
        }


        .dropdown {
            margin-left: 0.5em;
            margin-right: -2em;

        }

        .select {

padding-left: 0.15cm;
padding-right: 0.12cm;
}







        }
















        @media screen and (max-width: 955px) {
            .categories {
                margin-left: 3px;
            }
            .categoriesextra {
                margin-left: -0.7cm;
            }

            .logo {
            font-size: 22px;
        }

        .categories {
            font-size: 15px;
        }




        .dropdown {
            min-width: 16%;
        }







        }



        @media screen and (max-width: 880px) {


  .search-bar{

  }

            .logo {
            font-size: 21px;
        }



        .select {
            height:1.2cm;
        }

        .search-bar input[type="text"] {
            height:1.2cm;

        }

        .search-bar button {
            height:1.2cm;

        }







        }







        @media screen and (max-width: 840px) {


            .search-bar input[type="text"]
            {

                height: 42px;
            }
            .search-bar button {
                height: 42px;
                width: 45px;
                padding: 8px;
        }

        .search-bar
        {
            padding-right: 0.25cm;
        }

        .select
        {
            height: 42px;
        }


            #searchBar input::placeholder {
    font-size: 16px; /* Adjust the font size as needed */
   }

   .select {
    font-size: 15px;
        }

        .login-register
        {
            font-size: 15px;
        }

        .categoriesextra {

top: 95px;


}






        }







        @media screen and (max-width: 804px) {



            headertwo {

padding: 1px 10px;

}



            .logo
            {
                font-size: 22.1px;
            }


  .search-bar
  {
    margin-right: -10px;
  }

  .search-bar input[type="text"]
            {

                width: 95%;
            }
            .dropdown
            {
                min-width: 18%;
            }





            .register-box {

padding-top: 0cm;

}

            .login-register
    {
        align-items: center;
        flex-direction: row;
        font-size: 17px;

    }

    .categoriesextra {

top: 90px;
margin-left: -0.8cm;



}











        header .login-register
    {
        display:none;
    }









        headertwo .login-register
    {
        display:flex;
    }





        }










        @media screen and (max-width: 743px) {

            .logo {
            font-size: 20px;
        }

        .select {
    font-size: 14px;
        }

        #searchBar input::placeholder {
         font-size: 15px;
            }





            .categories
            {
                font-size: 14px;
            }
            .categoriesextra {
                font-size: 15px;
            }

            .categoriesextras
            {
                font-size: 14.9px;
            }
            .login-register
            {
                font-size: 17px;
            }



        }









        @media screen and (max-width: 698px) {


       .logo
       {
        font-size: 19.3px;
       }


        .search-bar input[type="text"]
            {
                height: 38px;
            }
            .search-bar button {
                height: 38px;
                width: 45px;
                padding: 5px;
         }

        .select
        {
            height: 38px;
        }


            #searchBar input::placeholder {
         font-size: 13px; /* Adjust the font size as needed */
           }

           .select
           {
            font-size: 13.5px;
           }
           .select {

padding-left: 0.1cm;
padding-right: 0.1cm;
}

.menu{
    font-size: 14px;
}

.categoriesextra{
    top: 85px;
}




}
























































































































 @media screen and (max-width: 646px) {


    headertop{
        display: flex;
    }
    header {
            padding: 1px 10px;
        }
        headertwo {
            padding: 6px 1px;
        }










        headertop .dropdown
        {
            display: none;
        }





        .categories.active + .categoriesextra {
                display: none;
            }







     header .logo
     {
        display: none;
     }
    headertwo .login-register
    {
        display: none;
    }
    .categories
    {
        display: none;
    }
    .search-bar
    {
        width: 80%;
        padding-left: 0.2cm;
    }

    #searchBar input::placeholder {
         font-size: 15px;
            }



    .dropdown
    {
        width: 3.5cm;
        margin-left: 0cm;
        margin-right: 0.1cm;

    }

    .select
           {
            font-size: 14px;
           }





           headertwo {
            display: flex;
            justify-content: center;
            align-items: center;
        }


    .categoriesextras
    {
        display: flex;
        font-size: 14px;
        justify-content: center;
        align-items: center;
        margin-right: 28px;

    }























































































    .navbar {
            background-color: #fff8f8;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px 0px;
        }


    .menus-icon {
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 20px;

        }

        .bar {
            background-color: #000000;
            height: 3px;
            width: 100%;
            transition: transform 0.3s ease-in-out;
        }


        .menus {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    position: fixed;
    top: 37px;
    right: -100%;
    background-color: #000000;
    width: 100%;
    height: calc(100%); /* when we add footer use  height: calc(100% - 50px);  here */
    padding: 20px 0;
    z-index: 1;
    transition: right 0.2s ease-in-out;
    overflow-y: auto;
}


.menus-button {
            margin: 10px 0;
            transition: opacity 0.3s ease-in-out;
            margin-top: 23px;
            border-bottom: 2px  solid #fff;
            border-bottom-left-radius: 0.1cm;
        }

        .menus-button a {
            text-decoration: none;
            color: #fff;
            font-size: 20px; /* Increase font size */
            margin-left: 10px; /* Add space between items */
            padding-bottom: 3.5cm;
        }

        .menus-button a:hover {
            text-decoration: underline;
        }





 }












 @media screen and (max-width: 540px)

 {
    #searchBar input::placeholder {
         font-size: 14px;
            }


            .dropdown
    {
        width: 3cm;


    }

    .select
           {
            font-size: 13px;
           }





 }









 @media screen and (max-width: 420px)

 {

     header .dropdown
     {
        display: none;
     }

     headertop .dropdown{
        display: flex;
     }




     .search-bar
     {
        width: 100%;
        padding-left: 0cm;
        padding-right: 0cm;
     }





















     .dropdown {
            min-width: 15%;
            position: relative;
            margin-left: -1.5em;
            margin-right: -2em;



        }

        .dropdown * {
            box-sizing: border-box;
        }

        .select {
            background: #f1f1f1;
            color: rgb(101, 100, 100);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border:0.5px grey solid;;
            border-radius: 5px;
            padding: 11px;
            padding-left: 0.1cm;
            padding-right: 0.1cm;
            cursor: pointer;
            height: 0px;
            width:2.8cm;

        }

        .select:hover {
            background:#dcdcdc;
        }

        .caret {
            width: 0.2cm;
            height: 0cm;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-top: 8px solid #000000;
            transition: 0.3s;
            margin-left: 0.3cm;
        }

        .caret-rotate {
            transform: rotate(180deg);
        }

        .menu {
            list-style: none;
            padding: 0.2em 0.5em;
            background: #ffffff;
            border: 1px #363a43 solid;
            box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.2);
            border-radius: 0.5em;
            color: #373D3F;
            position: absolute;
            top: 1.7em;
            left: 46%;
            width: 93%;
            transform: translateX(-50%);
            opacity: 0;
            display: none;
            transition: 0.2s;
            z-index: 1;


        }

        .menu li {
            padding: 0.5em 0.3em;
            margin: 0.3em 0;
            border-radius: 0.5em;
            cursor: pointer;
        }

        .menu li:hover {
            background: #dcdcdc;
        }

        .active {
            background: #ffffff;
        }

        .menu-open {
            display: block;
            opacity: 1;
        }











 }




 @media screen and (max-width: 343px)

{
    .categoriesextras
            {
                font-size: 12.6px;
            }

}













































































































































































    </style>



</head>
<body>


    <headertop>
        <div class="logo">WheelsonLease</div>







        <div class="dropdown">
            <div class="select">
                <span class="selected">Kochi</span>
                <div class="caret"></div>
            </div>
            <ul class="menu">
                <li>Malappuram</li>
                <li>Kozhikode</li>
                <li>Trivandrum</li>
                <li class="active">Kochi</li>
                <li>Ponnani</li>
            </ul>
        </div>






        <div class="navbar">
            <div class="menus-icon" id="menus-icon">
                <div class="bar" id="bar1"></div>
                <div class="bar" id="bar2"></div>
                <div class="bar" id="bar3"></div>
            </div>
            <div class="menus" id="menus">
                <div class="menus-button">
                    <a href="{{ route('login') }}" id="login-button">🔒 Login</a>
                </div>
                <div class="menus-button">
                    <a href id="register-button">📝 Register</a>
                </div>

                <div class="menus-button">
                    <a href id="offers">💰 Offers</a>
                </div>

                <div class="menus-button">
                    <a href id="vehicle-lease-button">🚗 Make Vehicle lease</a>
                </div>


                <div class="menus-button">
                    <a href id="vehicle-rent-button">🚗 Make Vehicle Rent</a>
                </div>


                <div class="menus-button">
                    <a href id="terms and conditions">📜 Terms & Conditions</a>
                </div>
                <div class="menus-button">
                    <a href id="Privacy Policy">🔐 Privacy Policy</a>
                </div>
                <div class="menus-button">
                    <a href id="contact us">📞 Contact Us</a>
                </div>
            </div>
        </div>



    </headertop>


    <header>
        <div class="logo">WheelsonLease</div>
        <div class="dropdown">
            <div class="select">
                <span class="selected">Kochi</span>
                <div class="caret"></div>
            </div>
            <ul class="menu">
                <li>Malappuram</li>
                <li>Kozhikode</li>
                <li>Trivandrum</li>
                <li class="active">Kochi</li>
                <li>Ponnani</li>
            </ul>
        </div>
        <div class="search-bar" id="searchBar">
            <input type="text" placeholder="Search for Cars and Bikes for Rents, Lease and more..." >
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>


        <div class="login-register">
            <a href="login" class="login-box">
                <div>Login</div>
            </a>
            <a href="registration" class="register-box">
                <div>Register</div>
            </a>
        </div>


    </header>


    <headertwo>


        <div class="categories">ALL CATEGORIES</div>
        <div class="categoriesextra">
            <a href="">Cars for rent</a>
            <a href="">Bikes for rent</a>
            <a href="">Cars for lease</a>
            <a href="">Bikes for lease</a>
        </div>

    </div>
        <div class="categoriesextras">
            <a href="{{ route('makearent') }}">Make Vehicle Rent</a>
            <a href="">make vehicle Lease</a>
        </div>


        <div class="login-register">
            <a href="login" class="login-box">
                <div>Login</div>
            </a>
            <a href="registration" class="register-box">
                <div>Register</div>
            </a>
        </div>

    </headertwo>














    <!-- JavaScript for the responsive dropdown -->
    <script>
        const categories = document.querySelector('.categories');
        const categoriesExtras = document.querySelector('.categoriesextra');

        categories.addEventListener('click', () => {
            categories.classList.toggle('active');
        });










        document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll('.dropdown');
    const selectedOption = getSelectedOption();

    // Set the initial selected option
    document.querySelector('.selected').textContent = selectedOption;





    dropdowns.forEach(dropdown => {
        const select = dropdown.querySelector('.select');
        const caret = dropdown.querySelector('.caret');
        const menu = dropdown.querySelector('.menu');
        const options = dropdown.querySelectorAll('.menu li');
        const selected = dropdown.querySelector('.selected');

        // Set the initial selected option
        selected.innerText = selectedOption;

        select.addEventListener('click', () => {
            select.classList.toggle('select-clicked');
            caret.classList.toggle('caret-rotate');
            menu.classList.toggle('menu-open');
        });










        document.addEventListener('click', (event) => {
            if (!dropdown.contains(event.target)) {
                select.classList.remove('select-clicked');
                caret.classList.remove('caret-rotate');
                menu.classList.remove('menu-open');
            }
        });
    document.addEventListener('click', (event) => {
        if (!categories.contains(event.target) && !categoriesExtras.contains(event.target)) {
            categories.classList.remove('active');
            categoriesExtras.classList.remove('show');
        }
    });










        options.forEach(option => {
            option.addEventListener('click', () => {
                selected.innerText = option.innerText;
                select.classList.remove('select-clicked');
                caret.classList.remove('caret-rotate');
                menu.classList.remove('menu-open');
                options.forEach(opt => {
                    opt.classList.remove('active');
                });
                option.classList.add('active');

                // Store the selected option in localStorage
                localStorage.setItem('selectedOption', option.innerText);
            });
        });
    });
});

// Function to get the selected option from localStorage
function getSelectedOption() {
    return localStorage.getItem('selectedOption') || 'Kochi';
}













function updatePlaceholder() {
    var searchBar = document.getElementById("searchBar");
    var input = searchBar.querySelector("input");

    if (window.innerWidth >= 955) {
        input.placeholder = "Search for Cars and Bikes for Rents, Lease and more...";
    } else if (window.innerWidth < 500) {
        input.placeholder = "Search for Rents, lease and more...";
    } else {
        input.placeholder = "Search for wheels for Rents, Lease and more...";
    }
}

// Run the function on page load and when the window size changes
window.onload = updatePlaceholder;
window.onresize = updatePlaceholder;





































































































const menuIcon = document.getElementById('menus-icon');
        const menu = document.getElementById('menus');
        const loginButton = document.getElementById('login-button');
        const registerButton = document.getElementById('register-button');
        const bar1 = document.getElementById('bar1');
        const bar2 = document.getElementById('bar2');
        const bar3 = document.getElementById('bar3');

        let isMenuOpen = false;

        menuIcon.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;

            if (isMenuOpen) {
                menu.style.right  = '0';
                // Change the icon to a close button with a cross
                bar1.style.transform = 'rotate(45deg)';
                bar1.style.position = 'absolute';
                bar1.style.top = '15px';
                bar3.style.transform = 'rotate(-45deg)';
                bar3.style.position = 'absolute';
                bar3.style.top = '15px';
                bar2.style.opacity = '0';
            } else {
                menu.style.right = '-100%';
                // Change the close button back to a hamburger icon
                bar1.style.transform = 'rotate(0deg)';
                bar1.style.position = 'static';
                bar1.style.top = '0';
                bar3.style.transform = 'rotate(0deg)';
                bar3.style.position = 'static';
                bar3.style.top = '0';
                bar2.style.opacity = '1';
            }
        });
















    </script>
</body>
</html>

