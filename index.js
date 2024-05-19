const express = require('express');
const app = express();

app.get('/', (req, res) => {
  res.send('Hello from App1 - Revised!');
});

const port = process.env.PORT || 8080;
app.listen(port, () => {
  console.log(`App1 listening on port ${port}`);
});