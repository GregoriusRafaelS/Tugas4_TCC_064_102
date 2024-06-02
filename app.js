const express = require('express');
const bodyParser = require('body-parser');
const connection = require('./db');

const app = express();
const port = process.env.PORT || 5000;

app.use(bodyParser.json());

app.get('/data', (req, res) => {
  const query = 'SELECT * FROM data';
  connection.query(query, (err, results) => {
    if (err) {
      console.error('Error fetching data from database:', err);
      res.status(500).send('Internal Server Error');
    } else {
      res.json(results);
    }
  });
});

app.post('/data', (req, res) => {
    const { name, value, type } = req.body;
    const query = 'INSERT INTO data (name, value, type) VALUES (?, ?,?)';
    connection.query(query, [name, value, type], (err, results) => {
      if (err) {
        console.error('Error inserting data:', err.stack);
        res.status(500).send('Error inserting data');
        return;
      }
      res.status(201).send('data added successfully');
    });
  });

  app.delete('/data/:id', (req, res) => {
    const { id } = req.params;
    const query = 'DELETE FROM data WHERE id = ?';
    connection.query(query, [id], (err, results) => {
      if (err) {
        console.error('Error deleting data:', err.stack);
        res.status(500).send('Error deleting data');
        return;
      }
      if (results.affectedRows === 0) {
        res.status(404).send('Data not found');
        return;
      }
      res.send('Data deleted successfully');
    });
  });

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});