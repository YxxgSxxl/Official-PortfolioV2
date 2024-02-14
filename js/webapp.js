import express from '/express'

// Create the server
const app = express();

// Launch the server
app.listen(5000);
console.log(app);
console.info("Server started on http://localhost:5000/");
console.info("app");