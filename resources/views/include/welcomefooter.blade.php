<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .mobile-footer {
            display: flex;
            justify-content: space-between;
            background-color: #fff;
            color: #000;
            padding: 1px;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .footer-item {
            flex: 1;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-item a {
            text-decoration: none;
            color: #000;
            font-size: 15px;
        }

        .footer-item i {
            font-size: 24px;
        }











        .category-menu {
            height:calc(100%);
            display: none;
            background-color: #000000;
            padding: 10px;
            position: fixed;
            top: 37px;
            bottom: 51.8px;
            left: 0; /* Start with the menu open */
            right: 0;
            z-index: 999;
            flex-wrap: wrap;
            /*
            justify-content: space-around;
            align-content: center;
            */
            overflow-y: auto;
            padding-top: 1%;
            padding-bottom: 1%;
            padding-right: 5%;
            padding-left: 5%;
            transition: left 0.5s; /* Add a smooth transition effect for the left property */
            animation-name: slide-in; /* Add animation */
            animation-duration: 0.5s; /* Set animation duration */
            padding-bottom: 30%;
        }


        @keyframes slide-in {
            from {
                left: -100%;
            }
            to {
                left: 0;
            }
        }

        .category-menu a {
            width: 48%;
            margin: 5px;
            text-align: center;
            font-size: 22px;
            color: #010101;
            background-color: #ffffff;
            padding: 2px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 1%;
        }

        .category-menu a i {
            font-size: 24px;
        }

        .category-menu a.custom-link {
    background-color: #d0f65f; /* Change the color to your desired background color */
}










p
    {
      font-size: 15px;
      color: red;
    }











.sell-menu {
    height:calc(100%);
            display: none;
            background-color: #20283e;
            padding: 10px;
            position: fixed;
            top: 37px;
            bottom: 51.8px;
            left: 0; /* Start with the menu open */
            right: 0;
            z-index: 999;
            flex-wrap: wrap;

             /*
            justify-content: space-around;
            align-content: center;
            */
            overflow-y: auto;
            padding-top: 10%;
            padding-bottom: 10%;
            padding-right: 5%;
            padding-left: 5%;
            transition: left 0.5s; /* Add a smooth transition effect for the left property */
            animation-name: slide-out; /* Add animation */
            animation-duration: 0.5s; /* Set animation duration */
            padding-bottom: 45%;
        }








        @keyframes slide-out {
            from {
                right: -100%;
            }
            to {
                left: 0;
            }
        }







        .sell-menu a {
            width: 48%;
            margin: 10px;
            text-align: center;
            font-size: 20px;
            color: #010101;
            background-color: #ffffff;
            padding: 1px;
            border-radius: 5px;
            text-decoration: none;
            padding-top: 1.2cm;
            padding-bottom: 1cm;
            margin-top: 20%;
        }

        .sell-menu a i {
            font-size: 24px;
        }

        .sell-menu a.custom-links {
    background-color: #d0f65f; /* Change the color to your desired background color */
}



.centered-block {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%; /* Adjust the width as needed */
}










        .mobile-footer {
            display: none;
        }

        @media screen and (max-width: 645px) {
            .mobile-footer {
                display: flex;
            }







            .category-menu.active {
                display: flex;
                flex-direction: row;
                align-items: stretch;
            }

            .category-menu a {
                width: 100%;
            }








            .sell-menu.active {
                display: flex;
                flex-direction: row;
                align-items: stretch;
            }

            .sell-menu a {
                width: 100%;
            }





        }
    </style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <div class="mobile-footer">
        <div class="footer-item" id="categories-link">
            <a href="#"><i class="fas fa-th-list"></i></a>
            <a href="#">Categories</a>
        </div>
        <div class="footer-item">
            <a href="{{ route('firstpage') }}">
                <i class="fas fa-home"></i>
            </a>
            <a href="{{ route('firstpage') }}">Home</a>
        </div>
        <div class="footer-item">
            <a href="#"><i class="fas fa-briefcase"></i></a>
            <a href="#">My Ads</a>
        </div>
        <div class="footer-item"  id="selling-link">
            <a href="#"><i class="fas fa-tag"></i></a>
            <a href="#">Sell</a>
        </div>
    </div>







    <div class="category-menu" id="categories-menu">
        <a href="#">Cars for rent <i class="fas fa-car-side"> </i>
            <p>Rent Cars With Best Offers!</P></a>
        <a href="#">Bikes for rent <i class="fas fa-motorcycle"></i>
            <p>Rent Bikes With Best Offers!</P></a>
        <a href="#">Cars for lease <i class="fas fa-car"></i>
            <p>Lease your favourite car!</P></a>
        <a href="#">Bikes for lease <i class="fas fa-motorcycle"></i>
            <p>Lease your favourite Bike!</P></a>
        <a href="#" class="custom-link">Make your vehicle lease
            <p>Earn by renting your vehicle $</P></a>
        <a href="#"  class="custom-link">Make your vehicle rent
            <p>Earn by Leasing your vehicle $</P>
        </a>
    </div>







    <div class="sell-menu" id="selling-menu">
        <div class="centered-block">
            <a href="#" class="custom-link">Make your vehicle Rent
                <p>Earn by Renting your vehicle $</p>
            </a>
        </div>
        <div class="centered-block">
            <a href="#" class="custom-link">Make your vehicle Lease
                <p>Earn by Leasing your vehicle $</p>
            </a>
        </div>
    </div>







    <script>






        const categoriesLink = document.getElementById('categories-link');
        const categoriesMenu = document.getElementById('categories-menu');

        categoriesLink.addEventListener('click', function() {
            categoriesMenu.classList.toggle('active');
        });






        const sellingLink = document.getElementById('selling-link');
        const sellingMenu = document.getElementById('selling-menu');

        sellingLink.addEventListener('click', function() {
            sellingMenu.classList.toggle('active');
        });







    </script>
</body>
</html>

