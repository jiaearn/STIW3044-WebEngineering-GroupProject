// JavaScript Document
         $(function () {
            $("#threeline").load("../html/threeline.php");
            $("#adminnavbar").load("../html/adminnavi.php");
        });

        function toggleNav() {
            document.querySelector(".navbar").classList.toggle("navbar--open")
            document.querySelector(".threeline").classList.toggle("threeline--move")
            document.querySelector(".asia").classList.toggle("asia--move")
            document.querySelector(".topu").classList.toggle("topu--move")
            document.querySelector(".discover").classList.toggle("discover--move")
        }