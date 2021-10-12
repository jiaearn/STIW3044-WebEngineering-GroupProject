// JavaScript Document
$(function () {
			$("#editform2").load("../html/editform2.php");
        });

		/*Open Edit Form*/
        function openEditForm2(universityID,university,facultystudentratio,internationalstudentsratio,internationalfacultyratio,academicreputation,employerreputation) {
			document.querySelector(".bgmodaleditform2").style.display = "flex";
			
			document.editform2.universityID.value = universityID;
			document.editform2.university.value = university;
	        document.editform2.facultystudentratio.value = facultystudentratio;
	        document.editform2.internationalstudentsratio.value = internationalstudentsratio;
	        document.editform2.internationalfacultyratio.value = internationalfacultyratio;
	        document.editform2.academicreputation.value = academicreputation;
	        document.editform2.employerreputation.value = employerreputation;
	        
	        document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
                
            var x=window.scrollX;
            var y=window.scrollY;
            window.onscroll=function(){window.scrollTo(x, y);};
        }

		/*Close Edit Form*/
        function closeEditForm2() {
            document.querySelector(".bgmodaleditform2").style.display = "none";
		    window.onscroll=function(){};
        }
