/*Cookie Color Script*/

function changeCookie() {

    //creating the 3 random values for rgb coloring
    var x = Math.floor(Math.random()*256);
    var y = Math.floor(Math.random()*256);
    var z = Math.floor(Math.random()*256);

    //creating the format of the rgb coloring
    var color = "rgb(" + x + "," + y + "," + z +")";
    
    //logs the color onto the console when button is clicked
    console.log(color);

    //gets the cookie element and styles the color
    document.getElementById('cookie').style.color = color;

    //styling the rgb textarea (color + text)
    document.getElementById('colorTxt').style.background = color;
    document.getElementById('colorTxt').innerHTML = color;

}

//Source: W3Schools - https://www.w3schools.com/howto/howto_js_copy_clipboard.asp
//Fn copies the color name inside the text area
//Uses the execCommand function to copy it to the clipboard
function copyColor() {

    //gets the color text element by id
    copyTxt = document.getElementById('colorTxt');

    //selects the text area
    copyTxt.select();
    
    //execution command is embedded into a try to reduce errors
    try {

        //if the value is not empty. copy the color
        if(copyTxt.value != "") {
            document.execCommand("copy");
            alert("Copied the color: " + copyTxt.value);
            console.log("Copied the color: " + copyTxt.value);
        }
        
        //if the value is empty. alert that nothing has been copied
        else if (copyTxt.value == "") {
            alert("Nothing has been copied.");
        }
    }

    //catches the error if it is unsuccessful
    catch (e) {
        alert("Copy Unsuccessful!");
        console.log("RGB color text was not copied");
    }
}
