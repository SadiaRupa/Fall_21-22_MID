<!DOCTYPE html>
<html>
    <body>
        <h1>Search Faculty</h1>

        Search by Faculty Name: <input type="text" id ="name" onkeyup="SearchName()"><br><br>

        Search by Ressearch Interest: <input type="text" id ="interst"  onkeyup=SearchInterest()><br><br>

        Search by Designation: 
        <select id="designation">
            <option value="Lecturer">Lecturer</option>
            <option value="Assistant professor">Assistant professor</option>
            <option value="Professor">Professor</option>
        </select><br><br>
        
        <button id="submit"> Submit</button>

        <script src="../js/myjs.js">

</body>
</html>