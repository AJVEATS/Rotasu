function saveAMEntry(mood) {
    document.cookie = "amEntry=" + mood + ";";
    console.log(mood);
}

function savePMEntry(mood) {
    document.cookie = "pmEntry=" + mood + ";";
    console.log(mood);
}