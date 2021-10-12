// JavaScript Document
$(function () {
			$("#editform1").load("../html/editform1.php");
        });

		/*Open Edit Form*/
        function openEditForm1(year,universityID,rank,university,country,score) {
			document.querySelector(".bgmodaleditform1").style.display = "flex";

	            document.editform1.universityID.value = universityID;
	            document.editform1.year.value = year;
	            document.editform1.rank.value = rank;
	            document.editform1.university.value = university;
	            document.editform1.country.value = country;
	            document.editform1.score.value = score;
	            
	            document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
                
                var x=window.scrollX;
                var y=window.scrollY;
                window.onscroll=function(){window.scrollTo(x, y);};
	         
        }

		/*Close Edit Form*/
        function closeEditForm1() {
            document.querySelector(".bgmodaleditform1").style.display = "none";
            window.onscroll=function(){};
        }