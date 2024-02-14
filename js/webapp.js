// import '/dotenv/config';
import express from 'express';

// Create the server
const app = express();

// Launch the server
app.listen(process.env.PORT);
console.log(app);
console.info("Server started on http://localhost:5000/");
console.info("app");