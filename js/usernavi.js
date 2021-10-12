// JavaScript Document
         $(function () {
            $("#threeline").load("../html/threeline.php");
            $("#usernavbar").load("../html/usernavi.php");
            $("#usernavbar2").load("../html/usernavi2.php");
        });

        function toggleNav() {
            document.querySelector(".navbar").classList.toggle("navbar--open")
            document.querySelector(".threeline").classList.toggle("threeline--move")
            document.querySelector(".asia").classList.toggle("asia--move")
            document.querySelector(".topu").classList.toggle("topu--move")
            document.querySelector(".discover").classList.toggle("discover--move")
        }
        
        function checkLogin(){
         alert("Please log in an account to get further information."); 
    }