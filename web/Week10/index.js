var express = require("express");

var app = express();

app.set('port', (process.env.PORT || 5000));

app.use(express.static(__dirname + '/public'));
    
// views is directory for all template files
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

app.get('/letter', handleLetter);

app.listen(app.get('port'), function() {
  console.log('Austins Node app is running on port', app.get('port'));
});

function handleLetter(request, response) {
	var letterType = request.query.letter;
    var weight = request.query.weight;
    var cost = 0;
    if(letterType == "Letters (Stamped)") {
        if(weight <= 1) { cost = 0.5;}
        else if(weight <= 2) { cost = 0.71;}
        else if(weight <= 3) { cost = 0.92;}
        else if(weight <= 3.5){ cost = 1.13;}
        else { letterType="Large Envelopes (Flats)";}
    }
    if(letterType == "Letters (Metered)") {
        if(weight <= 1) { cost = 0.47;}
        else if(weight <= 2) { cost = 0.68;}
        else if(weight <= 3) { cost = 0.89;}
        else if(weight <= 3.5){ cost = 1.10;}
        else { letterType="Large Envelopes (Flats)";}
    }   
    if(letterType == "Large Envelopes (Flats)") {
        if(weight <= 1) { cost = 1;}
        else if(weight <= 2) { cost = 1.21;}
        else if(weight <= 3) { cost = 1.42;}
        else if(weight <= 4) { cost = 1.63;}
        else if(weight <= 5) { cost = 1.84;}
        else if(weight <= 6) { cost = 2.05;}
        else if(weight <= 7) { cost = 2.26;}
        else if(weight <= 8) { cost = 2.47;}
        else if(weight <= 9) { cost = 2.68;}
        else if(weight <= 10) { cost = 2.89;}
        else if(weight <= 11) { cost = 3.10;}
        else if(weight <= 12) { cost = 3.31;}
        else {cost = 3.52;}
    }
    if(letterType == "First-Class Package Service-Retail") {
        if(weight <= 1) { cost = 3.5;}
        else if(weight <= 2) { cost = 3.5;}
        else if(weight <= 3) { cost = 3.5;}
        else if(weight <= 4) { cost = 3.5;}
        else if(weight <= 5) { cost = 3.75;}
        else if(weight <= 6) { cost = 3.75;}
        else if(weight <= 7) { cost = 3.75;}
        else if(weight <= 8) { cost = 3.75;}
        else if(weight <= 9) { cost = 4.1;}
        else if(weight <= 10) { cost = 4.45;}
        else if(weight <= 11) { cost = 4.8;}
        else if(weight <= 12) { cost = 5.15;}
        else {cost = 5.5;}
    }
    
    
    var params = {cost: cost, weight: weight, letterType: letterType}
    response.render('pages/result', params);
	// TODO: Here we should check to make sure we have all the correct parameters
}


/*
app.get("/", function(req, res) {
    console.log("A request came in for /");
    
    var name = "John";
    
    res.write("<html><head><title>Welcome</title><head>");
    res.write("<body>");
    res.write("<h1>Welcome to the page, "+name+"</h1>");
    res.write("</body></html>");
    res.end();
});

app.get("/tacos", function(req, res) {   
    console.log("A request came in for /tacos");
})

//WHAT IF YOU WANT TO GET .css, images, etc.?
app.use(express.static('public'))
    //ANYTHING IN DIRECTORY: PUBLIC WILL BE INCLUDED AS WELL!
}
*/