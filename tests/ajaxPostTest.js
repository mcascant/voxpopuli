/**
 * Created by developer on 12/11/18.
 */
let baseUrl = 'http://localhost:9999';
let endpoint = '/post/create';
let title = 'Title Test with Ajax';
let text = 'This is the text for the call ajax';

funtion call () {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    };
    xhttp.open("POST", baseUrl + endpoint, true);
    xhttp.send(`title=${title}&text=${text}`);
}

call()


