var express = require('express');
var app = express();

app.get('/', function (req, res) {
  res.send("<h1>hello world</h1>");
});

app.listen(8080, function () {
  console.log('Example app listening on port 8080!');
  //call this app from https://<workspace name>-<user name>.c9users.io
});