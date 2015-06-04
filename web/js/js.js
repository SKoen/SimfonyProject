function showhideanswers(){
    if(document.getElementById('postanswer').style.display == 'none'){
        document.getElementById('postanswer').style.display = 'block';
        document.getElementById('showhidebutton').innerText = 'Hide';
    }
    else {
        document.getElementById('postanswer').style.display = 'none';
        document.getElementById('showhidebutton').innerText = 'Write Answer';
    }
}

function showInfoMessage(msg) {
    noty({
            text: msg,
            type: 'info',
            layout: 'topCenter',
            timeout: 5000}
    );
}

function showErrorMessage(msg) {
    noty({
            text: msg,
            type: 'error',
            layout: 'topCenter',
            timeout: 5000}
    );
}