<!doctype html>


    <div class="bgmodaleditform1">
        <div class="modal-contenteditform1">

            <div class="closeeditform1"><span class="material-icons" onclick="closeEditForm1()">close</span></div>
            <div class="editform1icon"><img src="../images/Asia Top u.png" alt="" width="150" height="150"></div>

            <form name="editform1" action="../html/editpage1.php"
                method="POST">
                <!--Text Field Container-->
                <div class="containereditform1">
                    <!--Header-->
                    <h2 align="center">University Rankings</h2>
                    <!--University ID-->
                    <div class="roweditform1">
                        <input type="hidden" class="inputTextEditForm1" name="universityID"  required>
                    </div>
                    <!--Year-->
                    <div class="roweditform1"><span>Year:</span>
                        <input type="text" class="inputTextEditForm1" placeholder="Year" name="year"  required>
                    </div>
                    <!--Rank-->
                    <div class="roweditform1"><span>Rank:</span>
                        <input type="text" class="inputTextEditForm1" placeholder="Rank" name="rank"  required>
                    </div>
                    <!--University-->
                    <div class="roweditform1"><span>University:</span>
                        <input type="text" class="inputTextEditForm1" placeholder="University" name="university" 
                            required>
                    </div>
                    <!--Country-->
                    <div class="roweditform1"><span>Country:</span>
                        <input type="text" class="inputTextEditForm1" placeholder="Country" name="country" required>
                    </div>
                    <!--Overall Score-->
                    <div class="roweditform1"><span>Overall Score:</span>
                        <input type="text" class="inputTextEditForm1" placeholder="Overall Score"
                            name="score" required>
                    </div>
                    <!--Button-->
                    <div class="roweditform1" align="center">
                        <input type="submit" class="updateeditform1" name="updateeditform1" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </div>