const express = require('express');
const bodyParser = require('body-parser');
const connection = require('./db');

const app = express();
const port = process.env.PORT || 6000;

app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'index.html'));
});

// Menangani semua permintaan PHP di dalam folder 'auth'
app.use('/process', expressPhp.cgi(path.join(__dirname, 'process')));

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});