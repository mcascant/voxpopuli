/**
 * Created by developer on 12/13/18.
 */
function voteCall(postId) {
    console.log('STEP')
    let xhttp = new XMLHttpRequest();
    let url = '/vote/create/' + postId;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            rsp = JSON.parse(this.responseText)
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}