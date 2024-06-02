const express = require('express');
const bodyParser = require('body-parser');
const connection = require('./db');

const app = express();
const port = process.env.PORT || 8080;

app.get('/', (req, res) => {
  res.send('coba');
});


app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
