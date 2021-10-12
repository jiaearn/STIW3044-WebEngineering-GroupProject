<!doctype html>

    <div class="bgmodaleditform2">
        <div class="modal-contenteditform2">

            <div class="closeeditform2"><span class="material-icons" onclick="closeEditForm2()">close</span></div>
            <div class="editform2icon"><img src="../images/Asia Top u.png" alt="" width="150" height="150"></div>

            <form name="editform2" action="../html/editpage2.php"
                method="POST">
                <!--Text Field Container-->
                <div class="containereditform2">
                    <!--Header-->
                    <h2 align="center">Rankings Indicator</h2>
                    <!--University ID-->
                    <div class="roweditform1">
                        <input type="hidden" class="inputTextEditForm2" name="universityID"  required>
                    </div>
                    <!--University-->
                    <div class="roweditform2"><span>University:</span>
                        <input type="text" class="inputTextName" placeholder="University" name="university" readonly
                            required>
                    </div>
					<!--Faculty Student Ratio-->
                    <div class="roweditform2"><span>Faculty Student Ratio:</span>
                        <input type="text" class="inputTextEditForm2" placeholder="Faculty Student Ratio" name="facultystudentratio" required>
                    </div>
                    <!--International Students Ratio-->
                    <div class="roweditform2"><span>International Students Ratio:</span>
                        <input type="text" class="inputTextEditForm2" placeholder="International Students Ratio" name="internationalstudentsratio" required>
                    </div>
                    <!--International Faculty Ratio-->
                    <div class="roweditform2"><span>International Faculty Ratio:</span>
                        <input type="text" class="inputTextEditForm2" placeholder="International Faculty Ratio"
                            name="internationalfacultyratio" required>
                    </div>
					<!--Academic Reputation-->
                    <div class="roweditform2"><span>Academic Reputation:</span>
                        <input type="text" class="inputTextEditForm2" placeholder="Academic Reputation"
                            name="academicreputation" required>
                    </div>
					<!--Employer Reputation-->
                    <div class="roweditform2"><span>Employer Reputation:</span>
                        <input type="text" class="inputTextEditForm2" placeholder="Employer Reputation"
                            name="employerreputation" required>
                    </div>
                    <!--Button-->
                    <div class="roweditform2" align="center">
                        <input type="submit" class="updateeditform2" name="updateeditform2" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </div>
