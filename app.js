const express = require('express');
const bodyParser = require('body-parser');
const connection = require('./db');

const app = express();
const port = process.env.PORT || 4000;

app.use(bodyParser.json());

app.get('/login', (req, res) => {
  const query = 'SELECT * FROM users';
  connection.query(query, (err, results) => {
    if (err) {
      console.error('Error fetching data from database:', err);
      res.status(500).send('Internal Server Error');
    } else {
      res.json(results);
    }
  });
});

//api register
app.post('/register', (req, res) => {
    const { name, email, password } = req.body;
    const query = 'INSERT INTO users (name, email,password) VALUES (?, ?,?)';
    connection.query(query, [name, email,password], (err, results) => {
      if (err) {
        console.error('Error inserting user:', err.stack);
        res.status(500).send('Error inserting user');
        return;
      }
      res.status(201).send('user added successfully');
    });
  });

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});