var express = require("express");

var app = express();

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