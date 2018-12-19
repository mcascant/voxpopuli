/**
 * Created by developer on 12/13/18.
 */
let clicks = 0;
function click(clicks){
        clicks += 1;
        console.log("YEAH");
        let element = document.querySelector("#" + name);
        element.querySelector("#valueCount").innerHTML = clicks;
};