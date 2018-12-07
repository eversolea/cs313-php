const url = require('url');
var http = require('http');
http.createServer(callback).listen(8888);

function callback(req, res) {
  var targetURL = url.parse(req.url).pathname;
  if(targetURL == "/home")
  {
   res.writeHead(200, {'Content-Type': 'text/plain'});
   res.write('Welcome to the Homepage!');
  }
  else if(targetURL == "/getData")
  {
    res.writeHead(200, {'Content-Type': 'application/json'});
    res.write(JSON.stringify({"name":"Austin Eversole","class":"cs313"}));
  }
  else
  {
    res.writeHead(404, {'Content-Type': 'text/plain'});
    res.write('Page not Found');
  }
  res.end();
}